<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/task_notice_list.css">
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>
    <title>Home</title>
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
            <a  class="active" href="notices.php"><i class="far fa-flag"></i>Notices</a>
            <a  href="task_list.php"><i class="fas fa-tasks"></i>Tasks</a>
            <a  href="create_task.php"><i class="far fa-plus-square"></i>Create Task</a>
            <a  href="add_notice.php"><i class="far fa-calendar-plus"></i>Add notice</a>
            <a  href="request_meeting_room.php"><i class="far fa-building"></i>Request Meeting Room</a>
            <a  href="manage_members.php"><i class="fas fa-users"></i>Manage members</a>
            <a  href="userprofile.php"><i class="fas fa-id-card"></i>Profile</a>     
        </div>

        <div class="main_containt">
            <form class="notice_list" action="">
                <h3>Notices</h3>
                <table>
                    <tr>
                        <th>Notice Title</th>
                        <th>Date</th>
                        <th>Description</th>   
                        <th>Delete</th>
                    </tr>
                    <tr>
                        <td>ABC</td>
                        <td>2021-04-15</td>
                        <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
                        standard dummy text ever since the 1500s</td>
                        <td><button class="delete_btn"><i class="fas fa-trash fa-2x"></i></button></td>
                    </tr>
                </table>
            </form>
        </div>
</body>
</html>