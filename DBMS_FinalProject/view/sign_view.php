<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaccine</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        <?php include('../src/base.css'); ?>
        <?php include('../src/login.css'); ?>
    </style>
</head>

<body>
    <form name="sign-up" method="post" action="../controller/sign_controller.php" enctype="multipart/form-data">
        <div class="container container_left">
            <div class="mx-auto wrapper_left">
                <div class="bar">
                    <label>Already had an account?</label>
                    <button id="bar_link"><a href="../view/login_view.php">Login.</a></button>
                </div>
                <div class="logo">
                    <h1>Welcome!</h1>
                    <label>Fill in to start your account.</label>
                </div>
                <div class="ipt_group mt-3">
                    <input type="text" name="name" class="form-control" autocomplete="off" placeholder="User name">
                    <input type="password" name="id" class="form-control" placeholder="ID number">
                    <input type="text" name="hin" class="form-control" autocomplete="off" placeholder="Health insurance number">
                    <input type="text" name="email" class="form-control" autocomplete="off" placeholder="E-mail">
                </div>
                <div class="d-grid col-12 form_btn_sumbit">
                    <button type="sumbit" class="btn btn-outline-secondary">Sign up</button>
                </div>
            </div>
        </div>
        <div class="container container_right">
            <div class="mx-auto wrapper_right">
                <label>Click to upload your vaccine veriation.</label>
                <input type="file"  name="fileToUpload" class="form-control" id="inputGroupFile02">
            </div>
        </div>
    </form>
</body>

</html>