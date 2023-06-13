	function submitForm(){
    		var nama = document.getElementById("nama").value;
    		var email = document.getElementById("email").value;
    		var pesan = document.getElementById("pesan").value;
    		if(nama == "" || email == "" || pesan == ""){
    			alert("Mohon isikan semua isian form sebelum klik tombol kirim!");
    		}else{
    			var hariIni = new Date();
    			var date = hariIni.toLocaleDateString();
    			alert("Terima kasih! Pesan Anda telah terkirim pada tanggal " + date + ".");
    		}

    	}
