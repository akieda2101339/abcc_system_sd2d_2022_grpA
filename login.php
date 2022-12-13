<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>login</title>
<style>
</style>
<script type="text/javascript">
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
<?php require_once 'header.php'?>
<?php
session_start();
if(isset($_SESSION['userid'])==true){
  header('Location: acount.php');
}
?>
<form action="logincheck.php" method="post">
  <div class="row mt-5">
    <div class="offset-md-3 col-md-6">
      <h1 class="text-center mb-3">ログイン</h1>
      <div class="row">
          <div class="col-mad-12 mt-3">
              Email<input type="text" class="form-control" name="mail">
          </div>
        </div>
        <div class="row">
          <div class="col-mad-12 mt-3">
            パスワード<input type="password" class="form-control" name="pass">
          </div>
        </div>
      <div class="row">
        <div class="col-md-12 mt-3">
            <div class="d-grid gap-2">
              <input type="submit" class="btn btn-dark btn-lg text-white" onclick="OnClick()" value="ログイン">
            </div>
        </div>
    </div>
</form>
    <div class="row">
        <div class="col-md-12 mt-3 text-center">
            <a href="touroku.php"><h4>新規登録はこちら</h4></a>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</form>
</body>

</html>