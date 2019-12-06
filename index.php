<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        .register {
            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
            margin-top: 3%;
            padding: 3%;
        }

        .register-left {
            text-align: center;
            color: #fff;
            margin-top: 4%;
        }

        .register-left input {
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            width: 60%;
            background: #f8f9fa;
            font-weight: bold;
            color: #383d41;
            margin-top: 30%;
            margin-bottom: 3%;
            cursor: pointer;
        }

        .register-right {
            background: #f8f9fa;
            border-top-left-radius: 10% 50%;
            border-bottom-left-radius: 10% 50%;
        }

        .register-left img {
            margin-top: 15%;
            margin-bottom: 5%;
            width: 25%;
            -webkit-animation: mover 2s infinite alternate;
            animation: mover 1s infinite alternate;
        }

        @-webkit-keyframes mover {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-20px);
            }
        }

        @keyframes mover {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-20px);
            }
        }

        .register-left p {
            font-weight: lighter;
            padding: 12%;
            margin-top: -9%;
        }

        .register .register-form {
            padding: 10%;
            margin-top: 1%;
        }

        .btnRegister {
            float: right;
            margin-top: 10%;
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            background: #0062cc;
            color: #fff;
            font-weight: 600;
            width: 50%;
            cursor: pointer;
        }

        .register .nav-tabs {
            margin-top: 3%;
            border: none;
            background: #0062cc;
            border-radius: 1.5rem;
            width: 28%;
            float: right;
        }

        .register .nav-tabs .nav-link {
            padding: 2%;
            height: 34px;
            font-weight: 600;
            color: #fff;
            border-top-right-radius: 1.5rem;
            border-bottom-right-radius: 1.5rem;
        }

        .register .nav-tabs .nav-link:hover {
            border: none;
        }

        .register .nav-tabs .nav-link.active {
            width: 100px;
            color: #0062cc;
            border: 2px solid #0062cc;
            border-top-left-radius: 1.5rem;
            border-bottom-left-radius: 1.5rem;
        }

        .register-heading {
            text-align: center;
            margin-top: 8%;
            margin-bottom: -15%;
            color: #495057;
        }

        .space {
            margin-top: 1%;
        }
    </style>
</head>

<body>
    <form action="checkout.php" method="POST">
        <div class="container register">
            <div class="row">
                <div class="col-md-3 register-left">
                    <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
                    <h3>Paypal api integration </h3>




                </div>
                <div class="col-md-9 register-right">
                    <div class="tab-content" id="myTabContent">

                        <div class="register-form">
                            <div class="row">
                                <div class="  form-group col-md-12  col-sm-12">
                                    <label for="product"> Product</label>
                                    <input id="product" name="product" class=" form-control" type="text" placeholder="product">
                                </div>
                                <div class="form-group col-md-12 col-sm-12 ">
                                    <label for="price"> Price</label>
                                    <input id="price" name="price" class=" form-control" type="text" placeholder="Price">
                                </div>
                            </div>

                            <input type="hidden" name="return" value="https://www.our-site.com/paypal_pdt" />
                            <input type="hidden" name="cancel_return" value="https://www.our-site.com/paypal_cancel" />
                            <input type="hidden" name="notify_url" value="https://www.our-site.com/paypal_ipn" />

                            <!--   <div class="row">
                                <div class="  form-group col-md-6  col-sm-12">
                                    <label for="fn"> First Name </label>
                                    <input id="fn" name="fn" class=" form-control required" type="text" placeholder="First Name">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 ">
                                    <label for="ln"> Last Name</label>
                                    <input id="ln" name="ln" class=" form-control" type="text" placeholder="Last Name">
                                </div>
                            </div>
                           <div class="row">
                                <div class="form-group  ">
                                    <label for="add"> Address</label>
                                    <br>
                                    <input class="required col-md-12 col-sm-12" type="tex" name="add" id="add">
                                    <input class="col-md-12 col-sm-12 space" type="text" name="st1" id="st1" placeholder="street 1">
                                    <input class="col-md-12 col-sm-12 space" type="text" name="st2" id="st2" placeholder="street 2">
                                    <input class="col-md-12 col-sm-12 space" type="text" name="city" id="city" placeholder="city">
                                    <br>
                                    <input class="col-md-5 col-sm-12 space" type="text" name="region" id="region" placeholder="state/region">
                                    <span class="col-md-2 col-sm-12 space"></span>
                                    <input class="col-md-5 col-sm-12 space" type="text" name="postal" id="postal" placeholder="postalcode">
                                    <br>


                                </div>
                                <br>
                                <div class="row">
                                    <div class="form-group  ">
                                        <Label for="socseqnumb">social security number </Label>
                                        <input class="hidden" type="text" name="socseqnumb" id="socseqnumb">
                                    </div>
                                    <div class="form-group col-sm-12  ">
                                        <Label for="age">Are u under the age of 40 </Label>
                                        <input class="" type="text" name="age" id="age">


                                        <label for="dob">DOB</label>
                                        <input type="date" name="DOB" id="DOB">

                                    </div>
                                </div>

                                <div class=" row ">
                                    <div class="form-group  form control col-md-4 col-sm-12">
                                        <Label class="" for="phonenumber">Ph. Number</Label>
                                        <input class="" type="text" name="phonenumber" id="phonenumber">
                                    </div>
                                    <div class="form-group col-md-4 col-sm-12">
                                        <Label class="" for="'emails'">Email</Label>
                                        <input class="" type="email" name="emails" id="'emails'">
                                    </div>
                                    <div class="form-group col-md-4 col-sm-12">
                                        <Label class="" for="hdate">Hire Date</Label>
                                        <input class="" type="date" name="hdate" id="hdate">
                                    </div>
                                    <br>
                                    <div class="row  form-group register-right ">

                                        <label for="qs1">Have you worked for this employer before? *</label>
                                        <input type="text" class="required col-md-12 col-sm-12 form-control" id="qs1" name="qs1">
                                    </div>

                                    <div class="row  form-group register-right ">
                                        <label for="qs2">Are you a veteran of the U. S. Armed Forces? *</label>


                                        <input type="text" class="required col-md-12 col-sm-12 form-control" id="qs2" name="qs2">
                                    </div>

                                    <div class="row  form-group register-right">
                                        <label for="qs3">Have you or a family member received food stamps in the last year? *</label>
                                        <input type="text" class="required col-md-12 col-sm-12 form-control" id="qs3" name="qs3">
                                    </div>

                                    <div class="row  form-group register-right">
                                        <label for="qs4"> Have you or a family member received cash assistance payments such as TANF (Temporary Assistance for Needy Families) in the last year?</label>
                                        <input type="text" class="required col-md-12 form-control" id="qs4" name="qs5">
                                    </div>

                                    <div class="row  form-group register-right">
                                        <label for="qs5">During the last year have you ever been convicted of a felony, released from prison, or are you on work release? *</label>
                                        <input type="text" class="required col-md-12 form-control" id="qs5" name="qs6">
                                    </div>

                                    <div class="row  form-group register-right">
                                        <label for="qs6">Before today, have you been unemployed for the last six months? *</label>
                                        <input type="text" class="required col-md-12 form-control" id="qs6" name="qs6">
                                    </div>

                                    <div class="row  form-group register-right">
                                        <label for="qs7">Were you receiving Non-Retirement Based Supplemental Security Income (SSI) from the SSA prior to accepting this job? *</label>
                                        <input type="text" class="required  col-md-12 form-control" id="qs7" name="qs7">
                                    </div>

                                    <div class="row  form-group register-right">
                                        <label for="qs8">Have you applied to Veterans Affairs, Vocational Rehabilitation Agency, or an Employment Network under the Ticket to Work Program to help find a job?*</label>
                                        <input type="text" class="required col-md-12 form-control" id="qs8" name="qs8">
                                    </div>

                                    <div class="row  form-group register-right">
                                        <label for="qs9">Are you or your spouse a member of a Native American Tribe? *</label>
                                        <input type="text" class="required col-md-12 form-control" id="qs9" name="qs9">
                                    </div>
                                                                !-->

                        </div>


                        <div class="  row register-form">
                            <input type="submit" name="submit" class="btnRegister" value="pay with paypal" />
                            <br>
                            <p class="register-right">you will be taken to Paypal to complete your payment</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
        </div>
    </form>
</body>

</html>