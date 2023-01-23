<?php
include('includes/config.php');
include('includes/database.php');
include('includes/functions.php');

if(isset($_POST['email']))
{

    $query = 'SELECT *
    FROM users
    WHERE email = "'.$_POST['email'].'"
    AND password = "'.md5($_POST['password']).'"
    AND active = "Yes"
    LIMIT 1';
    $result = mysqli_query($connect, $query);

    if(mysqli_num_rows($result))
    {
        $record = mysqli_fetch_assoc($result);

        $_SESSION['id'] = $record['id'];
        $_SESSION['email'] = $record['email'];

        header('Location: dashboard.php');
        die();
    }
}

include('includes/header.php')
?>

<form method="post" class="inlog">
<div><h3>Email:</h3>
<input type="text" name="email"></div>
<div><h3>Password:</h3>
<input type="password" name="password"></div>

<input type="submit" value="login">

</form>

<?php

?>
