<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/task_notice.css">
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>
    <title>CreateTask</title>
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
            <a  href="userhome.php"><i class="fas fa-home"></i>Home</a>
            <a href="notices.php"><i class="far fa-flag"></i>Notices</a>
            <a  href="task_list.php"><i class="fas fa-tasks"></i>Tasks</a>
            <a  class="active" href="create_task.php"><i class="far fa-plus-square"></i>Create Task</a>
            <a  href="add_notice.php"><i class="far fa-calendar-plus"></i>Add notice</a>
            <a  href="request_meeting_room.php"><i class="far fa-building"></i>Request Meeting Room</a>
            <a  href="manage_members.php"><i class="fas fa-users"></i>Manage members</a>
            <a  href="userprofile.php"><i class="fas fa-id-card"></i>Profile</a>   
        </div>
    
        <div class="main_containt">
            <form class="create_task">
                <h3>Add New Task</h3>
                <table>
                    <tr>
                        <td><label for="">Task Title: </label></td>
                        <td><input type="text" class="task_text" name="" id=""></td>
                    </tr>
                    <tr>
                        <td><label for="">Description: </label></td>
                        <td><textarea type="text" class="task_text" name="" id="" rows="8"></textarea></td>
                    </tr>
                    <tr>
                        <td>Assigned To: </td>
                        <td></td>
                    </tr>
                </table>    
                <button class="add_btn">ADD</button>        
            </form>
        </div>
    </div>
</body>
</html>