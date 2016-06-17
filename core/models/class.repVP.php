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
        $f_inicial = $_GET['fi'];
        $f_final= $_GET['ff'];

        $consulta = $db->query("SELECT * FROM catacli WHERE ULT_COM BETWEEN '$f_inicial' AND '$f_final';");
            
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
                      <td>".$fila['NUM_FACS']."</td>
                      <td>".$fila['NOM_CLI']."</td>
                      <td>".$fila['ULT_COM']."</td>
                    </tr>";
                
        }
            $HTML .= "</table></div>";

    $mpdf = new mPDF();
    
        $stylesheet = file_get_contents('views/app/css/estiloreporte.css');

        $mpdf->WriteHTML($stylesheet,1);

    // $mpdf->SetHeader($cabecera.'|Center Text|{PAGENO}');
        $mpdf->SetHeader($mensaje);
        $mpdf->SetFooter('Document Title');
        $mpdf->WriteHTML($HTML);
        $mpdf->Output();



// $mpdf->WriteHTML('Document text');

   
    


?>




 