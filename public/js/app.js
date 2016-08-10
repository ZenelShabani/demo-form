var form = $('form'),
    inputs = form.find('input'),
    data = {};

form.on('submit',function(e){
    var thisform = $(this);
    var action = thisform.attr('action');
    var method = thisform.attr('method');
    if(checkInputs()){
        fetchUrl(action,method,function(r){
            //thisform.find('input[type=submit]').attr('disabled',true);
            if(r.success == true){
                thisform.fadeOut(function(){
                    this.remove();
                });
                $('.form-container').append('<div class="success"><i class="glyphicon glyphicon-check"></i></div>');
            }else{
                thisform.prepend('<p class="bg-danger">'+r.msg+'</p>');
            }
        });
    }
    e.preventDefault();
});

function fetchUrl(a,m,c){
    $.ajax({
        url:a,
        type:m,
        data:data,
        success:function(r){
            c(r);
        }
    });
}

function checkInputs(){
    var total = inputs.length;
    var x = total;
    inputs.each(function(){
        var thisinput = $(this);
        if(thisinput.val().length !== 0 && thisinput.val() !== undefined && thisinput.val() !== " "){
            thisinput.parent('div').removeClass('input-error');
            data[thisinput.attr('name')] = thisinput.val();
        }else{
            x--;
            thisinput.parent('div').addClass('input-error');
        }
    });
    return x == total;
}