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
        <h2>Registration Form</h2>
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="number">Phone Number:</label>
                <input type="tel" id="number" name="phonenumber" required>
            </div>
            <div class="form-group">
                <label for="role">Role:</label>
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
