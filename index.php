<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Door Lock System</title>
    <style>
        body {
            background-color: #3498db;
            color: #fff;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        #doorLockForm {
            background-color: #2c3e50;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            padding: 10px;
            margin-bottom: 20px;
            width: 100%;
            box-sizing: border-box;
        }

        button {
            background-color: #1abc9c;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #16a085;
        }
    </style>
    <script>
        function submitForm() {
            // Get the PIN entered by the user
            var pin = document.getElementById('pin').value;

            // Set the PIN value in a hidden input field
            document.getElementById('pinHidden').value = pin;

            // Submit the form
            document.getElementById('doorLockForm').submit();
        }
    </script>
</head>
<body style="display:block;"><br>
    <form id="doorLockForm" action="api.php" method="post" style="margin:auto; max-width:400px;">
        <h1>Door Unlock System</h1>
        <label for="pin">Enter PIN:</label>
        <input type="number" id="pin" name="pin" required>
        
        <!-- Hidden input to store the PIN value -->
        <input type="hidden" id="pinHidden" name="pinHidden">

        <button type="button" onclick="submitForm()">Unlock</button>
    </form>
    <br>
    <form id="doorLockForm" action="api.php" method="post" style="margin:auto; max-width:400px;">
        <h1>Door Lock System</h1>
        <label for="lockpin">Enter PIN:</label>
        <input type="number" id="lockpin" name="lockpin" required>
        
        <!-- Hidden input to store the PIN value -->
        <input type="hidden" id="pinHidden" name="pinHidden">

        <button type="button" onclick="submitForm()">Lock</button>
    </form>
</body>
</html>
