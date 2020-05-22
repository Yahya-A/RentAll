function search(){
    $.ajax({
        type: "POST",
        url: baseurl+"search/search",
        data: {name : $("#id").val()},
        dataType: "json",
        beforeSend: function(e){
            if (e && e.overrideMimeType) {
                e.overrideMimeType("application/json;charset=UTF-8");
            }
        },
        success: function(response){
            if(response.status == "success"){
                $('#nama').val(response.name);
            } else{
                alert("Data Tidak Ditemukan");  
            }
            
        },
        error: function (xhr, ajaxOptions, thrownError){
            alert(xhr.responseText);
        }
    });
}

$(document).ready(function(){
    $("#btn-search").click(function(){
        search();
    });
});