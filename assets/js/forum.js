$(document).ready(function() 
{
  $('#Bouton_envoie').click(function() 
  {
    var message = $('#Msg_envoie').val();
    $("#Msg_envoie").val("");
    $.ajax({
      url: '../../index.php',
      type: 'POST',
      data: {message: message},



      success: function(data,status) {
            const doctypeIndex = data.indexOf('<!doctype html>');
            
            // Extraire le contenu avant <!DOCTYPE html>
            const contentBeforeDoctype = data.substring(0,doctypeIndex ).trim();
            
            // Afficher le contenu extrait dans l'élément .messages
            $('.messages').html(contentBeforeDoctype);
      },
      error: function(xhr, status,error) {
          console.log(xhr);
          console.log(status);
          console.log(error);
      
      }

    });
  });

$('.liste').on('click', function() 
{
    var groupe= $(this).text();
    $.ajax
    ({
        url: '../../index.php',
        type: 'POST',
        data: {groupe: groupe},
        success: function(data,status) 
        {
            console.log(status);
            console.log(data);
            $('.messages').html(data);
        },
        error: function(xhr, status,error) 
        {
            console.log(xhr);
            console.log(status);
            console.log(error);
        }
    });
});


});