const form=document.querySelector(`form`)
const texts=document.querySelectorAll(`input[type="text"]`)
const checks=document.querySelectorAll(`input[type="checkbox"]`)
const display=document.querySelector(`#display`)

form.addEventListener(`change`,evt=>{
    display.innerHTML=``
    evt.preventDefault()
    let suma=0
    checks.forEach((element,index) => {
        val=texts[index].value
        if(element.checked){
            if(!isNaN(val)&&val!=''){
                if(val%1!=0){
                    display.innerHTML+=`tekst nr ${index+1} nie jest liczbą całkowitą <br>`
                }else{
                    suma+=parseFloat(val)
                }
            }else{
                display.innerHTML+=`tekst nr ${index+1} nie jest liczbą <br>`
            }
        }
        
    });
    display.innerHTML+=`<br>wynik dodawania liczb całkowitych to ${suma}`;
})
