@include('includes/header')
<!-- Search -->
<section class="property-query-area padding_bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="uppercase">Advanced Search</h2>
                <p class="heading_space">We have Properties in these Areas View a list of Featured Properties.</p>
            </div>
        </div>
        <div class="row">
            <form class="callus">
                <div class="col-md-3 col-sm-6">
                    <div class="single-query form-group">
                        <input type="text" class="keyword-input" placeholder="Keyword (e.g. 'office')">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-query form-group">
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
                </div>
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
                <div class="col-md-3 col-sm-3">
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
                <div class="col-md-3 col-sm-3">
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
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-8 bottom15">
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
                            <button type="submit" class="btn-blue border_radius">Search</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="group-button-search">
            <a data-toggle="collapse" href=".search-propertie-filters" class="more-filter">
                <i class="fa fa-plus text-1" aria-hidden="true"></i><i class="fa fa-minus text-2 hide"
                    aria-hidden="true"></i>
                <div class="text-1">Show more search options</div>
                <div class="text-2 hide">less more search options</div>
            </a>
        </div>
        <div class="search-propertie-filters collapse">
            <div class="container-2">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-4">
                        <div class="search-form-group white">
                            <input type="checkbox" name="check-box" />
                            <span>Rap music</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-4">
                        <div class="search-form-group white">
                            <input type="checkbox" name="check-box" />
                            <span>Rap music</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-4">
                        <div class="search-form-group white">
                            <input type="checkbox" name="check-box" />
                            <span>Rap music</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-4">
                        <div class="search-form-group white">
                            <input type="checkbox" name="check-box" />
                            <span>Rap music</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-4">
                        <div class="search-form-group white">
                            <input type="checkbox" name="check-box" />
                            <span>Rap music</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-4">
                        <div class="search-form-group white">
                            <input type="checkbox" name="check-box" />
                            <span>Rap music</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-4">
                        <div class="search-form-group white">
                            <input type="checkbox" name="check-box" />
                            <span>Rap music</span>
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
</section>

@if (count($properties) > 0)
    <section id="property" class="padding">
        <div id="property-gallery" class="cbp listing1">
            @foreach ($properties as $property)
                <div class="cbp-item sale">
                    <div class="property_item">
                        <div class="image">
                            <a href="#." class="img-responsive">
                                <img src="{{ asset($property['imageSiteView']) }}" alt="latest property">
                            </a>
                            <div class="price clearfix">
                                <span class="tag pull-right">{{ $property['price'] }} Per Month</span>
                            </div>
                            <span class="tag_t">For Sale</span> <span class="tag_l">Featured</span>
                        </div>
                        <div class="proerty_content">
                            <div class="proerty_text">
                                <h3 class="captlize"><a href="#.">{{ $property['listingTitle'] }} </a></h3>
                                <p>{{ $property['addressLine1'] }}, {{ $property['city'] }}, {{ $property['state'] }}</p>
                            </div>
                            <div class="property_meta transparent">
                                <span><i class="icon-select-an-objecto-tool"></i>{{ $property['builtUpArea'] ?? 'N/A' }} sq
                                    ft</span>
                                <span><i class="icon-bed"></i>{{ $property['bedroom'] ?? 'N/A' }} Bedrooms</span>
                                <span><i class="icon-safety-shower"></i>{{ $property['bathroom'] ?? 'N/A' }} Bathrooms</span>
                            </div>
                            <div class="property_meta transparent bottom30">
                                <span><i
                                        class="icon-old-television"></i>{{ isset($property['amenities']['TV Lounge']) ? 'TV Lounge' : '' }}</span>
                                <span><i class="icon-garage"></i>{{ $property['parkingSpaces'] ?? 'N/A' }} Garage</span>
                            </div>
                            <div class="favroute clearfix">
                                <ul class="pull-right">
                                    <li>
                                        <a href="#" class="add-to-favorites" data-property-id="{{ $property['propertyID'] }}">
                                            <i class="icon-like"></i> Add to Favorites
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('detailview', ['propertyID' => $property['propertyID']]) }}"
                                            class="btn btn-primary">View Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@else
    <h3 style="color:red; padding:30px;">No properties found matching your criteria.</h3>
@endif



@include('includes/footer')