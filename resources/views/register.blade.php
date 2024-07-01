@include('includes/header')

@if (session('status'))
    <p style="color: green;">{{ session('status') }}</p>
@endif

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="center-wrapper">
    <div class="form-container">
        <h2 style="color:white;">Registration Form</h2>
        <form action="{{ route('register.submit') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name" style="color:white;">Name:</label>
                <input type="text" id="name" name="name" required class="namefield">
            </div>
            <div class="form-group">
                <label for="email" style="color:white;">Email:</label>
                <input type="email" id="email" name="email" required class="namefield">
            </div>
            <div class="form-group">
                <label for="number" style="color:white;">Phone Number:</label>
                <input type="tel" id="number" name="phonenumber" required class="namefield">
            </div>
            <div class="form-group">
                <label for="role" style="color:white;">Role:</label>
                <select id="role" name="role" required>
                    <option value="agent">Agent</option>
                    <option value="owner">Owner</option>
                    <option value="builder">Builder</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Register</button>
            </div>
        </form>
    </div>
    <div class="image-container">
        <img src="{{asset('images/signup/singup1-removebg-preview.png')}}" alt="Image Description" width="500px">
    </div>
</div>



</div>





@include('includes/footer')
