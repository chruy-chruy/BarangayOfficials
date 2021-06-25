<?php
include "../db_conn.php";
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
                <h1>Barangay Officials Profile</h1>
                <a href="../index.php">
                    <button class="back-btn">Back</button>
                </a>
            </div>
            <div class="content">


                <div class="resident-profile">

                    <div class="infos">


                        <?php
                        //view selected officials
                $id= $_GET['id'];
                $squery =  mysqli_query($conn,"select * from officials where id = $id");
                while ($row = mysqli_fetch_array($squery)){

                ?>
                        <form method="post">
                            <div class="profile-pic">
                                <img src="image/<?php echo basename($row['img_url']) ?>" alt="">
                            </div>


                            <div class="view-info">
                                <h5>Position:</h5>
                                <h6><?php echo $row['off_position'] ?></h6>
                            </div>

                            <div class="view-info">
                                <h5>Name:</h5>
                                <h6><?php echo$row['off_name']?></h6>
                            </div>

                            <div class="view-info">
                                <h5>Contact number:</h5>
                                <h6><?php echo $row['off_contact'] ?></h6>
                            </div>

                            <div class="view-info">
                                <h5>Address:</h5>
                                <h6><?php echo $row['off_address'] ?></h6>
                            </div>

                            <div class="view-info">
                                <h5>Start of Term:</h5>
                                <h6><?php echo $row['termStart'] ?></h6>
                            </div>

                            <div class="view-info">
                                <h5>End of Term:</h5>
                                <h6><?php echo $row['termEnd'] ?></h6>
                            </div>


                            <div class="view-info">
                            <!-- edit official -->
                                <a href="edit_official.php?id=<?php echo$row['id']?>">
                                    <input type="button" class="edit-btn" value="Edit">
                                </a>
                            </div>
                        </form>
                        <!-- delete official -->
                        <input type="button" class="delete-btn" id="del" value="Delete">
                        <?php include('modal.php'); ?>

                        <?php
                }
                
                ?>

                    </div>
                </div>
        </section>
        </div>
    </main>
</body>

</html>