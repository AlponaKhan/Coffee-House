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
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $query ="SELECT * FROM cfe_user WHERE u_email ='$email'";
    $res = mysqli_query($link,$query);

    $data = mysqli_fetch_assoc($res);

    if($password == $data['u_password']){
        header('location:reservation.php');
    }
    else{
        // echo "vul";
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
    <h2 class="heading">Sign In Form</h2>
    <form action="" method="post">
        <table>
            <tr>
                <td style="font-size: 18px; font-weight: 500px; color: #8d4232;">Email:</td>
                <td><input type="email" name="email" placeholder="Enter Your Email" class="input"></td>
            </tr>
            <tr>
                <td style="font-size: 18px; font-weight: 500px; color: #8d4232;">Password:</td>
                <td><input type="password" name="pass" placeholder="Enter Your Password" class="input"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="" value="Sign-In" class="submit-btn"></td>
            </tr>
        </table>
        <p class="no-acc">Don't have an account? <a href="signup.php">Sign Up</a></p>
    </form>
   </div>
</body>
</html>