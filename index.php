<?php include "./components/head.php" ?>
<?php include "./components/script.php" ?>
<?php include "./components/style.php" ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>
    <?php include "./components/navbar.php" ?>

    <div class="container-fluid p-4 mt-4">
        <div class="row gap-lg-0 gap-3">
            <div class="col-lg-4">
                <img src="./assets/A.svg" class="w-100" alt="">
            </div>
            <div class="col-lg-4">
                <img src="./assets/B.svg" class="w-100" alt="">
            </div>
            <div class="col-lg-4">
                <img src="./assets/C.svg" class="w-100" alt="">
            </div>
        </div>
    </div>

    <div class="conatainer-fluid p-4 my-4">
        <div class="row">
            <div class="col-lg-12 p-4 d-flex align-items-center justify-content-start">
                <p class="text-white ps-4 fs-1 fw-bold text-custom ">Get Personal <span class="text-custom">Insights!</span> <br>
                    <span class="text-custom">Let's achieve</span> the fitness <span class="fw-bold">Goal</span><br>
                    Get Started <span class="text-custom">Today!</span>
                </p>
            </div>

        </div>

    </div>

    <div class="container-fluid p-4 my-4">
        <div class="row">
            <div class="col-lg-4">
                <div class="card doc-card d-flex flex-column gap-4 p-4 border border-1 border-white">
                    <div class="box rounded p-3">
                        <p class="fs-6 text-white m-0 text-custom">Enter name, age, gender, height,
                            weight, and activity level for tailored tips.</p>

                    </div>
                    <div class="box rounded p-3">
                        <p class="fs-6 text-white m-0 text-custom">Enter name, age, gender, height,
                            weight, and activity level for tailored tips.</p>

                    </div>
                    <div class="box rounded p-3">
                        <p class="fs-6 text-white m-0 text-custom">Enter name, age, gender, height,
                            weight, and activity level for tailored tips.</p>

                    </div>
                    <div class="box rounded p-3">
                        <p class="fs-6 text-white m-0 text-custom">Enter name, age, gender, height,
                            weight, and activity level for tailored tips.</p>

                    </div>
                    <div class="box rounded p-3">
                        <p class="fs-6 text-white m-0 text-custom">Enter name, age, gender, height,
                            weight, and activity level for tailored tips.</p>

                    </div>

                </div>
            </div>
            <div class="col-lg-8 m-lg-0 mt-4">
                <div class="chat-box overflow-hidden rounded">
                    <div class="input-box  ">
                        <form id="apiForm">
                            <div class="container py-4 ">
                                <label for="input" class="form-label text-custom fs-5 text-white">Start conversation!</label>
                                <div class="form-group  d-flex flex justify-content-around">

                                    <input type="text" name="input" id="input" class="form-control bg-transparent text-white text-custom" placeholder="Enter Your Doubt....">
                                    <button type="submit" class="rounded btn" style="width: fit-content;"><i class="fa-brands fa-telegram fs-4 text-custom"></i></button>
                                </div>

                            </div>


                        </form>
                    </div>

                    <div class="response-box p-4">
                        <div class="loader" id="loader"></div>
                        <p id="response" class="text-dark text-custom fs-6"></p>
                        <button id="seeMoreBtn">See More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-4 my-4" id="calculator">
        <h1 class="fw-bold text-uppercase text-center text-custom">FITNESS <span>CALCULATOR</span> </h1>
        <div class="row d-flex justify-content-center gap-4 m-4">

            <div class="calculator-box card  col-lg-3">
                <img src="./assets/bmi_img.svg" class="" height="300px" alt="">
                <div class="calculator-layer">
                    <h4 class="text-custom text-dark fw-bold fs-3">BMI Calculator</h4>
                    <a href="bmi.php" class="text-dark rounded-circle bg-white p-4"><i class="fa-solid fa-share-from-square fs-4 "></i></a>

                </div>
            </div>

            <div class="calculator-box card  col-lg-3">
                <img src="./assets/sleep.svg" class="" height="300px" alt="">
                <div class="calculator-layer">
                    <h4 class="text-custom text-dark fw-bold fs-3">Sleep Tracker</h4>
                    <a href="sleep.php" class="text-dark rounded-circle bg-white p-4"><i class="fa-solid fa-share-from-square fs-4 "></i></a>

                </div>
            </div>

            <div class="calculator-box card  col-lg-3">
                <img src="./assets/weight.svg" class="" height="300px" alt="">
                <div class="calculator-layer">
                    <h4 class="text-custom text-dark fw-bold fs-3">Calorie Intake</h4>
                    <a href="calorie.php" class="text-dark rounded-circle bg-white p-4"><i class="fa-solid fa-share-from-square fs-4 "></i></a>

                </div>
            </div>

            <!-- <div class="calculator-box card  col-lg-3">
                <img src="./assets/B.svg" class="" height="300px" alt="">
                <div class="calculator-layer">
                    <h4 class="text-custom text-dark fw-bold fs-3">Calculate Heart Rate</h4>
                    <a href="heartrate.php" class="text-dark rounded-circle bg-white p-4"><i class="fa-solid fa-share-from-square fs-4 "></i></a>

                </div>
            </div> -->

            <div class="calculator-box card  col-lg-3">
                <img src="./assets/water_intake.svg" class="" height="300px" alt="">
                <div class="calculator-layer">
                    <h4 class="text-custom text-dark fw-bold fs-3">Water Intake</h4>
                    <a href="water.php" class="text-dark rounded-circle bg-white p-4"><i class="fa-solid fa-share-from-square fs-4 "></i></a>

                </div>
            </div>

            <div class="calculator-box card  col-lg-3">
                <img src="./assets/idealweight.svg" class="" height="300px" alt="">
                <div class="calculator-layer">
                    <h4 class="text-custom text-dark fw-bold fs-3">Ideal Weight</h4>
                    <a href="weight.php" class="text-dark rounded-circle bg-white p-4"><i class="fa-solid fa-share-from-square fs-4 "></i></a>

                </div>
            </div>

           

        </div>
    </div>


    <?php include './components/footer.php' ?>




    <script>
        document.getElementById("apiForm").addEventListener("submit", function(event) {
            event.preventDefault();
            const formData = new FormData(event.target);

            // Show loader
            document.getElementById("loader").style.display = "block";

            fetch('https://llamastudio.dev/api/cluwrtzhu0001l8097y2ric5z', {
                    method: 'POST',
                    body: JSON.stringify(Object.fromEntries(formData)),
                    headers: {
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    document.getElementById("response").innerText = data;
                    // Hide loader after response is received
                    document.getElementById("loader").style.display = "none";
                })
                .catch(error => {
                    console.error('Error:', error);
                    // Hide loader on error
                    document.getElementById("loader").style.display = "none";
                });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const responseElement = document.getElementById("response");
            const seeMoreButton = document.getElementById("seeMoreBtn");

            const originalText = responseElement.textContent;
            const wordsToShow = 300;
            let showFullText = false;

            function toggleTextVisibility() {
                if (showFullText) {
                    responseElement.textContent = originalText;
                    seeMoreButton.textContent = "See Less";
                } else {
                    const limitedText = originalText.split(" ").slice(0, wordsToShow).join(" ");
                    responseElement.textContent = limitedText + " ...";
                    seeMoreButton.textContent = "See More";
                }
                showFullText = !showFullText;
            }

            toggleTextVisibility(); // Initially show limited text
            seeMoreButton.style.display = "inline-block";
            seeMoreButton.addEventListener("click", toggleTextVisibility);
        });
    </script>

</body>

</html>