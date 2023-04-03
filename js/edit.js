function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}


var modal = document.getElementById("myModal");


var btn = document.getElementById("myBtn");


var span = document.getElementsByClassName("close")[0];


btn.onclick = function() {
  modal.style.display = "block";
}


span.onclick = function() {
  modal.style.display = "none";
}


window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


// Inlog


const isUserLoggedIn = true;
let username;

if (isUserLoggedIn && username === "admin") {
  showEditButton();
}

function showEditButton() {
  const editLink = document.getElementById("edit-link");
  const contentId = getContentId(); 
  const currentUser = getCurrentUser();

 
  if (currentUser === "admin") {

    editLink.href = `edit.php?id=${contentId}`; 
    editLink.style.display = "block";
  } else {
    editLink.style.display = "none"; 
  }

  
  if (currentUser === "Noach") {
   
    editLink.href = `edit.php?id=${contentId}`; 
    editLink.style.display = "none"; 
  }
}

  window.addEventListener('scroll', function() {
    var nav = document.querySelector('nav');
    nav.classList.toggle('sticky', window.scrollY > 0);
  });

// vragen
window.addEventListener("load", (event) => {
    vraag1.style.width = "28vw";
  });

document.getElementById("gearButton").addEventListener("click", toggleWidth);

function toggleWidth() {
    var vraag1 = document.getElementById("vraag1");
    var plusButton = document.getElementById("plusButton");
    var minusButton = document.getElementById("minusButton");
    let vraag1text = document.getElementById("vraag1text");
    var gear = document.getElementById("gearButton")
    vraag1text.disabled = false
    if (vraag1.style.width == "28vw") {
      vraag1.style.width = "38vw";
      vraag1text.style.width = "30vw"
      gearButton.style.transform = 'rotate(90deg)';
      setTimeout(function() { 
        plusButton.style.opacity = "1";
        minusButton.style.opacity = "1";
        
      }, 50);
    } else {
      plusButton.style.opacity = "0";
      minusButton.style.opacity = "0";
      gearButton.style.transform = 'rotate(-90deg)';
      vraag1text.disabled = true
      setTimeout(function() { 
        vraag1.style.width = "28vw";
        vraag1text.style.width = "20vw"
      }, 100);
    }
  }

  vraag1text.disabled = true