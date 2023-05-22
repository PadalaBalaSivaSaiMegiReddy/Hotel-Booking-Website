<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MR Hotel</title>
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&family=Lora:ital,wght@1,400;1,500;1,600;1,700&family=Merienda:wght@300;400;500;600;700;800;900&family=Poppins:wght@400;500;600&family=Varela&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/common.css">
  <style>
    .avalibility-form {
      margin-top: -50px;
      z-index: 2;
      position: relative;

    }
  </style>
</head>

<body class="bg-light">

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">MR Hotel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item me-2">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item me-2">
            <a class="nav-link" href="#">Rooms</a>
          </li>
          <li class="nav-item me-2">
            <a class="nav-link" href="#">Facilities</a>
          </li>
          <li class="nav-item me-2">
            <a class="nav-link " href="#">Contact us</a>
          </li>
          <li class="nav-item  me-2">
            <a class="nav-link" href="#">About</a>
          </li>

        </ul>
        <div class="d-flex">
          <!-- Button trigger modal -->
          <!-- Button HTML (to Trigger Modal) -->
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3 " data-bs-target="#LoginModal" data-bs-toggle="modal">Login</button>
          <button type="button" class="btn btn-outline-dark shadow-none" data-bs-target="#registerModal" data-bs-toggle="modal">Register</button>
        </div>
        <!-- Button trigger modal -->

      </div>
    </div>
  </nav>

  <!-- Modal HTML -->
  <div id="LoginModal" class="modal fade" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
      <form>
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center">
              <i class="bi bi-person-circle fs-3 me-3"></i>User Login
            </h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label for="inputPassword" class="form-label shadow-none">Email Address</label>
              <input type="email" class="form-control shadow-none">
            </div>

            <div class="mb-3 ">
              <label for="inputPassword" class="form-label">Password</label>
              <input type="password" class="form-control" id="inputPassword">
            </div>
            <div class="d-flex justify-content-between mb-4">
              <button class="btn btn-dark shadow-none">Login</button>
              <a href="javascript:void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
            </div>
          </div>
      </form>
    </div>
  </div>
  </div>

  <!-- register modal HTML -->
  <div id="registerModal" class="modal fade" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-lg">
      <form>
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center">
              <i class="bi bi-person-lines-fill fs-3 me-3"></i>User Registeration
            </h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <span class="badge badge-pill badge-light text-dark mb-3 text wrap lh-base ">Note: Your details must match with your ID (Aadhaar card,driving license, passport,etc)
              that be required during<br> check—in.
            </span>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 ps-0 mb-3">
                  <label for="naming" class="form-label shadow-none">Name</label>
                  <input type="text" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0">
                  <label for="emailaddress" class="form-label shadow-none">Email Address</label>
                  <input type="email" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label for="naming" class="form-label shadow-none">Phone Number</label>
                  <input type="number" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label for="emailaddress" class="form-label shadow-none">Picture</label>
                  <input type="file" class="form-control shadow-none">
                </div>
                <div class="col-md-12 mb-3">
                  <label for="exampleFormControlTextarea1">Example textarea</label>
                  <textarea class="shadow-none form-control" rows="1"></textarea>
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label for="naming" class="form-label shadow-none">pincode</label>
                  <input type="number" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label for="emailaddress" class="form-label shadow-none">Date of birth</label>
                  <input type="date" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label for="naming" class="form-label shadow-none">Password</label>
                  <input type="password" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label for="emailaddress" class="form-label shadow-none">Confirm Password</label>
                  <input type="password" class="form-control shadow-none">
                </div>
              </div>

            </div>
            <div class="text-center my-1">

            </div>
            <!-- <div class="mb-3">
              <label for="inputPassword" class="form-label shadow-none">Email Address</label>
              <input type="email" class="form-control shadow-none">
            </div>

            <div class="mb-3 ">
              <label for="inputPassword" class="form-label">Password</label>
              <input type="password" class="form-control" id="inputPassword">
            </div>
            <div class="d-flex justify-content-between mb-4">
              <button class="btn btn-dark shadow-none">Login</button>
              <a href="javascript:void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
            </div> -->
          </div>

      </form>
    </div>
  </div>
  </div>

  <!-- carasoul HTML -->
  <div class="containerfluidimg px-lg-4 mt-4">
    <div class="swiper mySwiper swiper-container ">
      <div class="swiper-wrapper">
        <div class="swiper-slide ">
          <img src="images/carousel/img1.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/img2.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/img3.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/img4.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/img5.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="himages/carousel/img6.png" class="w-100 d-block" />
        </div>

      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
  </div>
  </div>

  <!-- check avalibility form -->
  <div class="container avalibility-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded ">
        <h5 class="mb-4">Check Avalibility</h5>
        <form>
          <div class="row align-items-end">
            <div class="col-lg-3 ">
              <label class="form-label shadow-none" style="font-weight:500">Check-in</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3">
              <label class="form-label shadow-none" style="font-weight:500">Check-out</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3">
              <label class="form-label shadow-none" style="font-weight:500">Adult</label>
              <select class="form-select">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-2 ">
              <label class="form-label shadow-none" style="font-weight:500">Children</label>
              <select class="form-select">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-1">
              <button type="submit" class="btn text-white shadow-none custom-bg ">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- our rooms -->
  <h2 class="mt-5 pt-4 mb-5 text-center fw-bold h-font">OUR ROOMS</h2>
  <div class="container">
    <div class="row">

      <div class="col-lg-4 md-6 my-3">
        <div class="card boarder-0 shadow " style="max-width: 350px; margin:auto;">
          <img class="card-img-top" src="images/rooms/1.jpg">
          <div class="card-body">
            <h5 class="card-title">Simple Room Name</h5>
            <h6 class="mb-4"> ₹ 2000 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill  badge-light text-dark  text wrap">
                2 rooms
              </span>
              <span class="badge rounded-pill  badge-light text-dark  text wrap">
                1 bathroom
              </span>
              <span class="badge rounded-pill  badge-light text-dark  text wrap">
                1 balcony
              </span>
              <span class="badge rounded-pill  badge-light text-dark  text wrap">
                3 sofa
              </span>
            </div>

            <div class="facilities mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill  badge-light text-dark  text wrap">
                wifi
              </span>
              <span class="badge rounded-pill  badge-light text-dark  text wrap">
                AC
              </span>
              <span class="badge rounded-pill  badge-light text-dark  text wrap">
                TV
              </span>
              <span class="badge rounded-pill  badge-light text-dark  text wrap">
                Parking
              </span>
            </div>
            <div class="rating mb-6">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill  badge-light text-dark  text wrap">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm custom-bg shadow-none text-white ">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none ">More details</a>
            </div>

          </div>
        </div>
      </div>
      <div class="col-lg-4 md-6 my-3">
        <div class="card boarder-0 shadow " style="max-width: 350px; margin:auto;">
          <img class="card-img-top" src="images/rooms/1.jpg">
          <div class="card-body">
            <h5 class="card-title">Simple Room Name</h5>
            <h6 class="mb-4"> ₹ 2000 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill  badge-light text-dark  text wrap">
                2 rooms
              </span>
              <span class="badge rounded-pill  badge-light text-dark  text wrap">
                1 bathroom
              </span>
              <span class="badge rounded-pill  badge-light text-dark  text wrap">
                1 balcony
              </span>
              <span class="badge rounded-pill  badge-light text-dark  text wrap">
                3 sofa
              </span>
            </div>

            <div class="facilities mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill  badge-light text-dark  text wrap">
                wifi
              </span>
              <span class="badge rounded-pill  badge-light text-dark  text wrap">
                AC
              </span>
              <span class="badge rounded-pill  badge-light text-dark  text wrap">
                TV
              </span>
              <span class="badge rounded-pill  badge-light text-dark  text wrap">
                Parking
              </span>
            </div>
            <div class="rating mb-6">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill  badge-light text-dark  text wrap">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm custom-bg shadow-none text-white ">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none ">More details</a>
            </div>

          </div>
        </div>
      </div>

      <div class="col-lg-4 md-6 my-3">
        <div class="card boarder-0 shadow " style="max-width: 350px; margin:auto;">
          <img class="card-img-top" src="images/rooms/1.jpg">
          <div class="card-body">
            <h5 class="card-title">Simple Room Name</h5>
            <h6 class="mb-4"> ₹ 2000 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill  badge-light text-dark  text wrap">
                2 rooms
              </span>
              <span class="badge rounded-pill  badge-light text-dark  text wrap">
                1 bathroom
              </span>
              <span class="badge rounded-pill  badge-light text-dark  text wrap">
                1 balcony
              </span>
              <span class="badge rounded-pill  badge-light text-dark  text wrap">
                3 sofa
              </span>
            </div>

            <div class="facilities mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill  badge-light text-dark  text wrap">
                wifi
              </span>
              <span class="badge rounded-pill  badge-light text-dark  text wrap">
                AC
              </span>
              <span class="badge rounded-pill  badge-light text-dark  text wrap">
                TV
              </span>
              <span class="badge rounded-pill  badge-light text-dark  text wrap">
                Parking
              </span>
            </div>
            <div class="rating mb-6">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill  badge-light text-dark  text wrap">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm custom-bg shadow-none text-white ">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none ">More details</a>
            </div>

          </div>
        </div>
      </div>

      <div class="col-lg-12 text-center mt-5">
        <a href="javascript:void(0)" class="btn text-white shadow-none custom-bg ">View More Rooms >>></a>

      </div>
    </div>
  </div>

  <!-- our facilities -->
  <h2 class="mt-5 pt-4 mb-5 text-center fw-bold h-font">OUR FACILITIES</h2>
  <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/IMG_43553.svg" width="80px" class="card-img-top" alt="...">
        <h5 class="mt-3">WIFI</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/IMG_43553.svg" width="80px" class="card-img-top" alt="...">
        <h5 class="mt-3">WIFI</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/IMG_43553.svg" width="80px" class="card-img-top" alt="...">
        <h5 class="mt-3">WIFI</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/IMG_43553.svg" width="80px" class="card-img-top" alt="...">
        <h5 class="mt-3">WIFI</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/IMG_43553.svg" width="80px" class="card-img-top" alt="...">
        <h5 class="mt-3">WIFI</h5>
      </div>
      <!-- <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/IMG_43553.svg" width="80px" class="card-img-top" alt="...">
        <h5 class="mt-3">WIFI</h5>
      </div> -->

    </div>
    <div class="col-lg-12 text-center mt-5">

      <a href="javascript:void(0)" class="btn text-white shadow-none custom-bg ">More facilities >>></a>

    </div>
  </div>

  <!-- Testimonials -->


  <h2 class="mt-5 pt-4 mb-10 text-center fw-bold h-font">TESTIMONIALS</h2>
  <div class="container  mt-5">
    <!-- Swiper -->
    <div class="swiper swipertestimonial">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide">
          <div class="profile d-flex align-items-center mb-3">
            <img src="images/rooms/1.jpg" width="30px">
            <h6 class="m-0 ms-2">John Doe</h5>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero modi nam, rem perferendis soluta voluptatibus quibusdam repellendus ea odit eius voluptas. Rerum temporibus pariatur magnam! Ad iste impedit necessitatibus doloribus.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>


        </div>
        <div class="swiper-slide">
          <div class="profile d-flex align-items-center mb-3">
            <img src="images/rooms/1.jpg" width="30px">
            <h6 class="m-0 ms-2">John Doe</h5>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero modi nam, rem perferendis soluta voluptatibus quibusdam repellendus ea odit eius voluptas. Rerum temporibus pariatur magnam! Ad iste impedit necessitatibus doloribus.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>


        </div>
        <div class="swiper-slide">
          <div class="profile d-flex align-items-center mb-3">
            <img src="images/rooms/1.jpg" width="30px">
            <h6 class="m-0 ms-2">John Doe</h5>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero modi nam, rem perferendis soluta voluptatibus quibusdam repellendus ea odit eius voluptas. Rerum temporibus pariatur magnam! Ad iste impedit necessitatibus doloribus.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>


        </div>
        <div class="swiper-slide">
          <div class="profile d-flex align-items-center mb-3">
            <img src="images/rooms/1.jpg" width="30px">
            <h6 class="m-0 ms-2">John Doe</h5>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero modi nam, rem perferendis soluta voluptatibus quibusdam repellendus ea odit eius voluptas. Rerum temporibus pariatur magnam! Ad iste impedit necessitatibus doloribus.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>


        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

  <div class="col-lg-12 text-center mt-5">

    <a href="javascript:void(0)" class="btn text-white shadow-none custom-bg ">Know More >>></a>

  </div>

  <!-- Reach us -->

  <h2 class="mt-5 pt-4 mb-10 text-center fw-bold h-font">REACH US</h2>

  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe height="320px" class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112254.68326305313!2d77.46476516112054!3d28.45065676758317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cbf94deb6bc39%3A0x7ba6bedc9a2b537f!2sBennett%20University%20(Times%20of%20India%20Group)!5e0!3m2!1sen!2sin!4v1684753263955!5m2!1sen!2sin" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>Call Us</h5>
          <a href="tel:+919959722693" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i>+919959722693
          </a>
          <br>
          <a href="tel:+919959722693" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i>+919959722693
          </a>
        </div>

        <div class="bg-white p-4 rounded mb-4">
          <h5>Follow Us</h5>
          <a hre="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-twitter me-1"></i>Twitter
            </span> </a>
          <br>
          <a hre="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-facebook me-1"></i>Facebook
            </span> </a>
          <br>
          <a hre="#" class="d-inline-block">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-instagram me-1"></i>Instagram
            </span> </a>
        </div>

      </div>
    </div>
  </div>



  <!-- Footer -->
  <div class="container bg-white mt-5">
    <div class="row">
      <div class="col-lg-4 p-4">
        <h3 class="h-font fw-bold fs-3 mb-2">MR HOTEL</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur
          adipisicing elit. Corporis, illum
          dolorem? Nostrum amet reiciendis
          libero ea. Mollitia maxime quisquam molestias,
          ullam veritatis, delectus et saepe fuga animi,
          voluptatum enim recusandae.
        </p>

      </div>
      <div class="col-lg-4 p-4">
        <h5 class="mb-3">
          Links
        </h5>
        <a href="#" class="d-inline-block text-dark text-decoration-none">Home</a><br>
        <a href="#" class="d-inline-block text-dark text-decoration-none">Facilities</a><br>
        <a href="#" class="d-inline-block text-dark text-decoration-none">Rooms</a><br>
        <a href="#" class="d-inline-block text-dark text-decoration-none">Contact Us</a><br>
        <a href="#" class="d-inline-block text-dark text-decoration-none">About</a>

      </div>
      <div class="col-lg-4 p-4">
        <h5 class="mb-3">
          Follow Us
        </h5>
        <a hre="#" class="d-inline-block text-dark text-decoration-none mb-2">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-twitter me-1"></i>Twitter
          </span> </a><br>
        <a hre="#" class="d-inline-block text-dark text-decoration-none mb-2">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-facebook me-1"></i>Facebook
          </span> </a><br>
        <a hre="#" class="d-inline-block text-dark text-decoration-none ">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-instagram me-1"></i>Instagram
          </span> </a><br>
      </div>

    </div>
  </div>

  <h6 class="text-center bg-dark text-white p-3 m-0">Designed and developed my Bala Siva Sai Megi Reddy Padala</h6>







  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 1000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".swipertestimonial", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
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
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>