<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include '../global/config.php';
include '../global/conexion.php';
include '../global/const.php';

session_start();
  require 'language/requirelanguage.php';


$sql_pais=$pdo->prepare("SELECT * from Paises");
$sql_pais->execute();
$listPais=$sql_pais->fetchAll(PDO::FETCH_ASSOC);


<<<<<<< HEAD
    
    // Buscar cliente
    $buscar_cliente = $pdo->prepare("SELECT * FROM Clientes WHERE FK_Usuario = :PK_Usuario");
    $buscar_cliente->bindParam(":PK_Usuario", $_SESSION['login_user']);
    $buscar_cliente->execute();
    $cliente = $buscar_cliente->fetchAll(PDO::FETCH_ASSOC);
   


=======
	$txtID=(isset($_POST['PK_Ciudad']))?$_POST["PK_Ciudad"]:"";
	$accion=(isset($_POST['accion']))?$_POST["accion"]:"";


	$txtNombres=(isset($_POST['NombresDestinatario']))?$_POST["NombresDestinatario"]:"";
	$txtApellidos=(isset($_POST['ApellidosDestinatario']))?$_POST["ApellidosDestinatario"]:"";
	$txtTelefono=(isset($_POST['Telefono']))?$_POST["Telefono"]:"";
	$txtDepartamento=(isset($_POST['Departamento']))?$_POST["Departamento"]:"";
	$txtDireccion1=(isset($_POST['Direccion']))?$_POST["Direccion"]:"";
	$txtDireccion2=(isset($_POST['Direccion2']))?$_POST["Direccion2"]:"";
	$txtCodigoPostal=(isset($_POST['CP']))?$_POST["CP"]:"";
	$txtCliente=(isset($_POST['Cliente']))?$_POST["Cliente"]:"";
	$txtCiudad=(isset($_POST['input_ciudad']))?$_POST["input_ciudad"]:"";

	

	switch ($accion) {
		case 'agregar':
					
					$sentencia=$pdo->prepare("INSERT into destinatarios(NombresDestinatario,ApellidosDestinatario,Telefono,Departamento,Direccion1,Direccion2,CodigoPostal,FK_Cliente,FK_Ciudad) values(:NombresDestinatario,:ApellidosDestinatario,:Telefono,:Departamento,:Direccion1,:Direccion2,:CodigoPostal,:FK_Cliente,:FK_Ciudad) ");
					$sentencia->bindParam(':NombresDestinatario',$txtNombres);
					$sentencia->bindParam(':ApellidosDestinatario',$txtApellidos);
					$sentencia->bindParam(':Telefono',$txtTelefono);
					$sentencia->bindParam(':Departamento',$txtDepartamento);
					$sentencia->bindParam(':Direccion1',$txtDireccion1);
					$sentencia->bindParam(':Direccion2',$txtDireccion2);
					$sentencia->bindParam(':CodigoPostal',$txtCodigoPostal);
					$sentencia->bindParam(':FK_Cliente',$txtCliente);
					$sentencia->bindParam(':FK_Ciudad',$txtCiudad);
					$sentencia->execute();
				break;
		case 'editar':
					
			break;
		case 'eliminar':
					
			break;
		case 'cancelar':
		
			break;
		
		default:
			# code...
			break;
	}

>>>>>>> c8ecc498a4df677e1716285a2fbb237acaeb25de
?> 

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<<<<<<< HEAD
	<title>Shoppingapp | Destinatario</title>
=======
	<title>Document</title>
>>>>>>> c8ecc498a4df677e1716285a2fbb237acaeb25de

	<link href="<?php echo URL_SITIO ?>static/css/styles.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo URL_SITIO ?>static/css/pedidos.css" rel="stylesheet" type="text/css" media="all" />

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/b2dbb6a24d.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="<?php echo URL_SITIO ?>static/js/jquery-3.5.0.min.js" ></script>
<<<<<<< HEAD
	<?php include './iconos.php' ?>
</head>
<body>
    <?php include "header.php" ?>
    <br>
	<div class="row col-md-12">
    <div class="col-md-2 ">
            <div class="card card-left">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <form action="Destinatarios" method="get">
                            <button type="submit" class="col-md-12 btn btn-primary">Nuevo</button>
                        </form>
                    </li>
                    <li class="list-group-item">
                        <form action="Ver-Destinatarios" method="get">
                            <button type="submit" class="col-md-12 btn btn-primary">Ver todos</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
		<div class="col-md-9 ">
=======
	
</head>
<body>
	<?php include "header.php" ?>
	<div class="row">
		<div class="col-md-4">
>>>>>>> c8ecc498a4df677e1716285a2fbb237acaeb25de
			<div class="card">
			  <div class="card-header">
			  	Registro de destinatario
			  </div>
<<<<<<< HEAD
			<form action="<?php echo URL_SITIO ?>scripts/destinatarios.php" class="form-line" id="frmRegistro" method="post" enctype="multipart/form-data">
=======
			 	<form class="form-line" id="frmRegistro" method="post" enctype="multipart/form-data">
>>>>>>> c8ecc498a4df677e1716285a2fbb237acaeb25de
			  <div class="card-body">
					<div class="form-group">
				  		<div class="form-row">
				  			<div class="col-md-6">
				  				<div class="form-label-group">
				  					<label for="idNombres">Nombres</label>
				  					<input maxlength="200" type="text" id="idNombres" required  name="NombresDestinatario" class="form-control">
				  				</div>
				  			</div>
				  			<div class="col-md-6">
				  				<div class="form-label-group">
				  					<label for="idApellidos">Apellidos</label>
				  					<input type="text" min="1" max="100" id="idApellidos" required  name="ApellidosDestinatario" class="form-control">
				  				</div>
				  			</div>
				  		</div>
			  		</div>
			  		<div class="form-group">
				  		<div class="form-row">
				  			<div class="col-md-6">
				  				<div class="form-label-group">
				  					<label for="idTelefono">Telefono</label>
				  					<input maxlength="200" type="text" id="idTelefono" required  name="Telefono" class="form-control">
				  				</div>
				  			</div>
				  			<div class="col-md-6">
				  				<div class="form-label-group">
				  					<label for="idCP">Codigo Postal</label>
				  					<input maxlength="200" type="text" id="idCP" required  name="CP" class="form-control">
				  				</div>
				  			</div>
				  			
				  		</div>
			  		</div>
			  		<div class="form-group">
				  		<div class="form-row">
				  			<div class="col-md-12">
				  				<div class="form-label-group">
				  					<label for="idDireccion">Direccion 1</label>
				  					<input maxlength="200" type="text" id="idDireccion" required  name="Direccion" class="form-control">
				  				</div>
				  			</div>				  			
				  		</div>
			  		</div>
			  		<div class="form-group">
				  		<div class="form-row">
				  			<div class="col-md-12">
				  				<div class="form-label-group">
				  					<label for="idDireccion2">Direccion 2</label>
				  					<input type="text" maxlength="200" id="idDireccion2" required  name="Direccion2" class="form-control">
				  				</div>
				  			</div>
				  			
				  		</div>
			  		</div>
<<<<<<< HEAD
					<input type="hidden"  name="Cliente" value="<?php echo $cliente[0]['PK_Cliente']?>">	
=======
					<input type="text"  name="Cliente" value="1">	
>>>>>>> c8ecc498a4df677e1716285a2fbb237acaeb25de
			  		<div class="form-group">
				  		<div class="form-row">
				  			<div class="col-md-6">
				  				<div class="form-label-group">
				  					<label for="inputPais">Pais</label>
				  					<select name="Pais" id="inputPais" class="form-control">
				  						<option value="">--Seleccione--</option>
									<?php foreach ($listPais as $paisL ) {?>
		                        		<option value="<?php echo $paisL['PK_Pais'] ?>"><?php  echo $paisL['NombrePais'] ?></option>
		                        	<?php } ?>
				  					</select>
				  				</div>
				  			</div>
				            <div class="form-group col-md-6">
				                <label for="inputCiudad">Ciudad</label>
				                <div id="cont_cbo_ciudad">
				                    <select  id="inputCiudad" name="input_ciudad" class="form-control">
				                        <option selected>- Seleccione -</option>
				                    </select> 
				                </div>
				            </div>			  			
				  		</div>
			  		</div>
			  		<div class="form-group">
				  		<div class="form-row">
				  			<div class="col-md-12">
				  				<div class="form-label-group">
				  					<label for="idDepartamento">Departamento, Estado ó Provincia </label>
				  					<input type="text" id="idDepartamento" required  name="Departamento" class="form-control">
				  				</div>
				  			</div>
				  			
				  		</div>
			  		</div>

			  	</div>
				<div class="card-footer text-muted text-center">
				  	<button class="btn btn-primary" value="agregar" type="submit" name="accion" data-toggle="tooltip" title="<?php echo $btnGuardar ?>">
				  		<i class="fas fa-save fas-faw"></i>
				  	</button>
					<button class="btn btn-warning" value="cancelar" type="submit" name="accion" data-toggle="tooltip" title="<?php echo $btnCancelar ?>">
						<i class="fas fa-ban fas-faw"></i>
					</button>
				</div>
			  </form>
			</div>
		</div>
	

	</div>
<<<<<<< HEAD
<br>
=======

>>>>>>> c8ecc498a4df677e1716285a2fbb237acaeb25de

<?php include 'footer.php' ?>
</body>
</html>

<script>
<<<<<<< HEAD
    $('#lbl-carrito').hide();
=======
>>>>>>> c8ecc498a4df677e1716285a2fbb237acaeb25de
	$(document).ready(function(){
		$('#inputPais').change(function(){
		    recargarListaCiudad();
		});
	})
	function recargarListaCiudad(){
		$.ajax({
			type:"POST",
			url:"<?php echo URL_SITIO ?>scripts/datos_ajax.php",
            data: {"request" : "selectCiudades", 
                    "FK_Pais" : $('#inputPais').val()},
			success:function(r){
				$('#cont_cbo_ciudad').html(r);
			}
		});
	}
</script>