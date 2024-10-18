<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Ragistration</title>
  <link rel="stylesheet" href="css/style.css">
  <script  src="js/adress.js"></script>

</head>

<body>
<form action="">
<div style="margin-top: 20px;" class="form">

  <div class="headerdiv"> Applicant Details</div>

  <div class="maincontainer">

    <div class='mainCell'> Student Name  <span class="startcolor">*</span></div>
    <div class='inputCell'><input type="text"></div>
    <div class='mainCell'>Fathar Name  <span class="startcolor">*</span></div>
    <div class='inputCell'><input type="text"></div>

  </div>

  <div class="maincontainer">

    <div class='mainCell'>Mother Name <span class="startcolor">*</span></div>
    <div class='inputCell'><input type="text"></div>
    <div class='mainCell'>Gender  <span class="startcolor">*</span></div>
    <div class='genderinput'><input class="inputcell" type="radio" name="gender">Male <input type="radio" name="gender">Female</div>

 
  </div>

  <div class="maincontainer">

    <div class='mainCell'>Mobile No.</div>
    <div class='inputCell'><input type="text"></div>
    <div class='mainCell'>Email  <span class="startcolor">*</span></div>
    <div class='inputCell'><input type="text"></div>

  </div>

  <div class="maincontainer">

  <div class='mainCell'>Category  <span class="startcolor">*</span></div>
  <div class='castCell'>
    <select name="" id="">
      <option>SELECT CASTE</opttion>
      <option>GENRAL</opttion>
      <option>OBC</opttion>
      <option>SC</opttion>
      <option>SC</option>
    </select></div>
  <div class='mainCell'>Date Of Birth  <span class="startcolor">*</span></div>
  <div class='inputCell'><input type="date"></div>
</div>

  <div class="divcontainer">

    <div class='mainCell'>Current Address  <span class="startcolor">*</span></div>
    <div class='adressinput'><input type="text" id="local"></div>
  
  </div>
  <div class="adressheader">Same Address to click the checkbox <input type="checkbox" id='ch' onclick="checkbox()"></div>

  <div class="maincontainer">

    <div class='mainCell'>permanent Address  <span class="startcolor">*</span></div>
    <div class='adressinput'><input type="text" id="permanent"></div>
  
  </div>
  <div class="divcontainer">

    <div class='mainCell'> Caste Certificate  <span class="startcolor">*</span> </div>
    <div class='genderinput'><input class="inputcell" type="radio" name="caste">YES <input type="radio" name="caste">NO</div>

    <div class='mainCell'>Income Certificate</div>
    <div class='genderinput'><input class="inputcell" type="radio" name="Income_Certificate">YES <input type="radio" name="Income_Certificate">NO</div>

  </div>

  <div class="maincontainer">

    <div class='mainCell'>Yearly Income  </div>
    <div class='inputCell'><input type="text"></div>
    <div class='mainCell'>MP Domecile </div>
    <div class='genderinput'><input class="inputcell" type="radio" name="Domecile">YES <input type="radio" name="Domecile">NO</div>


  </div>

  <div class="maincontainer">

  <div class='mainCell'> Aadhar Number  <span class="startcolor">*</span></div>
  <div class='inputCell'><input type="text"></div>
  <div class='mainCell'> Samgra ID   <span class="startcolor">*</span></div>
  <div class='inputCell'><input type="text"></div>

  </div>

  </div>



<div class="form">
    <div class="headerdiv"> Education Deatails</div>
  
    <div class="maincontainer">

      <div class='mainCell'> Enrollment No.</div>
      <div class='inputCell'><input type="text"></div>
      <div class='mainCell'>Date of Enrollment</div>
      <div class='inputCell'><input type="text"></div>

    </div>

    <div class="maincontainer">

      <div class='mainCell'> Class</div>
      <div class='inputCell'><input type="text"></div>
      <div class='mainCell'>Admission Year</div>
      <div class='inputCell'><input type="text"></div>

    </div>
    <div class="maincontainer">

      <div class='mainCell'> semester Fees</div>
      <div class='inputCell'><input type="text"></div>
      <div class='mainCell'>Total Sem</div>
      <div class='inputCell'><input type="text"></div>

    </div>  


</div>

<div class="form">

<div class="headerdiv smalheader" > Class X  <span class="startcolor">*</span></div>



<div class="maincontainer">

  <div class='mainCell'> Rall No. </div>
  <div class='inputCell'><input type="text" placeholder="Roll Number"></div>
  <div class='mainCell'>Passing Year</div>
  <div class='inputCell'><input type="text" placeholder="Year"></div>
  <div class='mainCell'>Board Name</div>
  <div class='inputCell'><input type="text" placeholder="Board Name"></div>

</div>
<div class="maincontainer">


  <div class='mainCell'> Grade</div>
  <div class='inputCell'><input type="text" placeholder="Enter Your grade"></div>
  <div class='mainCell'>Percent</div>
  <div class='inputCell'><input type="text" placeholder="Percent"></div>

</div>
</div>
<div class="form">

<div class="headerdiv smalheader" > Class XII  <span class="startcolor">*</span></div>


<div class="maincontainer">

  <div class='mainCell'> Rall No. </div>
  <div class='inputCell'><input type="text" placeholder="Roll Number"></div>
  <div class='mainCell'>Passing Year</div>
  <div class='inputCell'><input type="text" placeholder="Year"></div>
  <div class='mainCell'>Board Name</div>
  <div class='inputCell'><input type="text" placeholder="Board Name"></div>

</div>
<div class="maincontainer">


  <div class='mainCell'> Grade</div>
  <div class='inputCell'><input type="text" placeholder="Enter Your grade"></div>
  <div class='mainCell'>Percent</div>
  <div class='inputCell'><input type="text" placeholder="Percent"></div>

</div>

</div>



<div class="form">

<div class="headerdiv smalheader" > Graduation Deatails <span class="startcolor">*</span></div>



<div class="maincontainer">

  <div class='mainCell'> Enrollment No. </div>
  <div class='inputCell'><input type="text" placeholder="Enrollment No."></div>
  <div class='mainCell'>Passing Year</div>
  <div class='inputCell'><input type="text" placeholder="Year"></div>
  <div class='mainCell'>University Name</div>
  <div class='inputCell'><input type="text" placeholder="University Name"></div>

</div>
<div class="maincontainer">


  <div class='mainCell'> Grade</div>
  <div class='inputCell'><input type="text" placeholder="Enter Your grade"></div>
  <div class='mainCell'>Percent</div>
  <div class='inputCell'><input type="text" placeholder="Percent"></div>

</div>


<div class="buttons"><button class="savebutton">SAVE</button><button class="nextbutton"><a href="upload_documenet.php" style="text-decoration:none;color:black">NEXT</a></button></div>
</div>

</div>
</form>
</body>
</html>