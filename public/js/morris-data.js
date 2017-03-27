// Morris.js Charts sample data for SB Admin template
var _token = $('meta[name="csrf-token"]').attr('content');
$(function() {

  $.post(edithomeRoute, {"_token" : _token}, function(response) {

        //console.log(response[1]);


           console.log(response);
        
        //if (response.status == 'success') {
          Morris.Area({
              element: 'morris-area-chart',
              data: response,
              xkey: 'date',
              ykeys: ['inscrits'],
              labels: ['inscrits'],
              pointSize: 2,
              hideHover: 'auto',
              resize: true
          });



        //} else {
          // on affiche les messages d'erreur dans la popin
          //$('<div class="alert alert-warning"><strong>Warning!</strong> Tous les champs doivent êtres remplis </div>').appendTo("#edit_partenaires");
        //}


  }
  );
});
