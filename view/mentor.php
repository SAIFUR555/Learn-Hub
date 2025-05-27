<!DOCTYPE html> <!--Document Type= HTML5-->
<html> <!--Root Element-->
<?php

include '../control/mentorcontrollog.php';
?>
 
<head>
    <title>Mentor's Registration Form</title>
    <link rel="stylesheet"  href="../css/mentor.css">

</head>
 
<body>
 
<h1>Mentor's Registration Form:</h1>
 
<form action="" method="post" enctype="multipart/form-data">

  <!-- enctype="multipart/form-data" is used for uploading file -->
 
<h3>Account Information:</h3>
 
  <table>
    <tr>
       <td><label for="username">Username:</label></td>
       <td>
           <input type="text" id="username" name="username" >
           <div style="color:red;"><?php echo $usernameError; ?></div>
       </td>
       <td><label for="photo">Upload Photo:</label></td>
       <td>
           <input type="file" id="photo" name="photo">
           <div id="photoError" style="color:red;"></div>
       </td>
    </tr>
    <tr>
       <td><label for="password">Password:</label></td>
       <td>
           <input type="password" id="password" name="password">
       </td>
       <td><label for="confirm_password">Confirm Password:</label></td>
       <td>
           <input type="password" id="confirm_password" name="confirm_password">
           <div style="color:red;"><?php echo $passwordError;?></div>
       </td>
    </tr>
    <tr>
       <td><label for="connected_email">Email for Verification:</label></td>
       <td>
           <input type="email" id="connected_email" name="connected_email">
           <div style="color:red;"><?php echo $emailError; ?></div>
       </td>
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
      <td>
          <input type="date" id="dob" name="dob">
      </td>
      <td><label for="age">Age:</label></td>
      <td><input type="number" id="age" name="age" ></td>
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
      <td>
          <input type="tel" id="phone" name="phone" >
          <div style="color:red;"> <?php echo $phoneError; ?></div>
      </td>
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
        <td><input type="checkbox" id="cse101" name="course[]" value="CSE101 - C++"><label for="cse101">CSE101 - C++</label></td>
        <td><input type="checkbox" id="cse102" name="course[]" value="CSE102 - Java"><label for="cse102">CSE102 - Java</label></td>
        <td><input type="checkbox" id="cse201" name="course[]" value="CSE201 - Database"><label for="cse201">CSE201 - Database</label></td>
        <td><input type="checkbox" id="cse202" name="course[]" value="CSE202 - C#"><label for="cse202">CSE202 - C#</label></td>
        <td><input type="checkbox" id="cse301" name="course[]" value="CSE301 - Web Tech"><label for="cse301">CSE301 - Web Tech</label></td>
        <td><input type="checkbox" id="cse302" name="course[]" value="CSE302 - Advanced Web Tech"><label for="cse302">CSE302 - Advanced Web Tech</label></td>
        <td><input type="checkbox" id="cse303" name="course[]" value="CSE303 - Advance .net"><label for="cse303">CSE303 - Advance .net</label></td>
        <td><input type="checkbox" id="cse304" name="course[]" value="CSE304 - Programming in Python"><label for="cse304">CSE304 - Programming in Python</label></td>
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
 
<input type="submit"name = "Submit" value="Submit">
</form>
 
</body>
</html>