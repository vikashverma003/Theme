@extends('layouts.profile')

@section('content')

    <div class="profile_page">
        <div class="container">
            <div class="profile_banner">
                <div class="profile_inner">
                    <div class="profile_pic">
                        <img src="images/profile_pic.jpg">
                    </div>
                    <div class="prfile_detail">
                        <h3>{{Auth::user()->name}}</h3>
                        <a href="#" class="profile_email">{{Auth::user()->email}}</a>
                        <a href="#" class="prenl_info">Your Personal information</a>

                    </div>

                    <div id="exTab2" class="profiletab">
                        <ul class="nav nav-pills profile_tab">
                            <li class="active"><a href="#5a" data-toggle="tab">Travellers</a></li>
                            <li><a href="#6a" data-toggle="tab">You Document</a></li>
                            <li><a href="#7a" data-toggle="tab">Setting</a></li>
                        </ul>

                        <div class="tab-content clearfix main_profile">
                            <h3 class="form-heading">Your Traveller’ s Information</h3>

                            <div class="tab-pane active" id="5a">
                                <div class="profile-tab">

                                    <!-- form-started    -->

                                    <form class="contact-form" method="post" action="/store1">
                                        @csrf
                                        <!-- row 1 -->

                                        <div class="row first-detail">

                                            <h4 class="inner-detail">Your name as on passport</h4>

                                            <!-- 1st column -->
                                            <div class="col-sm-2">
                                                <div class="form-group profile-detail">

                                                    <select "required class=form-control" id="title" name="title" >
                                                        <option>Title</option>
                                                        <option >2</option>
                                                        <option >3</option>
                                                        <option >4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- 1st column  closed -->

                                            <!-- 2nd column  -->
                                            <div class="col-sm-3">
                                                <div class="form-group profile-detail">
                                                    <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name"  required value={{Auth::user()->fname}}>
                                                </div>
                                            </div>
                                            <!-- 2nd column closed -->

                                            <!-- 3rd column -->
                                            <div class="col-sm-3">
                                                <div class="form-group profile-detail">
                                                    <input type="text" id="mname" name="mname" class="form-control"  placeholder="Middle Name"  >
                                                </div>
                                            </div>
                                            <!-- 3rd column closed -->

                                            <!-- 4th column  -->
                                            <div class="col-sm-3">
                                                <div class="form-group profile-detail">
                                                    <input type="text" id="lname" name="lname" class="form-control"  placeholder="Last Name" >
                                                </div>
                                            </div>
                                            <!-- 4th column  closed -->
                                        </div>
                                        <!-- row 1  end-->

                                        <!-- row 2  -->

                                        <div class="row first-detail">

                                            <h4 class="inner-detail">Your Contact Info Latest Available</h4>

                                            <!-- 1st column -->
                                            <div class="col-sm-4">
                                                <div class="form-group profile-detail">
                                                    <input type="email" id="email" name="email" class="form-control"  placeholder="Email Id" value={{Auth::user()->email}}>
                                                </div>
                                            </div>
                                            <!-- 1st column  closed -->

                                            <!-- 2nd column  -->
                                            <div class="col-sm-3">
                                                <div class="form-group profile-detail">
                                                    <input type="number" name="fcode" class="form-control" id="fcode" placeholder="Zip Code"  >
                                                </div>
                                            </div>
                                            <!-- 2nd column closed -->

                                            <!-- 3rd column -->
                                            <div class="col-sm-4">
                                                <div class="form-group profile-detail">
                                                    <input type="number" name="pnumber" id ="pnumber" class="form-control" placeholder="Phone Number"  >
                                                </div>
                                            </div>
                                            <!-- 3rd column closed -->

                                        </div>

                                        <!-- row 2 end -->

                                        <!-- row 3 -->

                                        <div class="row first-detail">

                                            <h4 class="inner-detail">Date of Birth</h4>

                                            <!-- 1st column -->
                                            <div class="col-sm-3">
                                                <div class="form-group profile-detail">
                                                    <input type="number" name="date"  class="form-control" id="date" placeholder="Date" >
                                                </div>
                                            </div>
                                            <!-- 1st column  closed -->

                                            <!-- 2nd column  -->
                                            <div class="col-sm-3">
                                                <div class="form-group profile-detail">
                                                    <input type="text" name="month" class="form-control" id="month" placeholder="Month" >
                                                </div>
                                            </div>

                                            <!-- 2nd column  end -->

                                            <!-- 3rd column  end -->

                                            <div class="col-sm-3">
                                                <div class="form-group profile-detail">
                                                    <input type="number" name="year" class="form-control" id="year" placeholder="Year" >
                                                </div>
                                            </div>

                                            <!-- 4th column  closed -->
                                        </div>

                                        <!-- row 3 end -->

                                        <!-- row 4 end -->

                                        <div class="row button-submits">

                                            <!-- 1st column -->
                                            <div class="col-sm-12 text-right">

                                                <div class="form-group profile-detail">
                                                    <input type="submit" id="save1" class="btn btn-orange-lined" value="Save1">
                                                    <input type="submit" id="Cancel" class="btn btn-blue-lined" value="Cancel">
                                                </div>

                                            </div>
                                            <!-- 1st column  closed -->

                                        </div>

                                        <!-- row 4 end -->

                                    </form>
                                </div>
                            </div>

                            <div class="tab-pane" id="6a">
                                <div class="profile-tab">

                                    <!-- form-started    -->

                                    <!-- form-started    -->
                                    <form class="contact-form" method="post" action=" ">
                                        <!-- row 1 -->
                                        <div class="row first-detail">
                                            <h4 class="inner-detail">Passport Information</h4>
                                            <h6 class="headlien">Please enter Father,Mother or Legal Guardian Names as applicable ( specifying atleast one of these in mandatory ).</h6>
                                            <!-- 1st column -->
                                            <div class="col-sm-4">
                                                <div class="form-group profile-detail">
                                                    <input type="text" name="ffmidanme" class="form-control" id="fathmidname" placeholder="Father's Name" required>
                                                </div>
                                            </div>
                                            <!-- 1st column  closed -->

                                            <!-- 2nd column  -->
                                            <div class="col-sm-2">
                                                <div class="form-group profile-detail">
                                                    <input type="text" name="fsurname" class="form-control" id="surname" placeholder="Surname" required>
                                                </div>
                                            </div>
                                            <!-- 2nd column closed -->

                                            <!-- 3rd column -->
                                            <div class="col-sm-4">
                                                <div class="form-group profile-detail">
                                                    <input type="text" name="fmothanme" class="form-control" id="fmothanme" placeholder="Mother's Name" required>
                                                </div>
                                            </div>
                                            <!-- 3rd column closed -->

                                            <!-- 4th column  -->
                                            <div class="col-sm-2">
                                                <div class="form-group profile-detail">
                                                    <input type="text" name="fsurname2" class="form-control" id="surname2" placeholder="Surname" required>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 4th column  closed -->

                                        <!-- row 1  end-->

                                        <!-- row 2  -->

                                        <div class="row first-detail">

                                            <h4 class="inner-detail">Your Visa Information</h4>
                                            <h6 class="headlien">Please enter  Address , Country Name and Nationality
                                                     as applicable ( specifying all of these in mandatory ).</h6>

                                            <!-- 1st column -->
                                            <div class="col-sm-3">
                                                <div class="form-group profile-detail">
                                                    <input type="text" name="fhousenum" class="form-control" id="hnum" placeholder="House No./Street" required>
                                                </div>
                                            </div>
                                            <!-- 1st column  closed -->

                                            <!-- 2nd column  -->
                                            <div class="col-sm-3">
                                                <div class="form-group profile-detail">
                                                    <input type="text" name="fvilltoci" class="form-control" id="villtoci" placeholder="Village/Town/City" required>
                                                </div>
                                            </div>
                                            <!-- 2nd column closed -->

                                            <!-- 3rd column -->
                                            <div class="col-sm-3">
                                                <div class="form-group profile-detail">
                                                    <input type="tel" name="fstprdi" class="form-control" id="stprdi" placeholder="State/Province/District" required>
                                                </div>
                                            </div>
                                            <!-- 3rd column closed -->

                                            <!-- 4th column -->
                                            <div class="col-sm-3">
                                                <div class="form-group profile-detail">
                                                    <input type="tel" name="fnationality" class="form-control" id="nationality" placeholder="Nationality" required>
                                                </div>
                                            </div>
                                            <!-- 4th column closed -->
                                        </div>
                                        <!-- row 2 end -->

                                        <!-- row 3  -->
                                        <div class="row button-submits">
                                            <!-- 1st column -->
                                            <div class="col-sm-12 text-right">
                                                <div class="form-group profile-detail">
                                                    <input type="submit" id="save3" class="btn btn-orange-lined" value="Save">
                                                    <input type="submit" id="save4" class="btn btn-blue-lined" value="Cancel">
                                                </div>
                                            </div>
                                            <!-- 1st column  closed -->
                                        </div>
                                        <!-- row 3 end -->
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane" id="7a">
                                <div class="profile-tab">
                                    <!-- form-started    -->
                                    <form class="contact-form" method="post" action=" ">
                                        <!-- row 1 -->
                                        <div class="row first-detail">
                                            <h4 class="inner-detail">Change Password</h4>

                                            <!-- 1st column -->
                                            <div class="col-sm-4">
                                                <div class="form-group profile-detail">
                                                    <input type="password" name="fcrrenpwd" class="form-control" id="crrenpwd" placeholder="Current Password" required>
                                                </div>
                                            </div>
                                            <!-- 1st column  closed -->

                                            <!-- 2nd column  -->
                                            <div class="col-sm-4">
                                                <div class="form-group profile-detail">
                                                    <input type="password" name="fnewpwd" class="form-control" id="newpwd" placeholder="New Password" required>
                                                </div>
                                            </div>
                                            <!-- 2nd column closed -->

                                            <!-- 3rd column -->
                                            <div class="col-sm-4">
                                                <div class="form-group profile-detail">
                                                    <input type="password" name="fconfrenpwd" class="form-control" id="confrenpwd" placeholder="Confirm Password" required>
                                                </div>
                                            </div>
                                            <!-- 3rd column closed -->

                                        </div>
                                        <!-- 4th column  closed -->

                                        <!-- row 1  end-->

                                        <!-- row 2  -->
                                        <div class="row button-submits">
                                            <!-- 1st column -->
                                            <div class="col-sm-12 text-right">
                                                <div class="form-group profile-detail">
                                                    <input type="submit" id="save5" class="btn btn-orange-lined" value="Save">
                                                    <input type="submit" id="save6" class="btn btn-blue-lined" value="Cancel">
                                                </div>
                                            </div>
                                            <!-- 1st column  closed -->
                                        </div>
                                        <!-- row 2 end -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
