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
</head>

<body>
<div id="maindiv" class="container">
    <div class="container">
      <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="70" height="62" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>
    
          <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 link-dark">HOME</a>
            <li><a href="aaaaaa" class="nav-link px-2 link-dark">BRAND</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">CATEGORY</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">BLOG</a></li>
          </ul>
    
          <div class="col-md-3 text-end bi-4x">
            <a href="cart.html"><i class="bi bi-cart4 text-dark" style="font-size: 1.5rem"></i></a>
            <a href="login.html"><i class="bi bi-person-circle text-dark" style="font-size: 1.5rem"></i></a>
          </div>
        </header>
    </div>
</div>
<div class="row mt-5">
  <div class="offset-md-3 col-md-6 container">
    <div class="text-center mb-3">
    <?php
    session_start();
    echo "<h1>アカウント</h1>";
    echo "<h5>登録情報</h5>";
    echo "$_SESSION[familyname]　$_SESSION[firstname]<br>";
    echo "$_SESSION[address]";

    echo "<h5>購入履歴<h5>";
    ?>
    <form action="logout_test.php" method="post">
    <div class="text-right">
      <input type="submit" class="btn btn-dark text-white" value="ログアウト">
    </div>
    </form>
  </div>
</div>


</body>
</html>