<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title }}</title>
  <link rel="stylesheet" href="\sass\main.css">
  <link rel="stylesheet" href="/css/style.css">
</head>

<body>
  <div class="bg">

    <div class="container-fluid backButton">
      <a href="{{ url('portofolio') }}"><img src="/images/back.svg"="" style="height: 5em"></a>
    </div>

    <div class="container-fluid">

      <div class="container position-relative text-center">

        <div style="padding-block: 1em">
          <h1 class="text1 text-primary">My Coding Experience</h1>
        </div>


        <div class="container">
          <img class="rounded img-fluid" id="coding-img" src="/images/coding.gif" alt="">
        </div>

        {{-- list --}}
        <div class="container w-25 " id="listGroup" style="padding-block: 3em; min-width: 300px;">
          <ol class="list-group list-group-numbered">
            <li class="list-group-item d-inline-flex justify-content-start align-items-start">
              <div class="me-auto">
                <div class="fw-bold">C</div>
                <div class="container" style=""><img src="/images/c.png" class="img-fluid" alt=""></div>
              </div>
              <span class="badge bg-secondary rounded-pill">7</span>
            </li>
            <li class="list-group-item d-inline-flex justify-content-start align-items-start">
              <div class="me-auto">
                <div class="fw-bold">HTML</div>
                <div class="container" style=""><img src="/images/html.png" class="img-fluid" alt=""></div>
              </div>
              <span class="badge bg-secondary rounded-pill">7</span>
            </li>
            <li class="list-group-item d-inline-flex justify-content-start align-items-start">
              <div class="me-auto">
                <div class="fw-bold">CSS</div>
                <div class="container" style=""><img src="/images/css.png" class="img-fluid" alt=""></div>
              </div>
              <span class="badge bg-secondary rounded-pill">6</span>
            </li>
            <li class="list-group-item d-inline-flex justify-content-start align-items-start">
              <div class="me-auto">
                <div class="fw-bold">JavaScript</div>
                <div class="container" style=""><img src="/images/js.png" class="img-fluid" alt=""></div>
              </div>
              <span class="badge bg-secondary rounded-pill">5</span>
            </li>
            <li class="list-group-item d-inline-flex justify-content-start align-items-start">
              <div class="me-auto">
                <div class="fw-bold">Python</div>
                <div class="container" style=""><img src="/images/py.png" class="img-fluid" alt=""></div>
              </div>
              <span class="badge bg-secondary rounded-pill">6</span>
            </li>
            <li class="list-group-item d-inline-flex justify-content-start align-items-start">
              <div class="me-auto">
                <div class="fw-bold">Java</div>
                <div class="container" style=""><img src="/images/java.png" class="img-fluid" alt=""></div>
              </div>
              <span class="badge bg-secondary rounded-pill">7</span>
          </ol>
        </div>

      </div>

      <img src=" /images/rose.png" alt="" class="w-100">

    </div>
  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
</body>

</html>