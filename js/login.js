function validateLoginForm(event) {
  event.preventDefault(); // Prevent default form submission

  // Get input values
  var studentId = document.getElementById("student_id").value.trim();
  var password = document.getElementById("password").value.trim();

  // Clear previous error messages
  document.getElementById("studentIdError").innerHTML = "";
  document.getElementById("passwordError").innerHTML = "";

  // Validate Student ID
  if (studentId === "") {
    document.getElementById("studentIdError").innerHTML = "Student ID is required";
    return false;
  }

  // Validate Password
  if (password === "") {
    document.getElementById("passwordError").innerHTML = "Password is required";
    return false;
  }

  // Submit the form if valid
  event.target.submit();
}
