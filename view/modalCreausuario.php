<!-- MODAL NUEVO USUARIO -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Crear nuevo usuario</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form action="../backend/CreaUsuario.php" method="post">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre" required="required">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" name="apellido" placeholder="Apellido" required="required">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" name="email" placeholder="Email" required="required">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" name="pass" placeholder="Contraseña" required="required">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>    