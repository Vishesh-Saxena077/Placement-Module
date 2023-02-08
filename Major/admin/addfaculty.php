<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acadmics | Student | Enrollment From</title>

    <link rel="stylesheet" href="./css/en.css">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
  
    <div class="h-100 w-auto flex-row d-flex justify-content-center  form-base ">  
        <div class="h-auto w-100 d-flex justify-content-flex-start flex-column  form-base2 ">

        <!-- Header -->
            <div class="w-100  d-flex justify-content-center align-items-center header ">
                <div class="h-100 w-100 d-flex justify-content-center align-items-center  header-base">
                    <p class="h1 header-text">
                        Add Faculty
                    </p>
                </div>
            </div>

        <!-- Body -->
            <form action="#" method="POST" class="p-3" enctype="multipart/form-data">

                <div class="h-auto w-auto infobox"> 
                    <div class="h-auto w-auto">
                        <div class="col-md-12 p-3 box-head">Personal Details</div>
                    </div>
                    <div class="h-auto w-auto p-1 ">

                        <div class="form-group col-md-12">
                            <label for="propic">Profile Picture</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input inputfeild" name="propic" id="propic" required>
                                <label class="custom-file-label inputfeild" for="propic">Choose Passport Size Photo</label>
                            </div>
                        </div>

                        <!-- NAMES -->
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="fname">ID</label>
                                <input type="text" class="form-control inputfeild" id="staffid" placeholder="Staff ID"  required value="4568998">
                            </div>
                            
                        </div>

                        <!-- NAMES -->
                        <div class="form-row">
                            
                            <div class="form-group col-md-4">
                                <label for="fname">First Name</label>
                                <input type="text" class="form-control inputfeild" id="fname" placeholder="First Name"  required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="mname">Middle Name</label>
                                <input type="text" class="form-control inputfeild" id="mname" placeholder="Middle Name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="lname">Last Name</label>
                                <input type="text" class="form-control inputfeild" id="lname" placeholder="Last Name"  required>
                            </div>
                        </div>

                        <!-- address -->
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="fname">Address</label>
                                <textarea class="form-control  inputfeild" name="address" id="address"  required></textarea>
                            </div>
                        </div>

                        <!-- City / State / Country -->
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="city">City</label>
                                <select class="form-control  inputfeild" name="city" id="city"  required>
                                    <option value="null">-- SELECT --</option>
                                    <option value="obcgen">...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="state">State</label>
                                <select class="form-control  inputfeild" name="state" id="state"  required>
                                    <option value="null">-- SELECT --</option>
                                    <option value="obcgen">...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="country">Country</label>
                                <select class="form-control  inputfeild" name="country" id="country"  required>
                                    <option value="null">-- SELECT --</option>
                                    <option value="obcgen">...</option>
                                </select>
                            </div>
                        </div>

                 
                        <!-- City / State / Country -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="category">Gender</label>
                                <select class="form-control  inputfeild" name="gender" id="gender" required>
                                    <option value="null">-- SELECT --</option>
                                    <option value="Male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="dob">Date of Birth</label>
                                <input class="form-control  inputfeild" type="date" name="dob" id="dob"  required>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="zipcode">Zip Code</label>
                                <input class="form-control  inputfeild" type="text" name="zipcode" id="zipcode"  required>
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

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="telnum">Personal Number</label>
                                <input type="tel" class="form-control  inputfeild" name="personalnum" id="telnum" placeholder="(00000-00000)"  required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="telnum">Other Number</label>
                                <input type="tel" class="form-control  inputfeild" name="othernum" id="telnum2" placeholder="(00000-00000)">
                            </div>
                            
                        </div>
                        
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="h-auto w-auto infobox margin-top-5"> 
                    <div class="h-auto w-auto">
                        <div class="col-md-12 p-3 box-head">Education</div>
                    </div>
                    <div class="h-auto w-auto p-1">

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="telnum">Highest Qualification</label>
                                <input type="tel" class="form-control  inputfeild" name="personalnum" id="telnum" placeholder="(00000-00000)"  required>
                            </div>

                            
                        </div>
                        
                    </div>
                </div>

                <!-- Parents details -->
                 <div class="h-auto w-auto infobox"> 
                    <div class="h-auto w-auto">
                        <div class="col-md-12 p-3 box-head"> ID Proofing</div>
                    </div>
                    <div class="h-auto w-auto p-1">
                        <div class="form-row">
                            

                            <div class="form-group col-md-12">
                                <label for="category">ID Type</label>
                                <select class="form-control  inputfeild" name="gender" id="gender" required>
                                    <option value="null">-- SELECT --</option>
                                    <option value="passport">Passport</option>
                                    <option value="PAN card">PAN Card</option>
                                    <option value="Addhar Card">Addhar Card</option>
                                </select>
                            </div>

                            <div class="form-group col-md-12">
                            <label for="AdharCard">ID Proof</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input inputfeild" name="AdharCard" id="AdharCard" required>
                                <label class="custom-file-label inputfeild" for="AdharCard">Choose ID</label>
                            </div>
                        </div>
                        </div>
                    </div>
                 </div>
                 
                 

                <!-- Education Info -->
                <div class="h-auto w-auto infobox"> 
                    <div class="h-auto w-auto">
                        <div class="col-md-12 p-3 box-head">Work</div>
                    </div>
                    <div class="h-auto w-auto p-1">
                        <!-- Work info -->
                        <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label for="tenschoolname">Designation</label>
                                    <input type="text" class="form-control inputfeild" name="tenschoolname" id="tenschoolname" placeholder="Designation">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="tenschoolname">Working Department</label>
                                    <input type="text" class="form-control inputfeild" name="tenschoolname" id="tenschoolname" placeholder="Working Departmant">
                                </div>


                        </div>
                    </div>
                </div>


                                <!-- Salary Info -->
                <div class="h-auto w-auto infobox"> 
                    <div class="h-auto w-auto">
                        <div class="col-md-12 p-3 box-head">Salary</div>
                    </div>
                    <div class="h-auto w-auto p-1">
                        <!-- Work info -->
                        <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="tenschoolname">Salary</label>
                                    <input type="text" class="form-control inputfeild" name="tenschoolname" id="tenschoolname" placeholder="Salary">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="tenschoolname">Bonus</label>
                                    <input type="text" class="form-control inputfeild" name="tenschoolname" id="tenschoolname" placeholder="Bonus (if any)">
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
                      <input type="button" class="btn btn-primary " name="back" type="submit" value="back" onclick="window.location.replace('./staffFaculty.php')">
                    </div>
                    <div class="h-auto w-auto col-md-6 p-2">
                        <input type="button" class="btn btn-primary " name="addstaff" type="submit" value="Add">
                    </div>
                </div>
                    
            </form> 
     
        </div>
    </div>


</body>
</html>