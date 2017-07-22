<?
  function show_player($ts, $autoplay=1, $loop="true") {
    GLOBAL $jpeg_width, $url_tracks;
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
  //if ($autoplay>0) echo "autoplay.";
  echo "min.js'></script>";
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
  echo "{title:'$ts[t_name]',mp3:'".str_replace(' ', " ", "$url_tracks/$ts[t_folder]/$ts[t_fname]")."'}";
?>
	], {
<?
  if ($loop == "true") echo "ended: function() { $(\"#jquery_jplayer_1\").jPlayer(\"play\"); },";
  if ($autoplay>0) echo "ready: function() { $(\"#jquery_jplayer_1\").jPlayer(\"play\"); },";
?>
    swfPath: "jplayer/js",
		supplied: "mp3",
		wmode: "window",
    loop: false,
		smoothPlayBar: true,
		keyEnabled: false
	});
  var jp = $('#jquery_jplayer_1'), jpData = jp.data('jPlayer');
  var jp_freq = 100;
  var jp_play_count = 0;
  setInterval(function() {
    var d = new Date();
    var n = d.getTime();
    var x = jpData.status.currentTime;
    var d = jpData.status.duration;
    var v = jpData.status.volume;
<?
?>
  }, jp_freq);
  $("#jquery_jplayer_1").bind($.jPlayer.event.play, function (event) {
    var current = myPlaylist.current;
    var playlist = myPlaylist.playlist;
    jp_play_count = jp_play_count + 1;
    //alert(jp_play_count);
    $.each(playlist, function (index, obj) {
      if (index == current) {
<?
?>
        if (current != jPlayerPreviousTrack) {
          ga('send', 'event', 'NQ-Play', obj.mp3);
        }
        jPlayerPreviousTrack = current;
      }
    });
  });
  $("#jquery_jplayer_1").bind($.jPlayer.event.timeupdate, function(event) { 
    document.currentTime = event.jPlayer.status.currentTime;
    //document.currentTime = event.jPlayer.status.currentPercentRelative;
  });
  $(document).keydown(function (event) {
    // handle cursor keys
    if (event.keyCode == 88) $("#jquery_jplayer_1").jPlayer("pause");
    if (event.keyCode == 48) {
      $("#jquery_jplayer_1").jPlayer("play");
    }
    if (event.keyCode == 90) {
      $("#jquery_jplayer_1").jPlayer("play");
    }
    if (event.keyCode == 56) $("#jquery_jplayer_1").jPlayer("play", document.currentTime - 10);
    if (event.keyCode == 57) $("#jquery_jplayer_1").jPlayer("play", document.currentTime + 10);
  });
  //myPlaylist.select(0);
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

?>