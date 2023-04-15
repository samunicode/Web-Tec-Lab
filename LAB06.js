function validateRegistrationForm() 
{
    const userName = document.getElementById("userName").value;
    const password = document.getElementById("password").value;
    const email = document.getElementById("email").value;
    const mobileNumber = document.getElementById("mobileNumber").value;
    const lastName = document.getElementById("lastName").value;
    const address = document.getElementById("address").value;
    const userNamePattern = /^[a-zA-Z][a-zA-Z .]{2,29}$/;
    const passwordPattern = /^(?=.*\d)(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,20}$/;
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const mobileNumberPattern = /^\d{10}$/;
    if (!userName.match(userNamePattern)) {
      alert("User name is invalid.");
      return false;
    }
    if (!password.match(passwordPattern)) {
      alert("Password is invalid.");
      return false;
    }
    if (!email.match(emailPattern)) {
      alert("Email is invalid.");
      return false;
    }
    if (!mobileNumber.match(mobileNumberPattern)) {
      alert("Mobile number is invalid.");
      return false;
    }
    if (lastName === "") {
      alert("Last name cannot be empty.");
      return false;
    }
    if (address === "") {
      alert("Address cannot be empty.");
      return false;
    }
    return true;
  }
  