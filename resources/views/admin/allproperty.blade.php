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
                        <form action="{{ route('properties.delete', $property['propertyID']) }}" method="POST"
                            class="d-inline delete-property-form" data-property-id="{{ $property['propertyID'] }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
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
<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.delete-property').on('click', function (event) {
            event.preventDefault();

            var propertyId = $(this).data('id');
            var token = "{{ csrf_token() }}";

            if (confirm('Are you sure you want to delete this property?')) {
                $.ajax({
                    url: '/property/' + propertyId,
                    type: 'DELETE',
                    data: {
                        "_token": token,
                    },
                    success: function (response) {
                        if (response.success) {
                            alert('Property deleted successfully');
                            location.reload();
                        } else {
                            alert('Failed to delete property');
                        }
                    },
                    error: function (response) {
                        alert('An error occurred: ' + response.responseText);
                    }
                });
            }
        });
    });
</script>

< @section('scripts')

    @endsection