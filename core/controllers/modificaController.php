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
				$sql = $db->query("SELECT * FROM catacli WHERE NUM_CLI ='$val';");

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
								  	"nom"  =>  $row['NOM_CLI'],
								  	"dir1"  =>  $row['DIR_NUM'],
								  	"dir2"  =>  $row['DIR_COL'],
								  	"dir3"  =>  $row['DIR_CIU'],
								  	"giro"  =>  $row['SUC_URS'],
								  	"tel"  =>  $row['TEL_CLI'],
								  	"age"  =>  $row['NUM_AGE']					  	
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