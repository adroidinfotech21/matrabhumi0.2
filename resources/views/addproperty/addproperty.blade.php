@include('includes/header')

<style>
    /* Flex container for form and ad column */
    .container-addproperty {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin: 0 auto;
        max-width: 1200px;
        /* Adjust based on your design */
    }

    /* Form styling */
    .add-property-form {
        width: 60%;
        /* Adjust width based on your design */
        padding: 10px;
        box-shadow: 0 0 0px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        border-radius: 4px;
    }

    /* Advertisement column styling */
    .ad-column {
        width: 35%;
        /* Adjust width based on your design */
        padding: 10px;
        box-shadow: 0 0 0px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        border-radius: 8px;
        margin-left: 20px;
    }

    .ad-column img {
        width: 90%;
        height: auto;
        border-radius: 8px;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .container {
            flex-direction: column;
        }

        .add-property-form,
        .ad-column {
            width: 90%;
            margin: 0;
        }
    }
</style>


<div class="container-addproperty">

    <!-- Form Column -->
    <div class="add-property-form">
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
        <form action="{{ route('property.form')}}" method="POST" enctype="multipart/form-data" id="propertyForm">
            @csrf

            <!-- Property Type Dropdown -->
            <div class="property-type">
                <label for="propertyType">Property Type</label>
                <select id="propertyType" name="propertyType" required>
                    <option value="">Select a property type</option>
                    @foreach ($propertyTypes as $propertyType)
                        <option value="{{ $propertyType['id'] }}">{{ $propertyType['name'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="owner-name">
                <label for="ownerName">Title </label>
                <input type="text" id="title" name="titleproperty" required>
            </div>
            <div class="owner-name">
                <label for="ownerName">Description </label>
                <input type="text" id="Description" name="descriptionproprty" required>
            </div>
            <div class="owner-name">
                <label for="ownerName">Owner Name</label>
                <input type="text" id="ownerName" name="ownerName" required>
            </div>

            <div class="owner-contact">
                <label for="ownerContact">Owner Contact Number</label>
                <input type="text" id="ownerContact" name="ownerContact" required>
            </div>

            <div class="owner-email">
                <label for="ownerEmail">Owner Email ID</label>
                <input type="email" id="ownerEmail" name="ownerEmail" required>
            </div>

            <div class="city">
                <span>City</span><input type="text" name="city">
            </div>
            <div class="location">
                <span>Location</span><input type="text" name="location">
            </div>

            <!-- Other Dropdowns -->
            <div class="office-space">
                <label for="sharedOfficeSpace">Shared Office Space:</label><br>
                <label>Yes</label>
                <input type="radio" name="sharedOfficeSpace" value="true">
                <label>No</label>
                <input type="radio" name="sharedOfficeSpace" value="false">
            </div>
            <div class="month">
                <label for="Month">Month:</label>
                <select id="Month" name="Month">
                    <option value="">Loading...</option>
                </select>
            </div>
            <div class="possession">
                <label for="PossessionStatus">Possession Status:</label>
                <select id="PossessionStatus" name="PossessionStatus">
                    <option value="">Loading...</option>
                </select>
            </div>
            <div class="include-price">
                <label for="PriceIncludes">Price Includes:</label>
                <select id="PriceIncludes" name="PriceIncludes">
                    <option value="">Loading...</option>
                </select>
            </div>
            <div class="show-price">
                <label for="ShowPriceAs">Show Price As:</label>
                <select id="ShowPriceAs" name="ShowPriceAs">
                    <option value="">Loading...</option>
                </select>
            </div>
            <div class="transaction">
                <label for="TransactionType">Transaction Type:</label>
                <select id="TransactionType" name="TransactionType">
                    <option value="">Loading...</option>
                </select>
            </div>
            <div class="construction">
                <label for="anyConstructionDone">Any Construction Done:</label><br>
                <label>Yes</label>
                <input type="radio" name="anyConstructionDone" value="true">
                <label>No</label>
                <input type="radio" name="anyConstructionDone" value="false">
            </div>
            <div class="balcony">
                <label for="attachedBalcony">Attached Balcony:</label><br>
                <label>Yes</label>
                <input type="radio" name="attachedBalcony" value="true">
                <label>No</label>
                <input type="radio" name="attachedBalcony" value="false">
            </div>
            <div class="bathroom">
                <label for="attachedBathroom">Attached Bathroom:</label><br>
                <label>Yes</label>
                <input type="radio" name="attachedBathroom" value="true">
                <label>No</label>
                <input type="radio" name="attachedBathroom" value="false">
            </div>
            <div class="wall">
                <label for="boundaryWallMade">Boundary Wall Made:</label><br>
                <label>Yes</label>
                <input type="radio" name="boundaryWallMade" value="true">
                <label>No</label>
                <input type="radio" name="boundaryWallMade" value="false">
            </div>
            <div class="meeting-room">
                <label for="cabinMeetingRoom">Cabin Meeting Room:</label><br>
                <select id="cabinMeetingRoom" name="cabinMeetingRoom">
                    <option value="">Loading...</option>
                </select>
            </div>
            <div class="common-area">
                <label for="CommonArea">Common Area:</label><br>
                <label>Yes</label>
                <input type="radio" name="CommonArea" value="true">
                <label>No</label>
                <input type="radio" name="CommonArea" value="false">
            </div>
            <div class="corner-shop">
                <label for="cornerShop">Corner Shop:</label><br>
                <label>Yes</label>
                <input type="radio" name="cornerShop" value="true">
                <label>No</label>
                <input type="radio" name="cornerShop" value="false">
            </div>
            <div class="main-road">
                <label for="mainRoadFacing">Main Road Facing:</label><br>
                <label>Yes</label>
                <input type="radio" name="mainRoadFacing" value="true">
                <label>No</label>
                <input type="radio" name="mainRoadFacing" value="false">
            </div>
            <div class="floor">
                <label for="floor">Floor:</label>
                <select id="floor" name="floor">
                    <option value="">Loading...</option>
                </select>
            </div>
            <div class="furnished">
                <label for="FurnishedStatus">Furnished Status:</label>
                <select id="FurnishedStatus" name="FurnishedStatus">
                    <option value="">Loading...</option>
                </select>
            </div>
            <div class="ingatedbalcony">
                <label for="inGatedColony">In Gated Colony:</label><br>
                <label>Yes</label>
                <input type="radio" name="inGatedColony" value="true">
                <label>No</label>
                <input type="radio" name="inGatedColony" value="false">
            </div>
            <div class="bedroom">
                <label for="Bedroom">Bedroom:</label>
                <select id="Bedroom" name="Bedroom">
                    <option value="">Loading...</option>
                </select>
            </div>
            <div class="maintanance">
                <label for="maintenanceChargeFrequency">Maintenance Charge Frequency:</label>
                <select id="maintenanceChargeFrequency" name="maintenanceChargeFrequency">
                    <option value="">Loading...</option>
                </select>
            </div>
            <div class="notice-period">
                <label for="noticePeriod">Notice Period:</label>
                <select id="noticePeriod" name="noticePeriod">
                    <option value="">Loading...</option>
                </select>
            </div>
            <div class="near-school">
                <label for="nearSchool">Near School:</label><br>
                <label>Yes</label>
                <input type="radio" name="nearSchool" value="true">
                <label>No</label>
                <input type="radio" name="nearSchool" value="false">
            </div>


            <div class="property-image">
                <label for="propertyImage">Property Image</label>
                <input type="file" id="propertyImage" name="propertyImage[]" accept="image/*" multiple>
            </div>
            <div class="submit">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

    <!-- Advertisement Column -->
    <div class="ad-column">
        <!-- Placeholder for advertisement -->
        <h2>Advertisement</h2>
        <img src="https://via.placeholder.com/300" alt="Advertisement">
        <img src="https://via.placeholder.com/300" alt="Advertisement">
        <img src="https://via.placeholder.com/300" alt="Advertisement">

        <!-- Add more ads or promotional content here -->
    </div>
</div>



</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        populateDropdowns();
    });

    function populateDropdowns() {
        const dropdownConfigs = [
            { id: 'sharedOfficeSpace', filter: 'SharedOfficeSpace' },
            { id: 'Month', filter: 'Month' },
            { id: 'PossessionStatus', filter: 'PossessionStatus' },
            { id: 'PriceIncludes', filter: 'PriceIncludes' },
            { id: 'TransactionType', filter: 'TransactionType' },
            { id: 'anyConstructionDone', filter: 'anyConstructionDone' },
            { id: 'attachedBalcony', filter: 'attachedBalcony' },
            { id: 'attachedBathroom', filter: 'attachedBathroom' },
            { id: 'boundaryWallMade', filter: 'boundaryWallMade' },
            { id: 'ShowPriceAs', filter: 'ShowPriceAs' },
            { id: 'cabinMeetingRoom', filter: 'cabinMeetingRoom' },
            { id: 'CommonArea', filter: 'CommonArea' },
            { id: 'cornerShop', filter: 'cornerShop' },
            { id: 'mainRoadFacing', filter: 'mainRoadFacing' },
            { id: 'floor', filter: 'floor' },
            { id: 'FurnishedStatus', filter: 'FurnishedStatus' },
            { id: 'inGatedColony', filter: 'inGatedColony' },
            { id: 'Bedroom', filter: 'Bedroom' },
            { id: 'maintenanceChargeFrequency', filter: 'maintenanceChargeFrequency' },
            { id: 'noticePeriod', filter: 'noticePeriod' },
            { id: 'NearSchool', filter: 'NearSchool' },
            { id: 'NearHospital', filter: 'NearHospital' },
            { id: 'nearMarket', filter: 'nearMarket' },
        ];

        dropdownConfigs.forEach(config => {
            fetchDropdownData(config.id, config.filter);
        });
    }

    function fetchDropdownData(elementId, filter) {
        fetch('https://nplled.smggreen.com/api/dropdown', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ filter: filter })
        })
            .then(response => response.json())
            .then(data => {
                console.log('Dropdown data:', data);
                if (data.success && data.data) {
                    populateDropdown(elementId, data.data);
                } else {
                    console.error('Error fetching dropdown data', data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }

    function populateDropdown(elementId, data) {
        const dropdown = document.getElementById(elementId);
        dropdown.innerHTML = '';  // Clear existing options

        data.forEach(item => {
            const option = document.createElement('option');
            option.value = item.ddlValue;
            option.text = item.ddlText;
            dropdown.add(option);
        });
    }



</script>


@include('includes/footer')