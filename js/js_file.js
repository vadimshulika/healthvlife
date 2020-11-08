function counter1 (){
	var a = $('.counter1_js_1').val();
    var b = $('.counter1_js_2').val();
    if(a > 0 && b > 0){	
        var result = a/(b/100*b/100);
        result = result.toFixed(2);
        if(result < 18.5){
            alert("Ваш индекс массы тела " + result + ". Вы худощавый");
        }

        if(result >= 18.5 && result < 24.5){
            alert("Ваш индекс массы тела " + result + ". У вас идеальное телосложение");
        }
                
        if(result >= 24.5 && result < 29.5){
            alert("Ваш индекс массы тела " + result + ". У вас лишний вес");
        }
                
        if(result >= 29.5 && result < 34.5){
            alert("Ваш индекс массы тела " + result + ". У вас ожирение 1 степени");
        }
                
        if(result >= 34.5 && result < 39.5){
           alert("Ваш индекс массы тела " + result + ". У вас ожирение 2 степени");
        }
                
        if(result >= 39.5 && result <= 56){
            alert("Ваш индекс массы тела " + result + ". У вас ожирение 3 степени");
        }

        if(result > 56){
         alert("Ваш индекс массы тела " + result + ". У вас полное ожирение");
        }
    }
}

function counter2(){
	var a = $('.counter2_js_1').val();
    var b = $('.counter2_js_2').val();
    if(b > 38){
    	var c = 37;
    	var result = a * (0.02 * c + 0.02);
    	result = a - result;
    } else {
    	var result = a * (0.02 * b + 0.02);
    	result = a - result;
    }
    result = result.toFixed(2);
    alert("Ваш рабочий вес на " + b + " повторений: " + result + " кг");
}

function counter3(){
	var a = $('.counter3_js_1').val();
    var b = $('.counter3_js_2').val();
    var result = 0.02 * b + 0.02;
    result = 1 + result;
    result = a * result;
    result = result.toFixed(2);
    alert("Ваш максимальный вес " + result + " кг");
}

function recording(){
	alert("Благодарим за запись на групповое занятие");
}