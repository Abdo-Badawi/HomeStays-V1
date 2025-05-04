(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner(0);


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });


    // International Tour carousel
    $(".InternationalTour-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: false,
        dots: true,
        loop: true,
        margin: 25,
        nav : false,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsiveClass: true,
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:2
            },
            1200:{
                items:3
            }
        }
    });


    // packages carousel
    $(".packages-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: false,
        dots: false,
        loop: true,
        margin: 25,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsiveClass: true,
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:2
            },
            1200:{
                items:3
            }
        }
    });


    // testimonial carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        dots: true,
        loop: true,
        margin: 25,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsiveClass: true,
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:2
            },
            1200:{
                items:3
            }
        }
    });

    
   // Back to top button
   $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
        $('.back-to-top').fadeIn('slow');
    } else {
        $('.back-to-top').fadeOut('slow');
    }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    }); 

    document.querySelectorAll('.role-selector').forEach(card => {
        card.addEventListener('click', function () {
            // Remove 'selected' class from all cards
            document.querySelectorAll('.role-selector').forEach(c => c.classList.remove('selected'));

            // Add 'selected' class to the clicked card
            this.classList.add('selected');

            // Check the corresponding radio button
            const roleInput = this.querySelector('input[name="role"]');
            roleInput.checked = true;
        });
    });

    const element = document.getElementById('correctId'); // Ensure 'correctId' matches the HTML element's ID
    console.log(element); // Check if this logs `null` or the actual element

    const selectedRole = document.querySelector('.role-selector.selected');
    if (!selectedRole) {
        isValid = false;
        showError('Please select a role (Host or Traveler).', document.querySelector('.role-selector').parentElement);
    }

    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    if (password !== confirmPassword) {
        isValid = false;
        showError('Passwords do not match.', document.getElementById('confirmPassword').parentElement);
    }

})(jQuery);

document.addEventListener('DOMContentLoaded', function () {
    const element = document.getElementById('someElementId');
    if (element) {
        element.addEventListener('click', function () {
            console.log('Element clicked!');
        });
    } else {
        console.log('Element not found.');
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const roleSelector = document.querySelector('.role-selector');
    if (roleSelector) {
        roleSelector.addEventListener('click', function () {
            console.log('Role selected!');
        });
    } else {
        console.error('Role selector element not found.');
    }
});

