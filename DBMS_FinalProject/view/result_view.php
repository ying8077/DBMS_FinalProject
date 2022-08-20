<?php
session_start();
$uname = $_SESSION["name"];
$ID = $_SESSION["id"];
$vac_num = $_SESSION["status"];
$cID = $_POST["cid"];
$cID = substr($cID, 0, strpos($cID, ','));

include('../conn.php');

$sql = "SELECT * FROM Country WHERE C_ID ='$cID';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $cname = $row['Name'];
} else {
    echo "0 results1";
}

$sql_r = "SELECT * FROM Regulation WHERE `C_ID` = '$cID';";
$result_r = $conn->query($sql_r);

if ($result_r->num_rows > 0) {
    $requi = array(
        "ID" => array(),
        "Name" => array(),
        "PCR" => array(),
        "Quarantine" => array(),
        "Description" => array()
    );

    $i = 0;
    while ($row_r = $result_r->fetch_assoc()) {
        array_push($requi["ID"], $row_r['R_ID']);
        array_push($requi["Name"], $row_r['R_Name']);
        array_push($requi["PCR"], $row_r['PCR']);
        array_push($requi["Quarantine"], $row_r['Quarantine']);
        array_push($requi["Description"], $row_r['Description']);;
        $i++;
    }
} else {
    echo "0 results2";
}

$sql_v = "SELECT * FROM Required as A, Vaccine as B WHERE A.V_ID = B.V_ID AND A.C_ID ='$cID';";
$result_v = $conn->query($sql_v);
$_SESSION["name"] = $uname;
$_SESSION["id"] = $ID;
?>

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
    <script src="../src/jquery-3.5.1.min.js"></script>
    <script src="https://kit.fontawesome.com/f55f4b3e5c.js" crossorigin="anonymous"></script>
    <style>
        <?php include('../src/base.css'); ?>
        <?php include('../src/share_content.css'); ?>
        <?php include('../src/result.css'); ?>
    </style>
</head>

<body>
    <div class="container container_left">
        <div class="mx-auto wrapper_left">
            <div class="wrapper_sticky">
                <div class="bar">
                    <button class="btn btn_user rounded-pill">
                        <span id="badge" class="badge rounded-circle"> </span><label class="uname"></label>
                    </button>
                    <span id="bar_link"><a href="../view/login_view.php"><i class="fa fa-sign-out"></i>Log out.</a></span>
                </div>
                <div class="return">
                    <div>
                        <a href="../view/search_view.php" class="link"><i class="fa fa-arrow-left"></i> Searching results</a>
                    </div>
                </div>
                <div>
                    <img src="" id="flag_icon">
                    <h5 id="flag_txt"><?php echo $cname; ?></h5>
                </div>
            </div>

            <div class="content">
                <div>
                    <h5>Requirement:</h5>
                    <label>
                        <?php
                        for ($x = 0; $x < count($requi['ID']); $x++) {
                            if ($x > 0) {
                                $y = $x - 1;
                            } else {
                                $y = 1;
                            }
                            $tit = '<div class="mt-2" style="font-size:16px;font-weight:600">';
                            $content = '<p>';

                            if ($requi['Name'][$x] == '陰性檢測') {
                                if ($requi['Name'][$x] == $requi['Name'][$y]) {
                                    echo nl2br($requi['PCR'][$x] . " dose " . $requi['Description'][$x] . "</p>");
                                } else {
                                    echo nl2br($tit . $requi['Name'][$x] . ":<br></div>" . $content . $requi['PCR'][$x] . " dose " . $requi['Description'][$x] . "<br>");
                                }
                            } else {
                                if ($requi['Name'][$x] == $requi['Name'][$y]) {
                                    echo nl2br($requi['Quarantine'][$x] . $requi['Description'][$x] . "</p>");
                                } else {
                                    echo nl2br($tit . $requi['Name'][$x] . ":<br></div>" . $content . $requi['PCR'][$x] . $requi['Quarantine'][$x] . $requi['Description'][$x] . "<br>");
                                }
                            }
                        }

                        echo $tit . "認證疫苗:<br></div>";
                        if ($result_v->num_rows > 0) {
                            $vac = array(
                                "1" => array(),
                                "2" => array(),
                                "3" => array()
                            );

                            while ($row_v = $result_v->fetch_assoc()) {
                                if ($row_v['Dose'] == 1) {
                                    array_push($vac['1'], $row_v['BrandName']);
                                } elseif ($row_v['Dose'] == 2) {
                                    array_push($vac['2'], $row_v['BrandName']);
                                } elseif ($row_v['Dose'] == 3) {
                                    array_push($vac['3'], $row_v['BrandName']);
                                }
                            }

                            for ($x = 1; $x <= count($vac); $x++) {
                                if (count($vac[$x]) == 0) {
                                    continue;
                                }
                                echo "$x dose: ";
                                for ($y = 0; $y < count($vac[$x]); $y++) {
                                    if ($y == count($vac[$x]) - 1) {
                                        echo $vac[$x][$y];
                                    } else {
                                        echo $vac[$x][$y] . ', ';
                                    }
                                }
                                echo '<br>';
                            }
                        } else {
                            echo "無疫苗限制。";
                        }
                        ?>
                    </label>
                </div>
                <div class="dose mt-3 mb-3">
                    <label>Status:</label>
                    <?php
                    if ($vac_num >= 2) {

                        $color = '<label id="status" style="color:#48742C">';
                        $sign = '<i class="fa fa-check-circle mb-5"></i></label>';
                    } elseif ($vac_num <= 1) {

                        $color = '<label id="status" style="color:#B22222">';
                        $sign = '<i class="fa fa-times-circle mb-5"></i></label>';
                    }
                    echo $color . $vac_num . " dose " . $sign;
                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="container container_right">
        <div class="mx-auto wrapper_right">
            <h1>Comments</h1>
            <div class="comments"></div>           
            <div class="add_comment">
                <span>
                    <img src="../src/pic/user.png">
                    <label class="uname"></label>
                </span>
                <form class="add-comment-form">
                    <input id="ipt_com" class="d-grid col-12" type="text" autocomplete="off" placeholder="Share something...">
                </form>
            </div>
        </div>
    </div>



</body>

</html>

<script>
    $(document).ready(() => {
        document.getElementById('flag_icon').src = localStorage["country"];
        document.querySelectorAll(".uname")[0].innerHTML = localStorage["uname"];
        document.querySelectorAll(".uname")[1].innerHTML = localStorage["uname"];
        const commentsDOM = $('.comments');
        getComments(commentsDOM);

        $('.add-comment-form').submit((e) => {
            e.preventDefault();
            addComment(commentsDOM);
        });
    });

    function encodeHTML(s) {
        return s.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/"/g, '&quot;');
    }

    function addComment(commentsDOM) {
        const Context = $('#ipt_com').val();
        const remindMsg = '<div class="alert alert-danger mt-5" role="alert">Please enter the comment!</div>';

        if (Context === '') {
            alert('請輸入留言');
            return;
        }

        let newComment = {
            C_ID: localStorage["countryID"],
            U_Name: localStorage["uname"],
            Context,
        };

        $.ajax({
                url: '../controller/add_comment.php',
                data: newComment,
                dataType: 'text',
                type: 'POST',
            })
            .done((data) => {
                const result = JSON.parse(data);
                //newComment 沒有留言時間，因為這是後端自動產生的，所以多存一個時間
                newComment.created_at = result;
                appendCommentToDOM(commentsDOM, newComment, false);
                $('#ipt_com').val('');
                $('.alert').remove();
            })
            .fail(err => console.log(err));
    }

    function appendCommentToDOM(container, comment, isPrepend) {
        const html = `
            <div class="card m-2" style="color:#222222;">
                <div class="card-body">
                    <div class="card-top d-flex">
                        <h5 class="card-title"><img width="30px" src="../src/pic/user.png">&nbsp;&nbsp;${encodeHTML(comment.U_Name)}</h5>
                        <label  style="margin-left:auto">${comment.created_at}</label>
                    </div>
                    <p class="card-text">${encodeHTML(comment.Context)}</p>
                    <input hidden value="${comment.id}"/>
                </div>
            </div>`;
        if (isPrepend) {
            container.prepend(html);
        } else {
            container.append(html);
        }
    }

    function getCommentsAPI(cb) {
        $.ajax({
                url: '../controller/load_comment.php',
                data: {
                    C_ID: localStorage["countryID"],
                },
                type: 'POST'
            })
            .done(data => cb(data))
            .fail(err => console.log(err));
    }

    function getComments(commentsDOM) {
        getCommentsAPI((data) => {
            const comments = JSON.parse(data);
            for (let i = 0; i < comments.length; i += 1) {
                appendCommentToDOM(commentsDOM, comments[i], false);
            }
        });
    }

</script>