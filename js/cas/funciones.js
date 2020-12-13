$(document).ready(function(){

    var agrega; //captura la fila para editar.
$("#btnNuevo").click(function(){
    $(".modal-title").text("Agregar Nuevo Artículo");
    $(".modal-header").css("background-color","#4e6c2a");
    $(".modal-header").css("color","#d4daed");
    $("#modal_body").trigger("reset");
    $("#modalagregar").modal("show");
    
})
$("#btnDepreciacion").click(function(){
    $(".modal-title").text("Depreciación de Activos Fijos");
    $(".modal-header").css("background-color","#4e6c2a");
    $(".modal-header").css("color","#d4daed");
    $("#modal_body").trigger("reset");
    $("#modaDepreciacion").modal("show");
    
})
$("#btnDepreciacioncontador").click(function(){
    $(".modal-title").text("Depreciación de Activos Fijos");
    $(".modal-header").css("background-color","#4e6c2a");
    $(".modal-header").css("color","#d4daed");
    $("#modal_body").trigger("reset");
    $("#modaDepreciacioncontador").modal("show");
    
})

$("#mAgregar").submit(function(e){
    e.preventDefault();
   
    nombre = $.trim($("#namea").val());
    phone = $.trim($("#phonea").val());
    position = $.trim($("#positiona").val());
    officea = $.trim($("#officea").val());
    vidautil=$.trim($("#vidautil").val());
    porcentaje=$.trim($("#porcentaje").val());
    marca=$.trim($("#marca").val());
    modelo=$.trim($("#modelo").val());
    serie=$.trim($("#serie").val());
    
    $.ajax({
        url:"../agregar/agregararticulo.php",

        type:"POST",
        
        dataType:"json",
        
        data:{ nombre: nombre, phone: phone, position: position, 
            officea:officea, vidautil:vidautil, porcentaje:porcentaje, marca:marca, 
            modelo:modelo, serie:serie},
        success: function(data){
            console.log(data);
           
            
        }
      
    });
   

    $('#modalagregar').modal('hide');

    (function(){
      setInterval(function() {
             document.location.reload()
         }, 
             200)
     })()





    })



    $("#mDepreciar").submit(function(e){
        e.preventDefault();
        fechadepre = $.trim($("#fechadepre").val());
        $.ajax({
            url:"../agregar/agregadeprecia.php",
            type:"POST",
            dataType:"json",
            data:{ fechadepre: fechadepre},
            success: function(data){
                console.log(data);
            }
        });
       $('#modaDepreciacion').modal('hide');
         (function(){
          setInterval(function() {
                 document.location.reload()
             }, 
                 200)
         })()
    
    
    
    
    
        })




        
var fila; //captura la fila para editar.

$(document).on("click",".btnEditar",function(){
    fila=$(this).closest("tr");
    $(".modal-title").text("Modificar Artículo");
    $(".modal-header").css("background-color","#4e6c2a");
    $(".modal-header").css("color","white");
    $("#modalmodificar").modal("show");
    
    id=fila.find('td:eq(0)').text();
    name=fila.find('td:eq(1)').text();
    phone=fila.find('td:eq(2)').text();
    position=fila.find('td:eq(3)').text();
    office=fila.find('td:eq(6)').text();
    permits=fila.find('td:eq(5)').text();
    status=fila.find('td:eq(11)').text();
    depreactual=fila.find('td:eq(7)').text();
    depreacumu=fila.find('td:eq(8)').text();
    vidaut=fila.find('td:eq(9)').text();
    valoresidual=fila.find('td:eq(10)').text();
    vestado=fila.find('td:eq(10)').text();
    marcamodi=fila.find('td:eq(13)').text();
    modelomodi=fila.find('td:eq(14)').text();
    seriemodi=fila.find('td:eq(15)').text();
    vestado=fila.find('td:eq(16)').text();
    familiamodificar=fila.find('td:eq(12)').text();
    if (familiamodificar=='Equipos de computo') {
        resultadofamilia=1;
    } else if (familiamodificar=='Mobiliario y Equipo') {
        resultadofamilia=2;
    } else if (familiamodificar=='Vehiculos terrestres') {
        resultadofamilia=3;
    } else if (familiamodificar=='Edificios') {
        resultadofamilia=4;
    }
     else if (familiamodificar=='Terreno') {
        resultadofamilia=5;
    } 
    
   // $("#familiamodificar").val([]);
    $("#iduseru").val(id);
    $("#nameu").val(name);
    $("#Vactual").val(office);
    $("#Vlibros").val(permits);
    $("#statusu").val(status);
    $("#depreactual").val(depreactual);
    $("#depreacumu").val(depreacumu);
    $("#vidautilmodi").val(vidaut);
    $("#vresidual").val(valoresidual);
    $("#vestado").val(vestado);
    $("#familiamodificar").val(resultadofamilia);
    $("#marcamodi").val(marcamodi);
    $("#modelomodi").val(modelomodi);
    $("#seriemodi").val(seriemodi);
   // $("#familiamodificar").selectmenu('refresh', true);
   
    
})








    $("#mModificar").submit(function(e){
    e.preventDefault();
    ide = $.trim($("#iduseru").val());
    nombre = $.trim($("#nameu").val());;
    status = $.trim($("#statusu").val());
    familiamodificar=$.trim($("#familiamodificar").val());
    marcamodi=$.trim($("#marcamodi").val());
    modelomodi=$.trim($("#modelomodi").val());
    seriemodi=$.trim($("#seriemodi").val());
    vestado=$.trim($("#vestado").val());
    $.ajax({
        type:"POST",
        url:"../modificar/modiarticulo.php",
        datatype:"json",
        data:{ide:ide, nombre:nombre, status:status,
            familiamodificar:familiamodificar,
            marcamodi:marcamodi,
            modelomodi:modelomodi,
            seriemodi:seriemodi,
            vestado:vestado
        },
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
/***********Suministros*******************/
$("#btnNuevosuministro").click(function(){
    $(".modal-title").text("Agregar Nuevo Suministro");
    $(".modal-header").css("background-color","#4e6c2a");
    $(".modal-header").css("color","#d4daed");
    $("#modal_body").trigger("reset");
    $("#modalagregarsuministro").modal("show");
    
})



$("#mAgregarSuministro").submit(function(e){
    e.preventDefault();
   
    nombre = $.trim($("#namea").val());
    phone = $.trim($("#phonea").val());
    position = $.trim($("#positiona").val());
    
    $.ajax({
        url:"../agregar/agregarsuministro.php",

        type:"POST",
        
        dataType:"json",
        
        data:{ nombre: nombre, phone: phone, position: position},
        success: function(data){
            console.log(data);
           
            
        }
      
    });
   

    $('#modalagregar').modal('hide');

    (function(){
      setInterval(function() {
             document.location.reload()
         }, 
             200)
     })()





    })

    $(document).on("click",".btnEditarsuministro",function(){
        fila=$(this).closest("tr");
        $(".modal-title").text("Modificar Suministro");
        $(".modal-header").css("background-color","#4e6c2a");
        $(".modal-header").css("color","white");
        $("#modalmodificarsuministro").modal("show");
        id=fila.find('td:eq(0)').text();
        name=fila.find('td:eq(1)').text();
        phone=fila.find('td:eq(2)').text();
        position=fila.find('td:eq(3)').text();
        office=fila.find('td:eq(4)').text();
        permits=fila.find('td:eq(5)').text();
        status=fila.find('td:eq(12)').text();
        $("#iduseru").val(id);
        $("#nameu").val(name);
        $("#phoneu").val(phone);
        $("#positionu").val(position);
        $("#officeu").val(office);
        $("#permitsu").val(permits);
        $("#statusu").val(status);
        
        
    })
    
    
    
   

    $("#mModificarSuministro").submit(function(e){
        e.preventDefault();
        ide = $.trim($("#iduseru").val());
        nombre = $.trim($("#nameu").val());;
        status = $.trim($("#officeu").val());
       
        
        $.ajax({
            type:"POST",
            url:"../modificar/modisuministro.php",
            datatype:"json",
            data:{ide:ide, nombre:nombre, status:status},
            success: function(data){
                console.log(data);
                
                
            }
          
        });
       
    
        $('#modalmodificarsuministro').modal('hide');
    
        (function(){
          setInterval(function() {
                 document.location.reload()
             }, 
                 200)
         })()
    
    
    
    
    
        })
     
    
    
/***********Proveedores*******************/
$("#btnNuevoproveedor").click(function(){
    $(".modal-title").text("Agregar Nuevo Proveedor");
    $(".modal-header").css("background-color","#4e6c2a");
    $(".modal-header").css("color","#d4daed");
    $("#modal_body").trigger("reset");
    $("#modalagregarproveedor").modal("show");
    
})



$("#mAgregarproveedor").submit(function(e){
    e.preventDefault();
   
    nombre = $.trim($("#namepro").val());
    phone = $.trim($("#phonepro").val());
    position = $.trim($("#positionpro").val());
    officea = $.trim($("#officepro").val());
    emaila = $.trim($("#emailpro").val());
    statusa = $.trim($("#statuspro").val());
    
    $.ajax({
        url:"../agregar/agregarproveedor.php",

        type:"POST",
        
        dataType:"json",
        
        data:{ nombre: nombre, phone: phone, position: position, officea:officea,
        emaila: emaila, statusa: statusa},
        success: function(data){
            console.log(data);
           
            
        }
      
    });
   

    $('#modalagregarproveedor').modal('hide');

    (function(){
      setInterval(function() {
             document.location.reload()
         }, 
             200)
     })()





})
 


    $(document).on("click",".btnEditarproveedor",function(){
        fila=$(this).closest("tr");
        $(".modal-title").text("Modificar Proveedor");
        $(".modal-header").css("background-color","#4e6c2a");
        $(".modal-header").css("color","white");
        $("#modalmodificarproveedor").modal("show");
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
    
    
    
   

    $("#mModificarproveedor").submit(function(e){
        e.preventDefault();
        ide = $.trim($("#iduseru").val());
        nombre = $.trim($("#nameu").val());;
        phone=$.trim($("#phoneu").val());
        position=$.trim($("#positionu").val());
        officeu=$.trim($("#officeu").val());
        permitsu=$.trim($("#permitsu").val());
        status = $.trim($("#statusu").val());

       
        
        $.ajax({
            type:"POST",
            url:"../modificar/modiproveedor.php",
            datatype:"json",
            data:{ide:ide, nombre:nombre, phone:phone, position:position, 
            officeu:officeu, permitsu:permitsu, status:status},
            success: function(data){
                console.log(data);
                
                
            }
          
        });
       
    
        $('#modalmodificarproveedor').modal('hide');
    
        (function(){
          setInterval(function() {
                 document.location.reload()
             }, 
                 200)
         })()
    
    
    
    
    
        })
     
    






});