/*  HEADER  */

const mainMenu = document.getElementById('mainMenu');
const closeMenu = document.getElementById('closeMenu');
const openMenu = document.getElementsByClassName('openMenu');
const menu_items = document.querySelectorAll('nav #mainMenu li a');
const arrow = document.getElementById("arrow");
const dropMenu = document.getElementById("dropMenu");
const drop = document.getElementById("drop");
const button = document.getElementsByClassName("dropbtn");


console.log(openMenu)[0];

openMenu.addEventListener('click', () => {
    mainMenu.style.display = 'flex';
    mainMenu.style.top = '0';
});

closeMenu.addEventListener('click', () => {
    mainMenu.style.top = '-100%';
});

// close menu when you click on a menu item 
menu_items.forEach(item => {
    item.addEventListener('click',function(){
        close();
    })
})



