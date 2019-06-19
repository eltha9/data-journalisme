const video = document.querySelector('.video')
const videoBtn = document.querySelector('button')


videoBtn.addEventListener('click', ()=>
{
    video.play()
    video.requestFullscreen()
})
