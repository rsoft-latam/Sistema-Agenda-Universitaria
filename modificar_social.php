<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Agenda Universitaria</title>
<link rel="stylesheet"  href="css/Inicio.css" />
</head>

<script src="js/jquery.js"></script>
<script src="js/jquery-1.11.0.min.js"></script>




<body>


<div id="Cabeza">
  <img src="Imagenes/mi_umsa.jpg" width="218" height="71" style="float:left; margin-left:40px; margin-top: 5px;"/>
  <img src="Imagenes/Agenda.jpg" width="315" height="71" style="float:left; margin-left:80px;margin-top:9px;"/>
  


 
  
  
</div>

<div id="Antes">

</div>

<div id="Menu1">


 <ul id="Menu">
    <li> <a href="inicio.php">Home</a></li> 
      <li> <a href="evenA.html">Eventos Academicos</a></li> 
      <li> <a href="evenS.html">Eventos sociales</a></li>
        <li> <a href="feria.html">Feria Muldidisciplinaria</a></li> 
           
           <li> <a href="comunicados.html">Comunicados</a></li>
                    
       <li> <a href="salas.html">Salas</a></li>  
         
  </ul>
</div>


<div id="Cuerpo"></div>


<tr>
       <td height="22" scope="row">&nbsp;</td>
       <td scope="row"><label for="label3">Codigo Evento Social :</label></td>
       <td width="25" height="32" scope="row">&nbsp;</td>
  
       <td><input type="text" name="T2" id="email22" size="30" maxlength="128" /></td>
       <td>&nbsp;</td>
       <td width="96"><input type="submit" name="submit" id="submit" value="Buscar" class="submit"/></td>
  <td width="28">&nbsp;</td>
   </tr>



  <form class="form" action="Crear.php?id=<?php echo $Codigo;?>" method="post" enctype="multipart/form-data">

  <fieldset>
  <legend><strong>Modificar informacion Del Evento Social</strong></legend>
  <table width="487" height="208" border="0" cellpadding="2" cellspacing="0">
   
            
   <tr>
       <td scope="row">&nbsp;</td>
       <td height="26" scope="row"><label for="label">Codigo de Evento Social:</label></td>
       <td><input type="text" name="T1"  size="30" maxlength="32" /></td>
       <td>&nbsp;</td>
   </tr>
            
   <tr>
       <td height="22" scope="row">&nbsp;</td>
       <td scope="row"><label for="label3">Nombre Del Evento Social:</label></td>
       <td><input type="text" name="T2" id="email22" size="30" maxlength="128" /></td>
       <td>&nbsp;</td>
   </tr>
            
   <tr>
       <td scope="row">&nbsp;</td>
       <td height="22" scope="row"><label for="label">Fecha del Evento Social:</label></td>
       <td><input type="text" name="T3" id="password4" size="30" maxlength="32" /></td>
       <td>&nbsp;</td>
   </tr>
     
   <tr>
       <td scope="row">&nbsp;</td>
       <td height="22" scope="row"><label for="label2">Detalle Del Evento:<label></td>
       <td><input type="text" name="T4" id="password5" size="30" maxlength="32" /></td>
       <td>&nbsp;</td>
   </tr>
         
   <tr>
       <td scope="row">&nbsp;</td>
       <td height="22" scope="row"><label for="label2">Tematica:</label></td>
       <td><input type="text" name="T4" id="password5" size="30" maxlength="32" /></td>
                     
     
       <td>&nbsp;</td>   
   </tr>
           
   <tr>
       <td scope="row">&nbsp;</td>
       <td height="22" scope="row"><label for="label2">Ubicacion del Evento:</label></td>
       <td><input type="text" name="T5" id="password11" size="30" maxlength="32" /></td>
       <td>&nbsp;</td>
   </tr>
           
   <tr>
       <td scope="row">&nbsp;</td>
       <td height="26" scope="row"><label for="label2">Direccion Del Evento:</label></td>
       <td><input type="text" name="T6" id="password6" size="30" maxlength="32" /></td>
       <td>&nbsp;</td>
   </tr>
           
   <tr>
       <td scope="row">&nbsp;</td>
       <td width="180"><label for="label">Hora Inicio:</label></td>
       <td width="246"><input type="text" name="T7" id="password7" size="30" maxlength="32" /></td>
       <td scope="row">&nbsp;</td>
   </tr>
   
   <tr>
       <td scope="row">&nbsp;</td>
       <td><label for="label2">Hora Fin :</label></td>
       <td><input name="T8"  type="text" id="password8" value="" size="30" /></td>
       <td scope="row">&nbsp;</td>
   </tr>
           
   <tr>
       <td scope="row">&nbsp;</td>
       <td><label for="label2">Tipo de Evento Social:</label></td>
       <td><input type="text" name="T9" id="password9" size="30" maxlength="32" /></td>
       <td scope="row">&nbsp;</td>
   </tr>
            
   
   <tr>
      <td scope="row">&nbsp;</td>
              <td><label for="label2">Cronograma del Evento:</label></td>
            <td><input type="text" name="T4" id="password5" size="30" maxlength="32" /></td> 


          
    <td scope="row">&nbsp;</td>
 </tr>
      
         <tr>
            <td scope="row">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td scope="row">&nbsp;</td>
         </tr>
          
      <tr></tr>
      
   </table>
</fieldset>
  
  
 <fieldset>
 <table width="495" height="34" border="0" cellpadding="0" cellspacing="0">
   
 <tr>
  <td width="25" height="32" scope="row">&nbsp;</td>
  <td width="96"><input type="submit" name="submit" id="submit" value="MODIFICAR" class="submit"/></td>
  <td width="28">&nbsp;</td>

  <td width="96">&nbsp;</td>
  <td width="28">&nbsp;</td>
 </tr>
 </table>
 </fieldset>
</form>
</body>
</html>















