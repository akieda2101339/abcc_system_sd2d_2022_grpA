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
			<li><a href="home.html" class="nav-link px-2 link-secondary">HOME</a></li>
			<li><a href="brand/brand.html" class="nav-link px-2 link-dark">BRAND</a></li>
			<li><a href="category/category.html" class="nav-link px-2 link-dark">CATEGORY</a></li>
			<li><a href="blog/bloghome.html" class="nav-link px-2 link-dark">BLOG</a></li>
		  </ul>
	
		  <div class="col-md-3 text-end">
			<a href="cart/cart.html"><i class="bi bi-cart4 text-dark" style="font-size: 1.5rem;"></i></a>
			<a href="cart/buy.html"><i class="bi bi-person-circle text-dark" style="font-size: 1.5rem;"></i></a>
		  </div>
		</header>
	  </div>
</header>
<div class="border col-12 text-center">
	<br>
	<h2>NEW ARRIVALS</h2>
</div>
<br>
<div class="row">
<?php
	$pdo = new PDO('mysql:host=localhost;dbname=teamadb;charset=utf8','webuser','abccsd2');

	$sql = "SELECT * FROM items";
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
	echo "<h6><p>$row[item_name]</p></h6>";
	echo "￥$row[item_money]<br>";
?>
</div><?php } ?>


<br>
<br>
<br>
<div class="border col-12 text-center">
	<br>
	<h2>RECOMMEND ITEM</h2>
</div>
<br>
<div class="row">
    <div class="col-md-3 col-6 p-3">
    <a href="category/TOPS/pinkbest.html"><img src="img/AKIEDA/akiedashoes.jpg" class="img-fluid"></a>
	<h6><p class="text-justify text-center">IKEDA</p></h6>
	<p class="text-justify text-center">pink best</p>
	<p class="text-justify text-center">¥20,000</p>
	</div>
	<div class="col-md-3 col-6 p-3">
	<a href="category/TOPS/beigebest.html"><img src="img/KANEKO/kanekopants2.jpg" class="img-fluid"></a>
	<h6><p class="text-justify text-center">KANEKO</p></h6>
	<p class="text-justify text-center">beige best</p>
	<p class="text-justify text-center">¥20,000</p>
	</div>
	<div class="col-md-3 col-6 p-3">
	<a href="category/TOPS/skybluebest.html"><img src="img/NAKAMURA/nakamurajacket.jpg" class="img-fluid"></a>
	<h6><p class="text-justify text-center">AKIEDA</p></h6>
	<p class="text-justify text-center">skyblue best</p>
	<p class="text-justify text-center">¥20,000</p>
	</div>
	<div class="col-md-3 col-6 p-3">
	<a href="category/TOPS/bluebest.html"><img src="img/NOMURA/nomurapants3.jpg" class="img-fluid"></a>
	<h6><p class="text-justify text-center">NOMURA</p></h6>
	<p class="text-justify text-center">blue best</p>
	<p class="text-justify text-center">¥20,000</p>
</div>
<div class="row">
    <div class="col-md-3 col-6 p-3">
    <img src="img/KANEKO/kanekoscarf.jpg" class="img-fluid">
	<h6><p class="text-justify text-center">NAKAMURA</p></h6>
	<p class="text-justify text-center">skyblue coat</p>
	<p class="text-justify text-center">¥30,000</p>
	</div>
	<div class="col-md-3 col-6 p-3">
	<img src="img/NAKAGAWA/supernovapants.jpg" class="img-fluid">
	<h6><p class="text-justify text-center">IKEDA</p></h6>
	<p class="text-justify text-center">beige coat</p>
	<p class="text-justify text-center">¥30,000</p>
	</div>
	<div class="col-md-3 col-6 p-3">
	<img src="img/NAKAMURA/nakamuracardigan5.jpg" class="img-fluid">
	<h6><p class="text-justify text-center">IKEDA</p></h6>
	<p class="text-justify text-center">pink coat</p>
	<p class="text-justify text-center">¥30,000</p>
	</div>
	<div class="col-md-3 col-6 p-3">
	<img src="img/IKEDA/ikedaharfzip.jpg" class="img-fluid">
	<h6><p class="text-justify text-center">IKEDA</p></h6>
	<p class="text-justify text-center">red coat</p>
	<p class="text-justify text-center">¥30,000</p>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</body>
</html>
