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





var fila; //captura la fila para editar.

$(document).on("click",".btnEditar",function(){
    fila=$(this).closest("tr");
    $(".modal-title").text("Orden de compra"  );
    $(".modal-header").css("background-color","#4e6c2a");
    $(".modal-header").css("color","white");
    $("#modalmodificar").modal("show");
    id=fila.find('td:eq(0)').text();
    name=fila.find('td:eq(1)').text();
    phone=fila.find('td:eq(2)').text();
    position=fila.find('td:eq(3)').text();
    office=fila.find('td:eq(4)').text();
    permits=fila.find('td:eq(5)').text();
    status=fila.find('td:eq(6)').text();
    $("#iduseru").val(id);
    $("#nameu").val(name);
    $("#phoneu").val(phone);
    $("#positionu").val(position);
    $("#officeu").val(office);
    $("#permitsu").val(permits);
    $("#statusu").val(status);
    
    
})








    $("#mModificar").submit(function(e){
    e.preventDefault();
    ide = $.trim($("#iduseru").val());
    nombre = $.trim($("#nameu").val());
    phone = $.trim($("#phoneu").val()   );
    position = $.trim($("#positionu").val());
    office = $.trim($("#officeu").val());
    permits = $.trim($("#permitsu").val());
    status = $.trim($("#statusu").val());
   
    
    $.ajax({
        type:"POST",
        url:"modiproveedor.php",
        datatype:"json",
        data:{ide:ide, nombre:nombre,phone:phone,position:position,office:office, 
            permits:permits, status:status},
        success: function(data){
            console.log(data);
            
            
        }
      
    });
   

    $('#modalmodificar').modal('hide');

    (function(){
      setInterval(function() {
             document.location.reload()
         }, 
             200)
     })()





    })


});


/****************************************************************************/
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
/****************************************************************************/