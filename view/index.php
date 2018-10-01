<!DOCTYPE html>
<html>
    <!-- BEGIN HEAD -->
    <head>
        <!-- Metas -->
        <?php require_once 'metas.view.php'; ?>
        <!-- =============================================== -->
        <!-- Estilos -->
        <?php require_once 'estilos.view.php'; ?>
        <!-- =============================================== -->
    </head>
    <body class="no-trans">
        <!-- scrollToTop -->
        <!-- ================ -->
        <div class="scrollToTop"><i class="icon-up-open-big"></i></div>
        <!-- header start -->
        <!-- ================ --> 
        <header class="header fixed clearfix navbar navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">

                        <!-- header-left start -->
                        <!-- ================ -->
                        <div class="header-left clearfix">

                            <!-- logo -->
                            <div class="logo smooth-scroll">

                                <a href="#banner">
                                    <img id="logo" class="img-responsive" src="../util/oxygen/images/logoCentrado.jpg" alt="Vicsac">
                                </a>
                            </div>

                            <!-- name-and-slogan -->
                            <div class="site-name-and-slogan smooth-scroll">
                                <div class="site-name">
                                    <a href="#banner">
                                        Vicsac
                                    </a>
                                </div>
                                <div class="site-slogan">
                                    Lima - 
                                    <a target="_blank" href="http://www.peru.gob.pe/">
                                        Perú
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- header-left end -->
                    </div>
                    <div class="col-md-8">
                        <!-- header-right start -->
                        <!-- ================ -->
                        <div class="header-right clearfix">

                            <!-- main-navigation start -->
                            <!-- ================ -->
                            <div class="main-navigation animated">

                                <!-- navbar start -->
                                <!-- ================ -->
                                <nav class="navbar navbar-default" role="navigation">
                                    <div class="container-fluid">
                                        <!-- Toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                                                <span class="sr-only">Toggle 
                                                    navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                        </div>
                                        <!-- Collect the nav links, forms, and other content for toggling -->
                                        <div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
                                            <ul class="nav navbar-nav navbar-right">
                                                <li class="active"><a href="#banner">
                                                        Inicio</a></li>
                                                <li><a href="InicioSesion.php">Iniciar Sesión</a></li>
                                                <li><a href="#noticias">Noticias</a></li>
                                                <li><a href="#conocenos">Conócenos</a></li>
                                                <li><a href="#contact">Contáctenos</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                </nav>
                                <!-- navbar end -->

                            </div>
                            <!-- main-navigation end -->

                        </div>
                        <!-- header-right end -->

                    </div>
                </div>
            </div>
        </header>		<!-- header end -->

        <!-- banner start -->
        <!-- ================ -->
        <div id="banner" class="banner" style="left: 0px; top: 0px">
            <div class="banner-image"></div>
            <div class="banner-caption">
                <div class="container">
                    <!-- <div class="row">
                        <div class="col-md-8 col-md-offset-2 object-non-visible" data-animation-effect="fadeIn">
                            <h1 class="text-center">Bienvenidos a <span>VICSAC</span></h1>
                            <p class="lead text-center">Somos una organización 
                                dedicado a dar soluciones integradas e innovadoras 
                                mediante un alineamiento entre el gobierno Municipal 
                                y VICSAC. </p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        
        <!-- banner end -->

        <!-- section start -->
        <!-- ================ -->
        <div class="section">
            <div class="container">
                <h1 id="noticias" class="title text-center">Noticias Destacadas</h1>
                <div class="container">

                    <div class="row">
                        <div class="box">
                            <div class="col-lg-12 text-center">
                                <div id="carousel-example-generic" class="carousel slide">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators hidden-xs">
                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <img class="img-responsive img-full" src="../util/oxygen/noticia/images/noticias/imagenCorporativa1.png" alt="">
                                        </div>
                                        <div class="item">
                                            <img class="img-responsive img-full" src="../util/oxygen/noticia/images/noticias/pee.png" alt="">
                                        </div>
                                        <div class="item">
                                            <img class="img-responsive img-full" src="../util/oxygen/noticia/images/noticias/viñac1.png" alt="">
                                        </div> 
                                    </div>

                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                        <span class="icon-prev"></span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                        <span class="icon-next"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.container -->
                </div>

            </div>

            <br/>	
            <br/>		
            <div style="text-align:center">
                <a href="noticia/index.html">
                    <input type="button" value="Ver Noticias" class="btn btn-default" style="width: 236px">
                </a>
            </div>		
        </div>
        <br/>
        <div class="space" style="height: 300px"></div>
        <!-- section end -->
        <!-- section start -->
        <!-- ================ -->
        <div class="section">
            <div class="container">
                <h1 id="conocenos" class="title text-center">Conoce a <span>Vicsac</span></h1>
                <div class="container">    

                    <div class="row">
                        <div class="box">
                            <div class="col-md-10" style="left: 0px; top: 100px">
                                <div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
                                    <ul class="nav navbar-nav navbar-left">

                                        <input type="button" value="Gobierno" class="btn btn-default" onclick="mostrarG()" >
                                        <br/>
                                        <input type="button" value="Quines Somos" class="btn btn-default" onclick="mostrarQ()" >
                                        <br/>

                                        <input type="button" value="Servicios" class="btn btn-default" onclick="mostrarS()" >
                                        <br/>
                                        <!--<input type="button" value="Postula" class="btn btn-default" onclick="mostrarV()" >-->


                                    </ul>
                                </div>
                            </div>

                            <div style="width: 311px; left: 438px; top: -120px; height: 382px;" class="col-xs-12 col-md-12 col-lg-12">


                                <div id="gobierno" style="display:none;">
                                    <h3 class="title text-left">Visión</h3>
                                    <p>
                                        Ser reconocida como una de las mejores 
                                        empresas en asesoramiento y construcción en 
                                        obras en el norte del Perú.
                                    </p>	
                                    <br/>
                                    <h3 class="title text-left">Misión</h3>
                                    <p>
                                        Resolver y satisfacer las necesidades de 
                                        nuestros clientes, ejecutando proyectos de 
                                        calidad y seguridad dentro de los plazos y 
                                        presupuestos establecidos, todo esto en base 
                                        a la experiencia y excelencia profesional.				
                                    </p>
                                    <br/>
                                    <h3 class="title text-left">Valores</h3>
                                    <p>
                                        Eficiencia, transparencia, pasión, lealtad.
                                    </p>

                                </div>

                                <div id="quienes" style="display:none;">
                                    <h3 class="title text-left">Quienes Somos</h3>
                                    <p style="font-size: 13px">
                                        Somos una empresa peruana que brinda 
                                        servicios de asesoramiento y ejecución de 
                                        obras para los gobiernos municipales.
                                        <br/><br/>
                                        VICSAC fue fundada en 2008 en Chiclayo, 
                                        Perú, y es una de las pocas empresas que 
                                        gira bajo una filosofía de &quot;orden&quot; basado en 
                                        un planemiento estratrégico empresarial. 
                                        <br/><br/>
                                        VICSAC es una empresa constructora muy joven 
                                        que apuesta al desarrollo del Perú con un 
                                        nivel de presición y transparencia en sus 
                                        servicios.
                                    </p>


                                </div> 
                                <div id="areas" style="display:none;">
                                    <h3 class="title text-left">Áreas</h3>
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-caret-right pr-10 text-colored"></i>
                                            Administraciónn </li>
                                        <li><i class="fa fa-caret-right pr-10 text-colored"></i>
                                            Consulta y AtenciÃ&#402;Â³n al Cliente </li>
                                        <li><i class="fa fa-caret-right pr-10 text-colored"></i>
                                            EjecuciÃ&#402;Æ&#8217;Ã&#8218;Â³n de Obra </li>
                                        <li><i class="fa fa-caret-right pr-10 text-colored"></i>
                                            ElaboraciÃ&#402;Æ&#8217;Ã&#8218;Â³n de Proyectos </li>
                                        <li><i class="fa fa-caret-right pr-10 text-colored"></i>
                                            Gerencia </li>
                                        <li><i class="fa fa-caret-right pr-10 text-colored"></i>
                                            Legal </li>
                                        <li><i class="fa fa-caret-right pr-10 text-colored"></i>
                                            Sub Gerencia </li>
                                        <li><i class="fa fa-caret-right pr-10 text-colored"></i>
                                            TecnologÃ&#402;Â­a de la InfomaciÃ&#402;Â³n </li>
                                        <li><i class="fa fa-caret-right pr-10 text-colored"></i>
                                            Topografia </li>
                                    </ul>

                                </div> 
                                <div id="servicios" style="display:none;">
                                    <h3 class="title text-left">Servicios</h3>
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-caret-right pr-10 text-colored"></i>
                                            Perfil Téccnico </li>
                                        <li><i class="fa fa-caret-right pr-10 text-colored"></i>
                                            Expediente Téccnico </li>
                                        <li><i class="fa fa-caret-right pr-10 text-colored"></i>
                                            Supervisión de Obras </li>
                                        <li><i class="fa fa-caret-right pr-10 text-colored"></i>
                                            Ejecución de Obras</li>
                                        <li><i class="fa fa-caret-right pr-10 text-colored"></i>
                                            Estudios de suelos </li>
                                        <li><i class="fa fa-caret-right pr-10 text-colored"></i>
                                            Estudios de impacto ambiental </li>
                                    </ul>

                                </div> 
                            </div>
                        </div>
                    </div>		  
                </div>
            </div>
        </div>

        <div class="space" style="height: 300px"></div>
        <!-- section end -->
        <!-- footer start -->
        <!-- ================ -->
        <footer id="footer">

            <!-- .footer start -->
            <!-- ================ -->
            <div class="section">
                <div class="container">
                    <h1 class="title text-center" id="contact">Contáctenos</h1>
                    <div class="space"></div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="footer-content">
                                <p class="large">¿Deseas recibir información 
                                    sobre nuestros productos o servicios? Encuentra 
                                    aquí varias maneras de contactarnos cualquier 
                                    sea tu necesidad. Estamos a tu disposición.</p>
                                <ul class="list-icons">
                                    <li><i class="fa fa-location-arrow pr-10"></i> 
                                        Agustín Antonete #123. La victoria, Lima
                                    </li>
                                    <li><i class="fa fa-fax pr-10"></i> 
                                        074 - 261592
                                    </li>
                                    <li><i class="fa fa-phone pr-10"></i> 
                                        966958389 / 954584452</li>
                                    <li><i class="fa fa-envelope-o pr-10"></i>
                                        Vicsacperu@hotmail.com</li>
                                </ul>
                                <ul class="social-links">
                                    <li class="facebook"><a target="_blank" href="https://web.facebook.com/VICSACPERU"><i class="fa fa-facebook-square"></i></a></li>
                                    <li class="twitter"><a target="_blank" href="https://twitter.com/VicsacPeru"><i class="fa fa-twitter-square"></i></a></li>
                                    <li class="instagram"><a target="_blank" href="https://www.instagram.com/vicsacperu/"><i class="fa fa-instagram"></i></a></li>
                                    <li class="youtube"><a target="_blank" href="https://www.youtube.com/channel/UCDiQunCSji5ZGSkJOfaCSmw/featured"><i class="fa fa-youtube-square"></i></a></li>                                    
                                </ul>
                            </div>
                        </div>
                        <form role="form" enctype="multipart/form-data" action="../controller/contacto.mensaje.agregar.editar.controller.php" method="post">
                            <div class="col-sm-6">
                                <div class="footer-content">
                                    <div class="form-group has-feedback">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <p>
                                                    RUC/DNI <input type="text" 
                                                                     name="txtDoc" 
                                                                     id="txtDoc" 
                                                                     required=""
                                                                     title="RUC/DNI"
                                                                     onkeypress="ValidaSoloNumeros();"
                                                                     maxlength="11"
                                                                     class="form-control input-sm text-bold">
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <p>
                                                    Nombre <input type="text" 
                                                                  name="txtNombre" 
                                                                  id="txtNombre" 
                                                                  required=""
                                                                  class="form-control input-sm text-bold">
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-12">
                                                <p>
                                                    Apellido Paterno <input type="text" 
                                                                            name="txtApPaterno" 
                                                                            id="txtApPaterno" 
                                                                            required=""
                                                                            class="form-control input-sm text-bold">
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <p>
                                                    Apellido Materno <input type="text" 
                                                                            name="txtApMaterno" 
                                                                            id="txtApMaterno" 
                                                                            required=""
                                                                            class="form-control input-sm text-bold">
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <p>
                                                    Email <input type="text" 
                                                                 name="txtEmail" 
                                                                 id="txtEmail" 
                                                                 required=""
                                                                 class="form-control input-sm text-bold">
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <p>
                                                    Teléfono <input type="text" 
                                                                    name="txtTelefono" 
                                                                    id="txtTelefono" 
                                                                    required=""
                                                                    class="form-control input-sm text-bold">
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <p>
                                                    Mensaje <textarea class="form-control input-sm text-bold" 
                                                                      rows="6" id="txtMensaje" 
                                                                      placeholder="Aquí mensaje ..." 
                                                                      name="txtMensaje" 
                                                                      required>

                                                    </textarea>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-default" aria-hidden="true"><i class="fa fa-envelope-o"></i> Enviar Mensaje</button>
                                            <button class="btn btn-app" id="btnLimpiar"><i class="fa fa-undo"></i> Limpiar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </footer>
        <!-- .footer end -->
        <!-- .subfooter start -->
        <!-- ================ -->
        
        <!-- /.content-wrapper -->
        <?php require_once 'pie.pagina.view.php'; ?>
        <!-- .subfooter end -->

        <!-- footer end -->
        <!-- Scripts -->
        <?php require_once 'scripts.view.php'; ?>
        <!-- Script to Activate the Carousel -->
        <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
        </script>
        <!-- =============================================== -->
        <!-- <script src="js/mensajeContacto.js" type="text/javascript"></script> -->
        
    </body>
</html>