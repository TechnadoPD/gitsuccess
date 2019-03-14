$(document).ready(function(){
    $('.menu-toggle').click(function(){
        $('.nav-bar-cont').slideToggle();
    });
});


$('.testimonial .owl-carousel').owlCarousel({
    autoplay:true,
    autoplayHoverPause:false,
	autoplayTimeout:2000,
	loop:true,
    margin:40,
    nav:false,
	 
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});



$('.gallery .owl-carousel').owlCarousel({
    autoplay:true,
    autoplayHoverPause:false,
	autoplayTimeout:2000,
	loop:true,
    margin:40,
    nav:false,
	
	 navText : ["<i class='fa fa-arrow-left'></i>","<i class='fa fa-arrow-right'></i>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
});









  $(document).ready(function(){
    $('#particles-js').css({"position":"absolute"});
  });

  var count_particles, stats, update;
  stats = new Stats;
  stats.setMode(0);
  stats.domElement.style.position = 'absolute';
  stats.domElement.style.left = '0px';
  stats.domElement.style.top = '0px';
  document.body.appendChild(stats.domElement);
  count_particles = document.querySelector('.js-count-particles');
  update = function() {
    stats.begin();
    stats.end();
    if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
      count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
    }
    requestAnimationFrame(update);
  };
  requestAnimationFrame(update);


/*  $('.input-group.date').datepicker({format: "dd.mm.yyyy"}); */
/*$('#datetimepicker6').datetimepicker( {
    maxDate: moment(),
    allowInputToggle: true,
    enabledHours : false,
    locale: moment().local('en'),
    format: 'YYYY-MM-DD'
});
*/

$('[data-fancybox="preview"]').fancybox({
  thumbs : {
    autoStart : true
  }
});