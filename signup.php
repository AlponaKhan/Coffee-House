<?php
// value pass check
// echo '<pre>';
// print_r($_POST);

$link = mysqli_connect('localhost','root','','coffee_house');

// connection check
// if($link){
//     echo "success";
// }else{
//     echo "fail";
// }

if(!empty($_POST)){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $conpass = $_POST['conpass'];

    if($password == $conpass){
        $query = "INSERT INTO cfe_user(u_name,u_email,u_password)VALUES('$name','$email','$password')";
       $res = mysqli_query($link,$query);

       if($name && $email && $password && $conpass){
        header('location:login.php');
       }
       else{
        header('location:signup.php');
       }

    }else{
        // echo "Confirm Password doesn't Match";
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
   <div class="form">
    <h2 class="heading">Create An Account</h2>
    <form action="" method="post">
        <table>
            <tr>
                <td style="font-size: 18px; font-weight: 500px; color: #8d4232;">Name:</td>
                <td><input type="text" name="name" placeholder="Enter Your Name" class="input"></td>
            </tr>
            <tr>
                <td style="font-size: 18px; font-weight: 500px; color: #8d4232;">Email:</td>
                <td><input type="email" name="email" placeholder="Enter Your Email" class="input"></td>
            </tr>
            <tr>
                <td style="font-size: 18px; font-weight: 500px; color: #8d4232;">Password:</td>
                <td><input type="password" name="pass" placeholder="Enter Your Password" class="input"></td>
            </tr>
            <tr>
                <td style="font-size: 18px; font-weight: 500px; color: #8d4232;">Confirm Password:</td>
                <td><input type="password" name="conpass" placeholder="Confirm Your Password" class="input"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="" value="Create Account" class="submit-btn"></td>
            </tr>
        </table>
        <p class="no-acc">Already have an account? <a href="login.php">Sign In</a></p>
    </form>
   </div>
</body>
</html>