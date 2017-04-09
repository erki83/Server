<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Kaheksas kodutöö</title>
	<?php 
		$myurl=$_SERVER['PHP_SELF'];
		$bg_col="#fff"; // vaikimisi valge
		if (isset($_POST['bg_color'])  && $_POST['bg_color']!="") {
			$bg_col=htmlspecialchars($_POST['bg_color']);
		} 
		$txt_col="#000"; // vaikimisi must
		if (isset($_POST['text_color'])  && $_POST['text_color']!="") {
			$txt_col=htmlspecialchars($_POST['text_color']);
		}
		$border="0"; // vaikimisi 0 pikslit
		if (isset($_POST['paksus'])  && $_POST['paksus']!="") {
			$border=htmlspecialchars($_POST['paksus']);
		}
	?>
	<style type="text/css">
		.blokk {
			background: <?php echo $bg_col; ?>; 
			width:400px;
			height:250px;
			border: <?php echo $bg_col; ?>px;
			display: inline-block;
			
		}
		.blokk p{
			color: <?php echo $txt_col; ?>;
		} 
	</style>
	
</head>
<body>
    <div class="blokk">
		<p><?php if (isset($_POST['tekst'])){
	echo "<p>".$_POST['tekst']."</p>"; 
	} ?></p>
	</div>
	<div>
        <form action="kodutöö8.php" method="POST">
			<textarea name="tekst"></textarea><br>
			<select name="bg_color">
                    <option value="#008000">Roheline</option>
                    <option value="#0000ff">Sinine</option>
                    <option value="#000000">Must</option>
                    <option value="#ff0000">Punane</option>
            </select>Taustavärvus<br>
			<select name="text_color">
                    <option value="#000000">Must</option>
                    <option value="#ffff00">Kollane</option>
                    <option value="#0000ff">Sinine</option>
                    <option value="#ffffff">Valge</option>
            </select>Tekstivärvus<br>
			Piirjoon:</br>
				<input type="number" name="paksus" min="0" max="20"></input>Joone paksus (0-20 px)<br>
				<input type="submit" value="Sisesta"/>
		</form>
    </div>
	
</body>
</html>