@extends('layouts.master')

@section('title')
Dashboard Matrabhumi
@endsection

@section('content')

<style>
    table {
        display: block;
        overflow-x: auto;
        margin-left: 150px;
    }

    th,
    td {
        white-space: nowrap;
    }
</style>

<div class="container mt-5">
    <h2>All Properties</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Property ID</th>
                <th>city</th>
                <!-- <th>state</th> -->
                <!-- <th>zipCode</th>
                <th>country</th> -->
                <th>ownerName</th>
                <th>ownerContactNumber</th>
                <th>ownerEmail</th>
                <th>price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($properties as $property)
                <tr>
                    <td>{{ $property['propertyID'] }}</td>
                    <td>{{ $property['city'] }}</td>
                    <!-- <td>{{ $property['state'] }}</td> -->
                    <!-- <td>{{ $property['zipCode'] }}</td>
                                                            <td>{{ $property['country'] }}</td> -->

                    <td>{{ $property['ownerName'] }}</td>
                    <td>{{ $property['ownerContactNumber'] }}</td>
                    <td>{{ $property['ownerEmail'] }}</td>
                    <td>{{ $property['askedPrice'] }}</td>

                    <td>


                        <a href="{{ route('showPropertyDetails', ['propertyID' => $property['propertyID']]) }} "
                            class="btn btn-warning btn-sm">View</a>
                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No properties found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<script>

</script>

< @section('scripts')

    @endsection