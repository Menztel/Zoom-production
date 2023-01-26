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
const deleteContainer = document.getElementById('delete');


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
    deleteContainer.style.display = 'flex';
})



// ONLOAD to reload fetch projects with page_name filter

$(document).ready(function(){
    $("#filter-page").on('change', function(){
        let value = $(this).val(); // take the value of filter_page select
        //alert(value);

        $.ajax({
            url: "project_integration/fetch_project.php",
            type: "POST",
            data: 'request=' + value, // create variable to send the request
            beforeSend:function(){
                $("#delete-container").html("<span>Chargement..</span>"); // create a span before send
            },
            success:function(data){
                $("#delete-container").html(data); // return succes of request sended
            }
        });
    });
});

// Fetch project id when clicked

function fetchIdProject(clickedId){
    const parent = document.getElementById("main-container")
    
    // create full screen div to stop interaction
    const fullDiv = document.createElement("div")
    fullDiv.setAttribute("id","popup")


    // create div
    const div = document.createElement("div")
    div.setAttribute("id","delete-popup")

    // create header text div
    const headerText = document.createElement("p")
    headerText.innerHTML = "Supprimer un projet"
    headerText.setAttribute("id","header-text")

    // create text area for information

    const textInformation = document.createElement("p")
    textInformation.innerHTML = "Es-tu sûr de vouloir supprimer " + clickedId + " ?"
    textInformation.setAttribute("id","text-information")

    // create div to store buttons
    const buttonDiv = document.createElement("div")
    buttonDiv.setAttribute("id","button-div")

    // create button to delete the popup
    const returnButton = document.createElement("button")
    returnButton.innerHTML = "Quitter"
    returnButton.setAttribute("id","return-back")
    returnButton.addEventListener("click", () => {
        fullDiv.remove()
        div.remove()
    })

    // create button to delete the project
    const deleteProject = document.createElement("button")
    deleteProject.innerHTML = "Supprimer"
    deleteProject.setAttribute("id","delete-project")

    // add element in buttonDiv
    buttonDiv.appendChild(returnButton)
    buttonDiv.appendChild(deleteProject)

    // add elements into div
    div.appendChild(headerText)
    div.appendChild(textInformation)
    div.appendChild(buttonDiv)

    // add div in delete-container
    fullDiv.appendChild(div)

     // add fullDiv into parent
     parent.appendChild(fullDiv)
    
}