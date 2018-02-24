function addItem(id) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4) {
			if (this.status == 200) {
				console.log('ajax response', this.responseText);
			} else {
				console.log('not cool');
			}
		}
	};
	xhttp.open("POST", "https://calm-wave-20284.herokuapp.com/login.php", true);
	xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xhttp.send('item=' + id);