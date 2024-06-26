<!doctype html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Write</title>
  <script src="https://kit.fontawesome.com/2c3dd3b477.js" crossorigin="anonymous"> </script>
  <style>
    .form-control:hover {
      border-color: #007bff;
      box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .card {
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    .footer a {
      color: black;
      text-decoration: none;
      margin-right: 15px;
    }

    .footer a:hover {
      text-decoration: underline;
    }

    .footer .separator {
      color: black;
      margin: 0 10px;
    }
    .hover_item 
    {
      transform .3s;
    }
    .hover_item a:hover
    {
       text-decoration: underline;
       transform: scale(1.1);
       /* transition-delay: 1ms; */
    }
  </style>
</head>

<body class="bg-dark bg-gradient ">




  <section class="p-3 p-md-4 p-xl-5">
    <div class="container">
      <div class="card border-light-subtle shadow-sm">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        
          <div class="container-fluid  d-flex flex-row justify-content-around ">
              <div class="hover_item">
               <a class="btn btn-light btn-sm fs-5 fw-bold" href="{{route('storydetails.create')}}" role="button " style="">Story Details </a>
              </div>
              {{-- <nav class="nav">
                <a class="nav-link active" aria-current="page" href="#">Active</a>
                <a class="nav-link" href="#">Link</a>
                <a class="nav-link" href="#">Link</a>
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </nav> --}}
              <div class="hover_item">
               <a class="btn btn-light btn-sm fs-5 fw-bold" href="{{url('tableofContent')}}" role="button"> Table of Contents</a>
              </div>
              <div class="hover_item">
                <a class="btn btn-light btn-sm fs-5 fw-bold" href="#" role="button"> Story Notes</a>
              </div>
          </div>
        </nav>

        <form action="{{route('storydetails.store')}} " method="POST" enctype="multipart/form-data">
          @csrf
        <div class="row g-0">
          <div class="col-12 col-md-6 text-bg-primary">
            <div class="d-flex align-items-center justify-content-center h-100">
              <div class="col-10 col-xl-8 py-3">

                <div class="container">
                  <div class="d-flex justify-content-center">
                    <div class="card" style="width: 18rem; height: 24rem; position: relative; background-color: #f2f2f2; border: 1px solid #ddd; border-radius: 5px;">
                      <label for="coverImageInput" class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                        <i class="fas fa-image" style="font-size: 48px; color: #aaa;"></i>
                        <p class="mt-2">Add a cover</p>
                        <input type="file" class="form-control-file position-absolute" id="coverImageInput" style="width: 100%; height: 100%; opacity: 0; top: 0; left: 0; cursor: pointer;">
                      </label>
                      <div class="position-absolute" style="bottom: 10px; right: 10px;">
                        <i class="fas fa-info-circle" style="font-size: 18px; color: #ccc; cursor: pointer;"></i>
                      </div>
                    </div>
                  </div>
                </div>

                <hr class="border-primary-subtle mb-4">
                <h2 class="h1 mb-4">Together, we weave stories that inspire, connect, and transcend boundaries.</h2>
                <p class="lead m-0">Every voice matters in our shared journey of creativity.</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="card-body p-3 p-md-4 p-xl-5">
              <div class="row">
                <div class="col-12">
                  <div class="mb-5">
                    <h2 class="h3">Story Details</h2>
                    <h3 class="fs-6 fw-normal text-secondary m-0">Enter your details to write</h3>
                  </div>
                </div>
              </div>
              <form action="{{route('storydetails.store')}}" method="POST">
                @csrf
                <div class="row gy-3 gy-md-4 overflow-hidden">

                  <div class="col-12">
                    <label for="title" class="form-label fw-bold">Title <span><i class="fa-solid  fa-info-circle"></i></span></label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Untitled Story " required>
                  </div>

                  <div class="col-12">
                    <label for="description" class="form-label fw-bold">Description <span><i class="fa-solid  fa-info-circle"></i></span></label>
                    <textarea class="form-control" name="description" id="description" required rows="5" style="resize: none;"></textarea>
                  </div>


                  <div class="col-12">
                    <label for="Main_Char" class="form-label fw-bold">Main Character <span><i class="fa-solid fa-info-circle"></i></span></label>
                    <input type="Text" class="form-control" name="Main_Char" id="Main_Char" placeholder="Name" required>
                  </div>

                  <div class="col-12">
                    <label for="title" class="form-label fw-bold">Title <span><i class="fa-solid fa-info-circle"></i></span></label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Untitled Story " required>
                  </div>

                  <div class="form-group">
                    <label for="categoryselect" class="fw-bold">Category</label>
                    <select class="form-control" id="categoryselect" style="width: auto;">
                      <option selected disabled>Select a Category</option>
                      <option> Science fiction</option>
                      <option> Comedy</option>
                      <option> Horror</option>
                      <option> Love</option>
                      <option> Fantasy</option>
                      <option> Mystery</option>
                      <option> Mythology</option>
                      <option> Legend</option>
                      <option> Fairy Tale</option>
                      <option> Historical</option>
                      <option> Drama</option>
                      <option> Fable</option>

                    </select>
                  </div>

                  <div class="form-group">
                    <label for="targetAudience" class="fw-bold">Target Audience <i class="fas fa-info-circle"></i></label>
                    <select class="form-control" id="targetAudience" style="width: auto;">
                      <option selected disabled>Who is your primary audience?</option>
                      <option>Young Adult (13-18 years of age)</option>
                      <option>New Adult (18-25 years of age)</option>
                      <option>Adult (25+ years of age)</option>
                    </select>

                  </div>

                  <div class="form-group">
                    <label for="languageSelect" class="fw-bold">Language </label>
                    <select class="form-control" id="languageSelect" style="width: auto;">
                      <option selected disabled>Select a Language </option>
                      <option>English</option>
                      <option>Français</option>
                      <option>Italiano</option>
                      <option>Deutsch</option>
                      <option>Español</option>
                      <option>Português</option>
                      <option>Català</option>
                      <option>Tiếng Việt</option>
                      <option>Filipino</option>
                      <option>Bahasa Indonesia</option>
                      <option>Bahasa Melayu</option>
                      <option>ภาษาไทย</option>
                      <option>Русский</option>
                      <option>Română</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="copyrightSelect" class="fw-bold">Copyright <i class="fas fa-info-circle"></i></label>
                    <select class="form-control" id="copyrightSelect" style="width: auto;">

                      <option>All Rights Reserved</option>
                      <option>Public Domain</option>
                      <option>Creative Commons (CC) Attribution</option>
                      <option>(CC) Attrib. NonCommercial</option>
                      <option>(CC) Attrib. NonComm. NoDerivs</option>
                      <option>(CC) Attrib. NonComm. ShareAlike</option>
                      <option>(CC) Attribution-ShareAlike</option>
                      <option>(CC) Attribution-NoDerivs</option>

                    </select>
                  </div>

                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" name="iAgree" id="iAgree" required>
                      <label class="form-check-label text-secondary" for="iAgree">
                        I agree to the <a href="#!" class="link-primary text-decoration-none">terms and conditions</a>
                      </label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="d-grid">
                      <button class="btn btn-outline-dark me-2" type="submit">Submit</button>
                    </div>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </form>
      </div>
    </div>
  </section>





  <footer class="py-3 footer">
    <div class="container text-center">
      <div class="row">
        <div class="col-12">
          <!-- <a href="#" class="text-dark mx-2">Simthesis</a> -->
          <a href="#" class="text-light mx-2">Try Premium</a>
          <a href="#" class="text-light mx-2">Get the App</a>
          <a href="#" class="text-light mx-2">Language</a>
          <a href="#" class="text-light mx-2">Writers</a>
          <span class="separator text-light">|</span>
          <a href="#" class="text-light mx-2">Brand Partnerships</a>
          <a href="#" class="text-light mx-2">Jobs</a>
          <a href="#" class="text-light mx-2">Press</a>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-12">
          <a href="#" class="text-light mx-2">Terms</a>
          <a href="#" class="text-light mx-2">Privacy</a>
          <a href="#" class="text-light mx-2">Payment Policy</a>
          <a href="#" class="text-light mx-2">Accessibility</a>
          <a href="#" class="text-light mx-2">Help</a>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-12">
          <small class="text-dark">&copy; 2024 Simthesis</small>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>