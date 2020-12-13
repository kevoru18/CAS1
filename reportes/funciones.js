
$(document).ready(function(){

    var agrega; //captura la fila para editar.
$("#btnNuevo").click(function(){
  proveedorcod.focus();  
  $(".modal-title").text("Agregar Nueva Venta");
    $(".modal-header").css("background-color","#f6c23e");
    $(".modal-header").css("color","black");
    $("#modal_body").trigger("reset");
    $("#modalagregar").modal("show");
    
})
$("#compraboton").submit(function(e){
  e.preventDefault();
  
  fechacompra = $.trim($("#fechacompra").val());
  officecompra= $.trim($("#officecompra").val());
  window.open("reportecompraproducto.php?fechacompra="+fechacompra+"&"+"sucur="+officecompra);
  document.getElementById("fechacompra").value="";
  document.getElementById("officecompra").value="";
 })



$("#creacion").submit(function(e){
    e.preventDefault();
    
    fechacreacion = $.trim($("#fechacreacion").val());
    window.open("reportecreacionproducto.php?fechacreacion="+fechacreacion);
    document.getElementById("fechacreacion").value="";
    
   })
   $("#trasladoboton").submit(function(e){
    e.preventDefault();
    
    fechacompra = $.trim($("#fechatraslado").val());
    officeentrada= $.trim($("#officeentrada").val());
    window.open("reportetrasladoproducto.php?fechacompra="+fechacompra+"&sucur="+officeentrada);
    document.getElementById("fechacompra").value="";
    document.getElementById("officeentrada").value="";
   })
  
   $("#salidaboton").submit(function(e){
    e.preventDefault();
    
    fechacompra = $.trim($("#fechasalida").val());
    officesalida= $.trim($("#officesalida").val());
    window.open("salidatraslado.php?fechacompra="+fechacompra+"&sucur="+officesalida);
    document.getElementById("fechacompra").value="";
    document.getElementById("officesalida").value="";
    
   })

   $("#vlibros").submit(function(e){
    e.preventDefault();
    
    fechacompra = $.trim($("#fechavlibros").val());
    officesalida= $.trim($("#officevlibros").val());
    window.open("vlibros.php?fechacompra="+fechacompra+"&sucur="+officesalida);
    document.getElementById("fechavlibros").value="";
    document.getElementById("officevlibros").value="";
    
   })

   $("#depreciacion").submit(function(e){
    e.preventDefault();
    
    fechacompra = $.trim($("#fechadepreciacion").val());
    officesalida= $.trim($("#officedepreciacion").val());
    window.open("depre_ofi.php?fechacompra="+fechacompra+"&sucur="+officesalida);
    document.getElementById("fechadepreciacion").value="";
    document.getElementById("officedepreciacion").value="";
    
   })

   $("#facturaboton").submit(function(e){
    e.preventDefault();
    
    fechacompra = $.trim($("#fechafactura").val());
    window.open("salidafactura.php?fechacompra="+fechacompra);
    document.getElementById("fechacompra").value="";
    
   })


   $("#cierreboton").submit(function(e){
    e.preventDefault();
    
    fechacompra = $.trim($("#fechacierre").val());
    window.open("salidacierre.php?fechacompra="+fechacompra);
    document.getElementById("fechacompra").value="";
    
   })


   $("#existenciasboton").submit(function(e){
    e.preventDefault();
    
    fechacompra = $.trim($("#fechaexistencia").val());
    officeinven = $.trim($("#officeinven").val());
    window.open("existencia.php?fechacompra="+fechacompra+"&"+"sucur="+officeinven);
    document.getElementById("fechacompra").value="";
    document.getElementById("officeinven").value="";
   })

   $("#bajaboton").submit(function(e){
    e.preventDefault();
    
    fechacompra = $.trim($("#fechabaja").val());
    officeinven = $.trim($("#officebaja").val());
    window.open("baja.php?fechacompra="+fechacompra+"&"+"sucur="+officeinven);
    document.getElementById("fechabaja").value="";
    document.getElementById("officebaja").value="";
   })



/****************************Modal Editar orden de compra******************************************* */
var fila; //captura la fila para editar.

$(document).on("click",".btnEditartemp",function(){
    fila=$(this).closest("tr");

    id=fila.find('td:eq(0)').text();
    $(".modal-title").text("Venta pendiente");
    $(".modal-header").css("background-color","#f6c23e");
    $(".modal-header").css("color","white");
    $("#modalmodificar").modal("show");
    $("#iduseru").val(id);
    ide = id;
    $.ajax({
      type:"POST",
      url:"modiventa.php",
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
 
  /*****Boton producto agregar */
$("#btn-producto1").click(function(){
  id=$.trim($('#codigo_factura').val());
  provecod=$.trim($('#codigo_proveedor_pendiente').val());
  provenom=$.trim($('#proveedor_pendiente').val());

  $(".modal-header").css("background-color","#f6c23e");
  $(".modal-header").css("color","black");
  $("#modalagregarproductomas").modal("show");
  $(".modal-titlemas").text("Agregar mas producto");
  document.getElementById("factura_pedidomas1").value=id;
  document.getElementById("proveedorcodmas").value=provecod;
  document.getElementById("nombre_provmas").value=provenom;
  
})

    
})
   


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
      url:"ventatemp.php",

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



/*************************Final modal editar orden de compra************************************************* */
/****************Funcion de orden de impresión************************************************************/
/*************************FinalFuncion de orden de impresión************************************************* */


/*************************Funcion para modal compras********************************************************* */

$(document).on("click",".btnEditarpedido",function(){
  fila=$(this).closest("tr");

  id=fila.find('td:eq(0)').text();
  
  $(".modal-title").text("Venta pendiente");
  $(".modal-header").css("background-color","#f6c23e");
  $(".modal-header").css("color","white");
  $("#modalcompra").modal("show");
  $("#iduseru").val(id);
  
  ide = id;
  $.ajax({
    type:"POST",
    url:"ventapendiente.php",
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
  totalfact = $.trim($('#totalModificar').val());
  ide2=id;
  $("#ModalImprimir").modal("show");
  $(".modal-title-imprimir").text("Deseas imprimir la Venta #"+id+ "...?");
  
  $(".modal-header").css("background-color","#f6c23e");
  $(".modal-header").css("color","white");
  document.getElementById("fact").value=id;
  document.getElementById("codigo_pedido").value=codiprod;
  document.getElementById("monto_pedido").value=monto;
  document.getElementById("cantidad_pedido").value=cantidadproducto;
  document.getElementById("totalfac").value=totalfact;
  capitalentregado.focus();
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
    totalpago = $.trim($('#totalfac').val());
    $.ajax({
      url:"../ventasigua/actualiza_pedido.php",
      type: "POST",
      dataType: "json",
      data:{
        cod_fact: cod_fact, canti: canti, 
        precio: precio, producto: producto, totalpago: totalpago
      },
      success: function(data){
        console.log(data);
      }

    });

    $('#modalImprimir').modal('hide');

    (function(){
      setInterval(function() {
             document.location.reload()
         }, 
             200)
     })()


  });





/*************************FinalFuncion de orden de impresión************************************************* */
/*************************Funcion para imprimir************************************************************** */
$("#mImprimir").submit(function(e){
  e.preventDefault();
    cod_fact = $.trim($("#fact").val());
    producto = $.trim($("#codigo_pedido").val());
    canti = $.trim($('#cantidad_pedido').val());
    precio = $.trim($('#monto_pedido').val());
    totalpago = $.trim($('#totalfac').val());
    capitalentregado = $.trim($('#capitalentregado').val());
    cambioefectivo = $.trim($('#cambioefectivo').val());
    
    
    $.ajax({
      url:"factura.php",
      type: "POST",
      dataType: "json",
      data:{
        cod_fact: cod_fact, canti: canti, 
        precio: precio, producto: producto, totalpago: totalpago
      },
      success: function(data){
        console.log(data);
      }

    });

    window.open("factura.php?refact="+cod_fact+"&totalpago="+totalpago+"&capitalentregado="+capitalentregado+"&cambioefectivo="+cambioefectivo);
    
  });






/****************Busca Proveedores************************************************************/
function busca_prov(){
    if($("#proveedorcod").val()!=""){
   $(document).ready(function(){
    $.ajax({
    beforeSend: function(){
      $("#nombre_prov").html("Buscando informacion del Cliente...");
     },
    url: '../ventasigua/busca_cliente.php',
    type: 'POST',

    dataType: 'json',
    data: 'codigoprov='+$("#proveedorcod").val(),
    success: function(x){
      if(x=='0'){
      alert("El nombre o codigo del Cliente, no existe o esta inactivo...");
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
      $("#descripcionactivo").html("Buscando informacion del Cliente...");
     },
    url: '../ventasigua/busca_activos.php',
    type: 'POST',
    dataType: 'json',
    data: 'codigoprov='+$("#codproducto").val(),
    success: function(x){
      if(x=='0'){
      alert("El nombre o codigo del Producto, no existe...");
      $("#codproducto").val("");
      $('#codproducto').focus();
      }else{
        $("#descripcionactivo").val(x.descripcion);
        $("#costo").val(x.valor);
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


function calcular_cambio(){
  var totalfacturado = document.getElementById('totalfac').value;
  var valorrecibido=document.getElementById('capitalentregado').value;
  var total1=0;
  value1=0;
  value2=0;
  //for(var i=0; i<totalfacturado.length; i++){
     value1 = (totalfacturado);
     value2= (valorrecibido);
     total = value2 - value1 ;
   
  //}
  total1 = total.toString();
  $('#cambioefectivo').val(total1);


    
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

/***************************Actualiza Pedido********************************************** */
function actualiza_pedido(){
                  $('#tabla_articulos > tbody > #tr').each(function(){
                    var descripcion_art=$(this).find('#codigo_factura').val();
                     var cod = $(this).find('td').eq(0).html();
                     var can = $(this).find('#cantidad-prod').val();
                     var cu  = $(this).find('td').eq(3).html();
                     var monto=$(this).find('#monto').val();
                     $.ajax({
                     beforeSend: function(){
                      },
                     url: 'actualiza_pedidokey.php',
                     type: 'POST',
                     dataType:'json',
                     data:{ descripcion_art: descripcion_art, cod: cod,
                      can:can, cu: cu, monto: monto

                     } ,
                     success: function(data){
                      console.log(data);
                      }
                     });
                   });
                
                   

                   
              
 }



/***************************************************************************************** */









   /*Funciona busca producto mas*/ 
   function busca_prodmas(){
    if($("#codproductomas").val()!=""){
   $(document).ready(function(){
    $.ajax({
    beforeSend: function(){
      $("#descripcionactivomas").html("Buscando informacion del Cliente...");
     },
    url: 'busca_activos.php',
    type: 'POST',
    dataType: 'json',
    data: 'codigoprov='+$("#codproductomas").val(),
    success: function(x){
      if(x=='0'){
      alert("El nombre o codigo del Cliente, no existe...");
      $("#codproductomas").val("");
      $('#codproductomas').focus();
      }else{
        $("#descripcionactivomas").val(x.descripcion);
        $("#costomas").val(x.valor);
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
