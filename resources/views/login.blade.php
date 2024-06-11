@include('includes/header')
<!-- Page Banner Start-->

<div class="center-wrapper">
    <div class="form-container">
        <h2>Registration Form</h2>
        @if (session('status'))
            <div style="color: green;">{{ session('status') }}</div>
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
        <form action="{{ route('login') }}" method="post">

            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>


            <div class="form-group">
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
    <div class="image-container">
        <img src="{{asset('images/signup/singup1-removebg-preview.png')}}" alt="Image Description" width="500px">
    </div>
</div>



</div>

<!-- Optional: Display OTP input field only after clicking the "Get OTP" button -->
<div id="otpContainer" style="display: none;">
    <label for="otp">OTP:</label>
    <input type="text" id="otp" name="otp" required>

    <button type="submit">Login</button>
</div>

<script>
    function sendOTP() {
        var email = document.getElementById('email').value;

        // Send AJAX request to your backend to generate and send OTP to the provided email
        // Once OTP is sent, display the OTP input field
        document.getElementById('otpContainer').style.display = 'block';
    }
</script>


<!-- Login end -->



@include('includes/footer')