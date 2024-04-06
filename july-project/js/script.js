const hamburger = document.querySelector('.hamburger');
const navLink = document.querySelector('.nav__link');

hamburger.addEventListener('click', () => {
  navLink.classList.toggle('hide');
});

if (document.getElementById('eyeIcon1')) {
  document.getElementById('eyeIcon1').addEventListener('click', () => { myFunction('passwordId1', 'eyeIcon1') });
}
if (document.getElementById('eyeIcon2')) {
  document.getElementById('eyeIcon2').addEventListener('click', () => { myFunction('passwordId2', 'eyeIcon2') });
}
if (document.getElementById('eyeIcon3')) {
  document.getElementById('eyeIcon3').addEventListener('click', () => { myFunction('passwordId3', 'eyeIcon3') });
}


// let pwShowHide = document.querySelectorAll(".pwEyeIcon");

function myFunction(myId, iconId) {
  var x = document.getElementById(myId);

  let pwShowHide = document.getElementById(iconId);

  if (x.type === "password") {
    x.type = "text";

    pwShowHide.classList.replace("uil-eye-slash", "uil-eye");


  } else {
    x.type = "password";
    pwShowHide.classList.replace("uil-eye", "uil-eye-slash");
  }
}

const form = document.getElementById('signup');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('passwordId2');
const password2 = document.getElementById('passwordId3');

form.addEventListener('submit', (event) => {
  event.preventDefault();
  validateInputs();
  
  
});

const setError = (element, message) => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector('.error');

  errorDisplay.innerText = message;
  inputControl.classList.add('error');
  inputControl.classList.remove('success')

}

const setSuccess = element => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector('.error');

  errorDisplay.innerText = '';
  inputControl.classList.add('success');
  inputControl.classList.remove('error');
};

const isValidEmail = email => {
  const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
}


const validateInputs = () => {
  const usernameValue = username.value.trim();
  const emailValue = email.value.trim();
  const passwordValue = password.value.trim();
  const password2Value = password2.value.trim();

  if (usernameValue === '') {
    setError(username, 'Username is required');
  } else {
    setSuccess(username);
  }


  if (emailValue === '') {
    setError(email, 'Email is required');
  } else if (!isValidEmail(emailValue)) {
    setError(email, 'Provide a valid email address');
  
  }else {
    setSuccess(email);
  }

  if (passwordValue === '') {
    setError(password, 'Password is required');
  } else if (passwordValue.length < 8) {
    setError(password, 'Password must be at least 8 character.')
  } else {
    setSuccess(password);
  }

  if (password2Value === '') {
    setError(password2, 'Please confirm your password');
  } else if (password2Value !== passwordValue) {
    setError(password2, "Passwords doesn't match");
  } else {
    setSuccess(password2);
  }

  if (
    usernameValue !== '' &&
    emailValue !== '' &&
    isValidEmail(emailValue) &&
    passwordValue !== '' &&
    passwordValue.length >= 8 &&
    password2Value !== '' &&
    password2Value === passwordValue
  ) {
    // Submit the form
    form.submit();
  }
};



