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
  <style>
    * {
      font-family: 'Poppins', sans-serif;
    }

    .h-font {
      font-family: 'Merienda', cursive;
    }
  </style>
</head>

<body>

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

        </div>
    </div>
  </div>
  </div>
  </form>
  </div>
  </div>
  </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>