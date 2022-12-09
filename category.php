<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>webstore</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
.border {
    padding: 1rem 2rem;
    border: 1px solid #000;
	color: rgb(184, 184, 184);
    text-decoration: none;
}
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/categorystyle.css">
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
			<li><a href="../blog/bloghome.html" class="nav-link px-2 link-dark">BLOG</a></li>
		  </ul>
	
		  <div class="col-md-3 text-end">
			<a href="../cart/cart.html"><i class="bi bi-cart4 text-dark" style="font-size: 1.5rem;"></i></a>
			<a href="login.php"><i class="bi bi-person-circle text-dark" style="font-size: 1.5rem;"></i></a>
		  </div>
		</header>
	  </div>
</header>
<p>
	<h1><div class = "text-center" >CATEGORY</div></h1>
</p>
<div class="container">
	<div class="row">
		<?php 
			$pdo = new PDO('mysql:host=localhost;dbname=teamadb;charset=utf8','webuser','abccsd2');

			$sql = "SELECT * FROM category";
			$ps = $pdo->prepare($sql);
			$ps->execute();
			foreach($ps->fetchAll() as $row){
		?>
		<div class="col-md-3 col-6 border">
		<form action="category_search.php" method="post">
		<input type="hidden" name="categoryid" value=<?php echo $row['category_id']?>>
		<input type="submit" class="btn btn-lg" value=<?php echo $row['category_name']?>>
		</form>
		</div>
		<?php } ?>
	</div>
</div>
</form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</body>
</html>