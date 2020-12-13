
$(buscar_datos());

function buscar_datos(consulta) {
  $.ajax({
    url:'../buscar/buscar.php',
    type:'POST',
    dataType:'html',
    data:{consulta:consulta},
  })
  .done(function (respuesta) {
    $("#datos").html(respuesta);

    
  })

}

$(document).on('keyup','#busquedaproducto',function () {
  var valor=$(this).val();
  if (valor!="") {
    buscar_datos(valor);
  }else{
    buscar_datos();
  }
});



/**************Buscar Suministros********************************/
$(buscar_suministros());

function buscar_suministros(consulta) {
  $.ajax({
    url:'../buscar/buscarsuministros.php',
    type:'POST',
    dataType:'html',
    data:{consulta:consulta},
  })
  .done(function (respuesta) {
    $("#suministros").html(respuesta);

    
  })

}

$(document).on('keyup','#busquedasuministro',function () {
  var valor=$(this).val();
  if (valor!="") {
    buscar_suministros(valor);
  }else{
    buscar_suministros();
  }
});
/**************Buscar Proveedor********************************/
$(buscar_proveedor());

function buscar_proveedor(consulta) {
  $.ajax({
    url:'../buscar/buscarproveedor.php',
    type:'POST',
    dataType:'html',
    data:{consulta:consulta},
  })
  .done(function (respuesta) {
    $("#proveedor").html(respuesta);

    
  })

}

$(document).on('keyup','#busquedaproveedor',function () {
  var valor=$(this).val();
  if (valor!="") {
    buscar_proveedor(valor);
  }else{
    buscar_proveedor();
  }
});
/**************Buscar Usuarios********************************/
$(buscar_usuarios());

function buscar_usuarios(consulta) {
  $.ajax({
    url:'../buscar/buscarusuarios.php',
    type:'POST',
    dataType:'html',
    data:{consulta:consulta},
  })
  .done(function (respuesta) {
    $("#user").html(respuesta);

    
  })

}

$(document).on('keyup','#busquedausuario',function () {
  var valor=$(this).val();
  if (valor!="") {
    buscar_usuarios(valor);
  }else{
    buscar_usuarios();
  }
});
