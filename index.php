<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="ko" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <script type="text/javascript" language="JavaScript">
    var mobileKeyWords = new Array('iPhone', 'iPod', 'BlackBerry', 'Android', 'Windows CE', 'Windows CE;', 'LG', 'MOT', 'SAMSUNG', 'SonyEricsson', 'Mobile', 'Symbian', 'Opera Mobi', 'Opera Mini', 'IEmobile');
    for (var word in mobileKeyWords){
    if (navigator.userAgent.match(mobileKeyWords[word]) != null){
    window.location.href = "mobile_notice.html";
    break;
    }
    }
    </script>
    <script type="text/javascript" src="data/jp.js"></script>
    <link rel="stylesheet" type="text/css" href="data/newdesign.css">

      <title>Japan Tour</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width" />
        <link rel="apple-touch-icon" href="이미지경로.png" />
</head>
<body>
  <!--
   <?
    //if (empty($_GET['id']) == true){
      //echo("<script>location.replace('http://tahi96.dothome.co.kr/index.php?id=1');</script>");
    }
  ?>
  <div class="youtubeWrap">
  <iframe width="1080" height="1920" src="https://www.youtube.com/embed/c7rCyll5AeY?&autoplay=1" frameborder="0" allowfullscreen></iframe>
</div>-->
  <header>
    <div id="title">
      <h2>Kansai&Tokyo</h2>
      <h6>2016.12.29~2017.01.03</h6>
    </div>
  </header>
  <br>
    <!-- <p align="right"><font size="1" color=gray>이 페이지는 PC Chrome 브라우저에 최적화 되어 있습니다.</font></p>-->
  <nav class="navlink">
      <?php
        echo file_get_contents("data/list1.txt");
      ?>
  </nav>
  <br>
  <br>
  <article>
    <?php
      if (empty($_GET['id']) == false){
        echo file_get_contents("data/".$_GET['id'].".txt");
      }
    ?>

  </article>
</body>
</html>
