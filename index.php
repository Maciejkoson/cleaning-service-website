<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Koson's cleaning services</title>

    <meta name="description" content="Professional cleaning houses, apartments and offices in London. We clean all kinds of carpets
       , sofas, beds and couchs.">
    <meta name="keywords" content="Cleaning services, cleaning london, cleaning houses,apartments">
    <meta name="author" content="Maciej Koson">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--    <link rel="stylesheet" type="text/css" href="style.css">-->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<style>
    body
    {
        padding-top: 40px;
    }
</style>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a href="" class="navbar-brand">Cleaning services</a>
        </div><!-- Navbar Header-->
        <div class="collapse navbar-collapse" id="navbar-collapse">

            <a href="" class="btn btn-info navbar-btn navbar-right">Download app</a>

            <ul class="nav navbar-nav">
                <li><a href="#feedback">Feedback</a>
                <li><a href="#gallery">Gallery</a>
                <li><a href="#features">Features</a>
                <li><a href="#faq">Faq</a>
                <li><a href="#contact">ContactUs</a>
            </ul>
        </div>
    </div><!-- End Container-->
</nav><!-- End navbar -->

<!-- Jumbotron -->

<div class="jumbotron">
    <div class="container text-center" >
        <h1>Cleaning services info</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet lectus ante, at gravida ante ultricies non. Donec enim elit, malesuada id purus non, mattis consectetur velit. Maecenas mattis dolor non tempor ultricies. Sed semper dui at erat pretium, nec iaculis libero porttitor. Fusce ac ultricies justo.</p>

        <div class="btn-group">
            <a href="" class="btn btn-lg btn-default">Our job</a>
            <a href="" class="btn btn-lg btn-info">Info</a>
            <a href="" class="btn btn-lg btn-warning">Our people</a>
        </div>
    </div> <!-- end of container -->
</div>
<!-- End jumbotron -->

<div class="container">
    <section>
        <div class="page-header" id="feedback">
            <h2>Feedback.<small>Check our costumers feedbacks!</small></h2>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet lectus ante, at gravida ante ultricies non. Donec enim elit, malesuada id purus non, mattis consectetur velit. Maecenas mattis dolor non tempor ultricies. Sed semper dui at erat pretium, nec iaculis libero porttitor. Fusce ac ultricies justo.
                    </p>
                    <footer>Hans Solo</footer>
                </blockquote>
            </div>

            <div class="col-lg-4">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet lectus ante, at gravida ante ultricies non. Donec enim elit, malesuada id purus non, mattis consectetur velit. Maecenas mattis dolor non tempor ultricies. Sed semper dui at erat pretium, nec iaculis libero porttitor. Fusce ac ultricies justo.
                    </p>
                    <footer>Hans Solo</footer>
                </blockquote>
            </div>

            <div class="col-lg-4">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet lectus ante, at gravida ante ultricies non. Donec enim elit, malesuada id purus non, mattis consectetur velit. Maecenas mattis dolor non tempor ultricies. Sed semper dui at erat pretium, nec iaculis libero porttitor. Fusce ac ultricies justo.
                    </p>
                    <footer>Hans Solo</footer>
                </blockquote>
            </div>

        </div> <!-- end row -->
    </section>
</div> <!-- end container -->

<!-- call to action -->
<section>
    <div class="well">
        <div class="container text-center">
            <h3>Subscribe to keep in touch</h3>
            <p>Enter your name and email</p>

            <form action class="form-inline">
                <div class="form-group">
                    <label for="subscription">Subscribe</label>
                    <input type="text" class="form-control" id="subscription" placeholder="Your name">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="text" class="form-control" id="email" placeholder="Your email address">
                </div>
                <button type="submit" class="btn btn-default">Subscribe now!</button>
                <hr>
            </form>
        </div> <!-- end container -->

    </div> <!-- end well -->

</section> <!-- call to action section end -->

<!-- gallery section -->
<div class="container">
    <section>
        <div class="page-header" id="gallery">
            <h2>Gallery.<small>Check out our gallery!</small></h2>
        </div>

        <div class="carousel slide" id="screenshot-carousel" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#screenshot-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#screenshot-carousel" data-slide-to="1"></li>
                <li data-target="#screenshot-carousel" data-slide-to="2"></li>
                <li data-target="#screenshot-carousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item ">
                    <img src="images/office-cleaning.jpg" alt="office-leaning">
                    <div class="carousel-caption">
                        <h2>Office cleaninig</h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/london-apartment-cleaning-service.jpg" alt="apartment-cleaning">
                    <div class="carousel-caption">
                        <h2>Apartment cleaninig</h2>
                    </div>
                </div>
                <div class="item">
                    <img src="images/restaurant-cleaning.jpg" alt="restaurant-cleaning">
                    <div class="carousel-caption">
                        <h2>Restaurant cleaning</h2>
                    </div>
                </div>
                <div class="item active">
                    <img src="images/cleaning-services-london.jpg" alt="cleaning-services-london">
                    <div class="carousel-caption">
                        <h2>Cleaning services in London!</h2>
                    </div>
                </div>
            </div> <!-- end of carousel inner -->
            <a href="#screenshot-carousel" class="left carousel-control" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
            <a href="#screenshot-carousel" class="right carousel-control" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div> <!-- end carousel -->
    </section>
</div>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>