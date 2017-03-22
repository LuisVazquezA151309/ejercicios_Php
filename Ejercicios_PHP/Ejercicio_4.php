<html>
<head>
    <title>Ejercicio 4</title>
    <meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
     </head>
<body bgcolor="#F1C40F">
   
  
 <header>
     <div class="logo">
             <a href="index,html">PHP</a>
        </div>			 
        <center>
        <table width="auto" height="auto" > 
                <nav class="menu">
              	<ul>
                    <li><a href="Ejercicio_1.php">1</a></li>
                      <li><a href="Ejercicio_2.php">2</a></li>
                       <li><a href="Ejercicio_3.php">3</a></li>
                       <li><a href="Ejercicio_4.php">4</a></li>
                       <li><a href="Ejercicio_5.php">5</a></li>
				</ul>
                </nav>
            </div>
</header>
        
        <main>
            
                <div class="container">
                    <br>
                    <br>
                    <h2> PROGRAMACION DE APLICACIONES WEB</h2>
                    <br>
                    <br>
                    
                    <br>
                    <h4>Mostrar en pantalla cual es mayor de dos numeros</h4>

                    <br>
                    <br>
					
<?php
    $n1=54;
    $n2=10;
	 echo "1.-(".$n1.")</br>";
	 echo "2.-(".$n2.")</br>";
	 
    
    if($n1>$n2){
        echo "El primer numero (".$n1.") es mayor que el segundo (".$n2.")";
    }
    else if ($n1==$n2){
        echo "El primer numero (".$n1.") es igual al segundo (".$n2.")";
    }
    else {
        echo "El primer numero (".$n1.") es menor que el segundo (".$n2.")";
    }
?>
                    
<br>
    <br>
    <br>
  <br>
    <br>
    <br>  
    
     <right><a href="index.php">Regresar al menu</a></h2></right>
      <br>
    <br>
    <br>  <br>
    <br>
    <br>  <br>
    <br>
    <br>  <br>
  
    <P>LUIS ANGEL VAZQUEZ DELGADO</P>
   
    
                
                
                </div>
            </section>
   
   
   

    </body>
</html>    