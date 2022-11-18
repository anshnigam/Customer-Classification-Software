<!DOCTYPE html>
<html>
<body>
    <!-- <form action="upload.php" method="post" enctype="multipart/form-data">
    Select CSV file to upload: <input type="file" name="input" id="fileToUpload"><br>
    <input type="submit" value="Upload Image" name="submit">
    </form> -->
    <!doctype html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.101.0">
        <title>Customer Classify</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/heroes/">





    <!-- <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

        <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">


        <style>
          .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
          }

          @media (min-width: 768px) {
            .bd-placeholder-img-lg {
              font-size: 3.5rem;
            }
          }

          .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
          }

          .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
          }

          .bi {
            vertical-align: -.125em;
            fill: currentColor;
          }

          .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
          }

          .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
          }
        </style>


        <!-- Custom styles for this template -->
        <link href="first_page.css" rel="stylesheet">
      </head>
      <body>

        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
          <symbol id="check" viewBox="0 0 16 16">
            <title>Check</title>
            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
          </symbol>
        </svg>

        <div class="container py-3">


        <header>
          <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
            <span class="fs-4"><b>Team Alpha</b></span>
            <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
              <a class="me-3 py-2 text-dark text-decoration-none" href="readoutput.php">Output</a>
              <a class="me-3 py-2 text-dark text-decoration-none" href="mailto:arunanshug2002@gmail.com">Contact Us</a>
              <a class="me-3 py-2 text-dark text-decoration-none" href="support.html">Support</a>
            </nav>
          </div>
        </header>

    <main>
      <section id="fileDrop">
        <div class="bg-dark text-secondary px-4 py-5 text-center">
          <div class="py-5">
            <h1 class="display-5 fw-bold text-white">Upload Your csv File</h1>
            <div class="col-lg-6 mx-auto">
              <p class="fs-5 mb-4">Just select the file with customer data to be classified.</p>
              <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <form class="" id="form" action="upload.php" method="post" enctype="multipart/form-data">
                  <input type="file" name="input" value="" id="fileInput" class="fileClass" required><br><br><br>
                  <input type="submit" name="submit" value="Submit" onclick="showSubmit();" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">
                  <button type="button" class="btn btn-outline-light btn-lg px-4" onclick="reset()">Clear</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
              Team Alpha
            </a>
            <span class="mb-3 mb-md-0 text-muted">&copy; 2022 Company, Inc</span>
          </div>

          <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-muted" href="mailto:arunanshug2002@gmail.com">Feedback</a></li>
            <li class="ms-3"><a class="text-muted" href="mailto:arunanshug2002@gmail.com">Report</a></li>
            <li class="ms-3"><a class="text-muted" href="mailto:arunanshug2002@gmail.com">Collab</a></li>
          </ul>
        </footer>
      </div>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      function showSubmit(){
        alert("File Submitted Successfully.")
      }
    </script>

    </main>
      </body>
    </html>

</body>
</html>
<?php
    if ( isset($_POST["submit"]) ) {
        // header("Location: second_page.html");
        if ( isset($_FILES["input"])) {

                 //if there was an error uploading the file
            if ($_FILES["input"]["error"] > 0) {
                echo "Return Code: " . $_FILES["input"]["error"] . "<br />";

            }
            else{
                if (file_exists("user_data/" . $_FILES["input"]["name"])) {
                    echo $_FILES["input"]["name"] . " already exists. ";
                }
                else {
                    $storagename = "input.csv";
                    move_uploaded_file($_FILES["input"]["tmp_name"], "C://xampp/htdocs/SE J COMP/" . $storagename);
                }
            }
        }
        else{
             echo "No file selected <br />";
        }
    }

?>
