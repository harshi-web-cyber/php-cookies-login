/ --- validate.php ---
<html>
<body>
<h2>Creating Cookies</h2>
<form method="post" action="setcookies.php">
<table align="center">
<tr><td colspan="2" align="center"><?php echo @$err; ?></td></tr>
<tr>
  <th>Your email</th>
  <td><input type="email" name="id" placeholder="Sample@gmail.com" value="<?php echo @$_COOKIE['cid']; ?>" required/></td>
</tr>
<tr>
  <th>Your password</th>
  <td><input type="password" placeholder="123456" name="pass" value="<?php echo @$_COOKIE['cpass']; ?>" required/></td>
</tr>
<tr>
  <th>Stay signed in</th>
  <td><input type="checkbox" name="ch"/></td>
</tr>
<tr>
  <td colspan="2" align="center"><input type="submit" name="signin" value="signin"/></td>
</tr>
</table>
</form>
</body>
</html>

