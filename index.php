<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mati Polytechnic College</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/logo-banner.png" alt="Mati Polytechnic College Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>

                    <!-- Programs Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="programDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Programs
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="programDropdown">
                            <li><a class="dropdown-item" href="#criminology">BS in Criminology</a></li>
                            <li><a class="dropdown-item" href="#early-childhood">Early Childhood Education</a></li>
                            <li><a class="dropdown-item" href="#elementary">Elementary Education</a></li>
                            <li><a class="dropdown-item" href="#techvoc">Technical Vocational Teachers Education</a></li>
                            <li><a class="dropdown-item" href="#bsba">BS in Business Administration (MM/FM)</a></li>
                            <li><a class="dropdown-item" href="#hospitality">BS in Hospitality Management</a></li>
                            <li><a class="dropdown-item" href="#highschool">Complete High School Program (JHS & SHS)</a></li>
                            <li><a class="dropdown-item" href="#tesda">TESDA NCII/NCIII</a></li>
                        </ul>
                    </li>

                    <!-- About Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                            <li><a class="dropdown-item" href="#vmg">VMG</a></li>
                            <li><a class="dropdown-item" href="#history">History</a></li>
                            <li><a class="dropdown-item" href="#scholarships">Scholarships</a></li>
                            <li><a class="dropdown-item" href="#requirements">Enrollment Requirements</a></li>
                        </ul>
                    </li>

                    <!-- Login Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="loginDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Log-in
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="loginDropdown">
                            <li><a class="dropdown-item" href="https://mpc.srmsportal.com" target="_blank">SRMS</a></li>
                            <li><a class="dropdown-item" href="https://lms.mpci.edu.ph" target="_blank">LMS</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

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

    <footer class="text-white" style="background-color: #0094ff;">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-3">
                    <h6 class="fw-bold">Location</h6>
                    <p>
                        Don Mariano Marcos Avenue, Brgy. Sainz,<br>
                        Mati City, Davao Oriental<br>
                        Philippines<br>
                        8200
                    </p>
                </div>
                <div class="col-md-3">
                    <h6 class="fw-bold">Contact No.</h6>
                    <p>
                        (087) 388 4820<br>
                        +63997 825 1919
                    </p>
                </div>
                <div class="col-md-3">
                    <h6 class="fw-bold">Emails</h6>
                    <p>
                        mpci.edu.ph<br>
                        mpciiicto@gamil.com
                    </p>
                </div>
                <div class="col-md-3">
                    <h6 class="fw-bold">Social Media</h6>
                    <p>
                        Mati Polytechnic College, Inc. (MPCares) Facebook<br>
                        MPCI ICTO Facebook
                    </p>
                </div>
            </div>
            <div class="text-center pt-3">
                Mati Polytechnic College, Inc.<br>
                &copy;2025 All Rights Reserved
            </div>
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>