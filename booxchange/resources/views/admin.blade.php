<!-- wala pa -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>BooXchange</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
  
    <!-- Favicons -->
    <link href="book.png" rel="icon">
   
    <!-- Fonts  Reference-->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  
    <!-- Vendor CSS Files  Reference-->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  
    <!-- Bootstrap 5 Reference -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Main CSS File -->
    <link href="{{asset('/css/admin.css')}}" rel="stylesheet">
  
    <!-- JS -->
    <script defer src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script defer src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script defer src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
    <script>
      new DataTable('#example');
    </script>
    
</head>
<body class="index-page">

    <header id="header" class="header d-flex align-itmes-center sticky-top">
        <div class="container-fluid container-x1 position-relative d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-itens-center">
                <h1 class="sitename"> BooXchange</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    
                    <li><a href="#Top Genre Sales">Top Genre Sales</a></li>
                    <li><a href="#Top Seller">Top Seller</a></li>
                    <li><a href="Total Book Sales">Total Book Sales</a></li>
                </ul>
            </nav>
        </div>

    </header>
    
    <main class="main">

        
          
              <div class="row">
                <div class="col-lg-4">
                  <div class="card mb-4">
                    <div class="card-body text-center">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                        class="rounded-circle img-fluid" style="width: 150px;">
                      <h5 class="my-3">Christian Misal</h5>
                      <p class="text-muted mb-1">Game Developer</p>
                      <p class="text-muted mb-4">Davap del Norte State College</p>
                      <div class="d-flex justify-content-center mb-2">
                        <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary ms-1" > <a href="/login/form/index.html">Logout</a></button>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-4 mb-lg-0">
                    <div class="card-body p-0">
                      <ul class="list-group list-group-flush rounded-3">
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                          <i class="fas fa-globe fa-lg text-warning"></i>
                          <p class="mb-0">https://mdbootstrap.com</p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                          <i class="fab fa-github fa-lg text-body"></i>
                          <p class="mb-0">CaptainTan1</p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                          <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                          <p class="mb-0">Karmagisa123</p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                          <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                          <p class="mb-0">@Keotanii__</p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                          <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                          <p class="mb-0">Christian Misal</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="card mb-4">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Full Name</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0">Christian Misal</p>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Email</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0">misal.christian@dnsc.edu.ph</p>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Phone</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0">(+639) 279448918</p>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Mobile</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0">(+639) 279448918</p>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Address</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0">Tubod Carmen Davao del Norte</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                          <p class="mb-4"><span class="text-primary font-italic me-1">Top</span> Genre
                          </p>
                          <p class="mb-1" style="font-size: .77rem;">Horror</p>
                          <div class="progress rounded" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <p class="mt-4 mb-1" style="font-size: .77rem;">Fantasy</p>
                          <div class="progress rounded" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <p class="mt-4 mb-1" style="font-size: .77rem;">Bromance</p>
                          <div class="progress rounded" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <p class="mt-4 mb-1" style="font-size: .77rem;">Sci-Fi</p>
                          <div class="progress rounded" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <p class="mt-4 mb-1" style="font-size: .77rem;">Non-Fiction</p>
                          <div class="progress rounded mb-2" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                          <p class="mb-4"><span class="text-primary font-italic me-1">Top</span> Seller
                          </p>
                          <p class="mb-1" style="font-size: .77rem;">@ItsmeJowji</p>
                          <div class="progress rounded" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <p class="mt-4 mb-1" style="font-size: .77rem;">@Jerax__</p>
                          <div class="progress rounded" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <p class="mt-4 mb-1" style="font-size: .77rem;">@BrixyTan</p>
                          <div class="progress rounded" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <p class="mt-4 mb-1" style="font-size: .77rem;">@KayLa?</p>
                          <div class="progress rounded" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <p class="mt-4 mb-1" style="font-size: .77rem;">@ItsKlars</p>
                          <div class="progress rounded mb-2" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>


                    
                    
                  
                    </div>
                  </div>


                  <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All User System Transaction Histories</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example4" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Admin Name</th>
                                            <th>Number of accounts</th>
                                            <th>Total Sales</th>
                                            <th>Book Purchased</th>
                                            <th>Sold Books </th>
                                            <th>Traded Books </th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>Christian Misal</td>
                                            <td>#54605</td>
                                            <td>100</td>
                                            <td>30</td>
                                            <td>60</td>
                                            <td><span class="badge light badge-success">20</span></td>
                                            <td>2024/10/14</td>
                                            <td><strong>120</strong></td>
                                        </tr>
                                        <tr>
                    <td>02</td>
                                            <td>Jerlyn Corpuz</td>
                                            <td>#54687</td>
                                            <td>200</td>
                                            <td>30</td>
                                            <td>75</td>
                                            <td><span class="badge light badge-warning">35</span></td>
                    <td>2024/10/14</td>
                                            <td><strong>200</strong></td>
                                        </tr>
                                        <tr>
                    <td>03</td>
                                            <td>Klarence De Gracia</td>
                                            <td>#35672</td>
                                            <td>250</td>
                                            <td>30</td>
                                            <td>100</td>
                                            <td><span class="badge light badge-success">80</span></td>
                                            <td>2009/01/12</td>
                                            <td><strong>120</strong></td>
                                        </tr>
                                        <tr>
                    <td>04</td>
                                            <td>Kyla Jalique</td>
                                            <td>#57984</td>
                                            <td>100</td>
                                            <td>30</td>
                                            <td>70</td>
                                            <td><span class="badge light badge-warning">0</span></td>
                                            <td>2012/03/29</td>
                                            <td><strong>100</strong></td>
                                        </tr>
                                        <tr>
                    <td>05</td>
                                            <td>Joji Rodriguez</td>
                                            <td>#12453</td>
                                            <td>10</td>
                                          <td>10</td>
                                          <td>30</td>
                                            <td><span class="badge light badge-warning">10</span></td>
                                            <td>2024/10/13</td>
                                            <td><strong>1200</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            

          </section>

    </main>

    
</body>
</html>