<?php
session_start();
if (isset($_SESSION['akses'])) {
	unset($_SESSION);
	session_destroy();
	header("location:loginrapot.php");
}