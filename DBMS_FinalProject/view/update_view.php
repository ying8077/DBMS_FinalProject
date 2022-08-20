<?php
session_start();
$uname = $_SESSION["name"];
$ID = $_SESSION["id"];
$HealthID = $_SESSION["hin"];
$Email = $_SESSION["email"];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaccine</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <style>
        <?php include('../src/base.css'); ?>
        <?php include('../src/share_content.css'); ?>
        <?php include('../src/update.css'); ?>
    </style>
</head>

<body>
    <div class="container container_left">
        <div class="mx-auto wrapper_left">
            <div class="bar">
                <button class="btn btn_user rounded-pill">
                    <span id="badge" class="badge rounded-circle">&nbsp;</span><?php echo $uname ?>
                </button>
                <span id="bar_link"><a href="../view/login_view.php"><i class="fa fa-sign-out"></i>Log out.</a></span>
            </div>
            <div class="return">
                <a href="../view/search_view.php" class="link"><i class="fa fa-arrow-left"></i> Update</a>
            </div>
            <form name="edit" method="post" action="../controller/update_controller.php">
                <div class="ipt_group mt-3">
                    Name:<input type="text" class="form-control" name="name" autocomplete="off" placeholder="<?php echo $uname ?>">
                    ID number:<input type="text" class="form-control" name="id" value=<?php echo $ID ?> readonly="readonly">
                    Health insurance number:<input type="text" class="form-control" name="hin" value=<?php echo $HealthID ?> readonly="readonly">
                    E-mail:<input type="email" class="form-control" name="email" autocomplete="off" placeholder="<?php echo $Email ?>">
                </div>
                <div class="d-grid col-12 form_btn_sumbit">
                    <button type="submit" class="btn btn-primary">Comfirm to update</button>
                </div>
        </div>
    </div>
    <div class="container container_right">
        <div class="mx-auto wrapper_right">
            <label>Click to re-upload your vaccine veriation.</label>
            <input type="file" id="name" class="form-control">
        </div>
        </form>
</body>

</html>