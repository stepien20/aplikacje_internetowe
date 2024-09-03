const goscie_pole=document.querySelector(`#goscie`);
const poprawiny_pole=document.querySelector(`#poprawiny`)
const form=document.querySelector(`form`)
const display=document.querySelector(`#display`)
form.addEventListener(`change`,(evt)=>{
    evt.preventDefault()
    let goscie=goscie_pole.value
    let suma=0
    if(isNaN(goscie)){
        display.innerHTML="podaj poprawną liczbę"
    }else{
        if(poprawiny_pole.checked){
            suma=(100*parseInt(goscie))*1.3
        }else{
            suma=(100*parseInt(goscie))
        }
        display.innerHTML=`Koszt: ${suma}`
    }
})