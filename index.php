<?php
  include "db_conn.php"
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Barangay Management System</title>
    <link rel="icon" type="image/x-icon" href="img/icons/north-logo.ico" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/calendar.css" />

    <script src="js/nav-time-date.js"></script>
    <script src="js/ChartJS/Chart.js"></script>
    <script src="js/ChartJS/Chart.bundle.js"></script>
</head>

<body>
    <img id="body-img" src="img/login-logo.png" alt="logo" />

    <main>

        <!-- navigation bar -->
        <?php include('navbar.php'); ?>


        <div class="dashboard-section">
            <div class="column1">
                <div class="current-text">
                    <h1>Current Barangay Officials</h1>
                    <div>
                    <!-- add new official -->
                        <a href="n_officials/new_official.php" id='edit'>
                            <button class="edit-official-btn">
                                Add
                            </button>
                        </a>
                    </div>
                    <h2>Term Period: 2021-2024</h2>
                </div>

                <!-- read barangay captain -->
                <div class="brgycapt">
                    <?php
      $squery =  mysqli_query($conn,"select * from officials where off_position = 'Barangay Captain'");
      while ($row = mysqli_fetch_array($squery)){
      ?>
                    <a href="n_officials/view-officials.php?id=<?php echo $row['id'];?>">
                        <img src="n_officials/image/<?php echo basename($row['img_url']);?>" alt="" />
                    </a>
                    <div class="brgycapt-name">
                        <h3><span><?php echo $row['off_position'];?>: </span><?php echo $row['off_name'];?></h3>
                    </div>

                    <?php }?>
                </div>



                <div class="brgyofficials">
<!-- read  barangay Kagawad -->
                    <?php
      $squery =  mysqli_query($conn,"select * from officials where off_position = 'Barangay Kagawad'");
      while ($row = mysqli_fetch_array($squery)){
      ?>
                    <div class="brgyofficial">
                        <a href="n_officials/view-officials.php?id=<?php echo $row['id'];?>">
                            <img src="n_officials/image/<?php echo basename($row['img_url']);?>" alt="" />
                        </a>
                        <h5><?php echo $row['off_name'];?></h5>
                        <p><?php echo $row['off_position'];?></p>
                    </div>

                    <?php }?>
<!-- read SK Chairperson -->
                    <?php
      $squery =  mysqli_query($conn,"select * from officials where off_position = 'SK Chairperson'");
      while ($row = mysqli_fetch_array($squery)){
      ?>
                    <div class="brgyofficial">
                        <a href="n_officials/view-officials.php?id=<?php echo $row['id'];?>">
                            <img src="n_officials/image/<?php echo basename($row['img_url']);?>" alt="" />
                        </a>
                        <h5><?php echo $row['off_name'];?></h5>
                        <p><?php echo $row['off_position'];?></p>
                    </div>
                    <?php
        }
        ?>
<!-- read barangay Secretary -->
                    <?php
      $squery =  mysqli_query($conn,"select * from officials where off_position = 'Barangay Secretary'");
      while ($row = mysqli_fetch_array($squery)){
      ?>

                    <div class="brgyofficial">
                        <a href="n_officials/view-officials.php?id=<?php echo $row['id'];?>">
                            <img src="n_officials/image/<?php echo basename($row['img_url']);?>" alt="" />
                        </a>
                        <h5><?php echo $row['off_name'];?></h5>
                        <p><?php echo $row['off_position'];?></p>
                    </div>
                    <?php
        }
        ?>

<!-- read barangay Treasurer -->
                    <?php
      $squery =  mysqli_query($conn,"select * from officials where off_position = 'Barangay Treasurer'");
      while ($row = mysqli_fetch_array($squery)){
      ?>

                    <div class="brgyofficial">
                        <a href="n_officials/view-officials.php?id=<?php echo $row['id'];?>">
                            <img src="n_officials/image/<?php echo basename($row['img_url']);?>" alt="" />
                        </a>
                        <h5><?php echo $row['off_name'];?></h5>
                        <p><?php echo $row['off_position'];?></p>
                    </div>
                    <?php
        }
        ?>
                </div>
            </div>

            <div class="column2">
                <div class="welcome-user">
                    <h3>Welcome, Admin!</h3>
                </div>

                <div class="population">

                    <h1>Barangay Population</h1>

                    <div>

                        <div class="male-female">
                          </div>

                    </div>


                    <h1> Voters Population</h1>
                    <canvas id="dash_VotersChart"></canvas>

                    <h1> Purok Population </h1>
                    <div class="dash_prk_div">

                        <canvas id="dash_prkChart"></canvas>
                    </div>


                </div>
            </div>
        </div>
    </main>
</body>

</html>
