


document.addEventListener("click", function(event) {
	var menu = document.getElementById("dropdown-menu");
	var menuTrigger = document.getElementById("dropdown-trigger");
	
	// Если клик был вне меню и его не вызвал элемент меню или его триггер, закрываем меню
	if (!menu.contains(event.target) && event.target !== menuTrigger) {
	  menu.classList.remove("open");
	  menuTrigger.innerHTML = "&#9776;"; // Восстанавливаем значок трех полосок
	  menuTrigger.style.transform = "rotate(0deg)"; // Возвращаем начальное положение
	}
  });
  
  // Ваша функция toggleMenu остается без изменений
  function toggleMenu() {
	var menu = document.getElementById("dropdown-menu");
	menu.classList.toggle("open");
	var menuTrigger = document.getElementById("dropdown-trigger");
	if (menu.classList.contains("open")) {
	  menuTrigger.innerHTML = "&#x2715;"; // Заменяем значок на крестик
	  menuTrigger.style.transform = "rotate(90deg)"; // Добавляем вращение крестика
	} else {
	  menuTrigger.innerHTML = "&#9776;"; // Восстанавливаем значок трех полосок
	  menuTrigger.style.transform = "rotate(0deg)"; // Возвращаем начальное положение
	}
  }
  








$(document).ready(function() {
	
	/* scroll */
	
	$("a[href^='#']").click(function(){
		var _href = $(this).attr("href");
		$("html, body").animate({scrollTop: $(_href).offset().top+"px"});
		return false;
	});

	/* timer */

	function update() {
		var Now = new Date(), Finish = new Date();
		Finish.setHours( 23);
		Finish.setMinutes( 59);
		Finish.setSeconds( 59);
		if( Now.getHours() === 23  &&  Now.getMinutes() === 59  &&  Now.getSeconds === 59) {
			Finish.setDate( Finish.getDate() + 1);
		}
		var sec = Math.floor( ( Finish.getTime() - Now.getTime()) / 1000);
		var hrs = Math.floor( sec / 3600);
		sec -= hrs * 3600;
		var min = Math.floor( sec / 60);
		sec -= min * 60;
		$(".timer .hours").html( pad(hrs));
		$(".timer .minutes").html( pad(min));
		$(".timer .seconds").html( pad(sec));
		setTimeout( update, 200);
	}
	function pad(s) {
		s = ("00"+s).substr(-2);
		return "<span>" + s[0] + "</span><span>" + s[1] + "</span>";
	}
	update();

});

$(window).on("load", function(){

	$(".owl-carousel").owlCarousel({
		items: 1,
		loop: true,
		autoHeight: true,
		smartSpeed: 300,
		mouseDrag: false,
		pullDrag: false,
		dots: false,
		nav: true,
		navText: ""
	});
	
});


function showInverterInfo(inverter) {
	// Сначала скрыть все блоки
	document.querySelectorAll('.inverter-info').forEach(function(block) {
	  block.style.display = 'none';
	});

	// Показать только выбранный блок
	document.getElementById('inverter-' + inverter).style.display = 'block';
  }
  