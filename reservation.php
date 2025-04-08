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
    $date = $_POST['date'];
    $time = $_POST['time'];

    print_r($_POST);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booked a table</title>

</head>
<style>
    body{
    background-image:url(assets/dark.jpeg);
    background-repeat: no-repeat;
    height: 100%;
    background-size: cover;
    background-position: center;
    /* opacity: 0; */
}
.form{
    padding-top: 173px;
    padding-left: 642px;
}
    .head{
        font-size: 18px;
        font-weight: bold;
        color: wheat;
    }
    .submit-btn{
    padding: 6px;
    border-radius: 6px;
    border: none;
    background-color: #8d4232;
    color: white;
    font-size: 16px;
}
.submit-btn:hover{
    background-color: #f58010;
}

</style>

<body>
<div class="form">
    <h2 class="head" style="font-size: 22px;">Make Your Reservation</h2>
<form action="/action_page.php" method="post">
  <label for="dateSelection" class="head">Select Your Date:</label>
  <input type="date" id="day" name="date">
</form>
<!-- time -->
<form action="/action_page.php" method="post">
  <label for="time" class="head">Choose Your Time:</label>
  <select name="time" id="time">

    <option value="4pm">4:00pm-5:00pm</option>
    <option value="5pm">5:00pm-6:00pm</option>
    <option value="6pm">6:00pm-7:00pm</option>
    <option value="7pm">7:00pm-8:00pm</option>
    <option value="8pm">8:00pm-9:00pm</option>
    <option value="9pm">9:00pm-10:00pm</option>
    <option value="10pm">10:00pm-11:00pm</option>
  </select>
  <br>
  <input type="submit" value="Submit" class="submit-btn">
</form>
</div>
</body>
</html>