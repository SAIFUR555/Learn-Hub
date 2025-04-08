<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Registration</title>
  <!-- Link to your external CSS file -->
  <link rel="stylesheet" href="../CSS/home.css">
  <!-- Link to the external JavaScript file -->
  <script src="../js/myjs.js"></script>
</head>
<body>

  <div class="form-container">
    <h2>Student Registration Form</h2>

    <form action="display.php" method="post">
      <table>
        <!-- Personal Information Section -->
        <tr>
          <th colspan="2">Personal Information</th>
        </tr>
        <tr>
          <td>Full Name:</td>
          <td><input type="text" name="name" placeholder="Enter your full name" required></td>
        </tr>
        <tr>
          <td>Student ID:</td>
          <td><input type="number" name="student_id" min="0" required></td>
        </tr>
        <tr>
          <td>Date of Birth:</td>
          <td><input type="date" name="dob" required></td>
        </tr>
        <tr>
          <td>Gender:</td>
          <td>
            <input type="radio" name="gender" value="male" required> Male
            <input type="radio" name="gender" value="female" required> Female
            <input type="radio" name="gender" value="other" required> Other
          </td>
        </tr>
        <tr>
          <td>Nationality:</td>
          <td>
            <select name="nationality">
              <option value="bangladeshi">Bangladeshi</option>
              <option value="indian">Indian</option>
              <option value="pakistani">Pakistani</option>
              <option value="chinese">Chinese</option>
              <option value="other">Other</option>
            </select>
          </td>
        </tr>

        <!-- Contact Information Section -->
        <tr>
          <th colspan="2">Contact Details</th>
        </tr>
        <tr>
          <td>Email:</td>
          <td><input type="email" name="email" required></td>
        </tr>
        <tr>
          <td>Phone Number:</td>
          <td><input type="tel" name="phone" pattern="[0-9]{10,15}" required></td>
        </tr>
        <tr>
          <td>Address:</td>
          <td><textarea name="address" rows="3" required></textarea></td>
        </tr>
        <tr>
          <td>Emergency Contact:</td>
          <td><input type="tel" name="emergency_contact" pattern="[0-9]{10,15}"></td>
        </tr>

        <!-- Department Section -->
        <tr>
          <th colspan="2">Department & Background</th>
        </tr>
        <tr>
          <td>Department:</td>
          <td>
            <select name="department">
              <option value="cse">Computer Science & Engineering</option>
              <option value="eee">Electrical & Electronic Engineering</option>
              <option value="bba">Business Administration</option>
              <option value="law">Law</option>
              <option value="other">Other</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Previous Education:</td>
          <td><input type="text" name="education" required></td>
        </tr>

        <!-- Parent/Guardian Section -->
        <tr>
          <th colspan="2">Parent/Guardian Information</th>
        </tr>
        <tr>
          <td>Guardian's Name:</td>
          <td><input type="text" name="guardian_name" required></td>
        </tr>
        <tr>
          <td>Guardian's Contact:</td>
          <td><input type="tel" name="guardian_phone" pattern="[0-9]{10,15}" required></td>
        </tr>

        <!-- Course Preferences Section -->
        <tr>
          <th colspan="2">Course Preferences</th>
        </tr>
        <tr>
          <td>Preferred Language:</td>
          <td>
            <select name="preferred_language">
              <option value="python">Python</option>
              <option value="java">Java</option>
              <option value="c++">C++</option>
              <option value="html_css">HTML & CSS</option>
              <option value="javascript">JavaScript</option>
            </select>
          </td>
        </tr>

        <!-- Social Media & Communication Section -->
        <tr>
          <th colspan="2">Social Media & Communication</th>
        </tr>
        <tr>
          <td>LinkedIn Profile:</td>
          <td><input type="url" name="linkedin"></td>
        </tr>
        <tr>
          <td>GitHub Profile:</td>
          <td><input type="url" name="github"></td>
        </tr>

        <!-- Additional Information Section -->
        <tr>
          <th colspan="2">Additional Information</th>
        </tr>
        <tr>
          <td>Hobbies/Interests:</td>
          <td><textarea name="hobbies" rows="3"></textarea></td>
        </tr>

        <!-- Course Time & Payment Section -->
        <tr>
          <th colspan="2">Course Time & Payment</th>
        </tr>
        <tr>
          <td>Preferred Course Time:</td>
          <td>
            <select name="course_time">
              <option value="morning">Morning</option>
              <option value="afternoon">Afternoon</option>
              <option value="evening">Evening</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Course Fee:</td>
          <td><input type="number" name="course_fee" min="0" placeholder="Enter course fee" required></td>
        </tr>
        <tr>
          <td>Preferred Payment Method:</td>
          <td>
            <select name="payment_method">
              <option value="credit_card">Credit Card</option>
              <option value="debit_card">Debit Card</option>
              <option value="paypal">PayPal</option>
              <option value="bank_transfer">Bank Transfer</option>
              <option value="cash">Cash</option>
            </select>
          </td>
        </tr>

        <!-- Terms and Conditions Section -->
        <tr>
          <td colspan="2" align="left">
            <input type="checkbox" name="terms" required> I agree to the <a href="#">terms and conditions</a>.
            <input type="submit" value="Register">
            <input type="reset" value="Reset">
          </td>
        </tr>
      </table>
    </form>

    <!-- JavaScript Events Section -->
    <h2>JavaScript HTML Events</h2>
    <!-- Removed inline styling; use external CSS class "button-js" -->
    <button onclick="showTime()" class="button-js">The time is?</button>
    <p id="demo"></p>

  </div>

</body>
</html>
