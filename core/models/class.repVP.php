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
    $f_inicial = $_GET['fi'];
    $f_final= $_GET['ff'];
    $RP = $_GET['RP'];
    $suma = 0;

    if($RP == 'p')
    {
        $consulta = $db->query("SELECT * FROM catacli WHERE ULT_COM BETWEEN '$f_inicial' AND '$f_final';");

    $HTML ='<table class="tablav" border="1"><thead>
                    <tr>
                      <th>Codigo/N° Factura</th>
                      <th>Descripcion/Cliente</th>
                      <th>Fecha</th>
                      <th>VENTAS<br/>AL 0% | AL 15%</th>
                      <th>Descuentos</th>
                      <th>Neto</th>
                      <th>IVA</th>
                      <th>Total</th>
                    </tr></thead><tbody>';
        while($fila = $db->runs($consulta))
        {
             
            $HTML .= "
                    <tr>
                      <td>".$fila['NUM_CLI']."</td>
                      <td>".$fila['NOM_CLI']."</td>
                      <td>".$fila['ULT_COM']."</td>
                      <td>".$fila['IMP_PRE']."</td>
                      <td>0</td>
                      <td>".$fila['IMP_PRE']."</td>
                      <td>0</td>
                      <td>".$fila['IMP_PRE']."</td>
                    </tr>";
            $suma = $suma + $fila['IMP_PRE'];
        }
            $HTML .= "<tr><td></td>
                          <td></td>
                          <td></td>
                          <td><strong>".$suma."</strong></td>
                          <td></td>
                          <td><strong>".$suma."</strong></td>
                          <td></td>
                          <td><strong>".$suma."</strong></td>
                      </tr>
                      </tbody></table>";
    }

    if($RP == 'dt')
    {
         $consulta = $db->query("SELECT *,MIN(NUM_CLI) AS min,MAX(NUM_CLI) AS max,SUM(IMP_PRE) AS IMP_PRE FROM catacli WHERE ULT_COM BETWEEN '$f_inicial' AND '$f_final' GROUP BY ULT_COM;");

    $HTML ='<table class="tablav" border="1"><thead>
                    <tr>
                      <th>Fecha</th>
                      <th>Ref. Inicial - Ref. Final</th>
                      <th>VENTAS<br/>AL 0% | AL 15%</th>
                      <th>Descuentos</th>
                      <th>Neto</th>
                      <th>IVA</th>
                      <th>Total</th>
                    </tr></thead><tbody>';
        while($fila = $db->runs($consulta))
        {
             
            $HTML .= "
                    <tr>
                      <td>".$fila['ULT_COM']."</td>
                      <td>".$fila['min'].'-'.$fila['max']."</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                      <td>".$fila['IMP_PRE']."</td>
                    </tr>";
            $suma = $suma + $fila['IMP_PRE'];
        }
            $HTML .= "<tr><td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td><strong>".$suma."</strong></td>
                      </tr>
                      </tbody></table>";

            $tabla2 = '<br/><table class="tablav" border="1"><thead>
                    <tr><th>TOTAL CONTADO</th><td>0</td></tr>
                    <tr><th>TOTAL CREDITO</th><td>'.$suma.'</td></tr>
                    </thead></table>';
    }

    

    $mpdf = new mPDF('C','','','',15,15,55,15,10,10);
    
    $stylesheet = file_get_contents('views/app/css/estiloreporte.css');
    $mpdf->WriteHTML($stylesheet,1);

    $mpdf->SetHeader(utf8_decode($mensaje));
    $mpdf->WriteHTML($HTML);
    $mpdf->WriteHTML($tabla2);
    $mpdf->Output();

?>




 