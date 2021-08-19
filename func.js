        $(document).ready(function() {
            new WOW().init();
        });




        // Sticky navbar
        // =========================
        $(
            
            document).ready(function() {
            // Custom function which toggles between sticky class (is-sticky)
            var stickyToggle = function(sticky, stickyWrapper, scrollElement) {
                var stickyHeight = sticky.outerHeight();
                var stickyTop = stickyWrapper.offset().top;
                if (scrollElement.scrollTop() >= 500) {
                    stickyWrapper.height(stickyHeight);
                    sticky.addClass("is-sticky");

                } else {
                    sticky.removeClass("is-sticky");
                    stickyWrapper.height('auto');
                }
            };

            // Find all data-toggle="sticky-onscroll" elements
            $('[data-toggle="sticky-onscroll"]').each(function() {
                var sticky = $(this);
                var stickyWrapper = $('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page
                sticky.before(stickyWrapper);
                sticky.addClass('sticky');

                // Scroll & resize events
                $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function() {
                    stickyToggle(sticky, stickyWrapper, $(this));
                });

                // On page load
                stickyToggle(sticky, stickyWrapper, $(window));
            });
        });



$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});



 function mypd() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }


