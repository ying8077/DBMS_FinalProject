<?php
session_start();
include('../conn.php');

$ID = $_SESSION["id"];
$ftype = $_SESSION["type"];
$sql = "SELECT * FROM `user` WHERE `U_ID`='$ID'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $uname = $row['Name'];
    $HealthID = $row['HealthID'];
    $Email = $row['Email'];
} else {
    echo "0 results";
}
$sql_t = "SELECT * FROM `Take` WHERE `U_ID`='$ID';";
$result_t = $conn->query($sql_t);
if ($result_t->num_rows > 0) {
    $vac_num = $result_t->num_rows;
} else {
    $vac_num = 0;
}

$_SESSION["name"] = $uname;
$_SESSION["id"] = $ID;
$_SESSION["hin"] = $HealthID;
$_SESSION["email"] = $Email;
$_SESSION["status"] = $vac_num;
$_SESSION["type"] = $ftype;

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
    <script src="../src/jquery-3.5.1.min.js"></script>
    <style>
        <?php include('../src/base.css'); ?>
        <?php include('../src/share_content.css'); ?>
        <?php include('../src/search.css'); ?>
    </style>
</head>

<body>
    <div class="container container_left">
        <div class="mx-auto wrapper wrapper_left">
            <div class="bar">
                <button class="btn rounded-pill btn_user">
                    <span class="badge rounded-circle">&nbsp;</span><?php echo $uname; ?>
                </button>
                <span id="bar_link">
                    <a href="../view/login_view.php"><i class="fa fa-sign-out"></i>Log out.</a>
                </span>
            </div>
            <div class="info">
                <h1 id="uname"><?php echo $uname; ?></h1>
                <label class="mt-3">
                    ID number&nbsp;:&nbsp;<?php echo $ID; ?>
                </label><br>
                <label>
                    Health insurance number&nbsp;:&nbsp;<?php echo $HealthID; ?>
                </label><br>
                <label>
                    E-mail&nbsp;:&nbsp;<?php echo $Email; ?>
                </label><br>
                <div class="info_card">小黃卡&nbsp;:
                    <label data-bs-toggle="modal" data-bs-target="#exampleModal">pic</label>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img class="pic" src=<?php echo "../controller/show_pic.php?filename=" . $uname  ?> />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dose mt-4">
                <label>Status:&nbsp;&nbsp;</label>
                <?php
                if ($vac_num >= 2) {
                    $color = '<label style="color:#48742C">';
                    $sign = '<i class="fa fa-check-circle"></i></label>';
                } elseif ($vac_num <= 1) {
                    $color = '<label style="color:#B22222">';
                    $sign = '<i class="fa fa-times-circle"></i></label>';
                }
                echo $color . $vac_num . " dose " . $sign;
                ?>
            </div>
            <div class="mt-4">
                <div class="map">
                    <button><a href="../view/map_view.php"><img src="../src/pic/MapBtn.png"></a></button>
                </div>
                <div class="d-grid col-5 btn_group">
                    <button type="button" class="btn btn-primary"><a href="../view/update_view.php">Update</a></button>
                    <p></p>
                    <button type="button" class="btn btn-outline-secondary">QRcode</button>
                </div>
            </div>
        </div>
    </div>

    <form name="country" method="post" action="../view/result_view.php">
        <div class="container container_right">
            <div class="mx-auto wrapper_right">
                <label>Choose your destination.</label>
                <div>
                    <select id="sel_country" name="cid" class="form-select" aria-label="Default select example">
                        <option value="" disabled selected hidden>Country</option>
                        <option value="1,../src/pic/america.png">USA</option>
                        <option value="2,../src/pic/uk.png">United Kingdom</option>
                        <option value="3,../src/pic/china.png">China</option>
                        <option value="4,../src/pic/hk.png">HongKong</option>
                        <option value="5,../src/pic/singapore.png">Singapore</option>
                        <option value="6,../src/pic/korea.png">Korea</option>
                        <option value="7,../src/pic/japan.png">Japan</option>
                        <option value="8,../src/pic/australia.png">Australia</option>
                        <option value="9,../src/pic/france.png">France</option>
                        <option value="10,../src/pic/germany.png">Germany</option>
                        <option value="11,../src/pic/switzerland.png">Switzerland</option>
                        <option value="12,../src/pic/spain.png">Spain</option>
                    </select>
                </div>
                <div class="d-grid col-12">
                    <button type="submit" id="btn_submit" class="btn btn-outline-secondary" onclick="set()">Next→</button>
                </div>
            </div>
    </form>
</body>

</html>

<script>
    function set() {
        location.href = '../view/result_view.php';
        localStorage.uname = document.querySelector("#uname").innerHTML;
        localStorage.countryID = $('#sel_country').val().split(',')[0];
        localStorage.country = $('#sel_country').val().split(',')[1];
    }
</script>