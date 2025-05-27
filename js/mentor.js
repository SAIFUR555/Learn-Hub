function validateForm(event) {
    // Stop form from defult submitting before validation
    event.preventDefault();
 
    // Get values from the form
    var username = document.getElementById("username").value;
    var email = document.getElementById("connected_email").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm_password").value;
    var cv = document.getElementById("cv").files[0];
 
    // Clear previous error messages
    document.getElementById("usernameError").innerHTML = "";
    document.getElementById("emailError").innerHTML = "";
    document.getElementById("passwordError").innerHTML = "";
    document.getElementById("cvError").innerHTML = "";
 
    if (username == "") {
      document.getElementById("usernameError").innerHTML = "Username is required";
      return false;
    }
 
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;/*^: beginning of the string.
    [^\s@]+: string 
    @ : normal @* $: end */
    if (!emailPattern.test(email)) {
        document.getElementById("emailError").innerHTML = "Invalid email format";
        return false;
    }
 
    if (password.length < 5) {
      document.getElementById("passwordError").innerHTML = "Password must be at least 5 characters long";
      return false;
    }
 
    if (password != confirmPassword) {
      document.getElementById("passwordError").innerHTML = "Passwords do not match";
      return false;
    }
 
   
    if (!cv) {
        document.getElementById("cvError").innerHTML = "You must upload a CV";
        return false;
    }
    if (!cv.name.endsWith(".pdf")) {
        document.getElementById("cvError").innerHTML = "The CV must be in PDF format";
        return false;
    }
 
    // If everything is valid, allow form to submit
    document.querySelector("form").submit();
  }