@extends('layouts.master')

@section('title')
Dashboard Matrabhumi
@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Listing</title>
    <link rel="stylesheet" href="style.css">

    <style>
        .container1 {
            display: flex;
            flex-wrap: wrap;
            max-width: 1000px;
            margin: 20px auto;
            margin-left: 250px;
            margin-top: 100px;
        }

        .property-details {
            width: 60%;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 20px;
        }

        .property-details h2 {
            margin-bottom: 10px;
        }

        .property-details p {
            margin-bottom: 5px;
        }

        .location {
            color: #aaa;
        }

        .key-features {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 15px;
        }

        .key-features span {
            background-color: #eee;
            padding: 5px 10px;
            border-radius: 4px;
            margin-right: 10px;
            margin-bottom: 5px;
        }

        .details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 10px;
        }

        .contact-section {
            width: 40%;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            text-align: center;
            margin-bottom: 20px;
        }

        .contact-section p.price {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .contact-section p.emi {
            margin-bottom: 15px;
        }

        .contact-section a.btn {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    @if(isset($propertydisplay))
        <div class="container1">
            <div class="property-details">
                <h2>{{ $propertydisplay['listingTitle'] }}</h2>
                <span>{{ $propertydisplay['city'] }}</span>
                &nbsp;<span>{{ $propertydisplay['state'] }}</span>&nbsp;<span>{{ $propertydisplay['zipCode'] }}</span>&nbsp;<span>{{ $propertydisplay['country'] }}</span>
                <div class="key-features">
                    <span>{{ $propertydisplay['bedroom'] }} Bedrooms</span>
                    <span>{{ $propertydisplay['bathroom'] }} Bathsroom</span>
                    <span>{{ $propertydisplay['attachedBalcony'] }} Attached Balcony</span>
                    <span>{{ $propertydisplay['parkingSpaces'] }} Covered Parking</span>
                </div>
                <div class="details">
                    <p>Super Built-Up Area: {{ $propertydisplay['builtUpArea'] }} sqft</p>
                    <p>Developer: Nirupam Associates</p>
                    <p>Project: Nirupam Royal Palms</p>
                    <p>Floor: 1 (Out of 6 Floors)</p>
                    <p>Transaction Type: Resale</p>
                    <p>Status: Ready to Move</p>
                    <p>+18 Photos</p>
                    <p>Lifts: 2</p>
                    <p>Furnished Status: Unfurnished</p>
                    <p>Car Parking: 1 Covered</p>
                </div>
            </div>
            <div class="contact-section">
                <p class="price">₹ 36.0 Lac</p>
                <p class="emi">EMI-16k Can I afford it?</p>
                <a href="#" class="btn btn-primary">Contact Owner</a>
            </div>
        </div>

        <div>
            <img src="{{ asset($propertydisplay['internetConnection']) }}" alt="">
        </div>

    @else
        <p>No property details found.</p>
    @endif
</body>

</html>

< @section('scripts')

    @endsection