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
            'position': 'absolute',
            'top': '0',
            'right': '10px',
            'font-size': '40px',
            'cursor': 'pointer'
        })
        span2.css({
            'color': 'white',
            'position': 'absolute',
            'top': '50%',
            'left': '10px',
            'font-size': '40px',
            'cursor': 'pointer'
        })
        span3.css({
            'color': 'white',
            'position': 'absolute',
            'top': '50%',
            'right': '10px',
            'font-size': '40px',
            'cursor': 'pointer'
        })
        $('#slika').append(span1);
        $('#slika').append(span2);
        $('#slika').append(span3);

        $('#slika').slideDown(1000);
    }



    $('#slicica01').click(() => {
        funkcija1();
        image.attr('src', 'Gallery/1.jpg');
        funkcija2();
    });
    $('#slicica02').click(() => {
        funkcija1();
        image.attr('src', 'Gallery/2.jpg');
        funkcija2();
    });
    $('#slicica03').click(() => {
        funkcija1();
        image.attr('src', 'Gallery/3.jpg');
        funkcija2();
    });
    $('#slicica04').click(() => {
        funkcija1();
        image.attr('src', 'Gallery/4.jpg');
        funkcija2();
    });
    $('#slicica05').click(() => {
        funkcija1();
        image.attr('src', 'Gallery/5.jpg');
        funkcija2();
    });
    $('#slicica06').click(() => {
        funkcija1();
        image.attr('src', 'Gallery/6.jpg');
        funkcija2();
    });
    $('#slicica07').click(() => {
        funkcija1();
        image.attr('src', 'Gallery/7.jpg');
        funkcija2();
    });
    $('#slicica08').click(() => {
        funkcija1();
        image.attr('src', 'Gallery/8.jpg');
        funkcija2();
    });
    $('#slicica09').click(() => {
        funkcija1();
        image.attr('src', 'Gallery/9.jpg');
        funkcija2();
    });
    $('#slicica10').click(() => {
        funkcija1();
        image.attr('src', 'Gallery/10.jpg');
        funkcija2();
    });
    $('#slicica11').click(() => {
        funkcija1();
        image.attr('src', 'Gallery/11.jpg');
        funkcija2();
    });
    $('#slicica12').click(() => {
        funkcija1();
        image.attr('src', 'Gallery/12.jpg');
        funkcija2();
    });
    $('#slicica13').click(() => {
        funkcija1();
        image.attr('src', 'Gallery/13.jpg');
        funkcija2();
    });
    $('#slicica14').click(() => {
        funkcija1();
        image.attr('src', 'Gallery/14.jpg');
        funkcija2();
    });
    $('#slicica15').click(() => {
        funkcija1();
        image.attr('src', 'Gallery/15.jpg');
        funkcija2();
    });
    $('#slicica16').click(() => {
        funkcija1();
        image.attr('src', 'Gallery/16.jpg');
        funkcija2();
    });





    $('#slika').on('click', '#zatvori', () => {
        $('#slika').hide();
        $('#slicice').show();
    })



})