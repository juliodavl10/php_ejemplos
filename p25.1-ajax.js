function buscarPacientes() {
    const $nombre = $("#nombre").val();
    //alert("Buscando..."+nombre);
    let datos ={
        nombre : $nombre
    };
    $.ajax({
        url :"p26-ajax-pdo.php",
        type : "post",
        data : datos,
        success : function(result) {
            debugger;
            console.log(result);
            const pacientes=$.parseJSON(result);
            pacientes.forEach(item => {
                agregarFilas("#tabla",item);
            });
 
        }
    })
 
 
    return;
}
function agregarFilas(id,paciente) {
    const html=
    "<tr>"+
    "<td>"+paciente.nombres+"</td>"+
    "<td>"+paciente.edad+"</td>"+    
    "<td>"+paciente.talla_m+"</td>"+
    "<td>"+paciente.peso_kg+"</td>"+
    "<td>"+paciente.sintoma_tos+"</td>"+
    "<td>"+paciente.sintoma_fiebre+"</td>"+
    "<td>"+paciente.sintoma_disnea+"</td>"+
    "<td><button type='button'onclick=editar('"+paciente.nombres+"','"+paciente.edad+"','"+paciente.talla_m+"','"+paciente.peso_kg+"','"+paciente.sintoma_tos+"','"+paciente.sintoma_fiebre+"','"+paciente.sintoma_disnea+"');>Editar</button></td>"+
    "</tr>";
    $(id+" tr:last").after(html);
}

 
function editar(nombres,edad,talla_m,peso_kg,sintoma_tos,sintoma_fiebre,sintoma_disnea) {
    $('#exampleModal').modal('show');    
    $("#nombre2").val(nombres);
    $("#edad2").val(edad);
    $("#talla_m2").val(talla_m);
    $("#peso_kg2").val(peso_kg);
    if (sintoma_tos == 1) {
 
        $('#nombre2').prop('checked', true);
   
      } else {
   
        $('#nombre2').prop('checked', false);
   
      }
    if (sintoma_fiebre == 1) {
 
        $('#sintoma_fiebre2').prop('checked', true);
   
      } else {
   
        $('#sintoma_fiebre2').prop('checked', false);
   
      }
    if (sintoma_disnea == 1) {
 
        $('#sintoma_disnea2').prop('checked', true);
   
      } else {
   
        $('#sintoma_disnea2').prop('checked', false);
   
      }
}
function actualizar() {
    const $nombre = $("#nombre2").val();
   
    let datos ={
        nombre : $nombre
    };
    $.ajax({
        url :"p26.1-update-ajax-pdo.php",
        type : "post",
        data : datos,
        success : function(result) {              
            alert("Se guardo los datos correctamente de "+result);            
        }
    })
 
 
    return;
}
 
function cancelar() {
    $('#exampleModal').modal('hide');    
}
function eliminar(){

}