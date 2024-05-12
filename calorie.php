<?php include "./components/head.php" ?>
<?php include "./components/script.php" ?>
<?php include "./components/style.php" ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>
    <?php include "./components/navbar.php" ?>

    <div class="container-fluid p-4 mt-4 bmi-bg position-relative">
        <h1 class="fw-bold text-uppercase text-center text-custom">Calorie Intake</h1>
        <img src="./assets/cal-cal.svg" class="w-100 img-fluid" alt="">
        <div class="cal-box my-4 col-lg-12">

            <div class="box p-4 rounded  gap-2">
                <form id="calorieForm">
                    <div class="row">
                        <div class="bg-transparent d-flex flex-column gap-2 col-lg-6 mt-2">
                            <label for="gender" class="form-label fs-6 text-white fw-bolder text-custom">Gender :</label>
                            <select id="gender" class="form-control" name="gender" required>
                                <option value="null"> Select Your Gender...</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>

                        <div class="bg-transparent d-flex flex-column gap-2 col-lg-6 mt-2">
                            <label for="age" class="form-label fs-6 text-white fw-bolder text-custom">Age (years):</label>
                            <input type="number" id="age" class="form-control" name="age" min="1" required>
                        </div>

                        <div class="bg-transparent d-flex flex-column gap-2 col-lg-6 mt-2">
                            <label for="weight" class="form-label fs-6 text-white fw-bolder text-custom">Weight (kg):</label>
                            <input type="number" id="weight" class="form-control" name="weight" min="1" required>
                        </div>


                        <div class="bg-transparent d-flex flex-column gap-2 col-lg-6 mt-2">
                            <label for="height" class="form-label fs-6 text-white fw-bolder text-custom">Height (cm):</label>
                            <input type="number" id="height" class="form-control" name="height" min="1" required>
                        </div>

                        <div class="bg-transparent d-flex flex-column gap-2 w-100">
                            <label for="activityLevel" class="form-label fs-6 text-white fw-bolder text-custom">Activity Level:</label>
                            <select id="activityLevel" name="activityLevel" class="form-control" required>
                                <option value="1.2">Sedentary (little or no exercise)</option>
                                <option value="1.375">Lightly Active (light exercise/sports 1-3 days/week)</option>
                                <option value="1.55">Moderately Active (moderate exercise/sports 3-5 days/week)</option>
                                <option value="1.725">Very Active (hard exercise/sports 6-7 days a week)</option>
                                <option value="1.9">Extra Active (very hard exercise/sports & physical job or 2x training)</option>
                            </select>

                        </div>




                    </div>
 
                    <div class="box p-4 mt-2 rounded d-flex align-items-center justify-content-center gap-4">
                        <button type="button" onclick="calculateCalories()" class="btn btn-info text-custom text-white">Calculate Calories</button>
                        <button onclick="window.location.reload();" class="btn btn-danger text-custom text-white">RESET</button>

                    </div>
                    <div class="box p-4 mt-2 rounded d-flex align-items-center justify-content-center gap-4">
                        <p id="result" class="fs-6 text-white fw-bolder text-custom"></p>
                    </div>
            </div>






        </div>
        <?php include './components/footer.php' ?>
        <script>
            function calculateCalories() {
                // Get input values
                const age = parseInt(document.getElementById('age').value);
                const gender = document.getElementById('gender').value;
                const weight = parseFloat(document.getElementById('weight').value);
                const height = parseFloat(document.getElementById('height').value);
                const activityLevel = parseFloat(document.getElementById('activityLevel').value);

                console.log("Input Values:", age, gender, weight, height, activityLevel);

                // Validate input
                if (isNaN(age) || isNaN(weight) || isNaN(height)) {
                    alert("Please enter valid values for Age, Weight, and Height.");
                    return;
                }

                // Calculate BMR (Basal Metabolic Rate)
                let bmr = 0;

                if (gender === 'male') {
                    bmr = 88.362 + (13.397 * weight) + (4.799 * height) - (5.677 * age);
                } else if (gender === 'female') {
                    bmr = 447.593 + (9.247 * weight) + (3.098 * height) - (4.330 * age);
                }

                console.log("BMR:", bmr);

                // Calculate Total Daily Calories
                const tdee = bmr * activityLevel;

                console.log("Total Daily Calories:", tdee);

                // Display the result
                const resultElement = document.getElementById('result');
                resultElement.innerHTML = "Your Total Daily Calories: " + Math.round(tdee) + " calories per day.";
            }
        </script>


        <!-- Rest of your code -->

</body>

</html>