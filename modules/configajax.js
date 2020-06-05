$(document).ready(function(){
    $("#cari").click(function(){
        $.ajax({
            type: "POST",
            url: baseurl+"search/find",
            data: {key: $("#key").val()},
            dataType: "json",
            beforeSend: function(e){
                if (e && e.overrideMimeType) {
                    e.overrideMimeType("application/json;charset=UTF-8");
                }
            },
            success: function(response){
                // console.log(response);
                $("#hasil").html(response.data);
            },
            error: function(xhr, ajaxOptions, thrownError){
                alert(xhr.responseText);
            }
        });
    });
});