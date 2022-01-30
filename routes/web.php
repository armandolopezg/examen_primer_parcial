<?php

use Illuminate\Support\Facades\Route;
use App\Models\titulos;
use App\Models\post;
use App\Models\post2;
use App\Models\contenido_post;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $post= new titulos();
    $post->titulo_barra="Inicio";
    $post->titulo_barra2="Post";
    $post->titulo_barra3="Acerca De";
    $post->titulo="Portafolio de Investigaciones";
    $post->titulo2="¿Quienes somos?";
    $post->titulo_sub="Reconoce los conceptos de sistemas de información."; 
    $post->titulo_post="Reconoce los conceptos de sistemas de información."; 
    $post->titulo_post2="Reconoce la evolución de los sistemas de información."; 
    $post->titulo_post3="Definición de los conceptos de cliente y servidor."; 
    $post->titulo_post4="Define los sistemas de computadoras centrales y dedicadas";
    $post->fecha_publicacion="26.01.2022";
    $post->fecha_publicacion2="26.01.2022";
    $post->fecha_publicacion3="27.01.2022";
    $post->fecha_publicacion4="28.01.2022";
    $post->contenido="Pagina dedicada al examen de la unidad 1 de la materia Cliente-Servidor, en esta encontraras post dedicados a investigaciones relacionadas a la materia.";
    return view('index',['post'=>$post]);
})->name('index');

Route::get('/blog', function () {
    $post= new post();
    $post->titulo_barra_post="Inicio";
    $post->titulo_barra2_post="Post";
    $post->titulo_barra3_post="Acerca De";
    $post->titulo_post="Investigaciones Recientes";
    $post->titulo_post_post="Reconoce los conceptos de sistemas de información."; 
    $post->titulo_post2_post="Reconoce la evolución de los sistemas de información."; 
    $post->titulo_post3_post="Definición de los conceptos de cliente y servidor."; 
    $post->titulo_post4_post="Define los sistemas de computadoras centrales y dedicadas";
    $post->titulo_post5_post="Define los sistemas de conexión libre y a través de redes.";
    $post->titulo_post6_post="Describe los sistemas con arquitectura  Cliente/Servidor.";
    $post->titulo_post7_post="Reconoce protocolos de comunicación en red.";
    $post->titulo_post8_post="Clasifica los sistemas de información de acuerdo a su arquitectura.";
    $post->titulo_post9_post="Explicar el proceso de diagramación de componentes de la arquitectura  Cliente/Servidor.";
    
    $post->fecha_publicacion_post="26.01.2022";
    $post->fecha_publicacion2_post="26.01.2022";
    $post->fecha_publicacion3_post="27.01.2022";
    $post->fecha_publicacion4_post="28.01.2022";
    $post->fecha_publicacion5_post="29.01.2022";
    $post->fecha_publicacion6_post="29.01.2022";
    $post->fecha_publicacion7_post="29.01.2022";
    $post->fecha_publicacion8_post="29.01.2022";
    $post->fecha_publicacion9_post="29.01.2022";
    $post->contenido="Pagina dedicada al examen de la unidad 1 de la materia Cliente-Servidor, en esta encontraras post dedicados a investigaciones relacionadas a la materia.";
    return view('blog',['post'=>$post]);
})->name('blog');


Route::get('/blog2', function () {
    $post= new post();
    $post->titulo_barra_post="Inicio";
    $post->titulo_barra2_post="Post";
    $post->titulo_barra3_post="Acerca De";
    $post->titulo_post="Investigaciones Recientes";
    $post->titulo_post_post="Clasifica los sistemas de información de acuerdo a su arquitectura."; 
    $post->titulo_post2_post="Explica el proceso de diagramación de componentes de la arquitectura  Cliente/Servidor ."; 
    
    $post->fecha_publicacion_post="29.01.2022";
    $post->fecha_publicacion2_post="29.01.2022";
    $post->contenido="Pagina dedicada al examen de la unidad 1 de la materia Cliente-Servidor, en esta encontraras post dedicados a investigaciones relacionadas a la materia.";
    return view('blog2',['post'=>$post]);
})->name('blog2');




Route::get('/single', function () {
    $post= new post();
    $post->titulo_barra_post="Inicio";
    $post->titulo_barra2_post="Post";
    $post->titulo_post_post="Reconoce los conceptos de sistemas de información."; 
    $post->titulo_post_post2="¿Cómo es que funciona un sistema de informacion?"; 
    $post->fecha_publicacion_post=" Publicado el 26.01.2022";
    $post->contenido_parrafo="Déjame explicarte, un sistema de informacion tiene como prioridad la gestión de datos e informacion de la que este hecho, lo cual la importancia que tiene es recuperar siempre los datos que sean creados y guardados, para que al acceder a ellos sea más sencillo y seguro.";
    $post->contenido_parrafo2="Los componentes de un sistema de informacion ayudan a una serie de procesos que tienen la función de entrada de datos, gestión y procesamiento de datos, todo esto para poder hacer que el usuario peda acceder este tipo de informacion almacenada.";
    $post->contenido_parrafo3="La metodología habitual para el proceso del sistema de informacion algunas veces puede cambiar, pero el más común suele ser el siguiente:";
    $post->contenido_parrafo4="• Entrada de datos: En este paso se le da el acceso a la informacion, este tiende a ser automático, aunque también puede hacerse de manera manual por el usuario, Mientras que el proceso automático se manipula por medio de la informacion que este recibe, esta puede ser tomada también de otro tipo de áreas y módulos. La forma de entrada más común suelen ser los códigos de barra, el teclado de un pc, cajas registradoras, sistemas de voz, entre otros.";
    $post->contenido_parrafo5="• El siguiente punto es el procesamiento de la informacion que se almacena, dentro del sistema hay una serie de procesos u operaciones que se configuran y establecen, cuando estos procesos están listos estos comienzan a transformar esos datos en informacion que es tomada para la valoración e investigación y análisis del contenido que se muestra por los procesos que se mencionan anteriormente.";
    $post->contenido_parrafo6="• El tercer proceso por el que se pasa es el almacenamiento de la informacion, esto permite al usuario que la informacion que el almacena se guarde en su ordenador, dentro de las unidades de almacenamiento.";
    $post->contenido_parrafo7="• Y por último tenemos la salida de informacion , técnicamente la informacion al estar procesada, hace que sea mas sencillo para el usuario pueda acceder a la informacion y pueda reproducir esa informacion en cualquier momento.";
    return view('single',['post'=>$post]);
})->name('single');


Route::get('/single2', function () {
    $post= new post();
    $post->titulo_barra_post="Inicio";
    $post->titulo_barra2_post="Post";
    $post->titulo_post_post="Evolución de los sistemas de informacion ";  
    $post->fecha_publicacion_post=" Publicado el 26.01.2022";
    $post->contenido_parrafo="Dentro de la evolución del sistema de informacion de destaca el desarrollo que los metodos han tenido para poder completar su objetivo, que es mostrar al usuario la informacion requerida, por lo cual se le vincula como si este proceso estuviera a la par con nosotros.";
    $post->contenido_parrafo2="Si es que decidimos analizar el pasado en estos términos, podremos percibir que los egipcios ya usaban este método de sistema de informacion, este era empleado para recoger informacion y tomar decisiones que fueran más factibles, pero por el paso del tiempo esta se ha ido adaptando a nuestras necesidades, sin más que recalcar, hare una pequeña lista que identifica los cambios más notorios hasta ahora por el paso del tiempo.";
    $post->contenido_parrafo3="• 1950-1960: El sistema era muy rudimentario, su función era para la ayuda de empleados dentro del área laboral, como transacciones, mantener registros y llevar contabilidad básica, a esto se le conoció como “sistemas de informacion de base de datos”.";
    $post->contenido_parrafo4="• 1960-1970: Surge el “Sistema de informacion general”, los cuales innovaron con la conversión de datos a informacion útil, cosa que ayudo en tomas de decisiones.";
    $post->contenido_parrafo5="• 1970-1980: esta fue primordial, ya que fue la época donde se crearon las computadoras personales y creo el “sistema de informacion basado en computadora”, este contribuía a la gestión y planificación de la organización.";
    $post->contenido_parrafo6="• 2000-presente : técnicamente , aquí no pasa mucho, debido a que simplemente se inició la creación de softwares, hardware que mejoraron y amplificaron las formas de los sistemas de informacion.";
    return view('single2',['post'=>$post]);
})->name('single2');


Route::get('/single3', function () {
    $post= new post();
    $post->titulo_barra_post="Inicio";
    $post->titulo_barra2_post="Post";
    $post->titulo_post_post="Definicion de los conceptos Cliente-Servidor";  
    $post->fecha_publicacion_post=" Publicado el 27.01.2022";
    $post->contenido_parrafo="El Cliente-Servidor es un sistema distribuido entre múltiples Procesadores donde hay clientes que solicitan servicios y servidores que los proporcionan. La Tecnología Cliente/Servidor, es un modelo que implica productos y servicios enmarcados en el uso de la Tecnología de punta, y que permite la distribución de la información en forma ágil y eficaz a las diversas áreas de una organización (empresa o institución pública o privada), así como también fuera de ella.";
    return view('single3',['post'=>$post]);
})->name('single3');



Route::get('/single4', function () {
    $post= new post();
    $post->titulo_barra_post="Inicio";
    $post->titulo_barra2_post="Post";
    $post->titulo_post_post="Sistema de computadora central y dedicadas";  
    $post->fecha_publicacion_post=" Publicado el 28.01.2022";
    $post->contenido_parrafo="Conocido como mainframe, el sistema de una computadora central es una computadora grande, potente, pero muy cara y es usada comúnmente para una gran cantidad de datos, por ejemplo los datos que se transmiten en el banco, estos llegan a procesar cientos de millones veces las instrucciones por segundo, muchos usuarios pueden estar conectados. Se requieren tener un cuidado muy estricto, es usada por grandes corporaciones, y gobiernos.";
    $post->contenido_parrafo2="Mientras los sistemas dedicados son credos para resolver problemas específicos, tienen características únicas y atractivas para su uso en aplicaciones, son usados comúnmente para simulaciones para ingeniería, esto lleva al desarrollo de herramientas y técnicas para facilitar su utilización, y transformarlos en una alternativa válida y casera.";
    return view('single4',['post'=>$post]);
})->name('single4');


Route::get('/single5', function () {
    $post= new post();
    $post->titulo_barra_post="Inicio";
    $post->titulo_barra2_post="Post";
    $post->titulo_post_post="Sistemas de conexión libre y a través de redes";  
    $post->fecha_publicacion_post=" Publicado el 29.01.2022";
    $post->contenido_parrafo="Los sistemas de conexión libre en los casos mas comunes, este suele obtener la informacion que necesita de alguna computadora de servicio,  estas se conectan a software, el cual permite la simulación de algún tipo de terminal, en casos apartados, los datos pueden transferirse haciendo uso de recursos magnéticos o usando la trascripción.";
    $post->contenido_parrafo2="En este sistema de conexión se difiere de la conexión libre debido a que en este sistema, se produce la informacion bajo demanda a cualquier computadora que requiera dicha informacion, todas y cada una de estas deben permanecer conectadas entre sí. Esto da la capacidad de que los usuarios puedan acceder a la informacion de todas las computadoras y a la vez intercambien información.";
    return view('single5',['post'=>$post]);
})->name('single5');


Route::get('/single6', function () {
    $post= new post();
    $post->titulo_barra_post="Inicio";
    $post->titulo_barra2_post="Post";
    $post->titulo_post_post="Arquitectura cliente servidor";  
    $post->fecha_publicacion_post=" Publicado el 29.01.2022";
    $post->contenido_parrafo="En la arquitectura cliente servidor cada vez que los usuarios producen una demanda de informacion a cualquier dispositivo conectado a un servidor, estos servidores son los que responderán y enviaran la informacion al cliente que la esta requiriendo, con esto en claro cada usuario podrá tener la libertad para consultar una o varias fuentes locales o distantes que se encuentran alrededor del mundo a conveniencia del usuario.";
    return view('single6',['post'=>$post]);
})->name('single6');


Route::get('/single7', function () {
    $post= new post();
    $post->titulo_barra_post="Inicio";
    $post->titulo_barra2_post="Post";
    $post->titulo_post_post="Protocolos de comunicación en red";  
    $post->fecha_publicacion_post=" Publicado el 29.01.2022";
    $post->contenido_parrafo="Son un conjunto de reglas y pautas que permiten al usuario enviar un bloque de datos de una ubicación a otras se usan para transmitir de manera correcta los datos , las características de estos son las siguientes.";
    $post->contenido_parrafo2="• Llegada de datos segura: En caso de que algún dato se corrompa o pierda, el protocolo debe iniciar automáticamente la retransmisión de los datos, esto para lograr hacer que los datos lleguen a salvo.";
    $post->contenido_parrafo3="• Los datos deben llegar en orden: Para esto en el receptor y el emisor si recibe un paquete de datos no ordenado este esperará o retransmitirá los datos para poder ordenarlos.";
    $post->contenido_parrafo4="• Control de flujo: tendrá la capacidad de reducir la saturación de la red, si un equipo transmite datos con una velocidad de 500mbs, el equipo que recibe solo podrá recibirla a 100mbps.";
    $post->contenido_parrafo5="• Multiplexar los datos: Desta manera se recibe de manera continua informacion de varios equipos, al igual que el envio será continuo.";
    $post->contenido_parrafo6="A continuación se mencionaran unos ejemplos de los protocolos de comunicación de red: ";
    $post->contenido_parrafo7="• Protocolo de internet (IP): Sirve para enviar datos de una computadora a una dirección IP diferente.";
    $post->contenido_parrafo8="• Protocolo de Control de Transmisión (TCP): Se usa para comunicarse a través de una red, dividiendo el mensaje en una serie de paquetes.";
    $post->contenido_parrafo9="• Protocolo de Transferencia de Archivos (FTP): Funciona mediante la transferencia de archivos de un sistema a otro";
    $post->contenido_parrafo10="• Protocolo Simple de Transferencia de Correo (SMTP): Sirve para enviar y hacer circular los correos electrónicos salientes.";
    $post->contenido_parrafo11="• Protocolo de Transferencia de Hipertexto (HTTP): Sirve para transmitir un hipertexto entre 2 o mas sistemas, usando la fucion de html.";
    $post->contenido_parrafo12="• Protocolo Simple de Manejo de Red (SNMP): Sirve para recopilar y administrar los datos relacionados a varios dispositivos conectados en una red";
    return view('single7',['post'=>$post]);
})->name('single7');


Route::get('/single8', function () {
    $post= new post();
    $post->titulo_barra_post="Inicio";
    $post->titulo_barra2_post="Post";
    $post->titulo_post_post="Clasificación de sistemas de informacion ";  
    $post->titulo_post_post2="Arquitectura de cliente/Servidor."; 
    $post->titulo_post_post3="Arquitectura Basada en Capas";  
    $post->titulo_post_post4="Orientada a Servicios";  
    $post->fecha_publicacion_post=" Publicado el 29.01.2022";
    $post->contenido_parrafo="En la arquitectura cliente servidor cada vez que los usuarios producen una demanda de informacion a cualquier dispositivo conectado a un servidor, estos servidores son los que responderán y enviaran la informacion al cliente que la esta requiriendo, con esto en claro cada usuario podrá tener la libertad para consultar una o varias fuentes locales o distantes que se encuentran alrededor del mundo a conveniencia del usuario.";
    $post->contenido_parrafo2="También conocido como arquitectura de 2 capas, Esta tiene un acceso centralizado a los datos que se requieren encontrar y tiene mucha mas facilidad a la hora de encontrarlos.";
    $post->contenido_parrafo3="Cada capa agrupa una funcionalidad relacionada, estas capas se apilan de manera vertical entre usuarios y datos. La comunicación entre capas es explicita mediante interfaces bien definidas y acoplada de manera sencilla Solo pueden interactuar entre sí, o con los de la capa inferior";
    $post->contenido_parrafo4="Son autónomas, desarrollándose de manera independiente se pueden ubicar en cualquier parte de la red, Dependen entre servicios a nivel de interfaz.";
    return view('single8',['post'=>$post]);
})->name('single8');


Route::get('/single9', function () {
    $post= new post();
    $post->titulo_barra_post="Inicio";
    $post->titulo_barra2_post="Post";
    $post->titulo_post_post="Proceso de diagramación de componentes de la arquitectura Cliente/Servidor .";  
    $post->fecha_publicacion_post=" Publicado el 29.01.2022";
    $post->contenido_parrafo="En el proceso del modelo cliente / servidor el cliente envía un mensaje pidiendo un determinado servicio y este envía uno o varios mensajes con la respuestas en un sistema distribuido, cada máquina puede cumple el rol de servidor para algunas tareas y el rol de cliente para otras.";
    $post->contenido_parrafo2="El cliente es el proceso que ayuda al usuario crear los requerimientos y enviarlos asl servidor, a este  proceso se le conoce como front-end.";
    $post->contenido_parrafo3="Cada capa agrupa una funcionalidad relacionada, estas capas se apilan de manera vertical entre usuarios y datos. La comunicación entre capas es explicita mediante interfaces bien definidas y acoplada de manera sencilla Solo pueden interactuar entre sí, o con los de la capa inferior";
    $post->contenido_parrafo4="El cliente comúnmente maneja las funciones relacionadas con la manipulación y despliegue de datos, por lo cual esta hechos sobre plataformas que ayduan a construir interfaces de usuario, además de acceder a los servicios distribuidos , Mientras que el servidor es el que se encarga de generar el proceso de atender a ultiples clientes que hacen peticiones de algún recusrso administrado por el, a este proceso se le conoce como el back-end el servidor comúnmente aneja las funciones relacionadas con la mayoría de las reglas de los recursos de datos, tecnicaente lo que hace el servidor es, aceptar requerimientos de bases de datos,procesar requerimientos, Formatear datos para transmitirlos a los usuarios y procesar la lógica de aplicación y realzar validaciones de las bases de datos.";
    return view('single9',['post'=>$post]);
})->name('single9');
