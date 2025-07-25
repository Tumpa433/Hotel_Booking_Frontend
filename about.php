<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengal Hotel - About</title>

    <?php include 'include/links.php'; ?>

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        .box {
            border-top-color: var(--teal) !important;

        }
    </style>

</head>

<body class="bg-light">

    <?php require('include/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">ABOUT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Maxime magnam at dolore,<br> incidunt architecto natus explicabo?
            Quia magnam ducimus nesciunt.
        </p>
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-2 order-lg-1">
                <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Mollitia nostrum repellat harum laboriosam, tempore praesentium? Accusantium.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Mollitia nostrum repellat harum laboriosam, tempore praesentium? Accusantium.</p>
            </div>

            <div class="col-lg-5 col-md-5 mb-4 order-1 order-lg-2">
                <img src="images/about/about.jpg" class="w-100 rounded shadow-sm">

            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="bg-white p-4 text-center rounded shadow border-top border-4  box">
                    <img src="images/about/hotel.svg" width="70px">
                    <h4 class="mt-3">100+ ROOMS</h4>
                </div>

            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="bg-white p-4 text-center rounded shadow border-top border-4  box">
                    <img src="images/about/customer.webp" width="70px">
                    <h4 class="mt-3">200+ CUSTOMERS</h4>
                </div>

            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="bg-white p-4 text-center rounded shadow border-top border-4  box">
                    <img src="images/about/rating.jpg" width="70px">
                    <h4 class="mt-3">150+ REVIEWS</h4>
                </div>

            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="bg-white p-4 text-center rounded shadow border-top border-4  box">
                    <img src="images/about/staff.svg" width="70px">
                    <h4 class="mt-3">200+ STAFFS</h4>
                </div>

            </div>


        </div>
    </div>

    <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>
    <div class="container px-4">
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white text-center overflow-hidden rounded ">
                    <img src="images/about/team1.jpg" class="w-100 ">
                    <h5 class="mt-2">Random Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded ">
                    <img src="images/about/team2.jpg" class="w-100 ">
                    <h5 class="mt-2">Random Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded ">
                    <img src="images/about/team3.jpg" class="w-100 ">
                    <h5 class="mt-2">Random Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded ">
                    <img src="images/about/team4.jpg" class="w-100">
                    <h5 class="mt-2">Random Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded ">
                    <img src="images/about/team5.jpg" class="w-100 ">
                    <h5 class="mt-2">Random Name</h5>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <!-- Footer -->
        <?php include 'include/footer.php'; ?>

        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidePerView: 4,
                spaceBetween: 30,
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
    <title>Bengal Hotel - About</title>

    <?php include 'include/links.php'; ?>

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        .box {
            border-top-color: var(--teal) !important;

        }
    </style>

</head>

<body class="bg-light">

    <?php require('include/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">ABOUT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Maxime magnam at dolore,<br> incidunt architecto natus explicabo?
            Quia magnam ducimus nesciunt.
        </p>
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-2 order-lg-1">
                <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Mollitia nostrum repellat harum laboriosam, tempore praesentium? Accusantium.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Mollitia nostrum repellat harum laboriosam, tempore praesentium? Accusantium.</p>
            </div>

            <div class="col-lg-5 col-md-5 mb-4 order-1 order-lg-2">
                <img src="images/about/about.jpg" class="w-100 rounded shadow-sm">

            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="bg-white p-4 text-center rounded shadow border-top border-4  box">
                    <img src="images/about/hotel.svg" width="70px">
                    <h4 class="mt-3">100+ ROOMS</h4>
                </div>

            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="bg-white p-4 text-center rounded shadow border-top border-4  box">
                    <img src="images/about/customer.webp" width="70px">
                    <h4 class="mt-3">200+ CUSTOMERS</h4>
                </div>

            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="bg-white p-4 text-center rounded shadow border-top border-4  box">
                    <img src="images/about/rating.jpg" width="70px">
                    <h4 class="mt-3">150+ REVIEWS</h4>
                </div>

            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="bg-white p-4 text-center rounded shadow border-top border-4  box">
                    <img src="images/about/staff.svg" width="70px">
                    <h4 class="mt-3">200+ STAFFS</h4>
                </div>

            </div>


        </div>
    </div>

    <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>
    <div class="container px-4">
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white text-center overflow-hidden rounded ">
                    <img src="images/about/team1.jpg" class="w-100 ">
                    <h5 class="mt-2">Random Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded ">
                    <img src="images/about/team2.jpg" class="w-100 ">
                    <h5 class="mt-2">Random Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded ">
                    <img src="images/about/team3.jpg" class="w-100 ">
                    <h5 class="mt-2">Random Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded ">
                    <img src="images/about/team4.jpg" class="w-100">
                    <h5 class="mt-2">Random Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded ">
                    <img src="images/about/team5.jpg" class="w-100 ">
                    <h5 class="mt-2">Random Name</h5>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <!-- Footer -->
        <?php include 'include/footer.php'; ?>

        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidePerView: 4,
                spaceBetween: 30,
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