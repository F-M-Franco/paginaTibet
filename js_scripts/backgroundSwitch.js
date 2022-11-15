const images = ['https://i.imgur.com/eP8PoyC.jpg', 'https://i.imgur.com/ccI7cBx.jpg', 'https://i.imgur.com/smDCYr1.jpg','https://i.imgur.com/9pscDxD.jpg']
let body=document.querySelector('body')
let i=0;
function switchImg(){
    let img="url('"+images[i]+"')"
    body.style.backgroundImage=img
    i++
    if (i==images.length){
        i=0
    }
    return i
}

const timerId=setInterval(switchImg,7500);       