$(document).ready(function() {
    
    $("#Zone_Recherche").click(function() {
        $("#utilisateur").toggle();
        $(".data").html("");
        $("#Zone_Pdf").toggle();
        $("#Boutton_video").toggle();
        $('#Boutton_Qcm').toggle();
        $("#Affich-form1").toggle();

    });
    
    $("#Affich-form1").click(function() {
        $("#form1-container").toggle();
        $("#Zone_Pdf").toggle();
        $("#Boutton_video").toggle();
        $('#Boutton_Qcm').toggle();
        $('#Zone_Recherche').toggle();
    });

    $("#Zone_Pdf").click(function() {
        $("#Pdf").toggle();
        $("#Zone_Recherche").toggle();
        $("#Boutton_video").toggle();
        $('#Boutton_Qcm').toggle();
        $('#Affich-form1').toggle();
    });
   
    $("#Boutton_video").click(function() {
        $("#formulaireContainer3").toggle();
        $("#Zone_Pdf").toggle();
        $("#Zone_Recherche").toggle();
        $('#Boutton_Qcm').toggle();
        $('#Affich-form1').toggle();
    });

    $("#Boutton_Qcm").click(function() {
        $("#Creer_Qcm").toggle();
        $("#Zone_Recherche").toggle();
        $("#Boutton_video").toggle();
        $('#Affich-form1').toggle();
        $("#Zone_Pdf").toggle();
    });

    function Supp(id)
    {
        $.ajax
        ({
            url: '../../index.php',
            type: 'GET',
            data: {action: 'admin_supprim', Id:id},
    
            success: function(data,status) {
                  console.log(data);
                  console.log(status);        
            },
            error: function(xhr, status,error) {
                console.log("Status:", status);
                console.log("Error:", xhr.statusText);                
                console.log(error);
            
            }
          });
    }
    function Modif(id)
    {
        $.ajax({
            url: '../../index.php',
            type: 'GET',
            data: {action: 'affich_modif', Id:id},
    
            success: function(data,status) {
                  console.log(status);
                  $(".add_modif").html(data);
                  
                                
            },
            error: function(xhr, status,error) {
                console.log("XHR Object:", xhr);
                console.log("Status:", status);
                console.log("Error:", xhr.statusText);
                console.log("Response headers:", xhr.getAllResponseHeaders());
                
                console.log(error);
            
            }
        });
}




    // Cibler le bouton avec l'ID "monBouton"
    $('#rechercher').click(function() {
      // Récupérer la valeur de l'élément #Msg_envoie
      var Nom = $('#nom2').val();
      var Prenom = $('#prenom2').val();
      $('#prenom2').val("");
      $('#nom2').val("");
      $.ajax({
        url: '../../index.php',
        type: 'POST',
        data: {Nom_admin: Nom, Prenom_admin:Prenom},

        success: function(data,status) {
              //console.log(data);
              $(".data").html(data);

              $(".add_supp").click(function() {
                    var contactId = $(this).data("id");
                    Supp(contactId);
                    window.location.reload();
                });

                $(".BouttonModif").click(function() {
                    var contactId = $(this).data("id");
                    //console.log(contactId);
                    //$("#add_modif").toggle();
                    Modif(contactId);
                    $(".data").html("");
                    $("#utilisateur").toggle();
                });
        },
        error: function(xhr, status,error) {
            console.log(xhr);
            console.log(status);
            console.log(error);
        
        }
      });
    });

   
});  