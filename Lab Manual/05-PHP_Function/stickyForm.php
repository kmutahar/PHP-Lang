<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sticky Form</title>
<style>
.error
{color:red}
</style>
</head>
<body>
<?php
if(!isset($_POST['submit']))
{
    printForm()
}
else 
{
    $flag = 0;
    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $age = trim($_POST['age']);
    if(! ctype_alpha($fname) || strlen($fname) < 3)
    {
        echo '<p class="error">&#9940; Please enter a valid first name!</p>';
        $flag++;
    }
    if(! ctype_alpha($lname) || strlen($lname) < 3)
    {
        echo '<p class="error">&#9940; Please enter a valid last name!</p>';
        $flag++; 
    }
    if(! is_numeric($age) || ($age < 18 || $age >99))
    {
        echo '<p class="error">&#9940; Please enter the age using numbers between 18 and 99</p>';
        $flag++; 
    }
    if($flag > 0)
        printForm($fname, $lname, &age);
    else
    {
        echo"Hi <i>$fname $lname</i>, it's very nice meeting you.<br/>
        What have you achieved in your $age years so far? &#9749;";
    }
}
?>
</body>
</html>
<?php
function printForm ($flname = "" , $lname = "" , $age = "")
{
?>
<form action="" method="post">
    First Name: <input type="text" name="fname" value="<?=$fname?>"/><br/>
    Last Name: <input type="text" name="lname" value="<?=$lname?>"/><br/>
    Age: <input type="text" name="age" value="<?=$age?>"/><br/>
    <button type="submit" name="submit">Send</button>
</form>
<?php
}
?>