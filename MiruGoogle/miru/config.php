<?php 

/**
 * MiruGoogle, pequeño y simple plataforma
 * 
 * @author     Mask7OfDragon
 * @version    1.0
 */


/**
 * Archivo de carga de MiruGoogle, librerias y sistemas.
 */


# Variables de MiruGoogle. Principales

	# Modulos de Jwplayer 
	define('LJ_KEY','ABCdeFG123456SeVenABCdeFG123456SeVen==');
	define('LJ_URL','https://content.jwplatform.com/libraries/RfrA9hoC.js');

	# Modulos de MiruGoogle
	define('MD_API','ac44f137a3474c51b153132493de499f');



/**
 * Librerias y archivos requeridos para el funcionamiento de MiruGoogle.
 */

# Extenciones de MiruGoogle

	# Extenciones de Google
	require(dirname(__FILE__) . '/extensions/GooglePhotos.php');
	require(dirname(__FILE__) . '/extensions/GoogleDrive.php');

# Modulos de MiruGoogle
	
	# Modulo de Kitsu.io
	require(dirname(__FILE__) . '/modules/AnimeApi.php');	
	# Modulo de Themoviedb.org
	require(dirname(__FILE__) . '/modules/MoviesApi.php');	


# Componentes de MiruGoogle

	# Componente de Streaming
	require(dirname(__FILE__) . '/components/Streaming.php');

?>