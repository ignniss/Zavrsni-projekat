$(document).ready(() => {
    let image = $('<img>');
    let span1 = $('<span>&times<span>');
    let duzina = $('.gallery').length;



    function funkcija1() {
        $('#slika').empty();
        $('#slicice').hide();
        $('#slika').show();
    };

    function funkcija2() {
        $('#slika').append(span1).append(image);
        span1.attr('id', 'zatvori');
        span1.css({
            'color': 'white',
            'position': 'relative',
            'top': '0px',
            'left': '95%',
            'font-size': '40px',
            'cursor': 'pointer'
        })


    }



    for (let i = 1; i <= duzina; i++) {
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