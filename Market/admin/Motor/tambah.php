<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Home
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body>
<div class="container-fluid py-10">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <h5 class="mb-0">Tambah Motor</h5>
              </div>
            </div>
            <form method="post" action="save.php">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="brand" class="form-control-label">Brand</label>
                    <input type="text" class="form-control" name="brand">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="model" class="form-control-label">Model</label>
                    <input type="text" class="form-control" name="model">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="tahun" class="form-control-label">Tahun</label>
                    <input type="text" class="form-control" name="tahun">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="harga" class="form-control-label">Harga</label>
                    <input type="text" class="form-control" name="harga">
                  </div>
                </div>
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Tambah</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
        </div>
      </div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="#" class="font-weight-bold">Muhammad Yahya</a>
                for a better web.
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
</body>
</html>