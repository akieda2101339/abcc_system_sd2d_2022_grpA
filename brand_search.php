<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>webstore</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
.p{
	text-justify: auto;
	text-align: center;
}
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>

<body>
<?php require_once 'header.php'?>
	<div class="col-12 text-center">
		<?php 
		$pdo = new PDO('mysql:host=localhost;dbname=teamadb;charset=utf8','webuser','abccsd2');

		$sql = "SELECT * FROM brand WHERE brand_id=?";
		$ps = $pdo->prepare($sql);
		$ps->bindValue(1,$_POST['brandid'],PDO::PARAM_STR);
		$ps->execute();
		foreach($ps->fetchAll() as $row){
			$brandname = $row['brand_name'];
		?>
		<p><h2><?php echo $brandname;?></h2></p>
		<br>
		<p>
			<?php echo $row['brand_overview'];?>
		</p>
		<br>
		<br>
	</div>
	<?php } ?>
	
	<div class="container">
		<div class="row">
			<?php
				$sql = "SELECT * FROM items WHERE brand_id=?";
				$ps = $pdo->prepare($sql);
				$ps->bindValue(1,$_POST['brandid'],PDO::PARAM_STR);
				$ps->execute();
				foreach($ps->fetchAll() as $row){
			?>
			<div class="col-md-3 col-6 p-3" style="text-align: center;">
			<form action="item.php" method="post">
			<input type="hidden" name="itemid" value=<?php echo $row['item_id']?>>
			<input type="image" class="img-fluid" <?php echo "src=$row[item_image] width=380 height=480"?>><br>
			</form>
			<?php
				echo "<h6><p>$brandname</p></h6>";
				echo "<p>$row[item_name]</p>";
				echo "￥".number_format($row['item_money'])."<br>";
			?>
		</div><?php } ?>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</body>
</html>
