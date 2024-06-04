@include('includes/header')

    <style>
        body {
   
}

.container {


    border-radius: 5px;

}

h2 {
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"], input[type="email"], input[type="password"] {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
}

button {
    background-color: #5cb85c;
    color: white;
    padding: 10px 15px;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #4cae4c;
}

#errorMessage {
    color: red;
    margin-top: 10px;
}

    </style>

    <div class="container">
        <h2>Registration Form</h2>
        <form id="registrationForm">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required>
            </div>
            <div class="form-group">
                <button type="submit">Register</button>
            </div>
        </form>
        <div id="errorMessage"></div>
    </div>
    <script src="scripts.js"></script>
    <script src="">document.getElementById('registrationForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    const errorMessage = document.getElementById('errorMessage');

    if (password !== confirmPassword) {
        errorMessage.textContent = 'Passwords do not match!';
        return;
    }

    // Perform additional validation if necessary
    // Submit the form data to the server or handle it as required

    errorMessage.textContent = 'Registration successful!';
    errorMessage.style.color = 'green';
});
</script>



@include('includes/footer')