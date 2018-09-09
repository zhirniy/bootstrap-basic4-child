jQuery(document).ready(function($) {
  //Обработчик событий на добавление точек к записи
  var count = 0;
  setInterval (function(){
  	var	count_ = count%4;
  		if(count_!==3){
  		$('#h3').append('.');
  	    }else{
  		var b = $('#h3').text();
  		var c = b.replace("...", "");
  		$('#h3').text(c)

  	    }
  		count++;
  }, 3000);
  //Обработчик событий на событие псевдокласса hover для правого блока
  $( "#right" ).hover(
    function() {
      $( "#left_content .block").css("right","43%");
      $( "#left_content .block").css("transition","right 1.5s");
    }
  );
  //Обработчик событий на событие псевдокласса hover для левого блока
  $( "#left" ).hover(
    function() {
      $( "#left_content .block").css("right","15%");
      $( "#left_content .block").css("transition","right 1.5s");
    }
  );
  //Обработчик событий на событие отмены hover для правого блока
  $( "#right" ).mouseleave(
    function() {
      $( "#left_content .block").css("right","15%");
      $( "#left_content .block").css("transition","right 1.5s");
    }
  );
  //Обработчик событий на вывод контекстного меню в заголовке мобильной версии при нажатиии на кнопку
  $( "#menu_on" ).click(
    function() {
      $( "#nav").css("right","0");
      $( "#nav").css("transition","right 1.5s");
      $( "#point_right").css( "display", "none");
    	$( "#point_left").css( "display", "block");
    }
  );
  //Обработчик событий на скрытие контекстного меню в заголовке мобильной версии при нажатии на кнопку
  $( "#close" ).click(
    function() {
      $( "#nav").css("right","-100%");
      $( "#nav").css("transition","right 1.5s");
    }
  );
  //Обработчик событий на открытие правого блока при нажатии на указатель
  $( "#point_left" ).click(
    function() {
    	$( "#point_left").css( "display", "none");
    	$( "#point_right").css( "display", "block");
     }
  );
  //Обработчик событий на открытие левого блока при нажатии на указатель
  $( "#point_right" ).click(
    function() {
    	$( "#point_right").css( "display", "none");
    	$( "#point_left").css( "display", "block");
     }
  );
});