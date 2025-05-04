<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Register - HomeStays</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="HomeStays, Cultural Exchange, Local Experience, Homestays" name="keywords">
    <meta content="Join HomeStays as a host or traveler to experience authentic cultural exchange" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/main.css" rel="stylesheet">

    <style>
        .role-selector {
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .role-selector:hover {
            transform: translateY(-5px);
        }
        .role-selector.selected {
            border: 2px solid var(--bs-primary) !important;
            background-color: rgba(var(--bs-primary-rgb), 0.1);
        }
        .photo-preview {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid var(--bs-primary);
        }
        .form-section {
            display: none;
        }
        .form-section.active {
            display: block;
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@homestays.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-white shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 py-lg-0">
                <a href="../index.html" class="navbar-brand">
                    <h1 class="m-0 text-uppercase text-primary" style="font-size: 1.5rem;"><i class="fa fa-home me-2"></i>HomeStays</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="../index.html" class="nav-item nav-link" style="font-size: 0.9rem; padding: 0.5rem 1rem;">Home</a>
                        <a href="about.html" class="nav-item nav-link" style="font-size: 0.9rem; padding: 0.5rem 1rem;">About</a>
                        <a href="service.html" class="nav-item nav-link" style="font-size: 0.9rem; padding: 0.5rem 1rem;">Services</a>
                        <a href="contact.html" class="nav-item nav-link" style="font-size: 0.9rem; padding: 0.5rem 1rem;">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Register Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="wow fadeInUp" data-wow-delay="0.1s">
                        <div class="text-center">
                            <h6 class="section-title text-center text-primary text-uppercase">Join Our Community</h6>
                            <h1 class="mb-5">Register with <span class="text-primary text-uppercase">HomeStays</span></h1>
                        </div>

                        <!-- Role Selection -->
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="role-selector border rounded p-4 text-center" data-role="host">
                                    <i class="fa fa-home fa-3x text-primary mb-3"></i>
                                    <h4>Become a Host</h4>
                                    <p class="mb-0">Share your home and culture with travelers from around the world</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="role-selector border rounded p-4 text-center" data-role="traveler">
                                    <i class="fa fa-plane fa-3x text-primary mb-3"></i>
                                    <h4>Join as Traveler</h4>
                                    <p class="mb-0">Experience authentic local culture and make meaningful connections</p>
                                </div>
                            </div>
                        </div>

                        <form id="registrationForm">
                            <!-- Basic Information Section -->
                            <div class="form-section active" id="basicInfo">
                                <h4 class="mb-4">Basic Information</h4>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="firstName" placeholder="First Name" required>
                                            <label for="firstName">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="lastName" placeholder="Last Name" required>
                                            <label for="lastName">Last Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Email" required>
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="tel" class="form-control" id="phone" placeholder="Phone Number" required>
                                            <label for="phone">Phone Number</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="password" class="form-control" id="password" placeholder="Password" required>
                                            <label for="password">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" required>
                                            <label for="confirmPassword">Confirm Password</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Personal Information Section -->
                            <div class="form-section" id="personalInfo">
                                <h4 class="mb-4">Personal Information</h4>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="date" class="form-control" id="dateOfBirth" required>
                                            <label for="dateOfBirth">Date of Birth</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select" id="gender" required>
                                                <option value="">Select Gender</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="other">Other</option>
                                            </select>
                                            <label for="gender">Gender</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" id="bio" placeholder="Tell us about yourself" style="height: 100px"></textarea>
                                            <label for="bio">Bio</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="text-center">
                                            <label for="photo" class="form-label">Profile Photo</label>
                                            <div class="mb-3">
                                                <img id="photoPreview" src="../img/default-avatar.jpg" class="photo-preview mb-2" alt="Profile Photo">
                                            </div>
                                            <input type="file" class="form-control" id="photo" accept="image/*" onchange="previewPhoto(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Host Specific Section -->
                            <div class="form-section" id="hostInfo">
                                <h4 class="mb-4">Host Information</h4>
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" id="hostDescription" placeholder="Describe your home and hosting style" style="height: 100px"></textarea>
                                            <label for="hostDescription">Host Description</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="maxGuests" placeholder="Maximum number of guests">
                                            <label for="maxGuests">Maximum Guests</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select" id="hostingType">
                                                <option value="">Select Hosting Type</option>
                                                <option value="private_room">Private Room</option>
                                                <option value="shared_room">Shared Room</option>
                                                <option value="entire_home">Entire Home</option>
                                            </select>
                                            <label for="hostingType">Hosting Type</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Traveler Specific Section -->
                            <div class="form-section" id="travelerInfo">
                                <h4 class="mb-4">Traveler Information</h4>
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" id="travelPreferences" placeholder="Tell us about your travel preferences" style="height: 100px"></textarea>
                                            <label for="travelPreferences">Travel Preferences</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select" id="preferredAccommodation">
                                                <option value="">Select Preferred Accommodation</option>
                                                <option value="private_room">Private Room</option>
                                                <option value="shared_room">Shared Room</option>
                                                <option value="entire_home">Entire Home</option>
                                            </select>
                                            <label for="preferredAccommodation">Preferred Accommodation</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="languages" placeholder="Languages you speak">
                                            <label for="languages">Languages</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-12 text-center">
                                    <button type="button" class="btn btn-primary py-3 px-5 me-3" id="prevBtn" style="display: none;">Previous</button>
                                    <button type="button" class="btn btn-primary py-3 px-5" id="nextBtn">Next</button>
                                    <button type="submit" class="btn btn-primary py-3 px-5" id="submitBtn" style="display: none;">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-primary mb-4">Get In Touch</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 6789</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@homestays.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-primary mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="about.html">About Us</a>
                    <a class="btn btn-link" href="contact.html">Contact Us</a>
                    <a class="btn btn-link" href="service.html">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-primary mb-4">Newsletter</h4>
                    <p>Subscribe to our newsletter for the latest updates and offers.</p>
                    <div class="position-relative w-100">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">HomeStays</a>, All Right Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/counterup/counterup.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>

    <script>
        // Role Selection
        let selectedRole = '';
        const roleSelectors = document.querySelectorAll('.role-selector');
        roleSelectors.forEach(selector => {
            selector.addEventListener('click', function() {
                roleSelectors.forEach(s => s.classList.remove('selected'));
                this.classList.add('selected');
                selectedRole = this.dataset.role;
            });
        });

        // Form Navigation
        let currentSection = 0;
        const sections = ['basicInfo', 'personalInfo'];
        const nextBtn = document.getElementById('nextBtn');
        const prevBtn = document.getElementById('prevBtn');
        const submitBtn = document.getElementById('submitBtn');

        nextBtn.addEventListener('click', () => {
            if (currentSection < sections.length - 1) {
                document.getElementById(sections[currentSection]).classList.remove('active');
                currentSection++;
                document.getElementById(sections[currentSection]).classList.add('active');
                
                if (currentSection === sections.length - 1) {
                    nextBtn.style.display = 'none';
                    submitBtn.style.display = 'inline-block';
                }
                prevBtn.style.display = 'inline-block';
            }
        });

        prevBtn.addEventListener('click', () => {
            if (currentSection > 0) {
                document.getElementById(sections[currentSection]).classList.remove('active');
                currentSection--;
                document.getElementById(sections[currentSection]).classList.add('active');
                
                if (currentSection === 0) {
                    prevBtn.style.display = 'none';
                }
                nextBtn.style.display = 'inline-block';
                submitBtn.style.display = 'none';
            }
        });

        // Photo Preview
        function previewPhoto(input) {
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('photoPreview').src = e.target.result;
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        // Form Submission
        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Add your form submission logic here
            console.log('Form submitted');
        });
    </script>
</body>
</html>
