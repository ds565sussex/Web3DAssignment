$(document).ready(function(){
    $('.coke-card .card').mouseenter(function(){
        $('.coke-card-txt h1').animate({'font-size': '81px'}, 'fast')
        $('.coke-card-txt h2').animate({'font-size': '81px'}, 'fast')
    })
    $('.coke-card .card').mouseleave(function(){
        $('.coke-card-txt h1').animate({'font-size': '61px'}, 'fast')
        $('.coke-card-txt h2').animate({'font-size': '61px'}, 'fast')
    })

    $('.sprite-card .card').mouseenter(function(){
        $('.sprite-card-txt h1').animate({'font-size': '81px'}, 'fast')
    })
    $('.sprite-card .card').mouseleave(function(){
        $('.sprite-card-txt h1').animate({'font-size': '61px'}, 'fast')
    })

    $('.fanta-card .card').mouseenter(function(){
        $('.fanta-card-txt h1').animate({'font-size': '81px'}, 'fast')
    })
    $('.fanta-card .card').mouseleave(function(){
        $('.fanta-card-txt h1').animate({'font-size': '61px'}, 'fast')
    })

    $('.pepper-card .card').mouseenter(function(){
        $('.pepper-card-txt h1').animate({'font-size': '81px'}, 'fast')
    })
    $('.pepper-card .card').mouseleave(function(){
        $('.pepper-card-txt h1').animate({'font-size': '61px'}, 'fast')
    })
});