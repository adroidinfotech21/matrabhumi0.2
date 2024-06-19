<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell or Rent your Property</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script>
        function validateCharacterCount(event) {
            const textarea = event.target;
            const maxCharacters = 200;
            const charCount = textarea.value.length;
            const charCountDisplay = document.getElementById('charCount');

            if (charCount > maxCharacters) {
                textarea.value = textarea.value.substring(0, maxCharacters);
            }

            charCountDisplay.textContent = `${textarea.value.length}/${maxCharacters} characters`;
        }

        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('propertyType').addEventListener('change', function () {
                const propertyType = this.value;
                const filter = 'Month'; // Adjust this filter value as needed

                fetch('https://nplled.smggreen.com/api/DropDown', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ filter })
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            const details = data.data;
                            let detailsHtml = '';

                            details.forEach(detail => {
                                if (detail.ddlType === 'Bedrooms') {
                                    detailsHtml += `
                                        <div class="dropdown-group">
                                            <label for="bedrooms">Bedrooms:</label>
                                            <select id="bedrooms" name="bedrooms" class="dropdown">
                                                ${detail.ddlText.map(option => `<option value="${option.ddlValue}">${option.ddlText}</option>`).join('')}
                                            </select>
                                        </div>`;
                                }
                                // Add more conditions here if you have other types like "Month", "PossessionStatus", etc.
                            });

                            document.getElementById('propertyDetails').innerHTML = detailsHtml;
                        } else {
                            alert('Unable to fetch property details');
                        }
                    })
                    .catch(error => {
                        console.error('Error fetching property details:', error);
                        alert('Error fetching property details. Please try again later.');
                    });
            });
        });
    </script>
</head>

<body>
    <div class="container">
        <h2>Sell or Rent your Property</h2>
        <p>You are posting this property for <mark>free</mark></p>
        <div class="form-container">
            <form>
                <div class="input-name">
                    <h3>Property Details</h3>
                </div>
                <div class="option-group">
                    <p>For
                        <label for="sale" class="option-label">
                            <input type="radio" id="sale" name="option" value="sale">Sale
                        </label>
                        <label for="rent" class="option-label">
                            <input type="radio" id="rent" name="option" value="rent">Rent
                        </label>
                        <label for="pg" class="option-label">
                            <input type="radio" id="pg" name="option" value="pg">PG/Hostel
                        </label>
                    </p>
                </div>
                <div class="dropdown-group">
                    <label for="propertyType">Property Type:</label>
                    <select id="propertyType" name="propertyType" class="dropdown">
                        <option>Select</option>
                        <option value="house">House</option>
                        <option value="flat">Flat</option>
                        <option value="villa">Villa</option>
                        <option value="bungalow">Bungalow</option>
                        <option value="penthouse">Penthouse</option>
                        <option value="floor_apartment">Builder Floor Apartment</option>
                        <option value="commercial">All Commercial</option>
                        <option value="studio">Studio Apartment</option>
                        <option value="agriculture">Agriculture Land</option>
                        <option value="industry">Industrial Shed</option>
                    </select>
                </div>
                <div id="propertyDetails"></div>
                <!-- Your other form fields here -->

            </form>
        </div>
    </div>
</body>

</html>