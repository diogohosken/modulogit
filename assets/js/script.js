$(function(){

	$('#botao').bind('click', function(e){
		e.preventDefault();
		
		var alt= $('#altura').val();
		var pes= $('#peso').val();

		alt=alt.replace(',', '.');
		pes=pes.replace(',', '.');

		var result= pes/(alt*alt);
		result=result.toFixed(2);

		if(result < 17){
			var situ="Muito abaixo do peso";
		} else if(result >= 17 && result < 18.5){
			var situ="Abaixo do peso";
		} else if(result >= 18.5 && result < 25){
			var situ="Peso normal";
		} else if(result >= 25 && result < 30){
			var situ="Acima do peso";
		} else if(result >= 30 && result < 35){
			var situ="Obesidade I";
		} else if(result >= 35 && result < 40){
			var situ="Obesidade II";
		} else if(result >= 40){
			var situ="Obesidade III";
		}

		$('#resultado').html('Seu IMC é ' +result+ ' kg/m², status: ' +situ);

		
	})

});