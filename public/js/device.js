$(document).ready(function(){

    $('input[name="owner_distinct_id"]').change(function(){
       $relation_table = $(this).attr('class');
        if($(this).attr('class')== $relation_table){
            $('.form_owner_didtinct').children().hide();
            $('.owner_'+$relation_table).show();
        }
    });

    $('.show_link').click(function(){
            $show_id = $(this).attr('id');
        $.ajax({
            type: 'GET',
            url: '/device/'+ $show_id, 
            data: {'id': $show_id},
            // async: true,
            dataType: 'html',
    
            beforeSend: function () {
                // 
            },
            success: function (data) {
                $('.modal_wrapper').children().remove();
                $('.modal_wrapper').append(data);
            },
            error: function(data){
                allert();
            }
         });


    });

});