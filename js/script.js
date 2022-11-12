const mainMenu = document.querySelector('.mainMenu');
const closeMenu = document.querySelector('.closeMenu');
const openMenu = document.querySelector('.openMenu');
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




/// Header Dropdown Menu

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */

const arrow = document.getElementById("arrow");
const button = document.getElementsByClassName("dropbtn");
button[0].addEventListener('click', function(){
    button[0].style.transform = "translateY(-10px)";
    arrow.style.transform = "rotate(90deg)";
    const li = document.getElementsByClassName("dropdown-content");
    let i;
    for(i = 0; i < li.length; i++){
        console.log(li[i]);
        li[i].classList.toggle("show");
};
});


// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
        button[0].style.transform = "translateY(0)";
        arrow.style.transform = "rotate(0deg)";
        }
    }
    }
}




/// Show the addForm

function showForm() {
    const formDiv = document.getElementById("formDiv").style.visibility = "visible";
    const removeButton = document.getElementById("removeForm").style.visibility = "visible";
}

function removeForm() {
    const removeForm = document.getElementById("formDiv").style.visibility = "hidden";
    const removeButton = document.getElementById("removeForm").style.visibility = "hidden";
}


/// Admin toggle burger menu
function toggleSidebar()
{
    document.body.classList.toggle("open");
} 



/// Ajouter une box pour un nouveau projet


/*function addProject() {

    // Variable pour le nom des pages

    const brandingPage = document.getElementById("main-branding");
    const photographiePage = document.getElementById("main-photographie");
    const motiondesignPage = document.getElementById("main-motion-design");
    const illustrationgPage = document.getElementById("main-illustration");
    const editionPage = document.getElementById("main-edition");
    const evenementielPage = document.getElementById("main-evenementiel");
    
   
    const brandingCards = document.getElementById("cards-branding");
    const photographieCards = document.getElementById("cards-photographie");
    const motiondesignCards= document.getElementById("cards-motion-design");
    const illustrationgCards = document.getElementById("cards-illustration");
    const editionCards = document.getElementById("cards-edition");
    const evenementielCards = document.getElementById("cards-evenementiel");

    const projectTitleInput = document.getElementById("addForm-title");
    const projectPageNameSelect = document.getElementById("addForm-page-name");
    const projectImageInput = document.getElementById("file");

    const projectTitle = projectTitleInput.value;

    const selectedOption = projectPageNameSelect.option[projectPageNameSelect.selectedIndex];
    const pageName = selectedOption.innerHTML;

    const projectImage = projectImageInput.value;
    
    const project = {
        title: projectTitle,
        pageName: pageName,
        image: projectImage
    };


              
}


function addProjectToMain(g) {
    // Convertir l'objet project en tableau et le parcourir pour récuperer les valeurs
    
    const projectValues = Object.values(project);
    
        
    // création de la box 
    const box = document.createElement("div");
        box.className = "box";

    const imgBox = document.createElement("div");
    imgBox.className = "imgBox";
        const img = document.createElement("img");
            img.src = project.image; 
            imgBox.appendChild(img);

    const voile = document.createElement("div");
        voile.className = "voile";

        const overlay = document.createElement("div");
            overlay.className = "overlay";
            voile.appendChild(overlay);

                const spanTitle = createElement("span");
                    spanTitle.innerHTML = project.title;
                    overlay.appendChild(spanTitle);

    const colorBox = document.createElement("div");
    colorBox.className = "colorBox";
        
    // Ajout des differents elements dans la box

     box.appendChild(imgBox);
     box.appendChild(voile);
     box.appendChild(colorBox);   

    // Ajout de la box dans la grille correspondante à la page selectionné

     if(project.pageName === "Branding"){brandingCards.appendChild(box);}
     if(project.pageName === "Photographie"){photographieCards.appendChild(box);}
     if(project.pageName === "Motion design"){motiondesignCards.appendChild(box);}
     if(project.pageName === "Illustration"){illustrationgCards.appendChild(box);}
     if(project.pageName === "Edition"){editionCards.appendChild(box);}
     if(project.pageName === "Evenementiel"){evenementielCards.appendChild(box);}

}

function insertProject(g) {
    const request = new XMLHttpRequest();
    request.open('POST', 'create_project.php');
    request.onreadystatechange = function() {
        if(request.readyState === 4) {
            if(request.responseText === 'inserted') {
                addProjectToMain(g);
            }
        }
    };
    request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    const boxTab = [];
    boxTab.push("title=" + project.title);
    boxTab.push("title=" + project.pageName);
    boxTab.push("title=" + project.image);
    request.send(boxTab.join('&'));
}


function loadProject() {
    const request = new XMLHttpRequest();
    request.open('GET', 'list_project.php');
    request.onreadystatechange() = function () {
        if(request.readyState === 4) {
            const projects = request.responseText;
            const 
        }
    }
}


function removeProject() {}

*/