<link href="<?php echo URL_SITIO ?>static/css/categorias.css"rel="stylesheet">
<div role="alert" data-delay="5000" aria-live="assertive" aria-atomic="true" id="toast_mensaje" class="toast" data-autohide="true">
        <div class="toast-body">
        </div>
</div> 

<div class="col-md-2 ">
            <div class="card card-left">
                <ul class="list-group list-group-flush">
                <li class="list-group-item">
                            <a href="Registro-Datos?menu=registro_categoria" type="submit" class="col-md-12 btn btn-primary"><?php echo $cat_btn_nuevo ?></a>
                    </li>
                    <li class="list-group-item">
                            <a href="Registro-Datos?menu=ver_categorias"  type="submit" class="col-md-12 btn btn-primary"><?php echo $cat_btn_ver_todas ?></a>
                    </li>
                </ul>
            </div>
        </div>
<div style="height:100%;margin-bottom:60px;" class="col-md-10 ">
<div id="mensaje-success" class="alert alert-success" role="alert"></div>
<div class="alert alert-warning"></div>
    <div class="card">
    <div class="card-body">
        <form id="formRegistrar" action="<?php echo URL_SITIO ?>scripts/registro_datos.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="inputAddress"><?php echo $cat_nombre_categoria ?></label>
                <input type="text" class="form-control" name="input_nombreCategoria" id="inputCategoryName" placeholder="">
            </div>
            <div class="form-group">
                <label for="inputAddress2"><?php echo $cat_descripcion ?></label>
                <input type="text" class="form-control" name="input_descripcion" id="inputDescripcion" placeholder="">
            </div>
            <label for="inputAddress2"><?php echo $cat_imagen ?></label>
            <div class="custom-file">
                <input type="file" accept="image/*" class="custom-file-input" id="inputImagen" name="input_imagen">
                <label class="custom-file-label" for="customFile"><?php echo $useleccionar_archivo ?></label>
            </div>
            <br>
            <br>
            <fieldset class="form-group">
            <label for="inputAddress2"><?php echo $uestado ?></label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="input_estado" id="inputRadioActivo" value="1" checked>
                <label class="form-check-label" for="inputRadioActivo">
                    <?php echo $cat_activa ?>
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="input_estado" id="inputRadioInactivo" value="0">
                <label class="form-check-label" for="inputRadioInactivo">
                    <?php echo $cat_inactiva ?>
                </label>
                </div>
            </fieldset>
            <br>
            <input type="hidden" value="registrar_categoria" name="action">
            <input type="hidden" value="registrar_categoria" name="menu">
            <button id="btnAgregar" class="col-md-8 offset-md-2 btn btn-primary"><?php echo $btnGuardar ?></button>
        </form>

    </div>
    </div>
</div>
<script>
     $('#mensaje-success').hide();

     $('.alert-warning').css("display", "none");
 
     $('.h2-name').html('<?php echo $fcategorias ?>');
     $('#titulo_pagina').html('Shoppingapp | <?php echo $fcategorias ?>');

    <?php 
        $msj = (isset($_GET['msj']))?$_GET['msj']:"";
        if( $msj == 'registrada'){ 
    ?>
        $('#mensaje-success').html('<i class="fa fa-check"></i>Categoría registrada exitosamente');
        $('#mensaje-success').show();
    <?php } elseif( $msj == 'muypesada'){ ?>
        $('#mensaje-success').html('<i class="fa fa-check"></i>Imagen demasiado pesada.');
        $('#mensaje-success').show();
    <?php } ?>
    $('#btnAgregar').click(function(e){
        e.preventDefault();

        // consultar existencia de correo
        var existe_categoria;
            $.ajax({
                    type:"POST",
                    async: false,
                    url:"<?php echo URL_SITIO ?>scripts/datos_ajax.php",
                    data: {"request" : "verificarCategoria", 
                            "nombreCategoria" : $('#inputCategoryName').val()},
                    success:function(r){
                        existe_categoria = r;
                        console.log(r);
                    }
            });


        if($('#inputCategoryName').val() == "" || $('#inputDescripcion').val() == "" ){
            toast('Faltan uno o más campos');
        }else if(existe_categoria == 1){
            toast('Ya existe una categoría con ese nombre');
        }else{    
            $('#formRegistrar').submit();
        }

    });

     function toast(msj){
        $('.alert-warning').html(msj);
        $('.alert-warning').css("display", "");
    }
    


    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>