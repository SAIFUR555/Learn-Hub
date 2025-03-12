<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Registration</title>
</head>

<body>

    <h2>Student Registration Form</h2>

    <form action="display.php" method="post">   
        <table border="3">
            <tr>
                <th>Personal Information</th>
            </tr>
            <tr>
                <td>Full Name:</td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td>Student ID:</td>
                <td><input type="number" name="student_id" required></td>
            </tr>
            <tr>
                <td>Date of Birth:</td>
                <td><input type="date" name="dob" required></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="female"> Female
                    <input type="radio" name="gender" value="other"> Other
                </td>
            </tr>
            <tr>
                <td>Nationality:</td>
                <td>
                    <select name="nationality">
                        <option value="bangladeshi">Bangladeshi</option>
                        <option value="indian">Indian</option>
                        <option value="pakistani">Pakistani</option>
                       <option value="Chinis">China</option>
                        <option value="other">Other</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Contact Details</th>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Phone Number:</td>
                <td><input type="tel" name="phone" required></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><textarea name="address" rows="3" required></textarea></td>
            </tr>
            <tr>
                <td>Emergency Contact:</td>
                <td><input type="tel" name="emergency_contact"></td>
            </tr>

            <tr>
                <th>Department & Background</th>
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
                <td><input type="text" name="education"  required></td>
            </tr>
            <tr>
                <td>Academic Interests:</td>
                <td><input type="text" name="academic_interests" placeholder="E.g. :Software Development"></td>
            </tr>

            <tr>
                <th>Parent/Guardian Information</th>
            </tr>
            <tr>
                <td>Guardian's Name:</td>
                <td><input type="text" name="guardian_name" required></td>
            </tr>
            <tr>
                <td>Relationship:</td>
                <td>
                    <select name="guardian_relationship">
                        <option value="father">Father</option>
                        <option value="mother">Mother</option>
                        <option value="brother">Brother</option>
                        <option value="sister">Sister</option>
                        <option value="other">Other</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Guardian's Contact:</td>
                <td><input type="tel" name="guardian_phone" required></td>
            </tr>
            <tr>
                <th>Course Preferences</th>
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
            <tr>
                <td>Have You Taken Online Courses Before?</td>
                <td>
                    <input type="radio" name="online_experience" value="yes"> Yes
                    <input type="radio" name="online_experience" value="no"> No
                </td>
            </tr>
            <tr>
                <td>Learning Goals:</td>
                <td><textarea name="learning_goals" rows="3"></textarea></td>
            </tr>
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
            <tr>
                <td>Preferred Contact Method:</td>
                <td>
                    <select name="contact_method">
                        <option value="email">Email</option>
                        <option value="phone">Phone</option>
                        <option value="whatsapp">WhatsApp</option>
                    </select>
                </td>
            </tr>

            <tr>
                <th colspan="2">Additional Information</th>
            </tr>
            <tr>
                <td>Are You Currently Employed?</td>
                <td>
                    <input type="radio" name="employed" value="yes"> Yes
                    <input type="radio" name="employed" value="no"> No
                </td>
            </tr>
            <tr>
                <td>Hobbies/Interests:</td>
                <td><textarea name="hobbies" rows="3"></textarea></td>
            </tr>

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
                <td><input type="number" name="course_fee" placeholder="Enter course fee" required></td>
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
            <tr>
                <td>Payment Status:</td>
                <td>
                    <input type="radio" name="payment_status" value="paid"> Paid
                    <input type="radio" name="payment_status" value="pending"> Pending
                </td>
            </tr>

            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Register">
                    <input type="reset" value="Reset">
                </td>
            </tr>

        </table>
    </form>

</body>
</html>
