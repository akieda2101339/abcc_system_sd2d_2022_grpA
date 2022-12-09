<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>login</title>
<style>
</style>
<script type="text/javascript">
function OnClick(){
    const mailPattern = /^[a-zA-Z0-9_.+-]+@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$/;
    const passPattern = /^[a-zA-Z0-9.?/-]{6,24}$/;

    let mail = document.getElementById("mail").value;
    let pass = document.getElementById("pass").value;
    let isSuccess = true;

    document.getElementById("error").innerHTML = "";

    if(mailPattern.test(mail) == false){
        let errorTag = document.createElement("p");
        errorTag.textContent = "メールアドレスの形式が不正です。";
        document.getElementById("error").appendChild(errorTag);
        isSuccess = false;
    }

    if(passPattern.test(pass) == false){
        let errorTag = document.createElement("p");
        errorTag.textContent = "パスワードは６文字以上の必要があります。";
        document.getElementById("error").appendChild(errorTag);
        isSuccess = false;
    }

    if(isSuccess == true){
        window.location.href = 'acount.html';
    }
}
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
<form action="userins.php" method="post">
    <div class="row mt-5">
        <div class="offset-md-3 col-md-6">
            <h1 class="text-center mb-3">新規会員登録</h1>
            <div class="row">
                <div class="col-mad-12 mt-3">
                    姓<input type="text" class="form-control" name="familyname">
                </div>
            </div>
            <div class="row">
                <div class="col-mad-12 mt-3">
                    名<input type="text" class="form-control" name="firstname">
                </div>
            </div>
            <div class="row">
                <div class="col-mad-12 mt-3">
                    住所<input type="text" class="form-control" name="address">
                </div>
            </div>
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
                <input type="submit" class="btn btn-dark btn-lg text-white" value="新規登録">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-1 alert-danger text-center" id="error">
        </div>
    </div>
</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>