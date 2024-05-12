<?php include "./components/head.php" ?>
<?php include "./components/script.php" ?>
<?php include "./components/style.php" ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>
    <?php include "./components/navbar.php" ?>

    <div class="container-fluid p-4 mt-4 bmi-bg position-relative">
        <h1 class="fw-bold text-uppercase text-center text-custom">Sleep Calculator</h1>
        <img src="./assets/sleep-cal.svg" class="w-100 img-fluid" alt="">
        <div class="cal-box my-4 col-lg-12">

            <div class="box p-4 rounded  gap-2">
                <div class=" bg-transparent d-flex flex-column gap-2 w-100">
                    <label for="age" class="form-label fs-6 text-white fw-bolder text-custom">Enter your age:</label>
                    <input type="number" id="age" class="form-control" placeholder="Enter your age">

                </div>


            </div>
            <div class="box p-4 mt-2 rounded d-flex align-items-center justify-content-center gap-4">
                <button onclick="calculateSleepDuration()" class="btn btn-info text-custom text-white"><b>Calculate</b></button>
                <button onclick= "window.location.reload();" class="btn btn-danger text-custom text-white">RESET</button>

            </div>

            <div class="box p-4 mt-2 rounded d-flex align-items-center justify-content-center gap-4">
                <p id="result" class="fs-6 text-white fw-bolder text-custom"></p>
            </div>
        </div>






    </div>
    <?php include './components/footer.php' ?>

    <script>
    function calculateSleepDuration() {
        var age = parseInt(document.getElementById('age').value);

        if (isNaN(age) || age < 0) {
            alert('Please enter a valid age.');
            return;
        }

        var sleepDuration = calculateRecommendedSleepDuration(age);

        document.getElementById('result').innerHTML = "Recommended sleep duration for a " + age + "-year-old: " + sleepDuration + " hours.";
    }

    function calculateRecommendedSleepDuration(age) {
        if (age >= 18 && age <= 64) {
            return '7-9';
        } else if (age >= 65) {
            return '7-8';
        } 
        else if (age >= 10 && age <= 17) {
            return '7-10';
        } else {
            return 'Varies based on age group. Check guidelines for specific recommendations.';
        }
    }
</script>


    <!-- Rest of your code -->

</body>

</html>