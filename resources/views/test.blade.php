@include('includes/header')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Carousel</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container mt-5">
        <h2>All Properties</h2>
        <div id="propertyCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @forelse($properties as $index => $property)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Property ID: {{ $property['propertyID'] }}</h5>
                                <p class="card-text">City: {{ $property['city'] }}</p>
                                <p class="card-text">Owner Name: {{ $property['ownerName'] }}</p>
                                <p class="card-text">Owner Contact: {{ $property['ownerContactNumber'] }}</p>
                                <p class="card-text">Owner Email: {{ $property['ownerEmail'] }}</p>
                                <p class="card-text">Price: {{ $property['askedPrice'] }}</p>
                                <a href="{{ route('showPropertyDetails', ['propertyID' => $property['propertyID']]) }}"
                                    class="btn btn-warning btn-sm">View</a>
                                <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="carousel-item active">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-center">No properties found.</h5>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
            <a class="carousel-control-prev" href="#propertyCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#propertyCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</body>

</html>

@include('includes/footer')