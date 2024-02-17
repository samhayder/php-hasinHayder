<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Book</title>
  <!-- CSS -->
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
    crossorigin="anonymous">
  <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <?php include_once "components/nav-profile.php";?>

  <main role="main" class="container">
    <div class="row justify-content-center wrapper">
      <div class="col-md-6">
        <div class="card">
          <header class="card-header">
            <h4 class="card-title mt-2">Contact</h4>
          </header>
          <article class="card-body">
            <div class="container" id="profile">
              <div class="row">
                <div class="col-sm-6 col-md-4">
                  <img src="https://via.placeholder.com/50.png/09f/666"
                    width="150" class="img-thumbnail" />
                </div>
                <div class="col-sm-6 col-md-8">
                  <h4 class="text-primary">Deepak Sharma</h4>
                  <p class="text-secondary">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    deepak@gmail.com<br />
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    9776655444<br />
                    <i class="fa fa-map-marker" aria-hidden="true"></i> Delhi
                  </p>
                  <!-- Split button -->
                </div>
              </div>

            </div>
          </article>

        </div>
      </div>

    </div>

    <?php include_once "components/footer.php";?>
