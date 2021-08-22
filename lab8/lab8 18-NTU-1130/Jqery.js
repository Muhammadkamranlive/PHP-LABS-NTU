$(document).ready(function(){
    //Q1
        $("#q2").click(function(){
           $('#q2').css({color:'red',fontfamily:'arial'});
        })
})
//Q2
$(document).ready(function(){
         
    $("#fullName").click(function () {
        var str1 = $("#firstName").val();
        var str2 = $("#lastName").val();
        let str3 = str1.concat(" ",str2);
       
        $( "form" ).submit( function(e) {
            e.preventDefault();
            $('#data').val(str3);
        })
   });
   //Q3

   $("button").click(function(){
       $("#ch").attr("type","password");
   });

});






