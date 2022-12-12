<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>webstore</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>

<body>
<?php require_once 'header.php'?>
<?php
session_start();
if(!isset($_SESSION['userid'])){
	header('Location: login.php');
}
?>
<main>
<div class="text-center"><h1>カート</h1></div>
	<div class="header">
		<div class="container">
			<div class="border-bottom">
				<svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
				<ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-3">
			  	<div class="col-1">
					<li>商品</li>
			  	</div>
			  	<div class="col-1"></div>
			  	<div class="col-1"></div>
			  	<div class="col-1">
					<li>サイズ</li>
			  	</div>
			  	<div class="col-1">
					<li>数量</li>
			  	</div>
			  	<div class="col-1">
					<li>値段</li>
			  	</div>
			  	<div class="col-1"></div>
			  	<div class="col-1">
				<li>合計</li>
			  	</div>
			  	<div class="col-1"></div>
				</ul>
			</div>
	  	</div>
	</div>
	<?php
 		$pdo = new PDO('mysql:host=localhost;dbname=teamadb;charset=utf8','webuser','abccsd2');
		$sql = "SELECT DISTINCT * FROM cart INNER JOIN items ON cart.item_id = items.item_id WHERE user_id=?";	
		$ps = $pdo->prepare($sql);
		$ps->bindValue(1,$_SESSION['userid'],PDO::PARAM_INT);
		$ps->execute();
		$Total = 0;
		foreach($ps->fetchAll() as $row){
	?>
	<div class="body">
		<div class="container">
			<div class="border-bottom">
		  	<div class="row">
			<div class="col-1"></div>
			<div class="col-1">
				<form action="item.php" method="post">
				<input type="hidden" name="itemid" value=<?php echo $row['item_id']?>>
				<input type="image" class="img-fluid" <?php echo "src=$row[item_image] width=90 height=124"?>>
				</form>
			</div>
			<div class="col-2" style="padding: 45px">
			  <?php echo $row['item_name']?>
			</div>
			<div class="col-1" style="padding: 45px">
			  <?php echo $row['cart_itemsize']?>
			</div>
			<div class="col-1" style="padding: 45px">
			  <?php echo $row['cart_sum']?>
			</div>
			<div class="col-1" style="padding: 45px">
			<?php echo "￥".number_format($row['item_money']);?>
			</div>
			<div class="col-1"></div>
			<div class="col-1" style="padding: 45px">
				<?php echo "￥".number_format($row['item_money']*$row['cart_sum']);
				$Total += $row['item_money']*$row['cart_sum']?>
			</div>
			<div class="col-1"></div>
			<div class="col-1"></div>
		</div>
		</div>
		<?php } ?>
		<br>
			<div class="text-end">
				<p><?php echo "￥".number_format($Total)?></p>
			</div>
			<div class="text-end">
				<form action="buyins.php">
			  	<input type="submit" value="決済する"></a>
			</div>
	  </div>
	</div>
  </main>
  
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</body>
</html>
