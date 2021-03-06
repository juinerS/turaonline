$(document).ready(function() {
$('[data-toggle="tooltip"]').tooltip();


$('a[href="#search"]').on('click', function(event) {
    event.preventDefault();
    $('#search').addClass('open');
    $('#search > form > input[type="search"]').focus();
  });
  
$('#search, #search button.close').on('click keyup', function(event) {
    if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
      $(this).removeClass('open');
    }
  });

$('#cerrar_sesion').on('click', function(e) {
e.preventDefault();
  swal({
      title: "¿Cerrar Sesión?",
      type: 'question',
      showConfirmButton: true,
      showCancelButton: true,
       confirmButtonText:
    '<i class="oi oi-account-logout"></i> Si!',
      confirmButtonAriaLabel: 'Si',
      cancelButtonText: "Cancelar"
  }).then((result) => {
  if (result.value) {
    $.ajax({
    url :"../php/logout.php",
    type: "POST",
    contentType: false,
    cache: false,
    processData:false
}).done(function(response){
        $(location).attr('href', '../index.php')
  });
  } else if (
    result.dismiss === swal.DismissReason.cancel) {
  }});});

$('#form_busqueda').submit(function(e){
  e.preventDefault();
  var busqueda = $("#texto_busqueda").val();

  $(location).attr('href', '../busqueda.php?b='+busqueda)

});


});//Close JQUery