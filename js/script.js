/*  HEADER  */

const mainMenu = document.getElementById('mainMenu');
const closeMenu = document.getElementById('closeMenu');
const openMenu = document.getElementsByClassName('openMenu');
const menu_items = document.querySelectorAll('nav #mainMenu li a');
const arrow = document.getElementById("arrow");
const dropMenu = document.getElementById("dropMenu");
const drop = document.getElementById("drop");
const button = document.getElementsByClassName("dropbtn");


openMenu[0].addEventListener('click', () => {
    mainMenu.style.display = 'flex';
    mainMenu.style.top = '0';
});

closeMenu.addEventListener('click', () => {
    mainMenu.style.top = '-100%';
});

// close menu when you click on a menu item 
menu_items.forEach(item => {
    item.addEventListener('click',function(){
        mainMenu.close();
    })
})

// Video in index.php

const width = (screen.width > 0) ? screen.width : window.innerWidth;
const hero = document.getElementsByClassName("hero")
const video = document.querySelector(".hero video")

const newVideo = document.createElement("video")
newVideo.setAttribute("id", "new-video")
newVideo.src = "ZOOM-TEASER-1080x1920-son.mp4"
newVideo.muted = true
newVideo.loop = true
newVideo.autoplay = true
newVideo.setAttribute("type", "video/mp4")

hero[0].appendChild(newVideo)


if(width < 1024){
    video.remove()
    hero[0].appendChild(newVideo)
}

if(width >= 1024){
    newVideo.remove()
    hero[0].appendChild(video)
}