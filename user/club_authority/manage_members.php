<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/manage_members.css">
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>
    <title>ManageMembers</title>
</head>

<body>
    <div class="header">
        Club Management System
        <div class="header-right">
            <a class="#active" href="#contact"><img src="../images/message_icon.svg" alt="messages"></a>
            <a class="#active" href="#about"><img src="../images/logout_icon.svg" alt="logout"></a>
        </div>
    </div>

    <div class="wrapper">
        <div class="sidebar">
            <h3>User Name</h3>
            <a href="userhome.php"><i class="fas fa-home"></i>Home</a>
            <a href="notices.php"><i class="far fa-flag"></i>Notices</a>
            <a href="task_list.php"><i class="fas fa-tasks"></i>Tasks</a>
            <a href="create_task.php"><i class="far fa-plus-square"></i>Create Task</a>
            <a href="add_notice.php"><i class="far fa-calendar-plus"></i>Add notice</a>
            <a href="request_meeting_room.php"><i class="far fa-building"></i>Request Meeting Room</a>
            <a class="active" href="manage_members.php"><i class="fas fa-users"></i>Manage members</a>
            <a href="userprofile.php"><i class="fas fa-id-card"></i>Profile</a>
        </div>

        <div class="main_containt">
            <div class="add_members">
                <form action="">
                    <h3>Add New Members</h3>
                    <input type="text" placeholder="First Name" required>
                    <input type="text" placeholder="Middle Name">
                    <input type="text" placeholder="Last Name" required>
                    <input type="tel" placeholder="Mobile Number" required>
                    <input type="text" placeholder="Department">
                    <input type="email" placeholder="College mail id" required>
                    <input type="password" placeholder="Password" required><br>
                    Select Position: 
                    <input type="radio" id="member" name="position" value="Member" required>
                    <label for="member">Member</label>
                    <input type="radio" id="head" name="position" value="Head">
                    <label for="head">Head</label>
                    <input type="radio" id="secretary" name="position" value="Secretary" disabled>
                    <label for="secretary">Secretary</label><br> 
                    <button class="add_btn">ADD</button>
                </form>    
            </div>

            <div class="remove_members">
                <form action="">
                    <h3>Remove Members</h3>
                    <input type="email" placeholder="Enter email id of member" required>
                    <input type="text" placeholder="">
                    <input type="text" placeholder=""><br>
                    <button class="remove_btn">REMOVE</button>
                </form>
            </div>     
        </div>
    </div>
</body>

</html>