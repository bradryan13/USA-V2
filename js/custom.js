

jQuery(document).ready(function ($) {

	//enable mobile-menu
    //

    var snapper = new Snap({
        element: document.getElementById('page-content'),
        disable: 'right',
        flickThreshold: 40,
        addBodyClasses: false
    });

    /* Get reference to toggle button, the html element with ID "open-left" */

    var myToggleButton = document.getElementById('open-left')

    /* Add event listener to our toggle button */
    myToggleButton.addEventListener('click', function() {

        if (snapper.state().state == "left") {
            snapper.close();
        } else {
            snapper.open('left');
        }

    });

    /* Prevent Safari opening links when viewing as a Mobile App */
    (function(a, b, c) {
        if (c in b && b[c]) {
            var d, e = a.location,
                    f = /^(a|html)$/i;
            a.addEventListener("click", function(a) {
                d = a.target;
                while (!f.test(d.nodeName))
                    d = d.parentNode;
                "href" in d && (d.href.indexOf("http") || ~d.href.indexOf(e.host)) && (a.preventDefault(), e.href = d.href)
            }, !1)
        }
    })(document, window.navigator, "standalone");

    // close mobile menu on resize

    $(window).on('resize', function() {
      snapper.close();
    });


	//enable fitvids.
    jQuery('.video').fitVids();

	//enable foundation.
	$(document).foundation();
		

	//enable Fancybox
	$(".fancybox").fancybox({
        padding : 0,
        openEffect : 'elastic',
        closeEffect : 'elastic',
        iframe: { preload: false }
    });

 	//menu Menu Functionality 
 	
 	$( ".menu li a" ).addClass( "ajax" );


    // // get width of li
    // var menuWidth = $('.menu ul').outerWidth(true)

    
    // $('ul.menu').css('width', menuWidth);

	// Store variables
    var menu_head = $('.menu > li > a'),
        menu_body = $('.menu li > .sub-menu');

    // Open the first tab on load
	// menu_head.first().addClass('active').next().slideDown('normal');

    // Click function
    menu_head.on('click', function(event) {

    if ($(this).attr('class') == 'active'){
        menu_body.slideUp('normal');
    }

    // Show and hide the tabs on click
    if ($(this).attr('class') != 'active'){
        menu_body.slideUp('normal');
        $(this).next().stop(true,true).slideToggle('normal');
        menu_head.removeClass('active');
        $(this).addClass('active');
    }


	});

});

