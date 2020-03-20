



$(document).ready(function(){

    var agrega; //captura la fila para editar.
$("#btnNuevo").click(function(){
    $(".modal-title").text("Agregar Nuevo Usuario");
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
    permits = $.trim($("#permitsa").val());
    status = $.trim($("#statusa").val());
    user = $.trim($("#usera").val());
    pass = $.trim($("#passa").val());
    email = $.trim($("#emaila").val());
    
    $.ajax({
        url:"agregarusuario.php",

        type:"POST",
        
        dataType:"json",
        
        data:{ nombre: nombre, phone: phone, position: position, office: office, permits: permits, status: status,
        user: user, pass: pass, email: email},
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
    $(".modal-title").text("Modificar Usuario");
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
    user=fila.find('td:eq(7)').text();
    pass=fila.find('td:eq(8)').text();
    email=fila.find('td:eq(9)').text();
    $("#iduseru").val(id);
    $("#nameu").val(name);
    $("#phoneu").val(phone);
    $("#positionu").val(position);
    $("#officeu").val(office);
    $("#permitsu").val(permits);
    $("#statusu").val(status);
    $("#useru").val(user);
    $("#passu").val(pass);
    $("#emailu").val(email);
    
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
    user = $.trim($("#useru").val());
    pass = $.trim($("#passu").val());
    email = $.trim($("#emailu").val());
    
    $.ajax({
        type:"POST",
        url:"modiusuario.php",
        datatype:"json",
        data:{ide:ide, nombre:nombre,phone:phone,position:position,office:office, permits:permits, status:status,
        user:user, pass:pass,email:email},
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