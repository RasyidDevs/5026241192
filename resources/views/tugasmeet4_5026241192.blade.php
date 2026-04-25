<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LATIHAN SOAL PEMBUATAN LAYOUT</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <style>
        /*  Start Body */
        body{
            background-color: #CCCCCC;
            padding-bottom: 20px;
            padding-top:20px;
        }
        /* End Body */
        /* Start Main Content */
        #main-content{
            background-color: white;
        }
        /* End Main Content */
        /* Start Font */
        .section-title{
        font-family: 'Montserrat', sans-serif;
        font-weight: 400;
        font-size: 30px;
        }

        .quote{
        font-family: 'Open Sans', sans-serif;
        font-weight: 400;
        font-size: 14px;
        color: #777;
        }

        .name{
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        font-size: 13px;
        }

        .role{
        font-family: 'Open Sans', sans-serif;
        font-weight: 300;
        font-size: 12px;
        color: #999;
        }
        /* End Font */
        /* Start Footer */
        .footer{
            background-color: #EBEBEB;
        }
        /* End Footer */
    </style>
</head>
<body>
    <div class="container pt-5 px-0 rounded" id="main-content">
        <div class="container w-75">
            <!-- Start Heading -->
            <div class="row text-center mb-5">
                <div class="col">
                    <h2 class="section-title">Out clients love us.</h2>
                </div>
            </div>
            <!-- End Heading -->
            <!-- Start Profile -->
            <div class="row g-3 py-5 ">
                <div class="col">
                    <div class="row">
                        <div class="col-3">
                            <img src="assets/lat_soal/person1.jpg" class="rounded-circle" style="width:80px; height:80px;" alt="">
                        </div>

                        <div class="col">
                            <p class="quote mb-3 ">
                            "Pelayanan yang sangat profesional dan hasil kerjanya benar-benar memuaskan."
                            </p>

                            <h6 class="name mb-1">Andi Pratama</h6>
                            <small class="role">Project Manager</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-3">
                            <img src="assets/lat_soal/person2.jpg" class="rounded-circle" style="width:80px; height:80px;" alt="">
                        </div>

                        <div class="col">
                            <p class="quote mb-3">
                            "Tim ini sangat responsif, detail, dan mampu menyelesaikan pekerjaan tepat waktu."
                            </p>

                            <h6 class="name mb-1">Siti Rahma</h6>
                            <small class="role">Marketing Lead</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-3 py-5">
                <div class="col">
                    <div class="row">
                        <div class="col-3">
                            <img src="assets/lat_soal/person3.jpg" class="rounded-circle" style="width:80px; height:80px;" alt="">
                        </div>

                        <div class="col">
                            <p class="quote mb-3 ">
                            "Kualitas desain dan implementasinya sangat baik, sesuai dengan kebutuhan perusahaan kami."
                            </p>

                            <h6 class="name mb-1">Budi Santoso</h6>
                            <small class="role">UI/UX Designer</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-3">
                            <img src="assets/lat_soal/person4.jpg" class="rounded-circle" style="width:80px; height:80px;" alt="">
                        </div>

                        <div class="col">
                            <p class="quote mb-3">
                            "Sangat direkomendasikan untuk siapa pun yang membutuhkan solusi digital yang rapi dan modern."
                            </p>

                            <h6 class="name mb-1">Rina Oktavia</h6>
                            <small class="role">Business Owner</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Profile -->
        </div>

      <!-- Start Footer -->
      <div class="footer py-5 w-100">
            <div class="row  mx-auto justify-content-center">
                <div class="col d-flex justify-content-center">
                    <img src="assets/lat_soal/logo1.avif" style="width:90px; height:90px;">
                </div>
                <div class="col d-flex justify-content-center">
                    <img src="assets/lat_soal/logo2.png" style="width:90px; height:90px;">
                </div>
                <div class="col d-flex justify-content-center">
                    <img src="assets/lat_soal/logo3.webp" style="width:90px; height:90px;">
                </div>
                <div class="col d-flex justify-content-center">
                    <img src="assets/lat_soal/logo4.jpg" style="width:90px; height:90px;">
                </div>
                <div class="col d-flex justify-content-center">
                    <img src="assets/lat_soal/logo5.png" style="width:90px; height:80px;">
                </div>
            </div>
     </div>
     <!-- End Footer -->
    </div>
</body>
</html>
