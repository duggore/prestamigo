<?php  
        

        $mensaje = '
        <div class="estilo">
            <div class="img"><img class="imglogo" src="views/app/images/logo.png" alt="">
                <div class="fecha">Fecha:'.date('d-m-Y').'</div>
            </div>
            <div class="contiene">
                <div class="titulo">SISTEMA DE CREDITO</div>
                <div class="titulo centro">PRESTAMIGUITO</div>
                <div class="titulo pequeno">Reporte de Cliente por Zona</div>
                <div class="num_pag">PAG {PAGENO}</div>
            </div>
        </div>';

        $db = new conexion();
        $id = $_GET['id'];
        

        $consulta = $db->query("SELECT * FROM catacli WHERE NUM_ZON = '$id';");
        

        $HTML ='<table class="tablav" border="1"><thead>
                    <tr>
                      <th>Codigo</th>
                      <th>Nombre</th>
                      <th>Dirección</th>
                      <th>Telefono</th>
                    </tr></thead><tbody>';
        while($fila = $db->runs($consulta))
        {
             
            $HTML .= "
                    <tr>
                      <td>".$fila['NUM_CLI']."</td>
                      <td>".$fila['NOM_CLI']."</td>
                      <td>".$fila['DIR_NUM']."<br/>".$fila['DIR_COL']."<br/>".$fila['DIR_CIU']."</td>
                        <td>".$fila['TEL_CLI']."</td>
                    </tr>";
                
        }
            $HTML .= "</tbody></table>";

        // $mpdf = new mPDF('C','','','',MARGEN-LEFT,MARGEN-RIGHT,MARGEN-TOP,MARGEN-BOTTOM,10,10);    
        $mpdf = new mPDF('C','','','',15,15,55,15,10,10);
    
        $stylesheet = file_get_contents('views/app/css/estiloreporte.css');
        $mpdf->WriteHTML($stylesheet,1);

        $mpdf->SetHeader(utf8_decode($mensaje));
        $mpdf->WriteHTML(utf8_decode($HTML));
        $mpdf->Output();
?>
