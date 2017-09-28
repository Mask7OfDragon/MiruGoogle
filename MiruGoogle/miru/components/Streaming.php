<?php 

/**
 * MiruGoogle, pequeño y simple plataforma
 * 
 * @author     Mask7OfDragon
 * @version    1.0
 */


/**
 * Componente de streaming
 */


    function StreamingDrive($video_get)
	{

		/**
		 * Pequeña guia para utilizar este complemento.
		 * 
		 * Para usar StreamingDrive de Streaming Solo requiere llamar a la funcion. 
		 * StreamingDrive('0B0JMGMGgxp9WMEdWb1hyQUhlOWs');
		 * 
		 */

		$video_url = "https://drive.google.com/file/d/".$video_get."/view?pli=1"; // Definimos la URL del video.
		$video_reg = Drive($video_url); // Iniciamos la funcion Drive para bajar el video.
		$video_url = "https://drive.google.com/get_video_info?docid=$video_get"; // Para obtener info del video.
		                                                                         // 
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($curl, CURLOPT_URL, $URL);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		$response_data = urldecode(urldecode(curl_exec($curl)));
		curl_close($curl);  

		$video_file = '[{file: "'.$video_reg.'",type: "video/mp4"}]'; // Funcion para llamar al video.
		$video_prev = "https://drive.google.com/vt?id=$video_get"; // Imagen del video.

		return $finish = array(
			'image' => $video_prev, 
			'file' => $video_file
		);

	}

	function StreamingPhotos($urls)
	{

		/**
		 * Pequeña guia para utilizar este complemento.
		 * 
		 * Para usar StreamingPhotos de Streaming Solo requiere llamar a la funcion. 
		 * StreamingPhotos('https://photos.google.com/share/BLABLA');
		 * 
		 */
		
		$file = new GooglePhoto($urls);

		return $finish = array(
			'file' => $file->get(), 
		);

	}



?>