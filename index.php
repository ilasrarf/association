<?php
include('language.php');
$ar_select='';
$fr_select='';
$language='';
if ((isset($_GET['language']) && $_GET['language']=='ar') || !isset($_GET['language'])){
  $ar_select='selected';
  $language='ar';
}else{
  $fr_select='selected';
  $language='fr';
}
?>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $titel_association[$language]['0']?></title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/logo.png" />
    <!-- Bootstrap Icons-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <!-- Google fonts-->
    <link
      href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
      rel="stylesheet"
      type="text/css"
    />
    <!-- SimpleLightbox plugin CSS-->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css"
      rel="stylesheet"
    />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body dir="<?php echo $deriction[$language]['0']?>">
    <!-- Navigation-->
    <nav
      class="navbar navbar-expand-lg navbar-light fixed-top py-3"
      id="mainNav"
    >
      <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#"
          ><img style="width: 65px" src="assets/img/logo.png"
        /></a>
        <button
          class="navbar-toggler navbar-toggler-right"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ms-0 my-2 my-lg-0 ml-lg-auto align-items-start align-items-lg-center">
            <li class="nav-item">
              <a class="nav-link" href="#"><?php echo $top_nav[$language]['0']?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about"><?php echo $top_nav[$language]['1']?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services"><?php echo $top_nav[$language]['2']?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolio"><?php echo $top_nav[$language]['3']?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#uu"><?php echo $top_nav[$language]['4']?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact"><?php echo $top_nav[$language]['5']?></a>
            </li>
             <!--Dropdown 2-->
            <div class="dropdown nav-item mx-0 ">
              <button class="btn globe2 bi bi-globe2 rounded-pill " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
               <?php echo $top_nav_language[$language]['0']?>
              </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" 
              onchange="set_language() " name="language" id="language">
              <li><a href="?language=ar" class="dropdown-item text-center" ><img src="assets/img/morocco.png"> <?php echo $dropdown[$language]['0']?></a></li>
              <li><a href="?language=fr" class="dropdown-item text-center" ><img src="assets/img/france.png"> <?php echo $dropdown[$language]['1']?></a></li>
            </ul>
          </div>
          <!--fin dropdown 2-->
          </ul>
         
        </div>
      </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
      <div class="container px-4 px-lg-5 h-100">
        <div
          class="
            row
            gx-4 gx-lg-5
            h-100
            align-items-center
            justify-content-center
            text-center
          "
        >
          <div class="col-lg-8 align-self-end">
            <h1 class="text-white font-weight-bold">
              جمعية خطوة للأشخاص في وضعية إعاقة
            </h1>
            <h3 class="text-light">ASSOCIATION KHOUTWA POUR LES PERSONNES EN SITUATION D'HANDICAPE</h3>
            <hr class="divider" />
          </div>
          <div class="col-lg-8 align-self-baseline">
            <p class="text-light fs-5 mb-5"></p>
            <a class="btn third btn-xl border border-secondary" href="#about"
              ><?php echo $button1[$language]['0']?></a
            >
          </div>
        </div>
      </div>
    </header>
    <!-- About-->
    <section class="page-section bg-primary" id="about">
      <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
          <div class="col-lg-8 text-center">
            <h2 class="text-white mt-0"><?php echo $about[$language]['0']?></h2>
            <hr class="divider divider-danger" />
            <p class="text-white-75 mb-4 fs-5">
             <?php echo $about[$language]['1']?>
            </p>
            <a class="btn third btn-xl border border-secondary" href="#services"
              ><?php echo $button2[$language]['0']?></a
            >
          </div>
        </div>
      </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="services">
      <div class="container px-4 px-lg-5">
        <h2 class="text-center mt-0"><?php echo $services[$language]['0']?></h2>
        <hr class="divider" />
        <p class="text-center">
          <?php echo $services[$language]['1']?>
        </p>
        <div class="row gx-4 gx-lg-5">
          <div class="col-lg-4 col-md-6 text-center">
            <div class="mt-5">
              <div class="mb-2">
                <i class="bi bi-briefcase fs-1 text-danger"></i>
              </div>
              <h3 class="h4 mb-2"><?php echo $services[$language]['2']?></h3>
              <p class="text-muted mb-0">
                <?php echo $services[$language]['3']?>
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 text-center">
            <div class="mt-5">
              <div class="mb-2">
                <i class="bi bi-heart fs-1 text-danger"></i>
              </div>
              <h3 class="h4 mb-2"><?php echo $services[$language]['4']?></h3>
              <p class="text-muted mb-0">
                <?php echo $services[$language]['5']?>
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 text-center">
            <div class="mt-5">
              <div class="mb-2">
                <i class="bi bi-recycle fs-1 text-danger"></i>
              </div>
              <h3 class="h4 mb-2"><?php echo $services[$language]['6']?></h3>
              <p class="text-muted mb-0">
                <?php echo $services[$language]['7']?>
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 text-center">
            <div class="mt-5">
              <div class="mb-2"><i class="bi-globe fs-1 text-danger"></i></div>
              <h3 class="h4 mb-2"><?php echo $services[$language]['8']?></h3>
              <p class="text-muted mb-0">
                <?php echo $services[$language]['9']?>
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 text-center">
            <div class="mt-5">
              <div class="mb-2">
                <i class="bi bi-award fs-1 text-danger"></i>
              </div>
              <h3 class="h4 mb-2"><?php echo $services[$language]['10']?></h3>
              <p class="text-muted mb-0">
                <?php echo $services[$language]['11']?>
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 text-center">
            <div class="mt-5">
              <div class="mb-2">
                <i class="bi bi-building fs-1 text-danger"></i>
              </div>
              <h3 class="h4 mb-2"><?php echo $services[$language]['12']?></h3>
              <p class="text-muted mb-0">
                <?php echo $services[$language]['13']?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Portfolio-->
    <div id="portfolio">
      <div class="container-fluid p-0">
        <h2 class="text-center mt-0"><?php echo $portfolio[$language]['0']?></h2>
        <hr class="divider" />
	<!-- Photos-->
        <div class="row g-0">
          <div class="col-lg-4 col-sm-6">
            <a
              class="portfolio-box "
              href="assets/img/portfolio/fullsize/9.png"
            >
              <img
                class="img-fluid"
                src="assets/img/portfolio/thumbnails/9.png"
                alt="..."
              />
              <div class="portfolio-box-caption">
                <div class="project-category fs-4 text-white-50"><?php echo $photos[$language]['0']?></div>
                <div class="project-name text-light">
                  <?php echo $photos[$language]['1']?>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a
              class="portfolio-box"
              href="assets/img/portfolio/fullsize/2.png"
              
            >
              <img
                class="img-fluid"
                src="assets/img/portfolio/thumbnails/2.png"
                alt="..."
              />
              <div class="portfolio-box-caption">
                <div class="project-category fs-4 text-white-50"><?php echo $photos[$language]['2']?></div>
                <div class="project-name text-light">
                  <?php echo $photos[$language]['3']?>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a
              class="portfolio-box"
              href="assets/img/portfolio/fullsize/3.png"
              
            >
              <img
                class="img-fluid"
                src="assets/img/portfolio/thumbnails/3.png"
                alt="..."
              />
              <div class="portfolio-box-caption">
                <div class="project-category fs-4 text-white-50"><?php echo $photos[$language]['4']?></div>
                <div class="project-name text-light"><?php echo $photos[$language]['5']?></div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a
              class="portfolio-box"
              href="assets/img/portfolio/fullsize/4.png"
            >
              <img
                class="img-fluid"
                src="assets/img/portfolio/thumbnails/4.png"
                alt="..."
              />
              <div class="portfolio-box-caption">
                <div class="project-category fs-4 text-white-50">
                  <?php echo $photos[$language]['6']?>
                </div>
                <div class="project-name text-light">
                  <?php echo $photos[$language]['7']?>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a
              class="portfolio-box"
              href="assets/img/portfolio/fullsize/5.png"
            >
              <img
                class="img-fluid"
                src="assets/img/portfolio/thumbnails/5.png"
                alt="..."
              />
              <div class="portfolio-box-caption">
                <div class="project-category fs-4 text-white-50"><?php echo $photos[$language]['8']?></div>
                <div class="project-name text-light"><?php echo $photos[$language]['9']?>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a
              class="portfolio-box"
              href="assets/img/portfolio/fullsize/1.png"
            >
              <img
                class="img-fluid"
                src="assets/img/portfolio/thumbnails/1.png"
                alt="..."
              />
              <div class="portfolio-box-caption">
                <div class="project-category fs-4 text-white-50">
                  <?php echo $photos[$language]['10']?>
                </div>
                <div class="project-name text-light">
                  <?php echo $photos[$language]['11']?>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a
              class="portfolio-box"
              href="assets/img/portfolio/fullsize/7.png"
            >
              <img
                class="img-fluid"
                src="assets/img/portfolio/thumbnails/7.png"
                alt="..."
              />
              <div class="portfolio-box-caption">
                <div class="project-category fs-4 text-white-50">
                  <?php echo $photos[$language]['12']?>
                </div>
                <div class="project-name text-light">
                  <?php echo $photos[$language]['13']?>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a
              class="portfolio-box"
              href="assets/img/portfolio/fullsize/8.png"
            >
              <img
                class="img-fluid"
                src="assets/img/portfolio/thumbnails/8.png"
                alt="..."
              />
              <div class="portfolio-box-caption">
                <div class="project-category fs-4 text-white-50">
                  <?php echo $photos[$language]['14']?>
                </div>
                <div class="project-name text-light">
                  <?php echo $photos[$language]['15']?>
                </div>
              </div>
            </a>
          </div>
          <!-- no -->
          <div class="col-lg-4 col-sm-6">
            <a
              class="portfolio-box"
              href="assets/img/portfolio/fullsize/16.png"
            >
              <img
                class="img-fluid"
                src="assets/img/portfolio/thumbnails/16.png"
                alt="..."
              />
              <div class="portfolio-box-caption">
                <div class="project-category fs-3 text-white-50">
                  <?php echo $photos[$language]['16']?>
                </div>
                <div class="project-name text-light">
                  <?php echo $photos[$language]['17']?>
                </div>
              </div>
            </a>
          </div>
          <!-- no -->
          <div class="col-lg-4 col-sm-6">
            <a
              class="portfolio-box"
              href="assets/img/portfolio/fullsize/10.png"
            >
              <img
                class="img-fluid"
                src="assets/img/portfolio/thumbnails/10.png"
                alt="..."
              />
              <div class="portfolio-box-caption">
                <div class="project-category fs-4 text-white-50">
                  <?php echo $photos[$language]['18']?>
                </div>
                <div class="project-name text-light">
                  <?php echo $photos[$language]['19']?>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a
              class="portfolio-box"
              href="assets/img/portfolio/fullsize/11.png"
            >
              <img
                class="img-fluid"
                src="assets/img/portfolio/thumbnails/11.png"
                alt="..."
              />
              <div class="portfolio-box-caption">
                <div class="project-category fs-4 text-white-50">
                  <?php echo $photos[$language]['20']?>
                </div>
                <div class="project-name text-light">
                  <?php echo $photos[$language]['21']?>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a
              class="portfolio-box"
              href="assets/img/portfolio/fullsize/12.png"
            >
              <img
                class="img-fluid"
                src="assets/img/portfolio/thumbnails/12.png"
                alt="..."
              />
              <div class="portfolio-box-caption">
                <div class="project-category fs-4 text-white-50">
                  <?php echo $photos[$language]['22']?>
                </div>
                <div class="project-name text-light">
                  <?php echo $photos[$language]['23']?>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a
              class="portfolio-box"
              href="assets/img/portfolio/fullsize/13.png"
            >
              <img
                class="img-fluid"
                src="assets/img/portfolio/thumbnails/13.png"
                alt="..."
              />
              <div class="portfolio-box-caption">
                <div class="project-category fs-4 text-white-50">
                  <?php echo $photos[$language]['24']?>
                </div>
                <div class="project-name text-light">
                  <?php echo $photos[$language]['25']?>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a
              class="portfolio-box"
              href="assets/img/portfolio/fullsize/14.png"
            >
              <img
                class="img-fluid"
                src="assets/img/portfolio/thumbnails/14.png"
                alt="..."
              />
              <div class="portfolio-box-caption">
                <div class="project-category fs-4 text-white-50">
                  <?php echo $photos[$language]['26']?>
                </div>
                <div class="project-name text-light">
                  <?php echo $photos[$language]['27']?>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a
              class="portfolio-box"
              href="assets/img/portfolio/fullsize/15.png"
            >
              <img
                class="img-fluid"
                src="assets/img/portfolio/thumbnails/15.png"
                alt="..."
              />
              <div class="portfolio-box-caption">
                <div class="project-category fs-4 text-white-50">
                  <?php echo $photos[$language]['28']?>
                </div>
                <div class="project-name text-light">
                  <?php echo $photos[$language]['29']?>
                </div>
              </div>
            </a>
          </div>
          
        </div>
      </div>
    </div>
    <!-- Call to action-->
    <section class="page-section bg-dark text-white" id="uu">
      <div class="container px-4 px-lg-5 text-center">
        <h2 class="mb-4 text-center"><?php echo $call_to_action[$language]['0']?></h2>
        <p class="fs-2 text-center"><?php echo $call_to_action[$language]['1']?></p>
        <p class="fs-1 text-center">0/00008225421</p>
      </div>
    </section>
    <!-- Contact-->
    <section class="page-section" id="contact">
      <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
          <div class="col-lg-8 col-xl-6 text-center">
            <h2 class="mt-0"><?php echo $contact[$language]['0']?></h2>
            <hr class="divider" />
            <p class="text-muted mb-5">
              <?php echo $contact[$language]['1']?>
            </p>
          </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
          <div class="col-lg-6">
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
              <!-- Name input-->
              <div class="form-floating mb-3">
                <input
                  class="form-control"
                  id="name"
                  type="text"
                  placeholder="Enter your name..."
                  data-sb-validations="required"
                />
                <label for="name"><?php echo $contact[$language]['2']?></label>
                <div class="invalid-feedback" data-sb-feedback="name:required">
                  <?php echo $contact[$language]['3']?>
                </div>
              </div>
              <!-- Email address input-->
              <div class="form-floating mb-3">
                <input
                  class="form-control"
                  id="email"
                  type="email"
                  placeholder="name@example.com"
                  data-sb-validations="required,email"
                />
                <label for="email"><?php echo $contact[$language]['4']?></label>
                <div class="invalid-feedback" data-sb-feedback="email:required">
                  <?php echo $contact[$language]['5']?>
                </div>
                <div class="invalid-feedback" data-sb-feedback="email:email">
                  <?php echo $contact[$language]['6']?>
                </div>
              </div>
              <!-- Phone number input-->
              <div class="form-floating mb-3">
                <input
                  class="form-control"
                  id="phone"
                  type="tel"
                  placeholder="(123) 456-7890"
                  data-sb-validations="required"
                />
                <label for="phone"><?php echo $contact[$language]['7']?></label>
                <div class="invalid-feedback" data-sb-feedback="phone:required">
                  <?php echo $contact[$language]['8']?>
                </div>
              </div>
              <!-- Message input-->
              <div class="form-floating mb-3">
                <textarea
                  class="form-control"
                  id="body"
                  type="text"
                  placeholder="Enter your message here..."
                  style="height: 10rem"
                  data-sb-validations="required"
                ></textarea>
                <label for="body"><?php echo $contact[$language]['9']?></label>
                <div class="invalid-feedback" data-sb-feedback="body:required">
                  <?php echo $contact[$language]['10']?>
                </div>
              </div>
              <!-- Submit success message-->
              <!---->
              <!-- This is what your users will see when the form-->
              <!-- has successfully submitted-->
              <div class="d-none" id="submitSuccessMessage">
                <div class="text-center mb-3">
                  <div class="fw-bolder"><h4 class="sent-notification"></h4></div>
                  <br />
                </div>
              </div>
              <!-- Submit error message-->
              <!---->
              <!-- This is what your users will see when there is-->
              <!-- an error submitting the form-->
              <div class="d-none" id="submitErrorMessage">
                <div class="text-center text-danger mb-3">
                  <?php echo $contact[$language]['11']?>
                </div>
              </div>
              <!-- Submit Button-->
              <div class="d-grid">
                <button
                  class="btn btn-primary btn-xl disabled"
                  id="submitButton"
                  type="submit"
                  onclick="sendEmail()"
                >
                  <?php echo $contact[$language]['12']?>
                </button>
                
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer-->
    <section class="container-fluid sec-footer">
      <div class="container">
          <div class="row">
              <div class="col">
                  <div class="card desc-box my-4">
                      <div class="card-body">
                          <div class="card-title"><?php echo $footer[$language]['0']?></div>
                          <div class="card-text">
                            <?php echo $footer[$language]['1']?>
                          </div>
                      </div>
                  </div><!--.card-->
              </div><!--.col-->
              <div class="col">
                  <div class="card desc-box my-4">
                      <div class="card-body">
                          <div class="card-title"><?php echo $footer[$language]['2']?></div>
                          <div class="card-text">
                              <div class="row">
                                  <div class="col">
                                    <i class="bi bi-telephone-fill"></i>
                                      <span> <strong>0600503149</strong> </span>
                                  </div><!--.col-->
                              </div><!--.row-->
                              <div class="row">
                                  <div class="col">
                                    <i class="bi bi-geo-alt-fill"></i>
                                      <span>الجماعة الترابية الدراركة، قيادة الدراكة جهة سوس ماسة، عمالة أكادير إداوتنان</span>
                                  </div><!--.col-->
                              </div><!--.row-->
                              <div class="row">
                                  <div class="col">
                                    <i class="bi bi-envelope-fill"></i>
                                      <span>info@dsdsdsds.ir</span>
                                  </div><!--.col-->
                              </div><!--.row-->
                          </div><!--.card-text-->
                      </div>
                  </div><!--.card-->
              </div><!--.col-->
              <div class="col text-center my-5">
                  <h5>جمعية خطوة للأشخاص في وضعية إعاقة</h5>
                  <h5>Association Khatwa pour les personnes handicapées</h5>
                  <br class="clearfix">
                  <a href="https://www.facebook.com/%D8%AC%D9%85%D8%B9%D9%8A%D8%A9-%D8%AE%D8%B7%D9%88%D8%A9-%D9%84%D9%84%D9%85%D8%B9%D8%A7%D9%82%D9%8A%D9%86-%D8%A7%D9%84%D8%AF%D8%B1%D8%A7%D8%B1%D9%83%D8%A9-636736269826415/" class="snip1472"><i class="bi bi-facebook" style="position: absolute;top: 12px;left:13px;"></i></i></a>
                  <a href="" class="snip1472"><i class="bi bi-instagram" style="position: absolute;top: 12px;left:13px;"></i></a>
              </div><!--.col-->
          </div><!--.row-->
      </div>
  </section>
    <!-- footee end -->

    <!-- button to go up -->
      <button onclick="topFunction()" id="myBtn" class="<?php echo $button_to_up[$language]['0']?>" title="Go to top"><i class="bi bi-caret-up-fill"></i></button>
    <!-- button to go up end -->

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
      function sendEmail() {
        var name = $("#name");
        var email = $("#email");
        var phone = $("#phone");
        var body = $("#body");

        if (
          isNotEmpty(name) &&
          isNotEmpty(email) &&
          isNotEmpty(phone) &&
          isNotEmpty(body)
        ) {
          $.ajax({
            url: "sendEmail.php",
            method: "POST",
            dataType: "json",
            data: {
              name: name.val(),
              email: email.val(),
              phone: phone.val(),
              body: body.val(),
            },
            success: function (response) {
              $("#contactForm")[0].reset();
              $(".sent-notification").text("<?php echo $contact[$language]['13']?>");
            },
          });
        }
      }

      function isNotEmpty(caller) {
        if (caller.val() == "") {
          caller.css("border", "1px solid red");
          return false;
        } else caller.css("border", "");

        return true;
      }
      function set_language() {
        var language=jQuery('#language').val();
        window.location.href='https://assosiation-hkoutwa.herokuapp.com/?language='+language;
      }
    </script>
  </body>
</html>