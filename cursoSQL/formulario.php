<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="estilos.css" type= "text/css">

</head>

<body>
    <div class="contenedor">
        <form   method="post" action="">
            <h2><em>Formulario de Registro</em></h2>
            <label for="nombre"> Nombre <span><em>(requerido)</em></span></label>
            <input type="text"  name="nombre"  class="form-input" required/>
            
            <label for="apellido">Apellidos <span><em>(requerido)</em></span></label>
            <input type="text" name="apellido" class="form-input" required/>
            
            <label for="email">Email <span><em>(requerido)</em></span></label>
            <input type="email" id="email" name="email" class="form-input" required/>

            <input class="form-btn" name="submit" type="submit" value="Subscribirse">
    
            

            <?php
    
    if ($_POST) {
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $email=$_POST['email'];
    

        $servername="localhost";
        $username="root";
        $password="";
        $dbname="cursosql";


        $conn=new mysqli($servername,$username,$password,$dbname);
            
     
                              
        if ($conn->connect_error) {
            die("La conexión ha fallado: " . $conn->connect_error);
        } 

		    $sql="INSERT INTO usuario (nombre, apellidos, email) 
            VALUES ('$nombre', '$apellido', '$email')";

            if($conn->query($sql)===TRUE) {
		        echo '<script language="javascript">alert("Nuevo registro creado con éxito ");</script>';
	        } else {
		        echo "Error ". $sql . "<br>" . $conn->error;
                    
	        }

            $conn->close(); 
        }     
    
            
?>  





        </form>

    </div>
    
</body>
</html>
