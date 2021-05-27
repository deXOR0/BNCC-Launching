$(document).ready(function () {
    $('.acc h3').click(function () {
        $(this).next('.content').slideToggle();
        $(this).parent().toggleClass('active');
        $(this).parent().siblings().children('.content').slideUp();
        $(this).parent().siblings().removeClass('active');
    });
});


// For Event Section --> Carousel Single Item
$(document).ready(function () {
    $('.event-carousel').slick({
        dots: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        nextArrow: '.event-next',
        prevArrow: '.event-prev',
    });
});


// For Classes Section --> Carousel Center Mode
$(document).ready(function () {
    $(".carousel").slick({
        centerMode: true,
        centerPadding: "60px",
        dots: true,
        infinite: true,
        slidesToShow: 3,
        variableWidth: true,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    arrows: true,
                    centerMode: true,
                    centerPadding: "40px",
                    slidesToShow: 3,
                    mobileFirst: true
                },
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: true,
                    mobileFirst: true,
                    centerMode: true,
                    centerPadding: "40px",
                    slidesToShow: 1,
                },
            },
        ],
        nextArrow: '.next',
        prevArrow: '.prev',
    });
});