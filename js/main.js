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

  // Controleer of de gebruiker is ingelogd en haal de gebruikersnaam op
  const isUserLoggedIn = true;
  let username;
  // const username = getUsername(); // fictieve functie om de gebruikersnaam op te halen

  // Controleer of de gebruikersnaam "admin" is en laat de knop zien als dat zo is
  if (isUserLoggedIn && username === "admin") {
    showEditButton();
  }

  function showEditButton() {
    const editLink = document.getElementById("edit-link"); // haal het element met de ID "edit-link" op
    const contentId = getContentId(); // haal het ID van de inhoud op die moet worden bewerkt
    const currentUser = getCurrentUser(); // haal de huidige gebruikersnaam op
  
    // Controleer of de huidige gebruiker de juiste rechten heeft om de knop te zien
    if (currentUser === "admin") {
      // Stel de href-link in op de juiste bewerkings-URL met het ID van de inhoud
      editLink.href = `edit.php?id=${contentId}`; // verander "edit.php" door de juiste bewerkings-URL van je applicatie
      editLink.style.display = "block"; // laat de link zien
    } else {
      editLink.style.display = "none"; // verberg de link als de huidige gebruiker geen admin is
    }

    // Controleer of de huidige gebruiker de juiste rechten heeft om de knop te zien
    if (currentUser === "Noach") {
      // Stel de href-link in op de juiste bewerkings-URL met het ID van de inhoud
      editLink.href = `edit.php?id=${contentId}`; // verander "edit.php" door de juiste bewerkings-URL van je applicatie
      editLink.style.display = "none"; // laat de link zien
    }
  }

		window.addEventListener('scroll', function() {
			var nav = document.querySelector('nav');
			nav.classList.toggle('sticky', window.scrollY > 0);
		});
	
    // filedrop

    const dropZone = document.querySelector(".drop-zone");
const input = dropZone.querySelector(".drop-zone__input");

dropZone.addEventListener("click", (e) => {
    input.click();
});

dropZone.addEventListener("dragover", (e) => {
    e.preventDefault();
    dropZone.classList.add("drop-zone--over");
});

["dragleave", "dragend"].forEach((type) => {
    dropZone.addEventListener(type, (e) => {
        dropZone.classList.remove("drop-zone--over");
    });
});

dropZone.addEventListener("drop", (e) => {
    e.preventDefault();

    if (e.dataTransfer.files.length) {
        input.files = e.dataTransfer.files;
        console.log(input.files);
    }

    dropZone.classList.remove("drop-zone--over");
});