const giveaway = document.getElementById('giveawayform');
const giveawaysubmit = document.getElementById('giveaway-submit');

giveaway.addEventListener('submit', e => {
	e.preventDefault();
	console.log("Prevent Default activated");
});

giveawaysubmit.addEventListener("click", function () {

	const requestContact = new XMLHttpRequest();

	requestContact.onload = () => {
		let responseObject = null;

		try {

		responseObject = JSON.parse(requestContact.responseText);
		console.log(responseObject);


		if(responseObject.success) {
			var successMessage = document.getElementById('success');
			successMessage.textContent = responseObject.success;
		}

        // https://stackoverflow.com/questions/43309712/how-to-check-if-a-value-is-not-null-and-not-empty-string-in-js
		if(responseObject.giveaway_emailError !== '' && responseObject.giveaway_nameError !=='' && responseObject.messageError !=='') {
			var errorMessage = document.getElementById('error');
			errorMessage.textContent = responseObject.mailError;
			errorMessage.textContent = responseObject.emptyErrorFailure;
		}

		if(responseObject.success) {
			var successMessage = document.getElementById('success');
			successMessage.textContent = responseObject.success;
		}

		if(responseObject.giveaway_nameError) {
			var nameErrorMessage = document.getElementById('nameError');
			nameErrorMessage.textContent = responseObject.giveaway_nameError;
		}
		if(responseObject.giveaway_emailError) {
			var emailErrorMessage = document.getElementById('emailError');
			emailErrorMessage.textContent = responseObject.giveaway_emailError;
		}

        if(responseObject.messageError) {
			var messageErrorMessage = document.getElementById('messageError');
			messageErrorMessage.textContent = responseObject.messageError;
		}

		} catch (e) {
            console.log(requestContact.responseText);
			console.error('Could not parse JSON!');
		}
	};

	const contactData = `giveaway_name=${giveaway.giveaway_name.value}&giveaway_email=${giveaway.giveaway_email.value}&giveaway_message=${giveaway.giveaway_message.value}`;

	requestContact.open('post', 'homepage/giveaway/giveaway.php');
	requestContact.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	requestContact.send(contactData);
});
