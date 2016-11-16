<!DOCTYPE html>
<html>
<head>
 <script type="text/javascript" src="jquery.min.js"></script>
	<title>Mega Menu With Pure CSS</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<style type="text/css">@import url(http://fonts.googleapis.com/css?family=Raleway:500);body{margin: 0;padding: 0;}a{text-decoration: none;color: inherit;}.hdr{font-family: 'Raleway', sans-serif;font-size: 1.4em;color: #fff;padding: 10px;text-align: right;}
.content{display: block;position: relative;overflow: hidden;height: 640px;margin: 0;}.content video, .content canvas{display: block;position: relative;max-height: 640px;height: 100%;margin: auto;}.content button{display: block;position: absolute;bottom: 20px;left: 45%;font-family: 'Raleway', sans-serif;color: #fff;margin-bottom: 10px;background-color: #79BD9A;padding: 7px 15px;display: block;border: none;border-radius: 2px;font-size: 14px;margin-right: 10px;-webkit-transition: all .2s ease;-moz-transition: all .2s ease;-o-transition: all .2s ease;-ms-transition: all .2s ease;transition: all .2s ease;z-index: 9999;}.content button:hover{cursor: pointer;background: #3B8686;}.content #new{display: none;}</style>                           
</head>
<body>

<div class="container">
	<div class="page-title">
		<h1>Mega Dropdown Menu <br/><small>With Pure CSS3</small></h1>
		<small>By VICKY JULYANTO SAID - 3125111209</a></small>
	</div>
	<div class="mega-menu">
		<ul>
			<li><a href="http://localhost/megamenu/">Home</a></li>
			<li><a href="#">Profile</a>
				<div class="menu-detail profile">
					<div class="section section-1">
						<h3 class="section-title">Section 1</h3>
						<div class="section-content">
							<p>Lorem ipsum dolor Sit amet, lorem-loreman amets sit dolor. Malu vouse dosum la quiz. Mad wasim do metam la giu dolor. Dolor la samoi jud huuta la qui. Mad wasim do metam la giu dolor. Lorem ipsum dolor Sit amet, lorem-loreman amets sit dolor. Malu vouse dosum la quiz. Dolor la samoi jud huuta la qui.Mad wasim do metam la giu dolor. Lorem ipsum dolor Sit amet, lorem-loreman amets sit dolor.</p>
						</div>
					</div>
					<div class="section links">
						<h3>Links</h3>
						<ul>
							<li><a href="tentang.html">About Me</a></li>
							<li><a href="kontak.html">Contact/Hire Me</a></li>
						</ul>
					</div>
					<div class="section social-media">
						<h3>Social Media Profile</h3>
						<ul>
							<li class="facebook"><a href="#">Me on Facebook</a></li>
							<li class="twitter"><a href="#">Me on Twitter</a></li>
							<li class="googleplus"><a href="#">Me on Google+</a></li>
							<li class="linkedin"><a href="#">Me on LinkedIn</a></li>
							<li class="dribbble"><a href="#">Me on Dribbble</a></li>
						</ul>
					</div>
				</div>
			</li>
			<li><a href="#">Categories</a>
				<div class="menu-detail categories">
					<div class="section seo">
						<h3><a href="#">GAMBAR</a></h3>
						<ul>
							<li><a href="http://localhost/megamenu/gambarstevengerrard.html">STEVEN GERRARD</a></li>
							<li><a href="http://localhost/megamenu/gambarliverpool.html">LIVERPOOL</a></li>
		
						</ul>
					</div>
					<div class="section copywrite">
						<h3><a href="#">VIDEO</a></h3>
						<ul>
							<li><a href="#">LUCU</a></li>
							<li><a href="http://localhost/megamenu/videoserem.html">SEREM</a></li>
						</ul>
					</div>
					<div class="section im">
						<h3><a href="#">MUSIC</a></h3>
						<ul>
							<li><a href="lagublues.html">BLUES</a></li>

						</ul>
					</div>
				</div>
			</li>
		</ul>
	</div>
<br/>
<br/>

<center>WEB CAM</center>
<script>
  // Put event listeners into place
  window.addEventListener("DOMContentLoaded", function() {
   // Grab elements, create settings, etc.
   var canvas = document.getElementById("canvas"),
    context = canvas.getContext("2d"),
    video = document.getElementById("video"),
    videoObj = { "video": true },
    errBack = function(error) {
     console.log("Video capture error: ", error.code);
    };
   // Put video listeners into place
   if(navigator.getUserMedia) { // Standard
    navigator.getUserMedia(videoObj, function(stream) {
     video.src = stream;
     video.play();
    }, errBack);
   } else if(navigator.webkitGetUserMedia) { // WebKit-prefixed
    navigator.webkitGetUserMedia(videoObj, function(stream){
     video.src = window.webkitURL.createObjectURL(stream);
     video.play();
    }, errBack);
   } else if(navigator.mozGetUserMedia) { // WebKit-prefixed
    navigator.mozGetUserMedia(videoObj, function(stream){
     video.src = window.URL.createObjectURL(stream);
     video.play();
    }, errBack);
   }
   // Trigger photo take
   document.getElementById("snap").addEventListener("click", function() {
    context.drawImage(video, 0, 0, 300, 500);
    // Littel effects
    $('#video').fadeOut('slow');
    $('#canvas').fadeIn('slow');
    $('#snap').hide();
    $('#new').show();
    // Allso show upload button
    $('#upload').show();
   });
      // Capture New Photo
   document.getElementById("new").addEventListener("click", function() {
    $('#video').fadeIn('slow');
    $('#canvas').fadeOut('slow');
    $('#snap').show();
    $('#new').hide();
    $("#upload").hide();
   });
   // Upload image to sever 
            document.getElementById("upload").addEventListener("click", function(){
                var dataUrl = canvas.toDataURL("image/jpeg", 0.85);
                    $.ajax({
                  type: "POST",
                  url: "camsave.php",
                  data: {
                     imgBase64: dataUrl, 
      user: "Pakdhe",       
                     userid: "pantura"               
                  }
    }).done(function(msg) {
      console.log("saved");
      alert('foto berhasil di simpan');
      document.location='cam.php';
    });
   });
  }, false);
 </script> 
<br/>

<div class="content">
    <video id="video" autoplay></video>
 <button id="snap">Capture</button>
    <button id="new">New</button>
 <canvas id="canvas" width="300" height="500"></canvas>
    <button id="upload" style="display:none;">Upload</button>
</div>

<br/>
<br/>
<br/>
<br/>
<center>VICKY JULYANTO SAID - 3125111209</center>
<br/>
<center>DESAIN WEB KELAS C 1610 </center>
</div>
</body>
</html>