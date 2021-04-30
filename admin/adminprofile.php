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
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/profile.css">
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>
    <title>UserProfile</title>
</head>
<body>
    <div class="header">
        Club Management System
        <div class="header-right">
            <a class="#active" href="#contact"><img src="../images/message_icon.svg" alt="messages"></a>
            <a href="../logout.php"><img src="../images/logout_icon.svg" alt="logout"></a>
        </div>
    </div>
    
    <div class="wrapper">
        <div class="sidebar">
            <h3><?php echo $_SESSION['first_name']?> &nbsp; <?php echo $_SESSION['last_name'] ?></h3>
            <a href="adminhome.php"><i class="fas fa-users"></i>All Clubs</a>
            <a href="allot_meeting_room.php"><i class="far fa-building"></i>Meeting Room Requests</a>
            <a href=""><i class="far fa-calendar-plus"></i>Manage Calender</a>
            <a href="manage_clubs.php"><i class="far fa-plus-square"></i>Manage Clubs</a>
            <a class="active" href="adminprofile.php"><i class="fas fa-id-card"></i>Profile</a>   
        </div>


        <?php
            $receivedata = mysqli_query($conn, "SELECT * FROM admin WHERE email='".$_SESSION['email']."' LIMIT 0,1");
            if (mysqli_num_rows($receivedata) > 0)
            {
                $row = mysqli_fetch_assoc($receivedata);
                $mobile_no = $row['phone_no'];
                $password=$row['password'];
            }
            
                echo "<div class='main_containt'>";
                    echo "<form class='profile'>";
                        echo "<img src='../images/login_icon.svg' alt='profile_picture'>";
                        echo "<table>";
                            echo"<tr>";
                                    echo"<td>Name : </td>";
                                    echo"<td>".$_SESSION['first_name'], $_SESSION['last_name']."</td>";
                                echo"</tr>";
                                echo"<tr>";
                                    echo"<td>Email : </td>";
                                    echo"<td>".$_SESSION['email']."</td>";
                                echo"</tr>";
                                echo"<tr>";
                                    echo"<td> Mobile No. : </td>";
                                    echo"<td>".$mobile_no."</td>";
                                echo"</tr>";
                                echo"<tr>";
                                    echo"<td>Password : </td>";
                                    echo"<td>".$password."</td>";
                                echo"</tr>";
                            echo"</table>";
                            echo "<button class='edit_btn'>Edit</button>";
                    echo "</form>";
                echo "</div>";
            /*
                $uppercase = preg_match('@[A-Z]@', $password);
                $lowercase = preg_match('@[a-z]@', $password);
                $number    = preg_match('@[0-9]@', $password);
                $specialChars = preg_match('@[^\w]@', $password);
                
                if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
                    echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
                }else{
                    echo 'Strong password.';
                }
            */
        ?>
    
        
</body>


</html>