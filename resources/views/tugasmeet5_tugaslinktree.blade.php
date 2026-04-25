<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Copy Linktree</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #b3b3b3;
            font-family: 'Inter', system-ui, -apple-system, sans-serif;

        }

        #linktree {
            background: linear-gradient(135deg,
                    #f3ead2 0%,
                    #e3dcc7 50%,
                    #d6d1b8 100%);
            max-width: 600px;
        }

        #linktree {
            position: relative;
        }

        #linktree::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: url("https://www.transparenttextures.com/patterns/noise.png");
            opacity: 0.15;
            pointer-events: none;
        }

        .icon {
            width: 40px;
            height: 40px;
            background-color: rgb(245, 245, 245);
        }
        .icon:hover{
            background-color: white;
        }
        .icon svg {
            width: 20px;
            height: 20px;
            display: block;
        }


        #logo img {
            width: 100px;
            height: 100px;
        }

        .username {
            font-size: 28px;
            font-weight: 700;
        }

        .bio {
            font-size: 16px;
            font-weight: 600;
            line-height: 1.5;

        }


        .button-main {
            background-color: white;
            width: 100%;
            font-size: 18px;
            font-weight: 600;
            color: black;
        }
        .button-main:hover{
            background-color: rgb(231, 231, 231);
        }
        #logo-sosmed svg{
            width: 30px;
            height: 30px;
            font-weight: bold;
            transition: transform 0.2s ease;
        }
        #logo-sosmed svg:hover{
             transform: scale(1.15);
        }

        #footer p, #footer a{
            font-size: 7px;
            font-weight: 400;
            color: black;
        }


    </style>
    <script src="https://unpkg.com/feather-icons"></script>

</head>

<body class="p-lg-4">
    <div class="container rounded p-4" id="linktree">
        <!-- Start button nav -->
        <div class="d-flex justify-content-between align-items-center">
            <div class="icon rounded-circle d-flex align-items-center justify-content-center">
                <i data-feather="link-2"></i>
            </div>
            <div class="d-flex gap-1">
                <div class="icon rounded-circle d-flex align-items-center justify-content-center mr-2">
                    <i data-feather="bell"></i>
                </div>
                <div class="icon rounded-circle d-flex align-items-center justify-content-center">
                    <i data-feather="download"></i>
                </div>
            </div>
        </div>
        <!-- End button nav -->
        <!-- Start Logo section -->
        <div class="container d-flex flex-column justify-content-center align-items-center mt-3" id="logo">
            <img src="assets/img/expedia.jpg" alt="" class="rounded-circle">
            <p class="username">@expedia</p>
            <p class="bio text-center">Made to Travel. For help, please follow <br> one of our customer support links
                below.</p>
        </div>
        <!-- End Logo section -->
        <!-- Start button main -->
        <div class="d-flex flex-column align-items-center mt-3 gap-3">
            <a href="#" class="btn button-main shadow-sm p-3 mt-3">Where to: Canada</a>
            <a href="#" class="btn button-main shadow-sm p-3 mt-3">Where to: Recharge in Canada</a>
            <a href="#" class="btn button-main shadow-sm p-3 mt-3">Expedia Live - UEFA Champions League</a>
            <a href="#" class="btn button-main shadow-sm p-3 mt-3">Set-jetting in Scotland</a>
            <a href="#" class="btn button-main shadow-sm p-3 mt-3">Expedia Magazine</a>
            <a href="#" class="btn button-main shadow-sm p-3 mt-3">Customer Support: Self-Service and Virtual Agent</a>
            <a href="#" class="btn button-main shadow-sm p-3 mt-3">Customer Support: DM @ExpediaHelp on Twitter</a>
            <a href="#" class="btn button-main shadow-sm p-3 mt-3">Become an Expedia Member</a>
            <a href="#" class="btn button-main shadow-sm p-3 mt-3">Social Media Terms and Conditions for Expedia</a>
        </div>
        <p></p>
        <!-- End button main -->
        <!-- Start logo sosmed -->
        <div class="d-flex flex align-items-center justify-content-center mt-5" id="logo-sosmed">
            <i data-feather="instagram" class="mr-3"></i>
            <i data-feather="twitter" class="mr-3"></i>
            <i data-feather="youtube" class="mr-3"></i>
            <i data-feather="facebook" class="mr-3"></i>
        </div>
        <!-- End logo sosmed -->
        <!-- Start Footer -->
        <div id="footer" class="text-center mt-5">
            <p><a href="#">Cookie Preferences</a> • <a href="#">Report</a> • <a href="#">Privacy</a> • <a href="#">Explore</a> </p>
        </div>
        <!-- End Footer -->
    </div>


    <script>
        feather.replace();
    </script>
</body>

</html>
