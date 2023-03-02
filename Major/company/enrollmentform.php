<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acadmics | Student | Enrollment From</title>

    <link rel="stylesheet" href="./css/enrol.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


</head>
<body>
 
   

<body onkeydown="if(!event.target.matches('input')&&!event.target.matches('textarea'))return!1" oncontextmenu="return!1" onselectstart="return!1" ondragstart="return!1">

                 

 <div class="h-100 w-auto flex-row d-flex justify-content-center  form-base ">  
        <div class="h-auto w-100 d-flex justify-content-flex-start flex-column  form-base2 ">

        <!-- Header -->
            <div class="w-100  d-flex justify-content-center align-items-center header ">
                <div class="h-100 w-100 d-flex justify-content-center align-items-center  header-base">
                    <p class="h1 header-text">
                        Student Enrollment Form
                    </p>
                </div>
            </div>
            
            <!-- Body -->
            <form action="#" method="POST" class="p-3">
                
                <div class="h-auto w-auto infobox"> 
                    <div class="h-auto w-auto">
                        <div class="col-md-12 p-3 box-head">Personal Details</div>
                    </div>
                    <div class="h-auto w-auto p-1 ">

                        <div class="form-group col-md-12">
                            <label for="propic">Profile Picture</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input if" name="propic" id="propic" required>
                                <label class="custom-file-label if" for="propic">Choose Passport Size Photo</label>
                            </div>
                        </div>
                        <!-- NAMES -->
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="fname">First Name</label>
                                <input type="text" class="form-control if" id="fname" placeholder="First Name"  required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="mname">Middle Name</label>
                                <input type="text" class="form-control if" id="mname" placeholder="Middle Name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="lname">Last Name</label>
                                <input type="text" class="form-control if" id="lname" placeholder="Last Name"  required>
                            </div>
                        </div>

                        <!-- address -->
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="fname">Address</label>
                                <textarea class="form-control  if" name="address" id="address"  required></textarea>
                            </div>
                        </div>

                        <!-- City / State / Country -->
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="city">City</label>
                                <select class="form-control  if" name="city" id="city"  required>
                                    <option value="null">-- SELECT --</option>
                                    <option value="obcgen">...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="state">State</label>
                                <select class="form-control  if" name="state" id="state"  required>
                                    <option value="null">-- SELECT --</option>
                                    <option value="obcgen">...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="country">Country</label>
                                <select class="form-control  if" name="country" id="country"  required>
                                    <option value="null">-- SELECT --</option>
                                    <option value="obcgen">...</option>
                                </select>
                            </div>
                        </div>

                 
                        <!-- City / State / Country -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="category">Gender</label>
                                <select class="form-control  if" name="gender" id="gender" required>
                                    <option value="null">-- SELECT --</option>
                                    <option value="Male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="dob">Date of Birth</label>
                                <input class="form-control  if" type="date" name="dob" id="dob"  required>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="zipcode">Zip Code</label>
                                <input class="form-control  if" type="text" name="zipcode" id="zipcode"  required>
                            </div>
                        </div>

                        <!-- catogery -->
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="category">Catogery</label>
                                <select class="form-control  if" name="category" id="category" required>
                                    <option value="null">-- SELECT --</option>
                                    <option value="gen">GENRAL</option>
                                    <option value="sc">SC</option>
                                    <option value="st">ST</option>
                                    <option value="obc">OBC</option>
                                    <option value="obcgen">OBC-GEN</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Contact Info -->
                <div class="h-auto w-auto infobox margin-top-5"> 
                    <div class="h-auto w-auto">
                        <div class="col-md-12 p-3 box-head">Contact</div>
                    </div>
                    <div class="h-auto w-auto p-1">

                        <!-- personal contact -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="telnum">Personal Number</label>
                                <input type="tel" class="form-control  if" name="personalnum" id="telnum" placeholder="(00000-00000)"  required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="telnum">Other Number</label>
                                <input type="tel" class="form-control  if" name="othernum" id="telnum2" placeholder="(00000-00000)">
                            </div>
                            
                        </div>
                        
                    </div>
                </div>

                <!-- Parents details -->
                 <div class="h-auto w-auto infobox"> 
                    <div class="h-auto w-auto">
                        <div class="col-md-12 p-3 box-head">Parent Details</div>
                    </div>
                    <div class="h-auto w-auto p-1">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="fname">Father's Name</label>
                                <input type="text" class="form-control  if" name="fathername" id="fathername" placeholder="Father's Name"  required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="fname">Mother's Name</label>
                                <input type="text" class="form-control  if" name="mothername" id="mothername" placeholder="Mother's Name"  required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Father_anuincom">Father's Name(optional)</label>
                                <input type="text" class="form-control  if" name="Father_anuincom" id="Father_anuincom" placeholder="Income">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Mother_anuincom">Mother's Annual Income(optional)</label>
                                <input type="text" class="form-control  if" name="Mother_anuincom" id="Mother_anuincom" placeholder="Income">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Father_occupation">Father's Occupation(optional)</label>
                                <input type="text" class="form-control  if" name="Father_occupation" id="Father_occupation" placeholder="Occupation">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Mother_occupation">Mother's Annual Income(optional)</label>
                                <input type="text" class="form-control  if" name="Mother_occupation" id="Mother_occupation" placeholder="Ocupation">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="telnum">Parent Number</label>
                                <input type="tel" class="form-control  if" name="parent_tel" id="telnum" placeholder="(00000-00000)"  required>
                            </div>
                        </div>
                    </div>
                 </div>
                 
                 

                <!-- Education Info -->
                <div class="h-auto w-auto infobox"> 
                    <div class="h-auto w-auto">
                        <div class="col-md-12 p-3 box-head">Education</div>
                    </div>
                    <div class="h-auto w-auto p-1">

                        <!-- Education info -->
                        <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="telnum">10th Aggrigates</label>
                                    <input type="tel" class="form-control if" name="tenagri" id="tenagri" placeholder="%"  required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="telnum">12th Aggrigates</label>
                                    <input type="tel" class="form-control if" name="tewagri" id="tewagri" placeholder="%"  required>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" required>
                                        <label class="custom-file-label if" for="customFile">Choose file 10th Marksheet</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" required>
                                        <label class="custom-file-label if" for="customFile">Choose file 12th Marsheet</label>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="tenschoolname">10th School Name</label>
                                    <input type="tel" class="form-control if" name="tenschoolname" id="tenschoolname" placeholder="10th School Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="tewschoolname">12th School Name</label>
                                    <input type="tel" class="form-control if" name="tewschoolname" id="tewschoolname" placeholder="12th School Name">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="telnum">JEE Score (optional)</label>
                                    <input type="tel" class="form-control if" name="jeescore" id="jeescore" placeholder="JEE SCORE">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="telnum">JEE Score Advance (optional)</label>
                                    <input type="tel" class="form-control if" name="jeescoreAdvance" id="jeescoreAdvance" placeholder="JEE Addvance SCORE">
                                </div>
                        </div>
                    </div>
                </div>



<!-- Course -->
                <div class="h-auto w-auto infobox"> 
                    <div class="h-auto w-auto">
                        <div class="col-md-12 p-3 box-head">Course</div>
                    </div>
                    <div class="h-auto w-auto p-1">

                        <!-- Courses info -->
                        <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="category">Course</label>
                                    <select class="form-control  if" name="category" id="category" required>
                                        <option value="null">-- SELECT --</option>
                                        <option value="gen">Btech</option>
                                        <option value="gen">....</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="category">Branch</label>
                                    <select class="form-control  if" name="category" id="category" required>
                                        <option value="null">-- SELECT --</option>
                                        <option value="gen">Btech</option>
                                        <option value="gen">....</option>
                                    </select>
                                </div>
                               
                        </div>
                    </div>
                </div>


                <!-- Authentication -->
                <div class="h-auto w-auto infobox"> 
                    <div class="h-auto w-auto">
                        <div class="col-md-12 p-3 box-head">Authentications</div>
                    </div>
                    <div class="h-auto w-auto p-1">

                        <!-- Auth info -->
                        <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="telnum">Email</label>
                                    <input type="email" class="form-control if" name="email" id="email" placeholder="User Personal Email"  required>
                                </div>
                                
                        </div>
                    </div>
                </div>

                <div class="custom-control custom-checkbox d-flex justify-content-center">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Accept the Privacy Policy</label>
                </div>

                <div class="form-row">
                  <div class="h-auto w-auto col-md-6 p-2">
                      <input type="button" class="btn btn-primary " name="enroll_me" type="submit" value="back" onclick="window.location.replace('/MajorProject/student')">
                    </div>
                    <div class="h-auto w-auto col-md-6 p-2">
                        <input type="button" class="btn btn-primary " name="enroll_me" type="submit" value="Apply">
                    </div>
                </div>
                    
            </form> 
     
        </div>
    </div>

</body>

</html>

</body>
</html>