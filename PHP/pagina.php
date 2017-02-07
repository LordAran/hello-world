<html>
  <head>
    <title>Mi quinta página con php</title>
  </head>
  <body>
    <h1>Mi quinto ejemplo Php</h1> 
    <p>Este es mi quinto ejemplo con partes de Php</p> /* Hasta aquí es Html */
    <?php // Aquí empieza el codigo Php
      echo "<p>Esta es mi quinta frase hecha con Php!</p>" ;
      $miprimeravariable = "sorpresa" ; // Esta línea da valor a una variable
      ###################################
      #También puedo poner esta tonteria
      ###################################
      
	$nota_primer_examen = 10 ;
	$nota_segundo_examen = 3 ;
	
	$resultado = $nota_primer_examen + $nota_segundo_examen ;
	echo "La suma de mis dos notas es $resultado" ;
	
	echo "<p>Voy a ver mis notas!</p>" ;
  $nota_primer_examen = 3;
  if ($nota_primer_examen < 5 )
  {
    echo "<p>Qué fracaso! Has suspendido con un $nota_primer_examen.</p>" ;
  }
  else
  {
     echo "<p>Enhorabuena, has aprobado con un $nota_primer_examen!</p>" ;
  }
  
	switch ( $nota_primer_examen )
  {
     case 0: echo "Imposible estudiar menos." ; break ;
     case 1: echo "Casi no has abierto el libro." ; break ;
     case 2: echo "A este paso no vamos bien." ; break ;
     case 3: echo "Solo estudiaste un día?" ; break ;
     case 4: echo "Hui! Te faltó muy poco!" ; break ;
     case 5: echo "Bien, aprobaste por los pelos." ; break ;
     default: echo "Eres un buen estudiante." ;
  }
  
  $x = 25 ;
  $y = 30 ;
  while ( $x < $y )
  {
    echo "<p>Vamos por el número $x.</p>" ;
    $x = $x + 1 ;
  }
  
    for ( $contador = 25 ; $contador < 50 ; $contador = $contador + 1)
    {
      echo "<p>Vamos por el número $contador.</p>" ;
    }
   
   // leer datos de usuario y contraseña de la base de datos
include("config.php") ;

// Conexión con el servidor
mysql_connect($server, $db_user, $db_pass) or die ("error1".mysql_error());

// Selección de Base de Datos
mysql_select_db($database) or die ("error2".mysql_error());
    
    ?>
  </body>
</html>