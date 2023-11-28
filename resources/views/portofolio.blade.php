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


    <div class="container-fluid">

      {{-- Title --}}
      <div class="container titleText">
        <h1 class="text-center text1 text-primary">Hi!</h1>
        <p class="text-center text2 text-primary"></p>
      </div>



      {{-- Pictures --}}
      <div class="container">
        <div class="row text-center picsRow text-primary img-fluid">
          <div class="col pic-item1 pic-img">
            <a href="{{ url('coding') }}"><img src="/images/suit.png" class="w-60 rounded-circle shadow"
                style="max-width: 80%" alt=""></a>
            <p class="overlayText">Coding</p>
          </div>
          <div class="col pic-item2 pic-img">
            <a href="{{ url('cat') }}"><img src="/images/cat.png" class="w-60 rounded-circle shadow"
                style="max-width: 80%" alt=""></a>
            <p class="overlayText">???</p>
          </div>
          <div class="col pic-item3 pic-img">
            <a href="{{ url('experience') }}"><img src="/images/palmtree.png" class="w-60 rounded-circle shadow"
                style="max-width: 80%" alt=""></a>
            <p class="overlayText">Experience</p>
          </div>
        </div>
      </div>


      {{-- About --}}
      <div class="container rounded bg-light bg-opacity-10 text-primary aboutText"
        style="padding-block: 2em; margin-block: 3em">
        <h2 class="text-center" style="font-size: 2em">About Me</h2>
        <p class="text-center" style="font-size: 1.75em">A highly motivated person to work with others as a team. Able
          to
          adapt to
          changing conditions and new tools. Well versed in communication.
          Skilled and experienced
          musician. Worked on multimedia projects on several occasions.</p>
      </div>

      <img src=" /images/cloud.png" alt="" class="w-100">

    </div>
  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
  <script src="/js/script.js"></script>
</body>

</html>