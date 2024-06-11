@include('includes/header')

<div class="center-wrapper">
    <div class="form-container">
        <!-- <h2>Registration Form</h2> -->
        <form action="{{ route('verify.otp.login.new') }}" method="post">
            @csrf
            <div class="form-group">
                <input type="text" name="otp" placeholder="Enter OTP" required>
                <button type="submit">Verify OTP</button>
            </div>


            <!-- <div class="form-group">
                <button type="submit">Register</button>
            </div> -->
        </form>

        @if($errors->any())
            <div>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>
    <div class="image-container">
        <img src="{{asset('images/signup/singup1-removebg-preview.png')}}" alt="Image Description" width="500px">
    </div>
</div>
@include('includes/footer')