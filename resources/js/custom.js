$('.btn-info').on('click',function (){
    $(this).append('<i style="margin-left: 5px;" class="fa fa-spinner fa-spin">').attr('disabled',true);
    $.ajax({
        type: "POST",
        url: "reservation/checkAvailability",
        data: {
            'hotel_id': $('#hotel').val(),
            'room_id': $('#room').val(),
            'from_date': $('#from_date').val(),
            'to_date': $('#to_date').val(),
            '_token': $('meta[name="csrf-token"]').attr('content'),
        },
    })
        .done(function( msg ) {
            if(msg == 0){
                $('.btn-info').hide();
                $('.submit-btn').show();
            }else{
                $(this).find('.fa fa-spinner fa-spin').remove();
                alert('not available');
            }
        });
})

$('#room_type').on('change', function (){
    $('#room').empty();
    $('.loading').show();

    $.ajax({
        type: "POST",
        url: "room/getRooms",
        data: {
            'room_type_id': $(this).val(),
            '_token': $('meta[name="csrf-token"]').attr('content'),
        },
    })
        .done(function( msg ) {
            $('.loading').hide();
            $.each(msg , function(index, val) {
                $('#room').append('<option value="'+val.id+'">'+val.name+'</option>');
            });
        });
})


$('.submit-btn').on('click', function (){

    $('.loading').show();
// alert($('#number_of_children').val());
    $.ajax({
        type: "POST",
        url: "reservation/store",
        data: {
            'hotel_id': $('#hotel').val(),
            'room_id': $('#room').val(),
            'from_date': $('#from_date').val(),
            'to_date': $('#to_date').val(),
            'number_of_rooms': $('#number_of_rooms').val(),
            'number_of_adults': $('#number_of_adults').val(),
            'number_of_children': $('#number_of_children').val(),
            '_token': $('meta[name="csrf-token"]').attr('content'),
        },
    })
        .done(function( msg ) {
            $('.loading').hide();
        });
})
