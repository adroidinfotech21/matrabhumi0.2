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
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <label>Name:</label>
        <input type="text"  name="name"><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="password">number:</label>
        <input type="text" id="text" name="phonenumber" required><br>
        <button type="submit">Register</button>
    </form>







@include('includes/footer')
