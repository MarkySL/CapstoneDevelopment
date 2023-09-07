// Get the modal and buttons
var modal = document.getElementById("myModal");
var openModalBtn = document.getElementById("openModalBtn");
var closeModalBtn = document.getElementById("closeModalBtn");

// Open the modal when the open button is clicked
openModalBtn.addEventListener("click", function () {
  modal.style.display = "block";
});

// Close the modal when the close button is clicked
closeModalBtn.addEventListener("click", function () {
  modal.style.display = "none";
});

// Close the modal if the user clicks outside the modal content
window.addEventListener("click", function (event) {
  if (event.target === modal) {
    modal.style.display = "none";
  }
});

// Prevent the form from submitting for this example
document.getElementById("myForm").addEventListener("submit", function (e) {
  e.preventDefault();
  // You can handle form submission here
});
