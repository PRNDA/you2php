<?php
header("HTTP/1.0 404 Not Found");
$headtitle='错误提示！';
include("./header.php");?>

<div class="container-fluid" style="height: 480px;
    background-color: #dbdbdb;">
    <div class="container" style="height: 100%">
        <div class="row" style="height: 100%">
 <div class="col-12 justify-content-center align-self-center text-center">
     <img src="//wx3.sinaimg.cn/large/b0738b0agy1fm04l0cw4ej203w02s0sl.jpg" class="p-2" >
      <h2>请求的内容不存在！</h2>
      <p>非常抱歉，您请求的内容未能呈现!</p>
      <p>可能原因:</p>
      <p>1.你输入的链接地址有误！</p>
      <p>2.视频为版权内容（本站无法解析版权内容!）</p>
      <p>3.该视频不存在。</p>
      <p>4.网站服务器错误。</p>
  </div>

  </div>
    </div>
  
</div>


<?php
include("./footer.php"); 
?>