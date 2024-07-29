@include('includes/header')
<!-- Advance Search -->
<div class="blue_navi">
  <div class="container">
    <div class="row">
      <div class="property-query-area">

        <form class="callus clearfix" id="propertyFilterForm">
          <div class="col-md-6 col-sm-6">
            <div class="intro">
              <select id="city" name="city">
                <option selected="" value="any">City</option>
                <option value="Bhopal">Bhopal</option>
                <option value="Indore">Indore</option>
                <option value="Sagar">Sagar</option>
                <option value="Jabalpur">Jabalpur</option>
                <option value="Mandideep">Ujjain
                </option>
                <option value="Katni">Katni</option>
                <option value="Katni">Dewas </option>
                <option value="Katni">Ratlam </option>
                <option value="Katni">Satna </option>
                <option value="Katni">Rewa </option>



              </select>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="single-query form-group">
              <div class="intro">
                <select name="propertyTypeID" id="propertyTypeID">
                  <option selected="" value="any">property type </option>
                  <option value="1">Flat/ Apartment</option>
                  <option value="2">Residential House </option>
                  <option value="">Villa</option>
                  <option value="3">Builder Floor Apartment</option>
                  <option value="4">Residential Land/ Plot</option>
                  <option value="5">Penthouse</option>
                  <option value="6">Studio Apartment</option>
                  <option value="7">Commercial Office Space</option>
                  <option value="8">Office in IT Park/ SEZ</option>
                  <option value="9">Commercial Shop</option>
                  <option value="10">Commercial Showroom</option>
                  <option value="11">Commercial Land</option>
                  <option value="12">Warehouse/ Godown</option>
                  <option value="13">Industrial Land</option>
                  <option value="14">Industrial Building</option>
                  <option value="15">Industrial Shed</option>
                  <option value="16">Agricultural Land</option>
                  <option value="17">Farm House</option>
                </select>
              </div>
            </div>
          </div>

          <div class="col-md-2 col-sm-12 text-right">

            <button type="button" id="searchButton" class=" text-center text-uppercase border_radius"
              style="color:white;"><i class="icon-settings"></i>search</button>
          </div>
        </form>
        <div class="opened">
          <form class="callus clearfix">
            <div class="col-md-3 col-sm-6">
              <div class="single-query form-group">
                <div class="intro">
                  <select>
                    <option class="active">Property Type</option>
                    <option>All areas</option>
                    <option>Bayonne </option>
                    <option>Greenville</option>
                    <option>Manhattan</option>
                    <option>Queens</option>
                    <option>The Heights</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="single-query form-group">
                <div class="intro">
                  <select>
                    <option class="active">Property Status</option>
                    <option>All areas</option>
                    <option>Bayonne </option>
                    <option>Greenville</option>
                    <option>Manhattan</option>
                    <option>Queens</option>
                    <option>The Heights</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="row search-2">
                <div class="col-md-6 col-sm-6">
                  <div class="single-query form-group">
                    <div class="intro">
                      <select>
                        <option class="active">Min Beds</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="single-query form-group">
                    <div class="intro">
                      <select>
                        <option class="active">Min Baths</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="row">
                <div class="col-sm-6">
                  <div class="single-query form-group">
                    <input type="text" class="keyword-input" placeholder="Min Area (sq ft)">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="single-query form-group">
                    <input type="text" class="keyword-input" placeholder="Max Area (sq ft)">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-5">
              <div class="group-button-search">
                <a data-toggle="collapse" href=".search-propertie-filters" class="more-filter">
                  <i class="fa fa-plus text-1" aria-hidden="true"></i><i class="fa fa-minus text-2 hide"
                    aria-hidden="true"></i>
                  <div class="text-1">Show more search options</div>
                  <div class="text-2 hide">less more search options</div>
                </a>
              </div>
            </div>
            <div class="col-md-8">
              <div class="row">
                <div class="col-md-8 col-sm-6">
                  <div class="single-query-slider">
                    <label>Price Range:</label>
                    <div class="price text-right">
                      <span></span>
                      <div class="leftLabel"></div>
                      <span>to </span>
                      <div class="rightLabel"></div>
                    </div>
                    <div data-range_min="0" data-range_max="1500000" data-cur_min="0" data-cur_max="1500000"
                      class="nstSlider">
                      <div class="bar"></div>
                      <div class="leftGrip"></div>
                      <div class="rightGrip"></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 text-right form-group">
                  <button type="submit" class="border_radius top15 btn-yellow bottom15">Search property</button>
                </div>
              </div>
            </div>
          </form>
          <div class="search-propertie-filters collapse">
            <div class="container-2">
              <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-4">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Home Theater</span>
                  </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-4">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Air Conditioning</span>
                  </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-4">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Balcony</span>
                  </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-4">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Gas Heat</span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-4">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Washer and Dryer</span>
                  </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-4">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>TV Cable</span>
                  </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-4">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Swimming Pool</span>
                  </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-4">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Advance Search -->



<!--Slider-->
<div class="rev_slider_wrapper">
  <div id="rev_eight" class="rev_slider" data-version="5.0">
    <ul>
      <!-- SLIDE  -->
      <li data-transition="fade">
        <img src="images/main1.png" alt="" data-bgposition="center center" data-bgfit="cover">
        <div class=" tp-caption tp-resizeme" data-start="1300" data-x="['left','center','center','center']"
          data-hoffset="['0','0','0','15']" data-y="['center','center','center','center']"
          data-voffset="['0','0','0','0']" data-responsive_offset="on" data-transform_idle="o:1;"
          data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;"
          data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;">
          <p class="topper">8,600 Per Month - Apartment</p>
          <div class="white_cap">
            <div class="price">For Rent</div>
            <div class="white_cont bottom10">
              <h3 class="bottom10 top15">Park Avenue Apartment</h3>
              <p class="bottom15">Lorem ipsum dolor sit amet, adipiscing elit, <br> sed diam power...</p>
              <a class="btn-more" href="#.">
                <i><img src="images/arrowl.png" alt="arrow"></i>
                <span>Contact Me</span>
                <i><img src="images/arrowr.png" alt="arrow"></i>
              </a>
            </div>
            <div class="property_meta clearfix">
              <div class="col-xs-6"><span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span></div>
              <div class="col-xs-6"><span><i class="icon-bed"></i>3 Bedrooms</span> </div>
            </div>
            <div class="property_meta clearfix">
              <div class="col-xs-6"><span><i class="icon-pool-stairs"></i>Swimming Pool</span> </div>
              <div class="col-xs-6"><span><i class="icon-garage"></i>1 Garage</span></div>
            </div>
            <div class="bottom_text top10">
              <p> <i class="icon-icons74"></i>Bayonne, New Jersey</p>
            </div>
          </div>
        </div>
      </li>
      <li data-transition="fade">
        <img src="images/main2.png" alt="" data-bgposition="center center" data-bgfit="cover">
        <div class="tp-caption tp-resizeme" data-x="['left','center','center','center']"
          data-hoffset="['0','0','0','15']" data-y="['center','center','center','center']"
          data-voffset="['0','0','0','0']" data-responsive_offset="on" data-start="1300" data-transform_idle="o:1;"
          data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;"
          data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;">
          <p class="topper">8,600 Per Month - Apartment</p>
          <div class="white_cap">
            <div class="price">For Rent</div>
            <div class="white_cont bottom10">
              <h3 class="bottom10 top15">Park Avenue Apartment</h3>
              <p class="bottom15">Lorem ipsum dolor sit amet, adipiscing elit, <br> sed diam power...</p>
              <a class="btn-more" href="#.">
                <i><img src="images/arrowl.png" alt="arrow"></i>
                <span>Contact Me</span>
                <i><img src="images/arrowr.png" alt="arrow"></i>
              </a>
            </div>
            <div class="property_meta clearfix">
              <div class="col-xs-6"><span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span></div>
              <div class="col-xs-6"><span><i class="icon-bed"></i>3 Bedrooms</span> </div>
            </div>
            <div class="property_meta clearfix">
              <div class="col-xs-6"><span><i class="icon-pool-stairs"></i>Swimming Pool</span> </div>
              <div class="col-xs-6"><span><i class="icon-garage"></i>1 Garage</span></div>
            </div>
            <div class="bottom_text top10">
              <p> <i class="icon-icons74"></i>Bayonne, New Jersey</p>
            </div>
          </div>
        </div>
      </li>
      <li data-transition="fade">
        <img src="images/main3.png" alt="" data-bgposition="center center" data-bgfit="cover">
        <div class="tp-caption tp-resizeme" data-x="['left','center','center','center']"
          data-hoffset="['0','0','0','15']" data-y="['center','center','center','center']"
          data-voffset="['0','0','0','0']" data-responsive_offset="on" data-start="1300" data-transform_idle="o:1;"
          data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;"
          data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;">
          <p class="topper">8,600 Per Month - Apartment</p>
          <div class="white_cap">
            <div class="price">For Rent</div>
            <div class="white_cont bottom10">
              <h3 class="bottom10 top15">Park Avenue Apartment</h3>
              <p class="bottom15">Lorem ipsum dolor sit amet, adipiscing elit, <br> sed diam power...</p>
              <a class="btn-more" href="#.">
                <i><img src="images/arrowl.png" alt="arrow"></i>
                <span>Contact Me</span>
                <i><img src="images/arrowr.png" alt="arrow"></i>
              </a>
            </div>
            <div class="property_meta clearfix">
              <div class="col-xs-6"><span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span></div>
              <div class="col-xs-6"><span><i class="icon-bed"></i>3 Bedrooms</span> </div>
            </div>
            <div class="property_meta clearfix">
              <div class="col-xs-6"><span><i class="icon-pool-stairs"></i>Swimming Pool</span> </div>
              <div class="col-xs-6"><span><i class="icon-garage"></i>1 Garage</span></div>
            </div>
            <div class="bottom_text top10">
              <p> <i class="icon-icons74"></i>Bayonne, New Jersey</p>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
<!--Slider ends-->


<section id="property" class="padding index2 bg_light">

  <div class="container">

    <div class="row">
      <div class="col-xs-12 col-sm-10">
        <h2 class="" style="color:black;">Featured properties</h2>
        <p class="heading_space"> We are proud to present to you some of the best homes, apartments, offices e.g.
          across Australia for affordable prices.
        </p>
      </div>
    </div>
    <div class="row">
      <div class="three-item owl-carousel">
        <div class="item">
          <div class="property_item">
            <!-- <div class="property_head text-center">
      <h3 class="captlize"><a href="property_detail1.html">Historic Town House</a></h3>
      <p>45 Regent Street, London, UK</p>
      </div> -->
            <div class="image">
              <a href="#"><img src="images/f1.png" alt="latest property" class="img-responsive"></a>
              <div class="price lighter clearfix">
                <span class="tag pull-right">For Sale</span>
              </div>
            </div>
            <div class="proerty_content">
              <div class="property_meta">
                <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                <span><i class="icon-bed"></i>2 Office Rooms</span>
                <span><i class="icon-safety-shower"></i>1 Bathroom</span>
              </div>
              <div class="proerty_text">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum
                  soluta nobis …</p>
              </div>
              <div class="favroute clearfix">
                <p class="pull-md-left">8,600 Per Month</p>
                <ul class="pull-right">
                  <li><a href="#."><i class="icon-like"></i></a></li>
                  <li><a href="#one" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a>
                  </li>
                </ul>
              </div>
              <div class="toggle_share collapse" id="one">
                <ul>
                  <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                  <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                  <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="property_item">
            <!-- <div class="property_head default_clr text-center">
      <img src="images/favruite.png" alt="property" class="start_tag">
      <h3 class="captlize"><a href="property_detail2.html">Historic Town House</a></h3>
      <p>45 Regent Street, London, UK</p>
      </div> -->
            <div class="image">
              <a href="#"> <img src="images/f2.png" alt="latest property" class="img-responsive"></a>
              <div class="price lighter clearfix">
                <span class="tag">For Sale</span>
              </div>
            </div>
            <div class="proerty_content">
              <div class="property_meta">
                <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                <span><i class="icon-bed"></i>3 Bedrooms</span>
                <span><i class="icon-safety-shower"></i>2 Bedrooms</span>
              </div>
              <div class="proerty_text">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum
                  soluta nobis…</p>
              </div>
              <div class="favroute clearfix">
                <p class="pull-md-left">8,600</p>
                <ul class="pull-right">
                  <li><a href="#."><i class="icon-like"></i></a></li>
                  <li><a href="#two" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a>
                  </li>
                </ul>
              </div>
              <div class="toggle_share collapse" id="two">
                <ul>
                  <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                  <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                  <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="property_item">
            <!-- <div class="property_head text-center">
      <h3 class="captlize"><a href="property_detail3.html">Historic Town House</a></h3>
      <p>45 Regent Street, London, UK</p>
      </div> -->
            <div class="image">
              <a href="#"><img src="images/f3.png" alt="latest property" class="img-responsive"></a>
              <div class="price lighter clearfix">
                <span class="tag pull-right">For Sale</span>
              </div>
            </div>
            <div class="proerty_content">
              <div class="property_meta">
                <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                <span><i class="icon-bed"></i>2 Office</span>
                <span><i class="icon-safety-shower"></i>2 Bathroom</span>
              </div>
              <div class="proerty_text">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum
                  soluta nobis…</p>
              </div>
              <div class="favroute clearfix">
                <p class="pull-md-left">8,600 Per Month</p>
                <ul class="pull-right">
                  <li><a href="#."><i class="icon-like"></i></a></li>
                  <li><a href="#three" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a>
                  </li>
                </ul>
              </div>
              <div class="toggle_share collapse" id="three">
                <ul>
                  <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                  <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                  <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="property_item">
            <!-- <div class="property_head text-center">
      <h3 class="captlize"><a href="property_detail1.html">Historic Town House</a></h3>
      <p>45 Regent Street, London, UK</p>
      </div> -->
            <div class="image">
              <a href="#"><img src="images/f4.png" alt="latest property" class="img-responsive"></a>
              <div class="price lighter clearfix">
                <span class="tag pull-right">For Sale</span>
              </div>
            </div>
            <div class="proerty_content">
              <div class="property_meta">
                <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                <span><i class="icon-bed"></i>2 Office Rooms</span>
                <span><i class="icon-safety-shower"></i>1 Bathroom</span>
              </div>
              <div class="proerty_text">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum
                  soluta nobis …</p>
              </div>
              <div class="favroute clearfix">
                <p class="pull-md-left">8,600 Per Month</p>
                <ul class="pull-right">
                  <li><a href="#."><i class="icon-like"></i></a></li>
                  <li><a href="#one" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a>
                  </li>
                </ul>
              </div>
              <div class="toggle_share collapse" id="one">
                <ul>
                  <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                  <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                  <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="property_item">
            <!-- <div class="property_head default_clr text-center">
      <img src="images/favruite.png" alt="property" class="start_tag">
      <h3 class="captlize"><a href="property_detail2.html">Historic Town House</a></h3>
      <p>45 Regent Street, London, UK</p>
      </div> -->
            <div class="image">
              <a href="#"> <img src="images/f5.png" alt="latest property" class="img-responsive"></a>
              <div class="price lighter clearfix">
                <span class="tag pull-right">For Sale</span>
              </div>
            </div>
            <div class="proerty_content">
              <div class="property_meta">
                <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                <span><i class="icon-bed"></i>3 Bedrooms</span>
                <span><i class="icon-safety-shower"></i>2 Bedrooms</span>
              </div>
              <div class="proerty_text">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum
                  soluta nobis…</p>
              </div>
              <div class="favroute clearfix">
                <p class="pull-md-left">8,600</p>
                <ul class="pull-right">
                  <li><a href="#."><i class="icon-like"></i></a></li>
                  <li><a href="#two" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a>
                  </li>
                </ul>
              </div>
              <div class="toggle_share collapse" id="two">
                <ul>
                  <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                  <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                  <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="property_item">
            <!-- <div class="property_head text-center">
      <h3 class="captlize"><a href="#.">Historic Town House</a></h3>
      <p>45 Regent Street, London, UK</p>
      </div> -->
            <div class="image">
              <a href="#"><img src="images/f6.png" alt="latest property" class="img-responsive"></a>
              <div class="price lighter clearfix">
                <span class="tag pull-right">For Sale</span>
              </div>
            </div>
            <div class="proerty_content">
              <div class="property_meta">
                <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                <span><i class="icon-bed"></i>2 Office</span>
                <span><i class="icon-safety-shower"></i>2 Bathroom</span>
              </div>
              <div class="proerty_text">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum
                  soluta nobis…</p>
              </div>
              <div class="favroute clearfix">
                <p class="pull-md-left">8,600 Per Month</p>
                <ul class="pull-right">
                  <li><a href="#."><i class="icon-like"></i></a></li>
                  <li><a href="#three" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a>
                  </li>
                </ul>
              </div>
              <div class="toggle_share collapse" id="three">
                <ul>
                  <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                  <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                  <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</section>
<!-- test slider -->
<!--  -->
<!-- Latest Property Ends -->
<!--Deals-->
<section id="deal" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="uppercase">Best Deal Properties</h2>
        <p class="heading_space">We have Properties in these Areas View a list of Featured Properties.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="listing_full">
          <div class="image">
            <img alt="image" src="images/best3 (1).png">
            <span class="tag_t">For Sale</span>
          </div>
          <div class="listing_full_bg">
            <div class="listing_inner_full">
              <span><a href="#."><i class="icon-like"></i></a></span>
              <a href="property_detail1.html">
                <h3>Park Avenue Apartment</h3>
                <p>Towson London, MR 21501</p>
              </a>
              <div class="favroute clearfix">
                <div class="property_meta"><span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span><span><i
                      class=" icon-bed"></i>3 Bedrooms</span><span><i class="icon-safety-shower"></i>2
                    Bedrooms</span><span class="border-l">38,600 / pm</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="listing_full">
          <div class="image">
            <img alt="image" src="images/best3 (2).png">
            <span class="tag_t">For Sale</span>
          </div>
          <div class="listing_full_bg">
            <div class="listing_inner_full">
              <span><a href="#."><i class="icon-like"></i></a></span>
              <a href="property_detail2.html">
                <h3>Park Avenue Apartment</h3>
                <p>Towson London, MR 21501</p>
              </a>
              <div class="favroute clearfix">
                <div class="property_meta"><span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span><span><i
                      class=" icon-bed"></i>3 Bedrooms</span><span><i class="icon-safety-shower"></i>2
                    Bedrooms</span><span class="border-l">38,600 / pm</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="listing_full">
          <div class="image">
            <img alt="image" src="images/best3 (3).png">
            <span class="tag_t">For Sale</span>
          </div>
          <div class="listing_full_bg">
            <div class="listing_inner_full">
              <span><a href="#."><i class="icon-like"></i></a></span>
              <a href="property_detail2.html">
                <h3>Park Avenue Apartment</h3>
                <p>Towson London, MR 21501</p>
              </a>
              <div class="favroute clearfix">
                <div class="property_meta"><span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span><span><i
                      class=" icon-bed"></i>3 Bedrooms</span><span><i class="icon-safety-shower"></i>2
                    Bedrooms</span><span class="border-l">38,600 / pm</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="listing_full">
          <div class="image">
            <img alt="image" src="images/best3 (4).png">
            <span class="tag_t">For Sale</span>
          </div>
          <div class="listing_full_bg">
            <div class="listing_inner_full">
              <span><a href="#."><i class="icon-like"></i></a></span>
              <a href="property_detail3.html">
                <h3>Park Avenue Apartment</h3>
                <p>Towson London, MR 21501</p>
              </a>
              <div class="favroute clearfix">
                <div class="property_meta"><span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span><span><i
                      class=" icon-bed"></i>3 Bedrooms</span><span><i class="icon-safety-shower"></i>2
                    Bedrooms</span><span class="border-l">38,600 / pm</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="listing_full">
          <div class="image">
            <img alt="image" src="images/best3 (5).png">
            <span class="tag_t">For Sale</span>
          </div>
          <div class="listing_full_bg">
            <div class="listing_inner_full">
              <span><a href="#."><i class="icon-like"></i></a></span>
              <a href="property_detail1.html">
                <h3>Park Avenue Apartment</h3>
                <p>Towson London, MR 21501</p>
              </a>
              <div class="favroute clearfix">
                <div class="property_meta"><span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span><span><i
                      class=" icon-bed"></i>3 Bedrooms</span><span><i class="icon-safety-shower"></i>2
                    Bedrooms</span><span class="border-l">38,600 / pm</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="listing_full">
          <div class="image">
            <img alt="image" src="images/best3 (6).png">
            <span class="tag_t">For Sale</span>
          </div>
          <div class="listing_full_bg">
            <div class="listing_inner_full">
              <span><a href="#."><i class="icon-like"></i></a></span>
              <a href="property_detail1.html">
                <h3>Park Avenue Apartment</h3>
                <p>Towson London, MR 21501</p>
              </a>
              <div class="favroute clearfix">
                <div class="property_meta"><span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span><span><i
                      class=" icon-bed"></i>3 Bedrooms</span><span><i class="icon-safety-shower"></i>2
                    Bedrooms</span><span class="border-l">38,600 / pm</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="row">
        <div class="col-md-12 text-center">
          <ul class="pager">
            <li><a href="#.">1</a></li>
            <li class="active"><a href="#.">2</a></li>
            <li><a href="#.">3</a></li>
          </ul>
        </div>
      </div>
    </div> -->
</section>
<!--Deals ends-->



<!-- Latest Property -->
<section id="property" class="padding index2 bg_light">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-10">
        <h2 class="uppercase">Featured properties</h2>
        <p class="heading_space"> We are proud to present to you some of the best homes, apartments, offices e.g.
          across Australia for affordable prices.
        </p>
      </div>
    </div>
    <div class="row">
      <div class="three-item owl-carousel">
        <div class="item">
          <div class="property_item">
            <!-- <div class="property_head text-center">
                <h3 class="captlize"><a href="property_detail1.html">Historic Town House</a></h3>
                <p>45 Regent Street, London, UK</p>
              </div> -->
            <div class="image">
              <a href="#"><img src="images/f1.png" alt="latest property" class="img-responsive"></a>
              <div class="price lighter clearfix">
                <span class="tag pull-right">For Rent</span>
              </div>
            </div>
            <div class="proerty_content">
              <div class="property_meta">
                <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                <span><i class="icon-bed"></i>2 Office Rooms</span>
                <span><i class="icon-safety-shower"></i>1 Bathroom</span>
              </div>
              <div class="proerty_text">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum
                  soluta nobis …</p>
              </div>
              <div class="favroute clearfix">
                <p class="pull-md-left">8,600 Per Month</p>
                <ul class="pull-right">
                  <li><a href="#."><i class="icon-like"></i></a></li>
                  <li><a href="#one" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a>
                  </li>
                </ul>
              </div>
              <div class="toggle_share collapse" id="one">
                <ul>
                  <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                  <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                  <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="property_item">
            <!-- <div class="property_head default_clr text-center">
                <img src="images/favruite.png" alt="property" class="start_tag">
                <h3 class="captlize"><a href="#">Historic Town House</a></h3>
                <p>45 Regent Street, London, UK</p>
              </div> -->
            <div class="image">
              <a href="#"> <img src="images/f2.png" alt="latest property" class="img-responsive"></a>
              <div class="price lighter clearfix">
                <span class="tag">For Rent</span>
              </div>
            </div>
            <div class="proerty_content">
              <div class="property_meta">
                <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                <span><i class="icon-bed"></i>3 Bedrooms</span>
                <span><i class="icon-safety-shower"></i>2 Bedrooms</span>
              </div>
              <div class="proerty_text">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum
                  soluta nobis…</p>
              </div>
              <div class="favroute clearfix">
                <p class="pull-md-left">8,600</p>
                <ul class="pull-right">
                  <li><a href="#."><i class="icon-like"></i></a></li>
                  <li><a href="#two" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a>
                  </li>
                </ul>
              </div>
              <div class="toggle_share collapse" id="two">
                <ul>
                  <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                  <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                  <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="property_item">
            <!-- <div class="property_head text-center">
                <h3 class="captlize"><a href="#">Historic Town House</a></h3>
                <p>45 Regent Street, London, UK</p>
              </div> -->
            <div class="image">
              <a href="#"><img src="images/f3.png" alt="latest property" class="img-responsive"></a>
              <div class="price lighter clearfix">
                <span class="tag pull-right">For Rent</span>
              </div>
            </div>
            <div class="proerty_content">
              <div class="property_meta">
                <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                <span><i class="icon-bed"></i>2 Office</span>
                <span><i class="icon-safety-shower"></i>2 Bathroom</span>
              </div>
              <div class="proerty_text">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum
                  soluta nobis…</p>
              </div>
              <div class="favroute clearfix">
                <p class="pull-md-left">8,600 Per Month</p>
                <ul class="pull-right">
                  <li><a href="#."><i class="icon-like"></i></a></li>
                  <li><a href="#three" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a>
                  </li>
                </ul>
              </div>
              <div class="toggle_share collapse" id="three">
                <ul>
                  <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                  <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                  <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="property_item">
            <!-- <div class="property_head text-center">
                <h3 class="captlize"><a href="#">Historic Town House</a></h3>
                <p>45 Regent Street, London, UK</p>
              </div> -->
            <div class="image">
              <a href="#"><img src="images/f4.png" alt="latest property" class="img-responsive"></a>
              <div class="price lighter clearfix">
                <span class="tag pull-right">For Rent</span>
              </div>
            </div>
            <div class="proerty_content">
              <div class="property_meta">
                <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                <span><i class="icon-bed"></i>2 Office Rooms</span>
                <span><i class="icon-safety-shower"></i>1 Bathroom</span>
              </div>
              <div class="proerty_text">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum
                  soluta nobis …</p>
              </div>
              <div class="favroute clearfix">
                <p class="pull-md-left">8,600 Per Month</p>
                <ul class="pull-right">
                  <li><a href="#."><i class="icon-like"></i></a></li>
                  <li><a href="#one" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a>
                  </li>
                </ul>
              </div>
              <div class="toggle_share collapse" id="one">
                <ul>
                  <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                  <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                  <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="property_item">
            <!-- <div class="property_head default_clr text-center">
                <img src="images/favruite.png" alt="property" class="start_tag">
                <h3 class="captlize"><a href="#">Historic Town House</a></h3>
                <p>45 Regent Street, London, UK</p>
              </div> -->
            <div class="image">
              <a href="#"> <img src="images/f5.png" alt="latest property" class="img-responsive"></a>
              <div class="price lighter clearfix">
                <span class="tag pull-right">For Rent</span>
              </div>
            </div>
            <div class="proerty_content">
              <div class="property_meta">
                <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                <span><i class="icon-bed"></i>3 Bedrooms</span>
                <span><i class="icon-safety-shower"></i>2 Bedrooms</span>
              </div>
              <div class="proerty_text">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum
                  soluta nobis…</p>
              </div>
              <div class="favroute clearfix">
                <p class="pull-md-left">8,600</p>
                <ul class="pull-right">
                  <li><a href="#."><i class="icon-like"></i></a></li>
                  <li><a href="#two" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a>
                  </li>
                </ul>
              </div>
              <div class="toggle_share collapse" id="two">
                <ul>
                  <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                  <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                  <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="property_item">
            <!-- <div class="property_head text-center">
                <h3 class="captlize"><a href="#.">Historic Town House</a></h3>
                <p>45 Regent Street, London, UK</p>
              </div> -->
            <div class="image">
              <a href="#."><img src="images/f6.png" alt="latest property" class="img-responsive"></a>
              <div class="price lighter clearfix">
                <span class="tag pull-right">For Rent</span>
              </div>
            </div>
            <div class="proerty_content">
              <div class="property_meta">
                <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                <span><i class="icon-bed"></i>2 Office</span>
                <span><i class="icon-safety-shower"></i>2 Bathroom</span>
              </div>
              <div class="proerty_text">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum
                  soluta nobis…</p>
              </div>
              <div class="favroute clearfix">
                <p class="pull-md-left">8,600 Per Month</p>
                <ul class="pull-right">
                  <li><a href="#."><i class="icon-like"></i></a></li>
                  <li><a href="#three" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a>
                  </li>
                </ul>
              </div>
              <div class="toggle_share collapse" id="three">
                <ul>
                  <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                  <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                  <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Latest Property Ends -->



<!--Parallax-->
<section id="parallax_four" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 bottom30">
        <h2>We Don’t Just Find <br> <span class="t_yellow">Great Deals</span> We Create Them</h2>
        <div class="bottom15"></div>
        <div class="row number-counters text-center">
          <div class="col-sm-4 col-xs-4 counters-item margin40">
            <i class="icon-icons215"></i>
            <strong data-to="4195">0</strong>
            <p>Properties Sale</p>
          </div>
          <div class="col-sm-4 col-xs-4 counters-item margin40">
            <i class="icon-icons230"></i>
            <strong data-to="123">0</strong>
            <p>Total Agents</p>
          </div>
          <div class="col-sm-4 col-xs-4 counters-item margin40">
            <i class="icon-smiling-face"></i>
            <strong data-to="100">0</strong> %
            <p>Satisfied customers</p>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!--About Owner ends-->


<!--Testinomials-->
<section id="agent" class="padding">

  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2 class="uppercase">Property Services</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec viverra erat Aenean elit tellus.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3 text-center">
        <div class="agent_wrap margin40">
          <div class="image">
            <img src="images/property1.png" alt="Agents">
            <div class="overlay">
              <div class="centered text-center">
                <ul class="social_share">
                  <li><a href="#." class="facebook"><i class="icon-facebook-1"></i></a></li>
                  <li><a href="#." class="twitter"><i class="icon-twitter-1"></i></a></li>
                  <li><a href="#." class="google"><i class="icon-google4"></i></a></li>
                  <li><a href="#." class="linkden"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="agent_text">
            <h3>Home Interior</h3>
            <p>sales executive</p>
            <p class="bottom20">Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam</p>
            <a class="btn-more" href="javascript:void(0)">
              <i><img alt="arrow" src="images/arrowlY.png"></i><span>Contact Me</span><i><img alt="arrow"
                  src="images/arrowrY.png"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-3 text-center">
        <div class="agent_wrap margin40">
          <div class="image">
            <img src="images/property2.png" alt="Agents">
            <div class="overlay">
              <div class="centered text-center">
                <ul class="social_share">
                  <li><a href="#." class="facebook"><i class="icon-facebook-1"></i></a></li>
                  <li><a href="#." class="twitter"><i class="icon-twitter-1"></i></a></li>
                  <li><a href="#." class="google"><i class="icon-google4"></i></a></li>
                  <li><a href="#." class="linkden"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="agent_text">
            <h3>property valuation</h3>
            <p>sales executive</p>
            <p class="bottom20">Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam</p>
            <a class="btn-more" href="javascript:void(0)">
              <i><img alt="arrow" src="images/arrowlY.png"></i><span>Contact Me</span><i><img alt="arrow"
                  src="images/arrowrY.png"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-3 text-center">
        <div class="agent_wrap margin40">
          <div class="image">
            <img src="images/property3.png" alt="Agents">
            <div class="overlay">
              <div class="centered text-center">
                <ul class="social_share">
                  <li><a href="#." class="facebook"><i class="icon-facebook-1"></i></a></li>
                  <li><a href="#." class="twitter"><i class="icon-twitter-1"></i></a></li>
                  <li><a href="#." class="google"><i class="icon-google4"></i></a></li>
                  <li><a href="#." class="linkden"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="agent_text">
              <h3>Legal Title Check</h3>
              <p>sales executive</p>
              <p class="bottom20">Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam</p>
              <a class="btn-more" href="{{ route('legal_title_check') }}">
                  <i><img alt="arrow" src="images/arrowlY.png"></i><span>Contact Me</span><i><img alt="arrow" src="images/arrowrY.png"></i>
              </a>
          </div>
        </div>
      </div>
      <div class="col-sm-3 text-center">
        <div class="agent_wrap margin40">
          <div class="image">
            <img src="images/property4.png" alt="Agents">
            <div class="overlay">
              <div class="centered text-center">
                <ul class="social_share">
                  <li><a href="#." class="facebook"><i class="icon-facebook-1"></i></a></li>
                  <li><a href="#." class="twitter"><i class="icon-twitter-1"></i></a></li>
                  <li><a href="#." class="google"><i class="icon-google4"></i></a></li>
                  <li><a href="#." class="linkden"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="agent_text">
            <h3>property lawyers</h3>
            <p>sales executive</p>
            <p class="bottom20">Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam</p>
            <a class="btn-more" href="javascript:void(0)">
              <i><img alt="arrow" src="images/arrowlY.png"></i><span>Contact Me</span><i><img alt="arrow"
                  src="images/arrowrY.png"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Testinomials ends-->


<!--News-->
<section id="news" class="padding bg_light">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="uppercase">Latest News</h2>
        <p class="heading_space">Aliquam nec viverra erat. Aenean elit tellus mattis quis maximus.</p>
      </div>
    </div>
    <div class="row">
      <div id="news_slider" class="owl-carousel">
        <div class="item">
          <div class="news_hovered">
            <p class="top10 bottom15"><strong>Nearest mall Strategic in high tech Goes your villa</strong></p>
            <p class="bottom30">Lorem ipsum dolor sit amet, adipiscing elit sed diam consectetuer elit sed diam
              consectetuer</p>
            <span><i class="icon-clock4"></i>Feb 22, 2017</span>
          </div>
        </div>
        <div class="item">
          <div class="news_hovered">
            <p class="top10 bottom15"><strong>Nearest mall Strategic in high tech Goes your villa</strong></p>
            <p class="bottom30">Lorem ipsum dolor sit amet, adipiscing elit sed diam consectetuer elit sed diam
              consectetuer</p>
            <span><i class="icon-clock4"></i>Feb 22, 2017</span>
          </div>
        </div>
        <div class="item">
          <div class="news_hovered">
            <p class="top10 bottom15"><strong>Nearest mall Strategic in high tech Goes your villa</strong></p>
            <p class="bottom30">Lorem ipsum dolor sit amet, adipiscing elit sed diam consectetuer elit sed diam
              consectetuer</p>
            <span><i class="icon-clock4"></i>Feb 22, 2017</span>
          </div>
        </div>
        <div class="item">
          <div class="news_hovered">
            <p class="top10 bottom15"><strong>Nearest mall Strategic in high tech Goes your villa</strong></p>
            <p class="bottom30">Lorem ipsum dolor sit amet, adipiscing elit sed diam consectetuer elit sed diam
              consectetuer</p>
            <span><i class="icon-clock4"></i>Feb 22, 2017</span>
          </div>
        </div>
        <div class="item">
          <div class="news_hovered">
            <p class="top10 bottom15"><strong>Nearest mall Strategic in high tech Goes your villa</strong></p>
            <p class="bottom30">Lorem ipsum dolor sit amet, adipiscing elit sed diam consectetuer elit sed diam
              consectetuer</p>
            <span><i class="icon-clock4"></i>Feb 22, 2017</span>
          </div>
        </div>
        <div class="item">
          <div class="news_hovered">
            <p class="top10 bottom15"><strong>Nearest mall Strategic in high tech Goes your villa</strong></p>
            <p class="bottom30">Lorem ipsum dolor sit amet, adipiscing elit sed diam consectetuer elit sed diam
              consectetuer</p>
            <span><i class="icon-clock4"></i>Feb 22, 2017</span>
          </div>
        </div>
        <div class="item">
          <div class="news_hovered">
            <p class="top10 bottom15"><strong>Nearest mall Strategic in high tech Goes your villa</strong></p>
            <p class="bottom30">Lorem ipsum dolor sit amet, adipiscing elit sed diam consectetuer elit sed diam
              consectetuer</p>
            <span><i class="icon-clock4"></i>Feb 22, 2017</span>
          </div>
        </div>
        <div class="item">
          <div class="news_hovered">
            <p class="top10 bottom15"><strong>Nearest mall Strategic in high tech Goes your villa</strong></p>
            <p class="bottom30">Lorem ipsum dolor sit amet, adipiscing elit sed diam consectetuer elit sed diam
              consectetuer</p>
            <span><i class="icon-clock4"></i>Feb 22, 2017</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--News ends-->


<!--Partners-->
<section id="logos">
  <div class="container partner2 padding">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2 class="uppercase">Our Partners</h2>
        <p class="heading_space">Aliquam nec viverra erat. Aenean elit tellus mattis quis maximus.</p>
      </div>
    </div>
    <div class="row">
      <div id="partners" class="owl-carousel">
        <div class="item">
          <img src="images/logo1.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="images/logo2.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="images/logo3.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="images/logo4.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="images/logo5.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="images/logo1.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="images/logo2.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="images/logo3.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="images/logo4.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="images/logo5.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="images/logo1.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="images/logo2.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="images/logo3.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="images/logo4.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="images/logo5.png" alt="Featured Partner">
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  document.getElementById('searchButton').addEventListener('click', function () {
    // Get selected values
    var city = document.getElementById('city').value;
    var propertyTypeID = document.getElementById('propertyTypeID').value;

    // Redirect to the route with query parameters
    var url = '/properties?city=' + encodeURIComponent(city) + '&propertyTypeID=' + encodeURIComponent(propertyTypeID);
    window.location.href = url;
  });
</script>


<!--Partners Ends-->
@include('includes/footer')

