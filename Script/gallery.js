function funkcija() {
    $(document).ready(() => {
        let sors = $(this).src;
        let image = $('<img>');
        image.attr('src', sors);
        image.addClass('img-fluid img-responsive');
        $('#slika').append(image);

        $('#slika').show();
        console.log(sors);


    })
}