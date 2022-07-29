$(document).ready(function () {

    var panel = {
        el: '#info-panel',
        open:function(isNew, e){
            console.log(isNew);
            $('#info-panel').addClass('open').css({
                top:e.pageY+'px',
                left:e.pageX+'px',
            }).find('.title [contenteditable]').focus();

            if(isNew)
                $('#info-panel').addClass('new').removeClass('update');
            else
                $('#info-panel').addClass('update').removeClass('new');
        },
    };

    $('.date-block').dblclick(function(e){
       panel.open(true, e);
    }).on('dbclick','.event',function(e){
       // e.stopPropagation();
        panel.open(false,e);

    });


    $('#info-panel')
    .on('click','button', function(e){
        if($(this).is('.create')){

        }
        if($(this).is('.update')){

        }
        if($(this).is('.cancel')){
            $('#info-panel').removeClass('open');
            

        }
        if($(this).is('.delete')){

        }

    })
    .on('click','.close',function(e){
        $('button.cancel').click();

    });

  });