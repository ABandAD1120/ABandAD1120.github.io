document.getElementById("contactForm").addEventListener("submit", function(event) {
  event.preventDefault(); // Prevent form submission to allow custom handling
  
  const formData = new FormData(event.target);
  const data = {};
  formData.forEach((value, key) => {
    data[key] = value;
  });

  // Sending form data to the server using fetch API
  fetch("send_email.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify(data)
  })
  .then(response => response.json())
  .then(result => {
    alert(result.message); // Show success or error message
  })
  .catch(error => {
    console.error("Error:", error);
    alert("An error occurred. Please try again later.");
  });
});
