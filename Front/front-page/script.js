
const menu = document.querySelector('.open-menu')
const menuBtn = document.querySelector('.burger-menu')

const search = document.querySelector('.open-search')
const searchBtn = document.querySelector('.search-menu')

let burgerMenuOpen=false 
let searchMenuOpen=false 

menuBtn.addEventListener('click', ()=>
{
    if(burgerMenuOpen)
    {
        menu.classList.remove('open')
        menuBtn.classList.remove('open')
        burgerMenuOpen=false
    } else
    {
        menu.classList.add('open')
        menuBtn.classList.add('open')
        burgerMenuOpen=true
    }
})


searchBtn.addEventListener('click', ()=>
{
    if(searchMenuOpen)
    {
        search.classList.remove('open')
        searchMenuOpen=false
    } else
    {
        search.classList.add('open')
        searchMenuOpen=true
    }
})