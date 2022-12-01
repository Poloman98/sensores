<!-- MODAL NUEVO USUARIO -->
<div id="myModalElim" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Eliminar usuario</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form action="../backend/CreaUsuario.php" method="post">
                    
                    <center>
                        <img src="../img/basurita.png"/>
                        <p style="font-size:20px;">¿Está seguro de eliminar el usuario?</p>                    
                    <br>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    </center>                   
                </form>
            </div>
        </div>
    </div>
</div>    