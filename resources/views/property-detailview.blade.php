@include('includes/header')

@if(isset($propertydisplay))
    <!-- Property Detail Start -->
    <section id="property" class="padding">
        <div class="container property-details">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-uppercase">{{ $propertydisplay['listingTitle'] }}</h2>

                    <p class="bottom30">{{ $propertydisplay['city'] }}&nbsp; {{ $propertydisplay['state'] }} &nbsp;
                        {{ $propertydisplay['zipCode'] }}&nbsp; {{ $propertydisplay['country'] }}
                    </p>
                    <div id="property-d-1" class="owl-carousel single">
                        <div class="item"><img src="{{ asset($propertydisplay['imageSiteView']) }}" alt="image" /></div>
                        <div class="item"><img src="{{ asset($propertydisplay['imageExteriorView']) }}" alt="image" />
                        </div>
                        <div class="item"><img src="{{ asset($propertydisplay['imageCommonArea']) }}" alt="image" />
                        </div>
                        <div class="item"><img src="{{ asset($propertydisplay['imageLivingRoom']) }}" alt="image" />
                        </div>
                        <div class="item"><img src="{{ asset($propertydisplay['imageBedroom']) }}" alt=" image" /></div>
                        <div class="item"><img src="{{ asset($propertydisplay['imageBathroom']) }}" alt="image" /></div>
                        <div class="item"><img src="{{ asset($propertydisplay['imageBedroom']) }}" alt="image" /></div>
                    </div>
                    <div id="property-d-1-2" class="owl-carousel single">
                        <div class="item"><img src="{{ asset($propertydisplay['imageSiteView']) }}" alt="image" /></div>
                        <div class="item"><img src="{{ asset($propertydisplay['imageExteriorView']) }}" alt="image" />
                        </div>
                        <div class="item"><img src="{{ asset($propertydisplay['imageCommonArea']) }}" alt="image" />
                        </div>
                        <div class="item"><img src="{{ asset($propertydisplay['imageLivingRoom']) }}" alt="image" />
                        </div>
                        <div class="item"><img src="{{ asset($propertydisplay['imageBedroom']) }}" alt="image" /></div>
                        <div class="item"><img src="{{ asset($propertydisplay['imageBathroom']) }}" alt="image" /></div>
                        <div class="item"><img src="{{ asset($propertydisplay['imageBedroom']) }}" alt="image" /></div>
                    </div>
                    <div class="property_meta bg-black bottom40">
                        <span><i class="icon-select-an-objecto-tool"></i>{{ $propertydisplay['plotArea'] }} sq ft</span>
                        <span><i class=" icon-microphone"></i>{{ $propertydisplay['bedroom'] }} Bedrooms</span>
                        <span><i class="icon-safety-shower"></i>{{ $propertydisplay['attachedBathroom'] }}
                            Bathroom</span>
                        <span><i class="icon-old-television"></i>TV Lounge</span>
                        <span><i class="icon-garage"></i>1 Garage</span>
                    </div>
                </div>
                <div class="col-md-8 listing1">
                    <h2 class="text-uppercase">Property Description</h2>
                    <p class=" bottom30">{{ $propertydisplay['listingDescription'] }}</p>


                    <h2 class="text-uppercase bottom20">Quick Summary</h2>
                    <div class="row property-d-table bottom40">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <table class="table table-striped table-responsive">
                                <tbody>
                                    <tr>
                                        <td><b>Property Id</b></td>
                                        <td class="text-right">{{ $propertydisplay['propertyID'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>packageID</b></td>
                                        <td class="text-right">{{ $propertydisplay['packageID'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>propertyTypeID</b></td>
                                        <td class="text-right">{{ $propertydisplay['propertyTypeID'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>propertyDetailsForID</b></td>
                                        <td class="text-right">{{ $propertydisplay['propertyDetailsForID'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>month</b></td>
                                        <td class="text-right">{{ $propertydisplay['month'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>balcony</b></td>
                                        <td class="text-right">{{ $propertydisplay['balcony'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>floor</b></td>
                                        <td class="text-right">{{ $propertydisplay['floor'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>furnishedStatus</b></td>
                                        <td class="text-right">{{ $propertydisplay['furnishedStatus'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>cornerShop</b></td>
                                        <td class="text-right">{{ $propertydisplay['cornerShop'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>mainRoadFacing</b></td>
                                        <td class="text-right">{{ $propertydisplay['mainRoadFacing'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>sharedOfficeSpace</b></td>
                                        <td class="text-right">{{ $propertydisplay['sharedOfficeSpace'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>sharedOfficeSpace</b></td>
                                        <td class="text-right">{{ $propertydisplay['sharedOfficeSpace'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>unitOfArea</b></td>
                                        <td class="text-right">{{ $propertydisplay['unitOfArea'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>parkingSpaces</b></td>
                                        <td class="text-right">{{ $propertydisplay['parkingSpaces'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>powerBackup</b></td>
                                        <td class="text-right">{{ $propertydisplay['powerBackup'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>waterSupply</b></td>
                                        <td class="text-right">{{ $propertydisplay['waterSupply'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>security</b></td>
                                        <td class="text-right">{{ $propertydisplay['security'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>gym</b></td>
                                        <td class="text-right">{{ $propertydisplay['gym'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>swimmingPool</b></td>
                                        <td class="text-right">{{ $propertydisplay['swimmingPool'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>lift</b></td>
                                        <td class="text-right">{{ $propertydisplay['lift'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>propertyStatus</b></td>
                                        <td class="text-right">{{ $propertydisplay['propertyStatus'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>listingType</b></td>
                                        <td class="text-right">{{ $propertydisplay['listingType'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>propertyAge</b></td>
                                        <td class="text-right">{{ $propertydisplay['propertyAge'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>ownershipType</b></td>
                                        <td class="text-right">{{ $propertydisplay['ownershipType'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>facingDirection</b></td>
                                        <td class="text-right">{{ $propertydisplay['facingDirection'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>garden</b></td>
                                        <td class="text-right">{{ $propertydisplay['garden'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>terrace</b></td>
                                        <td class="text-right">{{ $propertydisplay['terrace'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>rooftop</b></td>
                                        <td class="text-right">{{ $propertydisplay['rooftop'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>electricityAvailable</b></td>
                                        <td class="text-right">{{ $propertydisplay['electricityAvailable'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>waterAvailable</b></td>
                                        <td class="text-right">{{ $propertydisplay['waterAvailable'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>gasConnection</b></td>
                                        <td class="text-right">{{ $propertydisplay['gasConnection'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>internetConnection</b></td>
                                        <td class="text-right">{{ $propertydisplay['internetConnection'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>cableTV</b></td>
                                        <td class="text-right">{{ $propertydisplay['cableTV'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>mortgageStatus</b></td>
                                        <td class="text-right">{{ $propertydisplay['mortgageStatus'] }}</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <table class="table table-striped table-responsive">
                                <tbody>
                                    <tr>
                                        <td><b>cabinMeetingRoom</b></td>
                                        <td class="text-right">{{ $propertydisplay['cabinMeetingRoom'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>transactionType</b></td>
                                        <td class="text-right">{{ $propertydisplay['transactionType'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>possessionStatus</b></td>
                                        <td class="text-right">{{ $propertydisplay['possessionStatus'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>showPriceAs</b></td>
                                        <td class="text-right">{{ $propertydisplay['showPriceAs'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>priceIncludes</b></td>
                                        <td class="text-right">{{ $propertydisplay['priceIncludes'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>maintenance Charge</b></td>
                                        <td class="text-right">{{ $propertydisplay['maintenanceChargeFrequency'] }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>noticePeriod</b></td>
                                        <td class="text-right">{{ $propertydisplay['noticePeriod'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>userID</b></td>
                                        <td class="text-right">{{ $propertydisplay['userID'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>attachedBalcony</b></td>
                                        <td class="text-right">{{ $propertydisplay['attachedBalcony'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>commonArea</b></td>
                                        <td class="text-right">{{ $propertydisplay['commonArea'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>anyConstructionDone</b></td>
                                        <td class="text-right">{{ $propertydisplay['anyConstructionDone'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>boundaryWallMade</b></td>
                                        <td class="text-right">{{ $propertydisplay['boundaryWallMade'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>inGatedColony</b></td>
                                        <td class="text-right">{{ $propertydisplay['inGatedColony'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>addressLine1</b></td>
                                        <td class="text-right">{{ $propertydisplay['addressLine1'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>addressLine2</b></td>
                                        <td class="text-right">{{ $propertydisplay['boundaryWallMade'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>builtUpArea</b></td>
                                        <td class="text-right">{{ $propertydisplay['builtUpArea'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>carpetArea</b></td>
                                        <td class="text-right">{{ $propertydisplay['carpetArea'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>legalClearance</b></td>
                                        <td class="text-right">{{ $propertydisplay['legalClearance'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>nearSchool</b></td>
                                        <td class="text-right">{{ $propertydisplay['nearSchool'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>nearHospital</b></td>
                                        <td class="text-right">{{ $propertydisplay['nearHospital'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>nearMarket</b></td>
                                        <td class="text-right">{{ $propertydisplay['nearMarket'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>nearPublicTransport</b></td>
                                        <td class="text-right">{{ $propertydisplay['nearPublicTransport'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>nearPark</b></td>
                                        <td class="text-right">{{ $propertydisplay['nearPark'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>earthquakeResistant</b></td>
                                        <td class="text-right">{{ $propertydisplay['earthquakeResistant'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>fireSafety</b></td>
                                        <td class="text-right">{{ $propertydisplay['fireSafety'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>rainwaterHarvesting</b></td>
                                        <td class="text-right">{{ $propertydisplay['rainwaterHarvesting'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>greenBuilding</b></td>
                                        <td class="text-right">{{ $propertydisplay['greenBuilding'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>numberOfFloors</b></td>
                                        <td class="text-right">{{ $propertydisplay['numberOfFloors'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>flooringType</b></td>
                                        <td class="text-right">{{ $propertydisplay['flooringType'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>petFriendly</b></td>
                                        <td class="text-right">{{ $propertydisplay['petFriendly'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>handicapAccessible</b></td>
                                        <td class="text-right">{{ $propertydisplay['handicapAccessible'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>emiAmount</b></td>
                                        <td class="text-right">{{ $propertydisplay['emiAmount'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>mortgageProvider</b></td>
                                        <td class="text-right">{{ $propertydisplay['mortgageProvider'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>mortgageAmount</b></td>
                                        <td class="text-right">{{ $propertydisplay['mortgageAmount'] }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <h2 class="text-uppercase bottom20">Features</h2>
                    <div class="row bottom40">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <ul class="pro-list">
                                <li>
                                    Air Conditioning
                                </li>
                                <li>
                                    Barbeque
                                </li>
                                <li>
                                    Dryer
                                </li>
                                <li>
                                    Laundry
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <ul class="pro-list">
                                <li>
                                    Microwave
                                </li>
                                <li>
                                    Outdoor Shower
                                </li>
                                <li>
                                    Refrigerator
                                </li>
                                <li>
                                    Swimming Pool
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <ul class="pro-list">
                                <li>
                                    Quiet Neighbourhood
                                </li>
                                <li>
                                    TV Cable & WIFI
                                </li>
                                <li>
                                    Window Coverings
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h2 class="text-uppercase">Features</h2>
                    <p class="bottom20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui
                        vestibulum,
                        bibendum purus sit amet,
                        vulputate mauris. Ut adipiscing gravida tincidunt.
                    </p>
                    <div class="row bottom40">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="pro-img">
                                <figure class="wpf-demo-gallery">
                                    <img src="images/property-details/property-d-1-f-1.jpg" alt="image" />
                                    <figcaption class="view-caption">
                                        <a data-fancybox-group="gallery" class="fancybox"
                                            href="images/property-details/property-d-1-f-1.jpg"><i
                                                class="icon-focus"></i></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="pro-img">
                                <figure class="wpf-demo-gallery">
                                    <img src="images/property-details/property-d-1-f-2.jpg" alt="image" />
                                    <figcaption class="view-caption">
                                        <a data-fancybox-group="gallery" class="fancybox"
                                            href="images/property-details/property-d-1-f-1.jpg"><i
                                                class="icon-focus"></i></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="pro-img">
                                <figure class="wpf-demo-gallery">
                                    <img src="images/property-details/property-d-1-f-3.jpg" alt="image" />
                                    <figcaption class="view-caption">
                                        <a data-fancybox-group="gallery" class="fancybox"
                                            href="images/property-details/property-d-1-f-1.jpg"><i
                                                class="icon-focus"></i></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>

                    <h2 class="text-uppercase bottom20">Property Map</h2>
                    <div class="row bottom40">
                        <div class="col-md-12 bottom20">
                            <div class="property-list-map">
                                <div id="property-listing-map" class="multiple-location-map"
                                    style="width:100%;height:430px;"></div>
                            </div>
                        </div>

                    </div>

                </div>
                <aside class="col-md-4 col-xs-12">
                    <h2 class="text-uppercase bottom20">Property Owner</h2>
                    <div class="row">


                        <div class="col-sm-12 agent_wrap bottom30">
                            <table class="agent_contact table">
                                <tbody>
                                    <tr class="bottom10">
                                        <td><strong>Name:</strong></td>
                                        <td class="text-right">{{ $propertydisplay['ownerName'] }}</td>
                                    </tr>

                                    <tr class="bottom10">
                                        <td><strong>Mobile:</strong></td>
                                        <td class="text-right">{{ $propertydisplay['ownerContactNumber'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Email Adress:</strong></td>
                                        <td class="text-right"><a href="#.">{{ $propertydisplay['ownerEmail'] }}</a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                            <div style="border-bottom:1px solid #d3d8dd;" class="bottom15"></div>
                        </div>


                    </div>
                    <div class="property-query-area clearfix">
                        <div class="col-md-12">
                            <h3 class="text-uppercase bottom20 top15">Advanced Search</h3>
                        </div>
                        <form class="callus">
                            <div class="single-query form-group col-sm-12">
                                <input type="text" class="keyword-input" placeholder="Keyword (e.g. 'office')">
                            </div>
                            <div class="single-query form-group col-sm-12">
                                <div class="intro">
                                    <select>
                                        <option selected="" value="any">Location</option>
                                        <option>All areas</option>
                                        <option>Bayonne </option>
                                        <option>Greenville</option>
                                        <option>Manhattan</option>
                                        <option>Queens</option>
                                        <option>The Heights</option>
                                    </select>
                                </div>
                            </div>
                            <div class="single-query form-group col-sm-12">
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
                            <div class="single-query form-group col-sm-12">
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
                            <div class="search-2 col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6">
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
                                    <div class="col-sm-6">
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
                            <div class="col-sm-12">
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
                            <div class="col-sm-12 bottom10">
                                <div class="single-query-slider">
                                    <label><strong>Price Range:</strong></label>
                                    <div class="price text-right">
                                        <span>$</span>
                                        <div class="leftLabel"></div>
                                        <span>to $</span>
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
                            <div class="col-sm-12 form-group">
                                <button type="submit" class="btn-blue border_radius">Search</button>
                            </div>
                        </form>
                        <div class="col-sm-12">
                            <div class="group-button-search">
                                <a data-toggle="collapse" href=".search-propertie-filters" class="more-filter bottom15">
                                    <i class="fa fa-plus text-1" aria-hidden="true"></i><i class="fa fa-minus text-2 hide"
                                        aria-hidden="true"></i>
                                    <div class="text-1">Show more search options</div>
                                    <div class="text-2 hide">less more search options</div>
                                </a>
                            </div>
                        </div>
                        <div class="search-propertie-filters collapse">
                            <div class="container-2">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-6">
                                        <div class="search-form-group white">
                                            <input type="checkbox" name="check-box" />
                                            <span>Rap music</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <div class="search-form-group white">
                                            <input type="checkbox" name="check-box" />
                                            <span>Rap music</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <div class="search-form-group white">
                                            <input type="checkbox" name="check-box" />
                                            <span>Rap music</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <div class="search-form-group white">
                                            <input type="checkbox" name="check-box" />
                                            <span>Rap music</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-xs-6">
                                        <div class="search-form-group white">
                                            <input type="checkbox" name="check-box" />
                                            <span>Rap music</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <div class="search-form-group white">
                                            <input type="checkbox" name="check-box" />
                                            <span>Rap music</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <div class="search-form-group white">
                                            <input type="checkbox" name="check-box" />
                                            <span>Rap music</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <div class="search-form-group white">
                                            <input type="checkbox" name="check-box" />
                                            <span>Rap music</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </aside>
            </div>
        </div>

    </section>

@else

    <p>No property details found.</p>
@endif
@include('includes/footer')