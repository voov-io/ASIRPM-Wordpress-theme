let contenScroll = document.getElementById("contentscroll");
let card = document.querySelector(".what_our__box ");
let btnClose = document.getElementById('btnclose');
let modal = document.getElementById('modal');
let modaloverlay = document.getElementById('modal-overlay');

document.addEventListener('click', (e) =>{
    if (e.target.matches("#submit")) {
        //e.preventDefault()
    }
    if (e.target.matches("#scrollright")) {
        
        contenScroll.scrollLeft +=card.offsetWidth;
    }
    if (e.target.matches("#scrollleft")) {
        
        contenScroll.scrollLeft -=card.offsetWidth;
        
    }
    if (e.target.matches("#video-main")) {
        e.target.play();
        if (e.target.currentTime > 0) {
            e.target.style.height = "initial";
            e.target.style.width = "54%"
        }
    }
    if (e.target.matches('[href*="#rentWithUs"]')) {
        modal.style.animation = 'animationIn 1s forwards';
        modaloverlay.classList.add('active');
    }
   
})

btnClose.addEventListener('click', ()=>{
    modal.style.animation = 'animationOut 2s forwards';
    modaloverlay.style.transitionDelay = '.8s';
    modaloverlay.classList.remove('active');
})
