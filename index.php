<?php
require_once __DIR__ . '/incs/data.php';
require_once __DIR__ . '/incs/functions.php';

//if (!empty($_POST)){
//    debug($_POST);
//}
?>

<form action="incs/output.php" method="post">
    <label for="email">Email: </label>
    <input type="email" id="email" name="email"><br>

    <label for="username">Password: </label>
    <input type="text" id="user" name="password"><br>

    <label for="adres">Address: </label>
    <input type="text" id="adres" name="address"><br>

    <label for="phone">Phone: </label>
    <input type="text" id="phone" name="phone"><br>

    <label for="message">Message: </label>
    <textarea name="comment" id="comment"> </textarea> <br> <br>

    <input type="submit" VALUE="Finish registration">
</form>
