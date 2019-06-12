<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width" name="viewport">
    <title>网站缩略图生成</title>
    <meta name="keywords" content="网站缩略图，在线生成缩略图，多设备网站缩略图，生成缩略图"/>
    <meta name="description"
          content="网站缩略图在线生成工具站（ShrinkTheWeb，简称STW）是一个强大实用的免费网站缩略图在线生成服务站，它能够在短短的几秒钟内，透过您所输入的网址请求，产生该网站或网页的缩图。"/>
    <meta content="在线生成网站多设备缩略图" name="description">
    <link href="./css/ami.css?v=23022013" rel="stylesheet">
    <style>
        .ad {
            text-align: center;
            padding: 1em;
        }
    </style>
    <!-- IE8 BugFixes thanks to @ingozoell details arehttps://github.com/justincavery/am-i-responsive/issues/2?utm_source=buffer&utm_campaign=Buffer&utm_content=buffer8b8d6&utm_medium=twitter -->
    <!--[if IE 8]>
    <style>
        .desktop iframe {
            -ms-filter: "progid:DXImageTransform.Microsoft.Matrix(M11=0.3181, M12=0, M21=0, M22=0.3181, SizingMethod='auto expand')";
        }

        .laptop iframe {
            -ms-filter: "progid:DXImageTransform.Microsoft.Matrix(M11=0.277, M12=0, M21=0, M22=0.277, SizingMethod='auto expand')";
        }

        .tablet iframe {
            -ms-filter: "progid:DXImageTransform.Microsoft.Matrix(M11=0.234, M12=0, M21=0, M22=0.234, SizingMethod='auto expand')";
        }

        .mobile iframe {
            -ms-filter: "progid:DXImageTransform.Microsoft.Matrix(M11=0.219, M12=0, M21=0, M22=0.219, SizingMethod='auto expand')";
        }
    </style>
    <![endif]-->
    <!--[if lte IE 7]>
    <style>
        .desktop iframe {
            filter: progid:DXImageTransform.Microsoft.Matrix(
                    M11=0.3181,
                    M12=0,
                    M21=0,
                    M22=0.3181,
                    SizingMethod='auto expand');
        }

        .laptop iframe {
            filter: progid:DXImageTransform.Microsoft.Matrix(
                    M11=0.277,
                    M12=0,
                    M21=0,
                    M22=0.277,
                    SizingMethod='auto expand');
        }

        .tablet iframe {
            filter: progid:DXImageTransform.Microsoft.Matrix(
                    M11=0.234,
                    M12=0,
                    M21=0,
                    M22=0.234,
                    SizingMethod='auto expand');
        }

        .mobile iframe {
            filter: progid:DXImageTransform.Microsoft.Matrix(
                    M11=0.219,
                    M12=0,
                    M21=0,
                    M22=0.219,
                    SizingMethod='auto expand');
        }
    </style>
    <![endif]-->
</head>
<?php
//**指定默认生成默认网站地址请填入""之间
$t = "https://zhaoshuai.me";
if (isset($_POST["submit"])) {
    $t = htmlspecialchars($_POST['url'], ENT_QUOTES);
}
?>
<body class="ami">
<div class="wrapper">
    <section class="display">
        <div class="mobile ui-draggable">
            <div class="trim">
                <iframe src="<?php echo $t; ?>" id="mobile">
                </iframe>
            </div>
        </div>

        <div class="tablet ui-draggable">
            <div class="trim">
                <iframe src="<?php echo $t; ?>" id="tablet">
                </iframe>
            </div>
        </div>

        <div class="laptop ui-draggable">
            <div class="trim">
                <iframe src="<?php echo $t; ?>" id="laptop">
                </iframe>
            </div>
        </div>

        <div class="desktop ui-draggable">
            <div class="trim">
                <iframe src="<?php echo $t; ?>" id="desktop">
                </iframe>
            </div>
        </div>
    </section>
</div>

<section class="url">
    <div class="ad">
    </div>
    <h1></h1>
    <form id="rwdform" action="" method="post">
        <input type="text" placeholder="请输入网站地址" class="button1" value="<?php echo $t; ?>" name="url">
        <input class="button" type="submit" value="GO" name='submit'>
    </form>
</section>
</body>
</html>