
// --- setcookies.php ---
<html>
<body>
<h2>Retrieving Cookies</h2>
<form method="post" action="logout.php">
<?php
if(isset($_POST['ch']))
{
    setcookie("cid", $_POST["id"], time()+3600, "/", "", 0);
    setcookie("cpass", $_POST["pass"], time()+3600, "/", "", 0);
    echo "<script>alert('" . $_POST['id'] . "')</script>";
}
header("refresh:1");
if(isset($_COOKIE["cid"]) && isset($_COOKIE["cpass"]))
{
    echo "Hi Welcome " . $_COOKIE["cid"] . "<br/>";
?>
<input type="submit" name="logout" value="signout"/>
<?php
}
else
{
    echo "Sorry!! Cookie is not set";
}
?>
</form>
</body>
</html>
