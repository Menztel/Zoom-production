/*const openMenu = document.getElementById("openMenu");
const mainMenu = document.getElementById("mainMenu");
const closeMenu = document.getElementById("closeMenu");
const menu_items = document.querySelectorAll('nav .mainMenu li a');




openMenu.addEventListener('click',show);
closeMenu.addEventListener('click',close);

// close menu when you click on a menu item 
menu_items.forEach(item => {
    item.addEventListener('click',function(){
        close();
    })
})

function show(){
    mainMenu.style.display = 'flex';
    mainMenu.style.top = '0';
}
function close(){
    mainMenu.style.top = '-100%';
}



// Show the addForm

function showForm() {
    const formDiv = document.getElementById("formDiv").style.visibility = "visible";
    const removeButton = document.getElementById("removeForm").style.visibility = "visible";
};

function removeForm() {
    const removeForm = document.getElementById("formDiv").style.visibility = "hidden";
    const removeButton = document.getElementById("removeForm").style.visibility = "hidden";
};


// Admin toggle burger menu
function toggleSidebar()
{
    document.body.classList.toggle("open");
};

*/

// display forms

const menuLinks = document.getElementById('menu');
const dashButton = menuLinks.children[0];
const addButton = menuLinks.children[1];
const modifButton = menuLinks.children[2];
const deleteButton = menuLinks.lastElementChild.firstElementChild;

const mainContainer = document.getElementById('main-container');
const mainText = document.getElementById('main-text');
const project = document.getElementById('project');
const annexe = document.getElementById('annexe');
const modif = document.getElementById('modif-container');
const deleteContainer = document.getElementById('delete-container');


dashButton.addEventListener('click', () => {
    mainText.style.display = 'flex';
    project.style.display = 'none';
    annexe.style.display = 'none';
    deleteContainer.style.display = 'none';
});

addButton.addEventListener('click', () => {
    mainText.style.display = 'none';
    project.style.display = 'flex';
    annexe.style.display = 'flex';
});

modifButton.addEventListener('click', () => {
    mainText.style.display = 'none';
    project.style.display = 'none';
    annexe.style.display = 'none';
    modif.style.display = 'flex';
});


deleteButton.addEventListener('click', () => {
    mainContainer.style.gap = '0';
    mainText.style.display = 'none';
    deleteContainer.style.display = 'grid';
})

