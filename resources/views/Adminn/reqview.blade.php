<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Station Fuel Request</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>

    <section class="h-100 h-custom" id="myBtn" style="background-color: #eee;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-6">
              <div class="card border-top border-bottom border-3" style="border-color: blue !important;">
                <div class="card-body p-5">
                    @foreach ($view as $views)
                  <p class="lead fw-bold mb-5" style="font-weight: 600;">Fuel Request From Station</p>

                  <div class="row">
                    <div class="col mb-3">
                      <p class="small text-muted mb-1">Date</p>
                      <p>{{ $views->created_at }}</p>
                    </div>
                    <div class="col mb-3">
                      <p class="small text-muted mb-1">Station ID</p>
                      <p>{{ $views->fid }}</p>
                    </div>
                  </div>

                  <div class="mx-n5 px-5 py-4" style="background-color: #f2f2f2;">
                    <div class="row">
                      <div class="col-md-8 col-lg-9">
                        <p>Name: {{ $views->company }}</p>
                      </div>
                      <div class="col-md-4 col-lg-3">
                        <p>Litres: {{ $views->density }}</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-8 col-lg-9">
                        <p class="mb-0">Payment Status</p>
                      </div>
                      <div class="col-md-4 col-lg-3">
                        <p class="mb-0"><span style="color: red; font-weight: 600;">{{ $views->paymentstatus }}</span></p>
                      </div>
                    </div>
                  </div>

                  <div class="row my-4">
                    <div class="col-md-4 offset-md-8 col-lg-3 offset-lg-9">
                      <p class="lead fw-bold mb-0" style="color: blue;">{{ $views->status }}</p>
                    </div>
                  </div>
                  @endforeach
                  <!--footer note if needed-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

<script>
  //function openForm(){
     // document.getElementById("myForm").style.display = "block";
 // }

  //function closeForm(){
    //  document.getElementById("myForm").style.display = "none";
 // }
</script>

</body>
</html>
