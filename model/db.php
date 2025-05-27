<?php
$host = "localhost"; 
$dbname = "mentor_db";
$user = "root";
$pass = "";

$conn = mysqli_connect($host, $user, $pass, $dbname);
// mysqli_connect is built-in PHP function that attempts to connect to a MySQL database server.

if (!$conn)

{
    die();
    // If the connection fails, it will stop the script.
}


function insert_mentor($conn, $username, $password, $connected_email, $fname, $lname, $dob, $age, $gender, $Paddress, $P2address, $phone, $email, $linkedin, $github, $subject, $institute, $year, $school, $college, $organization, $designation, $duration, $available_days, $time_from, $time_to, $offline_teaching, $photo, $cv) 
// the parameters comes from name attributes of the form in view/mentor.php
{
    $query = "INSERT INTO mentors (
        username, password, connected_email, fname, lname, dob, age, gender,
        present_address, permanent_address, phone, email, linkedin, github,
        university_degree, institute, degree_year, school, college,
        organization, designation, duration, days, time_from, time_to,
        offline_teaching, photo, cv
    ) VALUES (
        '$username', '$password', '$connected_email', '$fname', '$lname', '$dob', $age, '$gender',
        '$Paddress', '$P2address', '$phone', '$email', '$linkedin', '$github',
        '$subject', '$institute', $year, '$school', '$college',
        '$organization', '$designation', '$duration', '$available_days', '$time_from', '$time_to',
        '$offline_teaching', '$photo', '$cv'
    )";
    // query is a string that contains an SQL INSERT statement to add a new mentor to the database.
    // inside first set of parentheses, the column names are listed, and in the second set, the values to be inserted are provided.

    mysqli_query($conn, $query);
    // mysqli_query() is a built-in PHP function that executes the SQL query.
   
    $mentor_id = mysqli_insert_id($conn);
    // mysqli_insert_id() retrieves the ID of the last inserted row.

    return $mentor_id;
    //returns the mentor ID after inserting the new mentor into the database.
}


function insert_mentor_course($conn, $mentor_id, $code) 
{
    $course_query = "SELECT id FROM course WHERE code = '$code'";
    // This query selects the course ID from the course table where the code matches the provided code.

    $course_result = mysqli_query($conn, $course_query);
    // mysqli_query() executes the SQL query to get the course ID.
    //return type is object.

   $row = mysqli_fetch_assoc($course_result);
    // mysqli_fetch_assoc() fetches a result row as an associative array.
    //The keys are the column names from the database.The values are the values from that row.


    if ($row) 
    {
    
    $course_id = $row['id'];
    $sql = "INSERT INTO mentor_course (mentor_id, course_id) VALUES ($mentor_id, $course_id)";
    mysqli_query($conn, $sql);
   }
}



function get_mentor_by_username($conn, $username)
//used for login
 {
    $result = mysqli_query($conn, "SELECT id, username, password, connected_email FROM mentors WHERE username = '$username'");
    //will return all rows where username matches $username
    //$result is not the actual data but a result set object (a pointer or handle to the data returned by the database).

    return mysqli_fetch_assoc($result);
    //will return the first row as an associative array.
}



function get_mentor_by_id($conn, $mentor_id)
//used in mentor dashboard

 {
    $result = mysqli_query($conn, "SELECT * FROM mentors WHERE id = $mentor_id");
    return mysqli_fetch_assoc($result);
}


function get_all_courses($conn)
//used in mentor course
{
    $courses = [];
    $result = mysqli_query($conn, "SELECT * FROM course");

    while ($row = mysqli_fetch_assoc($result)) {
        $courses[] = $row;
        //Adds each $row (a course) to the $courses array.
    }
    //mysqli_fetch_assoc($result) fetches one row at a time from the result.
    //while loop continues until there are no more rows to fetch.

    return $courses;
    //returns a associative array of all courses.
}


function get_mentor_course_codes($conn, $mentor_id) {
    $codes = [];
    $res = mysqli_query
    ($conn, 
    "SELECT code
     FROM course
    WHERE id IN (
    SELECT course_id
    FROM mentor_course
    WHERE mentor_id = $mentor_id)"
   );
   //Inner:gets all course_ids that belong to the mentor_id.
   //Outer:gets all codes that match those course_ids.
                                
    while ($row = mysqli_fetch_assoc($res)) {
        $codes[] = $row['code'];
    }
    return $codes;
}



//used in mentor dashboard
function update_mentor_email($conn, $mentor_id, $new_email) {
    mysqli_query($conn, "UPDATE mentors SET email = '$new_email' WHERE id = $mentor_id");
}


function update_mentor_phone($conn, $mentor_id, $new_phone) {
    mysqli_query($conn, "UPDATE mentors SET phone = '$new_phone' WHERE id = $mentor_id");
}


function update_mentor_present_address($conn, $mentor_id, $new_address) {
    mysqli_query($conn, "UPDATE mentors SET present_address = '$new_address' WHERE id = $mentor_id");
}


function delete_mentor_account($conn, $mentor_id) {
    mysqli_query($conn, "DELETE FROM mentor_course WHERE mentor_id = $mentor_id");
    //deletes all rows in mentor course. child table of mentors.
    //info from mentor_course is deleted first to prevent foreign key constraint errors.
    mysqli_query($conn, "DELETE FROM mentors WHERE id = $mentor_id");
    
    
}
?>