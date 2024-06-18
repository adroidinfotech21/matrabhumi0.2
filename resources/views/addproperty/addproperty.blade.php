@include('includes/header')


<!-- Page Banner Start-->
<section class="page-banner padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="text-uppercase">Favorite properties</h1>
                <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                <ol class="breadcrumb text-center">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">My properties</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- Page Banner End -->
<style>
    .hidden {
        display: none;
    }
</style>
@if ($errors->any())
    <div>
        <strong>Whoops! Something went wrong.</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div>
        {{ session('success') }}
    </div>
@endif

<!-- My Properties  -->
<form id="propertyForm" class="addpropertyform" method="POST" action="{{ route('addproperty') }}">
    @csrf
    <div style="margin-bottom:60px; margin-top:20px;">
        <div>
            <h1>Sell or Rent your Property</h1>
            <p>You are posting this property for <strong style="background-color:#F88017;color:white;padding:5px;">
                    FREE!</strong></p>
        </div>
        <div>
            <img src="" alt="">
        </div>
    </div>
    <div style="margin-bottom:60px; margin-top:20px;">
        <span style="color:#7c807d;">Listing Package</span> &nbsp; &nbsp; &nbsp;<span>1 Standard Listing - Free</span>
    </div>

    <div class="form-group">
        <label for="propertyType" style="color:black">Property Type</label>
        <select id="propertyType" name="propertyType" onchange="showFields()">
            @foreach($propertyTypes as $propertyType)
                <option value="{{ $propertyType['id'] }}">{{ $propertyType['propertyTypeName'] }}</option>
            @endforeach
        </select>
    </div>

    <div id="residentialFields">
        <h3>Property Location</h3>
        <div class="form-group">
            <label for="city" style="color:black;">City</label>
            <input type="text" id="city" name="city">
        </div>
        <div class="form-group">
            <label for="locality" style="color:black;">Locality</label>
            <input type="text" id="locality" name="locality">
        </div>

        <h3>Property Features</h3>
        <div class="form-group">
            <label for="bedrooms" style="color:black;">Bedrooms</label>
            <input type="number" id="bedrooms" name="bedrooms">
        </div>
        <div class="form-group">
            <label for="balconies" style="color:black;">Balconies</label>
            <input type="number" id="balconies" name="balconies">
        </div>
        <div class="form-group">
            <label for="floorNo" style="color:black;">Floor No.</label>
            <input type="number" id="floorNo" name="floorNo">
        </div>
        <div class="form-group">
            <label for="totalFloors" style="color:black;">Total Floors</label>
            <input type="number" id="totalFloors" name="totalFloors">
        </div>
        <div class="form-group">
            <label for="furnishedStatus" style="color:black;">Furnished Status</label>
            <input type="text" id="furnishedStatus" name="furnishedStatus">
        </div>
        <div class="form-group">
            <label for="bathrooms" style="color:black;">Bathrooms</label>
            <input type="number" id="bathrooms" name="bathrooms">
        </div>
        <div class="form-group">
            <label for="seats" style="color:black;">Number of Seats</label>
            <input type="number" id="seats" name="seats">
        </div>
        <div class="form-group">
            <label for="meetingRooms" style="color:black;">Cabin/Meeting Rooms</label>
            <input type="number" id="meetingRooms" name="meetingRooms">
        </div>
        <div class="form-group">
            <label for="openHours" style="color:black;">Open Hours</label>
            <input type="text" id="openHours" name="openHours">
        </div>

        <h3>Furnishing Details</h3>
        <div class="form-group">
            <label style="color:black;"><input type="checkbox" name="furnishing[]" value="Cupboards">
                Cupboards</label><br>
            <label style="color:black;"><input type="checkbox" name="furnishing[]" value="Study Table"> Study
                Table</label><br>
            <label style="color:black;"><input type="checkbox" name="furnishing[]" value="AC"> AC</label><br>
            <label style="color:black;"><input type="checkbox" name="furnishing[]" value="Geyser"> Geyser</label><br>
            <label style="color:black;"><input type="checkbox" name="furnishing[]" value="Washing Machine"> Washing
                Machine</label><br>
            <label style="color:black;"><input type="checkbox" name="furnishing[]" value="Wifi"> Wifi</label><br>
            <label style="color:black;"><input type="checkbox" name="furnishing[]" value="Fridge"> Fridge</label><br>
            <label style="color:black;"><input type="checkbox" name="furnishing[]" value="Cooler"> Cooler</label><br>
            <label style="color:black;"><input type="checkbox" name="furnishing[]" value="TV"> TV</label>
        </div>
    </div>

    <div id="commercialFields" class="hidden">
        <div class="form-group">
            <label for="officeSpace" style="color:black;">Office Space (sq ft)</label>
            <input type="number" id="officeSpace" name="officeSpace">
        </div>
        <div class="form-group">
            <label for="parkingSpaces" style="color:black;">Number of Parking Spaces</label>
            <input type="number" id="parkingSpaces" name="parkingSpaces">
        </div>
    </div>

    <div id="agriculturalFields" class="hidden">
        <div class="form-group">
            <label for="cropType" style="color:black;">Type of Crops</label>
            <input type="text" id="cropType" name="cropType">
        </div>
        <div class="form-group">
            <label for="landArea" style="color:black;">Land Area (acres)</label>
            <input type="number" id="landArea" name="landArea">
        </div>
    </div>

    <button class="submitproperty" type="submit">Submit</button>
</form>

<style>
    .hidden {
        display: none;
    }
</style>

<script>
    function showFields() {
        var propertyType = document.getElementById('propertyType').value;

        document.getElementById('residentialFields').classList.add('hidden');
        document.getElementById('commercialFields').classList.add('hidden');
        document.getElementById('agriculturalFields').classList.add('hidden');

        if (propertyType == 1) {
            document.getElementById('residentialFields').classList.remove('hidden');
        } else if (propertyType == 2) {
            document.getElementById('commercialFields').classList.remove('hidden');
        } else if (propertyType == 3) {
            document.getElementById('agriculturalFields').classList.remove('hidden');
        }
    }

    document.addEventListener("DOMContentLoaded", function () {
        showFields();
    });
</script>


@include('includes/footer')