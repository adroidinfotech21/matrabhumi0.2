@extends('layouts.master')

@section('title')
dashbord matrabhumi
@endsection
@section('content')
<head>
    <style>
    /* ad-registration-form-styles.css */

.form-header {
    background: #4A6D67; 
    color: #fff;
    text-align: center;
    padding: 20px 0;
}

.form-header h1 {
    margin: 0;
    font-size: 2rem;
}

.form-container {
    display: flex;
    justify-content: center;
    margin: 20px;
    padding: 20px;
    background: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 800px;
    border-radius: 8px;
}

.form-section {
    flex: 1;
}

.form-intro {
    background: #4A6D67;
    padding: 15px;
    border-radius: 8px;
    margin-bottom: 20px;
    text-align: center;
}

.form-intro p {
    margin: 0;
    font-size: 1rem;
    color: #fff;
}

.ad-registration-form {
    display: flex;
    flex-direction: column;
    text-align: left;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #4A6D67; 
}

.form-group input[type="text"], 
.form-group input[type="number"],
.form-group select, 
.form-group input[type="file"] {
    padding: 10px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 1rem;
    width: 40%; 
}

.form-group input[type="text"]:focus,
.form-group input[type="number"]:focus,
.form-group select:focus,
.form-group input[type="file"]:focus {
    border-color: #4A6D67; /* Teal green */
}

.radio-group, .checkbox-group {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    padding-top: 8px;
}

.radio-group label, .checkbox-group label {
    display: flex;
    align-items: center;
    background: #4A6D67; 
    padding: 5px 10px;
    border-radius: 4px;
    cursor: pointer;
    color: #fff; 
}

.radio-group label:hover, .checkbox-group label:hover {
    background: #F88017; 
}

.radio-group input[type="radio"], .checkbox-group input[type="checkbox"] {
    margin-right: 5px;
}

.form-group button {
    width: 100%;
    padding: 12px;
    background: #4A6D67; 
    color: #fff;
    border: none;
    border-radius: 4px;
    font-size: 1rem;
    cursor: pointer;
    transition: background 0.3s ease;
}

.form-group button:hover {
    background: #F88017; /* Vibrant orange */
}

.form-footer {
    text-align: center;
    padding: 20px;
    background: #4A6D67; /* Teal green */
    color: #fff;
}

.form-footer p {
    margin: 0;
}

@media (max-width: 768px) {
    .form-container {
        flex-direction: column;
    }

    .form-header h1 {
        font-size: 1.5rem;
    }
}

    </style>
    <title>Advertisement Registration Form | Matrabhoomi</title>
</head>
<body>
    <header class="form-header">
        <h1>Advertisement Registration Form</h1>
    </header>
    <main class="form-container">
        <section class="form-section">
            <div class="form-intro">
                <p>Welcome to our property advertisement block 8 platform. Please fill out the form to list your property with us.</p>
            </div>
            <form class="ad-registration-form">
                <div class="form-group">
                    <label for="propertyName">Name of the Property:</label>
                    <input type="text" id="propertyName" name="propertyName" required>
                </div>
                <div class="form-group">
                    <label for="city">City:</label>
                    <input type="text" id="city" name="city" required>
                </div>
                <div class="form-group">
                    <label for="budget">Budget:</label>
                    <input type="number" id="budget" name="budget" required>
                </div>
                <div class="form-group">
                    <label for="typeOfHouse">Type of House:</label>
                    <select id="typeOfHouse" name="typeOfHouse" required>
                        <option value="apartment">Apartment</option>
                        <option value="bungalow">Bungalow</option>
                        <option value="duplex">Duplex</option>
                        <option value="villa">Villa</option>
                        <option value="studio">Studio</option>
                        <option value="penthouse">Penthouse</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Number of Rooms:</label>
                    <div class="radio-group">
                        <label><input type="radio" name="numberOfRooms" value="1"> 1</label>
                        <label><input type="radio" name="numberOfRooms" value="2"> 2</label>
                        <label><input type="radio" name="numberOfRooms" value="3"> 3</label>
                        <label><input type="radio" name="numberOfRooms" value="4"> 4</label>
                        <label><input type="radio" name="numberOfRooms" value="5"> 5</label>
                        <label><input type="radio" name="numberOfRooms" value="6"> 6</label>
                        <label><input type="radio" name="numberOfRooms" value="7"> 7+</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="possessionDate">Possession:</label>
                    <select id="possessionDate" name="possessionDate" required>
                        <option value="20days">Within 20 days</option>
                        <option value="1month">Within 1 month</option>
                        <option value="3months">Within 3 months</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="yearOfProperty">Year of Property:</label>
                    <input type="number" id="yearOfProperty" name="yearOfProperty" min="1800" max="2024" required>
                </div>
                <div class="form-group">
                    <label>Amenities:</label>
                    <div class="checkbox-group">
                        <label><input type="checkbox" name="amenities" value="school"> Near School</label>
                        <label><input type="checkbox" name="amenities" value="railway"> Near Railway Station</label>
                        <label><input type="checkbox" name="amenities" value="gym"> Gym</label>
                        <label><input type="checkbox" name="amenities" value="pool"> Swimming Pool</label>
                        <label><input type="checkbox" name="amenities" value="park"> Park</label>
                        <label><input type="checkbox" name="amenities" value="security"> Security</label>
                        <label><input type="checkbox" name="amenities" value="lift"> Lift</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="photos">Upload Photos:</label>
                    <input type="file" id="photos" name="photos" accept="image/*" multiple onchange="limitFiles(this, 4)">
                    <small>You can upload up to 4 photos.</small>
                </div>
                <div class="form-group">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </section>
    </main>
    <footer class="form-footer">
        <p>&copy; 2024 [Matrabhoomi]. All rights reserved.</p>
    </footer>
    <script>
        function limitFiles(input, maxFiles) {
            if (input.files.length > maxFiles) {
                alert(`You can upload a maximum of ${maxFiles} photos.`);
                input.value = '';
            }
        }
    </script>
</body>
</html>

@endsection

@section('scripts')

@endsection
