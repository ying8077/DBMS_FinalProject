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
</head>

<body>
    <div style="width:50%;height:100vh;background-color:#EDEDED;float:left;">
        <div class="mx-auto" style="width:75%;font-family:'Poppins';font-size:18px;font-weight:400">
            <div style="margin-top:60px;">
                <button class="btn rounded-pill" style="background-color:#D5D5D5">
                    <span id="badge" class="badge rounded-circle">&nbsp;</span><?php echo $uname ?></button>
                <span id="log_out" style="margin-left:65%;"><a href="../view/login_view.php" style="color:red;"><i class="fa fa-sign-out"></i>Log out.</a></span>
            </div>
            <div style="font-size:35px;">
                <button id="back_search" style="margin-top:60px"><a href="../view/search_view.php" class="link"><i class="fa fa-arrow-left"></i> Update</a></button>
            </div>
            <p></p>
            <form name="edit" method="post" action="../controller/update_controller.php">
                Name:
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="name" style="height: 45px" autocomplete="off" placeholder="<?php echo $uname ?>">
                </div>
                ID number:
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="id" style="height: 45px" value=<?php echo $ID ?>  readonly="readonly">
                </div>
                Health insurance number:
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="hin" style="height: 45px" value=<?php echo $HealthID ?>  readonly="readonly">
                </div>
                E-mail:
                <div class="input-group mb-3">
                    <input type="email" class="form-control" name="email" style="height: 45px" autocomplete="off" placeholder="<?php echo $Email ?>">
                </div>
                <div class="d-grid col-12 mt-5">
                    <button type="submit" class="btn btn-primary">Comfirm to update</button>
                </div>
        </div>
    </div>
    <div style="width:50%;height:100vh;background-color:#222222;float:right;">
        <div class="mx-auto" style="width:70%;font-family:'Poppins';font-size:18px;font-weight:300">
            <label style="margin-left:50px;margin-top:175px;color: white">Click to re-upload your vaccine veriation.</label>
        </div>
        <p></p>
        <div class="mx-auto" style="width:60%;font-family:'Poppins';font-size:18px;font-weight:400">
            <input type="file" id="name" class="form-control">
        </div>
        </form>
</body>

</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');

    #back_search {
        border: none;
    }

    #badge {
        margin-right: 30px;
        background-color: #35E47B;
    }

    .link {
        color: #222222;
        text-decoration: none;
        font-weight: 600;
    }

    .link:hover,
    .link:active,
    .link:focus {
        color: #5A5A5A;
    }
</style>