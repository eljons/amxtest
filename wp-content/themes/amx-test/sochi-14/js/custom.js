(function($)
  { 
    $default = $('.list-videos__list .active').data('id');
    if($default){
      $htm = '<iframe width="650" height="360" src="http://www.youtube.com/embed/' + $default + '?controls=1&mute=1&autoplay=1&rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';

      $('#player').html($htm);
    }
    
    $( ".list-videos__list li" ).click(function( e ) {
      e.preventDefault();

      $(".list-videos__list li").removeClass('active');
      $(this).addClass('active');
      $target = $(this).data('id');
      $htmv = '<iframe width="650" height="360" src="http://www.youtube.com/embed/' + $target + '?controls=1&mute=1&autoplay=1&rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';

      $('#player').html($htmv);
    });

  })( jQuery );

  var contador = document.getElementsByClassName('contador');
  if(contador.length > 0){
    const second = 1000,
    minute = second * 60,
    hour = minute * 60,
    day = hour * 24;

    let countDown = new Date('Aug 30, 2023 00:00:00').getTime(),
    x = setInterval(function() {

    let now = new Date().getTime(),
        distance = countDown - now;

  document.getElementById('dias').innerText = Math.floor(distance / (day)),
    document.getElementById('horas').innerText = Math.floor((distance % (day)) / (hour)),
    document.getElementById('minutos').innerText = Math.floor((distance % (hour)) / (minute)),
    document.getElementById('segundos').innerText = Math.floor((distance % (minute)) / second);

}, second)
  }

