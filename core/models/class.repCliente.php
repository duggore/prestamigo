<?php  
        

        $mensaje = '
        <div class="estilo">
            <div class="img"><img class="imglogo" src="views/app/images/logo.png" alt=""></div>
            <div class="contiene">
                <div class="titulo">SISTEMA DE CREDITO</div>
                <div class="titulo centro">PRESTAMIGUITO</div>
                <div class="titulo pequeno">Réporte de Cliente por Zona</div>
                <div class="num_pag">PAG {PAGENO}</div>
            </div>
        </div>';

        $db = new conexion();
        $id = $_GET['id'];
        

        $consulta = $db->query("SELECT * FROM catacli WHERE NUM_ZON = '$id';");
        

        $HTML ='<br/><br/><br/><br/><br/><br/><div class="adios"><table class="tablav" border="1">
                    <tr>
                      <th>Codigo/Factura</th>
                      <th>Descripción/Cliente</th>
                      <th>Fecha</th>
                    </tr>';
        while($fila = $db->runs($consulta))
        {
             
            $HTML .= "
                    <tr>
                      <td>".$fila['NUM_CLI']."</td>
                      <td>".$fila['NOM_CLI']."</td>
                      <td>".$fila['NUM_ZON']."</td>
                    </tr>";
                
        }
            $HTML .= "</table></div>";

    $mpdf = new mPDF();
    
        $stylesheet = file_get_contents('views/app/css/estiloreporte.css');

        $mpdf->WriteHTML($stylesheet,1);

    // $mpdf->SetHeader($cabecera.'|Center Text|{PAGENO}');
        $mpdf->SetHeader(utf8_decode($mensaje));
        $mpdf->SetFooter('Document Title');
        $mpdf->WriteHTML(utf8_decode($HTML));
         if($db->rows($consulta) <= '23')
        {
            
            $mpdf->SetHeader(utf8_decode($mensaje));   
            $mpdf->WriteHTML(utf8_decode($HTML)); 
        }
        $mpdf->Output();



// $mpdf->WriteHTML('Document text');

   
    


?>
