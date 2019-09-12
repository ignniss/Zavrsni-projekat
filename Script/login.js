$(document).ready(() => {
    let formIme = $('#ime');
    let formIme2=$('#ime2');
    let formPrezime2 = $('#prezime');
    let formKorisnickoIme = $('#korisnickoIme');
    let formSifra=$('#password');
    let formSifra2=$('#password2');
    let formEmail = $('#email');
    let formReSifra=$('#re_password');
    let formPol=$("input[name='pol']");
    let formTezina=$('#tezina');
    let formVisina=$('#visina');
    let formEmail2=$('#email2');


    function validateIme(Ime)
    {
        return Ime.trim().length >= 5;
    }
    function validatePrezime(Prezime)
    {
        return Prezime.trim().length >= 5;
    }
    function validateKorisnickoIme(KorisnickoIme)
    {
        return KorisnickoIme.trim().length >= 5;
    }
    function validateTezina(Tezina){
        return Tezina > 0;
    }
    function validateVisina(Visina){
        return Visina > 0;
    }

    function validateEmail(Email)
    {
        let re = /\S+@\S+\.\S+/;
        return re.test(Email);
    }
    function validatePassword(Password){
        let lengthCheck = Password.length >= 8;
        let digitCounter = 0;
        let upCounter=0;
        for (let i = 0; i < Password.length; i++) {
            let c = Password.charAt(i);
            if (c >= '0' && c <= '9') {
                digitCounter++;
            }
            if(c>='A' && c<='Z'){
                upCounter++;
            }
        }

        return lengthCheck && (digitCounter > 0) && (upCounter > 0);
    }
    function validatePol(){
       if ($("input[name='pol']").is(':checked')) {
            return true;
         }
        else {
           return false;
         }
    }
    function validatePasswordMatch(Password1, Password2)
    {
        return Password1 === Password2;
    }
    function validator(formElement, fnValidation)
    {
        let contentStatus = fnValidation(formElement.val());
        return contentStatus;
    }
     // Validacija korisnickog imena
     formIme.on('input', () => {
        validator(formIme, validateIme);
    });

    // Validacija email adrese
    formEmail.on('input', () => {
        validator(formEmail, validateEmail);
    });

    formSifra.on('input', () => {
        validator(formSifra, validatePassword);
    });
    
    formReSifra.on('input', () => {
        let passwordsMatch = validatePasswordMatch(formSifra.val(), formReSifra.val());
        return passwordsMatch;
    });
    formPol.on('input',() =>{
        validator(formPol,validatePol);
    });
    formTezina.on('input',() =>{
        validator(formTezina,validateTezina);
    });
    formVisina.on('input',() =>{
        validator(formVisina,validateVisina);
    });
    formPrezime2.on('input',() =>{
        validator(formPrezime2,validatePrezime);
    });
    formKorisnickoIme.on('input',() =>{
        validator(formKorisnickoIme,validateKorisnickoIme);
    });
    
    $('#prijava').click(() => {
        let contentIme = formIme.val();
        let contentSifra=formSifra.val();
        
        if (validateIme(contentIme) &&
            validatePassword(contentSifra)
        ) {
            // Prosle su sve validacije, mozemo da saljemo podatke na server - jos uvek lazno :)
            let data = {
                'ime': contentIme,
                'sifra': contentSifra,
            };
            console.log("Salju se podaci na server");
            console.log(data);
            window.alert('USPESNO STE SE PRIJAVILI!');
            $('#formular1')[0].reset();
        } else 
        {
            if(validateIme(contentIme)==false){
            formIme.css('color','red');
            formIme.val('Ime mora imati makar 5 karaktera!');
            setTimeout(function(){$('#formular1')[0].reset();
                                    },4000);
            
        }
         if(validatePassword(contentSifra)==false){
            window.alert('Sifra mora imati bar 1 veliko slovo, 1 cifru i duzinu min 8');
            setTimeout(function(){$('#formular1')[0].reset();
                                    },4000);
        }
    }
    });

    $('#registracija').click(() => {
        let contentIme = formIme2.val();
        let contentPrezime2 = formPrezime2.val();
        let contentKorisnickoIme=formKorisnickoIme.val();
        let contentSifra=formSifra2.val();
        let contentReSifra=formReSifra.val();
        let contentEmail2=formEmail2.val();
        let contentPol=formPol.val();
        let contentVisina=formVisina.val();
        let contentTezina=formTezina.val(); 
        
        if (validateIme(contentIme) && validateVisina(contentVisina) && validateTezina(contentTezina) &&
            validatePassword(contentSifra) && validatePasswordMatch(contentSifra,contentReSifra) &&
            validateEmail(contentEmail2) && validatePrezime(contentPrezime2) && validateKorisnickoIme(contentKorisnickoIme)
        ) {
            // Prosle su sve validacije, mozemo da saljemo podatke na server - jos uvek lazno :)
            let data = {
                'ime': contentIme,
                'prezime':contentPrezime2,
                'korisnicko_ime':contentKorisnickoIme,
                'sifra': contentSifra,
                'email':contentEmail2,
                'pol':contentPol,
                'visina':contentVisina,
                'tezina':contentTezina,
            };
            console.log("Salju se podaci na server");
            console.log(data);
            window.alert('USPESNO STE SE PRIJAVILI!');
            $('#formular2')[0].reset();
        } else 
        {
            if(validateIme(contentIme)==false){
            formIme2.css('color','red');
            formIme2.val('Ime mora imati makar 5 karaktera!');
            setTimeout(function(){$('#formular2')[0].reset();
                            },4000);
            
        }
        if(validatePrezime(contentPrezime2)==false){
            formPrezime2.css('color','red');
            formPrezime2.val('Prezime mora imati makar 5 karaktera!');
            setTimeout(function(){$('#formular2')[0].reset();
                            },4000);
            
        }
        if(validateKorisnickoIme(contentKorisnickoIme)==false){
            formKorisnickoIme.css('color','red');
            formKorisnickoIme.val('Korisnicko ime mora imati makar 4 karaktera!');
            setTimeout(function(){$('#formular2')[0].reset();
                            },4000);
            
        }
         if(validatePassword(contentSifra)==false){
            window.alert('Sifra mora imati bar 1 veliko slovo, 1 cifru i duzinu min 8');
            setTimeout(function(){$('#formular2')[0].reset();
                    },4000);
        }
        if(validateEmail(contentEmail2)==false){
            formEmail2.css('color','red');
            formEmail2.val('Nepravilna email adresa!');
            setTimeout(function(){$('#formular2')[0].reset();
                            },4000);        
        }
        if(validatePasswordMatch(contentSifra,contentReSifra)==false){
            window.alert('Niste lepo ponovili sifru!');
            setTimeout(function(){$('#formular2')[0].reset();
                    },4000);
        }
        if(validateVisina(contentVisina)==false){
            window.alert('Niste pravilno uneli visinu!');
            setTimeout(function(){$('#formular2')[0].reset();
                    },4000);
        }
        if(validateTezina(contentTezina)==false){
            window.alert('Niste pravilno uneli tezinu!');
            setTimeout(function(){$('#formular2')[0].reset();
                    },4000);
        }
        if(validatePol()==false){
            window.alert('Niste odabrali pol!');
            setTimeout(function(){$('#formular2')[0].reset();
                    },4000);
        }
    }
    });
});

            
