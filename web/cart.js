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
	xhttp.open("POST", "https://calm-wave-20284.herokuapp.com/cart.php", true);
	xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xhttp.send('item=' + id);
}

function removeItem(item) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState === 4) {
			if (this.status === 200 || this.status === 204) {
				console.log('Removed item', item, 'successfully');
			} else {
				console.log('Failed to remove item', item);
			}
		}
	};
	xhttp.open("POST", "https://calm-wave-20284.herokuapp.com/removeFromCart.php", true);
	xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xhttp.send('item=' + item);
}
