card1 = document.getElementById('card1');
card2 = document.getElementById('card2');
card3 = document.getElementById('card3');
$(card1).on('mouseenter', function(){
    document.getElementById('p1').style.color = 'white';
});
$(card1).on('mouseleave', function(){
    document.getElementById('p1').style.color = 'transparent';
});
$(card2).on('mouseenter', function(){
    document.getElementById('p2').style.color = 'white';
});
$(card2).on('mouseleave', function(){
    document.getElementById('p2').style.color = 'transparent';
});
$(card3).on('mouseenter', function(){
    document.getElementById('p3').style.color = 'white';
});
$(card3).on('mouseleave', function(){
    document.getElementById('p3').style.color = 'transparent';
});
$(card1).on('click', function(){
    window.location.href = '../comoajudar/';
});
$(card2).on('click', function(){
    window.location.href = '../publicacoes/';
});
$(card3).on('click', function(){
    window.location.href = '../reclamacoes/';
});