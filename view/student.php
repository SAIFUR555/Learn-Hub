<!-- view/student.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Registration</title>
  <link rel="stylesheet" href="../css/student.css">
</head>
<body>

<?php include '../control/studentcontrollog.php'; ?>

<h2>Student Registration Form</h2>

<div class="form-container">
  <form action="" method="post" enctype="multipart/form-data">
    <table>
      <tr><th>Personal Information</th></tr>
      <tr>
        <td>Full Name:</td>
        <td>
          <input type="text" name="name" id="name">
          <span style="color:red;"><?php echo $nameError ?? ''; ?></span>
        </td>
      </tr>
      <tr>
        <td>Student ID:</td>
        <td>
          <input type="number" name="student_id" id="student_id">
          <span style="color:red;"><?php echo $studentIdError ?? ''; ?></span>
        </td>
      </tr>
      <tr>
        <td>Password:</td>
        <td>
          <input type="password" name="password" id="password">
          <span style="color:red;"><?php echo $passwordError ?? ''; ?></span>
        </td>
      </tr>
      <tr>
        <td>Date of Birth:</td>
        <td>
          <input type="date" name="dob" id="dob">
          <span style="color:red;"><?php echo $dobError ?? ''; ?></span>
        </td>
      </tr>
      <tr>
        <td>Gender:</td>
        <td>
          <input type="radio" name="gender" value="male"> Male
          <input type="radio" name="gender" value="female"> Female
          <input type="radio" name="gender" value="other"> Other
          <span style="color:red;"><?php echo $genderError ?? ''; ?></span>
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

      <tr><th>Contact Details</th></tr>
      <tr>
        <td>Email:</td>
        <td>
          <input type="email" name="email" id="email">
          <span style="color:red;"><?php echo $emailError ?? ''; ?></span>
        </td>
      </tr>

      <tr>
        <td>Phone Number:</td>
        <td>
          <input type="tel" name="phone" id="phone" pattern="[0-9]{10,15}">
          <span style="color:red;"><?php echo $phoneError ?? ''; ?></span>
        </td>
      </tr>
      <tr>
        <td>Address:</td>
        <td>
          <textarea name="address" id="address"></textarea>
          <span style="color:red;">  <?php echo $addressError ?? ''; ?>   </span>
        </td>
      </tr>
      <tr>
        <td>Emergency Contact:</td>
        <td>
          <input type="tel" name="emergency_contact" id="emergency_contact" pattern="[0-9]{10,15}">
        </td>
      </tr>

      <tr><th>Department & Background</th></tr>
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
        <td>
          <input type="text" name="education" id="education">
        </td>
      </tr>

      <tr><th>Guardian Information</th></tr>
      <tr>
        <td>Guardian's Name:</td>
        <td><input type="text" name="guardian_name" id="guardian_name"></td>
      </tr>
      <tr>
        <td>Guardian's Contact:</td>
        <td><input type="tel" name="guardian_phone" id="guardian_phone" pattern="[0-9]{10,15}"></td>
      </tr>

      <tr>
        <td colspan="2">
          <input type="submit" name="Submit" value="Register">
          <input type="reset" value="Reset">
        </td>
      </tr>
    </table>
  </form>
</div>

</body>
</html>
