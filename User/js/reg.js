$(document).ready(function(){
    //alert("cdscd");
    $("#statename").on("change",function(){
        var stateid=$(this).val();
        $.ajax({
            method:"POST",
            url:"city.php",
            data:{id:stateid},
            dataType:"html",
            success:function(data){
                $("#city").html(data);
            }
        });
    });
});