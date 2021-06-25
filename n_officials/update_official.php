<?php
//save webcam picture
$filename =  time(). '.jpg';
$filepath = 'image/';
if(isset($_FILES['webcam'])){	
    move_uploaded_file($_FILES['webcam']['tmp_name'], $filepath.$filename);
}

if(isset($_POST['btn_update'])){
include "../db_conn.php";
$id= $_POST['id'];
$position = $_POST['position'];
$offname = $_POST['name'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$start = $_POST['start'];
$end = $_POST['end'];
$cam = $_POST['cam'];
// img
$name = basename($_FILES['my_img']['name']);
$temp = $_FILES['my_img']['tmp_name'];
$imagetype = $_FILES['my_img']['type'];
$size = $_FILES['my_img']['size'];

$milliseconds = round(microtime(true) * 1000);
$image = $milliseconds.'_'.$name;
if(!empty($cam)){
    //get id and update into officials database if we use webcam
    $sql = "UPDATE `officials` 
    SET
    `off_position`='$position',
    `off_name`='$offname',
    `off_contact`='$contact',
    `off_address`='$address',
    `termStart`='$start',
    `termEnd`='$end',
    `img_url`='$filename'
    WHERE `id` = '$id'
    ";

    mysqli_query($conn,$sql);
    header("location:view-officials.php?id=$id");
     }
         //get id and update into officials database if we use image upload
            else if(($imagetype=="image/jpeg" || $imagetype=="image/png" || $imagetype=="image/bmp") 
            && $size<=10096000){
                    if(move_uploaded_file($temp, 'image/'.$image))
                  {
                   $txt_image = $image;

        
                $sql = "UPDATE `officials` 
                SET
                `off_position`='$position',
                `off_name`='$offname',
                `off_contact`='$contact',
                `off_address`='$address',
                `termStart`='$start',
                `termEnd`='$end',
                `img_url`='$txt_image'
                WHERE `id` = '$id'
                ";

                mysqli_query($conn,$sql);
                header("location:view-officials.php?id=$id");
                 
                    }
        }
       
        
        else if(empty($cam)){
            //get id and update into officials database if we did not use image upload or webcam
            $image= $_POST['orig_pic'];
            $sql = "UPDATE `officials` 
            SET
            `off_position`='$position',
            `off_name`='$offname',
            `off_contact`='$contact',
            `off_address`='$address',
            `termStart`='$start',
            `termEnd`='$end',
            `img_url`='$image'
            WHERE `id` = '$id'
            ";
        
            mysqli_query($conn,$sql);
            header("location:view-officials.php?id=$id");
             }
    }
        
    
    

?>