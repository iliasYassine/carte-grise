$(function (){

      $('#form-data').submit(function(e){
        var route = $('#form-data').data('route');
        var form_data=$(this);
        $('.alert').remove();
        $.ajax({
                 type: 'POST',
                 url:  route,
                 data:form_data.serialize(),
                 success:function(Response){
                     console.log(Response);
                     if(Response.puissance){

                        $('#messages').append('<p>'+Response.puissance+'</p>');
                     }
                     if(Response.success){

                        $('#messages').append(''+Response.success+'');
                        $('#tva').append(''+Response.tva+'');
                        $('#montant').append(''+Response.montant+'');
                        $('#total').append(''+Response.total+'');
                     }
               
                    }
                 });
        e.preventDefault();
      });
});
