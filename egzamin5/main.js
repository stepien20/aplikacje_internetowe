const but=document.querySelector(`input[type="submit"]`)
const ile=document.querySelector(`#ile`)
const paliwo=document.querySelector(`#paliwo`)

but.addEventListener(`click`,evt=>{
    evt.preventDefault()
    let ileNum=parseFloat(ile.value)
    let paliwoNum=parseInt(paliwo.value)
    let cena=0;
    switch (paliwoNum){
        case 1:
            cena=4.0;
            break;
        case 2:
            cena=3.5;
            break;
        default:
            cena=0.0;
            break;
    }
    const display=document.querySelector(`#display`)
    display.innerHTML=`koszt paliwa: ${ileNum*cena},gdzie  ${ileNum*cena} oznacza obliczony wcześniej koszt paliwa.`
})