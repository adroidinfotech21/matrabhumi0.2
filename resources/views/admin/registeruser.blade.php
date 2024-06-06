@extends('layouts.master')


@section('title')
dashbord matrabhumi
@endsection

@section('content')
<div class="main">
         
                
                
                 
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="card-header pr">
                                    <h4> All Users</h4>
                                    <div class="search-action">
                                        <div class="search-type dib">
                                            <input class="form-control input-rounded" placeholder="Search by exam" type="text">
                                        </div>
                                        <div class="search-type dib">
                                            <input class="form-control input-rounded" placeholder="Search by date..." type="text">
                                        </div>
                                        <div class="search-type dib">
                                            <input class="form-control input-rounded" placeholder="search" type="text">
                                        </div>
                                    </div>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                            <li class="card-option drop-menu"><i class="ti-settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="link"></i>
                                                <ul class="card-option-dropdown dropdown-menu">
                                                    <li><a href="#"><i class="ti-loop"></i> Update data</a></li>
                                                    <li><a href="#"><i class="ti-menu-alt"></i> Detail log</a></li>
                                                    <li><a href="#"><i class="ti-pulse"></i> Statistics</a></li>
                                                    <li><a href="#"><i class="ti-power-off"></i> Clear ist</a></li>
                                                </ul>
                                            </li>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="container mt-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                {{-- <pre>{{ dd($userData) }}</pre> <!-- Debugging line to inspect data structure --> --}}
                                                @if(!empty($userData) && is_array($userData))
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                              
                                                                <th>User Name</th>
                                                                <th>Email</th>
                                                                <th>Phone Number</th>
                                                                <th>Role Name</th>
                                                                <th>Date</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($userData as $item)
                                                                <tr>
                                                             
                                                                    <td>{{ $item['userName'] ?? 'N/A' }}</td>
                                                                    <td>{{ $item['email'] ?? 'N/A' }}</td>
                                                                    <td>{{ $item['phoneNumber'] ?? 'N/A' }}</td>
                                                                    <td>{{ $item['roleName'] ?? 'N/A' }}</td>
                                                                    <td>{{ now()->format('d/m/y') }}</td> <!-- Displaying the current date -->
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                @else
                                                    <p>No data available.</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    <!-- /# row -->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card bg-primary">
                                <div class="stat-widget-nine">
                                    <div class="stat-icon"><i class="ti-facebook color-white"></i></div>
                                    <div class="fb-card horizontal">
                                        <div class="stat-content m-t-13 dib">
                                            <div class="stat-text">Like us</div>
                                            <div class="stat-digit">on facebook</div>
                                        </div>
                                        <div class="all-like dib">
                                            <span class="like-count m-t-18">3000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-warning">
                                <div class="stat-widget-nine">
                                    <div class="stat-icon"><i class="ti-twitter-alt color-white"></i></div>
                                    <div class="twitter-card horizontal">
                                        <div class="stat-content m-t-13 dib">
                                            <div class="stat-text">Like us</div>
                                            <div class="stat-digit">on twitter</div>
                                        </div>
                                        <div class="all-like dib">
                                            <span class="like-count m-t-18">3000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-info">
                                <div class="stat-widget-nine">
                                    <div class="stat-icon"><i class="ti-google color-white"></i></div>
                                    <div class="google-plus-card horizontal">
                                        <div class="stat-content m-t-13 dib">
                                            <div class="stat-text">Like us</div>
                                            <div class="stat-digit">on google</div>
                                        </div>
                                        <div class="all-like dib">
                                            <span class="like-count m-t-18">3000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-danger">
                                <div class="stat-widget-nine">
                                    <div class="stat-icon"><i class="ti-linkedin color-white"></i></div>
                                    <div class="linkedin-card horizontal">
                                        <div class="stat-content m-t-13 dib">
                                            <div class="stat-text">Like us</div>
                                            <div class="stat-digit">on linkedin</div>
                                        </div>
                                        <div class="all-like dib">
                                            <span class="like-count m-t-18">3000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>This dashboard was generated on <span id="date-time"></span> <a href="#" class="page-refresh">Refresh Dashboard</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection



@section('scripts')

@endsection
