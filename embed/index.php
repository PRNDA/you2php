<?php 
if(!is_array($_GET)&&count($_GET)>0){ header("Location: ../error.php"); exit();}
include("../lib.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link href="//cdn.bootcss.com/video.js/5.20.4/alt/video-js-cdn.min.css" rel="stylesheet" />
         <script src="//libs.cdnjs.net/video.js/5.20.4/video.min.js"></script>
         <script type="text/javascript" src="../inc/4.js"></script>
         <link rel="stylesheet" href="../inc/theme.css" type="text/css">
    </head>
    <body>
    <div style="max-width:100%;height:auto">
      <video id="video1"  class="video-js vjs-fluid" loop="loop" width="100%" preload="auto"  webkit-playsinline="true" playsinline="true" x-webkit-airplay="true" controls="controls" controls preload="auto" width="100%" poster="../thumbnail.php?type=maxresdefault&vid=<?php echo $_GET['v'] ?>" >
    <source src="../vs.php?vv=<?php echo $_GET['v'] ?>&quality=720" type='video/mp4' res="720" label='720P'/>
    <source src="../vs.php?vv=<?php echo $_GET['v'] ?>&quality=360" type='video/mp4' res="360" label='360P' />
    <?php get_timedtext($_GET['v']);?>
    </video>
    <script>videojs('video1').videoJsResolutionSwitcher();</script> 
    </div>
                    
    </body>
</html>