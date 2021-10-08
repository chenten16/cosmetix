	////////////////////////////////////////////////////
    // 01. PreLoader Js
	$(window).on('load',function() {
		$("#loading").fadeOut(500);
	});


	////////////////////////////////////////////////////
$('.sale__area-slider-2 ').owlCarousel({
    loop:false,
    margin:30,
    autoplay:true,
    autoplayTimeout:3000,
    smartSpeed:500,
    items:6,
    navText:['<button><i class="fa fa-angle-left"></i>PREV</button>','<button>NEXT<i class="fa fa-angle-right"></i></button>'],
    nav:false,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        576:{
            items:2
        },
        767:{
            items:2
        },
        992:{
            items:3
        },
        1200:{
            items:5 
        },
        1600:{
            items:6
        }
    }
});


$('.product__slider-2 ').owlCarousel({
    loop:true,
    margin:30,
    autoplay:false,
    autoplayTimeout:3000,
    smartSpeed:500,
    items:6,
    navText:['<button><i class="fa fa-angle-left"></i>PREV</button>','<button>NEXT<i class="fa fa-angle-right"></i></button>'],
    nav:false,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        576:{
            items:2
        },
        767:{
            items:2
        },
        992:{
            items:2
        },
        1200:{
            items:2
        },
        1600:{
            items:3
        }
    }
});

$('.client__slider').owlCarousel({
    loop:true,
    margin:0,
    autoplay:false,
    autoplayTimeout:3000,
    smartSpeed:500,
    items:6,
    navText:['<button><i class="fa fa-angle-left"></i>PREV</button>','<button>NEXT<i class="fa fa-angle-right"></i></button>'],
    nav:false,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        576:{
            items:2
        },
        767:{
            items:3
        },
        992:{
            items:4
        },
        1200:{
            items:5
        },
        1600:{
            items:5
        }
    }
});

$('.grid__slider').owlCarousel({
    loop:false,
    margin:30,
    autoplay:false,
    autoplayTimeout:3000,
    smartSpeed:500,
    items:6,
    navText:['<button><i class="fa fa-angle-left"></i>PREV</button>','<button>NEXT<i class="fa fa-angle-right"></i></button>'],
    nav:false,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        576:{
            items:2
        },
        767:{
            items:3
        },
        992:{
            items:4
        },
        1200:{
            items:4 
        },
        1600:{
            items:5
        }
    }
});