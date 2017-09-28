<?php 

/**
 * MiruGoogle, pequeño y simple plataforma
 * 
 * @author     Mask7OfDragon
 * @version    1.0
 */


/**
 * Modulo de kitsu.io para anime y series de TV
 */

	function Get_Media($slug) {

		/**
		 * Pequeña guia para utilizar este complemento.
		 * 
		 * Para usar Get_Media de AnimeApi Solo requiere llamar a la funcion. 
		 * Get_Media('cowboy-bebop');
		 * 
		 */

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://kitsu.io/api/edge/anime?slug=$slug",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_POSTFIELDS => "{}",
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  return "cURL Error #:" . $err;
		} else {
		  return $response;
		}

	}

	function Get_Category($title) {

		/**
		 * Pequeña guia para utilizar este complemento.
		 * 
		 * Para usar Get_Category de AnimeApi Solo requiere llamar a la funcion. 
		 * Get_Category('fantasy');
		 * 
		 */

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://kitsu.io/api/edge/categories?title=$title",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_POSTFIELDS => "{}",
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  return "cURL Error #:" . $err;
		} else {
		  return $response;
		}

	}

?>