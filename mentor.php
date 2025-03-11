<!DOCTYPE html> <!--Document Type= HTML5-->
<html> <!--Root Element-->

<head>
    <title>Mentor's Registration Form</title>
</head>


<body>

<h1>Mentor's Registration Form:</h1>

<form action="action_page.php" method="post" enctype="multipart/form-data">
  <!-- Create a form that will send the data to action_page.php when submitted. -->
  <!-- enctype="multipart/form-data" is used for uploading file -->




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
        <select id="gender" name="gender"><!--select is used to create a drop-down menu-->
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
      <td><b><label for="subject">University Degree:</label><b></td>
      <td><input type="text" id="subject" name="subject"></td>
      <td><label for="institute">Institute:</label></td>
      <td><input type="text" id="institute" name="institute"></td>
      <td><label for="year">Year:</label></td>
      <td><input type="number" id="year" name="year"></td>
    </tr>
    <tr>
      <td><b><label for="school">School:</label></b></td>
      <td><input type="text" id="school" name="school"></td>
    </tr>
    <tr>
      <td><b><label for="college">College:</label></b></td>
      <td><input type="text" id="college" name="college"></td>
    </tr>
  </table>

  <br><br>

 <h3>Experience:</h3> 

   <table>
    <tr>
        <td><label for="organization">Organization & Address:</label></td>
        <td><textarea id="organization" name="organization"></textarea></td>
        <td><label for="designation">Designation:</label></td>
        <td><input type="text" id="designation" name="designation"></td>
        <td><label for="duration">Duration:</label></td>
        <td><input type="text" id="duration" name="duration"></td>
    </tr>


   </table>

   <br><br>

    <h3>Tutoring Subject (You can select multiple):</h3>
    
    <table>
      <tr>
        <td><input type="checkbox" id="cs" name="subject[]" value="cs"><label for="cs">Computer Science</label></td>
        <td><input type="checkbox" id="physics" name="subject[]" value="physics"><label for="physics">Physics</label></td>
        <td><input type="checkbox" id="chemistry" name="subject[]" value="chemistry"><label for="chemistry">Chemistry</label></td>
        <td><input type="checkbox" id="math" name="subject[]" value="math"><label for="math">Math</label></td>
        <td><input type="checkbox" id="accounting" name="subject[]" value="accounting"><label for="accounting">Accounting</label></td>
        <td><input type="checkbox" id="biology" name="subject[]" value="biology"><label for="biology">Biology</label></td>
        <td><input type="checkbox" id="eee" name="subject[]" value="eee"><label for="eee">EEE</label></td>
      </tr>
    </table>

    <br><br>

    <h3>Which days are you available to tutor?</h3>

    <table>
      <tr>
        <td><input type="checkbox" id="sunday" name="days[]" value="sunday"><label for="sunday">Sunday</label></td>
        <td><input type="checkbox" id="monday" name="days[]" value="monday"><label for="monday">Monday</label></td>
        <td><input type="checkbox" id="tuesday" name="days[]" value="tuesday"><label for="tuesday">Tuesday</label></td>
        <td><input type="checkbox" id="wednesday" name="days[]" value="wednesday"><label for="wednesday">Wednesday</label></td>
        <td><input type="checkbox" id="thursday" name="days[]" value="thursday"><label for="thursday">Thursday</label></td>
        <td><input type="checkbox" id="friday" name="days[]" value="friday"><label for="friday">Friday</label></td>
        <td><input type="checkbox" id="saturday" name="days[]" value="saturday"><label for="saturday">Saturday</label></td>
      </tr>
    </table>

    <br><br>

    <h3>Preferred Time:</h3>

    <table>
    <tr>
      <td><label for="time_from">From:</label></td>
      <td><input type="time" id="time_from" name="time_from"></td>
      <td><label for="time_to">To:</label></td>
      <td><input type="time" id="time_to" name="time_to"></td>
    </tr>
    </table>
    
    <br><br>

    <h3>Are you interested in offline teaching?</h3>
    <table>
      <tr>
        <td><input type="radio" id="offline_teaching_yes" name="offline_teaching" value="yes"><label for="offline_teaching_yes">Yes</label></td>
        <td><input type="radio" id="offline_teaching_no" name="offline_teaching" value="no"><label for="offline_teaching_no">No</label></td>
      </tr>
    </table>

    <br><br>

    <h3>Upload CV:</h3>
    <table>
      <tr>
        <td><input type="file" id="cv" name="cv"></td>
      </tr>
    </table>

    <br><br>

    
<input type="submit" value="Submit">
</form>

</body>
</html>