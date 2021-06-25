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
                <h1>Barangay Official Profile</h1>
                <a href="../index.php">
                    <button class="back-btn">Back</button>
                </a>
            </div>
            <div class="content">


                <div class="resident-profile">
                <form action="add_officials.php" method="post" enctype="multipart/form-data">

                    <div class="drag-area" id="pic">
                    <!-- image upload -->
                        <img class="upload-icon" src="../img/icons/upload-50 (1).png" alt="">
                        <h5>Drag and drop file here <br>or</h5>
                        <input type="hidden" name="default" value="image/default.png">
                        <input name="my_img" type="file">
                        </div >
                <div class="change-pic">
                <br>
                <!-- Webcam -->
                <input type="button" id="myBtn" value="Take a Picture">
                <input type="hidden" id="abc" name="camera" value="">
                <?php include('modal_webcam.php'); ?>
                </div>      
                        
                    <div class="infos">
                    <?php //check if barangay captian already exist
            $squery = mysqli_query($conn, "select COUNT(*) as cnt from officials where off_position = 'Barangay Captain'");
            $count = mysqli_fetch_array($squery);
            $cnt = $count['cnt'];   
            ?>
                        <div class="add-info">
                            <h5>Position:</h5>
                            <select name="position">
                                <option value="" selected hidden>--</option>
                                <?php  if($cnt == 0){?>
                                <option value="Barangay Captain">
                                Barangay Captain
                                <?php }?>
                               </option>
                                <option value="Barangay Kagawad">Barangay Kagawad</option>
                                <option value="SK Chairperson">SK Chairperson</option>
                                <option value="Barangay Secretary">Barangay Secretary</option>
                                <option value="Barangay Treasurer">Barangay Treasurer</option>
                            </select>
                        </div>

                        <div class="add-info">
                            <h5>Full Name:</h5>
                            <input type="text" name="name" required="">
                        </div>

                        <div class="add-info">
                            <h5>Contact:</h5>
                            <input type="text" name="contact" required="">
                        </div>


                        <div class="add-info">
                            <h5>Address:</h5>
                            <input type="text" name="address"required="">
                        </div>

                        <div class="add-info">
                            <h5>Start of Term:</h5>
                            <input type="date" name="start"required="">
                        </div>

                        <div class="add-info">
                            <h5>End of Term:</h5>
                            <input type="date" name="end" required="">
                        </div>
                        <button class="save-btn" name="btn_save" onClick="savepicture()">Save</button>
                    </div>

                    </form>
                </div>
            </div>
        </section>
        </div>
    </main>
    <script src="../js/script.js"></script>
</body>

</html>