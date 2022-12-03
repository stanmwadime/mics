<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mwadime Institute of Computer Studies</title>
    <link rel="website icon" type="png" href="/micslogo.jpg">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="/assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>
<body>
    <div class="navbar">
        <a href="/index.html">&nbsp;&nbsp; Home</a>
        <a href="/academics.html"><i class="fa-solid fa-school"></i>&nbsp;&nbsp;academics</a>
        <a href="/admission.html" class="active" >admission</a>
        <a href="/gallery.html">gallery</a>
    </div>
    <?php
    //define variables and set to empty values
    $FirstNameErr=$MiddleNameErr=$LastNameErr=$EmailErr=$GenderErr=$PhoneNumberErr=$DateOfBirthErr=$AddressErr=$CityErr=$CountyErr=$CountryErr=$HobbiesErr=$QualificationErr=$CoursesErr="";
    $FirstName=$MiddleName=$LastName=$Email=$Gender=$PhoneNumber=$DateOfBirth=$Address=$City=$County=$Country=$Hobbies=$Qualification=$Courses="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $FirstNameErr = "FirstName is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
    <h2>Student Registration Form</h2>
    <form action="/welcome.php" method="post">
        FirstName:<input type="text" name="FirstName"><br>
        MiddleName:<input type="text" name="MiddleName"><br>
        LastName:<input type="text" name="LastName"><br>
        Email:<input type="text" name="Email"><br>
        PhoneNumber:<input type="number" name="PhoneNumber"><br>
        Gender:
        <input type="radio" name="Gender" value="Male">Male
        <input type="radio" name="Gender" value="Female">Female
        <input type="radio" name="Gender" value="Prefer not to say">Prefer not to say<br>
        DateOfBirth(DOB):<select name="Birthday" id="Birthday_Day">
            <option value="-1">Day:</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
            </select>
            <select name="BirthdayMonth" id="Birthday_Month">
            <option value="-1">Month:</option>
            <option value="January">Jan(1)</option>
            <option value="February">Feb(2)</option>
            <option value="March">Mar(3)</option>
            <option value="April">Apr(4)</option>
            <option value="May">May(5)</option>
            <option value="June">Jun(6)</option>
            <option value="July">Jul(7)</option>
            <option value="August">Aug(8)</option>
            <option value="September">Sep(9)</option>
            <option value="October">Oct(10)</option>
            <option value="November">Nov(11)</option>
            <option value="December">Dec(12)</option>
            </select>
            <select name="BirthdayYear" id="Birthday_Year">
            <option value="-1">Year:</option>
            <option value="2023">2023</option>
            <option value="2022">2022</option>
            <option value="2021">2021</option>
            <option value="2020">2020</option>
            <option value="2019">2019</option>
            <option value="2018">2018</option>
            <option value="2017">2017</option>
            <option value="2016">2016</option>
            <option value="2015">2015</option>
            <option value="2014">2014</option>
            <option value="2013">2013</option>
            <option value="2012">2012</option>
            <option value="2011">2011</option>
            <option value="2010">2010</option>
            <option value="2009">2009</option>
            <option value="2008">2008</option>
            <option value="2007">2007</option>
            <option value="2006">2006</option>
            <option value="2005">2005</option>
            <option value="2004">2004</option>
            <option value="2003">2003</option>
            <option value="2002">2002</option>
            <option value="2001">2001</option>
            <option value="2000">2000</option>
            <option value="1999">1999</option>
            <option value="1998">1998</option>
            <option value="1997">1997</option>
            <option value="1996">1996</option>
            <option value="1995">1995</option>
            <option value="1994">1994</option>
            <option value="1993">1993</option>
            <option value="1992">1992</option>
            <option value="1991">1991</option>
            <option value="1990">1990</option>
            <option value="1989">1989</option>
            <option value="1988">1988</option>
            <option value="1987">1987</option>
            <option value="1986">1986</option>
            <option value="1985">1985</option>
            <option value="1984">1984</option>
            <option value="1983">1983</option>
            <option value="1982">1982</option>
            <option value="1981">1981</option>
            <option value="1980">1980</option>
        </select><br>
        Address:<textarea name="Address" rows="3" cols="15"></textarea><br>
        City:<input type="text" name="City"><br>
        County:<input type="text" name="County"><br>
        Country:<input type="text" name="Country"><br>
        Hobbies:
        <input type="checkbox" name="HobbyDrawing" value="Drawing">HobbyDrawing<br>
        <input type="checkbox" name="HobbySinging" value="Singing">HobbySinging<br>
        <input type="checkbox" name="HobbyDancing" value="Dancing">HobbyDancing<br>
        <input type="checkbox" name="HobbyCooking" value="Cooking">HobbyCooking<br>
        <input type="checkbox" name="HobbyProgramming" value="Programming">HobbyProgramming<br>
        <input type="checkbox" name="HobbyOther" value="Other">HobbyOther<br>
        <input type="text" name="Other_Hobby" maxlength="50" placeholder="Ex- Teaching"><br>
        Qualification:
        <input type="checkbox" name="PrimarySchool" value="Primary School" />
            Primary School<br>
        <input type="checkbox" name="HighSchool" value="High School" />
            High School<br/>
        <input type="checkbox" name="Graduation" value="Graduation" />
            Graduation(Bachelors)<br/>
        <input type="checkbox" name="PostGraduation" value="Post Graduation" />
            Post Graduation(Masters)<br/>
        <input type="checkbox" name="Phd" value="Phd">
            Phd<br>
        Courses:
            <input type="radio" name="CourseAcc" value="Acc">
            Accounting<br>
            <input type="radio" name="CourseCompSc" value="CompSc">
            CompScience<br>
            <input type="radio" name="CourseEng" value="Eng">
            English<br>
            <input type="radio" name="CourseFin" value="Fin">
            Finance<br>
            <input type="radio" name="CourseMktn" value="Mktn">
            Marketing<br>
            <input type="radio" name="CourseMaths" value="Maths">
            Mathematics<br>
            <input type="radio" name="CourseSocio" value="Socio">
            Sociology<br>
            <input type="radio" name="CourseSwa" value="Swa">
            Swahili<br>
        <colspan="2" text-align="center" >
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
    </form>
    <footer>
        <p>MICS © 2023
        <a href="mailto:info@mics.ac.ke">info@mics.ac.ke</a></p>
    </footer>    
</body>
<script src="/assets/bootstrap-5.0.2-dist/js/bootstrap.js"></script>
<script src="https://kit.fontawesome.com/377e1435d8.js" crossorigin="anonymous"></script>
</html>
