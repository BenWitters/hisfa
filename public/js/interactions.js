$(document).ready(function() {

    $.ajaxSetup(
        {
            headers:
                {
                    'X-CSRF-Token': $('input[name="_token"]').val()
                }
        });

    // OCTABIN TOEVOEGEN
    $(".btnOctabin--add").on("click", function(e){
        var grondstofID = $(this).attr("data-id");
        var counter = $(this).closest('.grondstofitem').find('.grondstofitem__amount__count');

        $.post( "materialtypes/" + grondstofID + "/octabin" )
            .done(function( response ) {

                if(response.status == 'success'){
                    console.log('Success');
                    $(counter).text(+counter.text() + 1);

                }else{
                    console.log('Error');
                }

            });
        e.preventDefault();
    });

    // OCTABIN VERWIJDEREN
    $(".btnOctabin--delete").on("click", function(e){
        var grondstofID = $(this).attr("data-id");
        var counter = $(this).closest('.grondstofitem').find('.grondstofitem__amount__count');

        $.ajax({
            url: "materialtypes/" + grondstofID + "/octabin",
            type: 'DELETE',
            success: function(result) {
                console.log('Success');
                $(counter).text(+counter.text() - 1);
            },
            error: function (result) {
                console.log('Error');
            }
        });
        e.preventDefault();
    });



});