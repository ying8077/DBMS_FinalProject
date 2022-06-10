<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="../src/jquery-3.5.1.min.js"></script>

    

</head>

<body>
    <!-- <a href="#" onmouseover="display()" onmouseout="disappear()">
        滑鼠放到這兒！
    </a>
    <div id="box" onmouseover="display()" onmouseout="disappear()">
        效果不錯吧？這裡面你可以設定一張圖片，也可以是一段文字，
        而且原始碼很簡單哦！
    </div> -->
    
    <label style="text-decoration:underline" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </label>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body" >
                    <img id="image" style="width: 750px;height: 500px;" src="https://media.geeksforgeeks.org/wp-content/uploads/20210915115837/gfg3.png" alt="Click on button" />
                </div>
            </div>
        </div>
</body>

</html>
<!-- <style type="text/css">
    #box {
        display: none;
        width: 315px;
        height: 180px;
        background: #CCC;
        border: 1px solid #333;
        padding: 12px;
        text-align: center;
    }
</style>
<script type="text/javascript" language="javascript">
    function display() {
        document.getElementById("box").style.display = "block";
    }

    function disappear() {
        document.getElementById("box").style.display = "none";
    }
</script> -->