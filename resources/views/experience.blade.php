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

    <div id="lookingGif" class="container text-center flex-wrap justify-content-around d-flex">
      <img class="row" src="/images/looking.gif" alt="">
      <img class="row" src="/images/looking.gif" alt="">
      <img class="row" src="/images/looking.gif" alt="">
    </div>

    <div id="exp1" class="container w-50 rounded bg-light bg-opacity-10 text-primary text-center"
      style="padding: 1em; margin-block: 2em; min-width: 300px">
      <h1 class="text-center">Previous Education</h1>
      <br>
      <h3>High School (Science)</h3>
      <p>BINUS School Serpong | 2018 - 2021</p>
      <br>
      <h3>Computer Science</h3>
      <p>BINUS University | 2021 - Now</p>
    </div>

    <div id="exp2" class="container w-50 rounded bg-light bg-opacity-10 text-primary text-center"
      style="padding: 1em; margin-block: 2em; min-width: 300px">
      <h1 class="text-center">Organizational Experience</h1>
      <br>
      <h3>Coordinator of Sound and Equipment</h3>
      <p>Bersama Dalam Musik | 2022 - Now</p>
      <br>
      <h3>Leader of Konser Awal Tahun</h3>
      <p>Bersama Dalam Musik | 2023 - Now</p>
    </div>



    <img src=" /images/end.png" alt="" class="w-100">

  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
</body>

</html>