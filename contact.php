<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Elderly and Children Care - Contact Us</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
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
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h3>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.hphp">Home</a></li>
                <li class="breadcrumb-item active text-primary">Contact</li>
            </ol>    
        </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style mb-4">
                    <h4 class="sub-title text-white px-3 mb-0">Contact Us</h4>
                </div>
                <p class="mb-0 text-black-50">We are here to assist you with any inquiries related to elderly and children care. Feel free to reach out to us using the form below.</p>
            </div>
            <div class="row g-4 align-items-center">
                <div class="col-lg-5 col-xl-5 contact-form wow fadeInLeft" data-wow-delay="0.1s">
                    <h2 class="display-5 text-white mb-2">Get in Touch</h2>
                    <p class="mb-4 text-white">Use the form below to send us a message. We'll get back to you as soon as possible.</p>
                    <form method="post" action="contact_validate.php" enctype="multipart/form-data">
    <div class="row g-3">
        
        <div class="col-lg-6">
            <div class="form-floating">
                <input type="text" class="form-control bg-transparent border border-white" id="full_name" name="name" placeholder="Your Full Name">
                <label for="full_name">Your Full Name</label>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-floating">
                <input type="email" class="form-control bg-transparent border border-white" id="email" name="email" placeholder="Your Email">
                <label for="email">Your Email</label>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-floating">
                <input type="phone" class="form-control bg-transparent border border-white" id="phone" name="phone" placeholder="Phone">
                <label for="phone">Your Phone</label>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-floating">
                <input type="text" class="form-control bg-transparent border border-white" id="project" name="project" placeholder="Project">
                <label for="project">Your Project</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <input type="text" class="form-control bg-transparent border border-white" id="subject" name="subject" placeholder="Subject">
                <label for="subject">Subject</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <textarea class="form-control bg-transparent border border-white" placeholder="Leave a message here" id="message" name="message" style="height: 160px"></textarea>
                <label for="message">Message</label>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-light text-primary w-100 py-3">Send Message</button>
        </div>
    </div>
</form>

                </div>
                <div class="col-lg-2 col-xl-2 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-transparent rounded">
                        <div class="d-flex flex-column align-items-center text-center mb-4">
                            <div class="bg-white d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;"><i class="fa fa-map-marker-alt fa-2x text-primary"></i></div>
                            <h4 class="text-dark">Address</h4>
                            <p class="mb-0 text-white">123 Ranking Street, New York, USA</p>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center mb-4">
                            <div class="bg-white d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;"><i class="fa fa-phone-alt fa-2x text-primary"></i></div>
                            <h4 class="text-dark">Mobile</h4>
                            <p class="mb-0 text-white">+012 345 67890</p>
                            <p class="mb-0 text-white">+012 345 67890</p>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center">
                            <div class="bg-white d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;"><i class="fa fa-envelope-open fa-2x text-primary"></i></div>
                            <h4 class="text-dark">Email</h4>
                            <p class="mb-0 text-white">info@example.com</p>
                            <p class="mb-0 text-white">info@example.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-5 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="d-flex justify-content-center mb-4">
                        <a class="btn btn-lg-square btn-light rounded-circle mx-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg-square btn-light rounded-circle mx-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg-square btn-light rounded-circle mx-2" href="#"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-lg-square btn-light rounded-circle mx-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="rounded h-100">
                        <iframe class="rounded w-100" style="height: 500px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2423.0783240010096!2d-1.1346622!3d52.6043551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487766d628d67095%3A0x98af943c13484309!2s6%20Holly%20Close%2C%20Leicester%20LE2%206BZ%2C%20UK!5e0!3m2!1sen!2sng!4v1713046949589!5m2!1sen!2sng" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <?php include('footer.php'); ?>
</body>
</html>
