<?php include "./components/head.php" ?>
<?php include "./components/script.php" ?>
<?php include "./components/style.php" ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>
    <?php include "./components/navbar.php" ?>

    <div class="container-fluid p-4 mt-4 bmi-bg position-relative">
        <h1 class="fw-bold text-uppercase text-center text-custom">Ideal Body Weight Calculator</h1>
        <img src="./assets/ideal-cal.svg" class="w-100 img-fluid" alt="">
        <div class="cal-box my-4 col-lg-12">

            <div class="box p-4 rounded gap-2">
                <div class="row">
                    <div class="bg-transparent d-flex flex-column gap-2 col-lg-6 mt-2">
                        <label for="msw" class="form-label fs-6 text-white fw-bolder text-custom">Measuring System</label>
                        <select id="msw" onchange="msystem();" class="form-control">
                            <option value="null">Select a Method...</option>
                            <option value="metric">Metric (Kgs, Cms)</option>
                            <option value="us">US (lbs, inches)</option>
                        </select>
                    </div>

                    <div class="bg-transparent d-flex flex-column gap-2 col-lg-6 mt-2">
                        <label for="sw" class="form-label fs-6 text-white fw-bolder text-custom">Gender</label>
                        <select id="sw" class="form-control">
                            <option value="null">Select Your Gender</option>
                            <option value="m">Male</option>
                            <option value="f">Female</option>
                        </select>
                    </div>

                    <div class="bg-transparent d-flex flex-column gap-2 col-lg-6 mt-2">
                        <label for="hw" class="form-label fs-6 text-white fw-bolder text-custom">Height (CM):</label>
                        <input id="hw" class="form-control">
                    </div>
                </div>
            </div>

            <div class="box p-4 mt-2 rounded d-flex align-items-center justify-content-center gap-4">
                <button type="button" onclick="bweight();" class="btn btn-info text-custom text-white">Calculate Ideal Body Weight</button>
                <button onclick="window.location.reload();" class="btn btn-danger text-custom text-white">RESET</button>
            </div>

            <div class="box p-4 mt-2 rounded d-flex align-items-center justify-content-center gap-4">
                <div>
                    <label for="ibw" class="form-label fs-6 text-white fw-bolder text-custom">Ideal Weight</label>
                    <input id="ibw" class="fs-6 text-dark fw-bolder text-custom form-control" readonly>
                </div>

                <!-- <div>
                    <label for="ibw1" class="form-label fs-6 text-white fw-bolder text-custom">Ideal Weight in US </label>
                    <input id="ibw1" class="fs-6 text-dark fw-bolder text-custom form-control" readonly>
                </div> -->

            </div>
        </div>
    </div>
    <?php include './components/footer.php' ?>
    <script>
        const $ = id => document.getElementById(id);

        const msystem = () => {
            if ($('msw').value === 'metric') {
                $('thw').innerHTML = ' (Cms)';
            } else {
                $('thw').innerHTML = ' (inches)';
            }
        };

        const bweight = () => {
            const ms = $('msw').value;
            const sex = $('sw').value;
            let height = $('hw').value;

            // Validate height input
            if (!height || height.length === 0) {
                $('ibw').value = 'Pl. enter data.';
                return;
            }

            // Convert height to a number and ensure it's positive
            height = Number(height);
            if (height <= 0) {
                $('ibw').value = 'Height must be a positive number.';
                return;
            }

            // Calculate ideal body weight
            let ibwValue = '';
            if (ms === 'metric') {
                if (sex === 'm') {
                    ibwValue = Math.round(56.2 + (height * 0.39 - 152.4 * 0.39) * 1.41) + ' Kgs';
                } else if (sex === 'f') {
                    ibwValue = Math.round(53.1 + (height * 0.39 - 152.4 * 0.39) * 1.36) + ' Kgs';
                }
            } else if (ms === 'us') {
                if (sex === 'm') {
                    ibwValue = Math.round(56.2 * 2.20462 + (height - 60) * 1.41 * 2.20462) + ' lbs';
                } else if (sex === 'f') {
                    ibwValue = Math.round(53.1 * 2.20462 + (height - 60) * 1.36 * 2.20462) + ' lbs';
                }
            }

            // Set the value of the ibw input
            $('ibw').value = ibwValue;

            // Calculate ideal body weight range
            let ibw1Value = '';
            if (ms === 'metric') {
                ibw1Value = Math.round(18.5 * (height * height / 10000)) + ' Kgs - ' + Math.round(25 * (height * height / 10000)) + ' Kgs';
            } else if (ms === 'us') {
                ibw1Value = Math.round(18.5 * (height * height) / 703) + ' lbs - ' + Math.round(25 * (height * height) / 703) + ' lbs';
            }

            // Set the value of the ibw1 input
            $('ibw1').value = ibw1Value;
        };
    </script>
</body>

</html>
