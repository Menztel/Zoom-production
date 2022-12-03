const mainMenu = document.getElementsByClassName("mainMenu");
const closeMenu = document.getElementsByClassName("closeMenu");
const openMenu = document.getElementsByClassName("openMenu");
const menu_items = document.querySelectorAll('nav .mainMenu li a');


const test = document.getElementById("text-container");

console.log(test);


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




// Display addProject

function removeTextContainer() { 
    textContainer.style.display = "none";
    addProjectDiv.style.display = "flex";
    annexeProject.style.display = "unset";  
};
// Remove addProject

function removeAddProject() {
    textContainer.style.display = "flex";
    addProjectDiv.style.display = "none";
    annexeProject.style.display = "none"; 
};