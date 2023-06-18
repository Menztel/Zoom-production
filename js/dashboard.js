/*  DASHBOARD */


// display forms

const menuLinks = document.getElementById('menu')
const dashButton = menuLinks.children[0]
const addButton = menuLinks.children[1]
const deleteButton = menuLinks.lastElementChild.firstElementChild
const addContainer = document.getElementById('add-container')
const projectFile = document.getElementById("file")
const annexeFiles = document.getElementById("multi-file")
const mainText = document.getElementById('main-text')
const modif = document.getElementById('modif-container')
const deleteContainer = document.getElementById('delete')
const messageBox = document.getElementById("message")


// Hide the alert message after inserted or error
const time = setTimeout(hideMessage, 5000);
function hideMessage(){
    messageBox.style.display = "none"
}


dashButton.addEventListener('click', () => {
    mainText.style.display = "flex"
    addContainer.style.display = "none"
    deleteContainer.style.display = "none"
});

addButton.addEventListener('click', () => {
    addContainer.style.display = "flex"
    mainText.style.display = "none"
    deleteContainer.style.display = "none"
});



deleteButton.addEventListener('click', () => {
    addContainer.style.display = "none"
    mainText.style.display = "none"
    deleteContainer.style.display = "flex"
    deleteContainer.scrollIntoView();
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
    const body = document.getElementById("dash-body")
    const parent = document.getElementById("delete")
    
    const fullDark = document.createElement("div")
    fullDark.setAttribute("id", "full-dark-container")
    body.append(fullDark)

    // create full screen div to stop interaction
    const fullDiv = document.createElement("div")
    fullDiv.setAttribute("id","popup")


    // create div
    const div = document.createElement("div")
    div.setAttribute("id","delete-popup")

    // create text-container
    const textContainer = document.createElement("div")
    textContainer.setAttribute("id", "text-container")


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
        fullDark.remove()
        fullDiv.remove()
        div.remove()
    })

    // create button to delete the project
    const deleteProject = document.createElement("button")
    deleteProject.innerHTML = "Supprimer"
    deleteProject.setAttribute("id","delete-project")
    deleteProject.setAttribute("onclick","deleteProject" + '(' + clickedId + ')' )

    // add element in buttonDiv
    buttonDiv.appendChild(returnButton)
    buttonDiv.appendChild(deleteProject)

    // add headerText & textInformation into text-container
    textContainer.appendChild(headerText)
    textContainer.appendChild(textInformation)

    // add elements into div
    div.appendChild(textContainer)
    div.appendChild(buttonDiv)

    // add div in delete-container
    fullDiv.appendChild(div)

     // add fullDiv into parent
     parent.appendChild(fullDiv)
    
}


function deleteProject(el){
    const element = el // fetch the project div (faire attention différent de clickedId qui retourne l'id)
    const id = document.getElementById(el.id)
    const idToDelete = id.classList[1] // list all classes
    const textInformation = document.getElementById("text-information")
    const deleteButton = document.getElementById("delete-project")

    // XMLHttpRequest to delete the clicked project
    const request = new XMLHttpRequest();
    request.open('GET', 'project_integration/delete_project.php?id=' + idToDelete);
    request.onreadystatechange = function() {
        if(request.readyState === 4) {
            if(request.response) {
                element.remove();
                textInformation.innerHTML = "Le projet a bien été supprimé de la base de données !";
                deleteButton.style.visibility = "hidden";
            }
        }
    };
    request.send();
}

/**
 
*/