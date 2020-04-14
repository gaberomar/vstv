<script type="bd8ef533d50b6a5dc9cdbfd2-text/javascript">
function getParam ( sname )
{
  var params = location.search.substr(location.search.indexOf("?")+1);
  var sval =  params.replace("sv=", "");
  
  return sval;
}
var sv = getParam("sv");

</script>
<meta name="referrer" content="no-referrer">
<style>html,body{margin:0;padding:0;background:#000;;}</style>
<link href="http://tivis.101vn.com/s/videojs/video-js.min.css" rel="stylesheet">
<script src="http://tivis.101vn.com/s/videojs/videojs-ie8.min.js"></script>
<script src="http://tivis.101vn.com/s/videojs/video.js"></script>
<script src="http://tivis.101vn.com/s/vjs-hls.min.js"></script>
<body onload="init()">
<script>


	 
				 
				 document.write('<video id="streaming" autoplay preload="auto" height="100%" width="100%" class="video-js" controls data-setup="{&quot;language&quot;: &quot;vi&quot;}"></video>');

		function play(cid) {


				src = cid;
			player = videojs("streaming");
			player.ready(function() {
				player.src({
					src: src,
					type: "application/x-mpegURL",
				});
			});

			player.play();

		}
		function reload(i) {
			if (player.paused() && player.error_ != null )
			{
				play(sv);
			}
			 
			 
				
		}
		function init() {
			var i = 1;
			play(sv);
			setInterval(function() {reload(i); i++ }, 1000);
		}
		
			 
	</script>
<div id="videojs">
</div>
<style>
	.video-js {
		width: 100%;
		height: 95%;
	}
	body {
		text-align: center;
		margin: 0px;
	}
	#videojs {
		width: 100%;
		height: 95%;
	}.streaming-dimensions{
				width: 100% !important;
		height: 95% !important;
	}
</style>
</body>