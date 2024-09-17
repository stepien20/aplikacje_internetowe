const but=document.querySelector(`#but`)
const checkTab=document.querySelectorAll(`input[type="checkbox"]`)
const display=document.querySelector(`#display`)
but.addEventListener(`click`,function(evt){
    evt.preventDefault()
    let suma=0;
    checkTab.forEach(element => {
        if(element.checked){
            suma+=parseFloat(element.value)
        }
    });
    display.innerHTML=`Cena zabiegów: ${suma}`
})