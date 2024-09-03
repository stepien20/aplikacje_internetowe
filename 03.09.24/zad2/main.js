const km_pole=document.querySelector(`#km`);
const gdansk_pole=document.querySelector(`#gdansk`)
const form=document.querySelector(`form`)
const display=document.querySelector(`#display`)
form.addEventListener(`change`,(evt)=>{
    evt.preventDefault()
    let km=km_pole.value
    let suma=0
    if(isNaN(km)){
        display.innerHTML="podaj poprawną liczbę"
    }else{
        if(gdansk_pole.checked){
            display.innerHTML=`Dowieziemy Twoją pizzę za darmo!`
        }else{
            suma=2*parseFloat(km)
        }
        display.innerHTML=`Dowóz będzie Cię kosztował ${suma} zł`
    }
})