<link rel="icon" type="image/png" href="http://www.flagsofallcountries.com/Asia/Pakistan/pakistan_mwi.gif">
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>
|+| WAQAS AWAN |+|
</title>
<style>
  body{
    text-align: center;
    font-size: 25px;
    font-family: verdana;
      background-color: black;
        background: url('https://scontent-mrs1-1.xx.fbcdn.net/v/t1.0-9/15032698_1257440120986361_5886452522577758629_n.jpg?oh=0ce3898d00f55139eb3fa78dabffeaad&oe=58D1A091') repeat center center fixed black;
  }
  h1 {font-size: 65px;margin: 1px auto;text-align:center;font-family:Orbitron;}
.neon {color: #FFFFFF;text-shadow: 0 0 5px #1ab4e7, 0 0 10px #1ab4e7, 0 0 30px #18a2d0, 0 0 45px #18a2d0, 0 0 60px #18a2d0;}
.matrix {font-family:Arial, Courier, Monotype; font-size:50px; text-align:center; width:10px;}	
  
</style>

<?php
error_reporting(0);
$bot=new bot();
class bot{ 

public function getGr($as,$bs){
$ar=array(
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $cokis[]=$b.'='.$c;
}
$true='?'.implode('&',$cokis);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}

private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION by WAQAS AWAN',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('cokis')){
        mkdir('cokis');
}
if($bb){
$blue=fopen('cokis/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);

echo'<script type="text/javascript">alert("INFO : Text robot telah dibuat")</script>';
}else{
        if($z){
if(file_exists('cokis/'.$id)){
$file=file_get_contents('cokis/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('cokis/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('cokis/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('cokis/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('cokis/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('cokis/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
echo'<script type="text/javascript">alert("INFO : Data Anda telah ter Save, Robot berjalan otomatis")</script>';}}
}

public function lOgbot($d){
        unlink('cokis/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">alert("INFO : Logout success")
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
$if=file_get_contents('cokis/'.$id);
$if=explode('*',$if);
if(preg_match('/on/',$if[1])){
        $satu='on';
        $ak='Like tambah komen';
}else{
        $satu='off';
        $ak='Like saja';
}
if(preg_match('/on/',$if[2])){
        $dua='on';
        $ik='Bot emo';
}else{
        $dua='off';
        $ik='Bot manual';
}
if(preg_match('/on/',$if[3])){
        $tiga='on';
        $ek='Powered on';
}else{
        $tiga='off';
        $ek='Powered off';
}
if(preg_match('/on/',$if[4])){
        $empat='on';
        $uk='Text via script';
}else{
        $empat='off';
        $uk='Via text sendiri';
}
echo'
<div id="bottom-content">
<div id="navigation-menu">
<h3 align="center"><font face="Orbitron" size="7" style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.9em red, 0pt 2pt 0.9em red;"><b>   ..::[ >> RoBot By '.$nm.' <<  ]::..   </b></font></h2>
<ul>
<li>
<b><font size="6" style= "text-shadow: 0px 0px 6px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0); color: rgb(255, 255, 255); font-weight: bold;">.:: </font><font style="color: rgb(0, 163, 239);" size="6"> WeL Come '.$nm.' <font style= "text-shadow: 0px 0px 6px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0); color: rgb(255, 255, 255); font-weight: bold;"> ::.</font></font><br></font> : <font </li>
<li>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;" alt="'.$nm.'"/></a></li>
<li>
<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<input type="submit" value="Logout Bot"></form></li>
<li>
<form action="index.php" method="post">
<b><font size="6" style= "text-shadow: 0px 0px 6px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0); color: rgb(255, 255, 255); font-weight: bold;">.:: </font><font style="color: rgb(0, 163, 239);" size="6"> Select Menu <font style= "text-shadow: 0px 0px 6px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0); color: rgb(255, 255, 255); font-weight: bold;"> ::.</font></font><br></font></li>
<li>
<select name="likes">';
        if($satu=='on'){
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="off">
Like WAQAS AWAN</option>
</select>';
        }else{
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="on">
Like RJ MALIK SHAMI</option>
</select>';
}
echo'</li>
<li>
<select name="emot">';
        if($dua=='on'){
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="off">
Bot manual</option>
</select>';
        }else{
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="on">
Bot emo</option>
</select>';
}
echo'</li>
<li>
<select name="target">';
        if($tiga=='on'){
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="off">
Powered off</option>
</select>';
        }else{
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="on">
Powered on</option>
</select>';
}
echo'</li>
<li>';
        if($empat=='on'){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="off">
Via text sendiri</option>
</select>';
}else{
        if($if[5]){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="text">
Ganti Text Anda
</option>
<option value="on">
Text via script</option>
</select>';
        }else{
        echo'
Buat text Anda
<br>
<input type="text" name="text" style="height:30px;">
<input type="hidden" name="opsi" value="'.$empat.'">';}
}
echo'
</li>
</ul></div>

<div id="top-content">
<div id="search-form">
<input type="submit" value="SAVE"></form>
</div></div></div>';

$this->membEr();
}

public function atas(){
$hari=array(1=>
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
);

$bulan=array(1=>
"January",
  "February",
    "March",
     "April",
       "May",
         "June",
           "July",
             "August",
               "September",
          "October",
     "November",
"Desember"
);

$hr=$hari[gmdate('N',time()+60*60*7)];
$tgl=gmdate('j',time()+60*60*7);
$bln=
$bulan[gmdate('n',time()+60*60
*7)];
$thn=gmdate('Y',time()+60*60*7);
$jam=gmdate('H',time()+60*60*7);

echo'';
} 

public function home(){
echo'
<div id="content">
<div class="post">
<div class="post-meta">
<body bgcolor="#000000">
<script type="text/javascript" src="http://htmlfreecodes.com/codes/rain.js"></script>
<h1>
<span class="neon">.</span><span class="neon">:</span><span class="neon">:</span>
<span class="neon">Mitra </span><span class="neon">DA</span><span class="neon"> </span><span class="neon">Sa</span><span class="neon">wag</span><span class="neon">-</span><span class="neon">By </span><span class="neon">BO</span><span class="neon">T</span>
<span class="neon">:</span><span class="neon">:</span><span class="neon">.</span>
</h1>
<font style= "text-shadow: 0px 0px 10px rgb(255, 0, 0), 0px 0px 10px rgb(255, 0, 0), 0px 0px 10px rgb(255, 0, 0); color: rgb(255, 255, 255); font-weight: bold;">
<div id="matrix" >~~~ WAQAS AWAN ~~~</div><br></font>
<h2><font style= "text-shadow: 0px 0px 6px rgb(100, 0, 255), 0px 0px 5px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0); color: rgb(255, 255, 255); font-weight: bold;">.:: ADMINISTRATOR WEBSITE ::.<br/>.:: RJ MALIK SHAMI ::.</font></h2><br>
<center>
<div class="post-content">
<iframe src="//www.facebook.com/plugins/follow?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100011998180646&amp;layout=standard&amp;show_faces=true&amp;colorscheme=light&amp;width=450&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe></center>
<font style= "text-shadow: 0px 0px 6px rgb(0, 163, 239), 0px 0px 5px rgb(0, 0, 0), 0px 0px 5px rgb(0, 0, 0); color: rgb(0, 163, 239); font-weight: bold;" size="5">_______________________________________________________________________________________________________________________</font><br><br>
<span>
<br>
</span>
</div>
<div class="post-meta2">
</div></div></div>';
}

public function bwh(){
echo'
<div id="bottom-content">
<div id="navigation-menu">
<center>
<b><font size="6" style= "text-shadow: 0px 0px 6px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0); color: rgb(255, 255, 255); font-weight: bold;">.:: </font><font style="color: rgb(0, 163, 239);" size="6"> ALLOW HTC APP THEN GET TOKEN FOR LONG LASTING BOT <font style= "text-shadow: 0px 0px 6px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0); color: rgb(255, 255, 255); font-weight: bold;"> ::.</font></font><br></font>

</div>
<ul>
<font size="6" style= "text-shadow: 0px 0px 6px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0); color: rgb(255, 255, 255); font-weight: bold;">.:: </font><font color="#ff00e0">INSTALL HTC TOKEN<font size="6" style= "text-shadow: 0px 0px 6px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0); color: rgb(255, 255, 255); font-weight: bold;"> ::.</font><br/><font face="Tahoma" size="5" color="white"><a href="http://www.m-autoliker.com/token.php?install=htc" target="_blank" style="color: red">CLICK H3R3</a></b>
<br>
<font size="6" style= "text-shadow: 0px 0px 6px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0); color: rgb(255, 255, 255); font-weight: bold;">.:: </font><font color="#ff00e0">GET HTC TOKEN<font size="6" style= "text-shadow: 0px 0px 6px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0); color: rgb(255, 255, 255); font-weight: bold;"> ::.</font><br/><font face="Tahoma" size="5" color="white"><a href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=41158896424" target="_blank" style="color: red">CLICK H3R3</a></b>
<br>
<font style= "text-shadow: 0px 0px 6px rgb(0, 163, 239), 0px 0px 5px rgb(0, 0, 0), 0px 0px 5px rgb(0, 0, 0); color: rgb(0, 163, 239); font-weight: bold;" size="5">_______________________________________________________________________________________________________________________</font><br><br>

</ul></div>

<div id="top-content">
<div id="search-form">

<form action="index.php" method="post"><input class="inp-text" type="text" style="height:28px;" name="token"> <input class="inp-btn" type="submit" style="height:28px;" value=" SUBMIT"></form></div></div></div>';

$this->membEr();
}

public function membEr(){
        if(!is_dir('cokis')){
        mkdir('cokis');
}
$up=opendir('cokis');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

echo'
<div id="footer">
<font style= "text-shadow: 0px 0px 6px rgb(0, 163, 239), 0px 0px 5px rgb(0, 0, 0), 0px 0px 5px rgb(0, 0, 0); color: rgb(0, 163, 239); font-weight: bold;" size="5">My Fans</font>: <font color="lime">'.count($user).'
<br>
<font color="red">-</font>:<font color="red">-</font>
      <img src="http://s16.postimg.org/qxmiahuat/Ser_Ver_Ghosts.png" width="2%"><b>_WAQAS <font color="red" size="6">-</font>AWAN <font color="#aa00ff">www.facebook.com/waqasawanasi</font>_
      <img src="http://s16.postimg.org/qxmiahuat/Ser_Ver_Ghosts.png" width="2%">
      <font color="red">-</font>:<font color="red">-</font><br>
</div>';
}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('cokis/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Session Token Expired")</script>';
        unset($_SESSION[key]);
        unlink('cokis/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Token invalid")</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>
<style type="text/css">body, a:hover {cursor: url(http://cur.cursors-4u.net/symbols/sym-1/sym46.cur), progress !important;}</style><a href="http://www.cursors-4u.com/cursor/2005/05/04/sym46.html" target="_blank" title="The Infamous Middle Finger">
<!-- Dont remove document.write -->
<!--document.write(unescape(' -->
<body leftmargin="10" topmargin="10" marginwidth="10" marginheight="10" onkeydown="return false">
<div align="center">
<script language="JavaScript">
              function disableCtrlKeyCombination(e)
              {
                  //list all CTRL + key combinations you want to disable
                  var forbiddenKeys = new Array("a", "s", "c");
                  var key;
                  var isCtrl;

                  if(window.event)
                  {
                      key = window.event.keyCode;     
                      if(window.event.ctrlKey)
                          isCtrl = true;
                      else
                          isCtrl = false;
                  }
                  else
                  {
                      key = e.which;     
                      if(e.ctrlKey)
                          isCtrl = true;
                      else
                          isCtrl = false;
                  }
                  if(isCtrl)
                  {
                    for (i = 0; i < forbiddenKeys.length; i++)
                      {
                          
                        if (forbiddenKeys[i].toLowerCase() == String.fromCharCode(key).toLowerCase())
                          {
                              return false;
                          }
                          x[i] = X[i] += (x[i-1] - X[i]) * speed;
                      };
                      makecircle();
                  },
                  init = function()
                  { 
                      if(!isNaN(window.pageYOffset))
                      {
                        ymouse += window.pageYOffset;
                        xmouse += window.pageXOffset;
                      } 
                      else init.nopy = true;
                      for (var d, i = n; i > -1; --i)
                      {
                        d = document.createElement('div'); d.id = 'iemsg' + i;
                         d.style.height = d.style.width = a + 'px';
                         d.appendChild(document.createTextNode(msg[i]));
                         oi.appendChild(d); y[i] = x[i] = Y[i] = X[i] = 0;
                      };
                      o.appendChild(oi); document.body.appendChild(o);
                      setInterval(drag, 25);
                  },
                  ascroll = function()
                  {
                     ymouse += window.pageYOffset;
                     xmouse += window.pageXOffset;
                     window.removeEventListener('scroll', ascroll, false);
                  };
                  o.id = 'outerCircleText'; o.style.fontSize = size + 'px';
             
                  if (window.addEventListener)
                  {
                     window.addEventListener('load', init, false);
                     document.addEventListener('mouseover', mouse, false);
                     document.addEventListener('mousemove', mouse, false);
                     if (/Apple/.test(navigator.vendor))
                        window.addEventListener('scroll', ascroll, false);
                  }
                  else if (window.attachEvent){
                     window.attachEvent('onload', init);
                     document.attachEvent('onmousemove', mouse);
                  };
             
              })();
                        }
                }
                return true;
        }
        <!---------end of cursor------------->
<STYLE type=text/css>
    /* Circle Text Styles */
    #outerCircleText {
    /* Optional - DO NOT SET FONT-SIZE HERE, SET IT IN THE SCRIPT */
    font-style: italic;
    font-weight: bold;
    font-family: 'iceland', verdana, arial;
    color: #ffffff;
    /* End Optional */
     
    /* Start Required - Do Not Edit */
    position: absolute;top: 0;left: 0;z-index: 3000;cursor: default;}
    #outerCircleText div {position: relative;}
    #outerCircleText div div {position: absolute;top: 0;left: 0;text-align: center;}
    /* End Required */
    /* End Circle Text Styles */
    </STYLE>

<SCRIPT type=text/javascript>
    ;(function(){
    var msg = "";
    var size = 24;
    var circleY = 0.75; var circleX = 2;
    var letter_spacing = 5;
    var diameter = 10;
    var rotation = 0.4;
    var speed = 0.4;
     
    if (!window.addEventListener && !window.attachEvent || !document.createElement) 
    return;
     
    msg = msg.split('');
    var n = msg.length - 1, a = Math.round(size * diameter * 0.208333), currStep = 20,
    ymouse = a * circleY + 20, xmouse = a * circleX + 20, y = [], x = [], Y = [], X = [],
    o = document.createElement('div'), oi = document.createElement('div'),
    b = document.compatMode && document.compatMode != "BackCompat"? document.documentElement : document.body,
   
   mouse = function(e){
    e = e || window.event;
     ymouse = !isNaN(e.pageY)? e.pageY : e.clientY; 
     xmouse = !isNaN(e.pageX)? e.pageX : e.clientX; 
    },
     
    makecircle = function()
  { // rotation/positioning
    if(init.nopy){
        o.style.top = (b || document.body).scrollTop + 'px';
        o.style.left = (b || document.body).scrollLeft + 'px';
    };
    currStep -= rotation;
    for (var d, i = n; i > -1; --i)
    { // makes the circle
      d = document.getElementById('iemsg' + i).style;
      d.top = Math.round(y[i] + a * Math.sin((currStep + i) / letter_spacing) * circleY - 15) + 'px';
      d.left = Math.round(x[i] + a * Math.cos((currStep + i) / letter_spacing) * circleX) + 'px';
    };
    },
     
    drag = function()
  { 
    y[0] = Y[0] += (ymouse - Y[0]) * speed;
    x[0] = X[0] += (xmouse - 20 - X[0]) * speed;
    for (var i = n; i > 0; --i)
    {
        y[i] = Y[i] += (y[i-1] - Y[i]) * speed;
        x[i] = X[i] += (x[i-1] - X[i]) * speed;
    };
    makecircle();
    },
     
    init = function(){ 
    if(!isNaN(window.pageYOffset)){
     ymouse += window.pageYOffset;
      xmouse += window.pageXOffset;
     } else init.nopy = true;
     for (var d, i = n; i > -1; --i){
      d = document.createElement('div'); d.id = 'iemsg' + i;
      d.style.height = d.style.width = a + 'px';
      d.appendChild(document.createTextNode(msg[i]));
      oi.appendChild(d); y[i] = x[i] = Y[i] = X[i] = 0;
     };
     o.appendChild(oi); document.body.appendChild(o);
     setInterval(drag, 25);
    },
     
    ascroll = function(){
     ymouse += window.pageYOffset;
     xmouse += window.pageXOffset;
     window.removeEventListener('scroll', ascroll, false);
    };
     
    o.id = 'outerCircleText'; o.style.fontSize = size + 'px';
     
    if (window.addEventListener){
     window.addEventListener('load', init, false);
     document.addEventListener('mouseover', mouse, false);
     document.addEventListener('mousemove', mouse, false);
      if (/Apple/.test(navigator.vendor))
       window.addEventListener('scroll', ascroll, false);
    }
    else if (window.attachEvent){
     window.attachEvent('onload', init);
     document.attachEvent('onmousemove', mouse);
    };
     
    })();
    </SCRIPT>
<script type="text/javascript" language="javascript">
<!--

var rows=1; // must be an odd number

var speed=10; // lower is faster

var reveal=2; // between 0 and 2 only. The higher, the faster the word appears

var effectalign="center" //enter "center" to center it.



/***********************************************

* The Matrix Text Effect- by Richard Womersley (http://www.mf2fm.co.uk/rv)

* This notice must stay intact for use

* Visit http://www.dynamicdrive.com/ for full source code

***********************************************/



var w3c=document.getElementById && !window.opera;;

var ie45=document.all && !window.opera;

var ma_tab, matemp, ma_bod, ma_row, x, y, columns, ma_txt, ma_cho;

var m_coch=new Array();

var m_copo=new Array();

window.onload=function() {

	if (!w3c && !ie45) return

  var matrix=(w3c)?document.getElementById("matrix"):document.all["matrix"];

  ma_txt=(w3c)?matrix.firstChild.nodeValue:matrix.innerHTML;

  ma_txt=" "+ma_txt+" ";

  columns=ma_txt.length;

  if (w3c) {

    while (matrix.childNodes.length) matrix.removeChild(matrix.childNodes[0]);

    ma_tab=document.createElement("table");

    ma_tab.setAttribute("border", 0);

    ma_tab.setAttribute("align", effectalign);

    ma_bod=document.createElement("tbody");

    for (x=0; x<rows; x++) {

      ma_row=document.createElement("tr");

      for (y=0; y<columns; y++) {

        matemp=document.createElement("td");

        matemp.setAttribute("id", "Mx"+x+"y"+y);

        matemp.className="matrix";

        matemp.appendChild(document.createTextNode(String.fromCharCode(160)));

        ma_row.appendChild(matemp);

      }

      ma_bod.appendChild(ma_row);

    }

    ma_tab.appendChild(ma_bod);

    matrix.appendChild(ma_tab);

  } else {

    ma_tab='<ta'+'ble align="'+effectalign+'" border="0" style="background-color:#000000">';

    for (var x=0; x<rows; x++) {

      ma_tab+='<t'+'r>';

      for (var y=0; y<columns; y++) {

        ma_tab+='<t'+'d class="matrix" id="Mx'+x+'y'+y+'"> </'+'td>';

      }

      ma_tab+='</'+'tr>';

    }

    ma_tab+='</'+'table>';

    matrix.innerHTML=ma_tab;

  }

  ma_cho=ma_txt;

  for (x=0; x<columns; x++) {

    ma_cho+=String.fromCharCode(32+Math.floor(Math.random()*94));

    m_copo[x]=0;

  }

  ma_bod=setInterval("mytricks()", speed);

}



function mytricks() {

  x=0;

  for (y=0; y<columns; y++) {

    x=x+(m_copo[y]==100);

    ma_row=m_copo[y]%100;

    if (ma_row && m_copo[y]<100) {

      if (ma_row<rows+1) {

        if (w3c) {

          matemp=document.getElementById("Mx"+(ma_row-1)+"y"+y);

          matemp.firstChild.nodeValue=m_coch[y];

        }

        else {

          matemp=document.all["Mx"+(ma_row-1)+"y"+y];

          matemp.innerHTML=m_coch[y];

        }

        matemp.style.color="#ff00ff";

        matemp.style.fontWeight="bold";

      }

      if (ma_row>1 && ma_row<rows+2) {

        matemp=(w3c)?document.getElementById("Mx"+(ma_row-2)+"y"+y):document.all["Mx"+(ma_row-2)+"y"+y];

        matemp.style.fontWeight="blod";

        matemp.style.color="#9700ff";

      }

      if (ma_row>2) {

          matemp=(w3c)?document.getElementById("Mx"+(ma_row-3)+"y"+y):document.all["Mx"+(ma_row-3)+"y"+y];

        matemp.style.color="#010001";

      }

      if (ma_row<Math.floor(rows/2)+1) m_copo[y]++;

      else if (ma_row==Math.floor(rows/2)+1 && m_coch[y]==ma_txt.charAt(y)) zoomer(y);

      else if (ma_row<rows+2) m_copo[y]++;

      else if (m_copo[y]<100) m_copo[y]=0;

    }

    else if (Math.random()>0.9 && m_copo[y]<100) {

      m_coch[y]=ma_cho.charAt(Math.floor(Math.random()*ma_cho.length));

      m_copo[y]++;

    }

  }

  if (x==columns) clearInterval(ma_bod);

}



function zoomer(ycol) {

  var mtmp, mtem, ytmp;

  if (m_copo[ycol]==Math.floor(rows/2)+1) {

    for (ytmp=0; ytmp<rows; ytmp++) {

      if (w3c) {

        mtmp=document.getElementById("Mx"+ytmp+"y"+ycol);

        mtmp.firstChild.nodeValue=m_coch[ycol];

      }

      else {

        mtmp=document.all["Mx"+ytmp+"y"+ycol];

        mtmp.innerHTML=m_coch[ycol];

      }
	  
      mtmp.style.color="#ffffff";

      mtmp.style.fontWeight="bold";

    }

    if (Math.random()<reveal) {

      mtmp=ma_cho.indexOf(ma_txt.charAt(ycol));

      ma_cho=ma_cho.substring(0, mtmp)+ma_cho.substring(mtmp+1, ma_cho.length);

    }

    if (Math.random()<reveal-1) ma_cho=ma_cho.substring(0, ma_cho.length-1);

    m_copo[ycol]+=199;

    setTimeout("zoomer("+ycol+")", speed);

  }

  else if (m_copo[ycol]>200) {

    if (w3c) {

      mtmp=document.getElementById("Mx"+(m_copo[ycol]-201)+"y"+ycol);

      mtem=document.getElementById("Mx"+(200+rows-m_copo[ycol]--)+"y"+ycol);

    }

    else {

      mtmp=document.all["Mx"+(m_copo[ycol]-201)+"y"+ycol];

      mtem=document.all["Mx"+(200+rows-m_copo[ycol]--)+"y"+ycol];

    }

    mtmp.style.fontWeight="normal";

    mtem.style.fontWeight="normal";

    setTimeout("zoomer("+ycol+")", speed);

  }

  else if (m_copo[ycol]==200) m_copo[ycol]=100+Math.floor(rows/2);

  if (m_copo[ycol]>100 && m_copo[ycol]<200) {

    if (w3c) {

      mtmp=document.getElementById("Mx"+(m_copo[ycol]-101)+"y"+ycol);

      mtmp.firstChild.nodeValue=String.fromCharCode(160);

      mtem=document.getElementById("Mx"+(100+rows-m_copo[ycol]--)+"y"+ycol);

      mtem.firstChild.nodeValue=String.fromCharCode(160);

    }

    else {

      mtmp=document.all["Mx"+(m_copo[ycol]-101)+"y"+ycol];

      mtmp.innerHTML=String.fromCharCode(160);

      mtem=document.all["Mx"+(100+rows-m_copo[ycol]--)+"y"+ycol];

      mtem.innerHTML=String.fromCharCode(160);

    }

    setTimeout("zoomer("+ycol+")", speed);

  }

  

  //start

var h1 = document.getElementsByTagName("h1")[0],

text = h1.innerText || h1.textContent,

split = [], i, lit = 0, timer = null;

for(i = 0; i < text.length; ++i) {

split.push("<span>" + text[i] + "</span>");

}

h1.innerHTML = split.join("");

split = h1.childNodes;



var flicker = function() {

lit += 0.01;

if(lit >= 1) {

clearInterval(timer);

}

for(i = 0; i < split.length; ++i) {

if(Math.random() < lit) {

split[i].className = "neon";

} else {

split[i].className = "";

}

}

}

setInterval(flicker, 100);
}
</script>