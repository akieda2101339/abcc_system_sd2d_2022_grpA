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
<link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="col-12 text-center">
		<a class="blog-header-logo text-dark" href="#">
			<img src="../../img/HOME/kasa.png" alt="" width="100" height="100"></img>
		</a>
	  </div>
<header class="header-top">
	<div class="container">
		<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
		  <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
			<svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
		  </a>
	
		  <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
			<li><a href="../../home.html" class="nav-link px-2 link-secondary">HOME</a></li>
			<li><a href="../../brand/brand.html" class="nav-link px-2 link-dark">BRAND</a></li>
			<li><a href="../../category/category.html" class="nav-link px-2 link-dark">CATEGORY</a></li>
			<li><a href="../../blog/bloghome.html" class="nav-link px-2 link-dark">BLOG</a></li>
		  </ul>
	
		  <div class="col-md-3 text-end">
			<a href="../../cart/cart.html"><i class="bi bi-cart4 text-dark" style="font-size: 1.5rem;"></i></a>
			<a href="../../cart/buy.html"><i class="bi bi-person-circle text-dark" style="font-size: 1.5rem;"></i></a>
		  </div>
		</header>
	  </div>
</header>
<?php
    $pdo = new PDO('mysql:host=localhost;dbname=teamadb;charset=utf8','webuser','abccsd2');
   
    $sql = "SELECT * FROM items WHERE item_id=?";
    $ps = $pdo->prepare($sql);
    $ps->bindValue(1,$_POST['id'],PDO::PARAM_INT);
    $ps->execute();
    foreach($ps->fetchAll() as $row){
    }
?>
<div id="item" class="wrapper">
    <div class="item-image">
    <?php echo "<img src=$row[item_image]>"?>;
    </div>

    <div class="item-info">
      <h1 class="item-title"><?php echo $row['item_name'];?></h1>
      <p>
        <?php echo $row['item_overview'];?>
      </p>

      <p>
        <?php echo "￥$row[item_money]";?>
      </p>
      <table class="order-table">
        <thead>
          <tr>
            <th class="color">Color</th>
            <th class="size">Size</th>
            <th class="quantity">quantity</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>GRAY STRIPE</td>
            <td>S</td>
            <td>
              <select name="quantity_s">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>GRAY STRIPE</td>
            <td>M</td>
            <td>
              <select name="quantity_s">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
            </td>
          </tr>
        </tbody>
      </table>

      <a class="cart-btn" href="../../cart/buy.html">ADD TO CART</a>

      <table class="size-table">
        <thead>
          <tr>
            <th class="size">Size</th>
            <th class="chest">Chest</th>
            <th class="weist">Weist</th>
            <th class="height">Height</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>S</th>
            <td>136</td>
            <td>78</td>
            <td>57</td>
          </tr>
          <tr>
            <th>M</th>
            <td>144</td>
            <td>82</td>
            <td>59</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</body>
</html>