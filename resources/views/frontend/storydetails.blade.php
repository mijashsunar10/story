<!doctype html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Write</title>
  <script src="https://kit.fontawesome.com/2c3dd3b477.js" crossorigin="anonymous"> </script>
  {{-- @include('layouts.head') --}}
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
  
@include('layouts.nav');

{{-- @include('layouts.header') --}}


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

      
      <div class="row g-0">
        <form action="{{route('storydetails.store')}} " method="POST" class="row" enctype="multipart/form-data">
          @csrf
 
          <div class="col-12 col-md-6 text-bg-primary">
            <div class="d-flex align-items-center justify-content-center h-100">
              <div class="col-10 col-xl-8 py-3">

                {{-- <div class="container">
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
                </div> --}}
                <div class="container">
                  <div class="d-flex justify-content-center">
                      <div class="card" style="width: 25rem; height: 30rem; position: relative; background-color: #f2f2f2; border: 1px solid #ddd; border-radius: 5px; overflow: hidden;" onclick="document.getElementById('coverImage').click();">
                          <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                              <i id="imageIcon" class="fas fa-image" style="font-size: 48px; color: #aaa;"></i>
                              <p id="addCoverText" class="mt-2 " style="font-weight:bold">Add a cover</p>
                              <img id="coverImagePreview" src="#" alt="Selected Image" style="display: none; width: auto; height: 100%; max-height: 100%; object-fit:cover"/>
                              <input type="file" name="image" class="form-control-file position-absolute" id="coverImage" style="width: 100%; height: 100%; opacity: 0; top: 0; left: 0; cursor: pointer;" onchange="previewImage(event);">
                              @error('image')
                              <div>
                              <small class="text-danger">{{$message}} </small>
                              </div>
                            @enderror
                          </div>
                      </div>
                  </div>
              </div>
              
              <script>
                  function previewImage(event) {
                      var reader = new FileReader();
                      reader.onload = function() {
                          var output = document.getElementById('coverImagePreview');
                          var imageIcon = document.getElementById('imageIcon');
                          var addCoverText = document.getElementById('addCoverText');
                          output.src = reader.result;
                          output.style.display = 'block';
                          imageIcon.style.display = 'none';
                          addCoverText.style.display = 'none';
                      }
                      reader.readAsDataURL(event.target.files[0]);
                  }
                  document.getElementById('coverImage').addEventListener('click', function(event){
                      event.stopPropagation();
                  });
              </script>
              
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
              {{-- <form action="{{route('storydetails.store')}}" method="POST">
                @csrf --}}
                <div class="row gy-3 gy-md-4 overflow-hidden">
                     {{-- <form action="{{route('storydetails.store')}}" method="POST">
                      @csrf  --}}
                      

                  <div class="col-12">
                    
                    <label for="title" class="form-label fw-bold">Title <span><i class="fa-solid  fa-info-circle"></i></span></label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Untitled Story " required>
                    @error('title')
                      <div>
                      <small class="text-danger">{{$message}} </small>
                      </div>
                    @enderror
                        
                  </div>


                  <div class="col-12">
                    <label for="description" class="form-label fw-bold">Description <span><i class="fa-solid  fa-info-circle"></i></span></label>
                    <textarea class="form-control" name="description" id="description" required rows="5" style="resize: none;"></textarea>
                    @error('description')
                    <div>
                      <small class="text-danger">{{$message}}</small>
                    </div>
                    @enderror
                  </div>


                  <div class="col-12">
                    <label for="main_characters" class="form-label fw-bold">Main Character <span><i class="fa-solid fa-info-circle"></i></span></label>
                    <input type="Text" class="form-control" name="main_characters" id="main_characters" placeholder="Name" required>
                    @error('main_characters')
                    <div>
                      <small class="text-danger">{{$message}}</small>
                    </div>
                    @enderror
                  </div>

                  <div class="col-12">
                    <label for="author" class="form-label fw-bold">Author<span><i class="fa-solid fa-info-circle"></i></span></label>
                    <input type="text" class="form-control" name="author" id="author" placeholder="Author Name" required>
                    @error('author')
                    <div>
                      <small class="text-danger">{{$message}}</small>
                    </div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="category_id" class="fw-bold">Category</label>
                    <select class="form-control" name="category_id" id="category_id" style="width: auto;">
                      {{-- <option selected disabled>Select a Category</option> --}}
                      {{-- <option value="comedy"> Science fiction</option>
                      <option value="Comedy"> Comedy</option>
                      <option value="comedy"> Horror</option>
                      <option value="comedy"> Love</option>
                      <option value="comedy"> Fantasy</option>
                      <option value="comedy"> Mystery</option>
                      <option value="comedy"> Mythology</option>
                      <option value="comedy"> Legend</option>
                      <option value="comedy"> Fairy Tale</option>
                      <option value="comedy"> Historical</option>
                      <option value="comedy"> Drama</option>
                      <option value="comedy"> Fable</option> --}} 

                      @foreach(\App\Models\Category::all() as $category)
                      <option value="{{ $category->id }}">{{$category->name}}</option>
                   @endforeach
                    </select>
                    @error('category')
                    <div>
                      <small class="text-danger">{{$message}}</small>
                    </div>
                    @enderror

                  </div>

                  <div class="form-group">
                    <label for="audience" class="fw-bold">Target Audience <i class="fas fa-info-circle"></i></label>
                    <select class="form-control" name="audience" id="audience" style="width: auto;">
                      {{-- <option selected disabled>Who is your primary audience?</option> --}}
                      <option value="child">Young Adult (13-18 years of age)</option>
                      <option value="young">New Adult (18-25 years of age)</option>
                      <option value="adult">Adult (25+ years of age)</option>
                    </select>
                    @error('audience')
                    <div>
                    <small class="text-danger">{{$message}} </small>
                    </div>
                  @enderror

                  </div>

                  <div class="form-group">
                    <label for="language" class="fw-bold">Language </label>
                    <select class="form-control" name="language" id="language" style="width: auto;">
                      {{-- <option selected disabled>Select a Language </option> --}}
                      <option value="english">English</option>
                      <option value="english">Français</option>
                      <option value="english">Italiano</option>
                      <option value="english">Deutsch</option>
                      <option value="english">Español</option>
                      <option value="english">Português</option>
                      <option value="english">Català</option>
                      <option value="english">Tiếng Việt</option>
                      <option value="english">Filipino</option>
                      <option value="english">Bahasa Indonesia</option>
                      <option value="english">Bahasa Melayu</option>
                      <option value="english">ภาษาไทย</option>
                      <option value="english">Русский</option>
                      <option value="english">Română</option>
                    </select>
                    @error('language')
                    <div>
                    <small class="text-danger">{{$message}} </small>
                    </div>
                  @enderror
                  </div>

                  <div class="form-group">
                    <label for="copyright" class="fw-bold">Copyright <i class="fas fa-info-circle"></i></label>
                    <select class="form-control" id="copyright" name="copyright" style="width: auto;">

                      <option value="All_rights_reserved">All Rights Reserved</option>
                      <option value="Public_Domain">Public Domain</option>
                      {{-- <option>Creative Commons (CC) Attribution</option> --}}
                    </select>
                    @error('copyright')
                    <div>
                    <small class="text-danger">{{$message}} </small>
                    </div>
                  @enderror
                  </div>

                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" name="iAgree" id="iAgree" required>
                      <label class="form-check-label text-secondary" for="iAgree">
                        I agree to the <a href="#!" class="link-primary text-decoration-none">terms and conditions</a>
                      </label>
                    </div>
                  </div>

                  {{-- <button type="submit">Submit</button> --}}
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
      </div>
    </div>
  </section>





  {{-- <footer class="py-3 footer">
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
  </footer> --}}

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>