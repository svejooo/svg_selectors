<object class="mapSvg" data="assets/Moscow_Oblast.svg"></object>

jQuery(window).load(function () { // Нам нужно дождаться, пока вся графика 
                                  //(и наша карта тоже) загрузится, поэтому используем window.onload,
			//$("div").attr("class", "divEl");					  
  var svgobject = document.getElementById('mapSvgCityposition'); // Находим тег <object>
  if ('contentDocument' in svgobject) {              // У нас действительно там что-то есть?
       //alert("ddddddd");
	  var svgdom = jQuery(svgobject.contentDocument);  // Получаем доступ к объектной модели SVG-файла
       // Теперь делаем свою работу, например:
    $(".fil2", svgdom).hover(
           function(){
               //var x = this.attr('r','20');
			   $(this).attr("r","15");
			   $(this).css("fill","red");
			  },
           function(){
               $(this).attr("r","10"),
			   $(this).css("fill","#dadada")

				var x = $(this);

		     setTimeout(function(){
			   $(x).attr("r","6")
			   $(x).css("fill","#F0C000")

		  }, 6000);


		   }
	);

  }	
});
