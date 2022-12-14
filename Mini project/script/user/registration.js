function validateId() {
    var name = document.getElementById('id').value;
    if(name == null || name == undefined || name == '') {
      alert('Id is required');
      return;
    }
    if(name.length < 4) {
      alert('Id should be at least 4 characters long');
      return;
    }
}
function validateName() {
    var name = document.getElementById('name').value;
    if(name == null || name == undefined || name == '') {
      alert('Name is required');
      return;
    }
    if(name.length < 2) {
      alert('Name should be at least 2 characters long');
      return;
    }
}

function validateEmail() {
  var email = document.getElementById('email').value;
  if(email == null || email == undefined || email == '') {
    alert('Email is required');
    return;
  }

  var mailFormatRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if(!email.match(mailFormatRegex)) {
    alert("Invalid email address");
    return ;
  }
}

function validatePassword() {
  var password = document.getElementById('password').value;
  if(password == null || password == undefined || password == '') {
    alert('Password is required');
    return;
  }

  if(password.length < 4) {
    alert('Password should be at least 4 characters long');
    return;
  }
}

function validateConfirmPassword() {
  var confirmPassword = document.getElementById('confirmPassword').value;
  if(confirmPassword == null || confirmPassword == undefined || confirmPassword == '') {
    alert('Confirm Password is required');
    return;
  }

  if(confirmPassword.length < 4) {
    alert('Confirm Password should be at least 4 characters long');
    return;
  }

  var password = document.getElementById('password').value;
  if(password != confirmPassword) {
    alert('Password and confirm password do not match');
    return;
  }
}

function resetRegistration(){
  document.getElementById('id').value = '';
  document.getElementById('name').value = '';
  document.getElementById('email').value = '';
  document.getElementById('password').value = '';
  document.getElementById('confirmPassword').value = '';
}