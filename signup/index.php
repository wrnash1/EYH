<!doctype html>

<html lang="en">
<head>
  <link rel="stylesheet" href="styles.css">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="William Nash" >
  <meta name="copyright" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8">
  <meta http-equiv="content-style-type" content="text/css">
  <meta http-equiv="expires" content="0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <title>Student Registration</title>

</head>


<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

   <?php include "header.php"; ?>
  

   <div class="panel-heading text-center">
     <h1>Registration Form</h1>
     <p>Space is limited, so register early! Registration confirmation will be emailed to your email address as soon
       as we've processed your information.<br>* $5 registration fee mailed to TWU</p>
   </div>

     <legend>Student Information</legend>
     <br>

   <form class="form-horizontal" action="/action_page.php" method="post">
     <div class="form-group">
       <label class="control-label col-sm-2" for="First Name">First Name:</label>
       <div class="col-sm-10">
         <input type="text" class="form-control" name="first_name"  placeholder="First Name"/>
       </div>
     </div>

     <div class="form-group">
       <label class="control-label col-sm-2" for="Last Name">Last Name:</label>
       <div class="col-sm-10">
         <input type="text" class="form-control" name="last_name" placeholder="Last Name">
       </div>
     </div>

   <div class="form-group">
     <label class="control-label col-sm-2" for="email">Email:</label>
     <div class="col-sm-10">
       <input type="email" class="form-control" name="email" placeholder="Enter email.  We don't send spam or sell your contact information to anyone.">
     </div>
   </div>

   <div class="form-group">
       <label for="inputAddress">Address</label>
       <input type="text" class="form-control" name="inputAddress" placeholder="1234 Main St">
     </div>
     <div class="form-group">
       <label for="inputAddress2">Address 2</label>
       <input type="text" class="form-control" name="inputAddress2" placeholder="Apartment, studio, or floor">
     </div>

     <div class="form-row">
       <div class="form-group col-md-6">
         <label for="inputCity">City</label>
         <input type="text" class="form-control" name="inputCity">
       </div>
       <div class="form-group col-md-4">
         <label for="inputState">State</label>
         <select name="inputState" class="form-control">
          <option selected>Choose...</option>
          <option value="TX">Texas</option>
     			<option value="AK">Alaska</option>
     			<option value="AL">Alabama</option>
     			<option value="AR">Arkansas</option>
     			<option value="AZ">Arizona</option>
     			<option value="CA">California</option>
     			<option value="CO">Colorado</option>
     			<option value="CT">Connecticut</option>
     			<option value="DC">District of Columbia</option>
     			<option value="DE">Delaware</option>
     			<option value="FL">Florida</option>
     			<option value="GA">Georgia</option>
     			<option value="HI">Hawaii</option>
     			<option value="IA">Iowa</option>
     			<option value="ID">Idaho</option>
     			<option value="IL">Illinois</option>
     			<option value="IN">Indiana</option>
     			<option value="KS">Kansas</option>
     			<option value="KY">Kentucky</option>
     			<option value="LA">Louisiana</option>
     			<option value="MA">Massachusetts</option>
     			<option value="MD">Maryland</option>
     			<option value="ME">Maine</option>
     			<option value="MI">Michigan</option>
     			<option value="MN">Minnesota</option>
     			<option value="MO">Missouri</option>
     			<option value="MS">Mississippi</option>
     			<option value="MT">Montana</option>
     			<option value="NC">North Carolina</option>
     			<option value="ND">North Dakota</option>
     			<option value="NE">Nebraska</option>
     			<option value="NH">New Hampshire</option>
     			<option value="NJ">New Jersey</option>
     			<option value="NM">New Mexico</option>
     			<option value="NV">Nevada</option>
     			<option value="NY">New York</option>
     			<option value="OH">Ohio</option>
     			<option value="OK">Oklahoma</option>
     			<option value="OR">Oregon</option>
     			<option value="PA">Pennsylvania</option>
     			<option value="PR">Puerto Rico</option>
     			<option value="RI">Rhode Island</option>
     			<option value="SC">South Carolina</option>
     			<option value="SD">South Dakota</option>
     			<option value="TN">Tennessee</option>
     			<option value="TX">Texas</option>
     			<option value="UT">Utah</option>
     			<option value="VA">Virginia</option>
     			<option value="VT">Vermont</option>
     			<option value="WA">Washington</option>
     			<option value="WI">Wisconsin</option>
     			<option value="WV">West Virginia</option>
     			<option value="WY">Wyoming</option>
         </select>
       </div>

       <div class="form-group col-md-2">
         <label for="inputZip">Zip</label>
         <input type="text" class="form-control" name="inputZip">
       </div>
     </div>

     <div class="form-group" name="grade-selection">
       <div class="row">
         <div class="col-md-3">
           <label for="grade-selection">Current Grade:</label>
         </div>
         <div class="col-md-2">
           <label class="custom-control custom-radio">
             <input name="7th-grade-radio" id="grade-select" type="radio" class="custom-control-input" value="7th-grade-radio">
             <span class="custom-control-indicator"></span>
             <span class="custom-control-description">7th Grade</span>
           </label>
         </div>
         <div class="col-md-2">
           <label class="custom-control custom-radio">
             <input name="8th-grade-radio" id="grade-select" type="radio" class="custom-control-input" value="8th-grade-radio" required>
             <span class="custom-control-indicator"></span>
             <span class="custom-control-description">8th Grade</span>
           </label>
         </div>
       </div>
     </div>
     <br>
     <!-- T Shirt sizes -->
     <div class="form-group" name="shirt-size-selection">
       <div class="row">
         <div class="col-md-3">
           <label for="shirt-size-selection">T-Shirt Size:</label>
         </div>
         <div class="col-md-1">
           <label class="custom-control custom-radio">
             <input id="tshirt-s-select" name="tshirt-select" type="radio" value="tshirt-s-select" class="custom-control-input" required>
             <span class="custom-control-indicator"></span>
             <span class="custom-control-description">S</span>
           </label>
         </div>
         <div class="col-md-1">
           <label class="custom-control custom-radio">
             <input id="tshirt-m-select" name="tshirt-select" type="radio" class="custom-control-input" value="tshirt-m-select" required>
             <span class="custom-control-indicator"></span>
             <span class="custom-control-description">M</span>
           </label>
         </div>
         <div class="col-md-1">
           <label class="custom-control custom-radio">
             <input id="tshirt-l-select" name="tshirt-select" type="radio" class="custom-control-input" value="tshirt-l-select" required>
             <span class="custom-control-indicator"></span>
             <span class="custom-control-description">L</span>
           </label>
         </div>
         <div class="col-md-1">
           <label class="custom-control custom-radio">
             <input id="tshirt-xl-select" name="tshirt-select" type="radio" class="custom-control-input" value="tshirt-xl-select" required>
             <span class="custom-control-indicator"></span>
             <span class="custom-control-description">XL</span>
           </label>
         </div>
         <div class="col-md-1">
           <label class="custom-control custom-radio">
             <input id="tshirt-xxl-select" name="tshirt-select" type="radio" class="custom-control-input" value="tshirt-xxl-select" required>
             <span class="custom-control-indicator"></span>
             <span class="custom-control-description">XXL</span>
           </label>
         </div>
       </div>
     </div>
     <!-- End t shirt sizes -->
     <br>
     <!-- Did you attend last year? -->
     <div class="form-group" name="did-attend-last-year-selection">
       <div class="row">
         <div class="col-md-3">
           <label for="did-attend-last-year-selection">Did you attend this conference last year?</label>
         </div>
         <div class="col-md-2">
           <label class="custom-control custom-radio">
             <input name="attended-last-year" name="attended-last-year" type="radio" value="attended-last-year" class="custom-control-input" required>
             <span class="custom-control-indicator"></span>
             <span class="custom-control-description">Yes</span>
           </label>
         </div>
         <div class="col-md-2">
           <label class="custom-control custom-radio">
             <input name="did-not-attend-radio" name="attended-last-year" type="radio" value="did-not-attend-radio" class="custom-control-input" required>
             <span class="custom-control-indicator"></span>
             <span class="custom-control-description">No</span>
           </label>
         </div>
       </div>
     </div>

     <br>
     <!-- Girl Scout Troop -->
     <div class="form-group" name="troop-number-selection">
       <div class="row">
         <div class="col-md-3">
           <label for="troop-number-selection">Girl Scout Troop Number:</label>
         </div>
         <div class="form-group col-md-4">
           <input type="number" class="form-control" name="troop-number-input" name="troop-number-input" placeholder="">
           <small name="troop-number-help" class="form-text text-muted">(If applicable)</small>
         </div>
       </div>
     </div>
     </div>
     <br>
     <hr class="rounded">

     <!-- School Selection -->
     <legend>School Information</legend>
     </fieldset>
     <br>

     <!-- School information section -->
     <fieldset form="student-registration-form">
     <div class="col-sm-offset-2">
       <div class="form-group" name="school-selection">
         <div class="row ">
           <div class="col-md-3">
             <label for="school-selection-input">School:</label>
           </div>
           <div class="input-group col-md-4">
             <select class="form-control" name="school-selection-input" form="student-registration-form" name="school-selection" onchange="showOther(this.value)">
               <option value="ALA" name="ALA">ALA</option>
               <option value="Aledo" name="Aledo">Aledo</option>
               <option value="Aubrey Middle" name="Aubrey Middle">Aubrey Middle</option>
               <option value="Azle Jr High" name="Azle Jr High">Azle Jr High</option>
               <option value="Brewer Middle" name="Brewer Middle">Brewer Middle</option>
               <option value="Cross Timbers" name="Cross Timbers">Cross Timbers</option>
               <option value="Crowley Middle" name="Crowley Middle">Crowley Middle</option>
               <option value="Forest Oak MS" name="Forest Oak MS">Forest Oak MS</option>
               <option value="Grapevine Faith Christian School" name="Grapevine Faith Christian School">Grapevine Faith Christian School</option>
               <option value="Griffin Middle" name="Griffin Middle">Griffin Middle</option>
               <option value="HF STEVENS " name="HF STEVENS ">HF STEVENS </option>
               <option value="Haltom Middle School" name="Haltom Middle School">Haltom Middle School</option>
               <option value="Harmony School of Nature" name="Harmony School of Nature">Harmony School of Nature</option>
               <option value="Heritage Middle" name="Heritage Middle">Heritage Middle</option>
               <option value="Hillwood Middle" name="Hillwood Middle">Hillwood Middle</option>
               <option value="INA" name="INA">INA</option>
               <option value="Indian Springs" name="Indian Springs">Indian Springs</option>
               <option value="Irma Marsh MS" name="Irma Marsh MS">Irma Marsh MS</option>
               <option value="Jacquet  Middle School" name="Jacquet  Middle School">Jacquet Middle School</option>
               <option value="Joshua" name="Joshua">Joshua</option>
               <option value="Keller Middle" name="Keller Middle">Keller Middle</option>
               <option value="Kennedale" name="Kennedale">Kennedale</option>
               <option value="Killian MS" name="Killian MS">Killian MS</option>
               <option value="Life School - Red Oak" name="Life School - Red Oak">Life School - Red Oak</option>
               <option value="Loflin Middle" name="Loflin Middle">Loflin Middle</option>
               <option value="McLean Middle" name="McLean Middle">McLean Middle</option>
               <option value="Meadowbrook" name="Meadowbrook">Meadowbrook</option>
               <option value="Newciner Center" name="Newciner Center">Newciner Center</option>
               <option value="Oakridge" name="Oakridge">Oakridge</option>
               <option value="Our Lady of Victory" name="Our Lady of Victory">Our Lady of Victory</option>
               <option value="Prestwuck STEM" name="Prestwuck STEM">Prestwuck STEM</option>
               <option value="RC Lofton" name="RC Lofton">RC Lofton</option>
               <option value="Riverside Middle" name="Riverside Middle">Riverside Middle</option>
               <option value="Smithfield" name="Smithfield">Smithfield</option>
               <option value="Southlake Dawson Middle School" name="Southlake Dawson Middle School">Southlake Dawson Middle School</option>
               <option value="Springtown Middle" name="Springtown Middle">Springtown Middle</option>
               <option value="St. Rita Catholic" name="St. Rita Catholic">St. Rita Catholic</option>
               <option value="Stafford Middle" name="Stafford Middle">Stafford Middle</option>
               <option value="TSMS" name="TSMS">TSMS</option>
               <option value="Timberview MS" name="Timberview MS">Timberview MS</option>
               <option value="Tolar Jr High" name="Tolar Jr High">Tolar Jr High</option>
               <option value="Wayside Middle School" name="Wayside Middle School">Wayside Middle School</option>
               <option value="William James Middle" name="William James Middle">William James Middle</option>
               <option value="Wilson Middle" name="Wilson Middle">Wilson Middle</option>
               <option value="Young Jr High" name="Young Jr High">Young Jr High</option>
               <option value="Young Womens Leadership" name="Young Womens Leadership">Young Womens Leadership</option>
               <option value="Other" name="Other">Other</option>
             </select>
           </div>
           <br>
           <div class="col-md-3" hidden="false" name="other-label" style="display:none">
             <label for="school-selection-input">Other:</label>
           </div>
           <div class="input-group col-md-4" name="other-input-div" style="display:none">
             <input class="form-control" name="other-input" name="other-input" placeholder="School Name">
             <div class="help-block with-errors"></div>
             <small name="other-help" class="form-text text-muted">(School)</small>
           </div>
         </div>
       </div>

     <br>
       <!-- Teacher -->
       <div class="form-group has-feedback" name="teacher-selection">
         <div class="row">
           <div class="col-md-3">
             <label for="school-selection-input">Math or Science Teacher:</label>
           </div>
           <div class="input-group col-md-4">
             <input type="text" class="form-control" name="teacher-input" name="teacher-input" style="border-radius: 0.5em;" required placeholder="(Name)">
             <div class="help-block with-errors"></div>
             <small name="teacher-help" class="form-text text-muted"></small>
           </div>
         </div>
       </div>
     </div>


<br>
     <fieldset>
     <legend>Workshop Preferences</legend>
     <h4>Please select two of the following workshop topics that you find the most interesting in the dropdown menus below.
     </h4>
     <h4>You will be assigned four workshops in a variety of areas. For one of your workshops, we will attempt to honor your choices, but assignments are on a first-come, first-served basis.**
     </h4>
     <div class="col-sm-offset-2">
       <!-- Class preferences -->
       <div class="row">
         <!-- 1st choice -->
         <div class="col-md-4">
           <div class="form-group">
             <label for="first-choice-selection">First Choice:</label>
             <select class="form-control" id="first-choice-selection" name="first-choice-selection">
               <option name="No Preference">No Preference</option>
               <option name="Architecture">Architecture</option>
               <option name="Astronomy">Astronomy</option>
               <option name="Aviation">Aviation</option>
               <option name="Biology/Botany">Biology/Botany</option>
               <option name="Business">Business</option>
               <option name="Chemistry">Chemistry</option>
               <option name="Communications">Communications</option>
               <option name="Computer Science">Computer Science</option>
               <option name="Criminal Justice/Law">Criminal Justice/Law</option>
               <option name="Dentistry">Dentistry</option>
               <option name="Earth Science">Earth Science</option>
               <option name="Engineering">Engineering</option>
               <option name="Firefighting/EMT">Firefighting/EMT</option>
               <option name="Mathematics">Mathematics</option>
               <option name="Medical Sciences">Medical Sciences</option>
               <option name="Meteorology">Meteorology</option>
               <option name="Physics">Physics</option>
               <option name="Psychology/Sociology">Psychology/Sociology</option>
               <option name="Veterinary Medicine">Veterinary Medicine</option>
             </select>
             <small name="first-choice-help" class="form-text text-muted">Cannot be the same as your second choice.
             </small>
           </div>
         </div>
         <div class="col-md-2"></div>
         <!-- 2nd choice -->
         <div class="col-md-4">
           <div class="form-group">
             <label for="second-choice-selection">Second Choice:</label>
             <select class="form-control" id="second-choice-selection" name="second-choice-selection">
               <option name="No Preference">No Preference</option>
               <option name="Architecture">Architecture</option>
               <option name="Astronomy">Astronomy</option>
               <option name="Aviation">Aviation</option>
               <option name="Biology/Botany">Biology/Botany</option>
               <option name="Business">Business</option>
               <option name="Chemistry">Chemistry</option>
               <option name="Communications">Communications</option>
               <option name="Computer Science">Computer Science</option>
               <option name="Criminal Justice/Law">Criminal Justice/Law</option>
               <option name="Dentistry">Dentistry</option>
               <option name="Earth Science">Earth Science</option>
               <option name="Engineering">Engineering</option>
               <option name="Firefighting/EMT">Firefighting/EMT</option>
               <option name="Mathematics">Mathematics</option>
               <option name="Medical Sciences">Medical Sciences</option>
               <option name="Meteorology">Meteorology</option>
               <option name="Physics">Physics</option>
               <option name="Psychology/Sociology">Psychology/Sociology</option>
               <option name="Veterinary Medicine">Veterinary Medicine</option>
             </select>
             <small name="second-choice-help" class="form-text text-muted">Cannot be the same as your
               first choice.
             </small>
           </div>
         </div>
       </div>
     </div>

   <div class="form-group">
     <div class="col-sm-offset-2 col-sm-10">
       <button type="submit" class="btn btn-default">Submit</button>
     </div>
   </div>
 </form>

   <?php include "footer.php"; ?>
