function validateForm() {

    document.querySelectorAll('.error').forEach(el => el.textContent = '');

  let isValid = true;

  const firstName = document.getElementById('firstName').value.trim();
  const lastName = document.getElementById('lastName').value.trim();
  const username = document.getElementById('username').value.trim();
  const password = document.getElementById('password').value;
  const confirmPassword = document.getElementById('confirmPassword').value;
  const address = document.getElementById('address').value.trim();
  const mobile = document.getElementById('mobile').value.trim();
  const gender = document.querySelector('input[name="gender"]:checked');
  const email = document.getElementById('email').value.trim();

  if (!firstName) {
    document.getElementById('firstNameError').textContent = 'First name is required.';
    isValid = false;
  }
  if (!lastName) {
    document.getElementById('lastNameError').textContent = 'Last name is required.';
    isValid = false;
  }
  if (!username) {
    document.getElementById('usernameError').textContent = 'Username is required.';
    isValid = false;
  }
  if (!password) {
    document.getElementById('passwordError').textContent = 'Password is required.';
    isValid = false;
  }
  if (password !== confirmPassword) {
    document.getElementById('confirmPasswordError').textContent = 'Passwords do not match.';
    isValid = false;
  }
  if (!address) {
    document.getElementById('addressError').textContent = 'Address is required.';
    isValid = false;
  }
  if (!/^\d{10}$/.test(mobile)) {
    document.getElementById('mobileError').textContent = 'Enter a valid 10-digit mobile number.';
    isValid = false;
  }
  if (!gender) {
    document.getElementById('genderError').textContent = 'Please select a gender.';
    isValid = false;
  }
  if (!/\S+@\S+\.\S+/.test(email)) {
    document.getElementById('emailError').textContent = 'Enter a valid email ID.';
    isValid = false;
  }

  if (isValid) {
    alert('Form submitted successfully!');
  }
}