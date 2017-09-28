<?php 

/**
 * Version 1.0
 * https://drakgons.com/
 * Developed by Mask7OfDragon
 */


/**
 * Pagina de Inicio de MikuGoogle
 */

require(dirname(__FILE__) . '/miru/config.php');


/*
 * Para usar StreamingDrive utiliza la funcion.
 *  
 * $newDrive['image'];
 * $newDrive['file'];
 */

$newDrive = StreamingDrive('0B0JMGMGgxp9WMEdWb1hyQUhlOWs');

/*
 * Para utilizar StreamingPhotos basta con llamar la funcion ej : [ echo $newPhotos['file']; ]
 */
$newPhotos = StreamingPhotos('https://photos.google.com/share/AF1QipNIait7RenW_p_BfO5ijRwts2IJjIqnKemxW57FgPb7uIsQO1NjHd511bTcq46c3w/photo/AF1QipMpR2k8NFBaLqmw_uwnhxRgpEUfTSpOF5o_oKUU?key=bUxQNEVxdVoxWHVnaDlPSTM2aVFPc3hUU2x4Y013');





?>

<!--
* Copyright 2017 drakgons.com CO
-->

<!DOCTYPE html>
<html>
<head>
  <title>Title Cute.</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <style type="text/css">

	html,
	body {
	  height: 100%;
	}

	.bg-img {
	  width: 100%;
	  height: 100%;
/*	  background: url("/.miru/assets/img/bg-background.jpg") center center no-repeat;
*/	  background-size: cover;
	}
	.bg-img:before {
	  content: '';
	  position: absolute;
	  top: 0;
	  right: 0;
	  bottom: 0;
	  left: 0;
	  background-image: linear-gradient(to bottom right, #002f4b, #dc4225);
	  opacity: .9;
	}

	#player {
	  position: absolute;
	  top: 50%;
	  left: 50%;
	  transform: translate(-50%, -50%);
	  width: 480px;
	  height: 270px;
	  background-image: linear-gradient(90deg, #271933, #4f204c);
	  overflow: hidden;
	}
	#player iframe {
	  width: 100%;
	  height: 265px;
	  transform: translateY(-28px) scale(1.24);
	} 

  </style> 
</head>

<body>
	
  <div class="bg-img">
	  <div id="player">
	  	<div id="services">
	  		
	  	</div>
	  </div>		
  </div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="https://content.jwplatform.com/libraries/DbXZPMBQ.js"></script>
	<script>
		
		var player = jwplayer('services');

		player.setup({
	      sources: [<?php echo $newPhotos['file']; ?>],
		  image: 'http://www.planwallpaper.com/static/images/i-should-buy-a-boat.jpg',
		  autostart: false,
		  playbackRateControls: [0.25, 0.75, 1, 1.5, 2],  
		  skin: {
			name: 'drakgons',
			url: '/.miku/assets/css/drakgons.css'
		  }		  		  
		});

		player.addButton(
		  //This portion is what designates the graphic used for the button
		  "https://icons.jwplayer.com/icons/white/download.svg",
		  //This portion determines the text that appears as a tooltip
		  "Download Video",
		  //This portion designates the functionality of the button itself
		  function() {
		    //With the below code, we're grabbing the file that's currently playing
		    window.location.href = player.getPlaylistItem()['file'];
		  },
		  //And finally, here we set the unique ID of the button itself.
		  "download"
		);	

	</script>
</body>
</html>
