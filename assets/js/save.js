$(document).ready(function(){
  $("#bt12").click(function(){
    var pergunta=$("#txt_pergunta").val();
    var txt_r1=$("#txt_r1").val();
    var txt_r2=$("#txt_r2").val();
    var txt_r3=$("#txt_r3").val();
	 var txt_r4=$("#txt_r4").val();
    var op_r1=$("#r1").val();
    var op_r2=$("#r2").val();
    var op_r3=$("#r3").val();
	var op_r4=$("#r4").val();
    var disciplina=$("#txt_disciplina").val();
    
    $.ajax({
        type:"GET",
        url:"save.php",
        dataType:"html",
        data:"pergunta="+pergunta+"&txt_r1="+txt_r1+"&txt_r2="+txt_r2+"&txt_r3="+txt_r3+"&txt_r4="+txt_r4+"&op_r1="+op_r1+"&op_r2="+op_r2+"&op_r3="+op_r3+"&op_r4="+op_r4+"&dis="+disciplina,
        success:function(dados){
            $('.d').text('').append(dados);
        },
    });

    
  });
    
});