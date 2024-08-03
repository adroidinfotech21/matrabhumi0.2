@include('includes/header')
<?php
$storedOtp = session()->get('otp');
$storedUserData = session()->get('verified_user_data');

if (isset($storedOtp) && isset($storedUserData)) {
    echo "OTP: " . $storedOtp . "<br>";
    echo "User Data: <pre>";
    print_r($storedUserData);
    echo "</pre>";
} else {
    echo "Session data not found!";
}?>
<div class="center-wrapper">
    <div class="form-container">
        <!-- <h2>Registration Form</h2> -->
        <form method="POST" action="{{ route('verify.otp') }}">
            @csrf
            <input type="number" name="otp" placeholder="Enter OTP" required>
            <button type="submit">Verify OTP</button>

            @if ($errors->any())
                <div style="color: red;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
    </div>
    <div class="image-container">
        <img src="{{asset('images/signup/singup1-removebg-preview.png')}}" alt="Image Description" width="500px">
    </div>
</div>



</div>



@include('includes/footer')
