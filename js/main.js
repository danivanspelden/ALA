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


// sticky navbar
window.onscroll = function() {myFunction()};


var navbar = document.getElementById("navbar");


var sticky = navbar.offsetTop;


function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

// scroll
          document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener("click", function(e) {

            e.preventDefault();

            document.querySelector(this.getAttribute("href")).scrollIntoView({
                behavior: "smooth"
        });
      });
  });

  