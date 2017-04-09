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
		if (isset($_POST['text_color'])  && $_POST['text_color']!="") {
			$txt_col=htmlspecialchars($_POST['text_color']);
		}
		$border="0"; // vaikimisi 0 pikslit
		if (isset($_POST['paksus'])  && $_POST['paksus']!="") {
			$border=htmlspecialchars($_POST['paksus']);
		}
		$brd_stiil="solid"; //vaikimisi solid stiilis border
		if (isset($_POST['bstiil'])  && $_POST['bstiil']!="") {
			$brd_stiil=htmlspecialchars($_POST['bstiil']);
		}
		$b_raadius="0"; //vaikimisi raadius puudub
		if (isset($_POST['raadius'])  && $_POST['raadius']!="") {
			$b_raadius=htmlspecialchars($_POST['raadius']);
		}
	?>
	<style type="text/css">
		.blokk {
			background: <?php echo $bg_col; ?>; 
			width:400px;
			height:250px;
			border-width: <?php echo $border; ?>px;
			border-color: <?php echo $brd_color; ?>;
			border-style: <?php echo $brd_stiil; ?>;
			border-radius: <?php echo $b_raadius; ?>px;
			margin-bottom: 25px;	
		}
		.blokk p{
			color: <?php echo $txt_col; ?>;
			margin-left: 10px;
		}
		div{
			border-top: 2px solid black
			margin-top: 25px;
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
			<input type="color" name="bg_color" value="<?php echo $_POST['bg_color'];?>"></input>Taustavärvus<br>
			<input type="color" name="text_color"></input>Tekstivärvus<br>
			Piirjoon:</br>
				<input type="number" name="paksus" min="0" max="20"></input>Joone paksus (0-20 px)<br>
				<input type="color" name="bord_color"></input>Joone värvus<br>
				<input list="stiilid" name="bstiil">
					<datalist id="stiilid">
						<option value="solid">
						<option value="dotted">
						<option value="dashed">
						<option value="double">
					</datalist><br>
				<input type="number" name="raadius" min="0" max="100"></input>Joone raadius (0-100 px)<br>
				<input type="submit" value="Sisesta"/>
		</form>
    </div>
	
</body>
</html>