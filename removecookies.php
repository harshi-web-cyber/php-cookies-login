
// --- removecookie.php ---
<html>
<body>
<h2>Cookies Cleared</h2>
<?php
setcookie("cid", "", time()-3600, "/", "", 0);
setcookie("cpass", "", time()-3600, "/", "", 0);
?>
<meta http-equiv="refresh" content="1">
</body>
</html>

