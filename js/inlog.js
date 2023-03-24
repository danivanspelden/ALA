var modal = document.getElementById("myModal");
var span = document.getElementsByClassName("close")[0];

// Function to open the login form
function openForm() {
  modal.style.display = "block";
}

// Function to close the login form
function closeForm() {
  modal.style.display = "none";
}

function keepFormOpen() {
  openForm();
}

window.onload = keepFormOpen;