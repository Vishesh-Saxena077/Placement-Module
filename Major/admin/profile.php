<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acadmics | Student | Enrollment From</title>

    <link rel="stylesheet" href="./css/enrol.css">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<style>
    .img{
        height: 150px;
        width: 150px;
        border-radius: 50%;
    }
    .img img {
        border-radius:50%;
        z-index: 1;
    }

   .cibasebox{

       max-height: 330px;
    
       overflow-y: scroll;
   }
    .cibasebox,.basebox{
        background-color: #F0EEED;
    }
    .label{
        background-color: #B2B2B2;
    }
    h3{
        text-decoration: underline;
    }
    
    

</style>
</head>
<body>
 
   

<body onkeydown="if(!event.target.matches('input')&&!event.target.matches('textarea'))return!1" oncontextmenu="return!1" onselectstart="return!1" ondragstart="return!1">

                 

 <div class="h-100 w-auto flex-row d-flex justify-content-center  form-base ">  
        <div class="h-auto w-100 d-flex justify-content-flex-start flex-column  form-base2 ">

        <!-- Header -->
            <div class="w-100  d-flex justify-content-center align-items-center header ">
                <div class="h-100 w-100 d-flex justify-content-center align-items-center  header-base">
                    <p class="h1 header-text">
                        Profile
                    </p>
                </div>
            </div>

            
            <div class="w-auto h-auto p-3 ">
                <div class="w-auto h-auto p-3  ">
                    <button class="col-md-1" type="button" onclick="window.location.replace('/MajorProject/admin')">Back</button>
                    <button class="col-md-1" type="button" onclick="window.location.replace('./profileedit.php')">Edit</button>

                    <div class="form-row basediv">

                        <div class="h-auto col-md-4 p-3  d-flex justify-content-center align-items-center">
                            
                            <div class="w-100 h-auto p-3 basebox">
                                <div class="p-2 col-md-12 d-flex justify-content-center align-items-center ">
                                    <div class="p-1 bg-dark img d-flex justify-content-center align-items-center">
                                        <img src="./images/male.jpg" alt="No Profile Image" width="100%" height="100%">
                                    </div>
                                </div>

                                <div class="p-2 col-md-12 d-flex justify-content-center align-items-center ">
                                    <div class="form-row">
                                        <div class="col-md-12 p-1 d-flex justify-content-center align-items-center">
                                            <h4>Vishesh Saxena</h4>
                                        </div>
                                        <div class="col-md-12 p-1 d-flex justify-content-center align-items-center">
                                            <a href="#">visheshsaxena7777@gmail.com</a>
                                        </div>
                                        <div class="col-md-12 p-1 d-flex justify-content-center align-items-center">
                                            <a href="#">7355288989</a>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        
                        </div>

                        <div class="h-auto col-md-8 p-3 ">
                           
                            <div class="col-md-12 d-flex justify-content-center align-items-center p-3 cibasebox" style="overflow-y: auto;">
                                <div class="form-row col-md-12 ">

                                    <div class="p-1 col-md-12 d-flex justify-content-flex-start align-items-center head">
                                        <h3 class="col-md-12 h-100 ">Professional Information</h3>
                                    </div>
                                    <div class="p-2 col-md-12 d-flex justify-content-center align-items-center">
                                        <div class="col-md-6 label">ID :</div>
                                        <div class="col-md-6 ">NULL</div>
                                    </div>
                                    <div class="p-2 col-md-12 d-flex justify-content-center align-items-center">
                                        <div class="col-md-6 label">Salary :</div>
                                        <div class="col-md-6 ">NULL</div>
                                    </div>
                                    
                                    <div class="p-2 col-md-12 d-flex justify-content-center align-items-center">
                                        <div class="col-md-6 label">University :</div>
                                        <div class="col-md-6 ">NULL</div>
                                    </div>
                                    <div class="p-2 col-md-12 d-flex justify-content-center align-items-center">
                                        <div class="col-md-6 label">Designation:</div>
                                        <div class="col-md-6 ">NULL</div>
                                    </div>
                                    <div class="p-2 col-md-12 d-flex justify-content-center align-items-center">
                                        <div class="col-md-6 label">Department :</div>
                                        <div class="col-md-6 ">	NULL</div>
                                    </div>
                                    
                                </div>
                            </div>
                           

                        </div>

                        <div class="h-auto col-md-12 p-3 ">
                           
                            <div class="col-md-12 d-flex justify-content-center align-items-center p-3 basebox">
                                <div class="form-row col-md-12">

                                    <div class="p-1 col-md-12 d-flex justify-content-flex-start align-items-center head">
                                        <h3 class="col-md-12 h-100 ">Persoanl/Family Information</h3>
                                    </div>
                                    <div class="p-2 col-md-6 d-flex justify-content-center align-items-center">
                                        <div class="col-md-6 label">ID Proof Type:</div>
                                        <div class="col-md-6 ">NULL</div>
                                    </div>
                                    <div class="p-2 col-md-6 d-flex justify-content-center align-items-center">
                                        <div class="col-md-6 label">DOB :</div>
                                        <div class="col-md-6 ">NULL</div>
                                    </div>
                                    <div class="p-2 col-md-6 d-flex justify-content-center align-items-center">
                                        <div class="col-md-6 label">Blood Group :</div>
                                        <div class="col-md-6 ">	NULL </div>
                                    </div>
                                    <div class="p-2 col-md-6 d-flex justify-content-center align-items-center">
                                        <div class="col-md-6 label">Address :</div>
                                        <div class="col-md-6 ">NULL </div>
                                    </div>
                                    <div class="p-2 col-md-6 d-flex justify-content-center align-items-center">
                                        <div class="col-md-6 label">City :</div>
                                        <div class="col-md-6 ">NULL </div>
                                    </div>
                                    <div class="p-2 col-md-6 d-flex justify-content-center align-items-center">
                                        <div class="col-md-6 label">State :</div>
                                        <div class="col-md-6 ">NULL </div>
                                    </div>

                                </div>
                            </div>
                           

                        </div>

                        

                    </div>

                </div>
            </div>
            
     
        </div>
    </div>

</body>

</html>

</body>
</html>