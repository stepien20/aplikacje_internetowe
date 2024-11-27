const send_but =document.querySelector(`#send`)
const random_but =document.querySelector(`#random`)
const chat=document.querySelector(`article`)
const texts=["Świetnie!",
"Kto gra główną rolę?",
"Lubisz filmy Tego reżysera?",
"Będę 10 minut wcześniej",
"Może kupimy sobie popcorn?",
"Ja wolę Colę",
"Zaproszę jeszcze Grześka",
"Tydzień temu też byłem w kinie na Diunie",
"Ja funduję bilety"]
send_but.addEventListener(`click`, function(){
    let text=document.querySelector(`#tekst`).value
    elem=document.createElement(`section`);
    elem.innerHTML=`
                <img src="Jolka.jpg" alt=""><p>${text}</p>
            
    `
    elem.classList.add(`jola`);
    chat.appendChild(elem)
    elem.scrollIntoView()
    })
random_but.addEventListener(`click`, function(){
  let  num=Math.round( Math.random()*8)
  console.log(num)
  text=texts[num]
    elem=document.createElement(`section`);
    elem.innerHTML=`
                <img src="Krzysiek.jpg" alt=""><p>${text}</p>
            
    `
    elem.classList.add(`krzys`);
    chat.appendChild(elem)
    elem.scrollIntoView()
    })