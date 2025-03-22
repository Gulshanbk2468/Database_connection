<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Admission Form - Galkot Secondary School</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f8f8;
            padding: 20px;
        }

        .container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            text-align: center;
        }

        h1 {
            font-size: 24px;
            text-transform: uppercase;
            margin-bottom: 5px;
        }

        h3 {
            font-size: 16px;
            font-weight: normal;
            margin-bottom: 15px;
            color: rgb(3, 3, 3);
        }

        p {
            font-size: 18px;
            font-weight: bold;
            color: rgb(253, 19, 19);
            margin-bottom: 5px;
        }

        hr {
            border: 2px solid black;  /* Thicker and more visible */
            width: 60%;  /* Adjust to match text width */
            margin: 5px auto 15px; /* Space it correctly */
        }

        form {
            text-align: left;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .radio-group {
            display: flex;
            gap: 10px;
            margin-top: 5px;
        }

        .radio-group input {
            width: auto;
        }

        .submit-btn {
            background: #007bff;
            color: white;
            padding: 10px;
            border: none;
            width: 100%;
            margin-top: 20px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
        }

        .submit-btn:hover {
            background: #0056b3;
        }

    </style>
</head>
<body>

    <div class="container">
        <h1>GALKOT SECONDARY SCHOOL</h1>
        <h3>Galkot Municipality-3, Hatiya, Baglung</h3>
        <div style="height: 15px;"></div> <!-- Space -->
        
        <p>Student Admission Form</p>
        <hr> <!-- Adjusted HR line, now smaller and placed right under the title -->

        <form action="get_and_insert.php" method="POST">
            <label for="firstname">First Name</label>
            <input type="text" id="firstname" name="firstname" required>

            <label for="lastname">Last Name</label>
            <input type="text" id="lastname" name="lastname" required>

            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" name="dob" required>

            <label>Class Applied For</label>
            <div class="radio-group">
                <input type="radio" id="classxi" name="class" value="XI" required>
                <label for="classxi">XI</label>
                <input type="radio" id="classxii" name="class" value="XII" required>
                <label for="classxii">XII</label>
            </div>

            <label for="address">Address</label>
            <input type="text" id="address" name="address" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" required>

            <button type="submit" class="submit-btn">Login</button>
        </form>
    </div>

</body>
</html>
