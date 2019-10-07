$(document).ready(() => {
    let formIme = $('#ime');
    let formTelefon = $('#telefon');
    let formEmail = $('#email');
    let formNaslov = $('#naslov');
    let formPoruka = $('#poruka');


    function validateIme(Ime)
    {
        return Ime.trim().length >= 5;
    }
    function validateNaslov(Naslov)
    {
        return Naslov.trim().length >= 4;
    }
    function validatePoruka(Poruka)
    {
        return Poruka.trim().length >= 5;
    }

    function validateEmail(Email)
    {
        let re = /\S+@\S+\.\S+/;
        return re.test(Email);
    }
    function validateTelefon(Telefon)
    { 
        let lengthCheck = Telefon.length >=9;
        let digitCounter = 0;
        for (let i = 0; i < Telefon.length; i++) { 
            let c = Telefon.charAt(i);
            if (c >= '0' && c <= '9') {
                digitCounter++;
            }
        }

        return lengthCheck && (digitCounter == lengthCheck);
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

    formNaslov.on('input', () => {
        validator(formNaslov, validateNaslov);
    });
    formPoruka.on('input', () => {
        validator(formPoruka, validatePoruka);
    });
    formTelefon.on('input', () => {
        validator(formTelefon, validateTelefon);
    });
    
    

    $('#posalji').click(() => {
        let contentIme = formIme.val();
        let contentEmail = formEmail.val();
        let contentPoruka = formPoruka.val();
        let contentNaslov = formNaslov.val();
        let contentTelefon = formTelefon.val();
        

        if (validateIme(contentIme) &&
            validateEmail(contentEmail) &&
            validateNaslov(contentNaslov) &&
            validatePoruka(contentPoruka) &&
            validateTelefon(contentTelefon)
        ) {
            // Prosle su sve validacije, mozemo da saljemo podatke na server - jos uvek lazno :)
            let data = {
                'ime': contentIme,
                'nalov': contentNaslov,
                'email': contentEmail,
                'poruka': contentPoruka,
                'telefon': contentTelefon,
            };
            console.log("Salju se podaci na server");
            console.log(data);    
            window.alert('USPESNO STE POSLALI PORUKU!');
            $('#formular')[0].reset();
            
        } else 
        {
            if(validateIme(contentIme)==false){
            formIme.css('color','red');
            formIme.val('Ime mora imati makar 5 karaktera!');
            setTimeout(function(){$('#formular')[0].reset();
                                    },4000);
        }
         if(validateEmail(contentEmail)==false){
            formEmail.css('color','red');
            formEmail.val('Neispravna email adresa!');
            setTimeout(function(){$('#formular')[0].reset();
                                    },4000);
        }
         if(validateNaslov(contentNaslov)==false){
            formNaslov.css('color','red');
            formNaslov.val('Naslov mora imati makar 4 karaktera!');
            setTimeout(function(){$('#formular')[0].reset();
                                    },4000);
        }
         if(validatePoruka(contentPoruka)==false){
            formPoruka.css('color','red');
            formPoruka.val('Poruka mora imati makar 5 karaktera!');
            setTimeout(function(){$('#formular')[0].reset();
                                    },4000);
        }
         if(validateTelefon(contentTelefon)==false){
            formTelefon.css('color','red');
            formTelefon.val('Telefon mora imati makar 9 cifara!');
            setTimeout(function(){$('#formular')[0].reset();
                                    },4000);
        }
    }
    });
});

            
