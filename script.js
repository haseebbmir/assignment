$(document).ready(function () {
  // Show the success modal if 'success=true' is in the URL
  if (window.location.search.indexOf("success=true") > -1) {
    $("#successModal").fadeIn(); // Show the modal
  }

  // Close the modal when clicking the "x" button
  $("#closeModal").click(function () {
    $("#successModal").fadeOut();
  });
});
