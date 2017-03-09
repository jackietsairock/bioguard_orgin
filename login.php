<?php
$pageName = 'login';


require __DIR__. '/__connect_db.php';

$email_id = '';
$nickname = '';
$mobile = '';
$address = '';


if(isset($_POST['email_id']) and isset($_POST['password'])) {

    $email_id = $_POST['email_id'];
    $password = sha1($_POST['password']);


    $rs = $mysqli->prepare("SELECT `sid`, `nickname`, `mobile`, `address`
FROM `members`
WHERE `email_id`=? AND `password`=?");

    $rs->bind_param('ss', $email_id, $password);
    $rs->execute();

    $rs->bind_result($sid, $nickname, $mobile, $address);
    if($rs->fetch()){
        $_SESSION['user'] = array(
            'sid' => $sid,
            'email_id' => $email_id,
            'nickname' => $nickname,
            'mobile' => $mobile,
            'address' => $address,
        );
        header('Location: bioguard_edit_news_ch.php');
        exit;
    } else {
        $_SESSION['flashMsg'] = array(
            'msg' => '登入失敗',
            'type' => 'danger'
        );
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>帳號登入</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
    <style>
        .alert-danger {
            display: none;
        }
    </style>
</head>
<body>

<div class="container">

    <div class="col-lg-6">
        <?php if(isset($_SESSION['flashMsg'])):?>
            <div class="alert alert-<?= $_SESSION['flashMsg']['type'] ?>" role="alert"><?= $_SESSION['flashMsg']['msg'] ?></div>
        <?php endif; ?>
        <h2>帳號登入</h2>
        </br>
        <a href="index_ch.php">*-回首頁-*</a>
        </br></br>
        <form name="form10" class="form-horizontal" method="post">
            <div class="form-group">
                <label for="email_id" class="col-sm-2 control-label">*email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email_id" name="email_id" placeholder="email"
                           value="<?= $email_id ?>">
                    <div id="email_id_info" class="alert alert-danger" role="alert">請填寫正確的 email 格式</div>
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-2 control-label">*密碼</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="password" placeholder="密碼">
                    <div id="password_info" class="alert alert-danger" role="alert">6位以</div>

                </div>
            </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">登入</button>
                    </div>
                </div>
            <?php
            unset($_SESSION['flashMsg']);
            ?>
        </form>
    </div>
</div>


<script src="https://code.jquery.com/jquery-1.12.2.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/navbar.js"></script>
<script>
    function formCheck(){
        var pattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        var isPass = true;
        $('.alert-danger').hide();

        if(! pattern.test(form1.email_id.value)){
            $('#email_id_info').text('請填寫正確的 email 格式');
            $('#email_id_info').show();
            isPass = false;
        }

        if(form1.password.value.length<6){
            $('#password_info').show();
            isPass = false;

        }
    }


</script>

</body>
</html>