
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
    proveedorcod=document.getElementById('proveedorcod');
    codproducto=document.getElementById('codproducto'); 
    $('.guardado').val('');
        proveedorcod.disabled = true;
        codproducto.focus();
    
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
            if (data==0) {
              alert("Agregado");
            }else{ alert("algo");
          
                }
           
            
        }
      
    });
   })




/****************************Modal Editar orden de compra******************************************* */
var fila; //captura la fila para editar.

$(document).on("click",".btnEditartemp",function(){
    fila=$(this).closest("tr");

    id=fila.find('td:eq(0)').text();
    $(".modal-title").text("Orden de compra pendiente");
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
    
/*************************Final modal editar orden de compra************************************************* */

/*************************Funcion para modal compras********************************************************* */

$(document).on("click",".btnEditarpedido",function(){
  fila=$(this).closest("tr");

  id=fila.find('td:eq(0)').text();
  
  $(".modal-title").text("Compra pendiente");
  $(".modal-header").css("background-color","#4e6c2a");
  $(".modal-header").css("color","white");
  $("#modalcompra").modal("show");
  $("#iduseru").val(id);
  
  ide = id;
  $.ajax({
    type:"POST",
    url:"comprapendiente.php",
    datatype:"json",
    data:{ide:ide},
    success: function(data){
        console.log(data);
        
        $(".compraprueba").html("");
        $(".compraprueba").html(data);
        calcular_total_pendiente();        
    },
    error: function(jqXHR,estado,error){
      $(".compraprueba").html('Hubo un error: ');
    }
  
});

  
})

/*************************Fin de Funcion********************************************************************* */
/*************************Guardar pedido para imprimir compra***************************************************/

$("#mModificar").submit(function(e){
  e.preventDefault();
  id=$.trim($('#codigo_factura').val());
  codiprod = $("#codigo-producto").text();
  cantidadproducto = $.trim($('#cantidad-prodtemp').val());
  monto = $.trim($('#montotemp').val());
  ide2=id;
  $("#ModalImprimir").modal("show");
  $(".modal-title-imprimir").text("Deseas imprimir la orden de compra #"+id+ "...?");
  
  $(".modal-header").css("background-color","#4e6c2a");
  $(".modal-header").css("color","white");
  document.getElementById("fact").value=id;
  document.getElementById("codigo_pedido").value=codiprod;
  document.getElementById("monto_pedido").value=monto;
  document.getElementById("cantidad_pedido").value=cantidadproducto;
  
})


});
/*************************Final guardar orden de compra************************************************* */
/****************Funcion de orden de impresión************************************************************/
$("#mImprimir").submit(function(e){
  e.preventDefault();
    cod_fact = $.trim($("#fact").val());
    producto = $.trim($("#codigo_pedido").val());
    canti = $.trim($('#cantidad_pedido').val());
    precio = $.trim($('#monto_pedido').val());
    
    $.ajax({
      url:"actualiza_pedido.php",
      type: "POST",
      dataType: "json",
      data:{
        cod_fact: cod_fact, canti: canti, 
        precio: precio, producto: producto
      },
      success: function(data){
        console.log(data);
      }

    });
    window.open("factura.php?refact="+cod_fact);
    $('#modalImprimir').modal('hide');

    (function(){
      setInterval(function() {
             document.location.reload()
         }, 
             200)
     })()

     
  });





/*************************FinalFuncion de orden de impresión************************************************* */
/***************Modal de compras */

$("#mCompra").submit(function(e){
  e.preventDefault();
  id=$.trim($('#codigo_factura').val());
  ide2=id;
  $("#ModalImprimircompra").modal("show");
  $(".modal-title-imprimir").text("Deseas imprimir la compra #"+id+ "...?");
  
  $(".modal-header").css("background-color","#4e6c2a");
  $(".modal-header").css("color","white");
  document.getElementById("factcompra").value=id;
  
})


/****************Funcion de orden de impresión compra************************************************************/
$("#mImprimircompra").submit(function(e){
  e.preventDefault();
    cod_fact = $.trim($("#factcompra").val());
    
    $.ajax({
      url:"guarda_compra.php",
      type: "POST",
      dataType: "json",
      data:{
        cod_fact: cod_fact},
      success: function(data){
        console.log(data);
      }

    });
    window.open("compra.php?refact="+cod_fact);
    $('#modalImprimir').modal('hide');

    (function(){
      setInterval(function() {
             document.location.reload()
         }, 
             200)
     })()

     
  });









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

/*******************************************************************************************/
function llena_ticket_archivo(param1,param2,param3,param4,param5,param6,param7,param8,param9){
  var cod=param1;
  var can=param2;
  var preciou=param3;
  var descripcion=param4;
  var monto=param5;
  var factura=param6;
  var proveedor=param7;
  var yapuso=param8;
  var nombre_p=param9;
  $.ajax({
       beforeSend: function(){
         },
       url: 'impresion_tickets_pedido.php',
       type: 'POST',
       data: 'codigo='+cod+'&cantidad='+can+'&preciou='+preciou+'&descripcion='+descripcion+'&monto='+monto+'&numero_fact='+factura+'&proveedor='+proveedor+'&yapuso='+yapuso+'&nombre_p='+nombre_p,
       success: function(x){
        //alert(x);
        },
       error: function(jqXHR,estado,error){
       }
      });
}
/*******************************************************************************************/

/*******************************************************************************************/
function actualiza_ticket(){
  $(document).ready(function(){
                             $(".print_ticket").printPage({
                               url: "ticket-pedido.txt",
                               attr: "href",
                               message:"Generando vista previa del ticket.."
                             })
                             $(".print_ticket").click();
                             })
  window.setTimeout('location.href="pedidos.php"', 2000);
}
/*******************************************************************************************/

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
        $("#costo").val(x.valor_libro);
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
 var cantidad = parseInt($(this).find('#cantidad-prodtemp').val());
 var result = precio*cantidad;
 result = result.toFixed();
 actualiza_pedido();
 $(this).find('#montotemp').val(result);
 calcular_total();
 
 
 
 });
}

/*******************************************************************************************/




/*******************************************************************************************/
function calcular_total(){
  var array = document.getElementsByClassName('product-subtotalordenpendiente');
  var total = 0;
  var total1=0;
  value1=0;
  for(var i=0; i<array.length; i++){
     value1 = parseFloat(array[i].value);
     total += value1;
   
  }
  total1 = total.toString();
  $('#totalModificar').val(total1);
    
}

function calcular_total_pendiente(){
  var array = document.getElementsByClassName('subtotal2');
  var valorfactura = 0;
  var total1=0;
  value1=0;
  for(var i=0; i<array.length; i++){
     value1 = parseFloat(array[i].value);
     valorfactura += value1;
   
  }
  valorfactura = valorfactura.toString();
  $('#total1').val(valorfactura);
    
}





/*******************************************************************************************/
/*****Boton producto agregar */
$("#btn-producto1").click(function(){
  id=$.trim($('#codigo_factura').val());
  provecod=$.trim($('#codigo_proveedor_pendiente').val());
  provenom=$.trim($('#proveedor_pendiente').val());

  $(".modal-header").css("background-color","#4e6c2a");
  $(".modal-header").css("color","#d4daed");
  $("#modalagregarproductomas").modal("show");
  $(".modal-titlemas").text("Agregar mas producto");
  document.getElementById("factura_pedidomas1").value=id;
  document.getElementById("proveedorcodmas").value=provecod;
  document.getElementById("nombre_provmas").value=provenom;
  

})
/*Funciona busca producto mas*/ 
function busca_prodmas(){
  if($("#codproductomas").val()!=""){
 $(document).ready(function(){
  $.ajax({
  beforeSend: function(){
    $("#descripcionactivomas").html("Buscando informacion del Activo...");
   },
  url: 'busca_activos.php',
  type: 'POST',
  dataType: 'json',
  data: 'codigoprov='+$("#codproductomas").val(),
  success: function(x){
    if(x=='0'){
    alert("El nombre o codigo del Activo, no existe...");
    $("#codproductomas").val("");
    $('#codproductomas').focus();
    }else{
      $("#descripcionactivomas").val(x.descripcion);
      $("#costomas").val(x.valor_libro);
     $("#btn-cancel-prov").attr("disabled", false);
     }
   },
   error: function(jqXHR,estado,error){
     $("#descripcionactivomas").html('Hubo un error: '+estado+' '+error);
   }
   });
  });
  }else{
  }
 }

/******Modal factura nueva */

$("#mAgregarproducto").submit(function(e){
  e.preventDefault();
  estado="Pendiente";
  codinuevafactura = $.trim($("#factura_pedidomas1").val());
  codiproveedor = $.trim($("#proveedorcodmas").val());
  nombreprov = $.trim($("#nombre_provmas").val());
  codigoproducto = $.trim($("#codproductomas").val());
  descripcionactivo = $.trim($("#descripcionactivomas").val());
  costo = $.trim($("#costomas").val());
  cantidadpro = $.trim($("#cantidadpromas").val());
  proveedorcod=document.getElementById('proveedorcodmas');
  codproducto=document.getElementById('codproductomas'); 
  
  $('.guardado').val('');
      proveedorcod.disabled = true;
      codproducto.focus();
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





/***************************Actualiza Pedido********************************************** */
function actualiza_pedido(){
                  $('#tabla_articulos > tbody > tr').each(function(){
                     descripcion_art=document.getElementsByName('codigo_factura');
                     cod = document.getElementsByName('codigo-producto'); 
                     can = document.getElementsByName('cantidad-prodtemp');
                     monto =document.getElementsByName('montotemp');
                     
                     $.ajax({
                     beforeSend: function(){},
                     url: 'actualiza_pedidokey.php',
                     type: 'POST',
                     dataType:'json',
                     data:( 'descripcion_art='+descripcion_art+'&cod='+cod+
                      '&can='+can+'&monto='+monto

                      ) ,
                     success: function(data){
                      console.log(data);
                      }
                     });
                   });
                
          
                   
              
 }



/***************************************************************************************** */





