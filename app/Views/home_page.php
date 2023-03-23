<?php



?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CuteURL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>



    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="<?php echo site_url('assets/img/img1.png') ?>" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Experience the magic of short links with CuteURL - the cutest URL shortener out there.</h1>
                <p class="lead">Transform your long, complicated URLs into short, cute links in seconds - and share them with the world!</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="<?php echo site_url("login"); ?>" class="btn btn-primary btn-lg px-4 me-md-2">Get Started</a>
                    <a href="<?php echo site_url("login"); ?>" class="btn btn-outline-secondary btn-lg px-4">Log in</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container px-4 py-5" id="icon-grid">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
            <div class="col d-flex align-items-start">
                <i class="bi-bootstrap text-muted flex-shrink-0 me-3" style="font-size: 2rem;"></i>
                <div>
                    <h3 class="fw-bold mb-0 fs-4">Customized Short Links</h3>
                    <p>Create a personalized short link that reflects your brand or message.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <i class="bi-bootstrap text-muted flex-shrink-0 me-3" style="font-size: 2rem;"></i>
                <div>
                    <h3 class="fw-bold mb-0 fs-4">Password-Protected Links</h3>
                    <p>Protect your links with a password to ensure that only authorized users can access them.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <i class="bi-calendar3 text-muted flex-shrink-0 me-3" style="font-size: 2rem;"></i>
                <div>
                    <h3 class="fw-bold mb-0 fs-4">Link Expiration</h3>
                    <p>Set an expiration date for your links to automatically disable them after a certain time period.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <i class="bi-home text-muted flex-shrink-0 me-3" style="font-size: 2rem;"></i>
                <div>
                    <h3 class="fw-bold mb-0 fs-4">Bulk Link Shortening</h3>
                    <p>Shorten multiple links at once with our bulk shortening tool.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <i class="bi-speedometer2 text-muted flex-shrink-0 me-3" style="font-size: 2rem;"></i>
                <div>
                    <h3 class="fw-bold mb-0 fs-4">User-Friendly Dashboard</h3>
                    <p>Manage your links with ease through our intuitive and user-friendly dashboard.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <i class="bi-toggles2 text-muted flex-shrink-0 me-3" style="font-size: 2rem;"></i>
                <div>
                    <h3 class="fw-bold mb-0 fs-4">API Access</h3>
                    <p>Integrate our URL shortening service into your own applications with our API access.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <i class="bi-geo-fill text-muted flex-shrink-0 me-3" style="font-size: 2rem;"></i>
                <div>
                    <h3 class="fw-bold mb-0 fs-4">QR Code Generator</h3>
                    <p>Generate QR codes for your shortened links to easily share them offline.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <i class="bi-tools text-muted flex-shrink-0 me-3" style="font-size: 2rem;"></i>
                <div>
                    <h3 class="fw-bold mb-0 fs-4">No Ads</h3>
                    <p>Enjoy a clean and ad-free experience while using our URL shortening service.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            </ul>
            <p class="text-center text-muted">© 2023 TrabahoLang, Inc.</p>
        </footer>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>