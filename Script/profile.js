$(document).ready(() => {
    let id = $('#admin_id').val();
    let rok = $('#rok').val();
    let program = $('#program').val();
    let uplata = $('#uplata').val();

    if (id == 1) {
        $('#admin_btn').show();
        $('.admin').hide();
        $('#admin_btn').click(() => {
            window.location = 'admin_panel.php'
        })
    }

    if (rok < 0) {
        $('.btn-rok').attr('disabled', true);
    }
    if (program == 'deca') {
        $('#program_odrasli').hide();
    }
    if (uplata == '') {
        $('#istek').hide();
    }


})