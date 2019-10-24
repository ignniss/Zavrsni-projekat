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
        $('#slika').append(image);
        span1.attr('id', 'zatvori');
        span1.css({
            'color': 'white',
            'position': 'absolute',
            'top': '0',
            'right': '10px',
            'font-size': '40px',
            'cursor': 'pointer'
        })

        $('#slika').append(span1);


    }



    for (let i = 1; i <= duzina; i++) {
        $(`#slicica${i}`).click(() => {
            funkcija1();
            image.attr('src', `Gallery/${i}.jpg`);
            funkcija2();
        });
    }


    $('#slika').on('click', '#zatvori', () => {
        $('#slika').hide();
        $('#slicice').show();
    })



})