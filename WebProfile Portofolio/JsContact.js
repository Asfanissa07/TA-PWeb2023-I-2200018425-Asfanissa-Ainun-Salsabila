document.getElementById("myForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Mencegah pengiriman form secara default
    var name = document.getElementById("nama").value;
	var email = document.getElementById("email").value;
	var message = document.getElementById("pesan").value;
	if(name !== "" && email !== "" && message !== ""){
		alert("Terimakasih, "+ name +"! Sudah mengirim pesan.");
	}
});
