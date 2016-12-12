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
                if(+counter.text() > 0){
                    $(counter).text(+counter.text() - 1);

                }
            },
            error: function (result) {
                console.log('Error');
            }
        });
        e.preventDefault();
    });





    // BLOCK TOEVOEGEN
    $(".block__add").on("click", function(e){
        var form = $(this).closest('form'); // the form to submit
        var otherForm = $(this).closest('.blocks__row').find('.form-blocks-remove'); // the other form (remove block)
        var counter = $(this).closest('.blocks__row').find('.blocks__row__amount__count'); // the block count
        var id = $(form).find('[name=blocktypeId]').val();
        console.log(id);

        $.ajax({
            url: "/blocks/add",
            type: 'POST',
            data: $(form).serialize(),
            success: function(result) {
                // update counter
                console.log('Success');
                $(counter).text(+counter.text() + 1);

                // change value in form
                var inputAmount = $(form).find('[name=amount]');
                console.log(inputAmount.val());
                $(inputAmount).val(+inputAmount.val() + 1);
                console.log('inputamount ' + inputAmount.val());

                // change value in the other form
                var otherInputAmount = $(otherForm).find('[name=amount]');
                $(otherInputAmount).val(+otherInputAmount.val() + 1);
                console.log('otherinputamount ' + otherInputAmount.val())
            },
            error: function (result) {
                console.log('Error');
            }
        });

        e.preventDefault();
    });

    // BLOCK VERWIJDEREN
    $(".block__remove").on("click", function(e){
        var form = $(this).closest('form');
        var otherForm = $(this).closest('.blocks__row').find('.form-blocks-add');
        var counter = $(this).closest('.blocks__row').find('.blocks__row__amount__count');
        var id = $(form).find('[name=blocktypeId]').val();
        console.log(id);

        $.ajax({
            url: "/blocks/remove",
            type: 'POST',
            data: $(form).serialize(),
            success: function(result) {
                console.log('Success');
                if(+counter.text() > 0){
                    $(counter).text(+counter.text() - 1);
                    var inputAmount = $(form).find('[name=amount]');
                    console.log(inputAmount.val());
                    $(inputAmount).val(+inputAmount.val() - 1);
                    console.log('inputamount ' + inputAmount.val());

                    var otherInputAmount = $(otherForm).find('[name=amount]');
                    $(otherInputAmount).val(+otherInputAmount.val() - 1);
                    console.log('otherinputamount ' + otherInputAmount.val())
                }
            },
            error: function (result) {
                console.log('Error');
            }
        });

        e.preventDefault();
    });





});