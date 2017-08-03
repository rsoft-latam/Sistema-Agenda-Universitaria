<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Modificar</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #000000;
	font-weight: bold;
}
body {
	background-color: #FFFFFF;
}
.Estilo3 {font-size: 12px}
.Estilo7 {color: #000000}
.Estilo8 {color: #FFFF33}
.Estilo3 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; }
.Estilo15 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; color: #000099; font-weight: bold; }
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000000;
}
-->
</style>

<link rel="stylesheet" type="text/css" href="DataTables/jquery.dataTables.css"/>
<script type="text/javascript" language="javascript" src="DataTables/jquery.js"></script>
<script type="text/javascript" language="javascript" src="DataTables/jquery.dataTables.js"></script>
<script>
$(document).ready(function() {
    $('#example').dataTable( {
        "language": {         	
	"processing": "cargando......",
	"lengthMenu": "Mostrar _MENU_ registros",
	"zeroRecords": "No existen registros",
		"info": "pagina _PAGE_ de _PAGES_",
	"infoEmpty": "Ningun registro disponible",
	"infoFiltered": "(filtrado de  _MAX_ total registros)",
	"infoPostFix": "",
	"search": "Buscar",
	"url": "",
	"paginate": {
		"first":    "Primero",
		"previous": "Anterior",
		"next":     "Siguiente",
		"last":     "Ultimo"
				}				
        }
    } );
} );
</script>

</head>

<body>
<p>
  <?php
include("Conexion.php");
$var1="";
$var2="";	
$var3="";
$var4="";
$var5="";	
$var6="Imagenes/3.png";	




	if(isset($_POST['BB']))
	{			
		$text = $_POST['BB'];			
		if($text=="Crear")
		{		
		$a1 = $_POST['T11'];
		$a2 = $_POST['T22'];
		$a3 = $_POST['T33'];
		$a4 = $_POST['T44'];
		$a5 = $_POST['T55'];
		
		$NombreFoto=$_FILES['T66']['name'];
	    $Ruta=$_FILES['T66']['tmp_name'];	
        $Destino="Fotos/".$NombreFoto;
	    copy($Ruta,$Destino);	
	
		
	$sql=$cn->prepare('INSERT INTO usuario (CodigoOrganizador,Nick,Clave,Tipo,Foto) VALUES (:CodigoOrganizador,:Nick,:Clave,:Tipo,:Foto)');	
	$sql->execute(array(':CodigoOrganizador' => $a2,':Nick' => $a3,':Clave' => $a4,':Tipo' => $a5,':Foto' => $Destino));		
	
		/*echo "<script>alert ('Creado Correctamente');</script>";	*/	
		}	
		if($text=="Buscar")
		{		
		$a1 = $_POST['T11'];		
		$sql2=$cn->prepare('SELECT * FROM usuario WHERE CodigoCuenta=:CodigoCuenta');	
	    $sql2->execute(array(':CodigoCuenta' => $a1));					
			while($resultado2 = $sql2->fetch())
			{	
			$var1=$resultado2['CodigoCuenta'];
			$var2=$resultado2['CodigoOrganizador'];
			$var3=$resultado2['Nick'];	
			$var4=$resultado2['Clave'];
			$var5=$resultado2['Tipo'];
			$var6=$resultado2['Foto'];			
			}		
		}	
		if($text=="Eliminar")
		{		
		$a1 = $_POST['T11'];
		$sql3=$cn->prepare('DELETE FROM usuario WHERE CodigoCuenta=:CodigoCuenta');	
	    $sql3->execute(array(':CodigoCuenta' => $a1));	
			
		
		/*echo "<script>alert ('Eliminado con exito');</script>";	*/ 
		}		
		if($text=="Modificar")
		{		
		$a1 = $_POST['T11'];
		$a2 = $_POST['T22'];
		$a3 = $_POST['T33'];
		$a4 = $_POST['T44'];
		$a5 = $_POST['T55'];
		
		$NombreFoto1=$_FILES['T66']['name'];
	    $Ruta1=$_FILES['T66']['tmp_name'];	
        $Destino1="Fotos/".$NombreFoto1;
	    copy($Ruta1,$Destino1);	
		
		
		$sql4=$cn->prepare('UPDATE usuario SET CodigoOrganizador=:CodigoOrganizador,Nick=:Nick,Clave=:Clave,Tipo=:Tipo,Foto=:Foto WHERE CodigoCuenta=:CodigoCuenta');	
	    $sql4->execute(array(':CodigoCuenta' => $a1,':CodigoOrganizador' => $a2,':Nick' => $a3,':Clave' => $a4,':Tipo' => $a5,':Foto' => $Destino1 ));		

		/*echo "<script>alert ('Modificado con exito');</script>";*/
		}		
				
	}
?>
</p>
<div style="width:500px; margin:5px auto; border:1px #CCCCCC solid;margin-bottom:40px;">
  
  <form id="form2" name="form2" method="post" action="" style=" width:400px; margin-left:20px; " enctype="multipart/form-data">
    <p align="left">
		
          <input type="text" name="T11" value="<?php echo $var1?>"/>
        <span class="Estilo3">Codigo Cuenta</span>
        <input type="submit" name="BB" value="Buscar" />
    </p>
        <p align="left" class="Estilo3">
          <input type="text" name="T22" value="<?php echo $var2?>" />
        Codigo Organizador </p>
        <p align="left" class="Estilo3">
          <input type="text" name="T33" value="<?php echo $var3?>"/>
        Nick</p>
		<p align="left" class="Estilo3">
          <input type="text" name="T44" value="<?php echo $var4?>"/>
        Clave</p>
		<p align="left" class="Estilo3">
          <input type="text" name="T55" value="<?php echo $var5?>"/>
        Tipo</p>
		<p>
		<img src=<?php echo $var6;?> width="67" height="63" style="border:1px #CCCCCC solid; padding:2px;"/>

		</p>
	<p>
		<input type="file" name="T66" id="files" />
	</p>

        <p align="left">
          <input type="submit" name="BB" value="Crear" style="width:80px; height:25px; border:1px #000000 solid; background:#000000; color:#FFFFFF;"/>
          <input type="submit" name="BB" value="Eliminar" style="width:80px; height:25px; border:1px #000000 solid; background:#000000; color:#FFFFFF;"/>
          <input type="submit" name="BB" value="Modificar" style="width:80px; height:25px; border:1px #000000 solid; background:#000000; color:#FFFFFF;"/>
          <input type="reset" name="BB" value="Borrar" style="width:80px; height:25px; border:1px #000000 solid; background:#000000; color:#FFFFFF;"/>
        </p>
  </form>
  
</div>


<div style="width:800px; margin:10px auto; ">

<table width="774"  border="0" id="example" >
  <thead>
    <tr >
	  <td width="83" height="25"><span class="Estilo15">Foto</span></td>
	  <td width="109" height="25"><span class="Estilo15">Codigo Cuenta</span></td>
      <td width="152"><span class="Estilo15">Codigo Organizador</span></td>
      <td width="112"><span class="Estilo15">Nick</span></td>
      <td width="152"><span class="Estilo15">Clave</span></td>
	  <td width="140"><span class="Estilo15">Tipo</span></td>
	  
    </tr>
  </thead>
  <tfoot>
    <tr>
   	 <td width="83" height="25"><span class="Estilo15">Foto</span></td>
	  <td width="109" height="25"><span class="Estilo15">Codigo Cuenta</span></td>
      <td width="152"><span class="Estilo15">Codigo Organizador</span></td>
      <td width="112"><span class="Estilo15">Nick</span></td>
      <td width="152"><span class="Estilo15">Clave</span></td>
	  <td width="140"><span class="Estilo15">Tipo</span></td>
	 
    </tr>
  </tfoot>
  <tbody>
    <?php 
include("Conexion.php");


	$sql5=$cn->prepare('SELECT * FROM usuario');	
	$sql5->execute();		
	
  while($op5=$sql5->fetch())	 	
   { ?>
 


<tr>
  <td><img src=<?php echo $op5['Foto'];?> width="67" height="63" style="border:1px #CCCCCC solid; padding:2px;"/></td>
  <td><span class="Estilo3"><?php echo $op5['CodigoCuenta'];?></span></td>
  <td><span class="Estilo3"><?php echo $op5['CodigoOrganizador'];?></span></td>
  <td><span class="Estilo3"><?php echo $op5['Nick'];?></span></td>
  <td><span class="Estilo3"><?php echo $op5['Clave'];?></span></td>
  <td ><span class="Estilo3"><?php echo $op5['Tipo'];?></span></td>
 
</tr>

<?php		
}	
?>
  </tbody>
</table>

</div>

</body>
</html>
