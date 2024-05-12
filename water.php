<?php include "./components/head.php" ?>
<?php include "./components/script.php" ?>
<?php include "./components/style.php" ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>
    <?php include "./components/navbar.php" ?>

    <div class="container-fluid p-4 mt-4 bmi-bg position-relative">
        <h1 class="fw-bold text-uppercase text-center text-custom">Water Intake</h1>
        <img src="./assets/water-cal.svg" class="w-100 img-fluid" alt="">
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
                            <label for="weight" class="form-label fs-6 text-white fw-bolder text-custom">Weight (kg):</label>
                            <input type="number" id="weight" class="form-control" name="weight" placeholder="Enter Your Weight " min="1" required>
                        </div>

                        <div class="bg-transparent d-flex flex-column gap-2 col-lg-6 mt-2">
                            <label for="activityLevel" class="form-label fs-6 text-white fw-bolder text-custom">Activity Level:</label>
                            <select id="activityLevel" name="activityLevel" class="form-control" required>
                                <option value="null"> Select Your Activity Level...</option>
                                <option value="sedentary">Sedentary LifeStyle ( ~10 min )</option>
                                <option value="lightlyActive">
                                    Lightly Active LifeStyle ( ~30 min )
                                </option>
                                <option value="moderatelyActive">
                                    Moderately Active LifeStyle ( ~50 min )
                                </option>
                                <option value="veryActive">
                                    Very Active LifeStyle ( >90 min )
                                </option>

                            </select>

                        </div>

                        <div class="bg-transparent d-flex flex-column gap-2 col-lg-6 mt-2">
                            <label for="climate" class="form-label fs-6 text-white fw-bolder text-custom">Climate:</label>

                            <select id="climate" class="form-control" name="climate" required>
                                <option value="null"> Select Your Climate...</option>
                                <option value="veryCold">Too Cold</option>
                                <option value="cold">Cold</option>
                                <option value="hot">Hot</option>
                                <option value="veryHot">Too Hot</option>
                            </select>


                        </div>











                    </div>

                    <div class="box p-4 mt-2 rounded d-flex align-items-center justify-content-center gap-4">
                        <button type="button" onclick="calculateWater()" class="btn btn-info text-custom text-white">Calculate Calories</button>
                        <button onclick="window.location.reload();" class="btn btn-danger text-custom text-white">RESET</button>

                    </div>
                    <div class="box p-4 mt-2 rounded d-flex align-items-center justify-content-center gap-4">
                        <p id="result" class="fs-6 text-white fw-bolder text-custom"></p>
                    </div>
            </div>






        </div>
        <?php include './components/footer.php' ?>
        <script>
            function calculateWater() {
                // Get input values
                const gender = document.querySelector('select[name="gender"]').value;
                const weight = parseFloat(document.getElementById("weight").value);
                const activityLevel = document.querySelector(
                    'select[name="activityLevel"]'
                ).value;
                const climate = document.querySelector('select[name="climate"]').value;

                // Validate input
                if (isNaN(weight) || weight <= 0) {
                    alert("Please enter valid values for Weight");
                    return;
                }

                // Calculate water Requirement
                let waterReq = weight * 0.033;

                if (gender === "male") {
                    waterReq += 0.25;
                } else if (gender === "female") {
                    waterReq += 0.15;
                }
                // activity factor
                if (activityLevel === "sedentary") {
                    waterReq += 0.1;
                } else if (activityLevel === "lightlyActive") {
                    waterReq += 0.2;
                } else if (activityLevel === "moderatelyActive") {
                    waterReq += 0.3;
                } else if (activityLevel === "veryActive") {
                    waterReq += 0.6;
                }
                // climate factor
                if (climate === "veryCold") {
                    waterReq += 0.1;
                } else if (climate === "cold") {
                    waterReq += 0.2;
                } else if (climate === "hot") {
                    waterReq += 0.4;
                } else if (climate === "veryHot") {
                    waterReq += 0.6;
                }

                // Display the result
                const resultElement = document.getElementById("result");
                resultElement.innerHTML = `Your Total Water Requirement is: ${waterReq.toFixed(
    2
  )} litres per day`;
            }

            // Event listener for the button click
            document
                .getElementById("waterform")
                .addEventListener("submit", function(event) {
                    // Prevent the default form submission behavior
                    event.preventDefault();
                    calculateWater();
                });
        </script>


        <!-- Rest of your code -->

</body>

</html>