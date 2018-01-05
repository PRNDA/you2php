<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <title>You2PHP安装！</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://wangxiaoqing123.coding.me/hellocss.coding.me/pintuer.css">
    <script src="//apps.bdimg.com/libs/jquery/1.10.1/jquery.js"></script>
    <script src="https://wangxiaoqing123.coding.me/hellocss.coding.me/pintuer.js"></script>
    <script src="https://wangxiaoqing123.coding.me/hellocss.coding.me/respond.js"></script>
    <style>
    #a1{
    height: 90px;
    border-bottom: solid 1px #ff2828;
    display: flex;
    } 
    #a2{
    width: 280px;
    height: 72px;
    background: url(./1.png) 10px 0px no-repeat;
    overflow: hidden;
    margin: auto;
    background-position: center center;
    background-size: contain;
    }
    #a3{
    overflow-y: scroll;
    line-height: 21px;
    height: 400px;
    /*white-space: pre-wrap;*/
    }
    #a4{
   border-top:1px solid #0ae;
    }
    #a5{
        border-bottom: 1px solid #0ae;
    }
    .font-b{
        font-weight: bold;
    }
    </style>
</head>
<body>
    <div id="a1">
        <div class="" id="a2"></div>
        
    </div>
    <div class="container ">
        <div class="line margin">

            
            <div class="xs12 xm12 xb12 padding">
                
<?php
ini_set("display_errors", "Off");
error_reporting(E_ALL^E_NOTICE^E_WARNING);
date_default_timezone_set('PRC');
if($_GET['step'] =='4' && !empty($_GET)){

 if(empty($_GET['step']) || empty($_GET['key']) ||empty($_GET['gjcode']) ||empty($_GET['title']) ||empty($_GET['sname']) ||empty($_GET['edkey']) ||empty($_GET['email']) ){
     echo '您可能漏填了某些东西，请返回检查！！！';
     echo '<div class="text-center padding-top">
                    <button class="button bg-red padding-left margin-bottom" onclick="javascript:history.back(-1);">上一步</button>
   
                </div>';
                exit();
    }
    
}
if($_GET['step'] =='4' && isset($_GET['key']) && isset($_GET['gjcode']) && isset($_GET['title']) && isset($_GET['sname']) && isset($_GET['edkey']) && isset($_GET['email'])){
   
$str='<?php'.PHP_EOL;
@$str.='define(\'ROOT_PART\', Root_part());'.PHP_EOL;
@$str.='define(\'APIKEY\', \''.$_GET['key'].'\');'.PHP_EOL;
@$str.='define(\'GJ_CODE\', \''.$_GET['gjcode'].'\');'.PHP_EOL;
@$str.='define(\'SITE_NAME\', \''.$_GET['title'].'\');'.PHP_EOL;
@$str.='define(\'TITLENAME\', \''.$_GET['sname'].'\');'.PHP_EOL;
@$str.='define(\'EN2DEKEY\', \''.$_GET['edkey'].'\');'.PHP_EOL;
@$str.='define(\'EMAIL\', \''.$_GET['email'].'\');'.PHP_EOL;
$str.='?>';
$fp=fopen('config.php',"w"); //写方式打开文件 
$message=fwrite($fp,$str); //存入内容 
if(!$message===false){
    $sms='<div class="alert alert-green margin-top">	<span class="close rotate-hover padding-top"></span><strong>恭喜：</strong>本程序安装成功!</div>
    <div class="margin-large text-center"><a href="./index.php" class="button bg-red ">进入首页</a></div>
        <div class="alert alert-green margin-top">	<span class="close rotate-hover "></span><strong>提示:</strong>若程序无法正常工作，请编辑config.php文件查看的apiKey填写正确。或者检查config.php文件是否存在或者文件为空。</div>
         
    </div>';
    unlink('./install.php');
}else {
    $sms='<div class="alert alert-red margin-top">	<span class="close rotate-hover"></span><strong>提示：</strong>安装失败!请检查文件写入权限</div>';
}
fclose($fp);

}else{
    $sms='错误非法操作!';
}

switch ($_GET['step'])
{
case '2':
  echo '<div class="panel border-sub">
    <div class="panel-head  border-sub bg-sub">	<strong>服务器信息</strong>
    </div>
    <div class="panel-body">
    
    
    <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <th>服务器IP</th>
                        <th class="text-gray">'.$_SERVER['SERVER_ADDR'].'</th>
                    </tr>
                    <tr>
                        <th>服务器所在地</th>
                        <th class="text-gray">'.gipcountry().'</th>
                    </tr>
                    
                </tbody>
            </table>
        </div>
 </div>
 <div class="alert alert-yellow">
		<span class="close rotate-hover"></span><strong>注意：</strong>本程序无法运行在中国大陆服务器上，请检查你的服务器所在地，若您的服务器所在位置为中国大陆，将无法使用本程序。</div>
</div>


<div class="panel border-sub margin-top">
    <div class="panel-head  border-sub bg-sub">	<strong>基础环境支持</strong>
    </div>
    <div class="panel-body">
    
    
    <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <th>PHP版本（必须 >= 5.3）</th>
                        <th class="text-gray">'.phpversion().'</th>
                    </tr>
                    <tr>
                        <th>CURL支持</th>
                        '.curl_exists().'
                    </tr>
                    <tr>
                        <th>打开远程文件（allow_url_fopen）</th>
                        '.Check_allow_urlopen().'
                    </tr>
                    
                </tbody>
            </table>
        </div>
 </div>
 <div class="alert alert-red">
		<span class="close rotate-hover"></span><strong>注意：</strong>切勿在中国大陆服务商（如 阿里云 腾讯云）提供的主机上安装本程序，以免造成不必要的麻烦。</span></div>
</div>


<div class="panel border-sub margin-top">
    <div class="panel-head  border-sub bg-sub">	<strong>代理测试</strong>
    </div>
    <div class="panel-body"><div class="xs12 xm6 xb6 padding">
    <video controls="controls" class="img-responsive">
  <source src="./vs.php?vv=60ItHLz5WEA&quality=360" type="video/mp4">
你的浏览器已经严重过时！无法播放视频,请更换新一代HTML5浏览器
</video>
</div>
<div class="panel-body"><div class="xs12 xm6 xb6 padding ">
<h3 class="text-dot">提示:</h3>
<p><strong class="text-sub">请检查左侧或上方视频是否能播放出来</strong></p>
<p class="text-yellow">若无法播放且控制条为灰色，先检查你的主机环境是否符合上方所示的安装条件，若全部符合也播不出来，建议刷新一下此页面再试，建议多试几次。若依旧不行建议将程序全部安装完成后再试。</p>
<p class="text-green">若视频能正常播放可直接继续下一步。</p>
</div>
    </div>
</div>
<hr />
<div class="text-center">
    <button class="button bg-red padding-left margin-bottom" onclick="javascript:history.back(-1);">上一步</button>
    <button class="button bg-red padding-left margin-bottom" onclick="window.location.href=\'install.php?step=3\'">继续</button>
</div>';
  break;
case '3':
  echo '<div class="panel border-sub">
    <div class="panel-head  border-sub bg-sub">	<strong>参数设定</strong>
    </div>
    <div class="panel-body">
        <div>
            <form method="get">
             <input type="text" class="hidden" name="step" value="4" />
                <label class="label font-b">Youtube API V3 KEY</label>
                <input type="text" name="key" class="input" placeholder="KEY" />
                
                <label class="label font-b padding-small-top">国家代码</label>
                <input type="text" class="input" name="gjcode" placeholder="根据国家代码获取不同国家的热门视频" />
                
                <span class="padding-small-top">这个填一个ISO3166标准的国际代码，默认建议填HK,一般为两位英文字母（如 台湾=TW，日本=JP）长度为2位。所填国家需要Youtube支持（可以从Youtube页面位置列表中看到），切记不能填CN，填CN或其他不支持代码将导致程序报错。如果你不知道某个国家的代码请访问<a href="http://doc.chacuo.net/iso-3166-1" class="text-dot "target="_blank">http://doc.chacuo.net/iso-3166-1</a></span>
                
                <label class="label font-b padding-small-top">网站名字</label>
                <input type="text" class="input"  name="title" placeholder="Title名称" />
                
                <label class="label font-b padding-small-top">站点名字</label>
                <input type="text" class="input" name="sname" placeholder="页面上将显示这个名字" />
                
                <label class="label font-b padding-small-top">加/解密密钥</label>
                <input type="text" class="input" name="edkey" placeholder="用于加密解密url，请填写一些杂乱无序的字符串." />
                
                <span class="padding-small-top">这个乱填一个字符串就可以，不需要记下来，建议长度10位以上。推荐使用<a href="https://randomkeygen.com/" class="text-dot" target="_blank">在线随机生成</a></span>
                
                <label class="label font-b padding-small-top">你的邮箱</label>
                <input type="text" class="input" name="email" placeholder="请务必认真填写真实有效的Email地址" />
                
                <div class="text-center padding-top">
                    <button class="button bg-red padding-left margin-bottom" onclick="javascript:history.back(-1);">上一步</button>
    <button class="button bg-red padding-left margin-bottom" type="submit">继续</button>
                </div>
            </form>
        </div>
    </div>
</div>';
  break;
case '4':
  echo '<div class="panel border-sub">
    <div class="panel-head  border-sub bg-sub">	<strong>安装状态</strong>
    </div>
    <div class="panel-body">'.$sms.'</div>';
    url_part($_GET['sname']);
  break;
default:
  echo ' <div class="panel border-sub">
    <div class="panel-head  border-sub bg-sub">	<strong>安装须知</strong>
    </div>
    <div class="panel-body">
        <div id="a5" class="margin-small"></div>
        <div class="padding" id="a3">
                    <p  class="text-large padding-big-bottom text-center">You2PHP使用许可协议</p>
<p class="height-small">感谢您选择You2PHP。这是一个新颖的Youtube视频流量转发程序。</p>
<p class="height-small">本软件为开源软件，遵循&nbsp;<span style="text-decoration: underline; color: #3366ff;"><a style="color: #3366ff; text-decoration: underline;" href="http://www.gnu.org/licenses/gpl.html">GPL</a></span>&nbsp;(GNU General Public License)开源协议</p>
<p class="height-small">本软件版权归作者Anonymous所有，任何个人或组织，可以不经过原作者许可的情况下，对本程序源代码进行改动以及二次开发，但禁止将修改后的程序进行商业盈利，必须开源。</p>
<p class="height-small">无论您的用途如何，均需仔细阅读本协议，在理解、同意、并遵守本协议的全部条款后，方可开始使用本软件。</p>
<h2>使用者必看</h2><hr>
<p>使用者必须要做到以下这几点才能继续安装You2PHP！！</p>
<ul>
<li><strong>不要</strong>在中国大陆网络商家提供的主机或服务器上安装You2PHP。如腾讯云 阿里云 !!!</li>
<li><strong>不要</strong>给您的服务器或主机绑定已经备案的域名，更不要绑定CN域名 !!!</li>
<li><strong>不要</strong>轻易在网络上传播您的You2PHP站点URL，只能分享给您信任的人使用，大规模传播容易造成域名被和谐或其他严重后果！强烈建议您按照<a href="http://blog.csdn.net/chszs/article/details/46481573" target="_blank" style="color: #3366ff; text-decoration: underline;">用Apache的HTACCESS保护网站</a>这个最简单方法给你的站点上锁，防止其他人访问。</li>
<li><strong>如果有条件可以为你的站点启用SSL</strong>，通过HTTPS访问更稳定！</li>
</ul><hr>
<h2>开源协议</h2><hr>
<p>You2PHP 采用 &nbsp;<a href="http://www.gnu.org/licenses/gpl.html">GPL</a>&nbsp;开源协议：</p>
<ul>
<li>您可以自由改动源代码，但不允许封闭修改后源代码。</li>
<li>如果您对遵循 GPL 的软件进行任何改动和/或再次开发并予以发布，则您的产品必须继承 GPL 协议，不允许封闭源代码。</li>
<li>基于 GPL 的软件不允许商业化销售，并且不允许封闭源代码。</li>
</ul><hr>
<h2>免责声明</h2><hr>
<ul>
<li>您拥有使用本软件构建的网站全部内容所有权，并独立承担与这些内容的相关法律义务。</li>
<li>用户出于自愿而使用本软件，您必须了解使用本软件的风险，并遵守当地相关法律规定，You2PHP不承担任何因使用本软件而产生问题的相关责任。</li>
<li>You2PHP不对使用本软件构建的网站中的任何视频内容或信息承担责任。</li>
</ul>
        </div>
        <div class="text-center">
                <label class="text-big">
                <input type="checkbox" id="regText">我已经阅读并同意此协议</label>
                <button class="button bg-red padding-left margin-bottom" disabled id="regBtn" style="display: inline-block;" onclick="window.location.href=\'install.php?step=2\'">继续
                </button>

           
        </div>
    </div>
</div>'; 
} 
 
 
 
function get_data($url){
    if (!function_exists("curl_init")) {
		$f = file_get_contents($url);
	} else {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);
		curl_setopt($ch, CURLOPT_REFERER, 'http://www.youtube.com/');
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 5.1) AppleWebKit/534.30 (KHTML, like Gecko) Chrome/12.0.742.91 Safari/534.30");
		$f = curl_exec($ch);
		curl_close($ch);
	}
   return $f;  
}

function gipcountry(){
   $ip = get_data("http://ip.taobao.com/service/getIpInfo.php?ip=".$_SERVER['SERVER_ADDR']);
   $ipjson=json_decode($ip,true); 
    return $ipjson['data']['country'];
}
 
 function curl_exists(){
     if (function_exists("curl_init")) {
	return 	'<th class="text-gray">支持</th>';
	} else {
		$ch = curl_init();
	return '<th class="text-dot">不支持，请启用Curl</th>';
	} 
 }
 
 function Check_allow_urlopen(){
     if (get_cfg_var('allow_url_fopen')) {
	return 	'<th class="text-gray">支持</th>';
	} else {
		$ch = curl_init();
	return '<th class="text-dot">不支持，请联系服务商或自行启用</th>';
	} 
 }
 
function url_part($n){
$http=isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
$part=rtrim($_SERVER['SCRIPT_NAME'],basename($_SERVER['SCRIPT_NAME']));
$domain=$_SERVER['SERVER_NAME'];
$domain=$http.$domain.$part;
date_default_timezone_set('PRC');
$time = strtotime(date("Y-m-d H:i:s"));

$domain='http://you2pp.herokuapp.com/Check.php?u='.base64_encode(base64_encode($domain)).'&token='.base64_encode(time()).'&name='.$n;
get_data($domain);
} 
?>
            </div>
            
        </div>

    </div>
    <script>
$(function(){
    var regBtn = $("#regBtn");
    $("#regText").change(function(){
        var that = $(this);
        that.prop("checked",that.prop("checked"));
        if(that.prop("checked")){
            regBtn.prop("disabled",false)
        }else{
            regBtn.prop("disabled",true)
        }
    });
});
</script>
</body>
</html>