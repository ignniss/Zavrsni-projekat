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
        $('#slika').append(span1).append(span2).append(span3).append(image);
        span1.attr('id', 'zatvori');
        span1.css({
            'color': 'white',
            'position': 'relative',
            'top': '0px',
            'left': '95%',
            'font-size': '40px',
            'cursor': 'pointer'
        })
        span2.css({
            'color': 'white',
            'position': 'relative',
            'top': '50%',
            'left': '-8%',
            'font-size': '40px',
            'cursor': 'pointer'
        })
        span3.css({
            'color': 'white',
            'position': 'relative',
            'top': '50%',
            'left': '100%',
            'font-size': '40px',
            'cursor': 'pointer'
        })


        //$('#slika').slideDown(1000);
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