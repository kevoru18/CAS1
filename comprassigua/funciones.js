$(document).ready(function(){

    var agrega; //captura la fila para editar.
$("#btnNuevo").click(function(){
    $(".modal-title").text("Agregar Nueva Orden de Compra");
    $(".modal-header").css("background-color","#4e6c2a");
    $(".modal-header").css("color","#d4daed");
    $("#modal_body").trigger("reset");
    $("#modalagregar").modal("show");
    
})

$("#mAgregar").submit(function(e){
    e.preventDefault();
    estado="Pendiente";
    codinuevafactura = $.trim($("#factura_pedido1").val());
    codiproveedor = $.trim($("#proveedorcod").val());
    nombreprov = $.trim($("#nombre_prov").val());
    codigoproducto = $.trim($("#codproducto").val());
    descripcionactivo = $.trim($("#descripcionactivo").val());
    costo = $.trim($("#costo").val());
    cantidadpro = $.trim($("#cantidadpro").val());
    
    
    $.ajax({
        url:"pedidotemp.php",

        type:"POST",
        
        dataType:"json",
        
        data:{ estado:estado, codinuevafactura:codinuevafactura, codiproveedor:codiproveedor, 
          nombreprov: nombreprov, codigoproducto: codigoproducto, 
          descripcionactivo: descripcionactivo, 
          costo: costo,  cantidadpro: cantidadpro},
        success: function(data){
            console.log(data);
           
            
        }
      
    });
   })




/****************************Modal Editar orden de compra******************************************* */
var fila; //captura la fila para editar.

$(document).on("click",".btnEditar",function(){
    fila=$(this).closest("tr");

    id=fila.find('td:eq(0)').text();
    $(".modal-title").text("Orden de compra" + " #"+id);
    $(".modal-header").css("background-color","#4e6c2a");
    $(".modal-header").css("color","white");
    $("#modalmodificar").modal("show");
    $("#iduseru").val(id);
    ide = id;
    $.ajax({
      type:"POST",
      url:"modicompra.php",
      datatype:"json",
      data:{ide:ide},
      success: function(data){
          console.log(data);
          
          $(".pruebass").html("");
          $(".pruebass").append("Detalle de Pedido </span>");
          $(".pruebass").html(data);
          calcular_total();
      },
      error: function(jqXHR,estado,error){
        $(".pruebass").html('Hubo un error: ');
      }
    
  });
 
    
})
    $("#mModificar").submit(function(e){
    e.preventDefault();
    ide = $.trim($("#iduseru").val());
    
    $('#modalmodificar').modal('hide');

    (function(){
      setInterval(function() {
             document.location.reload()
         }, 
             200)
     })()





    })


});
/*************************Final modal editar orden de compra************************************************* */
/*************************Guardar pedido para imprimir compra***************************************************/

function guarda_pedido(){
  $("#btn-procesa").prop('disabled', true);
   var n = noty({
          text: "Deseas guardar el pedido...?",
          theme: 'relax',
          layout: 'center',
          type: 'information',
          modal: 'true',
          buttons     : [
            {addClass: 'btn btn-primary',
             text    : 'Si',
             onClick : function ($noty){
                  $noty.close();
                  setTimeout('actualiza_ticket()',1000);
                  var yapuso=0;
                  $('#tabla_articulos > tbody > #tr').each(function(){
                     var descripcion_art=$(this).find('td').eq(1).html();
                     var cod = $(this).find('td').eq(0).html();
                     var can = $(this).find('#cantidad-prod').val();
                     var cu  = $(this).find('td').eq(3).html();
                     var monto=$(this).find('#monto').val();
                     $.ajax({
                     beforeSend: function(){
                      },
                     url: 'guarda_pedido.php',
                     type: 'POST',
                     data: 'codigo='+cod+'&cantidad='+can+'&costou='+cu+
                     '&proveedor='+$("#codigo_busqueda").val()+
                     '&num_fact='+$("#num_pedido").val(),
                     success: function(x){
                        if(x=="0"){
                           var n = noty({
                           text: "Hubo un error al procesar el articulo: "+cod+'. Consulte a soporte inmediatamente...!',
                           theme: 'relax',
                           layout: 'topLeft',
                           type: 'success',
                          })
                          }else{

                           var n = noty({
                           text: "Se proceso el articulo: "+cod,
                           theme: 'relax',
                           layout: 'topLeft',
                           type: 'success',
                           timeout: 4000,
                          })

                          if(yapuso==0){
                              llena_ticket_archivo(cod,can,cu,descripcion_art,monto,$("#num_pedido").val(),$("#codigo_busqueda").val(),yapuso,$("#proveedor").val());
                          yapuso=1;
                          }else{
                              llena_ticket_archivo(cod,can,cu,descripcion_art,monto,$("#num_pedido").val(),$("#codigo_busqueda").val(),yapuso,$("#proveedor").val());
                          }

                          }
                      },
                     error: function(jqXHR,estado,error){
                      }
                     });
                   });
                  }

           },
           {addClass: 'btn btn-danger',
            text    : 'No',
            onClick : function ($noty){
               $("#btn-procesa").prop('disabled', false);
               $noty.close();
            }
            }
              

          ]
      });
 }


/*************************Final guardar orden de compra************************************************* */
/****************Busca Proveedores************************************************************/
function busca_prov(){
    if($("#proveedorcod").val()!=""){
   $(document).ready(function(){
    $.ajax({
    beforeSend: function(){
      $("#nombre_prov").html("Buscando informacion del proveedor...");
     },
    url: '../comprassigua/busca_proveedor.php',
    type: 'POST',
    dataType: 'json',
    data: 'codigoprov='+$("#proveedorcod").val(),
    success: function(x){
      if(x=='0'){
      alert("El nombre o codigo del proveedor, no existe...");
      $("#proveedorcod").val("");
      $('#proveedorcod').focus();
      }else{
        $("#nombre_prov").val(x.nombre_p);
       $("#btn-cancel-prov").attr("disabled", false);
       }
     },
     error: function(jqXHR,estado,error){
       $("#nombre_prov").html('Hubo un error: '+estado+' '+error);
     }
     });
    });
    }else{
    }
   }
/****************************************************************************/

/****************************************************************************/
function busca_prod(){
    if($("#codproducto").val()!=""){
   $(document).ready(function(){
    $.ajax({
    beforeSend: function(){
      $("#descripcionactivo").html("Buscando informacion del proveedor...");
     },
    url: '../comprassigua/busca_activos.php',
    type: 'POST',
    dataType: 'json',
    data: 'codigoprov='+$("#codproducto").val(),
    success: function(x){
      if(x=='0'){
      alert("El nombre o codigo del proveedor, no existe...");
      $("#codproducto").val("");
      $('#codproducto').focus();
      }else{
        $("#descripcionactivo").val(x.descripcion);
        $("#costo").val(x.valor_actual);
       $("#btn-cancel-prov").attr("disabled", false);
       }
     },
     error: function(jqXHR,estado,error){
       $("#descripcionactivo").html('Hubo un error: '+estado+' '+error);
     }
     });
    });
    }else{
    }
   }
/********************Funcion de calcular nuevo monto********************************************************/
function calcula_monto(){
  $('#tabla_articulos > tbody > tr').each(function(){
 var precio = parseInt($(this).find('td').eq(2).html());
 var cantidad = parseInt($(this).find('#cantidad-prod').val());
 var result = precio*cantidad;
 result = result.toFixed();
 $(this).find('#monto').val(result);
 calcular_total();
 
 });
}

/*******************************************************************************************/
function calcular_total(){
  var array = document.getElementsByClassName('product-subtotal');
  var total = 0;
  for(var i=0; i<array.length; i++){
    var value = parseFloat(array[i].value);
    total += value;
  }
  total = total.toString();
  $('#total').val(total);
    // });
    // });
}
/*******************************************************************************************/
