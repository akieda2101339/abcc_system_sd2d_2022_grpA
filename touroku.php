<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>login</title>
<style>
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
<?php require_once 'header.php'?>
<form action="userins.php" method="post" name="userins" onsubmit="return check()">
    <div class="row mt-5">
        <div class="offset-md-3 col-md-6">
            <h1 class="text-center mb-3">新規会員登録</h1>
            <div class="row">
                <div class="col-md-6 mt-3">
                    姓<input type="text" class="form-control" name="familyname">
                </div>
                <div class="col-md-6 mt-3">
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
        </div>
    </div>
</form>
<script type="text/javascript">
function check(){
    const mailPattern = /^[a-zA-Z0-9_.+-]+@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$/;
    let mail = document.userins.mail.value;
    let pass = document.userins.pass.value;
    let isSuccess = true;

    if(mailPattern.test(mail) == false && pass.length < 6){
        alert('メールアドレス、パスワードの形式が不正です。\nパスワードは6文字以上の必要があります');
        isSuccess = false;
        return false;
    }
    else if(mailPattern.test(mail) == false){
            alert('メールアドレスの形式が不正です。');
            isSuccess = false;
            return false;
    }
    else if(pass.length < 6){
        alert('パスワードは6文字以上の必要があります');
        isSuccess = false;
        return false;
    }
    if(isSuccess == true){
        return true;
    }
};
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>