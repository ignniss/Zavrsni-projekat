$(document).ready(() => {

    let saznajZumba = $("#saznajViseZumba");
    let saznajPilates = $("#saznajVisePilates");

    let saznajYoga = $("#saznajViseYoga");

    let naslov = $("#naslov");
    let mainDiv = $("#kontejner");
    let zumbaDiv = $("#kontejnerZumba");
    let pilatesDiv = $("#kontejnerPilates");
    let yogaDiv = $("#kontejnerYoga");

    let programiZumba = $("#programiZumba");
    let programiPilates = $("#programiPilates");
    let programiYoga = $("#programiYoga");


    saznajPilates.click(() => {
        mainDiv.css("display","none");
        pilatesDiv.css("display","flex");
        naslov.text("Pilates");
        naslov.css({"font-size":"25px", "font-weight":"bold", "text - transform": "uppercase"});
    });


    programiPilates.click(() => {
        mainDiv.css("display", "flex");
        pilatesDiv.css("display", "none");
    });

    saznajZumba.click(() => {
        mainDiv.css("display", "none");
        zumbaDiv.css("display", "flex");
        naslov.text("Zumba");
        naslov.css({"font-size":"25px", "font-weight":"bold",  "text - transform":"uppercase"});
    });

    programiZumba.click(() => {
        mainDiv.css("display","flex");
        zumbaDiv.css("display","none");
    });

    saznajYoga.click(() => {
        mainDiv.css("display","none");
        yogaDiv.css("display","flex");
        naslov.text("Yoga");
        naslov.css({"font-size":"25px", "font-weight":"bold", "text - transform": "uppercase"});
    });

    programiYoga.click(() => {
        mainDiv.css("display","flex");
        yogaDiv.css("display","none");
    });

})



  