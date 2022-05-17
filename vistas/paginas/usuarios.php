<section class="content-header">
    <div class="conteiner-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Administrar Usuarios</h1>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <button type="button" class="btn btn-success crear-perfil" data-toggle="modal" data-target="#modal-crear-usuarios">
                            Crear nuevo perfil
                        </button>
                    </div>
                    <hr>
                    <div class="card-body">
                        <table class="table table-bordered table-striped dt-responsive tableperfil" width="100%">
                            <thead>
                                <tr>
                                    <th style="width: 10px;">#</th>
                                    <th>Nombre</th>
                                    <th>Usuario</th>
                                    <th>Rol</th>
                                    <th>Foto</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach($usuarios as $key => $value){
                                ?>
                                <td><?php echo ($key+1); ?></td>
                                <td><?php echo $value['nombre']; ?></td>
                                <td><?php echo $value['usuario']; ?></td>
                                <td><?php echo $value['rol']; ?></td>
                                <td><?php echo $value['foto']; ?></td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-warning btn-sm">
                                            <i class="fas fa-pencil-alt text-white"></i>
                                        </button>
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </td>
                                <?php  
                                }   
                                ?>

                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MODAL CREAR USUARIOS -->
<div class="modal fade" id="modal-crear-usuarios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title alert alert-success alert-dismissible" id="myModalLabel">Agregar nuevo usuario</h4>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data">

            <div class="form-group has-feedback" bis_skin_checked="1">
                <input type="text" class="form-control" name="nom_usuarios" placeholder="nombre">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback" bis_skin_checked="1">
                <input type="text" class="form-control" name="nom_user" placeholder="usuario">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback" bis_skin_checked="1">
                <input type="password" class="form-control" name="pass_user" placeholder="password">
                <span class="glyphicon glyphicon-eye-close form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback" bis_skin_checked="1">
                <div class="btn btn-default btn-file" bis_skin_checked="1">
                    <i class="fas fa-paperclip"></i> Adjuntar Imagen de usuario
                    <input type="file" name="subirImgUsuario">
                </div>
                <img class="previsualizarImgUsuario img-fluid py-2" width='200' height='200'>
                <p class="help-block small"> Dimensiones: 480px * 382px | Peso Max. 2MB | Formato: JPG o PNG</p>
            </div>

            <div class="form-group has-feedback">

                <label>rol</label>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>

            <?php 
            /*  $guardarPerfil = new ctrPerfiles();
            $guardarPerfil->ctrGuardarPerfil();*/

            ?>
        </form>
      </div>
    </div>
  </div>
</div>