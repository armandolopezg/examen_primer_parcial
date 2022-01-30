<!doctype html>
<html lang="en">

<head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Examen</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700|Playfair+Display:400,700,900" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">

</head>

<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark cyan fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{route('index')}}">
            <img src="images/nav-logo.png" alt="nav-logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('index')}}">{{$post->titulo_barra_post}}</a>
                    </li>
                    <li class="nav-item active ">
                        <a class="nav-link" href="{{route('blog')}}">{{$post->titulo_barra2_post}}</a>
                </ul>
            </div>
        </div>
    </nav>

    <section class="blog-single">
        <div class="container">
            <div class="main-contant">
                <div class="row">
                    <div class="col-sm-12">
                        <figure class="figure">
                            <img src="images/banner-image-12.jpg" class="figure-img img-fluid" alt="A generic square placeholder image with rounded corners in a figure.">
                            <figcaption class="figure-caption">
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-12">
                    <span>{{$post->fecha_publicacion_post}}</span>
                        <h3>{{$post->titulo_post_post}}</h3>

                        <p>{{$post->contenido_parrafo}}</p>
                        <h1></h1>
                        <p>{{$post->contenido_parrafo2}}</p>
                    

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2>Post Relacionados</h2>
                    </div>
                </div>
                <div class="row">
                    <a href="{{route('single4')}}"   class="col-md-6 box-2">
                 <img src="images/banner-image-5.jpg"  class="img-fluid">
                   <div class="overlay">
                     <div class="text">Define los sistemas de computadoras centrales y dedicadas<span></span></div>
                   </div>
               </a>
                    <a href="{{route('single6')}}"  class="col-md-6 box-2">
                 <img src="images/banner-image-13.jpg"  class="img-fluid">
                   <div class="overlay">
                     <div class="text">Describe los sistemas con arquitectura  Cliente/Servidor .<span></span></div>
                   </div>
               </a>
                </div>
                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <footer>
        <section class="footer-top">
            
      
        </section>
        <section class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                        <li><a href="{{route('index')}}" >{{$post->titulo_barra_post}}</a></li>
                            <li class="hidden">/</li>
                            <li><a href="{{route('blog')}}" >{{$post->titulo_barra2_post}}</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                    <p>(C) Todos los derechos Reservados <a href="https://www.template.net/editable/websites/html5" target="_blank"></a> <span>/</span>Desarrollado por Armando y Jose Luis<a href="https://www.template.net/editable/websites/html5" target="_blank"></a></p>
                    </div>
                </div>
            </div>
         
        </section>
    </footer>
   
    <a href="javascript:" id="return-to-top"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>

  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>
</body>

</html>
