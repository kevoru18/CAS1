$(document).ready(function(){

    var agrega; //captura la fila para editar.
$("#btnNuevo").click(function(){
    $(".modal-title").text("Agregar Nuevo Proveedor");
    $(".modal-header").css("background-color","#4e6c2a");
    $(".modal-header").css("color","#d4daed");
    $("#modal_body").trigger("reset");
    $("#modalagregar").modal("show");
    
})

$("#mAgregar").submit(function(e){
    e.preventDefault();
   
    nombre = $.trim($("#namea").val());
    phone = $.trim($("#phonea").val());
    position = $.trim($("#positiona").val());
    office = $.trim($("#officea").val());
    status = $.trim($("#statusa").val());
    email = $.trim($("#emaila").val());
    
    $.ajax({
        url:"agregarproveedor.php",

        type:"POST",
        
        dataType:"json",
        
        data:{ nombre: nombre, phone: phone, position: position, office: office,  status: status,
         email: email},
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





var fila; //captura la fila para editar.

$(document).on("click",".btnEditar",function(){
    fila=$(this).closest("tr");
    $(".modal-title").text("Modificar Proveedor");
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