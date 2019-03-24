
$(document).ready(function(){
    $('.single-slide').slick({
        dots: true,
        arrows: true
    });

  });
  $(document).ready(function(){
    $('.modalbox').fancybox ({
    
    });
  });
  $(document).ready(function() {
    $('input[name="phone"]').mask("+79999999999");
  });

  $(document).ready(function() {
    initAjaxForm();

  function initAjaxForm() {

    var $ajaxForms = $('.ajax-form');
    

    $ajaxForms.on('submit', function (event) {
        event.preventDefault(); 

        var data = $(this).serializeArray(), // собираем данные формы
            actionURL = $(this).attr('action'), // получаем адрес куда отправлять
            actionMethod = $(this).attr('method'); // получаем метод отправки
            console.dir(data);
            console.dir(actionURL);
            console.dir(actionMethod);
     
        var selfFrom = this;
        var response =$('#click');
        
        $.ajax({
            url: actionURL,
            method: actionMethod,
            dataType: 'json',
            data: data,
            success: function (data) { 
                console.log(data);
                if (data.result=='success') {
                    $('input').css('border-color', 'white');
                    $('span').hide();
                    $.fancybox.open(response);
                    selfFrom.reset();
                } 
                else if (data.result=='error') {
                    console.dir(data.errorField);
                    $('span').show();
                    var fieldError = data.errorField;
                    $.each(fieldError, function (index, value) {
                        $('input[name='+index+']').css('border-color', 'red');
                        $('.'+ index+'_error').text(value).css('color', 'red');
                    }); 
                }
            }
        
        })
        
    });
    }
});

