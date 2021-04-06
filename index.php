<?php
  require_once('templates/top.php');
?>
        <h2>Добро пожаловать на сайт!</h2>
        <div id="content-body">
 
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d78449.49890276486!2d23.632848710217917!3d52.087978697534695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47210c0223630975%3A0x4d319ea41f64ae99!2z0JHRgNC10YHRgg!5e0!3m2!1sru!2sby!4v1612982320611!5m2!1sru!2sby" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		<section id="player">
		<video id="media" width="720px" height="400px">
		 <source src="http://dl5.webmfiles.org/big-buck-bunny_trailer.webm" />
		 <track src="file.vtt" />
		</video>
		<nav>
		 <div id="buttons">
		  <input type="button" id="play" value="Play" />
		  <input type="button" id="mute" value="Mute" />
		 </div>
		 <div id="bar">
		  <div id="progress"></div>
		 </div>
		 <div id="control">
		  <input type="range" id="volume" min=0 max=1 step="0.1" value="0.6">
		 </div>
		 <div class="clear"></div>
		</nav>
		</section>
		<!-- end player -->
        </div>
<?php
  require_once('templates/buttom.php');
?>