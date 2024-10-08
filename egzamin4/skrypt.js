const but=document.querySelector(`input[type="button"]`)




but.addEventListener(`click`,evt=>{
    evt.preventDefault()
    const imie=document.querySelector(`#imie`).value.toUpperCase()
    const nazwisko=document.querySelector(`#nazwisko`).value.toUpperCase()
    const zgloszenie=document.querySelector(`#zgloszenie`).value
    const check=document.querySelector(`#zgoda`)
    const display=document.querySelector(`#display`)
    if(check.checked){
display.style.color="navy"
display.innerHTML=`${imie} ${nazwisko} <br> Treść Twojej sprawy: ${zgloszenie}.`
    }else{
        display.style.color="red"
        display.innerHTML=`Musisz zapoznać się z regulaminem`
    }
})