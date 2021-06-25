<?php

  include "../db_conn.php"
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8" />
    <title>Barangay Management System</title>
    <link rel="icon" type="image/x-icon" href="../img/icons/north-logo.ico" />
    <link rel="stylesheet" href="../css/style.css" />
    <script src="../js/nav-time-date.js"></script>
</head>

<body>
    <main>



        <section>
            <div class="header">
                <h1>Officials Profile</h1>
                <?php 
            include "../db_conn.php";
            $id = $_GET['id'];
            $squery =  mysqli_query($conn,"SELECT * FROM `officials` WHERE id = $id");
            while ($row = mysqli_fetch_array($squery))
            {
            ?>
                <a href="view-officials.php?id=<?php echo $_GET['id']; ?>">
                    <button class="back-btn">Back</button>
                </a>
            </div>
            <div class="content">


                <div class="resident-profile">


                    <form method="post" enctype="multipart/form-data" action="update_official.php">
                </div>



                <div class="drag-area" id="pic">
                    <img src="image/<?php echo basename($row['img_url']);?>" alt="">
                    <input type="hidden" name="orig_pic" value="<?php echo basename($row['img_url']);?>">
                </div>

                <div class="change-pic">
                <!-- upload image -->
                <input name="my_img" type="file">
                <br>
                <!-- take picture -->
                <input type="button" id="myBtn" value="Take a Picture">
                <input type="hidden" id="abc" name="cam" value="">
                <?php include('modal_webcam.php'); ?>
                </div>


                <div class="infos">




                    <div class="add-info">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    </div>

                    <div class="add-info">
                    <?php //check if barangay captian already exist
            $squery = mysqli_query($conn, "select COUNT(*) as cnt from officials where off_position = 'Barangay Captain'");
            $count = mysqli_fetch_array($squery);
            $cnt = $count['cnt'];   
            ?>
                        <h5>Position:</h5>
                        <select name="position">
                            <option value="<?php echo $row['off_position']; ?>" selected hidden>
                                <?php echo $row['off_position']; ?></option>
                                <?php  if($cnt == 0){?>
                                <option value="Barangay Captain">
                                Barangay Captain
                                <?php }?>
                            <option value="Barangay Kagawad">Barangay Kagawad</option>
                            <option value="SK Chairperson">SK Chairperson</option>
                            <option value="Barangay Secretary">Barangay Secretary</option>
                            <option value="Barangay Treasurer">Barangay Treasurer</option>
                        </select>
                    </div>

                    <div class="add-info">
                        <h5>Name:</h5>
                        <input type="text" name="name" value="<?php echo $row['off_name']; ?>">
                    </div>

                    <div class="add-info">
                        <h5>Contact number:</h5>
                        <input type="text" name="contact" value="<?php echo $row['off_contact']; ?>">
                    </div>

                    <div class="add-info">
                        <h5>Address:</h5>
                        <input type="text" name="address" value="<?php echo $row['off_address']; ?>">
                    </div>

                    <div class="add-info">
                        <h5>Start of Term:</h5>
                        <input type="date" name="start" value="<?php echo $row['termStart']; ?>">
                    </div>

                    <div class="add-info">
                        <h5>End of Term:</h5>
                        <input type="date" name="end" value="<?php echo $row['termEnd']; ?>">
                    </div>



                    <button class="save-btn" name="btn_update" onClick="updatepicture()">Save</button>
                </div>
                </form>
                <?php 
            } 
            ?>
            </div>
            </div>
        </section>
        </div>
    </main>
    <script src="script.js"></script>
</body>

</html>