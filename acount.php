<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>acount</title>
<style>
</style>
<script type="text/javascript">
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/cartstyle.css">
</head>

<body>
<?php require_once 'header.php';
session_start();?>
<div class="row mt-5">
  <div class="offset-md-3 col-md-6 container">
    <div class="text-center mb-3">
    <h1>アカウント</h1>
	<div class="row">
    <h5 class="text-left">登録情報</h5><br>
	<table class="brwsr2">
		<tbody>
			<tr>
				<td class="data fst">
            		名前
        		</td>
				<td class="data">
					住所
				</td>
				<td class="data">
		    		メールアドレス
				</td>
			</tr>
			<td class="bar" colspan="3"></td>
			<tr>
				<td class="data fst">
					<?php echo "$_SESSION[familyname]　$_SESSION[firstname]"?>
				</td>
				<td class="data">
					<?php echo "$_SESSION[address]"?>
				</td>
				<td class="data">
					<?php echo "$_SESSION[mail]"?>
				</td>
			</tr>
	</table>
	<div></div>
	<div></div>
	<?php

	$pdo = new PDO('mysql:host=localhost;dbname=teamadb;charset=utf8','webuser','abccsd2');
	$sql = "SELECT * FROM buys WHERE user_id=?";
	$ps = $pdo->prepare($sql);
	$ps->bindValue(1,$_SESSION['userid'],PDO::PARAM_INT);
	$ps->execute();
	foreach($ps->fetchAll() as $row){
	}
	if(empty($row)){
		echo "<br><h3>購入履歴がありません</h3>";
	}else{
    ?>
      <h5 class="pt-5">購入履歴</h5><br>
      <table class="brwsr2" style="float: left;">
		    <tbody>
		      <tr>
		        <td class="data fst">
              		商品
            	</td>
		        <td class="data">
			        商品名
		        </td>
		        <td class="data">
		          サイズ
		        </td>
		        <td class="data">
		          数量
		        </td>
		        <td class="data">
		          購入日
		        </td>
		      </tr>
		    <tr>
		    <tr>
		      <td class="bar" colspan="6"></td>
		    </tr>
		  <?php
			  $sql = "SELECT DISTINCT * FROM buys INNER JOIN items ON buys.item_id = items.item_id WHERE user_id=?";	
			  $ps = $pdo->prepare($sql);
			  $ps->bindValue(1,$_SESSION['userid'],PDO::PARAM_INT);
			  $ps->execute();
			  $Total = 0;
			  foreach($ps->fetchAll() as $row){
		  ?>
		  <tr>
		    <th>
			    <form action="item.php" method="post">
				    <input type="hidden" name="itemid" value=<?php echo $row['item_id']?>>
				    <input type="image" class="img-fluid" <?php echo "src=$row[item_image] width=76 height=124"?>>
			    </form>
		    </th>
		    <td class="data fst">
			    <?php echo $row['item_name']?>
		    </td>
		    <td class="data">
			    <?php echo $row['buy_itemsize']?>
		    </td>
		    <td class="data">
			    <?php echo $row['buy_sum']?>
		    </td>
		    <td class="data">
			    <?php echo $row['buy_date'];?>
		    </td>
		  </tr>
      <?php } ?>
		</tbody>
		</table>
		<br>
		<?php } ?>
</div>

  <form action="logout.php" method="post">
    <div class="text-end">
      <input type="submit" class="btn btn-dark text-white" value="ログアウト">
    </div>
  </form>
  </div>
</div>


</body>
</html>