<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>EditProfile</title>
</head>
<body>
    <style>
    
    body {
        background-color: #A2CDF4
    }


    </style>


    <div class="container-xl px-4 mt-4">
        
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                   
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                        <!-- Profile picture help block-->
                        <div class="small font-raleway  mb-4" style="color: #A2CDF4">{{ Auth::user()->name }}</div>
                        <!-- Profile picture upload button-->
                        <button class="btn btn-Upload" style="background-color: #A2CDF4; color:#fefefe" type="button">Upload new image</button>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                   
                    <div class="card-body">
                        <form>
                            <!-- Form Group (username)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername" style="color: #A2CDF4">Full Name</label>
                                <input class="form-control" id="inputUsername" style="color: #A2CDF4" type="text" placeholder="" >
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputFirstName" style="color: #A2CDF4">First name</label>
                                    <input class="form-control" id="inputFirstName" style="color: #A2CDF4 " type="text" placeholder="" >
                                </div>
                                <!-- Form Group (last name)-->
                               
                            </div>
                            <!-- Form Row        -->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (organization name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputOrgName" style="color: #A2CDF4">Organization name</label>
                                    <input class="form-control" id="inputOrgName" style="color: #A2CDF4 " type="text" placeholder="" >
                                </div>
                                <!-- Form Group (location)-->
                               
                            </div>
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress" style="color: #A2CDF4">Email address</label>
                                <input class="form-control" id="inputEmailAddress" style="color: #A2CDF4 " type="email" placeholder="">
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (phone number)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputPhone" style="color: #A2CDF4">Phone number</label>
                                    <input class="form-control" id="inputPhone" style="color: #A2CDF4 " type="tel" placeholder="" >
                                </div>
                                <!-- Form Group (birthday)-->
                                
                            </div>
                            <!-- Save changes button-->
                            <button class="btn btn-save" style="background-color: #A2CDF4; color:#fefefe; border-radius:5px" type="submit">Save changes</button>
                        </form>
                    </div>
                </div>