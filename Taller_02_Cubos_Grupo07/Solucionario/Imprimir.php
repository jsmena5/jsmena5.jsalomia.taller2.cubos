<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>CONTINENTES</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.31" />
</head>

<body>

<?php
   include_once "3_CuboContinentes.php";

	if (isset($_POST['Imprimir'])) {
        $indice = (int)$_POST['continente'];
       
            Imprimir_Continentes($Cubos[$indice], $titulo[$indice]);
            echo '
            <form action="3_CuboContinentes.php" method="GET">
                 <button type="submit">Regresar</button>
            </form>';
        
        }
    
    
	
function Imprimir_Continentes($Continente,$mensaje){

/* 
    echo "<pre>";
        print_r($Continente);
    echo "</pre>"; 
*/
    $Pais = $Continente;
    $html = '<h1>' . $mensaje. '</h1>';
    echo $html;
    
    
    $html=null;
    //PRIMERA CARA DEL CUBO
    foreach ($Pais as $cara=>$info){        
        
    // ALGORITMO PARA LA CABECERA				   
    $html .='
        <table border=1 alingn="center">
        <tr>';
        
    /* 
        echo "<pre>";
          print_r($info);
          echo "</pre>";
        echo "<br><br>";
     */
    
                
        //CALCULO EL MAXIMO DE LAS COLUMAS DE LA MATRIZ
        $maxColum=null;
        foreach($info as $prov=>$arreglo) {
            $tam=count($info[$prov]);
            /*				 
                echo "<pre>";
                    print_r($info[$prov]);
                echo "</pre>";
                echo "<br><br>";
            */	
            $maxColum=($maxColum >= $tam) ? $maxColum : $tam;
        
        }
     
        // PRUEBA DE ESCRITORIO
        //echo "MAXCOLUM: $maxColum <br> ";
        
        // TITULO DE LA TABLA
        $tam = count ($info);
    
        // PRUEBA DE ESCRITORIO
        //echo "NUMERO DE PROVINCIAS: $tam <br> ";
        
        $html.=' <tr>  
                 <th colspan=" ' . $tam . '" bgcolor="#EC7063"> ' . $cara . ' </th>
                 </tr>';
                 
        // IMPRIMIR LA CABECERA
         foreach($info as $prov=>$arreglo){
             $html.="<th> $prov </th>"; 
         }
         
      // ALGORITMO PARA IMPRIMIR LA TABLA EN HTML 
        for($f=0;$f < $maxColum; $f++){   // $max para recorrer hacia abajo
            $html.='<tr>';
             foreach($info as $data){
                 $html.=( isset($data[$f]) ) ? '<td bgcolor="#D6FAF2">' . $data[$f] . '</td>' : '<td bgcolor="#D6DEFA">&nbsp;</td>';     
              
              //  PRUEBA DE ESCRITORIO
                 /*
                    echo "FILA Nro: $f <br>"; 
                    if ( isset($data[$f]) ){
                        echo "<pre>";
                            print_r($data[$f]);
                        echo "</pre>";
                    }else{
                        echo "NO HAY DATA";
                    }
                    echo "<br><br>";
                */
                
             }
            $html.='</tr>';
        }	
        
        $html .= "</tr>";
        $html .= "</table>"; 
        $html .= "<br> <br>";
        
    }
    
    echo $html;
}


?>                    

	
</body>

</html>
