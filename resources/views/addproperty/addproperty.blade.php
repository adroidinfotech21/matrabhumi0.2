<!DOCTYPE html>
<html lang="hi">

<head>
    <meta charset="UTF-8">
    <title>Property Registration</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <h1>Property Registration</h1>

    <label for="possessionStatus">Possession Status:</label>
    <select id="possessionStatus" name="possessionStatus">
        <option value="">Select Possession Status</option>
    </select>

    <button id="registerButton">Register Property</button>

    <script>
        $(document).ready(function () {
            // Fetch data from DropDown API
            $.ajax({
                url: "https://nplled.smggreen.com/api/DropDown",
                method: "GET",
                dataType: "json",
                success: function (response) {
                    if (response.success) {
                        // Populate dropdown menu with data
                        var optionsHTML = "";
                        for (var i = 0; i < response.data.length; i++) {
                            var option = response.data[i];
                            optionsHTML += "<option value='" + option.ddlValue + "'>" + option.ddlText + "</option>";
                        }
                        $("#possessionStatus").html(optionsHTML);
                    } else {
                        alert("Error: " + response.message);
                    }
                },
                error: function (error) {
                    alert("Error: " + error.message);
                }
            });

            // Handle property registration on button click
            $("#registerButton").click(function () {
                var selectedValue = $("#possessionStatus").val();

                if (selectedValue !== "") {
                    // Send POST request to PropertyRegistration API
                    $.ajax({
                        url: "https://nplled.smggreen.com/api/PropertyRegistration",
                        method: "POST",
                        data: {
                            possessionStatus: selectedValue
                            // ... Other property details
                        },
                        dataType: "json",
                        success: function (response) {
                            if (response.success) {
                                alert("Property registered successfully!");
                                // Clear dropdown and reset form
                                $("#possessionStatus").val("");
                            } else {
                                alert("Error: " + response.message);
                            }
                        },
                        error: function (error) {
                            alert("Error: " + error.message);
                        }
                    });
                } else {
                    alert("Please select a possession status");
                }
            });
        });
    </script>
</body>

</html>