@extends('layouts.master')


@section('title')
dashbord matrabhumi
@endsection

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Listings</title>
    <style>
        .property {
            border: 1px solid #ddd;
            margin: 10px;
            padding: 10px;
        }

        .property img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    <h1>Property Listings</h1>
    <div id="properties"></div>

    <script src="property-listings.js"></script>
</body>

</html>





@endsection






@section('scripts')

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const apiEndpoint = 'https://nplled.smggreen.com/api/PropertyRegistration';

        // Fetch property data
        fetch(apiEndpoint)
            .then(response => response.json())
            .then(data => {
                if (data && data.success && data.data) {
                    const properties = data.data;
                    const propertiesContainer = document.getElementById('properties');

                    // Loop through the properties and create HTML elements for each
                    properties.forEach(property => {
                        const propertyElement = document.createElement('div');
                        propertyElement.classList.add('property');

                        propertyElement.innerHTML = `
                        <h2>${property.listingTitle}</h2>
                        <p>${property.listingDescription}</p>
                        <img src="${property.imageSiteView}" alt="Site View">
                        <div>
                            <p><strong>Price:</strong> ${property.price} ${property.currency}</p>
                            <p><strong>Owner Name:</strong> ${property.ownerName}</p>
                            <p><strong>Contact:</strong> ${property.ownerContactNumber}</p>
                            <p><strong>Email:</strong> ${property.ownerEmail}</p>
                            <p><strong>Location:</strong> ${property.addressLine1}, ${property.addressLine2}, ${property.city}, ${property.state}, ${property.zipCode}, ${property.country}</p>
                        </div>
                    `;

                        propertiesContainer.appendChild(propertyElement);
                    });
                } else {
                    console.error('Failed to fetch property data');
                }
            })
            .catch(error => console.error('Error fetching property data:', error));
    });
</script>
@endsection