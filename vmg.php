<!DOCTYPE html>
<html lang="en">

<?php include('includes/head.php'); ?>

<body class="d-flex flex-column min-vh-100 bg-light">

    <?php include('includes/nav.php'); ?>

    <main class="flex-grow-1">
        <!-- Full-Width Banner -->
        <section class="m-0 p-0">
            <img src="images/banner-crim.png" alt="Vision, Mission and Goals Banner"
                class="img-fluid w-100 shadow-sm"
                style="height: 300px; object-fit: cover; display: block;">
        </section>

        <!-- Vision, Mission, Goals -->
        <section class="py-5 bg-white">
            <div class="container">

                <div class="text-center mb-5">
                    <h2 class="fw-bold text-primary">Vision, Mission and Goals</h2>
                    <p class="text-muted">Our guiding principles that define who we are and where we aim to be.</p>
                    <hr class="w-25 mx-auto border-primary">
                </div>

                <div class="row g-4 justify-content-center">
                    <!-- Vision Card -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body text-center">
                                <i class="bi bi-eye-fill fs-1 text-primary mb-3"></i>
                                <h4 class="fw-bold text-primary">Vision</h4>
                                <p class="text-muted">
                                    To be a leading institution recognized for academic excellence, innovative education, and community-centered development.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Mission Card -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body text-center">
                                <i class="bi bi-bullseye fs-1 text-primary mb-3"></i>
                                <h4 class="fw-bold text-primary">Mission</h4>
                                <p class="text-muted">
                                    To nurture and empower individuals through quality education, values formation, and a commitment to lifelong learning and service to society.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Goals Card -->
                    <div class="col-12">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body">
                                <h4 class="fw-bold text-primary text-center mb-4"><i class="bi bi-check2-square me-2"></i>Goals</h4>
                                <ul class="list-group list-group-flush px-3">
                                    <li class="list-group-item">✔ Promote holistic development and academic excellence.</li>
                                    <li class="list-group-item">✔ Provide inclusive and accessible learning opportunities.</li>
                                    <li class="list-group-item">✔ Foster ethical, responsible, and service-oriented individuals.</li>
                                    <li class="list-group-item">✔ Encourage innovation, research, and sustainability.</li>
                                    <li class="list-group-item">✔ Establish strong partnerships with communities and industries.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>

    <?php include('includes/footer.php'); ?>

</body>

</html>