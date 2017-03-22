<html>
<head>
    <title>Ejercicio 2</title>
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
   <div align=left><h4>Mostrar en pantalla una tabla de 10 por 10 con los numeros del 1 al 100</h4></div>
   <br>
     <br>
<?php

    echo "<table border=1 >";
    $n=1;
	
    for($n1=1; $n1<=10;$n1++)
    {
		
        echo "<tr>";
        for($n2=1;$n2<=10;$n2++)
        {
			
            echo "<td>","<font color=red>",$n,"</td></font>";
            $n=$n+1;
				
        }
        echo "</tr>";
	echo "</font>";
	
    }
    echo "</table>";

?>

                    
<br>
    <br>
    <br>
  <br>
    <br>
    <br>  
    
     <a href="index.php">Regresar al menu</a></h2>
	 <br>
      <br>
    <br>
 
   
    <P>LUIS ANGEL VAZQUEZ DELGADO</P>
   
    
                
                
                </div>
            </section>
   
   
   

    </body>
</html>    