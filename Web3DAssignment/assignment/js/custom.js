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


function goToCherry(){
    window.location = 'https://www.yourcoca-cola.co.uk/coca-cola-original-taste-cherry-24-x-330ml/12657920.html'
}

function goToLemon(){
    window.location = 'https://www.yourcoca-cola.co.uk/fanta-lemon-24-x-330ml/12657937.html'
}

function goToGrape(){
    window.location = 'https://www.yourcoca-cola.co.uk/fanta-zero-grape-12-x-500ml/13125720.html'
}

function goToVin(){
    window.location = 'https://www.yourcoca-cola.co.uk/coca-cola-zero-sugar-vanilla-24-x-330ml/12752587.html'
}