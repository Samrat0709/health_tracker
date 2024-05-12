<?php include "./components/head.php" ?>
<?php include "./components/script.php" ?>
<?php include "./components/style.php" ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>
    <?php include "./components/navbar.php" ?>

    

    <div class="container-fluid p-4 mt-4 bmi-bg position-relative">
        <h1 class="fw-bold text-uppercase text-center text-custom">Work in progress <br> Stay Tune to get upcoming deatails</h1>

    </div>

    <?php include './components/footer.php' ?>

    <script>
        function calculateBMI() {
            var weight = parseFloat(document.getElementById('weight').value);
            var height = parseFloat(document.getElementById('height').value);

            if (isNaN(weight) || isNaN(height) || weight <= 0 || height <= 0) {
                alert('Please enter valid values for weight and height.');
                return;
            }

            var bmi = calculateBMIValue(weight, height);
            var category = getBMICategory(bmi);

            document.getElementById('result').innerHTML = "Your BMI is " + bmi.toFixed(2) + " - " + category + ".";
        }

        function calculateBMIValue(weight, height) {
            // BMI formula: weight (kg) / (height (m) * height (m))
            return weight / ((height / 100) ** 2);
        }

        function getBMICategory(bmi) {
            if (bmi < 18.5) {
                return 'Underweight';
            } else if (bmi >= 18.5 && bmi < 25) {
                return 'Normal weight';
            } else if (bmi >= 25 && bmi < 30) {
                return 'Overweight';
            } else {
                return 'Obese';
            }
        }
    </script>

    <!-- Rest of your code -->

</body>

</html>