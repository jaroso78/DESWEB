$(document).ready(function(){
     var _operacion = false;
     var _contador=1;
     var _contadorOp= 1;
     var _total ="";
      
      
      
      $('.dado3, .dado6').click(function(){
          
          if (_operacion == false){
            var value=$(this).attr("value");
            $(this).attr("src","img/dadonulo.png");
            $("#jugada" ).append( "<img src='img/dado-0"+value+".png' value='"+value+"'id='"+_contador+"'>" );
            //Desactivamos el click sobre ese elemento
            $(this).off("click");
            //Marcamos operacion para que a continuación se realize un operacion.
            
            //Cambiamos el valor dentro del campo hidden del formulario
            //fichero jugar.php --> <input type="hidden" name="dado1" value=""/>
             _total+=value;
             var dadoId="input[name='total']";
             $(dadoId).val(_total);
             var resultado="input[name='resultado']";
             $(resultado).val(eval(_total));
             if(_contador==2){
               $("#btn-jugada" ).append( "<input class='btn btn-success btn-lg btn-block' type='submit' id='calcular' value='MathDice'/>" );
               //$("#btn-jugada" ).append("<div class='btn btn-success btn-lg btn-block' id='calcular' data-role='button'>Click on button</div>");
                $("#calcular").removeClass('oculto'); 
                 
             }
            _contador++;
            _operacion=true;
            
          }
      });
      
      $('.operacion').click(function(){
          
          if(_operacion == true){
            var value=$(this).attr("value");
            $(this).attr("src","img/dadonulo.png");
            if (value=="/"){
             value ="div";
             $("#jugada" ).append( "<img src='img/"+value+".png'>" );
             value="/";
            }else{
             $("#jugada" ).append( "<img src='img/"+value+".png'>" );
            }
            //Cambiamos el valor dentro del campo hidden del formulario
            //fichero jugar.php --> <input type="hidden" name="dado1" value=""/>
            var operacionId="input[name='operacion"+_contadorOp+"']";
            $(operacionId).val(value);
            _total+=value;
            _contadorOp++;
            _operacion=false;
          }
          
      });
    
    
    /* $('#calcular').click(function(){
         alert(eval(_total));
         
         
         $.ajax({
          url:'resultado.php',
          data: {
           operacion: eval(_total),
           resultado : $('#resultado').val()
          },
          error: function(){
           alert('Error');
          },
          type: 'post',
          success : function(data){
           
              alert (data);
           
           },
          
         });
         
     });*/
     
   
     
 });
    