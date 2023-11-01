<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <form action="" method="post">
        <label>Username:</label>
        <input type="text" name="uname">
        <label for="">Password</label>
        <input type="text" class="form-control" name="password">
        <button name="bt1">submit</button>
    </form>
    </center>
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","student");
if(!$con)
{
    die("connection failed".mysqliconnect_error());
}
else
{
    echo("Connection Successful!!!");
}
if(isset($_POST['bt1']))
{
        $a=$_POST["uname"];
        $b=$_POST["password"];
        $in="insert into login(Loginname,Password)values('$a','$b')";
        $ins=mysqli_query($con,$in);
       echo"submitted";
       $sel="select * from login";
        $s=mysqli_query($con,$sel);
        echo("<table border='1'>");
        echo("<tr>");
        echo("<th>username</th><th>password</th></tr>");
        while($row=mysqli_fetch_assoc($s))
{
    echo("<tr><td>$row[Loginname]</td>");
    echo("<td>$row[Password]</td></tr>");
}

}

 ?>       
