<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HomeStays - Host Profile</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="homestays, cultural exchange, host profile, volunteer management" name="keywords">
    <meta content="Manage your host profile and cultural exchange preferences" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-primary px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle text-light" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-2"></i>
                            <span class="badge bg-danger">3</span>
                        </a>
                        <div class="dropdown-menu rounded">
                            <a href="#" class="dropdown-item"><i class="fas fa-user me-2"></i>New application received</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-comment me-2"></i>New message from Sarah</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-eye me-2"></i>Your profile was viewed</a>
                        </div>
                    </div>
                    <a href="#"><small class="me-3 text-light"><i class="fa fa-user me-2"></i>My Profile</small></a>
                    <a href="#"><small class="me-3 text-light"><i class="fa fa-sign-in-alt me-2"></i>Logout</small></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <?php include 'navHost.php'; ?>
    <!-- Navbar End -->

    <!-- Profile Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <!-- Page Header -->
            <div class="text-center mb-5">
                <h1 class="mb-3">My Profile</h1>
                <p class="mb-0">Manage your personal information and cultural exchange preferences</p>
            </div>

            <div class="row">
                <!-- Profile Information -->
                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body text-center">
                            <img src="../img/host.jpg" class="rounded-circle mb-3" style="width: 150px; height: 150px;" alt="Host">
                            <h4 class="mb-1">Maria Garcia</h4>
                            <p class="text-muted mb-3">Host in Barcelona, Spain</p>
                            <div class="d-flex justify-content-center mb-3">
                                <div class="me-3">
                                    <h5 class="mb-0">4.9</h5>
                                    <small class="text-muted">Rating</small>
                                </div>
                                <div class="me-3">
                                    <h5 class="mb-0">12</h5>
                                    <small class="text-muted">Exchanges</small>
                                </div>
                                <div>
                                    <h5 class="mb-0">3</h5>
                                    <small class="text-muted">Active</small>
                                </div>
                            </div>
                            <button class="btn btn-primary">Edit Profile</button>
                        </div>
                    </div>

                    <!-- Quick Stats -->
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Quick Stats</h5>
                            <div class="mb-3">
                                <p class="mb-2"><i class="fa fa-check-circle text-success me-2"></i>Profile Verified</p>
                                <p class="mb-2"><i class="fa fa-star text-warning me-2"></i>Top Rated Host</p>
                                <p class="mb-2"><i class="fa fa-calendar text-primary me-2"></i>Member since 2023</p>
                                <p class="mb-0"><i class="fa fa-language text-info me-2"></i>Speaks Spanish, English</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Profile Details -->
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="profileTabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="personal-tab" data-bs-toggle="tab" href="#personal">Personal Info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="preferences-tab" data-bs-toggle="tab" href="#preferences">Preferences</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="cultural-tab" data-bs-toggle="tab" href="#cultural">Cultural Exchange</a>
                                </li>
                            </ul>

                            <div class="tab-content pt-4" id="profileTabsContent">
                                <!-- Personal Information -->
                                <div class="tab-pane fade show active" id="personal">
                                    <form>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label class="form-label">Full Name</label>
                                                <input type="text" class="form-control" value="Maria Garcia">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control" value="maria@example.com">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Phone</label>
                                                <input type="tel" class="form-control" value="+34 123 456 789">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Location</label>
                                                <input type="text" class="form-control" value="Barcelona, Spain">
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">About Me</label>
                                                <textarea class="form-control" rows="4">Passionate about cultural exchange and sharing Spanish traditions. I love cooking, dancing, and teaching Spanish to visitors.</textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <!-- Preferences -->
                                <div class="tab-pane fade" id="preferences">
                                    <form>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label class="form-label">Preferred Duration</label>
                                                <select class="form-select">
                                                    <option>1-2 months</option>
                                                    <option>2-3 months</option>
                                                    <option>3-6 months</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Maximum Volunteers</label>
                                                <select class="form-select">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">House Rules</label>
                                                <textarea class="form-control" rows="4">- No smoking
- Respect quiet hours (10 PM - 7 AM)
- Keep common areas clean
- Participate in family activities</textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <!-- Cultural Exchange -->
                                <div class="tab-pane fade" id="cultural">
                                    <form>
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <label class="form-label">Cultural Activities Offered</label>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" checked>
                                                    <label class="form-check-label">Spanish Language Lessons</label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" checked>
                                                    <label class="form-check-label">Cooking Classes</label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" checked>
                                                    <label class="form-check-label">Flamenco Dance</label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox">
                                                    <label class="form-check-label">Local Tours</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Cultural Exchange Description</label>
                                                <textarea class="form-control" rows="4">I offer a rich cultural experience including traditional Spanish cooking classes, language exchange, and participation in local festivals. Volunteers will have the opportunity to immerse themselves in Spanish culture while sharing their own traditions.</textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="text-end mt-4">
                                <button class="btn btn-primary">Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Profile End -->

    <!-- Footer Start -->
    <?php include '../Common/footer.php'; ?>

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
</body>
</html> 