<?php 
	
	if (!isset($_SESSION['app_id'])){
		include(HTML_DIR.'public/goLogin.php');
	}

	else
	{
			$db = new Conexion();
			$val = $_POST['val'];
			if($val !='')
			{
				// $sql = $db->query("SELECT * FROM catacli WHERE NOM_CLI ='$val';");
				// $row1 = $db->runs($sql1);
				// $id = $row1['NUM_CLI'];

				$sql = $db->query("SELECT * FROM catacli WHERE NOM_CLI ='$val';");

					if($db->rows($sql) <=0) 
					{ 
						$html = 
			          			'<div class="alert alert-dismissible alert-warning">
				  			  		<button type="button" class="close" data-dismiss="alert">&times;</button>
				              		<strong>Atención</strong> no existe este id
				              </div>';
						 $re = array( 
								"id" => '1',
								"mensaje"  =>  $html
			        			);	
					}

					else
					{

						$row = $db->runs($sql);
				

					
							       $re = array(
							     	"id" => '2',
								  	// "mensaje"  =>  $html,
								  	"num"  =>  $row['NUM_CLI'],
								  	"nom"  =>  $row['NOM_CLI'],
								  	"dir1"  =>  $row['DIR_NUM'],
								  	"dir2"  =>  $row['DIR_COL'],
								  	"dir3"  =>  $row['DIR_CIU'],
								  	"giro"  =>  $row['SUC_URS'],
								  	"tel"  =>  $row['TEL_CLI'],
								  	"age"  =>  $row['NUM_AGE'],				
								  	"zona"  =>  $row['NUM_ZON'],
								  	"cre"  =>  $row['NUM_FAC'],		  	
								  	"imp_pres"  =>  $row['IMP_PRE'],
								  	"num_presta"  =>  $row['NUM_FACS'],
								  	"saldo"  =>  $row['SAL_CLI'],
								  	"ult_pres"  =>  $row['ULT_COM'],
								  	"pag_res"  =>  $row['DES_CLI'],
								  	"ult_pag"  =>  $row['ULT_PAG'],
								  	"fec_alta"  =>  $row['FEC_ALT'],
								  	"user_bloq"  =>  $row['BLO_QUEO'],
								  	"pag_d"  =>  $row['IMP_PAGD']
						        );	
						
					}

			        $db->liberar($sql);  		
				}			

			else
			{
				$html = 
		          			'<div class="alert alert-dismissible alert-warning">
			  			  		<button type="button" class="close" data-dismiss="alert">&times;</button>
			              		<strong>Campo vacio, Introduce dato...
			              </div>';

					$re = array( 
						"id" => '3',
						"mensaje"  =>  $html
			        );	
			}

		echo json_encode($re);
		$db->close();
	}
?>