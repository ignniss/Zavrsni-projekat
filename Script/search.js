$(document).ready(() => {
    $('.brisanje').click(() => {
        if (!confirm("DA LI ZAISTA ŽELITE DA IZBRIŠETE KORISNIKA?")) {
            $('#delete_link').attr('href', '#');
            location.reload();
        }



    });


});