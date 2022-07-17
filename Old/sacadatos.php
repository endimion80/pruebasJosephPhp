<?php 

$server = "miweb.localhost";
$user = "tax3718";
$pass = "Qwerty7890#";
$bd = "demo_json";

//Creamos la conexión
$conexion = new mysqli($server, $user, $pass, $bd); 
//or die("Ha sucedido un error inexperado en la conexion de la base de datos");
if($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

echo "Conexíon exitosa...";
echo "<br/>";

//generamos la consulta
$sql = "SELECT * FROM gente";
mysqli_set_charset($conexion, "utf8"); //formato de datos utf8

if(!$result = mysqli_query($conexion, $sql)) die();

$gente = array(); //creamos un array

while($row = mysqli_fetch_array($result)) 
{ 
    $id=$row['id'];
    $nombre=$row['nombre'];
    $edad=$row['edad'];
    $genero=$row['genero'];
    $email=$row['email'];
    $localidad=$row['localidad'];
    $telefono=$row['telefono'];
    

    $gente[] = array('id'=> $id, 'nombre'=> $nombre, 'edad'=> $edad, 'genero'=> $genero,
                        'email'=> $email, 'localidad'=> $localidad, 'telefono'=> $telefono);

}
    
//desconectamos la base de datos
$close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");


//Creamos el JSON
$json_string = json_encode($gente);
echo "$json_string";

echo "<br/>";
//Si queremos crear un archivo json, sería de esta forma:
$file = 'gente.json';
file_put_contents($file, $json_string)
    or die("No se ha podido crear el archivo.");

?>