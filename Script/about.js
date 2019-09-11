$(document).ready(() => {
    let x = 0;
    $("#flip").click(() => {
        x++;
        $("#panel").slideToggle();
        if(x % 2 == 0){
            $('#flip').text('saznaj vise...');
        }
        else{
            $('#flip').text('saznaj manje...');
        }
    });
});

