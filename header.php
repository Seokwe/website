<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>backend</title>
    <a href="css/style.css"></a>
</head>
<body id="body">
<?php
    if (isset($_SESSION['u_id'])) {
        echo "<form action='includes/logout.php' method='POST'>
                <input type='submit' name='submit' value='Logout'>
                </form>";
    }else{
            echo"<fieldset>
            <legend>Login</legend>
            <form action='includes/login.php' method='POST'>
            <label >Username</label>
            <input type='text' name='uid' placeholder='Username'>
            <label>Password</label>
            <input type='password' name='pwd' placeholder='password'>
            <input type='submit' name='submit' value='Submit'>
        
        </form>
        
        <select onchange='ChangeBackground(this)'>
           <option value='red'>red</option>
           <option value='blue'>blue</option>
           <option value='silver'>silver</option>
           <option value='black'>orange</option>

        </select>
        </fieldset><a href='signin.php'>Signup</a>

    ";

    }


?>
