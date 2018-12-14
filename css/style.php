<?php
session_start();
header("Content-type: text/css");
?>
p{
	color: <?php echo $_SESSION['style']; ?>;
}

