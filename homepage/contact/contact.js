const contact = document.getElementById('contact');
const contactSubmit = document.getElementById('contact-submit');

contact.addEventListener('submit', e => {
	e.preventDefault();
	console.log("!!!!!!!!!!!!!!!!!!");
});

contactSubmit.addEventListener("click", function () {
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

		if(responseObject.mailError || responseObject.emptyErrorFailure) {
			var errorMessage = document.getElementById('success');
			errorMessage.textContent = responseObject.mailError;
			errorMessage.textContent = responseObject.emptyErrorFailure;
		}

		if(responseObject.success) {
			var successMessage = document.getElementById('success');
			successMessage.textContent = responseObject.success;
		}

		if(responseObject.nameError) {
			var nameErrorMessage = document.getElementById('nameError');
			nameErrorMessage.textContent = responseObject.nameError;
		}
		if(responseObject.emailError) {
			var emailErrorMessage = document.getElementById('emailError');
			emailErrorMessage.textContent = responseObject.emailError;
		}
		if(responseObject.phoneError) {
			var phoneErrorMessage = document.getElementById('phoneError');
			phoneErrorMessage.textContent = responseObject.phoneError;
		}

		} catch (e) {
			console.error('Could not parse JSON!');
		}
	};

	const contactData = `name=${contact.name.value}&email=${contact.email.value}&phone=${contact.phone.value}&message=${contact.message.value}`;

	requestContact.open('post', 'contact/contact_process.php');
	requestContact.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	requestContact.send(contactData);
});
