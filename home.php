<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>webstore</title>
<link rel="stylesheet" href="script.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
.jumbotron{
  background-image: url(img/home.png);
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
}
.border{
    border-top: 3px solid #333;
    border-bottom: 3px solid #333;
}
.p{
	text-justify: auto;
	text-align: center;
}
.resizeimage img { 
	width: 100%; 
}
</style>
	</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>

<body>
<?php require_once 'header.php'?>
<div name="maindiv" class="container-fluids">
	<div class="bg-img p-5">
		<div class="container">
			<img src="img/HOME/home.png" class="img-fluid">
		</div>
	</div>
<div class="border col-12 text-center">
	<br>
	<h2>NEW ARRIVALS</h2>
</div>
<br>
<div class="row">
<?php
	$pdo = new PDO('mysql:host=localhost;dbname=teamadb;charset=utf8','webuser','abccsd2');

	$sql = "SELECT * FROM items INNER JOIN brand INNER JOIN inventories 
			WHERE items.brand_id = brand.brand_id AND items.item_id = inventories.item_id AND inventories.inventory_itemsize='S' ORDER BY item_insdate DESC LIMIT 0,8";
	$ps = $pdo->prepare($sql);
	$ps->execute();
	foreach($ps->fetchAll() as $row){
?>
<div class="col-md-3 col-6" style="text-align: center;">
<form action="item.php" method="post">
<input type="hidden" name="itemid" value=<?php echo $row['item_id']?>>
<input type="image" class="img-fluid" <?php echo "src=$row[item_image] width=380 height=480"?>><br>
</form>
<?php
	echo "<p>$row[brand_name]</p>";
	echo "<h6><p>$row[item_name]</p></h6>";
	echo "￥".number_format($row['item_money'])."<br>";
?>
</div><?php } ?>

<div class="border col-12 text-center">
	<br>
	<h2>RECOMMEND ITEM</h2>
</div>
<br>
<div class="row">
<?php
	$pdo = new PDO('mysql:host=localhost;dbname=teamadb;charset=utf8','webuser','abccsd2');

	$sql = "SELECT * FROM items INNER JOIN brand WHERE items.brand_id = brand.brand_id ORDER BY RAND() LIMIT 0,8";
	$ps = $pdo->prepare($sql);
	$ps->execute();
	foreach($ps->fetchAll() as $row){
?>
<div class="col-md-3 col-6" style="text-align: center;">
<form action="item.php" method="post">
<input type="hidden" name="itemid" value=<?php echo $row['item_id']?>>
<input type="image" class="img-fluid" <?php echo "src=$row[item_image] width=380 height=480"?>><br>
</form>
<?php
	echo "<p>$row[brand_name]</p>";
	echo "<h6><p>$row[item_name]</p></h6>";
	echo "￥".number_format($row['item_money'])."<br>";
?>
</div><?php } ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</body>
</html>
