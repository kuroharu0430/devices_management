$(document).ready(function(){

    $('.modal_wrapper').on('change','input[name="owner_distinct_id"]',function(){
        $relation_table = $(this).attr('data-owner_reration');
        $owner_has＿owner = $(this).attr('data-owner_has_own');

        $('.form_owner_didtinct').children().hide();

        console.log(($('.owner_customer option:selected').val()));
        // $('[name="owner_id"]  option:selected').prop('selected',true);
        // console.log(($('.owner_employee option:selected').val()));

        $('.owner_'+$relation_table).show();

        $('#form_return_date').children().hide();
        if($owner_has＿owner == 0){
            $('#form_return_date').children().show();
        }
    });

    
    
    $('.route_link').on('click',function(){
        $route = $(this).attr('id');
        $id ='';
        console.log($route)
        if($route == 'create'){
            display_modal($route,$id)
        }else{
            $('.device_id').off('click').on('click', function(){
                $id =$(this).attr('id');
                console.log($route +'/'+ $id)
                display_modal($route,$id)
            })
        }
    });


    function display_modal($route,$id){
        $.ajax({
            type: 'GET',
            url: '/device/' +$id +$route , 
            data: {'id': $id},
            // async: true,
            dataType: 'html',
    
            beforeSend: function () {
                // 
            },
            success: function (data) {
                $('.modal_wrapper').children().remove();
                $('.modal_wrapper').append(data);
                if($id==''){
                    $('.form_owner_didtinct').children().hide();
                }
            },
            error: function(data){
                allert('');
            }
         });
    

    }


});