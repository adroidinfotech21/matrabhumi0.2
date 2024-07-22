@include('includes/header')


<!-- Page Banner Start-->
<section class="page-banner padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="text-uppercase">Profile</h1>
                <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                <ol class="breadcrumb text-center">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Profile</li>
                </ol>
            </div>
        </div>
    </div>
    </ section>
    <!-- Page Banner End -->




    <!-- Profile Start -->
    <section id="agent-2-peperty" class="profile padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="f-p-links margin_bottom">
                        <li><a href="{{url('user-profile') }}" class="active"><i class="icon-icons230"></i>Profile</a>
                        </li>
                        <li><a href=""><i class="icon-icons215"></i> My Properties</a></li>
                        <li><a href="{{url('addproperty') }}"><i class="icon-icons215"></i> Add Property</a></li>
                        <li><a href="{{url('favoriteproperty') }}"><i class="icon-icons43"></i> Favorite Properties</a>
                        </li>
                        <li><a href="login.html">
                                <form action="{{ route('logout') }}"> <button>Logout</button> </form>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-3">
            <div class="row">
                <!-- <div class="col-md-4 col-sm-6 col-xs-12">
                   
                    <div class="agent-p-img">
                        <img src="images/profile.jpg" class="img-responsive" alt="image" />
                        <a href="#" class="top10 bottom20">Update Profile Pict ure</a>
                        <p class="text-center">Minimum 215px x 215px<span>*</span></p>
                    </div>
                </div> -->
                <div class="container">
                    <h1>User Profile</h1>
                    <p><strong>ID:</strong> {{ $user->id }}</p>
                    <p><strong>Email:</strong> {{ $user->email }}</p>
                    <p><strong>Name:</strong> {{ $user->name }}</p>
                    <p><strong>Phone:</strong> {{ $user->phone }}</p>
                    <p><strong>Role:</strong> {{ $user->role }}</p>
                </div>
                <!-- <div class="col-sm-4">
                                    <div class="single-query">
                                        <label>Skype:</label>
                                    </div>
                                </div> -->
                <!-- <div class="col-sm-8">
                                    <div class="single-query form-group">
                                        <input type="text" placeholder="bohdan.kononets" class="keyword-input">
                                    </div>
                                </div> -->
                <!-- <div class="col-sm-4">
                                    <div class="single-query">
                                        <label>About:</label>
                                    </div>
                                </div> -->
                <!-- <div class="col-sm-8">
                                    <div class="single-query form-group">
                                        <textarea placeholder="Write here somthing about yours"
                                            class="form-control"></textarea>

                                    </div>
                                </div> -->
                <!-- <div class="col-md-12 col-sm-12 col-xs-12 text-right">
                                    <a class="btn-blue border_radius" href="#.">Save Changes</a>
                                </div> -->
                </form>
            </div>
        </div>
        </div>
        </div>
        </div>
        {{-- <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6 col-xs-12 profile-form margin40">
                    <h3 class="bottom30 margin40">My Social Network</h3>
                    <div class="row">
                        <form class="callus">
                            <div class="col-sm-4">
                                <div class="single-query">
                                    <label>Facebook:</label>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="single-query form-group">
                                    <input type="text" placeholder="http://facebook.com" class="keyword-input">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="single-query">
                                    <label>Twitter:</label>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="single-query form-group">
                                    <input type="text" placeholder="http://twitter.com" class="keyword-input">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="single-query">
                                    <label>Google Plus:</label>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="single-query form-group">
                                    <input type="text" placeholder="http://google-plus.com" class="keyword-input">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="single-query">
                                    <label>Linkedin:</label>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="single-query form-group">
                                    <input type="text" placeholder="http://linkedin.com" class="keyword-input">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 text-right">
                                <a class="btn-blue border_radius" href="#.">Save Changes</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-2 hidden-xs"></div>
                <div class="col-md-5 col-sm-6 col-xs-12 profile-form margin40">
                    <h3 class=" bottom30 margin40">Change Your Password</h3>
                    <div class="row">
                        <form class="callus">
                            <div class="col-sm-4">
                                <div class="single-query">
                                    <label>Current Password:</label>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="single-query form-group">
                                    <input type="password" class="keyword-input">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="single-query">
                                    <label>New Password:</label>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="single-query form-group">
                                    <input type="password" class="keyword-input">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="single-query">
                                    <label>Confirm Password:</label>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="single-query form-group">
                                    <input type="password" class="keyword-input">
                                </div>
                            </div>
                            <div class="col-sm-12 text-right">
                                <a class="btn-blue border_radius" href="#.">Save Changes</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>
    <!-- Profile end -->

    @include('includes/footer')