<!DOCTYPE html>
<html lang="en">

<?php include('includes/head.php'); ?>

<body class="d-flex flex-column min-vh-100 bg-light">

    <?php include('includes/nav.php'); ?>

    <main class="flex-grow-1">
        <!-- Banner Section -->
        <section class="m-0 p-0">
            <img src="images/banner-crim.png" alt="Enrollment Banner"
                class="img-fluid w-100 shadow-sm"
                style="height: 300px; object-fit: cover; display: block;">
        </section>

        <!-- Enrollment Requirements Section -->
        <section class="py-5 bg-white">
            <div class="container">

                <!-- Title -->
                <div class="text-center mb-5">
                    <h2 class="fw-bold text-primary">Enrollment Requirements</h2>
                    <p class="text-muted">Ensure you have all the necessary documents ready before enrollment.</p>
                    <hr class="w-25 mx-auto border-primary">
                </div>

                <!-- Requirements List -->
                <div class="row justify-content-center">
                    <div class="col-lg-10">

                        <!-- For New Students -->
                        <div class="mb-5">
                            <h4 class="fw-bold text-primary">For New Students</h4>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">✔ Original Form 138 (Report Card)</li>
                                <li class="list-group-item">✔ Certificate of Good Moral Character</li>
                                <li class="list-group-item">✔ PSA/NSO Birth Certificate (Photocopy)</li>
                                <li class="list-group-item">✔ 2x2 and 1x1 ID Pictures (2 pcs each)</li>
                                <li class="list-group-item">✔ Medical Certificate (from school clinic or any licensed physician)</li>
                            </ul>
                        </div>

                        <!-- For Transferees -->
                        <div class="mb-5">
                            <h4 class="fw-bold text-primary">For Transferees</h4>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">✔ Honorable Dismissal / Transfer Credentials</li>
                                <li class="list-group-item">✔ Certified True Copy of Grades / Transcript of Records</li>
                                <li class="list-group-item">✔ PSA/NSO Birth Certificate (Photocopy)</li>
                                <li class="list-group-item">✔ 2x2 and 1x1 ID Pictures (2 pcs each)</li>
                                <li class="list-group-item">✔ Certificate of Good Moral Character</li>
                            </ul>
                        </div>

                        <!-- For Returnees -->
                        <div class="mb-4">
                            <h4 class="fw-bold text-primary">For Returnees</h4>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">✔ Clearance from the Registrar and Accounting Office</li>
                                <li class="list-group-item">✔ Latest Class Card or copy of grades</li>
                                <li class="list-group-item">✔ Re-admission Form (available at the Registrar's Office)</li>
                            </ul>
                        </div>

                        <!-- Enrollment Note -->
                        <div class="alert alert-warning text-center shadow-sm mt-5">
                            <strong>Reminder:</strong> All documents must be submitted in a long brown envelope labeled with your full name and intended course.
                        </div>

                    </div>
                </div>

            </div>
        </section>
    </main>

    <?php include('includes/footer.php'); ?>

</body>

</html>