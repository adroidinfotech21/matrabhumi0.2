@extends('layouts.master')

@section('title')
    Dashboard Matrabhumi
@endsection

@section('content')
<div class="container">
    <h1>Advertisements</h1>

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    {{-- Debugging section --}}
    <div>
        <h3>Debug Information</h3>
        <pre>{{ isset($ads) ? print_r($ads, true) : 'No ads data available' }}</pre>
    </div>

    @if(isset($ads) && is_array($ads) && count($ads) > 0)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Ad Block</th>
                    <th>Property Name</th>
                    <th>City</th>
                    <th>Budget</th>
                    <th>Type of House</th>
                    <th>Number of Rooms</th>
                    <th>Possession</th>
                    <th>Year of Property</th>
                    <th>Near School</th>
                    <th>Near Railway Station</th>
                    <th>Gym</th>
                    <th>Swimming Pool</th>
                    <th>Park</th>
                    <th>Security</th>
                    <th>Lift</th>
                    <th>Images</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ads as $ad)
                    <tr>
                        <td>{{ $ad['AdBlock'] ?? 'N/A' }}</td>
                        <td>{{ $ad['propertyName'] ?? 'N/A' }}</td>
                        <td>{{ $ad['city'] ?? 'N/A' }}</td>
                        <td>{{ $ad['budget'] ?? 'N/A' }}</td>
                        <td>{{ $ad['typeOfHouse'] ?? 'N/A' }}</td>
                        <td>{{ $ad['numberOfRooms'] ?? 'N/A' }}</td>
                        <td>{{ $ad['Possession'] ?? 'N/A' }}</td>
                        <td>{{ $ad['yearOfProperty'] ?? 'N/A' }}</td>
                        <td>{{ $ad['nearSchool'] ?? 'N/A' }}</td>
                        <td>{{ $ad['nearRailwayStation'] ?? 'N/A' }}</td>
                        <td>{{ $ad['gym'] ?? 'N/A' }}</td>
                        <td>{{ $ad['swimmingPool'] ?? 'N/A' }}</td>
                        <td>{{ $ad['park'] ?? 'N/A' }}</td>
                        <td>{{ $ad['security'] ?? 'N/A' }}</td>
                        <td>{{ $ad['lift'] ?? 'N/A' }}</td>
                        <td>
                            @for($i = 1; $i <= 4; $i++)
                                @if(isset($ad['Image' . $i]))
                                    <img src="{{ $ad['Image' . $i] }}" alt="Image {{ $i }}" width="100">
                                @endif
                            @endfor
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No advertisements found.</p>
    @endif
</div>
@endsection
