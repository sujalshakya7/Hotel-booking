<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHK HOTEL - ROOMS</title>
    <?php require('inc/links.php'); ?>
    <style>
         .custom-bg {
            background-color: green;
        }
        
        .custom-bg:hover {
            background-color: #279e8c;
        }
    </style>
</head>

<body class="bg-light">
    <?php require('inc/header.php');?>

    <div class="my-5 px-4">
        <h2 class ="fw-bold h-font text-center">OUR ROOMS</h2>
        <div class="h-line bg-dark"></div>
    </div>
    

    <div class="container">
        <div class="row">
           <div class="col-lg-3 col-md-12 mb-lg-0 mb-4">
           <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
              <div class="container-fluid flex-lg-column align-items-stretch">
    <h4 class="mt-2">FILTERS</h4>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
        <div class="border bg-light p-3 rounded mb-3">
            <h5 class="mb-3" style="font-size:18px">CHECK AVAILABILITY</h5>
            <label class="form-label">Check-in</label>
            <input type="date" class="form-control shadow-none mb-3" >
            <label class="form-label">Check-out</label>
            <input type="date" class="form-control shadow-none">
    </div>
    <div class="border bg-light p-3 rounded mb-3">
            <h5 class="mb-3" style="font-size:18px">FACILITIES</h5>
            <div class="mb-2">
                <input type="checkbox"id="f1" class="form-check-input shadow-none me-1" >
                <label class="form-check-label" for="f1">Facility one</label>

    </div>
    <div class="mb-2">
                <input type="checkbox"id="f2" class="form-check-input shadow-none me-1" >
                <label class="form-check-label" for="f2">Facility two</label>

    </div>
    <div class="mb-2">
                <input type="checkbox"id="f3" class="form-check-input shadow-none me-1" >
                <label class="form-check-label" for="f3">Facility three</label>

    </div>
    <div class="border bg-light p-3 rounded mb-3">
            <h5 class="mb-3" style="font-size:18px">GUESTS</h5>
            <div class="d-flex">
                <div class="me-3">
                <label class="form-label">Adults</label>
                <input type="number" class="form-control shadow-none mb-3" >
             </div>
             <div>
                <label class="form-label">Children</label>
                <input type="number" class="form-control shadow-none mb-3" >
             </div>
            </div>
    </div>
    </div>
  </div>
</nav>
           </div>
        <div class="col-lg-9 col-md-12 px-4">
              <div class="card mb-4 border-0 shadow">
                  <div class="row g-0 p-3 align-items-center">
                      <div class="col-md-5">
                      <img src="images/rooms/8.png" class="img-fluid rounded" >
                      </div>
                      <div class="col-md-5">
                      <h5 class="mb-3">Simple Room Name</h5>
                      <div class="features mb-3">
                          <h6 class="mb-1">Features</h6>
                          <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                              2 Rooms
                          </span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                              2 Bathroom
                          </span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                              1 Balcony
                          </span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                              3 Sofa
                          </span>
                        </div>
                      </div>
                      <div class="facilities mb-3"></div>
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Wifi
                            </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Television
                            </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                AC
                            </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Room Heater
                            </span>
      </div>
                        <div class="guests mb-3">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                            5 Adults
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                            4 Children
                            </span>
                        </div>
      </div>
                      <div class="col-md-2">
                      <h6 class="mb-4">रु2000 per night</h6>
                      <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a><br>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a><br>
                        </div>
                        
                      </div>
                    </div>
                  </div>
           </div>
        </div>
    </div>

 
    <?php require('inc/footer.php');?>

   


</body>

</html>