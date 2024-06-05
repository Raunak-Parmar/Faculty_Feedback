<?php
if(isset($_POST['submit'])){
    
    $response1=$_POST['response1'];
    $response2=$_POST['response2'];
    $response3=$_POST['response3'];
    $response4=$_POST['response4'];

    $host='localhost';
    $user='root';
    $pass='';
    $dbname='responses';

    $conn = mysqli_connect($host,$user,$pass,$dbname);

    $sql = "INSERT INTO student(response1,response2,response3,response4) values ('$response1','$response2','$response3','$response4')";
    mysqli_query($conn,$sql);

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<title>Feedback Form</title>
</head>
<body>

<img class="photu" src="bg.jpeg" alt="photo">
<form action="#" method="POST">
<div class="form-container">
<form id="feedback-form">
    
        <div class="form-group">
            <h1 class="heading">WELCOME TO FACULTY FEEDBACK! </h1>
            <br>
            <label for="teacher"> Type your responses:</label>
            <select id="teacher">
                <option value="option1">Options</option>
            </select>
        </div>

        <div class="form-group">
           Please Enter the name of the faculty:   <input type="text" name="name" value="" placeholder="name" size="30">
        </div>

        <div class="form-group">
            1.Punctuality in class: <br><input type="text" name="response1" value="" placeholder=" response" size="30">
        </div>

        <div class="form-group">
            2.Where the topics easy to understand:   <br> <input type="text" name="response2" value="" placeholder=" response" size="30">
        </div>

        <div class="form-group">
            3.Was the faculty interactive: <br> <input type="text" name="response3" value="" placeholder=" response" size="30">
        
        </div>

        <div class="form-group">
            4.Doubt clearing session conducted: <br> <input type="text" name="response4" value="" placeholder=" response" size="30">
        </div>

        <div class="form-group">
            <input type="submit" name="submit" value="DONE">
        </div>
    </form>   
</form>
</div>
</body>
</html>
