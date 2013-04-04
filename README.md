¿Qué es Cinemainfo?
==========

Aplicación web que realiza consultas a una api libre de IMDB.
Fue utilizada la librería PHP creada por Jogi Silalahi "IMDB Wrapper API" y modificada para recibir los datos capturados por el formulario a través de campos específicos.

Esta aplicación es un ejemplo de cómo trabajan conjuntamente los lenguajes web: HTML, CSS, JavaScript (Jquery) y PHP.
Se decidió trabajar las consultas a IMDB a través de PHP para así poder separar el trabajo del lado del servidor y el lado del cliente, este último realizado a través de javascript.

Los datos son capturados por el formulario en el index.html.
Mientras el script.js se encarga de los efectos de transiciones, cambio de estilos y Ajax, recibe también los datos capturados por el index.html y los envía a la librería search.php.

En search.php se instancia la clase IMDB.php la cual realiza las consultas a la api de IMDB con la ayuda de la librería CURL de PHP.
La clase IMDB utiliza la api imdbapi.com.

La aplicación puede verse en funcionamiento en http://mariapaz.co/labs/cinemainfo

What is Cinemainfo?
==========

Web application that makes information request to a free IMDB api.
Was used the PHP library created by Jogi Silalahi "IMDB Wrapper API" and modified to recieve the data captured by the form across its specific fields.

This application is an example of how to work jointly the web languages: HTML, CSS, JavaScript (and Jquuery) and PHP.
The request to the IMDB api was realized with PHP and in this way we can separate the server side from the client side (doing the client work with Javascript)

The data is captured by the form located in the index.html.
While script.js handles the transition effects, changing styles and Ajax, also receives the data captured by the index.html and sends to the library Search.php.

In search.php, the IMDB.php class is instantiated, and make the request to the IMDB api with help of PHP Curl library.
The IMDB class uses the api imdbapi.com.

You can see the app working in http://mariapaz.co/labs/cinemainfo





