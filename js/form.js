function dato(e){
    var p= document.getElementById('espacio');
    console.log(e);
    var t="";
  
   t+="<input type='hidden' class='form-control' name='id' value='"+e+"' require></input>";
  
    p.innerHTML=t;
}
function dato2(e){
    var p= document.getElementById('espacio2');
    console.log(e);
    var t="";
  
   t+="<input type='hidden' class='form-control' name='id' value='"+e+"' require></input>";
  
    p.innerHTML=t;
}

function llenarModal(datos){
    d=datos.split('||');
    $("#nombre").val(d['nombre']);
    $("#descri").val(d['descripcion']);
}





