function validateForm(event) {
  event.preventDefault();

  var name = document.getElementById("name").value.trim();
  var studentId = document.getElementById("student_id").value.trim();
  var password = document.getElementById("password").value.trim();
  var dob = document.getElementById("dob").value.trim();
  var genderMale = document.getElementById("gender_male").checked;
  var genderFemale = document.getElementById("gender_female").checked;
  var genderOther = document.getElementById("gender_other").checked;
  var email = document.getElementById("email").value.trim();
  var phone = document.getElementById("phone").value.trim();
  var picture = document.getElementById("student_picture").value.trim();
  var terms = document.getElementById("terms").checked;

  // Clear the error text manually 
  document.getElementById("nameError").innerHTML = "";
  document.getElementById("studentIdError").innerHTML = "";
  document.getElementById("passwordError").innerHTML = "";
  document.getElementById("dobError").innerHTML = "";
  document.getElementById("genderError").innerHTML = "";
  document.getElementById("emailError").innerHTML = "";
  document.getElementById("phoneError").innerHTML = "";
  document.getElementById("photoError").innerHTML = "";
  document.getElementById("termsError").innerHTML = "";

  if (name === "")
     {
    document.getElementById("nameError").innerHTML = "Name is required";
    return false;
  }

  if (studentId === "")
     {
    document.getElementById("studentIdError").innerHTML = "Student ID is required";
    return false;
  }
  if (password === "") {
  document.getElementById("passwordError").innerHTML = "Password is required";
  return false;
} 
else if (password.length < 6) {
  document.getElementById("passwordError").innerHTML = "Password must be at least 6 characters long";
  return false;
}


  if (dob === "")
     {
    document.getElementById("dobError").innerHTML = "Date of Birth is required";
    return false;
  }

  if (!genderMale && !genderFemale && !genderOther) 
    {
    document.getElementById("genderError").innerHTML = "Please select gender";
    return false;
  }

  if (email === "") 
    {
    document.getElementById("emailError").innerHTML = "Email is required";
    return false;
  }

  var phonePattern = /^\d{10,15}$/;
  if (!phonePattern.test(phone)) {
    document.getElementById("phoneError").innerHTML = "Phone must be 10 to 15 digits";
    return false;
  }

  if (picture === "")
     {
    document.getElementById("photoError").innerHTML = "Please upload a photo";
    return false;
  }

  if (!terms) 
    {
    document.getElementById("termsError").innerHTML = "You must agree to terms";
    return false;
  }

  // Submit the form if everything is valid
  event.target.submit();
}
