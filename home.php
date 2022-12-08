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
	<div class="col-12 text-center">
		<a class="blog-header-logo text-dark" href="#">
			<img src="img/HOME/kasa.png" alt="" width="100" height="100"></img>
		</a>
	</div>
<header class="header-top">
	<div class="container">
		<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
		  <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
			<svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
		  </a>
	
		  <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
			<li><a href="home.php" class="nav-link px-2 link-secondary">HOME</a></li>
			<li><a href="brand.php" class="nav-link px-2 link-dark">BRAND</a></li>
			<li><a href="category.php" class="nav-link px-2 link-dark">CATEGORY</a></li>
			<li><a href="blog/bloghome.html" class="nav-link px-2 link-dark">BLOG</a></li>
		  </ul>
	
		  <div class="col-md-3 text-end">
			<a href="cart/cart.html"><i class="bi bi-cart4 text-dark" style="font-size: 1.5rem;"></i></a>
			<a href="login.php"><i class="bi bi-person-circle text-dark" style="font-size: 1.5rem;"></i></a>
		  </div>
		</header>
	  </div>
</header>
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

	$sql = "SELECT * FROM items INNER JOIN brand WHERE items.brand_id = brand.brand_id ORDER BY item_insdate DESC LIMIT 0,8";
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
<input type="hidden" name="id" value=<?php echo $row['item_id']?>>
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
