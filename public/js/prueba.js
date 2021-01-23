$(document).ready(function(){
    //var tamanoventana = $(window).innerHeight;
    $('#boton').on('click',function(e){
        alert("Hola, estas aqui desde js");
    });

    alert($(window).width());

});