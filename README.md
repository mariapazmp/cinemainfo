cinemainfo
==========

Aplicación web que realiza consultas a la api de IMDB.
Fue utilizada la librería creada por Jogi Silalahi "IMDB Wrapper API" y modificada para recibir los datos capturados por el formulario a través de campos específicos.

Esta aplicación es un ejemplo de cómo trabajan conjuntamente los lenguajes web: HTML, CSS, JavaScript (Jquery) y PHP.
Se decidió trabajar las consultas a IMDB a través de PHP para así poder separar el trabajo del lado del servidor y el lado del cliente, este último realizado a través de javascript.

Los datos son capturados por el formulario en el index.html.
Mientras el script.js se encarga de los efectos de transiciones, cambio de estilos y Ajax, recibe también los datos capturados por el index.html y los envía a la librería search.php.

En search.php se instancia la clase IMDB.php la cual realiza las consultas REST a la api de IMDB con la ayuda de la librería CURL de PHP.
La clase IMDB utiliza la api http://www.imdbapi.com.






