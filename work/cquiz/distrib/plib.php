<?
  function show_block($t_id, $b_id, $oneblock, $symlink, $name="") {
    GLOBAL $block_path, $us;
		echo "{title:'";
    if ($name != "") {
      echo $name;
    } else {
      if ($oneblock) {
        if ($us[b_id] == 1) echo "Minute 1";
        else echo "Excerpt";
      }
      else echo "Minute $b_id";
    }
    echo "',";
	  echo "mp3:'";
    echo block_url($t_id, $b_id, $symlink)."?$us[u_start]";
    echo "'";
		echo "},";
  }

  function show_player($t_id, $b_id, $oneblock, $symlink, $autoplay, $select=1) {
    GLOBAL $ts, $block_len, $us;
    //echo $select;
?>
<link href="jplayer/css/jPlayer.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<link href="jplayer/skin/pink.flag/jplayer.pink.flag.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="jplayer/js/jquery.jplayer.min.js"></script>
<?
  echo "<script type='text/javascript' src='jplayer/js/jplayer.playlist.";
  if ($autoplay>0) echo "autoplay.";
  echo "min.js'></script>";
  //echo "<script type='text/javascript' src='jplayer/js/jquery.jplayer.inspector.js'></script>";
?>
<script type="text/javascript">
//<![CDATA[
var myPlaylist = 0;
var jPlayerPreviousTrack = -1;
$(document).ready(function(){
	myPlaylist = new jPlayerPlaylist({
		jPlayer: "#jquery_jplayer_1",
		cssSelectorAncestor: "#jp_container_1"
	}, [
<?
  if ($oneblock) {
    show_block($t_id, $b_id, $oneblock, $symlink);
  } else {
    for ($i=1; $i<=ceil($ts[t_len]/$block_len); $i++) show_block($t_id, $i, $oneblock, $symlink);
  }
?>
	], {
		//swfPath: "http://www.jplayer.org/latest/js/Jplayer.swf",
    //ready: function() { $("#jquery_jplayer_1").jPlayer("playHead", 20); },
    //ready: function() { $("#jquery_jplayer_1").jPlayer("play"); },
    swfPath: "jplayer/js",
		supplied: "mp3",
		wmode: "window",
    autoPlay: true,
    loop: true,
<?
    //echo "errorAlerts: true,";
    //echo "warningAlerts: true,";
    //echo "canplay: function() { $('#jquery_jplayer_1').jPlayer('play'); },";
?>
		smoothPlayBar: true,
		keyEnabled: false
	});
  
<?
  if ($autoplay>0) {
?>
  window.setTimeout(function () { $('#jquery_jplayer_1').jPlayer('play'); }, 1000);
<?
  }
?>
  
  function fadeVolIn(newPercent){
    $("#jquery_jplayer_1").jPlayer("volume", newPercent);
    if (newPercent <= 1) {
      window.setTimeout(function () { fadeVolIn(newPercent + 0.015); }, 15);
    }
  }
<?
  if ($oneblock) {
?>
  var jp = $('#jquery_jplayer_1'), jpData = jp.data('jPlayer');
  var jp_cycles = 0;
  var jp_freq = 30;
  var jp_old_x = -1;
  setInterval(function() {
    var x =  jpData.status.currentTime;
    var d = jpData.status.duration;
    var v = jpData.status.volume;
    jp_cycles = jp_cycles + 1;
    if (jp_old_x != x) {
      jp_old_x = x;
      jp_cycles = 0;
    }
    incr = jp_cycles * jp_freq/1000;
    if (incr > 0.25) incr = 0.25;
    if (x<2) {
      <? if ($select == 1) echo "x = 1;\n";
         else echo "x = x + incr;\n";
      ?>
        jp.jPlayer("volume", x)
    } else if (d-x<2) {
        x = x + incr;
        jp.jPlayer("volume", (d-x))
    } else {
        jp.jPlayer("volume", 1);
    }
  }, jp_freq); // 10Hz
  
<?
  }
  //if ($autoplay>0) echo "fadeVolIn(0.01);\n"; 
  //else echo "fadeVolIn(1);\n" 
?>
  
  $("#jquery_jplayer_1").bind($.jPlayer.event.play, function (event) {
    var current = myPlaylist.current;
    var playlist = myPlaylist.playlist;
    $.each(playlist, function (index, obj) {
      if (index == current) {
        if (current != jPlayerPreviousTrack) ga('send', 'event', 'CQ-Play', '<?=$us[u_name]?>', obj.mp3.substr(0, obj.mp3.indexOf('?')));
        jPlayerPreviousTrack = current;
      }
    });
  });
  $("#jquery_jplayer_1").bind($.jPlayer.event.timeupdate, function(event) { 
          document.currentTime = event.jPlayer.status.currentPercentRelative;
  });
  $(document).keydown(function (event) {
    // handle cursor keys
    if (event.keyCode == 189) {
      window.location.href = 'quiz.php';
    }
    if (event.keyCode == 88) $("#jquery_jplayer_1").jPlayer("pause");
    if (event.keyCode == 66) myPlaylist.next();
    if (event.keyCode == 86) myPlaylist.previous();
    if (event.keyCode == 48) {
      $("#jquery_jplayer_1").jPlayer("play");
      //fadeVolIn(0.01);
    }
    if (event.keyCode == 90) {
      $("#jquery_jplayer_1").jPlayer("play");
      //fadeVolIn(0.01);
    }
    if (event.keyCode == 56) $("#jquery_jplayer_1").jPlayer("playHead", document.currentTime - 10);
    if (event.keyCode == 57) $("#jquery_jplayer_1").jPlayer("playHead", document.currentTime + 10);
    if (event.keyCode == 49) {
      document.getElementById("sel1").focus(); 
      document.getElementById("sel1").checked = true;
      document.getElementById("qform").submit();
    }
    if (event.keyCode == 50) {
      document.getElementById("sel2").focus(); 
      document.getElementById("sel2").checked = true;
      document.getElementById("qform").submit();
    }
    if (event.keyCode == 51) {
      document.getElementById("sel3").focus(); 
      document.getElementById("sel3").checked = true;
      document.getElementById("qform").submit();
    }
    if (event.keyCode == 52) {
      document.getElementById("sel4").focus(); 
      document.getElementById("sel4").checked = true;
      document.getElementById("qform").submit();
    }
    if (event.keyCode == 53) {
      //window.location.href = 'quiz.php';
      document.getElementById("sel5").focus(); 
      document.getElementById("sel5").checked = true;
      document.getElementById("qform").submit();
    }
    if (event.keyCode == 54) {
      document.getElementById("sel6").focus(); 
      document.getElementById("sel6").checked = true;
      document.getElementById("qform").submit();
    }
  });                                
  myPlaylist.select(<?=($select-1)?>);
<?
	//echo "$('#jplayer_inspector_1').jPlayerInspector({jPlayer:$('#jquery_jplayer_1')});";
  //echo "$('#jquery_jplayer_1').jPlayer('play');";
?>
});
//]]>
</script>
<div id="container">

	<header>
		<div id="jquery_jplayer_1" class="jp-jplayer"></div>

		<div id="jp_container_1" class="jp-audio">
			<div class="jp-type-playlist">
				<div class="jp-gui jp-interface">
					<ul class="jp-controls">
						<li><a href="javascript:;" class="jp-previous" tabindex="1">previous</a></li>
						<li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
						<li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
						<li><a href="javascript:;" class="jp-next" tabindex="1">next</a></li>
						<li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
						<li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
						<li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
						<li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
					</ul>
					<div class="jp-progress">
						<div class="jp-seek-bar">
							<div class="jp-play-bar"></div>

						</div>
					</div>
					<div class="jp-volume-bar">
						<div class="jp-volume-bar-value"></div>
					</div>
					<div class="jp-current-time"></div>
					<div class="jp-duration"></div>
					<ul class="jp-toggles">
						<li><a href="javascript:;" class="jp-shuffle" tabindex="1" title="shuffle">shuffle</a></li>
						<li><a href="javascript:;" class="jp-shuffle-off" tabindex="1" title="shuffle off">shuffle off</a></li>
						<li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
						<li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
					</ul>
				</div>
				<div class="jp-playlist">
					<ul>
						<li></li>
					</ul>
				</div>
				<div class="jp-no-solution">
					<span>Update Required</span>
					To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
				</div>
			</div>
		</div>
  </div>
<?
    //echo "	<div id='jplayer_inspector_1'></div>";
  }
  
  function show_player_i($wa, $loop="true") {
    // Show player with all tracks
    GLOBAL $block_len, $us;
    $select = 1;
    //echo $select;
?>
<link href="jplayer/css/jPlayer.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<link href="jplayer/skin/pink.flag/jplayer.pink.flag.scroll.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="jplayer/js/jquery.jplayer.min.js"></script>
<?
  echo "<script type='text/javascript' src='jplayer/js/jplayer.playlist.";
  if ($autoplay>0) echo "autoplay.";
  echo "min.next.js'></script>";
  //echo "<script type='text/javascript' src='jplayer/js/jquery.jplayer.inspector.js'></script>";
?>
<script type="text/javascript">
//<![CDATA[
var myPlaylist = 0;
var jPlayerPreviousTrack = -1;
$(document).ready(function(){
	myPlaylist = new jPlayerPlaylist({
		jPlayer: "#jquery_jplayer_1",
		cssSelectorAncestor: "#jp_container_1"
	}, [
<?
  $n = count($wa);
  for ($i=1; $i<=$n; $i++) {
    $w=&$wa[$i-1];
    //$b_id = 2;
    //if ($w[t_len]<80) $b_id=1;
    if ($w[bid]>0) $b_id=$w[bid];
    else $b_id = rand(1, $w[b_max]);
    $fld = "$w[t_folder]/";
    show_block($w[t_id], $b_id, 0, 0, "$fld$w[t_name]");
  }
?>
	], {
		//swfPath: "http://www.jplayer.org/latest/js/Jplayer.swf",
    //ready: function() { $("#jquery_jplayer_1").jPlayer("playHead", 20); },
    //ready: function() { $("#jquery_jplayer_1").jPlayer("play"); },
    swfPath: "jplayer/js",
		supplied: "mp3",
		wmode: "window",
    autoPlay: true,
    loop: <?=$loop?>,
<?
    //echo "errorAlerts: true,";
    //echo "warningAlerts: true,";
    //echo "canplay: function() { $('#jquery_jplayer_1').jPlayer('play'); },";
?>
		smoothPlayBar: true,
		keyEnabled: false
	});
  
<?
  if ($autoplay>0) {
?>
  window.setTimeout(function () { $('#jquery_jplayer_1').jPlayer('play'); }, 1000);
<?
  }
?>
  
  function fadeVolIn(newPercent){
    $("#jquery_jplayer_1").jPlayer("volume", newPercent);
    if (newPercent <= 1) {
      window.setTimeout(function () { fadeVolIn(newPercent + 0.015); }, 15);
    }
  }
<?
  if ($oneblock) {
?>
  var jp = $('#jquery_jplayer_1'), jpData = jp.data('jPlayer');
  var jp_cycles = 0;
  var jp_freq = 30;
  var jp_old_x = -1;
  setInterval(function() {
    var x =  jpData.status.currentTime;
    var d = jpData.status.duration;
    var v = jpData.status.volume;
    jp_cycles = jp_cycles + 1;
    if (jp_old_x != x) {
      jp_old_x = x;
      jp_cycles = 0;
    }
    incr = jp_cycles * jp_freq/1000;
    if (incr > 0.25) incr = 0.25;
    if (x<2) {
      <? if ($select == 1) echo "x = 1;\n";
         else echo "x = x + incr;\n";
      ?>
        jp.jPlayer("volume", x)
    } else if (d-x<2) {
        x = x + incr;
        jp.jPlayer("volume", (d-x))
    } else {
        jp.jPlayer("volume", 1);
    }
  }, jp_freq); // 10Hz
  
<?
  }
  //if ($autoplay>0) echo "fadeVolIn(0.01);\n"; 
  //else echo "fadeVolIn(1);\n" 
?>
  $("#jquery_jplayer_1").bind($.jPlayer.event.play, function (event) {
      var current = myPlaylist.current;
      var playlist = myPlaylist.playlist;
      $.each(playlist, function (index, obj) {
        if (index == current) {
          $('.jp_current_track_title').text(obj.title);   
          if (current != jPlayerPreviousTrack) ga('send', 'event', 'CQ-Play', '<?=$us[u_name]?>', obj.mp3.substr(0, obj.mp3.indexOf('?')));
          jPlayerPreviousTrack = current;
        }
      });
  });
  $("#jquery_jplayer_1").bind($.jPlayer.event.timeupdate, function(event) { 
          document.currentTime = event.jPlayer.status.currentPercentRelative;
  });
  $(document).keydown(function (event) {
    // handle cursor keys
    if (event.keyCode == 189) {
      window.location.href = 'quiz.php';
    }
    if (event.keyCode == 88) $("#jquery_jplayer_1").jPlayer("pause");
    if (event.keyCode == 66) myPlaylist.next();
    if (event.keyCode == 86) myPlaylist.previous();
    if (event.keyCode == 48) {
      $("#jquery_jplayer_1").jPlayer("play");
      //fadeVolIn(0.01);
    }
    if (event.keyCode == 90) {
      $("#jquery_jplayer_1").jPlayer("play");
      //fadeVolIn(0.01);
    }
    if (event.keyCode == 56) $("#jquery_jplayer_1").jPlayer("playHead", document.currentTime - 10);
    if (event.keyCode == 57) $("#jquery_jplayer_1").jPlayer("playHead", document.currentTime + 10);
    if (event.keyCode == 49) {
      document.getElementById("sel1").focus(); 
      document.getElementById("sel1").checked = true;
      document.getElementById("qform").submit();
    }
    if (event.keyCode == 50) {
      document.getElementById("sel2").focus(); 
      document.getElementById("sel2").checked = true;
      document.getElementById("qform").submit();
    }
    if (event.keyCode == 51) {
      document.getElementById("sel3").focus(); 
      document.getElementById("sel3").checked = true;
      document.getElementById("qform").submit();
    }
    if (event.keyCode == 52) {
      document.getElementById("sel4").focus(); 
      document.getElementById("sel4").checked = true;
      document.getElementById("qform").submit();
    }
    if (event.keyCode == 53) {
      //window.location.href = 'quiz.php';
      document.getElementById("sel5").focus(); 
      document.getElementById("sel5").checked = true;
      document.getElementById("qform").submit();
    }
    if (event.keyCode == 54) {
      document.getElementById("sel6").focus(); 
      document.getElementById("sel6").checked = true;
      document.getElementById("qform").submit();
    }
  });                                
  myPlaylist.select(<?=($select-1)?>);
<?
	//echo "$('#jplayer_inspector_1').jPlayerInspector({jPlayer:$('#jquery_jplayer_1')});";
  //echo "$('#jquery_jplayer_1').jPlayer('play');";
?>
});
//]]>
</script>
<div id="container">

	<header>
		<div id="jquery_jplayer_1" class="jp-jplayer"></div>

		<div id="jp_container_1" class="jp-audio">
			<div class="jp-type-playlist">
				<div class="jp-gui jp-interface">
					<ul class="jp-controls">
						<li><a href="javascript:;" class="jp-previous" tabindex="1">previous</a></li>
						<li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
						<li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
						<li><a href="javascript:;" class="jp-next" tabindex="1">next</a></li>
						<li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
						<li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
						<li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
						<li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
					</ul>
					<div class="jp-progress">
						<div class="jp-seek-bar">
							<div class="jp-play-bar"></div>

						</div>
					</div>
					<div class="jp-volume-bar">
						<div class="jp-volume-bar-value"></div>
					</div>
					<div class="jp-current-time"></div>
					<div class="jp-duration"></div>
					<ul class="jp-toggles">
						<li><a href="javascript:;" class="jp-shuffle" tabindex="1" title="shuffle">shuffle</a></li>
						<li><a href="javascript:;" class="jp-shuffle-off" tabindex="1" title="shuffle off">shuffle off</a></li>
						<li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
						<li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
					</ul>
				</div>
				<div class="jp-playlist">
					<ul>
						<li></li>
					</ul>
				</div>
				<div class="jp-no-solution">
					<span>Update Required</span>
					To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
				</div>
			</div>
		</div>
  </div>
<?
    //echo "	<div id='jplayer_inspector_1'></div>";
  }
  
  function text2speech($fname, $cst) {
    GLOBAL $us, $tts_active;
    if ($tts_active == 0) return;
    echo "<script>";
    echo "function $fname() {\n";
    echo "var audio = new Audio();\n";
    echo "audio.src ='voice/$cst.mp3';\n"; // ie=utf-8&
    $vol = round($us[u_speechvol]/100, 2);
    echo "audio.volume = $vol;\n";
    echo "audio.play();\n";
    echo "}\n";
    echo "$fname();";
    echo "</script>";
  }

  function play_file($fname, $path) {
    GLOBAL $us, $tts_active;
    if ($tts_active == 0) return;
    echo "<script>";
    echo "function $fname() {\n";
    echo "var audio = new Audio();\n";
    echo "audio.src ='$path';\n"; // ie=utf-8&
    //$vol = round($us[u_speechvol]/100, 2);
    //echo "audio.volume = $vol;\n";
    echo "audio.play();\n";
    echo "}\n";
    echo "$fname();";
    echo "</script>";
  }
  
  function google_tts($fname, $cst) {
    GLOBAL $us, $tts_active;
    if ($tts_active == 0) return;
    echo "<script>";
    echo "function $fname() {\n";
    echo "var audio = new Audio();\n";
    echo "audio.src ='http://translate.google.com/translate_tts?ie=utf-8&tl=en&q=$cst';\n";
    $vol = round($us[u_speechvol]/100, 2);
    //echo "audio.volume = $vol;\n";
    echo "audio.play();\n";
    echo "}\n";
    echo "$fname();";
    echo "</script>";
  }
  
  function show_fav_button($t_id, $b_id, $c_id) {
    GLOBAL $us;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<title>iPhone Style Radio and Checkbox Switches, found on DevGrow.com</title>
<script type="text/javascript"src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js">
</script>
<script type="text/javascript">
$(document).ready(function(){
$('#myonoffswitch').click(function(){
var myonoffswitch=$('#myonoffswitch').val();
if ($("#myonoffswitch:checked").length == 0)
{
var a=myonoffswitch;
}
else
{
var a="off";
}

$.ajax({
type: "POST",
url: "add_fav.php",
data: "<? echo "t_id=$t_id&b_id=$b_id&c_id=$c_id&value="; ?>"+a ,
success: function(html){
$("#display").html(html).show();
//alert(html);
}
});

});
});
</script>

<script type="text/javascript">
$(document).ready( function(){
$(".cb-enable").click(function(){
var parent = $(this).parents('.switch');
$('.cb-disable',parent).removeClass('selected');
$(this).addClass('selected');
$('.checkbox',parent).attr('checked', true);
});
$(".cb-disable").click(function(){
var parent = $(this).parents('.switch');
$('.cb-enable',parent).removeClass('selected');
$(this).addClass('selected');
$('.checkbox',parent).attr('checked', false);
});
});
</script>

<style type="text/css">
.onoffswitch {
position: relative; width: 100px;
-webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
}
.onoffswitch-checkbox {
display: none;
}
.onoffswitch-label {
display: block; overflow: hidden; cursor: pointer;
border: 2px solid #999999; border-radius: 20px;
}
.onoffswitch-inner {
width: 200%; margin-left: -100%;
-moz-transition: margin 0.3s ease-in 0s; -webkit-transition: margin 0.3s ease-in 0s;
-o-transition: margin 0.3s ease-in 0s; transition: margin 0.3s ease-in 0s;
}
.onoffswitch-inner:before, .onoffswitch-inner:after {
float: left; width: 50%; height: 30px; padding: 0; line-height: 30px;
font-size: 12px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
-moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;
}
.onoffswitch-inner:before {
content: "Added to";
padding-left: 10px;
background-color: #807090; color: #FFFFFF;
}
.onoffswitch-inner:after {
content: "Add to";
padding-right: 10px;
background-color: #EEEEEE; color: #999999;
text-align: right;
}
.onoffswitch-switch {
width: 18px; margin: 6px;
background: #FFFFFF;
border: 2px solid #999999; border-radius: 20px;
position: absolute; top: 0; bottom: 0; right: 66px;
-moz-transition: all 0.3s ease-in 0s; -webkit-transition: all 0.3s ease-in 0s;
-o-transition: all 0.3s ease-in 0s; transition: all 0.3s ease-in 0s;
}
.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
margin-left: 0;
}
.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
right: 0px;
}
</style>
<center><table><td>
<div class="onoffswitch">
<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch"
<?php
$r=mysql_query2("select * from cc_fav where t_id='$t_id' AND u_id='$us[u_id]'");
echo mysql_report_error();
$w=mysql_fetch_array($r);
if (($w[u_id] === $us[u_id]) && ($w[f_deleted] == 0))
{
echo "checked";
}
?>>
<label class="onoffswitch-label" for="myonoffswitch">
<div class="onoffswitch-inner"></div>
<div class="onoffswitch-switch"></div>
</label>
</div>

<div id="display"> </div>
</td>
<td>
<a href=ptracks.php?showfav=1><font style='font-size: 14px; color: #706080; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;'>Favorites
</table></center>
<?
  }
?>