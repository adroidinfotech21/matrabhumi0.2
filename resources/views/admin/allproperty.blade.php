@extends('layouts.master')

@section('title')
Dashboard Matrabhumi
@endsection

@section('content')
<div class="container">
    <h1>Property Listings</h1>
    <div id="properties"></div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Fetch properties from the Laravel endpoint
        axios.get('/properties')
            .then(function (response) {
                // Get the properties data
                const properties = response.data;

                // Get the properties div
                const propertiesDiv = document.getElementById('properties');

                // Loop through the properties and display them
                properties.data.forEach(function (property) {
                    const propertyDiv = document.createElement('div');
                    propertyDiv.classList.add('property');

                    propertyDiv.innerHTML = `
                            <h2>${property.listingTitle}</h2>
                            <p>${property.listingDescription}</p>
                            <p>Price: ${property.price} ${property.currency}</p>
                            <p>Location: ${property.addressLine1}, ${property.city}, ${property.state}, ${property.country}</p>
                            <img src="${property.imageSiteView}" alt="Site View" class="property-image">
                            <hr>
                        `;
                    propertiesDiv.appendChild(propertyDiv);
                });
            })
            .catch(function (error) {
                console.error('Error fetching properties:', error);
            });
    });
</script>
<style>
    .property {
        border: 1px solid #ddd;
        padding: 20px;
        margin-bottom: 20px;
    }

    .property-image {
        max-width: 100%;
        height: auto;
    }
</style>
@endsection