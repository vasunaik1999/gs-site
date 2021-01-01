//owl carousel
const responsive={
    1040:{
        items:3
    },
    640:{
        items:2
    },
    0:{
        items:1
    }
}

$('.stop-carousel').owlCarousel({
    loop:true,
    autoplay:false,
    responsive:responsive
});
$('.team-card').owlCarousel({
    loop:true,
    autoplay:true,
    autoplayTimeout:3000,
    responsive:responsive
});