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
    <link rel="stylesheet" href="../css/manage_clubs.css">
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
            <a href="allot_meeting_room.php"><i class="far fa-building"></i>Meeting Room Requests</a>
            <a href=""><i class="far fa-calendar-plus"></i>Manage Calender</a>
            <a class="active" href="manage_clubs"><i class="far fa-plus-square"></i>Manage Clubs</a>
            <a href="adminprofile.php"><i class="fas fa-id-card"></i>Profile</a>
            </ul>
        </div>
    
        <div class="main_containt">
            <div class="add_members">
                <form action="">
                    <h3>Add New Club</h3>
                    <input type="text" placeholder="Club id" requird>
                    <input type="text" placeholder="Club Name" required>
                    <input type="file" placeholder="Upload Logo">
                    <h4>Add Club Authority</h4>
                    <input type="text" placeholder="First Name" required>
                    <input type="text" placeholder="Middle Name">
                    <input type="text" placeholder="Last Name" required>
                    <input type="tel" placeholder="Mobile Number" required>
                    <input type="text" placeholder="Department">
                    <input type="email" placeholder="College mail id" required>
                    <input type="password" placeholder="Set temporary Password" required><br>
                </form>    
            </div>

            <div class="remove_members">
                <form action="">
                    <h4>Remove Club Authority</h4>
                    <input type="text" placeholder="Club id" requird>
                    <input type="email" placeholder="College mail id" required>
                    <input type="text" placeholder="First Name" required>
                    <input type="text" placeholder="Last Name" required><br>
                    <button class="remove_btn">REMOVE</button>
                    <h3>Remove Club</h3>
                    <input type="text" placeholder="Club id" required>
                    <input type="text" placeholder=""><br>
                    <button class="remove_btn">REMOVE</button>
                </form>
            </div>     
        </div>
    </div>

</body>
</html>