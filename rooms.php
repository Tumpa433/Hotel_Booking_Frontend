<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengal Hotel - Rooms</title>

    <?php include 'include/links.php'; ?>


</head>

<body class="bg-light">

    <?php require('include/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
        <div class="h-line bg-dark"></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 mb-4 mb-lg-0 px-lg-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-white shadow rounded">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">FILTERS</h4>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="filterDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column mt-2 align-items-stretch" id="filterDropdown">
                            <div class="border bg-light p-3 rounded mb-3">
                                <h4 class="mb-3">CHECK AVAILABILITY</h4>

                                <label class="form-label ">Check-in</label>
                                <input type="date" class="form-control shadow-none mb-3">
                                <label class="form-label ">Check-out</label>
                                <input type="date" class="form-control shadow-none">

                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h4 class="mb-3">FACILITIES</h4>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label " for="f1">Facility one</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label " for="f2">Facility two</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label " for="f3">Facility three</label>
                                </div>
                            </div>

                            <div class="border bg-light p-3 rounded mb-3">
                                <h4 class="mb-3">GUESTS</h4>
                                <div class="d-flex">
                                    <div class="me-3">
                                        <label class="form-label ">Adults</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                    <div>
                                        <label class="form-label ">Children</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                </div>
                            </div>
                        </div>
                </nav>
            </div>

            <div class="col-lg-9 col-md-12 px-4">
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-3 mb-0">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded ">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Simple Room Name</h5>
                            <div class="features mb-3">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    2 Rooms
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    1 Bathroom
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    1 Balcony
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    3 sofa
                                </span>
                            </div>
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    wifi
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    television
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    AC
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    Room heater
                                </span>
                            </div>
                            <div class="guests">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    5 Adults
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    4 Children
                                </span>

                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4"> ₹1000 per night</h6>
                            <a href="#" class="btn btn-sm  w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-3 mb-0">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded ">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Simple Room Name</h5>
                            <div class="features mb-3">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    2 Rooms
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    1 Bathroom
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    1 Balcony
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    3 sofa
                                </span>
                            </div>
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    wifi
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    television
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    AC
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    Room heater
                                </span>
                            </div>
                            <div class="guests">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    5 Adults
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    4 Children
                                </span>

                            </div>
                        </div>
                        <div class="col-md-2 text-center mt-text-center mt-lg-0 mt-md-0 mt-4">
                            <h6 class="mb-4"> ₹1000 per night</h6>
                            <a href="#" class="btn btn-sm  w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-3 mb-0">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded ">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Simple Room Name</h5>
                            <div class="features mb-3">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    2 Rooms
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    1 Bathroom
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    1 Balcony
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    3 sofa
                                </span>
                            </div>
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    wifi
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    television
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    AC
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    Room heater
                                </span>
                            </div>
                            <div class="guests">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    5 Adults
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    4 Children
                                </span>

                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4"> ₹1000 per night</h6>
                            <a href="#" class="btn btn-sm  w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'include/footer.php'; ?>


</body>

=======
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengal Hotel - Rooms</title>

    <?php include 'include/links.php'; ?>


</head>

<body class="bg-light">

    <?php require('include/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
        <div class="h-line bg-dark"></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 mb-4 mb-lg-0 px-lg-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-white shadow rounded">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">FILTERS</h4>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="filterDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column mt-2 align-items-stretch" id="filterDropdown">
                            <div class="border bg-light p-3 rounded mb-3">
                                <h4 class="mb-3">CHECK AVAILABILITY</h4>

                                <label class="form-label ">Check-in</label>
                                <input type="date" class="form-control shadow-none mb-3">
                                <label class="form-label ">Check-out</label>
                                <input type="date" class="form-control shadow-none">

                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h4 class="mb-3">FACILITIES</h4>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label " for="f1">Facility one</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label " for="f2">Facility two</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label " for="f3">Facility three</label>
                                </div>
                            </div>

                            <div class="border bg-light p-3 rounded mb-3">
                                <h4 class="mb-3">GUESTS</h4>
                                <div class="d-flex">
                                    <div class="me-3">
                                        <label class="form-label ">Adults</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                    <div>
                                        <label class="form-label ">Children</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                </div>
                            </div>
                        </div>
                </nav>
            </div>

            <div class="col-lg-9 col-md-12 px-4">
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-3 mb-0">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded ">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Simple Room Name</h5>
                            <div class="features mb-3">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    2 Rooms
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    1 Bathroom
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    1 Balcony
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    3 sofa
                                </span>
                            </div>
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    wifi
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    television
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    AC
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    Room heater
                                </span>
                            </div>
                            <div class="guests">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    5 Adults
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    4 Children
                                </span>

                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4"> ₹1000 per night</h6>
                            <a href="#" class="btn btn-sm  w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-3 mb-0">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded ">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Simple Room Name</h5>
                            <div class="features mb-3">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    2 Rooms
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    1 Bathroom
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    1 Balcony
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    3 sofa
                                </span>
                            </div>
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    wifi
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    television
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    AC
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    Room heater
                                </span>
                            </div>
                            <div class="guests">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    5 Adults
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    4 Children
                                </span>

                            </div>
                        </div>
                        <div class="col-md-2 text-center mt-text-center mt-lg-0 mt-md-0 mt-4">
                            <h6 class="mb-4"> ₹1000 per night</h6>
                            <a href="#" class="btn btn-sm  w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-3 mb-0">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded ">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Simple Room Name</h5>
                            <div class="features mb-3">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    2 Rooms
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    1 Bathroom
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    1 Balcony
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    3 sofa
                                </span>
                            </div>
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    wifi
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    television
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    AC
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    Room heater
                                </span>
                            </div>
                            <div class="guests">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    5 Adults
                                </span>
                                <span class="badge bg-light text-dark text-wrap lh-base">
                                    4 Children
                                </span>

                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4"> ₹1000 per night</h6>
                            <a href="#" class="btn btn-sm  w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'include/footer.php'; ?>


</body>

>>>>>>> 1f16b391f1fd3d53da4cb05e5d8536748cb865d9
</html>