<?php 
session_start();
if (empty($_SESSION['logged_in'])) {
	header("Location:login.php");
	exit;
}
$username = $_SESSION['username'];
?>
<htmL>
<head>
	<title>Διαχείριση Κλινικής</title>
<link rel="stylesheet" href="css.css">
</head>
<body>

<div class="nav" align="center">
<a href="giatroi.php">Γιατροί</a>
<a href="astheneis.php">Ασθενείς</a>
<a href="rantevou.php">Ραντεβού</a>
<a href="logout.php" class="logout-link"><div class="logoutb">Logout</div></a>
<div class="menu-name"><a href="menu.php"><u>Διαχείριση Κλινικής</u></a></div>
</div>
    <img src="cli1.jpg" width="100%" height="90%">
<div class="footer">
  <p>&copy;</p>
</div>

</body>
</html>