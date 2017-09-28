#### MiruGoogle
###### Streaming Google photos y Drive
------

Hola, presento MiruGoogle, es un sistema sencillo basado en los codigos liberado

[WG Tutoriales](https://www.facebook.com/WG-Tutoriales-116650328958507/) Añadiendo un uso mas sencillo y rapido. Puedes encontrar un demo del sistema [Pulsando en este texto](http://mask7lover.in/)


#### Configuración
###### Guia para Configurar MiruGoogle
------

Para utilizar MiruGoogle, requiere llamar el archivo de configuración del sistema con esto . El sistema cargara todos los archivos necesarios para funcionar correctamente

```php
require(dirname(__FILE__) . '/miru/config.php');
```

Para configurar el archivo config.php solo tenemos que modificar las Variables de MiruGoogle, ( Iniciando desde la linea 16 a la 26.

LJ_KEY. Es la licencia de Jwplayer la cual puedes encontrar gratis
LJ_URL. Es la libreria de Jwplayer asignada a tu licencia.

MD_API. Api de Themoviedb que puedes encontrar gratis en su sitio web.

```php

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
    
```

#### Servidores
###### Servidores soportados por MiruGoogle
------

- Google 
  - Photos
  - Drive
