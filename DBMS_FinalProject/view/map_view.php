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
        <?php include('../src/share_content.css'); ?>
        <?php include('../src/map.css'); ?>
    </style>
</head>
<?php
session_start();
$uname = $_SESSION["name"];
?>
<body>
    <div class="container">
        <div class="mx-auto wrapper">
            <div class="bar">
                <button class="btn btn_user rounded-pill">
                    <span id="badge" class="badge rounded-circle">&nbsp;</span><?php echo $uname ?>
                </button>
                <span id="bar_link">
                    <a href="../view/login_view.php"><i class="fa fa-sign-out"></i>Log out.</a>
                </span>
            </div>
            <div class="return">
                <a href="../view/search_view.php"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;World explore</a>
            </div>
            <div class="mt-3">
                <div class='tableauPlaceholder' id='viz1652442015028' style='position: relative'><noscript><a href='#'><img alt='Sheet 1 ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;7Q&#47;7QZPSF347&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz' style='display:none;'>
                        <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                        <param name='embed_code_version' value='3' />
                        <param name='path' value='shared&#47;7QZPSF347' />
                        <param name='toolbar' value='yes' />
                        <param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;7Q&#47;7QZPSF347&#47;1.png' />
                        <param name='animate_transition' value='yes' />
                        <param name='display_static_image' value='yes' />
                        <param name='display_spinner' value='yes' />
                        <param name='display_overlay' value='yes' />
                        <param name='display_count' value='yes' />
                        <param name='language' value='zh-TW' />
                    </object>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<script>
    var divElement = document.getElementById('viz1652442015028');
    var vizElement = divElement.getElementsByTagName('object')[0];
    vizElement.style.width = '100%';
    vizElement.style.height = (divElement.offsetWidth * 0.43) + 'px';
    var scriptElement = document.createElement('script');
    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
    vizElement.parentNode.insertBefore(scriptElement, vizElement);
</script>