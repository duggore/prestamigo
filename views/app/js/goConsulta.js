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
                			__('muestratabla').innerHTML = res.resultado;
                		}

                		   if(res.id =='2')
                		{	
                		    __('muestratabla').innerHTML = res.resultado; 	
                        }

                    }
        });
      
}

function Buscar2(i,f){
        

        var par = {
              "f_ini" : i,
              "f_fin" : f
        };

        $.ajax({
                data:  par,
                url:   '?view=busquedaPago',
                type:  'POST',
                dataType:  'json',
                success:  function (res) {  
                        if(res.id =='1')
                        // else
                        {
                            __('muestratabla').innerHTML = res.resultado;
                        }

                           if(res.id =='2')
                        {   
                            __('muestratabla').innerHTML = res.resultado;   
                        }

                    }
        });
      
}