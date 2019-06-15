$(document).ready(function(){

    var container = $('.container');
    var btn_list_notices = container.find ( "#btn-list-notices" );
    var list = container.find( "#list" );

    btn_list_notices.on('click', function(){

        $.ajax({
            url:'/news/listNews',
            type: 'GET',
            dataType: 'json',
            success: function(data){

                var htmlNEW = '';
                
                $.each(data, function( key, value){
                    htmlNEW += '<p>'+data[key].text+'</p>';
                });

                list.html( htmlNEW );

            },error: function( xhr, ajaxOptions,thrownError ){
                console.log(xhr.responseText )
            }
        });

    });

});