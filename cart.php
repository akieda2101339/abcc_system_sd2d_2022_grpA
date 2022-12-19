<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>webstore</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
h3{
	text-align: center;
}
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/cartstyle2.css">
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
	<div class="container"><br>
		<?php
			$pdo = new PDO('mysql:host=localhost;dbname=teamadb;charset=utf8','webuser','abccsd2');
			$sql = "SELECT * FROM cart WHERE user_id=?";	
			$ps = $pdo->prepare($sql);
			$ps->bindValue(1,$_SESSION['userid'],PDO::PARAM_INT);
			$ps->execute();
			if(!empty($ps->fetchAll())){
		?>
		<table class="tbl">
			<tbody>
				<tr>
					<th>
						商品
					</th>
					<th>
						商品名
					</th>
					<th>
						サイズ
					</th>
					<th>
						数量
					</th>
					<th>
						値段
					</th>
					<th>
						合計
					</th>
					<th>
						削除
					</th>
				</tr>
				<?php
					$sql = "SELECT DISTINCT * FROM cart INNER JOIN items ON cart.item_id = items.item_id WHERE user_id=?";	
					$ps = $pdo->prepare($sql);
					$ps->bindValue(1,$_SESSION['userid'],PDO::PARAM_INT);
					$ps->execute();
					$Total = 0;
					foreach($ps->fetchAll() as $row){
				?>
				<tr>
					<td>
					<form action="item.php" method="post">
						<input type="hidden" name="itemid" value=<?php echo $row['item_id']?>>
						<input type="image" class="img-fluid" <?php echo "src=$row[item_image] width=76 height=124"?>>
					</form>
					</td>
					<td>
						<?php echo $row['item_name']?>
					</td>
					<td>
						<?php echo $row['cart_itemsize']?>
					</td>
					<td>
						<?php echo $row['cart_sum']?>
					</td>
					<td>
						<?php echo "￥".number_format($row['item_money']);?>
					</td>
					<td>
						<?php echo "￥".number_format($row['item_money']*$row['cart_sum']);
						$Total += $row['item_money']*$row['cart_sum']?>
					</td>
					<td>
					<form action="cartdelete.php" method="post">
						<input type="hidden" name="itemdlt" value=<?php echo $row['cart_id']?>>
						<input type="submit" class="btn btn-link" value="削除">
					</form>
					</td>
				</tr>
		<?php } ?>
		</tbody>
		</table>
		<br>
		<div class="text-end">
			<p><?php echo "￥".number_format($Total)?></p>
			<form action="buyins.php" method="post">
				<input type="hidden" name="itemid" value=<?php echo $row['item_id']?>>
				<input type="hidden" name="itemsize" value=<?php echo $row['cart_itemsize']?>>
				<input type="submit" value="決済する">
			</form>
			<br>
		</div>
		<?php 
		}else{
			echo "<h3>カートに商品がありません</h3>";
		}	
		?>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</body>
</html>
