$('#corpo img').replaceWith(function(i, v){
    return $('<div/>', {
        style: 'background-image: url(' + this.src + ');' + 
        'width:' + this.width + '%;' + 
        'height:' + this.height + 'px;' ,
        class: 'fakeImg'
    })
});

function mudarAltura() {
    var $altura = $(window).height();
    var $header = $('#header');
    var $footer = $('#footer');
    var $content = $('#corpo');

    var x = $header.height() + $footer.height();
    var height = $altura - x;
    $content.css('min-height', height + 'px');
}

$(function(){
    mudarAltura();
});

$( window ).resize(function() {
    mudarAltura();
});