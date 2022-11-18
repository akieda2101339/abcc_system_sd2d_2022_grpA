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
<div class="col-12 text-center">
	<a class="blog-header-logo text-dark" href="#">
		<img src="img/kasa.png" alt="" width="100" height="100"></img>
	</a>
</div>
<header class="header-top">
	<nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="brand/brand.html" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">BRAND</a>
				<div class="dropdown-menu" aria-labelledby="dropdown10">
				  <a class="dropdown-item" href="brand/akieda.html">akieda</a>
				  <a class="dropdown-item" href="brand/ikeda.html">ikeda</a>
				  <a class="dropdown-item" href="brand/kaneko.html">kaneko</a>
				  <a class="dropdown-item" href="brand/nakagawa.html">nakagawa</a>
				  <a class="dropdown-item" href="brand/nomura.html">nomura</a>
				  <a class="dropdown-item" href="brand/nakamura.html">nakamura</a>
				</div>
			  </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="category/category.html" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CATEGORY</a>
              <div class="dropdown-menu" aria-labelledby="dropdown10">
                <a class="dropdown-item" href="#">ALL ITEM</a>
                <a class="dropdown-item" href="#">COAT</a>
                <a class="dropdown-item" href="#">JACKET</a>
				<a class="dropdown-item" href="#">BLOUSON</a>
				<a class="dropdown-item" href="#">TOPS</a>
				<a class="dropdown-item" href="#">SHIRTS</a>
				<a class="dropdown-item" href="#">KNIT</a>
				<a class="dropdown-item" href="#">BOTTOMS</a>
				<a class="dropdown-item" href="#">SHOES</a>
				<a class="dropdown-item" href="#">BAGS/a>
				<a class="dropdown-item" href="#">ACCESSORIES</a>
              </div>
            </li>
			<li class="nav-item">
				<a class="nav-link" href="blog.html">BLOG <span class="sr-only">(current)</span></a>
			</li>
          </ul>
	</div>
    </nav>
</header>
    </div>
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
                    パスワード<input type="text" class="form-control" name="pass">
                </div>
            </div>
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="d-grid gap-2">
              <input type="submit" class="btn btn-dark btn-lg text-white" value="ログイン">
            </div>
        </div>
    </div>
</form>
    <div class="row">
        <div class="col-md-12 mt-3 text-center">
            <a href="touroku_test.php"><h4>新規登録はこちら</h4></a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</form>
</body>

</html>