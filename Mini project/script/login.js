function validateId() {
    var email = document.getElementById('id').value;
    if(email == null || email == undefined || email == '') {
      alert('Id is required');
      return;
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
    