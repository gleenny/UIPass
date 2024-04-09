function checkFields() {
  const username = document.getElementById('username').value.trim();
  const password = document.getElementById('password').value.trim();
  const errorMessage = document.getElementById('message');

  if (username === '' || password === '') {
    // Display error message
    errorMessage.textContent = 'Please fill in all fields.';
  } else {
    // Clear error message
    errorMessage.textContent = '';

  }
}
