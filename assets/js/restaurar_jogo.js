$(document).ready(fu­nction(){
$("#bt14").click(fun­ction(){
$.ajax({
type:"GET",
url:"restaurar_jogo.­php",
dataType:"html",
data:"acao=restaurar­jogo",
success:function(dad­os){
$('.d').text('').app­end(dados);
},
});
});

});