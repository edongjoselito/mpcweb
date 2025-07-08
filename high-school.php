<!DOCTYPE html>
<html lang="en">

<?php include('includes/head.php'); ?>

<body class="d-flex flex-column min-vh-100 bg-light">

    <?php include('includes/nav.php'); ?>

    <main class="flex-grow-1">
        <!-- Full-Width Banner Section -->
        <section class="m-0 p-0">
            <img src="images/high-school.png" alt="High School Program Banner"
                class="img-fluid w-100"
                style="height: 300px; object-fit: cover; display: block;">
        </section>

        <!-- Program Title Section -->
        <section class="pt-4 pb-2 text-center bg-info text-white">
            <div class="container">
                <h2 class="fw-bold text-white">High School Program Offerings</h2>
                <p class="lead text-white">Comprehensive education from Grade 7 to Grade 12 through specialized tracks and strands tailored to future goals.</p>
            </div>
        </section>

        <!-- Program Offerings -->
        <section class="py-5 bg-white">
            <div class="container">

                <!-- Senior High School Tracks -->
                <div class="mb-5">
                    <h4 class="fw-bold text-secondary mb-4">Senior High School Track</h4>
                    <div class="row g-4">
                        <!-- ABM -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold text-primary">ABM (Accountancy, Business and Management)</h5>
                                    <p class="card-text text-muted">
                                        Focuses on business principles, finance, marketing, and entrepreneurship.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- GAS -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold text-primary">GAS (General Academic Strand)</h5>
                                    <p class="card-text text-muted">
                                        A flexible strand covering various subjects from other strands.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- HUMSS -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold text-primary">HUMSS (Humanities and Social Sciences)</h5>
                                    <p class="card-text text-muted">
                                        Centers on social studies, politics, communication, and human behavior.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- TVL -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold text-primary">TVL (Technical-Vocational-Livelihood)</h5>
                                    <p class="card-text text-muted">
                                        Provides practical skills for employment or entrepreneurship in fields like electronics, hospitality, or agriculture.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- STEM -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold text-primary">STEM (Science, Technology, Engineering and Mathematics)</h5>
                                    <p class="card-text text-muted">
                                        Designed for students interested in science and innovation. Prepares for careers in engineering, health, and technical fields.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Junior High School -->
                <div>
                    <h4 class="fw-bold text-secondary mb-4">Junior High School</h4>
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-primary">Grade 7 - Grade 10</h5>
                            <p class="card-text text-muted">
                                Our Junior High School curriculum builds core competencies and values from early adolescence through foundational subjects in Math, Science, English, Filipino, Araling Panlipunan, and Technology & Livelihood Education (TLE).
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>

    <?php include('includes/footer.php'); ?>

</body>

</html>