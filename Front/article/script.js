const video = document.querySelector('.video')
const videoBtn = document.querySelector('button')

const menu = document.querySelector('.open-menu')
const menuBtn = document.querySelector('.burger-menu')

let menuOpen=false 

menuBtn.addEventListener('click', ()=>
{
    if(menuOpen)
    {
        menu.classList.remove('open')
        menuOpen=false
    } else
    {
        menu.classList.add('open')
        menuOpen=true
    }
})

videoBtn.addEventListener('click', ()=>
{
    video.play()
    video.requestFullscreen()
})
