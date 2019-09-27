$(function(){
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%'
    });

    $("#submit").on("click",function() {
        var param = $('#formData').serialize();
        var url = 'http://' + document.domain + '/Admin/';
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            url: url + 'login',
            data: param,
            success: function (data) {
                data = JSON.parse(data);
                if (data.code == 1) {
                    window.location.href = url;
                } else {
                    layer.msg(data.message);
                }
            },
            error: function(data) {
                alert(123123123);
            }
        })
    });
});
