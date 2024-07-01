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
    <form action="{{ route('property.form')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Property Type Dropdown -->
        <div>
            <label for="propertyType">Property Type</label>
            <select id="propertyType" name="propertyType" class="" required>
                <option value="">Select a property type</option>
                @foreach ($propertyTypes as $propertyType)
                    <option value="{{ $propertyType['id'] }}">{{ $propertyType['name'] }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <span>citiy</span><input type="text" name="city">
        </div>
        <div>
            <span>loction</span><input type="text" name="loction">
        </div>
        <!-- Other Dropdowns -->
        <div>
            <label for="sharedOfficeSpace">Shared Office Space:</label><br>
            <label for="">yes</label>
            <input type="radio" name="sharedOfficeSpace" value="ture">
            <label for="">no</label>
            <input type="radio" name="sharedOfficeSpace" value="false">
        </div>
        <div>

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
            <label for="anyConstructionDone">Any Construction Done:</label><br>
            <label for="">yes</label>
            <input type="radio" name="anyConstructionDone" value="ture">
            <label for="">no</label>
            <input type="radio" name="anyConstructionDone" value="false">
        </div>

        <div>
            <label for="attachedBalcony">Attached Balcony:</label><br>
            <label for="">yes</label>
            <input type="radio" name="attachedBalcony" value="ture">
            <label for="">no</label>
            <input type="radio" name="attachedBalcony" value="false">
        </div>

        <div>
            <label for="attachedBathroom">Attached Bathroom:</label><br>
            <label for="">yes</label>
            <input type="radio" name="attachedBathroom" value="ture">
            <label for="">no</label>
            <input type="radio" name="attachedBathroom" value="false">
        </div>

        <div>
            <label for="boundaryWallMade">Boundary Wall Made:</label><br>
            <label for="">yes</label>
            <input type="radio" name="boundaryWallMade" value="ture">
            <label for="">no</label>
            <input type="radio" name="boundaryWallMade" value="false">
        </div>

        <div>
            <label for="cabinMeetingRoom">Cabin Meeting Room:</label><br>
            <select id="cabinMeetingRoom" name="cabinMeetingRoom">
                <option value="">Loading...</option>
            </select>
        </div>

        <div>
            <label for="CommonArea">Common Area:</label><br>
            <label for="">yes</label>
            <input type="radio" name="CommonArea" value="ture">
            <label for="">no</label>
            <input type="radio" name="CommonArea" value="false">
        </div>

        <div>
            <label for="cornerShop">Corner Shop:</label><br>
            <label for="">yes</label>
            <input type="radio" name="cornerShop" value="ture">
            <label for="">no</label>
            <input type="radio" name="cornerShop" value="false">
        </div>

        <div>
            <label for="mainRoadFacing">Main Road Facing:</label><br>
            <label for="">yes</label>
            <input type="radio" name="mainRoadFacing" value="ture">
            <label for="">no</label>
            <input type="radio" name="mainRoadFacing" value="false">
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
            <label for="inGatedColony">In Gated Colony:</label><br>
            <label for="">yes</label>
            <input type="radio" name="inGatedColony" value="ture">
            <label for="">no</label>
            <input type="radio" name="inGatedColony" value="false">
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
            <label for="NearSchool">Near School:</label><br>
            <label for="">yes</label>
            <input type="radio" name="NearSchool" value="ture">
            <label for="">no</label>
            <input type="radio" name="NearSchool" value="false">
        </div>

        <div>
            <label for="NearHospital">Near Hospital:</label><br>
            <label for="">yes</label>
            <input type="radio" name="NearHospital" value="ture">
            <label for="">no</label>
            <input type="radio" name="NearHospital" value="false">
        </div>

        <div>
            <label for="nearMarket">Near Market:</label><br>
            <label for="">yes</label>
            <input type="radio" name="nearMarket" value="ture">
            <label for="">no</label>
            <input type="radio" name="nearMarket" value="false">
        </div>

        <div>
            <label for="propertyImage">Upload Property Images:</label>
            <input type="file" id="propertyImage" name="propertyImage[]" multiple><br><br>
        </div>

        <div>
            <button type="submit" name="submit">Submit Details</button>
        </div>
    </form>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Populate dropdowns on page load
            populateDropdowns();

            // Add form submission event listener
            document.getElementById('propertyForm').addEventListener('submit', function (event) {
                event.preventDefault();
                submitForm();
            });
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

        function submitForm() {
            const form = document.getElementById('propertyForm');
            const formData = new FormData(form);

            const data = {};
            formData.forEach((value, key) => {
                // Handle boolean values
                if (value === "true") {
                    data[key] = true;
                } else if (value === "false") {
                    data[key] = false;
                } else {
                    data[key] = value;
                }
            });

            console.log('Submitting form data:', data);

            fetch('{{ url("/api/property-registration") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify(data)
            })
                .then(response => {
                    if (!response.ok) {
                        return response.json().then(errorData => {
                            throw new Error(errorData.message || 'Something went wrong');
                        });
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        alert('Property registered successfully');
                    } else {
                        alert('Failed to register property: ' + data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred: ' + error.message);
                });
        }


    </script>


    @include('includes/footer')