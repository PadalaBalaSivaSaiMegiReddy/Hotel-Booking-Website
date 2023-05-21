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
  <style>
    * {
      font-family: 'Poppins', sans-serif;
    }

    .h-font {
      font-family: 'Merienda', cursive;
    }

    .custom-bg{
      background-color: #094a1b!important;
    }
    .custom-bg:hover{
      background-color: #2e6617!important;
    }
    .avalibility-form{
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
  <br><br><br><br>
  <br><br><br><br>

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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>