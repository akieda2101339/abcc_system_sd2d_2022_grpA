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
<link rel="stylesheet" href="css/itemstyle.css">
</head>

<body>
<?php require_once 'header.php'?>
<?php
    $pdo = new PDO('mysql:host=localhost;dbname=teamadb;charset=utf8','webuser','abccsd2');
   
    $sql = "SELECT * FROM items WHERE item_id=?";
    $ps = $pdo->prepare($sql);
    $ps->bindValue(1,$_POST['itemid'],PDO::PARAM_INT);
    $ps->execute();
    foreach($ps->fetchAll() as $row){
      $itemid = $row['item_id'];
    }
?>
<div id="item" class="wrapper">
    <div class="item-image">
    <?php echo "<img src=$row[item_image]>"?>
    </div>

    <div class="item-info">
      <h1 class="item-title"><?php echo $row['item_name'];?></h1>
      <p>
        <?php echo $row['item_overview'];?>
      </p>

      <p>
        <?php echo "￥".number_format($row['item_money']);?>
      </p>
      <?php
        $inventory = "SELECT * FROM inventories WHERE item_id=?";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$itemid,PDO::PARAM_INT);
        $ps->execute();
        foreach($ps->fetchAll() as $row){
        }
      ?>
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
            <td>
            <form action="cartins.php" method="post">
              <select name="size">
                <option value="S">S</option>
                <option value="M">M</option>
              </select>
            </td>
            <td>
              <select name="quantity">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
            </td>
          </tr>
        </tbody>
      </table>
      <input type="hidden" name="itemid" value=<?php echo $itemid?>>
      <input type="submit" class="cart-btn" value="ADD TO CART">
      </form>
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