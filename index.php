<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="script.php" method="post">
        <input type="text" name="textInput" />
        <?php
			if (isset($_SESSION['err_textInput']))
			{
				echo "<div style='color: red; font-size: 14px'>".$_SESSION['err_textInput'].'</div>';
				unset($_SESSION['err_textInput']);
			}
		?>
        <input type="number" name="numericInput" />
        <button type="submit">Zatwierdź</button>
    </form>
</body>

</html>