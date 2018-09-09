<?php require_once 'sesion.validar.view.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Gestionar Noticias</title>
        <?php require_once 'metas.view.php'; ?>
        <?php require_once 'estilos.view.php'; ?>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            <!--Llamar a la cabecera de la página -->
            <?php require_once 'menu.cabecera.view.php'; ?>
            <!-- =============================================== -->

            <!-- Left side column. contains the sidebar -->
            <?php require_once 'menu.izquierda.view.php'; ?>
            <!-- =============================================== -->

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h3></h3>
                    <ol class="breadcrumb">
                        <li><a href="menu.principal.view.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
                        <li class="active">Gestionar Noticias</li>
                        
                    </ol>
                </section> 
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-primary">
                                <section class="content-header">
                                    <h3>Gestionar Noticias</h3>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal" id="btnagregar"><i class="fa fa-copy"></i> Agregar nueva noticia</button>
                                </section>
                                <div class="box-body">
                                    <div id="listado"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- INICIO del formulario modal -->
                    <small>
                        <form id="frmgrabar">
                            <div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="titulomodal">Crear Convocatoria</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <p>
                                                        <input type="hidden" value="" id="txtTipoOperacion" name="txtTipoOperacion">
                                                        Código <input type="text" 
                                                                      name="txtCodigo" 
                                                                      id="txtCodigo" 
                                                                      class="form-control input-sm text-bold" 
                                                                      readonly="">
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-8">
                                                    <p>
                                                        Nombre de la Convocatoria <textarea type="text" 
                                                                                            name="txtNombreConvocatoria" 
                                                                                            id="txtNombreConvocatoria" 
                                                                                            rows="5"
                                                                                            required=""
                                                                                            class="form-control input-sm text-bold"></textarea>
                                                    </p>
                                                </div>
                                                <div class="col-xs-4">
                                                    <p>
                                                        Estado
                                                        <select required="" name="txtEstado" id="txtEstado" class="form-control input-sm">
                                                            <option>-</option>
                                                            <option value="VIGENTE">VIGENTE</option>
                                                            <option value="CONCLUIDO">CONCLUIDO</option>
                                                            <option value="NO PUBLICADO">NO PUBLICADO</option>
                                                        </select>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary" aria-hidden="true"><i class="fa fa-save"></i> Grabar</button>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal" id="btncerrar"><i class="fa fa-close"></i> Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </small>
                    
                    <!-- FIN del formulario cronograma modal -->

                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <?php require_once 'pie.pagina.view.php'; ?>
            <!-- Control Sidebar -->
            <?php require_once 'menu.derecha.view.php'; ?>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->
        <?php require_once 'scripts.view.php'; ?>

        <!-- Scripts de la página -->
        <script src="js/estado.js" type="text/javascript"></script>
        <script src="js/mantenimiento.menu.js" type="text/javascript"></script>
    </body>
</html>