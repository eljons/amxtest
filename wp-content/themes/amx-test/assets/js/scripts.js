!function(e){$default=e(".list-videos__list .active").data("id"),$default&&($htm='<iframe width="650" height="360" src="http://www.youtube.com/embed/'+$default+'?controls=1&mute=1&autoplay=1&rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',e("#player").html($htm)),e(".list-videos__list li").click((function(t){t.preventDefault(),e(".list-videos__list li").removeClass("active"),e(this).addClass("active"),$target=e(this).data("id"),$htmv='<iframe width="650" height="360" src="http://www.youtube.com/embed/'+$target+'?controls=1&mute=1&autoplay=1&rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',e("#player").html($htmv)}))}(jQuery);var contador=document.getElementsByClassName("contador");if(contador.length>0){const e=1e3,t=60*e,a=60*t,l=24*a;let o=new Date("Aug 30, 2023 00:00:00").getTime();setInterval((function(){let r=(new Date).getTime(),i=o-r;document.getElementById("dias").innerText=Math.floor(i/l),document.getElementById("horas").innerText=Math.floor(i%l/a),document.getElementById("minutos").innerText=Math.floor(i%a/t),document.getElementById("segundos").innerText=Math.floor(i%t/e)}),e)}