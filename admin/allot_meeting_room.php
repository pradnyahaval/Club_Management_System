<?php
    require '../db_connect.php';
    require 'verify_admin.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/allot_meeting_room.css">
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>
    <title>Document</title>
</head>

<body>
    <div class="header">
        Club Management System
        <div class="header-right">
            <a class="#active" href="#contact"><img src="../images/message_icon.svg" alt="messages"></a>
            <a class="#active" href="#"><img src="../images/logout_icon.svg" alt="logout"></a>
        </div>
    </div>
    
    <div class="wrapper">
        <div class="sidebar">
            <h3><?php echo $_SESSION['first_name']?> &nbsp; <?php echo $_SESSION['last_name'] ?></h3>
            <a href="adminhome.php"><i class="fas fa-users"></i>All Clubs</a>
            <a class="active" href="allot_meeting_room.php"><i class="far fa-building"></i>Meeting Room Requests</a>
            <a href=""><i class="far fa-calendar-plus"></i>Manage Calender</a>
            <a href="manage_clubs.php"><i class="far fa-plus-square"></i>Manage Clubs</a>
            <a href="adminprofile.php"><i class="fas fa-id-card"></i>Profile</a>
            </ul>
        </div>
    
        <div class="main_containt">
            <form class="alloted">
                <h3>Alloted Rooms for club meetings</h3>
                <table class="table1">
                    <tr>
                        <th>Room No.</th>
                        <th>Club Name</th>
                        <th>Date</th>
                        <th>Time</th>
                    </tr>
                    <tr>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                    </tr>
                </table>
            </form>
            <form class="requests" action="">
                <h3>Pending Requests</h3>
                <table class="table2">
                    <tr>
                        <th>Name</th>
                        <th>Club Name</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th></th>
                        <th></th>
                    </tr>
                   <tr>
                       <td>asd</td>
                       <td>asd</td>
                       <td>asd</td>
                       <td>asd</td>
                       <td>asd</td>
                       <td>asd</td>
                       <td><button class="con_btn"><b>conform</button></td>
                       <td><button class="re_btn"><b>reject</button></td>
                   </tr>
                </table>
            </form>
        </div>
    </div>

</body>
</html>