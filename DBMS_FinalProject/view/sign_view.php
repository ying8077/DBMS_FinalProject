<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaccine</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
</head>

<body>
    <form name="sign-up" method="post" action="../controller/sign_controller.php" enctype="multipart/form-data">
        <div style="width:50%;height:100vh;background-color:#EDEDED;float:left;">
            <div class="mx-auto" style="width:55%;font-family:'Poppins';font-size:18px;font-weight:400">
                <div>
                    <label style="margin-top:120px;">Already had an account?</label>
                    <button id="sign" style="margin-left:35%;"><a href="../view/login_view.php">Login.</a></button>
                </div>
                <div style="display: flex;margin-top:90px">
                    <h1 style="font-weight:600;margin:auto">Welcome!</h1>
                </div>
                <label style="margin-left:24%">Fill in to start your account.</label>
                <div class="input-group mb-2 mt-3">
                    <input type="text" name="name" class="form-control" style="height: 65px;" autocomplete="off" placeholder="User name">
                </div>
                <div class="input-group mb-2">
                    <input type="password" name="id" class="form-control" style="height: 65px;" placeholder="ID number">
                    <!-- <button class="btn btn-outline-secondary"><i class="fa fa-eye" id="togglePassword"></i></button> -->
                </div>
                <div class="input-group mb-2">
                    <input type="text" name="hin" class="form-control" style="height: 65px;" autocomplete="off" placeholder="Health insurance number">
                </div>
                <div class="input-group mb-2">
                    <input type="text" name="email" class="form-control" style="height: 65px;" autocomplete="off" placeholder="E-mail">
                </div>
                <div class="d-grid col-12" style="margin-top:50px">
                    <button type="sumbit" class="btn btn-outline-secondary">Sign up</button>
                </div>
            </div>
        </div>
        <div style="width:50%;height:100vh;background-color:#222222;float:right;">
            <div class="mx-auto" style="width:70%;font-family:'Poppins';font-size:18px;font-weight:300">
                <label style="margin-left:55px;margin-top:175px;color: white">Click to upload your vaccine veriation.</label>
            </div>
            <p></p>
            <div class="mx-auto" style="width:60%;font-family:'Poppins';font-size:18px;font-weight:400">
                <input type="file" name ="fileToUpload" class="form-control" id="inputGroupFile02">
            </div>
    </form>
</body>

</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');

    #sign {
        border: none;
        color: blue
    }
</style>