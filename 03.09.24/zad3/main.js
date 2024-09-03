const butDod=document.querySelector(`#dodawanie`)
const butOde=document.querySelector(`#odejmowanie`)
const butMnoz=document.querySelector(`#mnozenie`)
const butDziel=document.querySelector(`#dzielenie`)
const butMod=document.querySelector(`#reszta`)
const butCal=document.querySelector(`#calkowite`)
const num1=document.querySelector(`#numA`)
const num2=document.querySelector(`#numB`)
const display=document.querySelector(`#display`)
butDod.addEventListener(`click`,evt=>{
    evt.preventDefault()
    licz1=num1.value 
    licz2=num2.value
if((!isNaN(licz1)&&licz1!='')&&(!isNaN(licz2)&&licz2!='')){
    display.innerHTML=`Wynik działania to ${parseFloat(licz1)+parseFloat(licz2)}`
}else{
    display.innerHTML=`A lub B to nie liczba`
}

})

butOde.addEventListener(`click`,evt=>{
    evt.preventDefault()
licz1=num1.value 
licz2=num2.value
if((!isNaN(licz1)&&licz1!='')&&(!isNaN(licz2)&&licz2!='')){
    display.innerHTML=`Wynik działania to ${parseFloat(licz1)-parseFloat(licz2)}`
}else{
    display.innerHTML=`A lub B to nie liczba`
}

})

butMnoz.addEventListener(`click`,evt=>{
    evt.preventDefault()
licz1=num1.value 
licz2=num2.value
if((!isNaN(licz1)&&licz1!='')&&(!isNaN(licz2)&&licz2!='')){
    display.innerHTML=`Wynik działania to ${parseFloat(licz1)*parseFloat(licz2)}`
}else{
    display.innerHTML=`A lub B to nie liczba`
}

})

butDziel.addEventListener(`click`,evt=>{
    evt.preventDefault()
licz1=num1.value 
licz2=num2.value
if((!isNaN(licz1)&&licz1!='')&&(!isNaN(licz2)&&licz2!='')){
    if(licz2==0){
        display.innerHTML=`Nie można dzielić przez 0`
    }else{
        display.innerHTML=`Wynik działania to ${parseFloat(licz1)/parseFloat(licz2)}`
    }
}else{
    display.innerHTML=`A lub B to nie liczba`
}

})
butMod.addEventListener(`click`,evt=>{
    evt.preventDefault()
licz1=num1.value 
licz2=num2.value
if((!isNaN(licz1)&&licz1!='')&&(!isNaN(licz2)&&licz2!='')){
    if(licz2==0){
        display.innerHTML=`Nie można dzielić przez 0`
    }else{
        display.innerHTML=`Wynik działania to ${parseFloat(licz1)%parseFloat(licz2)}`
    }
}else{
    display.innerHTML=`A lub B to nie liczba`
}

})
butCal.addEventListener(`click`,evt=>{
    evt.preventDefault()
licz1=num1.value 
licz2=num2.value
if((!isNaN(licz1)&&licz1!='')&&(!isNaN(licz2)&&licz2!='')){
    if(licz2==0){
        display.innerHTML=`Nie można dzielić przez 0`
    }else{
        display.innerHTML=`Wynik działania to ${parseInt(parseFloat(licz1)/parseFloat(licz2))}`
    }
}else{
    display.innerHTML=`A lub B to nie liczba`
}

})
console.log(8%3)

// console.log(parseInt(9.2))
console.log(4.0%1)