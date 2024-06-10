
@if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


<form method="POST" action="{{ route('verify.otp') }}">
    @csrf
    <input type="hidden" name="email" value="{{ session('email') }}">
    <label for="otp">OTP:</label>
    <input type="text" id="otp" name="otp" required>
    <button type="submit">Verify OTP</button>
</form>
