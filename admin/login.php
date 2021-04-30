
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
    <link rel="stylesheet" href="../css/login.css">
    <title>Login_admin</title>
</head>
<body>
    <div class="header">
        Club Management System
        <div class="header-right">
            <a class="active" href="Index.html">Home</a>
            <a class="#active" href="#contact">Contact</a>
            <a class="#active" href="#about">About</a>
        </div>
    </div>

    <form method="POST">
        <div class="container">
            <div class="imgcontainer">
                <img src="../images/login_icon.svg" alt="Avatar" class="avatar">
              </div>
            
              <div class="container">
                <label for="a_mail"><b>Email</b></label>
                <input type="email" placeholder="Enter college mail" id="a_mail" name="a_mail" required>
            
                <label for="a_password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" id="a_password" name="a_password" required>
                    
                <button type="submit" name="a_login">Login</button>
              </div>
        </div>
      </form>
    
    </body>

<?php
if(isset($_POST['a_login'])) {
    
    $a_mail=$_POST['a_mail'];
    $a_password=$_POST['a_password'];
    //to prevent from mysqli injection  
    $a_mail = stripcslashes($a_mail);  
    $a_password = stripcslashes($a_password);  
    $a_mail = mysqli_real_escape_string($conn, $a_mail);  
    $a_password = mysqli_real_escape_string($conn, $a_password);  

    $sql=mysqli_query($conn, "SELECT * FROM admin where email= '".$a_mail."' AND password='".$a_password."'");  //gives $sql true or false
    //$result = $sql->get_result();
    $resultRow = mysqli_fetch_array($sql);  
    $count = mysqli_num_rows($sql);  
          
    if($count == 1){  
        //$resultRow = mysqli_fetch_array($result);
        $_SESSION['email']=$a_mail;
        $_SESSION['first_name']=$resultRow[1];
        $_SESSION['last_name']=$resultRow[3];
        header('Location: ../admin/adminhome.php');
    }  
    else{  
        echo "<p> Login failed. Invalid username or password.</p>";  
    } 
   
   }
?>

</html>
