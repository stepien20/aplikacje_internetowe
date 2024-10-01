const butNext=document.querySelector(`#next`)
const mainImg=document.querySelector(`#srodkowy img`)
const butPrev=document.querySelector(`#prev`)
const imgNode=document.querySelectorAll(`#miniatury>img`)
console.log(imgNode.length)
let currentIndex=1
function updateImg(){
    mainImg.src=`${currentIndex}.jpg`
}
butNext.addEventListener(`click`,(evt)=>{
    evt.preventDefault()
    currentIndex++;
    if(currentIndex>7){
        currentIndex=1;
    }
    updateImg()
})
butPrev.addEventListener(`click`,(evt)=>{
    evt.preventDefault()
    currentIndex--;
    if(currentIndex<1){
        currentIndex=7;
    }
    updateImg()
})