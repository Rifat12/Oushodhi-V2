function validate() {
  const password = document.reg.password.value;
  const confirmpassword = document.reg.confirmpassword.value;
  const name = document.reg.name.value;
  const user = document.reg.username.value;
  const color = document.reg.fav.value;

  function validateEmail() {
    var emailID = document.reg.email.value;
    atpos = emailID.indexOf("@");
    dotpos = emailID.lastIndexOf(".");

    if (atpos < 1 || dotpos - atpos < 2) {
      return false;
    }
    return true;
  }

  function nameValidation() {
    newname = document.reg.name.value;
    fullname = newname.trim();
    for (let i = 0; i < fullname.length; i++) {
      if (
        !(fullname.charCodeAt(i) >= 97 && fullname.charCodeAt(i) <= 122) &&
        !(fullname.charCodeAt(i) >= 65 && fullname.charCodeAt(i) <= 90)
      ) {
      }
    }
    return false;
  }

  function isSpecial(str) {
    for (var i = 0; i < str.length; i++) {
      if (
        str[i] === "@" ||
        str[i] === "#" ||
        str[i] === "$" ||
        str[i] === "%"
      ) {
        return true;
      }
    }
    return false;
  }

  if (name == "") {
    document.reg.name.focus();
    //alert("Please provide your name!");
    document.querySelector("#name").innerHTML = "Name can't be empty";
    return false;
  }

  if (name < 5) {
    document.reg.name.focus();
    //alert("Please provide your name!");
    document.querySelector("#name").innerHTML =
      "Name must only be Alphabetical and minimum 5 characters!";
    return false;
  }

  if (document.reg.email.value == "" || !validateEmail()) {
    //alert("Please provide your Email!");
    document.querySelector("#email").innerHTML = "Enter a valid E-mail";
    document.reg.email.focus();
    return false;
  }

  if (user == "") {
    document.querySelector("#user").innerHTML = "Please provide your username!";
    //alert();
    document.reg.username.focus();
    return false;
  }

  if (password == "") {
    document.querySelector("#pass").innerHTML = "Please provide your password!";
    //alert("Please provide your password!");
    return false;
  }

  if (password != confirmpassword) {
    document.querySelector("#pass").innerHTML = "Passwords don't match";
    return false;
  }

  if (!isSpecial(password) && !(password.length < 8)) {
    document.querySelector("#pass").innerHTML =
      "Password must have a special character and be at leastr 8 characters";
    return false;
  }

  if (color == "") {
    document.querySelector("#fav").innerHTML =
      "Please enter your favourite color!";
    //alert("Please provide your password!");
    return false;
  }

  if (!isNaN(document.reg.date.value)) {
    document.querySelector("#date").innerHTML = "Please provide your DOB!";
    document.reg.date.focus();
    return false;
  }

  if (!isNaN(document.reg.gender.value)) {
    document.querySelector("#gender").innerHTML = "Please select your Gender!";
    document.reg.date.focus();
    return false;
  }

  return true;
}
