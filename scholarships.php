<!DOCTYPE html>
<html lang="en">

<?php include('includes/head.php'); ?>

<body class="d-flex flex-column min-vh-100 bg-light">

    <?php include('includes/nav.php'); ?>

    <main class="flex-grow-1">
        <!-- Banner Section -->
        <section class="m-0 p-0">
            <img src="images/banner-crim.png" alt="Scholarship Banner"
                class="img-fluid w-100 shadow-sm"
                style="height: 300px; object-fit: cover; display: block;">
        </section>

        <!-- Scholarship Section -->
        <section class="py-5 bg-white">
            <div class="container">

                <!-- Title -->
                <div class="text-center mb-5">
                    <h2 class="fw-bold text-primary">Scholarship Programs</h2>
                    <p class="text-muted">Empowering students through financial support and academic excellence.</p>
                    <hr class="w-25 mx-auto border-primary">
                </div>

                <!-- Scholarship Cards -->
                <div class="row g-4">
                    <!-- Academic Excellence Scholarship -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-primary">Academic Excellence Scholarship</h5>
                                <p class="card-text text-muted">
                                    Awarded to students who have demonstrated outstanding academic performance in the previous school year. Covers full or partial tuition.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Financial Assistance Grant -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-primary">Financial Assistance Grant</h5>
                                <p class="card-text text-muted">
                                    Offered to students from low-income families. Includes tuition discounts and learning material support based on family income bracket.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Leadership & Service Scholarship -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-primary">Leadership & Service Scholarship</h5>
                                <p class="card-text text-muted">
                                    Designed for student leaders and volunteers who actively participate in community outreach and school programs.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Application Info -->
                <div class="row mt-5">
                    <div class="col-lg-8 mx-auto">
                        <div class="alert alert-info text-center shadow-sm">
                            <strong>Note:</strong> Scholarship applications open every start of the semester. For requirements and deadlines, please visit the Guidance and Scholarship Office.
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>

    <?php include('includes/footer.php'); ?>

</body>

</html>