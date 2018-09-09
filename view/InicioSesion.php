<!DOCTYPE html>
<html>
    <head>
        <!-- Metas -->
        <?php require_once 'metas.view.php'; ?>
        <!-- =============================================== -->
        <!-- Estilos -->
        <?php require_once 'estilos_2.view.php'; ?>
        <!-- =============================================== -->
    </head>
    <body class="hold-transition login-page bg-gray-light">
        <!--<body class="hold-transition login-page alert-warning">-->
        <div class="login-box">
            <!--<br/><br/><br/><br/>-->  
            <div class="login-box-body">  
                <div class="logo">
                    <img src="../util/oxygen/images/logo_1.jpg" class="col-lg-6 img-responsive">   
                </div>    
                <div class="login-logo">
                    <a href="#"><b>Iniciar</b> Sesión</a>
                </div>
                <!-- /.login-logo -->

                <p class="login-box-msg">Ingrese sus datos para iniciar sesión</p>

                <form action="../controller/sesion.iniciar.controller.php" method="post">
<!--                    <div class="form-inline text-right has-feedback">
                        
                        <label>
                             <select size="1" class="form-control input-sm" id="txtTipo" name="txtTipo">     
                                <option>Tipo Usuario</option>
                                <option value="A">Administrador</option>
                                <option value="P">Postulante</option>
                            </select>
                        </label>
                    </div>-->
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" placeholder="Email" name="txtemail" required="">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password" name="txtclave" required="">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
<!--                        <div class="col-lg-12">
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox"> Recordar mis datos
                                </label>
                            </div>
                        </div>-->
                        <!-- /.col -->
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-primary btn-block btn-flat"> <i class="glyphicon glyphicon-log-in"></i> Ingresar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <!--<div class="social-auth-links text-center">
                  <p>- OR -</p>
                  <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
                    Facebook</a>
                  <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
                    Google+</a>
                </div> -->
                <!-- /.social-auth-links -->
                <br/><br/>
                <div class="text-center">
                    <!--<p>¿No tiene una cuenta?</p>-->
                    <!--<a href="registrate.usuario.view.php" class=""> Cree una.</a>-->
                    <!--<a href="register.html" class="text-center">Register a new membership</a>-->
                </div>
            </div><br/><br/><br/><br/>
            <!-- /.login-box-body -->
            <div class="text-center">
            <p class="text-black">
                <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="https://www.facebook.com/renzo.ruizp">Renzo Ruiz</a>.</strong> Todos los derechos reservados.
            </p>
        </div>
        </div>
        <?php include_once 'scripts.view.php'; ?>
        <!-- /.login-box -->

        <!-- jQuery 2.2.3 -->
<!--        <script src="../util/plugins/jQuery/jquery-2.2.3.min.js"></script>
         Bootstrap 3.3.6 
        <script src="../util/bootstrap/js/bootstrap.min.js"></script>
         iCheck 
        <script src="../util/plugins/iCheck/icheck.min.js"></script>-->
        
    </body>
</html>
