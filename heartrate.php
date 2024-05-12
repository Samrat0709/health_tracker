<?php include "./components/head.php" ?>
<?php include "./components/script.php" ?>
<?php include "./components/style.php" ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>
    <?php include "./components/navbar.php" ?>

    <div class="container-fluid p-4 mt-4 bmi-bg position-relative">
        <h1 class="fw-bold text-uppercase text-center text-custom">Heart Rate Calculator</h1>
        <img src="./assets/BMI.svg" class="w-100 img-fluid" alt="">
        <div class="cal-box my-4 col-lg-12">

            <div class="box p-4 rounded gap-2">
                <div class="bg-transparent d-flex flex-column gap-2 w-100">
                    <label for="age">Enter your age:</label>
                    <input type="number" id="age" placeholder="Enter your age">

                </div>

                <div class="bg-transparent mt-2 d-flex flex-column gap-2 w-100">
                    <label for="restingHeartRate">Enter your resting heart rate:</label>
                    <input type="number" id="restingHeartRate" placeholder="Enter resting heart rate">

                </div>

            </div>
            <div class="box p-4 mt-2 rounded d-flex align-items-center justify-content-center gap-4">
                <button onclick="calculateHeartRate()" class="btn btn-info text-custom text-white">Calculate Heart Rate</button>
                <button onclick="window.location.reload();" class="btn btn-danger text-custom text-white">RESET</button>
            </div>

            <div class="box p-4 mt-2 rounded d-flex align-items-center justify-content-center gap-4">
                <p id="result" class="fs-6 text-white fw-bolder text-custom"></p>
            </div>
        </div>
    </div>

    <?php include './components/footer.php' ?>

    <script>
        function calculateHeartRate() {
            // Get values from input fields
            var age = document.getElementById("age").value;
            var restingHeartRate = document.getElementById("restingHeartRate").value;

            // Validate input
            if (!age || !restingHeartRate || isNaN(age) || isNaN(restingHeartRate)) {
                alert("Please enter valid values for age and resting heart rate.");
                return;
            }

            // Calculate maximum heart rate using the formula: 220 - age
            var maxHeartRate = 220 - parseInt(age);

            // Calculate target heart rate using the formula: (Max Heart Rate - Resting Heart Rate) * 0.6 + Resting Heart Rate
            var targetHeartRate = Math.round((maxHeartRate - restingHeartRate) * 0.6 + parseInt(restingHeartRate));

            // Display the result
            document.getElementById("result").innerHTML = "Your target heart rate is: " + targetHeartRate + " beats per minute.";
        }
    </script>
</body>

</html>
