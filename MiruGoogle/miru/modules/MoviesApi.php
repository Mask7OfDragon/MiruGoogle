<?php 

/**
 * MiruGoogle, pequeño y simple plataforma
 * 
 * @author     Mask7OfDragon
 * @version    1.0
 */


/**
 * Modulo de Themoviedb.org para peliculas y series de TV
 */

	function Get_Details($id_movie, $lenguaje, $api_key) {

		/**
		 * Pequeña guia para utilizar este complemento.
		 * 
		 * Para usar Get_Details de MoviesApi Solo requiere llamar a la funcion. 
		 * Get_Details('211672', 'en-US', MD_API);
		 * 
		 */

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://api.themoviedb.org/3/movie/$id_movie?api_key=$api_key&language=$lenguaje",
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

	function Get_Alternative($id_movie, $api_key) {

		/**
		 * Pequeña guia para utilizar este complemento.
		 * 
		 * Para usar Get_Alternative de MoviesApi Solo requiere llamar a la funcion. 
		 * Get_Alternative('211672', MD_API);
		 * 
		 */

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://api.themoviedb.org/3/movie/$id_movie/alternative_titles?api_key=$api_key",
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