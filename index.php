<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengal Hotel - Home</title>

    <?php include 'include/links.php'; ?>
    
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

   
    <style>
        .availability-form {
            margin-top: -50px;
            position: relative;
            z-index: 2;
        }

        @media screen and (max-width:575) {
            .availability-form {
                margin-top: 30px;
                padding: 0 35px;
            }
        }
    </style>
</head>

<body class="bg-light">

    <?php include 'include/header.php'; ?>

    <!-- Carousel -->

    <div class="container-fluid px-lg-4 mt-4 mb-5 ">
        <!-- Swiper -->
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide h-50">
                    <img src="images/carousel/pic1.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide h-50">
                    <img src="images/carousel/pic2.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/pic3.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/pic4.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/pic5.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/pic6.png" class="w-100 d-block" />
                </div>
            </div>
        </div>
    </div>

    <!-- check availability -->

    <div class="container availability-form">
        <div class="row ">
            <div class="col-lg-12 bg-white shadow-sm rounded-3">
                <h5 class="mb-4">Check Booking Availability</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-md-3 mb-3 ">
                            <label class="form-label " style="font-weight: 500;">Check-in</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-md-3 mb-3 ">
                            <label class="form-label " style="font-weight: 500;">Check-out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label " style="font-weight: 500;">Adult</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label " style="font-weight: 500;">Children</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mb-2">
                            <button type="submit" class="btn btn-white shadow-none custom-bg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Our Rooms -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4"> ₹1000 per night</h6>
                        <div class="features mb-4">
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
                        <div class="facilities mb-4">
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
                        <div class="guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge bg-light text-dark text-wrap lh-base">
                                5 Adults
                            </span>
                            <span class="badge bg-light text-dark text-wrap lh-base">
                                4 Children
                            </span>
                           
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4"> ₹1000 per night</h6>
                        <div class="features mb-4">
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
                        <div class="facilities mb-4">
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
                        <div class="guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge bg-light text-dark text-wrap lh-base">
                                5 Adults
                            </span>
                            <span class="badge bg-light text-dark text-wrap lh-base">
                                4 Children
                            </span>
                           
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4"> ₹1000 per night</h6>
                        <div class="features mb-4">
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
                        <div class="guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge bg-light text-dark text-wrap lh-base">
                                5 Adults
                            </span>
                            <span class="badge bg-light text-dark text-wrap lh-base">
                                4 Children
                            </span>
                           
                        </div>
                        <div class="facilities mb-4">
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
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
            </div>
        </div>
    </div>

    <!-- Our Facilities -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-mb-2 text-center bg-white shadow-sm rounded-3 p-4 mx-2 shadow">
                <img src="images/facilities/wifi.svg" width="80px">
                <h5 class="mt-3">wifi</h5>
            </div>
            <div class="col-lg-2 col-mb-2 text-center bg-white shadow-sm rounded-3 p-4 mx-2 shadow">
                <img src="images/facilities/wifi.svg" width="80px">
                <h5 class="mt-3">wifi</h5>
            </div>
            <div class="col-lg-2 col-mb-2 text-center bg-white shadow-sm rounded-3 p-4 mx-2 shadow">
                <img src="images/facilities/wifi.svg" width="80px">
                <h5 class="mt-3">wifi</h5>
            </div>
            <div class="col-lg-2 col-mb-2 text-center bg-white shadow-sm rounded-3 p-4 mx-2 shadow">
                <img src="images/facilities/wifi.svg" width="80px">
                <h5 class="mt-3">wifi</h5>
            </div>
            <div class="col-lg-2 col-mb-2 text-center bg-white shadow-sm rounded-3 p-4 mx-2 shadow">
                <img src="images/facilities/wifi.svg" width="80px">
                <h5 class="mt-3">wifi</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
            </div>

        </div>
    </div>

    <!-- Testimonials -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
    <div class="container mt-4 mb-5">
        <!-- Swiper -->
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/facilities/star.svg" width="30px">
                        <h6 class="m-0 ms-2">Random User1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Dolor soluta ducimus tenetur dolore reprehenderit nihil magni ea. Reiciendis,
                        tempore consequatur.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/facilities/star.svg" width="30px">
                        <h6 class="m-0 ms-2">Random User1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Dolor soluta ducimus tenetur dolore reprehenderit nihil magni ea. Reiciendis,
                        tempore consequatur.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/facilities/star.svg" width="30px">
                        <h6 class="m-0 ms-2">Random User1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Dolor soluta ducimus tenetur dolore reprehenderit nihil magni ea. Reiciendis,
                        tempore consequatur.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>



            </div>
            <div class="swiper-pagination"></div>
        </div>

        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More >>></a>
        </div>

    </div>

    <!--Reach us-->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-4 bg-white shadow-sm rounded-3">
                <iframe class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230661.04484453754!2d81.63677227313637!3d25.40217189662753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398534c9b20bd49f%3A0xa2237856ad4041a!2sPrayagraj%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1752789128780!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 shadow-sm rounded-3 rounded-3">
                    <h5>Call us</h5>
                    <a href="tel:+98044769879" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +98044769879</a>
                    <br>
                    <a href="tel:+98044769879" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +98044769879</a>
                </div>

                <div class="bg-white p-4 shadow-sm rounded-3 rounded-3 mt-4">
                    <h5>Follow us</h5>
                    <a href="#" class="d-inline-block mb-3 ">
                        <span class="text-decoration-none text-dark fs-6 p-2">
                            <i class="bi bi-twitter"></i> Twitter
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3 ">
                        <span class="text-decoration-none text-dark fs-6 p-2">
                            <i class="bi bi-facebook"></i> Facebook
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3 ">
                        <span class="text-decoration-none text-dark fs-6 p-2">
                            <i class="bi bi-instagram"></i> Instagram
                        </span>
                    </a>

                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
   <?php include 'include/footer.php'; ?>

    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });
    </script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: 3,
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });
    </script>
</body>

=======
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengal Hotel - Home</title>

    <?php include 'include/links.php'; ?>
    
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

   
    <style>
        .availability-form {
            margin-top: -50px;
            position: relative;
            z-index: 2;
        }

        @media screen and (max-width:575) {
            .availability-form {
                margin-top: 30px;
                padding: 0 35px;
            }
        }
    </style>
</head>

<body class="bg-light">

    <?php include 'include/header.php'; ?>

    <!-- Carousel -->

    <div class="container-fluid px-lg-4 mt-4 mb-5 ">
        <!-- Swiper -->
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide h-50">
                    <img src="images/carousel/pic1.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide h-50">
                    <img src="images/carousel/pic2.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/pic3.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/pic4.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/pic5.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/pic6.png" class="w-100 d-block" />
                </div>
            </div>
        </div>
    </div>

    <!-- check availability -->

    <div class="container availability-form">
        <div class="row ">
            <div class="col-lg-12 bg-white shadow-sm rounded-3">
                <h5 class="mb-4">Check Booking Availability</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-md-3 mb-3 ">
                            <label class="form-label " style="font-weight: 500;">Check-in</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-md-3 mb-3 ">
                            <label class="form-label " style="font-weight: 500;">Check-out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label " style="font-weight: 500;">Adult</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label " style="font-weight: 500;">Children</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mb-2">
                            <button type="submit" class="btn btn-white shadow-none custom-bg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Our Rooms -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4"> ₹1000 per night</h6>
                        <div class="features mb-4">
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
                        <div class="facilities mb-4">
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
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4"> ₹1000 per night</h6>
                        <div class="features mb-4">
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
                        <div class="facilities mb-4">
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
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4"> ₹1000 per night</h6>
                        <div class="features mb-4">
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
                        <div class="facilities mb-4">
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
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
            </div>
        </div>
    </div>

    <!-- Our Facilities -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-mb-2 text-center bg-white shadow-sm rounded-3 p-4 mx-2 shadow">
                <img src="images/facilities/wifi.svg" width="80px">
                <h5 class="mt-3">wifi</h5>
            </div>
            <div class="col-lg-2 col-mb-2 text-center bg-white shadow-sm rounded-3 p-4 mx-2 shadow">
                <img src="images/facilities/wifi.svg" width="80px">
                <h5 class="mt-3">wifi</h5>
            </div>
            <div class="col-lg-2 col-mb-2 text-center bg-white shadow-sm rounded-3 p-4 mx-2 shadow">
                <img src="images/facilities/wifi.svg" width="80px">
                <h5 class="mt-3">wifi</h5>
            </div>
            <div class="col-lg-2 col-mb-2 text-center bg-white shadow-sm rounded-3 p-4 mx-2 shadow">
                <img src="images/facilities/wifi.svg" width="80px">
                <h5 class="mt-3">wifi</h5>
            </div>
            <div class="col-lg-2 col-mb-2 text-center bg-white shadow-sm rounded-3 p-4 mx-2 shadow">
                <img src="images/facilities/wifi.svg" width="80px">
                <h5 class="mt-3">wifi</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
            </div>

        </div>
    </div>

    <!-- Testimonials -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
    <div class="container mt-4 mb-5">
        <!-- Swiper -->
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/facilities/star.svg" width="30px">
                        <h6 class="m-0 ms-2">Random User1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Dolor soluta ducimus tenetur dolore reprehenderit nihil magni ea. Reiciendis,
                        tempore consequatur.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/facilities/star.svg" width="30px">
                        <h6 class="m-0 ms-2">Random User1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Dolor soluta ducimus tenetur dolore reprehenderit nihil magni ea. Reiciendis,
                        tempore consequatur.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/facilities/star.svg" width="30px">
                        <h6 class="m-0 ms-2">Random User1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Dolor soluta ducimus tenetur dolore reprehenderit nihil magni ea. Reiciendis,
                        tempore consequatur.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>



            </div>
            <div class="swiper-pagination"></div>
        </div>

        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More >>></a>
        </div>

    </div>

    <!--Reach us-->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-4 bg-white shadow-sm rounded-3">
                <iframe class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230661.04484453754!2d81.63677227313637!3d25.40217189662753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398534c9b20bd49f%3A0xa2237856ad4041a!2sPrayagraj%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1752789128780!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 shadow-sm rounded-3 rounded-3">
                    <h5>Call us</h5>
                    <a href="tel:+98044769879" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +98044769879</a>
                    <br>
                    <a href="tel:+98044769879" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +98044769879</a>
                </div>

                <div class="bg-white p-4 shadow-sm rounded-3 rounded-3 mt-4">
                    <h5>Follow us</h5>
                    <a href="#" class="d-inline-block mb-3 ">
                        <span class="text-decoration-none text-dark fs-6 p-2">
                            <i class="bi bi-twitter"></i> Twitter
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3 ">
                        <span class="text-decoration-none text-dark fs-6 p-2">
                            <i class="bi bi-facebook"></i> Facebook
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3 ">
                        <span class="text-decoration-none text-dark fs-6 p-2">
                            <i class="bi bi-instagram"></i> Instagram
                        </span>
                    </a>

                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
   <?php include 'include/footer.php'; ?>

    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });
    </script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: 3,
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });
    </script>
</body>

>>>>>>> 1f16b391f1fd3d53da4cb05e5d8536748cb865d9
</html>