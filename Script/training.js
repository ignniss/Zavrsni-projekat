$(document).ready(() => {

    let saznajCrossConditioning = $("#saznajViseCrossConditioning");
    let saznajCrossTraining = $("#saznajViseCrossTraining");
    let saznajCrossBox = $("#saznajViseCrossBox");
    let saznajZumba = $("#saznajViseZumba");
    let saznajPilates = $("#saznajVisePilates");
    let saznajYoga = $("#saznajViseYoga");

    let naslov = $("#naslov");
    let crossConditioningDiv = $("#kontejnerCrossConditioning");
    let crossTrainingDiv = $("#kontejnerCrossTraining");
    let crossBoxDiv = $("#kontejnerCrossBox");
    let mainDiv = $("#kontejner");
    let zumbaDiv = $("#kontejnerZumba");
    let pilatesDiv = $("#kontejnerPilates");
    let yogaDiv = $("#kontejnerYoga");

    let programiCrossConditioning = $("#programiCrossConditioning");
    let programiCrossTraining = $("#programiCrossTraining");
    let programiCrossBox = $("#programiCrossBox");
    let programiZumba = $("#programiZumba");
    let programiPilates = $("#programiPilates");
    let programiYoga = $("#programiYoga");

    saznajCrossTraining.click(() => {
        mainDiv.css("display","none");
        crossTrainingDiv.css("display","flex");
        naslov.text("Cross training");
        naslov.css({"font-size":"25px", "font-weight":"bold", "text - transform": "uppercase"});
    });

    saznajCrossConditioning.click(() => {
        mainDiv.css("display","none");
        crossConditioningDiv.css("display","flex");
        naslov.text("Cross conditioning");
        naslov.css({"font-size":"25px", "font-weight":"bold", "text - transform": "uppercase"});
    });

    saznajCrossBox.click(() => {
        mainDiv.css("display","none");
        crossBoxDiv.css("display","flex");
        naslov.text("Cross box");
        naslov.css({"font-size":"25px", "font-weight":"bold", "text - transform": "uppercase"});
    });

    saznajZumba.click(() => {
        mainDiv.css("display", "none");
        zumbaDiv.css("display", "flex");
        naslov.text("Zumba");
        naslov.css({"font-size":"25px", "font-weight":"bold",  "text - transform":"uppercase"});
    });

    saznajPilates.click(() => {
        mainDiv.css("display","none");
        pilatesDiv.css("display","flex");
        naslov.text("Pilates");
        naslov.css({"font-size":"25px", "font-weight":"bold", "text - transform": "uppercase"});
    });

    saznajYoga.click(() => {
        mainDiv.css("display","none");
        yogaDiv.css("display","flex");
        naslov.text("Yoga");
        naslov.css({"font-size":"25px", "font-weight":"bold", "text - transform": "uppercase"});
    });


    // Zasto radi i bez ovoga?!

    // programiCrossBox.click(() => {
    //     mainDiv.css("display","flex");
    //     crossBoxDiv.css("display","none");
    // });

    // programiZumba.click(() => {
    //     mainDiv.css("display","flex");
    //     zumbaDiv.css("display","none");
    // });

    // programiPilates.click(() => {
    //     mainDiv.css("display", "flex");
    //     pilatesDiv.css("display", "none");
    // });

    // programiYoga.click(() => {
    //     mainDiv.css("display","flex");
    //     yogaDiv.css("display","none");
    // });

})



  