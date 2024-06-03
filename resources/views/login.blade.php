@include('includes/header')
 <!-- Page Banner Start-->
 <section class="page-banner padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="text-uppercase">Login</h1>
          <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
          <ol class="breadcrumb text-center">
            <li><a href="#">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li class="active">Login</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- Page Banner End -->


  <!-- Login -->
  <section id="login" class="padding">
    <div class="container">
      <h3 class="hidden">hidden</h3>
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="profile-login">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                  data-toggle="tab">Login</a></li>
              <li role="presentation"><a href="#profile" aria-controls="profile" role="tab"
                  data-toggle="tab">Register</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content padding_half" style="background-color:#4A6D67;">
              <div role="tabpanel" class="tab-pane fade in active" id="home">
                <div class="agent-p-form">
                  <form action="#" class="callus clearfix">
                
                    <div class="single-query form-group col-sm-12">
                      <input type="text" class="keyword-input" placeholder="Email">
                    </div>
                    <div class="single-query form-group  col-sm-12">
                      <input type="password" class="keyword-input" placeholder="Password">
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="col-sm-6">
                          <div class="search-form-group white form-group text-left">
                            <div class="check-box-2"><i><input type="checkbox" name="check-box"></i></div>
                            <span>Remember Me</span>
                          </div>
                        </div>
                        <div class="col-sm-6 text-right">
                          <a href="#" class="lost-pass">Lost your password?</a>
                        </div>
                      </div>
                    </div>
                    <div class=" col-sm-12">
                      <input type="submit" value="submit now" class="btn-slide border_radius">
                    </div>
                  </form>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="profile">
    <div class="agent-p-form">
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @if(session('error'))
        <p>{{ session('error') }}</p>
    @endif
        <form class="callus clearfix" method="POST" action="{{ route('adduser') }}">
            @csrf
            <div class="single-query col-sm-12 form-group">
                <select class="keyword-input" name="roleName" required>
                    <option value="" disabled selected>Who you are</option>
                    <option value="buyer">Buyer</option>
                    <option value="owner">Owner</option>
                    <option value="agent">Agent</option>
                    <option value="builder">Builder</option>
                </select>
            </div>
            <div class="single-query col-sm-12 form-group">
                <input type="text" class="keyword-input" name="username" placeholder="Name" required>
            </div>
            <div class="single-query col-sm-12 form-group">
                <input type="email" class="keyword-input" name="email" placeholder="Email Address" required>
            </div>
            <div class="single-query col-sm-12 form-group">
                <input type="text" class="keyword-input" name="phoneNumber" placeholder="Phone Number" required>
            </div>
            <div class="single-query col-sm-12 form-group">
                <input type="password" class="keyword-input" name="password" placeholder="Password" required>
            </div>
           
            <div class="search-form-group white col-sm-12 form-group text-left">
                <div class="check-box-2"><i><input type="checkbox" name="newsletter" value="1"></i></div>
                <span>Receive Newsletter</span>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="query-submit-button">
                    <input type="submit" name="submit" value="Create an Account" class="btn-slide">
                </div>
            </div>
        </form>
    </div>
</div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Login end -->



@include('includes/footer')