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
<?php require_once 'header.php'?>
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