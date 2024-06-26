document.addEventListener('DOMContentLoaded', function () {
    // Populate dropdowns on page load
    populateDropdowns();

    // Add form submission event listener
    document.getElementById('propertyForm1').addEventListener('submit', function (event) {
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
    const form = document.getElementById('propertyForm1');
    const formData = new FormData(form);

    const data = {};
    formData.forEach((value, key) => {
        data[key] = value;
    });

    fetch('{{ url("/api/property-registration") }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify(data)
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Property registered successfully');
            } else {
                alert('Failed to register property: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
}
