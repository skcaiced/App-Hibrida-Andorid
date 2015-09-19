<?php
if (!isset($_POST['email'])) {
?>
<!doctype html>
<html >
 <head>
 <meta charset="utf-8"/>  
  <title>SCRla</title>
  <link rel="stylesheet" href="style/css/estilopaginas.css" type="text/css" media="screen" />
  
  <script type="text/javascript" src="style/js/jquery.min.js"></script>
  <!--
   <link rel="stylesheet" type="text/css" href="style/css/style-pestana.css" />
		<script type="text/javascript" src="style/js/modernizr.custom.04022.js"></script>
		-->
  <style>
  iframe {
   margin: 0 auto;
  }
  a{
  color: #32373D;text-decoration:none;
  }
  table {
  width:750px;
margin: 0 auto;
  }
  .nombre{
  margin:2px;text-align : center;font-weight:bold;
  }
  td{
  text-aling:center;
  }
  img{
  display:block;
  margin:auto;
  }
 
  
  img{
  height:250px;width:350px;
  cursor:pointer;
  }
  span{
  font-size: 1.0em;text-indent: 2.75em;
  }
  gr .doc{
  line-height: 0.5em;
  }
 #tt{
 margin-bottom: 0px;margin-top: 0px
 }
 p{
  margin-bottom: 10px;margin-top: 10px
 }
 #cc,#valores,#ap,#ve,#ot{display:none;}
 p.linkcito:hover{ 
cursor:pointer;
 }
 input[type="text"]
{
width:200px;
height:25px;
display:block;
margin-bottom:2px;
font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
font-size: 1.05em;text-align:justify;color: #32373D;
}
textarea{
font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
font-size: 1.05em;text-align:justify;color: #32373D;
}
input[type="submit"]{
width:150px;
height:25px;font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}
input[type="reset"]{
width:80px;
height:25px;font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}
  </style>
   
 </head>
 <body>
 <div id="marco">
 <div id="titulo">
 <h1>Contáctenos</h1>
 </div>
 <div id="contenido">
 <div style="height:10px;width:100%;"></div>
<table>
  <tr>
  <td>
  <img border="0"  src="style/img/paginas/planet.gif" width="700" height="130" alt="Eduardo Cruz.">
  <p ><strong>Telf.:</strong> (593-4)&nbsp;&nbsp;&nbsp; 2158322,&nbsp;&nbsp; 2158422,&nbsp;&nbsp; 2158230</p>
<p><strong>Fax:</strong> &nbsp;(593-4)&nbsp;&nbsp;&nbsp; 2158620</p>
<p><strong>Dirección:</strong> Av. Juan Tanca Marengo y Joaquín Orrantia Edificio Executive Center piso 3 oficina 311</p>
<center><p>Guayaquil - Ecuador</p></center>
<p>&nbsp;&nbsp;&nbsp;</p>
  </td>
    <td>
	  <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    <label>
     <strong> Su nombre:</strong>
     <center> <input name="nombre" id="nom" type="text" onkeypress="sololetras();" /> </center>
    </label>
    <label>
     <strong> Su Teléfono:</strong>
      <center><input name="telefono" type="text" /></center>
    </label>
    <label>
      <strong>Su Email:</strong>
      <center><input name="email" id="correo" type="text" /></center>
    </label>
    <label>
      <strong>Mensaje:</strong><br>
      <textarea name="mensaje" rows="10" cols="40"></textarea>
    </label><br>
	<center>
    <input type="reset" value="Borrar" />
    <input type="submit" value="Enviar Mensaje" />
	</center>
  </form>
  </td>
  <tr>
</table>
	 
				
 <center>

 <iframe src="https://mapsengine.google.com/map/embed?mid=zitg8KCMMS6s.kwu1dnhiq-SM" width="700" height="280"></iframe>
<!--
 <iframe width="700" height="280" frameborder="1" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/ms?msa=0&amp;msid=201605219861683502184.0004f19ad85ba5f945866&amp;hl=es&amp;ie=UTF8&amp;ll=-2.156636,-79.892948&amp;spn=0,0&amp;t=m&amp;output=embed"></iframe><br /><small>Ver <a href="https://www.google.com/maps/ms?msa=0&amp;msid=201605219861683502184.0004f19ad85ba5f945866&amp;hl=es&amp;ie=UTF8&amp;ll=-2.156636,-79.892948&amp;spn=0,0&amp;t=m&amp;source=embed" style="color:rgba(23,104,171,1);;text-align:left" target="_blank">SCRla</a> en un mapa más grande</small></center>
 -->
 </div>
  </div>
 </body>
</html>



<?php
}else{
  $mensaje="MENSAJE ENVIADO DESDE APLICACIÓN MÓVIL HÍBRIDA";
  $mensaje.= "\nNombre: ". $_POST['nombre'];
  $mensaje.= "\nEmail: ".$_POST['email'];
  $mensaje.= "\nWEBSITE: ". $_POST['web'];
  $mensaje.= "\nMensaje: \n".$_POST['mensaje'];
  $destino= "steven-caicedo@hotmail.com";
  $remitente = $_POST['email'];
  $asunto = "Mensaje enviado por: ".$_POST['nombre'];
  mail($destino,$asunto,$mensaje,"FROM: $remitente");
  echo "  <script language=’JavaScript’>    alert(‘JavaScript dentro de PHP’);  </script> ";
  header('Location: contacto.php');
?>
<html>
<head>
 <title>SCRla</title>
  <link rel="stylesheet" href="style/css/estilopaginas.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="style/font-awesome/css/font-awesome.css" />
   <style>
  iframe {
   margin: 0 auto;
  }
  a{
  color: #32373D;text-aling:center;
  text-decoration:none; font-size: 2.0em;
  line-height:1.5em;
 
  }
 
  .nombre{
  margin:2px;text-align : center;font-weight:bold;
  }
  td{
  text-aling:center;
  }
  img{
  display:block;
  margin:auto;
  }
 
  
  img{
  height:250px;width:350px;
  cursor:pointer;
  }
  span{
  font-size: 1.0em;text-indent: 0.5em;
 
  }
 
 p{
  margin-bottom:100px;margin-top: 200px;
 text-aling:center;
 margin-left:150px;
  margin-right:150px;
 }

#contenido{

}


  </style>
</head> 
<body>
 <div id="marco">
 <div id="titulo">
 <h1>Mensaje Enviado</h1>
 </div>
 <div id="contenido">
  <p><a href="contacto.php"><strong>Click aqui para volver a <br>la página contáctenos <span  class="icon-repeat"></span></strong></a></p>
  </div>
  </div>
</body>
</html>
<?php

}
?>