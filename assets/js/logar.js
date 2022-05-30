$(document).ready(function(){
    
    $("#loga").click(function(){
        var a=$("#txt1").val();
        var b=$("#txt2").val();   
        
        $.ajax({
		type:"GET",
		url:"loga.php",
        data:"nome="+a+"&senha="+b,
		dataType:"html",	
		success: function(dados){
	$(".exibe").text('')
	.append(dados);},});   
    });
    
    
});