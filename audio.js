$(document).ready(function() {

	// $(".playBtn").click(function() {
	// 	var song = $(this).parent().children("input").attr("value");
	// 	$("#audio").attr("src", song);
	// 	document.getElementById('audio').play();
	// });


	// var audio = new Audio('kiss.mp3');
		// audio.play();

//     $('.button').bind("click", function(event) {

//          if ($(this).hasClass('on')) {
//             //если данная мелодия уже проигрывается
//             //снимаем флаг ON
//            $(this).removeClass('on');
//             //останавливаем проигрыватель
//            $('#my-hidden-player').get(0).pause();

//         } else {
//             //если данная мелодия не проигрывается в текущий момент
//             //выключаем все остальные кнопки
//            $('.button').removeClass('on');
//             //добавляем класс ON
//            $(this).addClass('on');
//             var pl = $('#my-hidden-player').get(0);
//             //останавливаем текущую мелодию
//             pl.pause();
//             //устанавливаем новый источник
//             pl.src = $(this).attr('data-src');
//             //включаем проигрывание
//             pl.play();
//         }
		
//     });


// 	$(".button").click();



// $(".button").bind("click", function(event){
//         // $("<audio></audio>").attr({
//         //         'src':'kiss.mp3',
//         //         // 'volume': 0.4,
//         //         'autoplay':'autoplay'
//         // }).appendTo("body");
//         // $(".button").attr({
//         // 	'src' : 'kiss.mp3',
//         // 	'autoplay' : 'autoplay'
//         // });

//         if ($(this).hasClass('on')) {
//             //если данная мелодия уже проигрывается
//             //снимаем флаг ON
//            $(this).removeClass('on');
//             //останавливаем проигрыватель
//            $('#my-hidden-player').get(0).pause();

//         } else {
//             //если данная мелодия не проигрывается в текущий момент
//             //выключаем все остальные кнопки
//            $('.button').removeClass('on');
//             //добавляем класс ON
//            $(this).addClass('on');
//             var pl = $('#my-hidden-player').get(0);
//             //останавливаем текущую мелодию
//             pl.pause();
//             //устанавливаем новый источник
//             pl.src = $(this).attr('data-src');
//             //включаем проигрывание
//             pl.play();
//         }
// });

// 	$(".button").click();


        var currentAudio = null;
        var button_1 = document.getElementById('button_1');
        var button_2 = document.getElementById('button_2');
        function playAudio(audio) {

            if(currentAudio) currentAudio.pause();
            currentAudio = audio;
            currentAudio.play();
            embed.remove();
            
        }
        function stopAudio(audio) {
            button_1.style.display = 'flex';
            currentAudio.pause();
        }
});