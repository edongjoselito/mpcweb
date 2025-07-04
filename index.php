<!DOCTYPE html>
<html lang="en">

<?php include('includes/head.php'); ?>

<body>

    <?php include('includes/nav.php'); ?>

    <section class="institution-banner dark-theme">
        <div class="text-center py-4">
            <h2 class="school-title">MATI POLYTECHNIC COLLEGE, INC.</h2>
            <p class="school-subtitle">Don Mariano Marcos Avenue, Brgy. Sainz, Mati City, Davao Oriental</p>
        </div>
    </section>


    <section class="hero-section d-flex align-items-center justify-content-center text-center text-white" style="background: url('images/mpci.png') no-repeat center center/cover; height: 400px;">
        <div>
            <img src="images/logo-center.png" alt="College Logo" class="mb-3" style="width: 150px;">
            <h2 class="fw-bold">SINCE 1992</h2>
            <a href="#programs" class="btn btn-primary mt-3 px-4 py-2">See Programs</a>
        </div>
    </section>




    <section class="py-5 text-center text-white" style="background-color: #09096f;">
        <div class="container">
            <h4 class="fw-bold mb-4">
                Scholarship programs are being offered including <strong>CHED TES Grantees</strong> for qualified college students, and the <strong>Voucher Program from the Department of Education</strong> for all high school students.
            </h4>
            <a href="#scholarships" class="btn btn-primary rounded-pill px-4 py-2" style="background-color: #0094ff; border: none;">
                Learn more
            </a>
        </div>
    </section>


    <section id="programs" class="py-5 bg-light">
        <div class="container text-center">
            <h2 class="mb-5 fw-bold text-primary">COLLEGE PROGRAMS</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <img src="images/crim.png" alt="BS Criminology" class="img-fluid rounded shadow-sm">
                </div>
                <div class="col-md-6 col-lg-3">
                    <img src="images/business.png" alt="BS Business Admin" class="img-fluid rounded shadow-sm">
                </div>
                <div class="col-md-6 col-lg-3">
                    <img src="images/program-hm.png" alt="BS Hospitality Management" class="img-fluid rounded shadow-sm">
                </div>
                <div class="col-md-6 col-lg-3">
                    <img src="images/program-educ.png" alt="Bachelor of Education" class="img-fluid rounded shadow-sm">
                </div>
            </div>
        </div>
    </section>

    <section id="highschool" class="py-5">
        <div class="container text-center">
            <h2 class="mb-5 fw-bold text-primary">HIGH SCHOOL PROGRAMS</h2>
            <div class="row justify-content-center g-4">
                <div class="col-md-6 col-lg-4">
                    <img src="images/program-jhs.png" alt="Junior High School" class="img-fluid rounded shadow-sm">
                </div>
                <div class="col-md-6 col-lg-4">
                    <img src="images/program-shs.png" alt="Senior High School" class="img-fluid rounded shadow-sm">
                </div>
            </div>
            <h4 class="mt-5 text-primary fw-bold">Build your Future Career with us!</h4>
        </div>
    </section>

    <section id="announcements" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center fw-bold text-primary mb-4">ANNOUNCEMENTS</h2>
            <div id="announcementCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/ads.png" class="d-block w-100 rounded shadow-sm" alt="Announcement 1">
                    </div>
                    <div class="carousel-item">
                        <img src="images/ads.png" class="d-block w-100 rounded shadow-sm" alt="Announcement 2">
                    </div>
                    <div class="carousel-item">
                        <img src="images/ads.png" class="d-block w-100 rounded shadow-sm" alt="Announcement 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#announcementCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#announcementCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <?php include('includes/footer.php'); ?>
</body>

</html>