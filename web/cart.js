var items = {
	'one': 1,
	'two': 2,
	'three': 3,
	'four': 4,
	'five': 5,
	'six': 6,
	'seven': 7,
	'eight': 8,
	'nine': 9
};

function addItem(item) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4) {
			if (this.status == 200) {
				console.log('ajax response', this.responseText);
			} else {
				console.log('bad juju');
			}
		}
	};
	xhttp.open("POST", "https://calm-wave-20284.herokuapp.com/cart.php", true);
	xhttp.send(items[item]);
}

