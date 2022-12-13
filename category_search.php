<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>webstore</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<style>
.resizeimage img { 
	width: 100%; 
}
.img-center{
	align-items: center;
}
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
<link rel="stylesheet" href="style.css">
</head>

<body>
<?php require_once 'header.php'?>
<?php
	$pdo = new PDO('mysql:host=localhost;dbname=teamadb;charset=utf8','webuser','abccsd2');

	$sql = "SELECT * FROM category WHERE category_id=?";
	$ps = $pdo->prepare($sql);
	$ps->bindValue(1,$_POST['categoryid'],PDO::PARAM_INT);
	$ps->execute();
	foreach($ps->fetchAll() as $row){
?>
<p>
	<h1><div class = "text-center" ><?php echo $row['category_name']?></div></h1>
</p>
<?php } ?>
<div class="container">
	<div class="row">
		<?php
		$pdo = new PDO('mysql:host=localhost;dbname=teamadb;charset=utf8','webuser','abccsd2');

		if($_POST['categoryid'] == 0){
			$sql = "SELECT DISTINCT items.*, brand.brand_name FROM items INNER JOIN brand ON items.brand_id = brand.brand_id";
			$ps = $pdo->prepare($sql);
			$ps->execute();
		}else{
			$sql = "SELECT DISTINCT items.*, brand.brand_name FROM items INNER JOIN brand ON items.brand_id = brand.brand_id WHERE category_id=?";
			$ps = $pdo->prepare($sql);
			$ps->bindValue(1,$_POST['categoryid'],PDO::PARAM_INT);
			$ps->execute();
		}
			foreach($ps->fetchAll() as $row){
		?>
		<div class="col-md-3 col-6 p-3" style="text-align: center;">
		<form action="item.php" method="post">
		<input type="hidden" name="itemid" value=<?php echo $row['item_id']?>>
		<input type="image" class="img-fluid" <?php echo "src=$row[item_image] width=380 height=480"?>><br>
		</form>
		<?php
			echo "<h6><p>$row[brand_name]</p></h6>";
			echo "<p>$row[item_name]</p>";
			echo "￥".number_format($row['item_money'])."<br>";
		?>
		</div><?php } ?>
		</div>
	</div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</body>
</html>