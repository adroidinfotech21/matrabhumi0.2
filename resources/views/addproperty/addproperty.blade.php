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
    <form action="{{ route('property.form') }}" method="POST">
        @csrf

        <!-- Property Type Dropdown -->
        <div class="">
            <label for="propertyType">Property Type</label>
            <select id="propertyType" name="propertyType" class="" required>
                <option value="" disabled selected>Select a property type</option>
                @foreach ($propertyTypes as $propertyType)
                    <option value="{{ $propertyType['id'] }}">{{ $propertyType['name'] }}</option>
                @endforeach
            </select>
        </div>
        <label for="sharedOfficeSpace">Shared Office Space:</label>
        <select id="sharedOfficeSpace">
            <option value="">Loading...</option>
        </select><br> <br>
        <label for="Month">Month:</label>
        <select id="Month">
            <option value="">Loading...</option>
        </select><br> <br>
        <label for="PossessionStatus">PossessionStatus:</label>
        <select id="PossessionStatus">
            <option value="">Loading...</option>
        </select><br> <br>
        <label for="PriceIncludes">PriceIncludes:</label>
        <select id="PriceIncludes">
            <option value="">Loading...</option>
        </select><br> <br>
        <label for="ShowPriceAs">ShowPriceAs:</label>
        <select id="ShowPriceAs">
            <option value="">Loading...</option>
        </select><br> <br>
        <label for="TransactionType">TransactionType:</label>
        <select id="TransactionType">
            <option value="">Loading...</option>
        </select><br> <br>
        <label for="anyConstructionDone">anyConstructionDone:</label>
        <select id="anyConstructionDone">
            <option value="">Loading...</option>
        </select><br> <br>
        <label for="attachedBalcony">attachedBalcony :</label>
        <select id="attachedBalcony">
            <option value="">Loading...</option>
        </select><br><br>
        <label for="attachedBathroom">attachedBathroom :</label>
        <select id="attachedBathroom">
            <option value="">Loading...</option>
        </select><br><br>
        <label for="boundaryWallMade">boundaryWallMade :</label>
        <select id="boundaryWallMade">
            <option value="">Loading...</option>
        </select><br><br>
        <label for="cabinMeetingRoom">cabinMeetingRoom :</label>
        <select id="cabinMeetingRoom">
            <option value="">Loading...</option>
        </select><br><br>
        <label for="CommonArea">CommonArea :</label>
        <select id="CommonArea">
            <option value="">Loading...</option>
        </select><br><br>
        <label for="cornerShop">cornerShop :</label>
        <select id="cornerShop">
            <option value="">Loading...</option>
        </select><br><br>
        <label for="mainRoadFacing">mainRoadFacing :</label>
        <select id="mainRoadFacing">
            <option value="">Loading...</option>
        </select><br><br>
        <label for="floor">floor :</label>
        <select id="floor">
            <option value="">Loading...</option>
        </select><br><br>
        <label for="FurnishedStatus">FurnishedStatus :</label>
        <select id="FurnishedStatus">
            <option value="">Loading...</option>
        </select><br><br>
        <label for="inGatedColony">inGatedColony :</label>
        <select id="inGatedColony">
            <option value="">Loading...</option>
        </select><br><br>
        <label for="Bedroom">Bedroom :</label>
        <select id="Bedroom">
            <option value="">Loading...</option>
        </select><br><br>
        <label for="maintenanceChargeFrequency">maintenanceChargeFrequency :</label>
        <select id="maintenanceChargeFrequency">
            <option value="">Loading...</option>
        </select><br><br>
        <label for="noticePeriod">noticePeriod :</label>
        <select id="noticePeriod">
            <option value="">Loading...</option>
        </select><br><br>
        <label for="NearSchool">NearSchool :</label>
        <select id="NearSchool">
            <option value="">Loading...</option>
        </select><br><br>

        <label for="NearHospital">nearHospital :</label>
        <select id="NearHospital">
            <option value="">Loading...</option>
        </select><br><br>
        <label for="nearMarket">nearMarket :</label>
        <select id="nearMarket">
            <option value="">Loading...</option>
        </select><br><br>

    </form>


    <script>
        // Function to populate the dropdown
        function populateDropdown(data) {
            const dropdown = document.getElementById('sharedOfficeSpace');
            dropdown.innerHTML = '';  // Clear existing options

            data.forEach(item => {
                const option = document.createElement('option');
                option.value = item.ddlValue;
                option.text = item.ddlText;
                dropdown.add(option);
            });
        }

        // Fetch data from the API
        fetch('https://nplled.smggreen.com/api/dropdown', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ filter: "SharedOfficeSpace" })
        })
            .then(response => response.json())
            .then(data => {
                if (data.success && data.data) {
                    populateDropdown(data.data);
                } else {
                    console.error('Error fetching dropdown data', data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });

        function populateDropdown1(data) {
            const dropdown = document.getElementById('Month');
            dropdown.innerHTML = '';  // Clear existing options

            data.forEach(item => {
                const option = document.createElement('option');
                option.value = item.ddlValue;
                option.text = item.ddlText;
                dropdown.add(option);
            });
        }

        // Fetch data from the API
        fetch('https://nplled.smggreen.com/api/dropdown', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ filter: "Month" })
        })
            .then(response => response.json())
            .then(data => {
                if (data.success && data.data) {
                    populateDropdown1(data.data);
                } else {
                    console.error('Error fetching dropdown data', data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });

        function populateDropdown2(data) {
            const dropdown = document.getElementById('PossessionStatus');
            dropdown.innerHTML = '';  // Clear existing options

            data.forEach(item => {
                const option = document.createElement('option');
                option.value = item.ddlValue;
                option.text = item.ddlText;
                dropdown.add(option);
            });
        }

        // Fetch data from the API
        fetch('https://nplled.smggreen.com/api/dropdown', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ filter: "PossessionStatus" })
        })
            .then(response => response.json())
            .then(data => {
                if (data.success && data.data) {
                    populateDropdown2(data.data);
                } else {
                    console.error('Error fetching dropdown data', data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });

        function populateDropdown3(data) {
            const dropdown = document.getElementById('PriceIncludes');
            dropdown.innerHTML = '';  // Clear existing options

            data.forEach(item => {
                const option = document.createElement('option');
                option.value = item.ddlValue;
                option.text = item.ddlText;
                dropdown.add(option);
            });
        }

        // Fetch data from the API
        fetch('https://nplled.smggreen.com/api/dropdown', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ filter: "PriceIncludes" })
        })
            .then(response => response.json())
            .then(data => {
                if (data.success && data.data) {
                    populateDropdown3(data.data);
                } else {
                    console.error('Error fetching dropdown data', data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });




        function populateDropdown5(data) {
            const dropdown = document.getElementById('TransactionType');
            dropdown.innerHTML = '';  // Clear existing options

            data.forEach(item => {
                const option = document.createElement('option');
                option.value = item.ddlValue;
                option.text = item.ddlText;
                dropdown.add(option);
            });
        }

        // Fetch data from the API
        fetch('https://nplled.smggreen.com/api/dropdown', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ filter: "TransactionType" })
        })
            .then(response => response.json())
            .then(data => {
                if (data.success && data.data) {
                    populateDropdown5(data.data);
                } else {
                    console.error('Error fetching dropdown data', data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });



        function populateDropdown6(data) {
            const dropdown = document.getElementById('anyConstructionDone');
            dropdown.innerHTML = '';  // Clear existing options

            data.forEach(item => {
                const option = document.createElement('option');
                option.value = item.ddlValue;
                option.text = item.ddlText;
                dropdown.add(option);
            });
        }

        // Fetch data from the API
        fetch('https://nplled.smggreen.com/api/dropdown', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ filter: "anyConstructionDone" })
        })
            .then(response => response.json())
            .then(data => {
                if (data.success && data.data) {
                    populateDropdown6(data.data);
                } else {
                    console.error('Error fetching dropdown data', data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });

        function populateDropdown7(data) {
            const dropdown = document.getElementById('attachedBalcony');
            dropdown.innerHTML = '';  // Clear existing options

            data.forEach(item => {
                const option = document.createElement('option');
                option.value = item.ddlValue;
                option.text = item.ddlText;
                dropdown.add(option);
            });
        }

        // Fetch data from the API
        fetch('https://nplled.smggreen.com/api/dropdown', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ filter: "attachedBalcony" })
        })
            .then(response => response.json())
            .then(data => {
                if (data.success && data.data) {
                    populateDropdown7(data.data);
                } else {
                    console.error('Error fetching dropdown data', data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });


        function populateDropdown8(data) {
            const dropdown = document.getElementById('attachedBathroom');
            dropdown.innerHTML = '';  // Clear existing options

            data.forEach(item => {
                const option = document.createElement('option');
                option.value = item.ddlValue;
                option.text = item.ddlText;
                dropdown.add(option);
            });
        }

        // Fetch data from the API
        fetch('https://nplled.smggreen.com/api/dropdown', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ filter: "attachedBathroom" })
        })
            .then(response => response.json())
            .then(data => {
                if (data.success && data.data) {
                    populateDropdown8(data.data);
                } else {
                    console.error('Error fetching dropdown data', data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });

        function populateDropdown9(data) {
            const dropdown = document.getElementById('boundaryWallMade');
            dropdown.innerHTML = '';  // Clear existing options

            data.forEach(item => {
                const option = document.createElement('option');
                option.value = item.ddlValue;
                option.text = item.ddlText;
                dropdown.add(option);
            });
        }

        // Fetch data from the API
        fetch('https://nplled.smggreen.com/api/dropdown', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ filter: "boundaryWallMade" })
        })
            .then(response => response.json())
            .then(data => {
                if (data.success && data.data) {
                    populateDropdown9(data.data);
                } else {
                    console.error('Error fetching dropdown data', data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });


        function populateDropdown01(data) {
            const dropdown = document.getElementById('ShowPriceAs');
            dropdown.innerHTML = '';  // Clear existing options

            data.forEach(item => {
                const option = document.createElement('option');
                option.value = item.ddlValue;
                option.text = item.ddlText;
                dropdown.add(option);
            });
        }

        // Fetch data from the API
        fetch('https://nplled.smggreen.com/api/dropdown', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ filter: "ShowPriceAs" })
        })
            .then(response => response.json())
            .then(data => {
                if (data.success && data.data) {
                    populateDropdown01(data.data);
                } else {
                    console.error('Error fetching dropdown data', data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });

        function populateDropdown02(data) {
            const dropdown = document.getElementById('cabinMeetingRoom');
            dropdown.innerHTML = '';  // Clear existing options

            data.forEach(item => {
                const option = document.createElement('option');
                option.value = item.ddlValue;
                option.text = item.ddlText;
                dropdown.add(option);
            });
        }

        // Fetch data from the API
        fetch('https://nplled.smggreen.com/api/dropdown', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ filter: "cabinMeetingRoom" })
        })
            .then(response => response.json())
            .then(data => {
                if (data.success && data.data) {
                    populateDropdown02(data.data);
                } else {
                    console.error('Error fetching dropdown data', data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });


        function populateDropdown03(data) {
            const dropdown = document.getElementById('CommonArea');
            dropdown.innerHTML = '';  // Clear existing options

            data.forEach(item => {
                const option = document.createElement('option');
                option.value = item.ddlValue;
                option.text = item.ddlText;
                dropdown.add(option);
            });
        }

        // Fetch data from the API
        fetch('https://nplled.smggreen.com/api/dropdown', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ filter: "CommonArea" })
        })
            .then(response => response.json())
            .then(data => {
                if (data.success && data.data) {
                    populateDropdown03(data.data);
                } else {
                    console.error('Error fetching dropdown data', data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });



        function populateDropdown04(data) {
            const dropdown = document.getElementById('cornerShop');
            dropdown.innerHTML = '';  // Clear existing options

            data.forEach(item => {
                const option = document.createElement('option');
                option.value = item.ddlValue;
                option.text = item.ddlText;
                dropdown.add(option);
            });
        }

        // Fetch data from the API
        fetch('https://nplled.smggreen.com/api/dropdown', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ filter: "cornerShop" })
        })
            .then(response => response.json())
            .then(data => {
                if (data.success && data.data) {
                    populateDropdown04(data.data);
                } else {
                    console.error('Error fetching dropdown data', data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });


        function populateDropdown05(data) {
            const dropdown = document.getElementById('mainRoadFacing');
            dropdown.innerHTML = '';  // Clear existing options

            data.forEach(item => {
                const option = document.createElement('option');
                option.value = item.ddlValue;
                option.text = item.ddlText;
                dropdown.add(option);
            });
        }

        // Fetch data from the API
        fetch('https://nplled.smggreen.com/api/dropdown', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ filter: "mainRoadFacing" })
        })
            .then(response => response.json())
            .then(data => {
                if (data.success && data.data) {
                    populateDropdown05(data.data);
                } else {
                    console.error('Error fetching dropdown data', data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });

        function populateDropdown06(data) {
            const dropdown = document.getElementById('floor');
            dropdown.innerHTML = '';  // Clear existing options

            data.forEach(item => {
                const option = document.createElement('option');
                option.value = item.ddlValue;
                option.text = item.ddlText;
                dropdown.add(option);
            });
        }

        // Fetch data from the API
        fetch('https://nplled.smggreen.com/api/dropdown', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ filter: "floor" })
        })
            .then(response => response.json())
            .then(data => {
                if (data.success && data.data) {
                    populateDropdown06(data.data);
                } else {
                    console.error('Error fetching dropdown data', data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });


        function populateDropdown07(data) {
            const dropdown = document.getElementById('FurnishedStatus');
            dropdown.innerHTML = '';  // Clear existing options

            data.forEach(item => {
                const option = document.createElement('option');
                option.value = item.ddlValue;
                option.text = item.ddlText;
                dropdown.add(option);
            });
        }

        // Fetch data from the API
        fetch('https://nplled.smggreen.com/api/dropdown', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ filter: "FurnishedStatus" })
        })
            .then(response => response.json())
            .then(data => {
                if (data.success && data.data) {
                    populateDropdown07(data.data);
                } else {
                    console.error('Error fetching dropdown data', data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });

        function populateDropdown08(data) {
            const dropdown = document.getElementById('inGatedColony');
            dropdown.innerHTML = '';  // Clear existing options

            data.forEach(item => {
                const option = document.createElement('option');
                option.value = item.ddlValue;
                option.text = item.ddlText;
                dropdown.add(option);
            });
        }

        // Fetch data from the API
        fetch('https://nplled.smggreen.com/api/dropdown', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ filter: "inGatedColony" })
        })
            .then(response => response.json())
            .then(data => {
                if (data.success && data.data) {
                    populateDropdown08(data.data);
                } else {
                    console.error('Error fetching dropdown data', data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });

        function populateDropdown09(data) {
            const dropdown = document.getElementById('Bedroom');
            dropdown.innerHTML = '';  // Clear existing options

            data.forEach(item => {
                const option = document.createElement('option');
                option.value = item.ddlValue;
                option.text = item.ddlText;
                dropdown.add(option);
            });
        }

        // Fetch data from the API
        fetch('https://nplled.smggreen.com/api/dropdown', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ filter: "Bedroom" })
        })
            .then(response => response.json())
            .then(data => {
                if (data.success && data.data) {
                    populateDropdown09(data.data);
                } else {
                    console.error('Error fetching dropdown data', data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });


        function populateDropdown11(data) {
            const dropdown = document.getElementById('maintenanceChargeFrequency');
            dropdown.innerHTML = '';  // Clear existing options

            data.forEach(item => {
                const option = document.createElement('option');
                option.value = item.ddlValue;
                option.text = item.ddlText;
                dropdown.add(option);
            });
        }

        // Fetch data from the API
        fetch('https://nplled.smggreen.com/api/dropdown', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ filter: "maintenanceChargeFrequency" })
        })
            .then(response => response.json())
            .then(data => {
                if (data.success && data.data) {
                    populateDropdown11(data.data);
                } else {
                    console.error('Error fetching dropdown data', data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });

        function populateDropdown12(data) {
            const dropdown = document.getElementById('noticePeriod');
            dropdown.innerHTML = '';  // Clear existing options

            data.forEach(item => {
                const option = document.createElement('option');
                option.value = item.ddlValue;
                option.text = item.ddlText;
                dropdown.add(option);
            });
        }

        // Fetch data from the API
        fetch('https://nplled.smggreen.com/api/dropdown', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ filter: "noticePeriod" })
        })
            .then(response => response.json())
            .then(data => {
                if (data.success && data.data) {
                    populateDropdown12(data.data);
                } else {
                    console.error('Error fetching dropdown data', data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });


        function populateDropdown13(data) {
            const dropdown = document.getElementById('NearSchool');
            dropdown.innerHTML = '';  // Clear existing options

            data.forEach(item => {
                const option = document.createElement('option');
                option.value = item.ddlValue;
                option.text = item.ddlText;
                dropdown.add(option);
            });
        }

        // Fetch data from the API
        fetch('https://nplled.smggreen.com/api/dropdown', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ filter: "NearSchool" })
        })
            .then(response => response.json())
            .then(data => {
                if (data.success && data.data) {
                    populateDropdown13(data.data);
                } else {
                    console.error('Error fetching dropdown data', data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });

        function populateDropdown14(data) {
            const dropdown = document.getElementById('NearHospital');
            dropdown.innerHTML = '';  // Clear existing options

            data.forEach(item => {
                const option = document.createElement('option');
                option.value = item.ddlValue;
                option.text = item.ddlText;
                dropdown.add(option);
            });
        }

        // Fetch data from the API
        fetch('https://nplled.smggreen.com/api/dropdown', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ filter: "NearHospital" })
        })
            .then(response => response.json())
            .then(data => {
                if (data.success && data.data) {
                    populateDropdown14(data.data);
                } else {
                    console.error('Error fetching dropdown data', data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });

        function populateDropdown15(data) {
            const dropdown = document.getElementById('nearMarket');
            dropdown.innerHTML = '';  // Clear existing options

            data.forEach(item => {
                const option = document.createElement('option');
                option.value = item.ddlValue;
                option.text = item.ddlText;
                dropdown.add(option);
            });
        }

        // Fetch data from the API
        fetch('https://nplled.smggreen.com/api/dropdown', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ filter: "nearMarket" })
        })
            .then(response => response.json())
            .then(data => {
                if (data.success && data.data) {
                    populateDropdown15(data.data);
                } else {
                    console.error('Error fetching dropdown data', data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    </script>
    @include('includes/footer')