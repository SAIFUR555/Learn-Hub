<!DOCTYPE html>
<html>
<body>

<h1>Mentor's Registration Form:</h1>

<form action="action_page.php" method="post" enctype="multipart/form-data">

<h3>Account Information:</h3>

  <table>
    <tr>
       <td><label for="username">Username:</label></td>
       <td><input type="text" id="username" name="username"></td>
       <td><label for="photo">Upload Photo:</label></td>
       <td><input type="file" id="photo" name="photo"></td>
    </tr>
    <tr>
       <td><label for="password">Password:</label></td>
       <td><input type="password" id="password" name="password"></td>
       <td><label for="confirm_password">Confirm Password:</label></td>
       <td><input type="password" id="confirm_password" name="confirm_password"></td>
    </tr>
    <tr>
       <td><label for="connected_email">Email for Verification:</label></td>
       <td><input type="email" id="connected_email" name="connected_email"></td>
    </tr>
   </table>
   <br><br>

   <h3>Personal Information:</h3>

  <table>
    <tr>
      <td><label for="fname">First name:</label></td>
      <td><input type="text" id="fname" name="fname"></td>
      <td><label for="lname">Last name:</label></td>
      <td><input type="text" id="lname" name="lname"></td>
    </tr>
    <tr>
      <td><label for="dob">Date of Birth:</label></td>
      <td><input type="date" id="dob" name="dob"></td>
      <td><label for="age">Age:</label></td>
      <td><input type="number" id="age" name="age" min="0" required></td>
    </tr>
    <tr>
      <td><label for="gender">Gender:</label></td>
      <td>
        <select id="gender" name="gender">
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
      </td>
    </tr>
  </table>

  <br><br>  

  <h3>Contact Informations :</h3>

  <table>
    <tr>
      <td><label for="Paddress">Present Address:</label></td>
      <td><textarea id="Paddress" name="Paddress"></textarea></td>
      <td><label for="P2address">Permanent Address:</label></td>
      <td><textarea id="P2address" name="P2address"></textarea></td>
    </tr>
    <tr>
      <td><label for="phone">Phone:</label></td>
      <td><input type="tel" id="phone" name="phone"></td>
      <td><label for="email">Email:</label></td>
      <td><input type="email" id="email" name="email"></td>
    </tr>
    <tr>
      <td><label for="linkedin">Linkedin:</label></td>
      <td><input type="url" id="linkedin" name="linkedin"></td>
      <td><label for="github">Github:</label></td>
      <td><input type="url" id="github" name="github"></td>
    </tr>
  </table>

  <h3>Educational Qualifications :</h3>

  <table>
    <tr>
      <td><b>Honour's</b></td>
      <td><label for="subject">Subject:</label></td>
      <td><input type="text" id="subject" name="subject"></td>
      <td><label for="institute">Institute:</label></td>
      <td><input type="text" id="institute" name="institute"></td>
      <td><label for="year">Year:</label></td>
      <td><input type="number" id="year" name="year" max="2025" min="0" required></td>
    </tr>
    <tr>
      <td><b>Masters (if any)</b></td>
      <td><label for="subject">Subject:</label></td>
      <td><input type="text" id="subject" name="subject"></td>
      <td><label for="institute">Institute:</label></td>
      <td><input type="text" id="institute" name="institute"></td>
      <td><label for="year">Year:</label></td>
      <td><input type="number" id="year" name=