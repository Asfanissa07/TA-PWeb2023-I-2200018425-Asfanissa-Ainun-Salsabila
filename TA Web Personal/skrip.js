document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the form from submitting

    // Call the sendForm() function to handle form submission
    sendForm();
  });

  function sendForm() {
    var name = document.getElementById("nama").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("pesan").value;

    if (name !== "" && email !== "" && message !== "") {
      // Submit the form to the specified URL
      fetch("proses.php", {
        method: "POST",
        body: new URLSearchParams(new FormData(document.getElementById("contactForm")))
      })
      .then(response => response.text())
      .then(result => {
        // Handle the server response here if needed
        console.log(result);
        alert("Terimakasih, " + name + "! Pesan Anda berhasil dikirim.");

        // Reset the form fields after successful submission
        document.getElementById("nama").value = "";
        document.getElementById("email").value = "";
        document.getElementById("pesan").value = "";
      })
      .catch(error => {
        console.error("Error:", error);
      });
    } else {
      alert("Mohon isi semua kolom dengan lengkap sebelum mengirim pesan.");
    }
  }

  const skillList = document.getElementById("skillList");

    // Create a new XMLHttpRequest object
    const xhr = new XMLHttpRequest();

    // Define the URL of the PHP file containing the skills
    const url = "keahlian.php";

    // Setup the AJAX request
    xhr.open("GET", url, true);

    // Set up a callback function to handle the AJAX response
    xhr.onload = function() {
      if (xhr.status === 200) {
        // If the request is successful, add the skills to the list
        skillList.innerHTML = xhr.responseText;
      } else {
        // If the request fails, display an error message
        skillList.innerHTML = "<li>Failed to load skills</li>";
      }
    };

    // Send the AJAX request
    xhr.send();