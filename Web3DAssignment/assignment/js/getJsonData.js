// JavaScript Document
$(document).ready(function(){
    $.getJSON('./model/brands.php', function(jsonObj) {
        console.log(jsonObj)
        $('#title_coke').html('<p>'+ jsonObj[0].brand +'<p>')
        $('#title_sprite').html('<p>'+ jsonObj[1].brand +'<p>')
        $('#title_fanta').html('<p>'+ jsonObj[2].brand +'<p>')
        $('#title_pepper').html('<p>'+ jsonObj[3].brand +'<p>')
        $('#desc_coke').html('<p>'+ jsonObj[0].desc +'<p>')
        $('#desc_sprite').html('<p>'+ jsonObj[1].desc +'<p>')
        $('#desc_fanta').html('<p>'+ jsonObj[2].desc +'<p>')
        $('#desc_pepper').html('<p>'+ jsonObj[3].desc +'<p>')
     });
});
