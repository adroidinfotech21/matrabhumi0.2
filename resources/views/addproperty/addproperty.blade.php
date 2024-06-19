<select name="propertyType" id="propertyType">
    @foreach($propertyTypes as $propertyType)
        <option value="{{ $propertyType['id'] }}">{{ $propertyType['name'] }}</option>
    @endforeach
</select>

<div id="propertyDetailsForm">
    <!-- Form elements will be populated dynamically -->
</div>

<script>
    document.getElementById('propertyType').addEventListener('change', function () {
        const propertyType = this.value;
        const filter = 'Month'; // Change the filter value as required

        fetch(`/api/property-details?propertyType=${propertyType}&filter=${filter}`)
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const details = data.data;
                    const formContainer = document.getElementById('propertyDetailsForm');

                    // Clear existing form elements
                    formContainer.innerHTML = '';

                    // Populate form with fetched details
                    details.forEach(detail => {
                        const label = document.createElement('label');
                        label.textContent = detail.ddlText; // Adjust as per your API response
                        const select = document.createElement('select');
                        select.name = detail.ddlType.toLowerCase(); // Adjust based on your API response
                        select.id = detail.ddlType.toLowerCase(); // Adjust based on your API response

                        // Populate options for select element
                        const options = detail.values.map(option => {
                            const optionElement = document.createElement('option');
                            optionElement.value = option.value; // Adjust based on your API response
                            optionElement.textContent = option.text; // Adjust based on your API response
                            return optionElement;
                        });

                        // Append options to select element
                        options.forEach(option => {
                            select.appendChild(option);
                        });

                        // Append label and select element to form container
                        formContainer.appendChild(label);
                        formContainer.appendChild(select);
                        formContainer.appendChild(document.createElement('br')); // Optional for spacing
                    });
                } else {
                    alert('Unable to fetch property details');
                }
            })
            .catch(error => {
                console.error('Error fetching property details:', error);
                alert('Error fetching property details. Please try again later.');
            });
    });
</script>