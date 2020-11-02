<?php
session_start();
?>
<!doctype html>
<html>
<head>
<title>HH</title>
</head>
<body>
<form id="f1" action="seslog1.php" method="post" onsubmit="a()">
<input type="text" name="i1"/>
<br>
<input type="password" name="i2"/>
<br>
<input type="submit" name="s"/>
</form>
<script>
function a()
{
    localStorage.setItem("email",document.getElementById("i1").value);
    localStorage.setItem("password",document.getElementById("i2").value);
    document.getElementById("f1").submit();
}
</script>
</body>
</html>

