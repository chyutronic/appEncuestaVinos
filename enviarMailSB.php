<?php

    //INICIO código para enviar el correo al usuario

    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "GatoNegro <noreply@gatonegro.sclnt.cl>";
    $to = $_POST['email'];
    $subject = "Bienvenido a nuestro maravilloso mundo de saboRRR!";
    $message = 
    '
    <html> 
    <head> 
    <title>Celebra tu Sabor</title> 
    </head> 
    <body> 
 <!--inicio RESULTADO Sauvignon Blanc-->
    <div class="modal_container" id="modal_container_SB">
        <div class="modal">
			<div class="kv_container" align="center">
				<div align="center"><img class="logoPremio" src="https://gatonegro.sclnt.cl/img_botellas/tu_gn_es.png" width="80%"/></div>
				<img class="botella_premio" src="https://gatonegro.sclnt.cl/img_botellas/fondo_sb.jpg" width="80%"/>
				<h2>Bienvenido a nuestro maravilloso mundo de saboRRR.</h2>
                <p>Descubre nuestro fresco y frutal <strong>Sauvignon blanc</strong>, un vino de romas frescos, notas a frutas tropicales con un largo y afrutado final. 
                Ideal para disfrutar con <strong>pescados</strong>, <strong>mariscos o ensaladas</strong>. </p>
					<table width="90%" border="0">
					  <tbody>
						<tr>
						  <td></td>
						  <td style="text-align: center; vertical-align: middle;"><img class="maridaje" src="https://gatonegro.sclnt.cl/img_botellas/icon_pez.png" width="10%"/><img class="maridaje" src="https://gatonegro.sclnt.cl/img_botellas/icon_marisco.png" width="10%"/><img class="maridaje" src="https://gatonegro.sclnt.cl/img_botellas/icon_lechuga.png" width="10%"/></td>
						  <td></td>
						</tr>
					  </tbody>
					</table><br>
			</div>
		
        </div>
    </div>
	<!--fin RESULTAD Sauvignon Blanc-->
    </body> 
    </html> 
    '; 

    $headers = "MIME-Version: 1.0\r\n";
    $headers.= "Content-type: text/html; charset=iso-8859-1\r\n";
    $headers.= 'Bcc: subliminalmeunospam@gmail.com' . "\r\n";
    $headers.= "From:" . $from;

    mail($to,$subject,$message, $headers);
    // echo "The email message was sent.";

    //FIN código para enviar el correo al usuario

    
    //INICIO código para insertar dato en base de datos

    $db_host = "72.167.68.184"; //dirección servidor base de datos
    $db_nombre = "APPENCUESTAVINOS"; //nombre de la base de datos
    $db_usuario = "chyutronic"; //nombre del usuario
    $db_contrasena = "brother2022!"; //contrasena

    $conexion = mysqli_connect($db_host, $db_usuario, $db_contrasena, $db_nombre);


    $date = date('Y-m-d H:i:s');
    $ingreso = "INSERT INTO consultas_realizadas VALUES ('$date', '$to', 'SB');";

    mysqli_query($conexion, $ingreso);

    //FIN código para insertar dato en base de datos

    header("Location: https://gatonegro.sclnt.cl");

?>

