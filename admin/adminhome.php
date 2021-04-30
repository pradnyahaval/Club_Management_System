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
    <link rel="stylesheet" href="../css/club_list.css">
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>
    <title>Document</title>
</head>

<body>
    <div class="header">
        Club Management System
        <div class="header-right">
            <a class="#active" href="#contact"><img src="../images/message_icon.svg" alt="messages"></a>
            <a href="../logout.php" ><img src="../images/logout_icon.svg" alt="logout"></a>
        </div>
    </div>
    
    <div class="wrapper">
        <div class="sidebar">
            <h3><?php echo $_SESSION['first_name']?> &nbsp; <?php echo $_SESSION['last_name'] ?></h3>
            <h3>Admin</h3>
            <a class="active" href="adminhome.php"><i class="fas fa-users"></i>All Clubs</a>
            <a href="allot_meeting_room.php"><i class="far fa-building"></i>Meeting Room Requests</a>
            <a href=""><i class="far fa-calendar-plus"></i>Manage Calender</a>
            <a href="manage_clubs.php"><i class="far fa-plus-square"></i>Manage Clubs</a>
            <a href="adminprofile.php"><i class="fas fa-id-card"></i>Profile</a>
            </ul>
        </div>
    
        <div class="main_containt">
            <form class="club_list" action="">
                <h3>All Clubs</h3>
                <table>
                    <tr>
                        <th>Logo</th>
                        <th>Club Name</th>
                        <th>Club Authority</th>
                        <th>Club Members</th>
                    </tr>
                    <tr>
                        <td><img src="../images/science_club.jfif" width="200px" alt=""></td>
                        <td>Science Club</td>
                        <td>
                            <ul>
                                <li>Sneha Sharma</li>
                                <li>sneha@coep.ac.in</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>Pooja Patil</li>
                                <li>pooja@coep.ac.in</li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

</body>

<?php 
   


?>


</html>