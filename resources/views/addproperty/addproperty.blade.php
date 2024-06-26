@include('includes/header')
<div class="">
    <h1>Add Property</h1>

    <!-- Display error messages, if any -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Property form -->
    <form action="{{ route('property.form') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Property Type Dropdown -->
        <div>
            <label for="propertyType">Property Type</label>
            <select id="propertyType" name="propertyType" class="" required>
                <option value="" disabled selected>Select a property type</option>
                @foreach ($propertyTypes as $propertyType)
                    <option value="{{ $propertyType['id'] }}">{{ $propertyType['name'] }}</option>
                @endforeach
            </select>
        </div>

        <!-- Other Dropdowns -->
        <div>
            <label for="sharedOfficeSpace">Shared Office Space:</label>
            <select id="sharedOfficeSpace" name="sharedOfficeSpace">
                <option value="">Loading...</option>
            </select>
        </div>

        <div>
            <label for="Month">Month:</label>
            <select id="Month" name="Month">
                <option value="">Loading...</option>
            </select>
        </div>

        <div>
            <label for="PossessionStatus">Possession Status:</label>
            <select id="PossessionStatus" name="PossessionStatus">
                <option value="">Loading...</option>
            </select>
        </div>

        <div>
            <label for="PriceIncludes">Price Includes:</label>
            <select id="PriceIncludes" name="PriceIncludes">
                <option value="">Loading...</option>
            </select>
        </div>

        <div>
            <label for="ShowPriceAs">Show Price As:</label>
            <select id="ShowPriceAs" name="ShowPriceAs">
                <option value="">Loading...</option>
            </select>
        </div>

        <div>
            <label for="TransactionType">Transaction Type:</label>
            <select id="TransactionType" name="TransactionType">
                <option value="">Loading...</option>
            </select>
        </div>

        <div>
            <label for="anyConstructionDone">Any Construction Done:</label>
            <select id="anyConstructionDone" name="anyConstructionDone">
                <option value="">Loading...</option>
            </select>
        </div>

        <div>
            <label for="attachedBalcony">Attached Balcony:</label>
            <select id="attachedBalcony" name="attachedBalcony">
                <option value="">Loading...</option>
            </select>
        </div>

        <div>
            <label for="attachedBathroom">Attached Bathroom:</label>
            <select id="attachedBathroom" name="attachedBathroom">
                <option value="">Loading...</option>
            </select>
        </div>

        <div>
            <label for="boundaryWallMade">Boundary Wall Made:</label>
            <select id="boundaryWallMade" name="boundaryWallMade">
                <option value="">Loading...</option>
            </select>
        </div>

        <div>
            <label for="cabinMeetingRoom">Cabin Meeting Room:</label>
            <select id="cabinMeetingRoom" name="cabinMeetingRoom">
                <option value="">Loading...</option>
            </select>
        </div>

        <div>
            <label for="CommonArea">Common Area:</label>
            <select id="CommonArea" name="CommonArea">
                <option value="">Loading...</option>
            </select>
        </div>

        <div>
            <label for="cornerShop">Corner Shop:</label>
            <select id="cornerShop" name="cornerShop">
                <option value="">Loading...</option>
            </select>
        </div>

        <div>
            <label for="mainRoadFacing">Main Road Facing:</label>
            <select id="mainRoadFacing" name="mainRoadFacing">
                <option value="">Loading...</option>
            </select>
        </div>

        <div>
            <label for="floor">Floor:</label>
            <select id="floor" name="floor">
                <option value="">Loading...</option>
            </select>
        </div>

        <div>
            <label for="FurnishedStatus">Furnished Status:</label>
            <select id="FurnishedStatus" name="FurnishedStatus">
                <option value="">Loading...</option>
            </select>
        </div>

        <div>
            <label for="inGatedColony">In Gated Colony:</label>
            <select id="inGatedColony" name="inGatedColony">
                <option value="">Loading...</option>
            </select>
        </div>

        <div>
            <label for="Bedroom">Bedroom:</label>
            <select id="Bedroom" name="Bedroom">
                <option value="">Loading...</option>
            </select>
        </div>

        <div>
            <label for="maintenanceChargeFrequency">Maintenance Charge Frequency:</label>
            <select id="maintenanceChargeFrequency" name="maintenanceChargeFrequency">
                <option value="">Loading...</option>
            </select>
        </div>

        <div>
            <label for="noticePeriod">Notice Period:</label>
            <select id="noticePeriod" name="noticePeriod">
                <option value="">Loading...</option>
            </select>
        </div>

        <div>
            <label for="NearSchool">Near School:</label>
            <select id="NearSchool" name="NearSchool">
                <option value="">Loading...</option>
            </select>
        </div>

        <div>
            <label for="NearHospital">Near Hospital:</label>
            <select id="NearHospital" name="NearHospital">
                <option value="">Loading...</option>
            </select>
        </div>

        <div>
            <label for="nearMarket">Near Market:</label>
            <select id="nearMarket" name="nearMarket">
                <option value="">Loading...</option>
            </select>
        </div>

        <div>
            <label for="propertyImage">Upload Property Images:</label>
            <input type="file" id="propertyImage" name="propertyImage[]" multiple><br><br>
        </div>

        <div>
            <button type="submit" name="submit">Submit Details</button>
        </div>
    </form>



    @include('includes/footer')