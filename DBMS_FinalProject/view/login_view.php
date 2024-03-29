<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaccine</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <style>
        <?php include('../src/base.css'); ?>
        <?php include('../src/login.css'); ?>
    </style>
</head>

<body>
    <div class="container container_left">
        <div class="mx-auto wrapper wrapper_left">
            <div class="bar">
                <label>Don't have an account?</label>
                <button id="bar_link"><a href="../view/sign_view.php">Sign up!</a></button>
            </div>
            <div class="logo">
                <h1>Welcome!</h1>
                <label>Login into your account.</label>
            </div>
            <form name="login" method="post" action="../controller/login_controller.php">
                <div class="ipt_group mt-3">
                    <input type="text" id="name" name="name" class="form-control" placeholder="User name">                
                    <input type="password" id="id_no" name="id" class="form-control" placeholder="ID number">
                    <!-- <button class="btn btn-outline-secondary"><i class="fa fa-eye" id="togglePassword"></i></button> -->
                </div>
                <div class="d-grid col-12 form_btn_sumbit">
                    <button type="submit" id="btn_login" class="btn btn-outline-secondary">Log In</button>
                </div>
            </form>
        </div>
    </div>
    <div class="container container_right"></div>

</body>

</html>

<script>
    // const togglePassword = document.querySelector('#togglePassword');
    // const password = document.querySelector('#id_no');

    // togglePassword.addEventListener('click', function(e) {
    //     // toggle the type attribute
    //     const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    //     password.setAttribute('type', type);
    //     // toggle the eye slash icon
    //     this.classList.toggle('fa-eye-slash');
    // });
</script>