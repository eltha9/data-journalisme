
const menu = document.querySelector('.open-menu')
const menuBtn = document.querySelector('.burger-menu')

let menuOpen=false 

menuBtn.addEventListener('click', ()=>
{
    if(menuOpen)
    {
        menu.classList.remove('open')
        menuBtn.classList.remove('open')
        menuOpen=false
    } else
    {
        menu.classList.add('open')
        menuBtn.classList.add('open')
        menuOpen=true
    }
})