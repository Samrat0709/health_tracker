<?php include "./components/head.php" ?>
<?php include "./components/script.php" ?>
<?php include "./components/style.php" ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>
    <?php include "./components/navbar.php" ?>

    <div class="container-fluid p-4 mt-4 bmi-bg position-relative">
    <h1 class="fw-bold text-uppercase text-center text-custom">bmi Calculator</h1>
        <img src="./assets/bmi-cal.svg" class="w-100 img-fluid" alt="">
        <div class="cal-box my-4 col-lg-12" >
            
                <div class="box p-4 rounded  gap-2" >
                    <div class=" bg-transparent d-flex flex-column gap-2 w-100">
                        <label for="weight" class="form-label fs-6 text-white fw-bolder text-custom">Enter your weight (kg):</label>
                        <input type="number" id="weight" class="form-control" placeholder="Enter your weight in kilograms">
                    </div>

                    <div class=" bg-transparent mt-2 d-flex flex-column gap-2 w-100">
                        <label for="height" class="form-label fs-6 text-white fw-bolder text-custom">Enter your height (cm):</label>
                        <input type="number" id="height"class="form-control" placeholder="Enter your height in centimeters">
                    </div>

                </div>
                <div class="box p-4 mt-2 rounded d-flex align-items-center justify-content-center gap-4">
                    <button onclick="calculateBMI()" class="btn btn-info text-custom text-white">Calculate BMI</button>
                    <button onclick="window.location.reload();" class="btn btn-danger text-custom text-white">RESET</button>
                </div>
            
            <div class="box p-4 mt-2 rounded d-flex align-items-center justify-content-center gap-4">
                <p id="result" class="fs-6 text-white fw-bolder text-custom"></p>
            </div>
        </div>






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