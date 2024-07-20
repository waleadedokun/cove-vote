<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/main.css">
    <title> Add Election </title>
  </head>
  <body class="ff-inria">
  <?php
      include('./assets/components/header.php')
    ?>
    <main class="container">

    </main>
    <?php
      include('./assets/components/footer.php')
    ?>
    </body>
  </html>
 -->

  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./public/css/style.css" rel="stylesheet">
    <title>User Profile Page </title>
</head>
<body>
    <header>
        <section class="shadow-sm">
            <nav class="d-flex  justify-content-between align-items-center my-4 container">
                <a href="./index.html">
                    <img alt="ezra-log" src="./public/img/logo.png"/>
                </a>
                <div class="dropdown">
                    <button class="bg-transparent border-0 fw-bolder" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="me-2"> Login / Sign up </span>  <img alt="dropdown-icon" src="./public/img/arrow-square-down.png"/>
                    </button>
                    <ul class="dropdown-menu p-2 rounded-4" aria-labelledby="dropdownMenuButton1">
                        <li>
                            <a class="dropdown-item p-2" href="./profile.html">
                                <img alt="chef-icon" style="width: 24px; height: 24px;" src="./public/img/profile-icon.png" />
                                <span>
                                    Profile
                                </span>
                            </a>
                            </li>
                        <li>
                            <a class="dropdown-item p-2" href="#">
                                <img alt="seeker-icon" style="width: 24px; height: 24px;" src="./public/img/logout-icon.png" />
                                <span>
                                    Log Out
                                </span>
                            </a>
                            </li>
                        </ul>
                </div>
            </nav>
        </section>
    </header>
    <main class="container mx-auto">

    <!-- User Profile Page -  -->
        <section class="d-flex gap-3 my-5">
            <img class="rounded border border-3" src="./public/img/charles.jpg" style="width: 30%; height: 20%; object-fit: contain;" />
            <div class="d-grid">
                <h2> Ireoluwa Ifede </h2>
                <span> Chef / Admin User </span>
            </div>
        </section>

        <!-- Chef Profile -->
        <section class="accordion my-5" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                  Total Number of Recipes created by me : 12
                </button>
              </h2>
              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
              </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    Total Number of Reviews created by me: 12
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                  <div class="accordion-body">
                      <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td colspan="2">Larry the Bird</td>
                              <td>@twitter</td>
                            </tr>
                          </tbody>
                        </table>
                  </div>
                </div>
              </div>
        </section>

        <!-- Admin Profile -->
        <section class="accordion my-5" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                  Total Number of Users : 12
                </button>
              </h2>
              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                  Total Number of Recipes: 4
                </button>
              </h2>
              <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
              </div>
            </div>
    </section>

    <!-- Seeker Profile -->
    <section class="accordion my-5" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
              Total Number of Reviews created by me: 12
            </button>
          </h2>
          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
            <div class="accordion-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
          </div>
        </div>
    </section>
    </main>
    <footer class="row container mx-auto" style="margin-top: 10vh; margin-bottom: 5vh;">
        <div class="col-md-6 col-lg-3">
            <img alt="ezra-log" src="./public/img/logo.png"/>
            <p> Ezra is a recipe web application with a wide variety of delicious recipes,
                easy-to-use search function. Join our community and let's cook together!
            </p>
        </div>
        <div class="col-md-6 col-lg-3">
            <h2>    Company </h2>
            <ul>
                <li> Home </li>
            </ul>
        </div>
        <div class="col-md-6 col-lg-3">
            <h2> Resources </h2>
            <ul>
                <li> Blog </li>
            </ul>
        </div>
        <div class="col-md-6 col-lg-3">
            <img alt="ezra-log" src="./public/img/logo.png"/>
            <p> Subscribe to our Email</p>
            <div class="d-flex gap-1 flex-wrap">
                <input  placeholder="Email" type="email"  required />
                <button class="button rounded shadow-sm"> Subscribe </button>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>