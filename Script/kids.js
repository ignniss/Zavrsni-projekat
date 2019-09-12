$(document).ready(() => {
    let image = $('<img>');
    let span1 = $('<span>&times<span>');
    let span2 = $('<span>&#10094<span>');
    let span3 = $('<span>&#10095<span>');


    function funkcija1() {
        $('#slika').empty();
        $('#slicice').hide();
        $('#slika').show();
    };

    function funkcija2() {
        $('#slika').append(image);
        span1.attr('id', 'zatvori');
        span1.css({
            'color': 'white',
            'position': 'relative',
            'top': '0',
            'right': '0px',
            'font-size': '40px',
            'cursor': 'pointer'
        })
        span2.css({
            'color': 'white',
            'position': 'relative',
            'top': '10%',
            'left': '10px',
            'font-size': '40px',
            'cursor': 'pointer'
        })
        span3.css({
            'color': 'white',
            'top': '0%',
            'right': '10px',
            'font-size': '40px',
            'cursor': 'pointer'
        })
        $('#slika').append(span1).append(span2).append(span3);

        $('#slika').slideDown(1000);
    }



    for (let i = 1; i < 13; i++) {
        $(`#slicica${i}`).click(() => {
            funkcija1();
            image.attr('src', `GalleryKids/${i}.jpg`);
            funkcija2();
        });
    }


    $('#slika').on('click', '#zatvori', () => {
        $('#slika').hide();
        $('#slicice').show();
    })



})