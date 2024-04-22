<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dextrous Adult and Children Care</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php include('navbar.php'); ?>


    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Dextrous Adult and Children Care</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active text-primary">Appointment</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->


    <!-- Book Appointment Start -->
    <div class="container-fluid appointment py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2">
                    <div class="section-title text-start">
                        <h4 class="sub-title pe-3 mb-0">Healthcare Solutions for Dextrous Adults and Children</h4>
                        <h1 class="display-4 mb-4">Quality Services Tailored for Dextrous Adults and Children</h1>
                        <p class="mb-4">At Dextrous Adult and Children Care, we are dedicated to providing high-quality healthcare solutions for both adults and children. Our services are tailored to meet the unique needs of individuals across all age groups, ensuring optimal health and well-being for our patients.</p>
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <div class="d-flex flex-column h-100">
                                    <div class="mb-4">
                                        <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i> Comprehensive Adult Care</h5>
                                        <p class="mb-0">We offer a wide range of comprehensive healthcare services for adults, including preventive care, chronic disease management, and specialized treatments tailored to individual needs.</p>
                                    </div>
                                    <div class="mb-4">
                                        <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i> Pediatric Care</h5>
                                        <p class="mb-0">Our pediatric care services are designed to promote the health and development of children from infancy through adolescence. From routine check-ups to specialized treatments, we prioritize the well-being of our youngest patients.</p>
                                    </div>
                                    <div class="text-start mb-4">
                                        <a href="#" class="btn btn-primary rounded-pill text-white py-3 px-5">Learn More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="video h-100">
                                    <img src="img/video-img.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="appointment-form rounded p-5">
                        <p class="fs-4 text-uppercase text-primary">Get In Touch</p>
                        <h1 class="display-5 mb-4">Book an Appointment</h1>
                        <form  method="post" action="appointment_validate.php" enctype="multipart/form-data">
                           <div class="row gy-3 gx-4">
                           <div class="col-xl-6">
                           <input type="text" class="form-control py-3 border-primary bg-transparent text-white" placeholder="First Name" name="first_name">
                        </div>
                        <div class="col-xl-6">
                       <input type="email" class="form-control py-3 border-primary bg-transparent text-white" placeholder="Email" name="email">
                       </div>
                      <div class="col-xl-6">
                       <input type="tel" class="form-control py-3 border-primary bg-transparent" placeholder="Phone" name="phone">
                        </div>
                     <div class="col-xl-6">
                     <select class="form-select py-3 border-primary bg-transparent" aria-label="Select Gender" name="gender">
                      <option selected disabled>Your Gender</option>
                    <option value="Male">Male</option>
                     <option value="Female">Female</option>
                    <option value="Others">Others</option>
                  </select>
                 </div>
        <div class="col-xl-6">
            <input type="date" class="form-control py-3 border-primary bg-transparent" name="appointment_date">
        </div>
        <div class="col-xl-6">
            <select class="form-select py-3 border-primary bg-transparent" aria-label="Select Department" name="department">
                <option selected disabled>Department</option>
                <option value="Physiotherapy">Physiotherapy</option>
                <option value="Pediatric Care">Pediatric Care</option>
                <option value="Comprehensive Adult Care">Comprehensive Adult Care</option>
            </select>
        </div>
        <div class="col-12">
            <textarea class="form-control border-primary bg-transparent text-white" name="comments" id="area-text" cols="30" rows="5" placeholder="Write Comments"></textarea>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary text-white w-100 py-3 px-5" name="submit">SUBMIT NOW</button>
        </div>
    </div>
</form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Book Appointment End -->


    <?php include('footer.php'); ?>
</body>

</html>
