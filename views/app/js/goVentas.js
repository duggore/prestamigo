function Buscar(i,f){
		

        var par = {
              "f_ini" : i,
              "f_fin" : f
        };

        $.ajax({
                data:  par,
                url:   '?view=busquedaVenta',
                type:  'POST',
                dataType:  'json',
                success:  function (res) {	
                		if(res.id =='1')
                		// else
                		{
                			__('_AJAX_REG_').innerHTML = res.mensaje;
                		}

                		   if(res.id =='2')
                		{	
                			// __('_AJAX_REG_').innerHTML = res.mensaje;
                			__('user_folio').value = res.num;
                		    __('user_name').value = res.nom;
                		    __('user_dir').value = res.dir1;
                		    __('user_dirNeg').value = res.dir2;
	                        __('user_dirCiu').value = res.dir3;
	                        __('user_giro').value = res.giro;
	                        __('user_tel').value = res.tel;
                            __('user_agente').value = res.age; 
                            __('user_zona').value = res.zona;
                            __('imp_prestamo').innerHTML = res.imp_pres;
                            __('fol_pres').innerHTML = res.cre; 
                            __('p_diario').innerHTML = res.pag_d; 
                            __('num_prestamo').innerHTML = res.num_presta; 
                            __('saldo').innerHTML = res.saldo; 
                            __('ult_pres').innerHTML = res.ult_pres; 
                            __('pag_res').innerHTML = res.pag_res; 
                            __('ult_pag').innerHTML = res.ult_pag; 
                            __('fec_alta').innerHTML = res.fec_alta; 
                            __('user_bloq').value = res.user_bloq; //p
	                        __('modifica').style.display = "inline";
	                        __('elimina').style.display = "inline";
	                        __('muestra').style.display = "inline";
	                        __('muestra2').style.display = "inline";
	                        __('muestra3').style.display = "inline";
	                        __('muestra4').style.display = "inline";
	                        __('muestra5').style.display = "inline";
	                        __('muestra6').style.display = "inline";

	                        // pag_d
	                        // __('imprimir').style.display = "block";
                		}
                		if(res.id =='3')
                		// else
                		{
                			__('_AJAX_REG_').innerHTML = res.mensaje;
                		}

                    }
        });
      
}