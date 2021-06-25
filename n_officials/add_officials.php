<?php
//save webcam picture
$filename =  time(). '.jpg';
$filepath = 'image/';
if(isset($_FILES['webcam'])){	
    move_uploaded_file($_FILES['webcam']['tmp_name'], $filepath.$filename);
}

if(isset($_POST['btn_save'])){

include "../db_conn.php";


    $position = $_POST['position'];
    $offname = $_POST['name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $status = $_POST['status'];

    // img
    $name = basename($_FILES['my_img']['name']);
    $temp = $_FILES['my_img']['tmp_name'];
    $imagetype = $_FILES['my_img']['type'];
    $size = $_FILES['my_img']['size'];

     $milliseconds = round(microtime(true) * 1000);
     $image = $milliseconds.'_'.$name;
     if(!empty($_POST['camera'])){
        //add to officials database if we use webcam
        $sql = "INSERT INTO `officials`(
            `off_position`,
            `off_name`,
            `off_contact`, 
            `off_address`, 
            `termStart`, 
            `termEnd`, 
            `img_url`) 
            VALUES (
                '$position',
                '$offname ',
                '$contact',
                '$address',
                '$start',
                '$end',
                '$filename')";

        mysqli_query($conn,$sql);
        header("location:../index.php");


     }
     //add to officials database if we use upload image
            if(($imagetype=="image/jpeg" || $imagetype=="image/png" || $imagetype=="image/bmp") 
            && $size<=10096000){
                    if(move_uploaded_file($temp, 'image/'.$image))
                  {
                   $txt_image = $image;

        
                $sql = "INSERT INTO `officials`(
                    `off_position`,
                    `off_name`,
                    `off_contact`, 
                    `off_address`, 
                    `termStart`, 
                    `termEnd`, 
                    `img_url`) 
                    VALUES (
                        '$position',
                        '$offname ',
                        '$contact',
                        '$address',
                        '$start',
                        '$end',
                        '$txt_image')";

                mysqli_query($conn,$sql);
                header("location:../index.php");
                 
                    }
        }
       //add to officials database if we not use webcam or image upload
        else if (empty($_POST['camera'])){

            $image= $_POST['default'];
            $sql = "INSERT INTO `officials`(
                `off_position`,
                `off_name`,
                `off_contact`, 
                `off_address`, 
                `termStart`, 
                `termEnd`, 
                `img_url`) 
                VALUES (
                    '$position',
                    '$offname ',
                    '$contact',
                    '$address',
                    '$start',
                    '$end',
                    '$image')";

            mysqli_query($conn,$sql);
            header("location:../index.php");
            
           

        }
    }


     


?>