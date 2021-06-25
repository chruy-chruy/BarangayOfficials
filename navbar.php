<!-- pag walay naka log in di kasulod sa dashboard -->
<?php

  include "db_conn.php"
?>
<nav>
    <!-- time -->
    <?php include('nav-time-date.php'); ?>


    <div class="dashboard-logo">
        <img src="img/dashboard-logo.png" alt="" />
    </div>
    <div class="links">
        <a href="index.php" class="link">
            <img src="img/icons/dashboard-48.png" alt="" />
            <h3>Dashboard</h3>
        </a>
        <a href="" class="link">
            <img src="img/icons/user-account-48.png" alt="" />
            <h3>Residents</h3>
        </a>
        <a href="" class="link">
            <img src="img/icons/file-48.png" alt="" />
            <h3>Certificates</h3>
        </a>
        <a href="" class="link">
            <img src="img/icons/commercial-48.png" alt="" />
            <h3>Announcements</h3>
        </a>
        <a href="" class="link">
            <img src="img/icons/bar-graph (1).png" alt="" />

            <h3>Reports</h3>

            <a href="" class="link" id="user">
                <img src="img/icons/users.png" alt="" />
                <h3>User</h3>
            </a>


            <a href="" class="link">
                <img src="img/icons/archive-filled-box.png" alt="" />
                <h3>Archive</h3>
            </a>


        
            <a href="" class="link">
                <img src="img/icons/exit-48.png" alt="" />
                <h3>Logout</h3>
            </a>
    </div>
</nav>