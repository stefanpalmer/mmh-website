<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <link rel="shortcut icon" type="image/png" href="img/mmhlogo.png">
    <!-- Lightbox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Animate on Scroll -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/fb5fcbc804.js" crossorigin="anonymous"></script>
    <title>Macedonian Mission for Humanity</title>
</head>

<!-- Body -->
<body data-spy="scroll" data-target="#navbarResponsive" data-offset="65">

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
      <!-- Brand Logo -->
      <a href="#home" class="navbar-brand">
        <img src="img/mmhlogo.png" alt="logo image">
      </a>
      <!-- Toggle Feature -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span id="custom-toggler-icon">
          <i class="fas fa-bars"></i>
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <!-- Navbar List -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#objectives">Objectives</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#projects">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#photos">Photos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<!-- Home Page -->
<section id="home">
  <!-- Landing Page Image -->
  <div id="landing">
    <div id="home-wrap">
      <div id="home-inner">
      </div>
    </div>
    <!-- Landing Page Buttons -->
    <div id="home-buttons">
      <a href="#about" class="btn btn-lg btn-outline-danger btn-home" id="btn-home-about">OUR STORY</a>
      <!-- Bounce Down Arrow -->
      <a href="#about" class="down-arrow text-center">
        <div class="d-none d-md-block" id="arrow">
          <i class="fa fa-angle-down" aria-hidden="true"></i>
        </div>
      </a>
      <a href="#contact" class="btn btn-lg btn-outline-danger btn-home" id="btn-home-involved">GET INVOLVED</a>
    </div>
  </div>
</section>

<!-- About Page -->
<section id="about">
  <!-- About Content -->
  <div id="about-content-box" data-aos="fade-right">
    <div id="about-inner">
      <div id="about-title">
        <h3>About</h3>
        <div class="title-underline" id="about-underline"></div>
      </div>
      <div id="about-description">
        <p>
          We strive to build peace, harmony and economic improvement through
          education, cultural promotion and interethnic cooperation.
        </p>
      </div>
      <div>
        <a href="#objectives" class="btn btn-danger btn-full" id="btn-about-obj">Objectives</a>
        <a href="#projects" class="btn btn-danger btn-full" id="btn-about-proj">Projects</a>
      </div>
    </div>
  </div>
  <!-- About Image -->
  <div id="about-image">
  </div>  
</section>

<!-- Objectives Page -->
<section id="objectives">
  <div id="obj-wrap">
    <!-- Objectives Image -->
    <img src="img/volunteer.png" id="volunteer-img" class="img-fluid" alt="Volunteer Image">
    <!-- Objectives Content -->
    <div id="objectives-container" data-aos="fade-left">
      <h3>Objectives</h3>
      <div class="title-underline" id="obj-underline"></div>
      <ul>
        <li>To provide interim charitable & humanitarian aid to Macedonian communities in crises, helping them to regain responsibility for their own future thus resulting in a return to self-reliance.</li>
        <li>To share our internationally gained experience with local American communities and organizations involved in the projects.</li>
        <li>Serve as a professional resource for the exchange of ideas, methods and the establishment of contacts.</li>
        <li>Foster the professional advancement and development of those participating with our organizations.</li>
      </ul>
      <div>
        <a href="#projects" class="btn btn-danger btn-full" id="btn-obj-proj">Projects</a>
        <a href="#contact" class="btn btn-danger btn-full" id="btn-obj-contact">Contact</a>
      </div>
    </div>
  </div>
</section>

<!-- Projects Page -->
<section id="projects">
  <div class="container">
    <h3 id="projects-title">Projects</h3>
    <div class="title-underline" id="proj-underline"></div>
    <div class="row">
      <div class="col-md-6 proj-text" data-aos="fade-right">
        <h5>Medical</h5>
        <ul>
          <li>Shipments of medical equipment</li>
          <li>Supplied materials for organizations</li>
          <li>Raised funds for patients</li>
          <a href="articles.html#blankets-article">Learn More</a>
        </ul>
      </div>
      <div class="col-md-6" data-aos="fade-left">
        <img src="img/projects/hospital.jpg" class="img-fluid img-thumbnail" alt="Image of hospital">
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 order-last order-md-first" data-aos="fade-right">
        <img src="img/projects/education.jpg" class="img-fluid img-thumbnail" alt="Image of girls in school">
      </div>
      <div class="col-md-6 order-first order-md-last proj-text" data-aos="fade-left">
        <h5>Education</h5>
        <ul>
          <li>Shipments of computers, books, and other educational supplies</li>
          <li>Donations for schools and libraries</li>
          <li>Provided scholarships for higher education</li>
          <a href="articles.html#computers-article">Learn More</a>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 proj-text" data-aos="fade-right">
        <h5>Children</h5>
        <ul>
          <li>Clothing, food, blankets for orphanages</li>
          <li>Coats and boots in remote villages</li>
          <li>Building a Future Today project</li>
          <a href="articles.html#coats-article">Learn More</a>
        </ul>
      </div>
      <div class="col-md-6" data-aos="fade-left">
        <img src="img/projects/children.jpg" class="img-fluid img-thumbnail" alt="Image of children">
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 order-last order-md-first" data-aos="fade-right">
        <img src="img/projects/dog.jpg" class="img-fluid img-thumbnail" alt="Image of dog">
      </div>
      <div class="col-md-6 order-first order-md-last proj-text" data-aos="fade-left">
        <h5>Animals</h5>
        <ul>
          <li>Funds for animal shelter</li>
          <li>Raised awareness for stray animals</li>
          <li>Contributed to the adoption of stray animals</li>
          <a href="articles.html#animals-article">Learn More</a>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 proj-text" data-aos="fade-right">
        <h5>Art</h5>
        <ul>
          <li>Promotion of artists</li>
          <li>Galleries, workshops, and presentations</li>
          <li>Concerts and musical events</li>
          <a href="articles.html#recital-article">Learn More</a>
        </ul>
      </div>
      <div class="col-md-6" data-aos="fade-left">
        <img src="img/projects/art.jpg" class="img-fluid img-thumbnail" alt="Image of artist painting">
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 order-last order-md-first" data-aos="fade-right">
        <img src="img/projects/cultural.jpg" class="img-fluid img-thumbnail" alt="Image of cultural promotion event">
      </div>
      <div class="col-md-6 order-first order-md-last proj-text" data-aos="fade-left">
        <h5>Cultural Exchange</h5>
        <ul>
          <li>Educational events</li>
          <li>Promotion of tourism</li>
          <li>Promotion of Macedonian culture</li>
          <a href="articles.html#recital-article">Learn More</a>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Photo Gallery -->
<section id="photos">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <h3 id="photos-title">Photos</h3>
        <div class="title-underline" id="photos-underline"></div>
      </div>
      <div class="col-sm-6 col-md-3 p-0">
        <div class="portfolio-item overflow-hidden">
          <a href="img/gallery/gallery-img1.jpg" class="image-link" data-lightbox="gallery-set" data-title="Children with donated books">
            <img src="img/gallery/gallery-img1.jpg" alt="gallery image" class="expanded-image w-100">
          </a>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 p-0">
        <div class="portfolio-item overflow-hidden">
          <a href="img/gallery/gallery-img2.jpg" class="image-link" data-lightbox="gallery-set" data-title="Children with donated books">
            <img src="img/gallery/gallery-img2.jpg" alt="gallery image" class="expanded-image w-100">
          </a>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 p-0">
        <div class="portfolio-item overflow-hidden">
          <a href="img/gallery/gallery-img3.jpg" class="image-link" data-lightbox="gallery-set" data-title="Children with donated books">
            <img src="img/gallery/gallery-img3.jpg" alt="gallery image" class="expanded-image w-100">
          </a>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 p-0">
        <div class="portfolio-item overflow-hidden">
          <a href="img/gallery/gallery-img4.jpg" class="image-link" data-lightbox="gallery-set" data-title="Presentation to students">
            <img src="img/gallery/gallery-img4.jpg" alt="gallery image" class="expanded-image w-100">
          </a>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 p-0">
        <div class="portfolio-item overflow-hidden">
          <a href="img/gallery/gallery-img5.jpg" class="image-link" data-lightbox="gallery-set" data-title="Yuruk girl">
            <img src="img/gallery/gallery-img5.jpg" alt="gallery image" class="expanded-image w-100">
          </a>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 p-0">
        <div class="portfolio-item overflow-hidden">
          <a href="img/gallery/gallery-img6.jpg" class="image-link" data-lightbox="gallery-set" data-title="Yuruk girls in classroom">
            <img src="img/gallery/gallery-img6.jpg" alt="gallery image" class="expanded-image w-100">
          </a>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 p-0">
        <div class="portfolio-item overflow-hidden">
          <a href="img/gallery/gallery-img7.jpg" class="image-link" data-lightbox="gallery-set" data-title="After class">
            <img src="img/gallery/gallery-img7.jpg" alt="gallery image" class="expanded-image w-100">
          </a>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 p-0">
        <div class="portfolio-item overflow-hidden">
          <a href="img/gallery/gallery-img8.jpg" class="image-link" data-lightbox="gallery-set" data-title="Creating art">
            <img src="img/gallery/gallery-img8.jpg" alt="gallery image" class="expanded-image w-100">
          </a>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 p-0">
        <div class="portfolio-item overflow-hidden">
          <a href="img/gallery/gallery-img9.jpg" class="image-link" data-lightbox="gallery-set" data-title="Orthopedic hospital">
            <img src="img/gallery/gallery-img9.jpg" alt="gallery image" class="expanded-image w-100">
          </a>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 p-0">
        <div class="portfolio-item overflow-hidden">
          <a href="img/gallery/gallery-img10.jpg" class="image-link" data-lightbox="gallery-set" data-title="Orthopedic hospital">
            <img src="img/gallery/gallery-img10.jpg" alt="gallery image" class="expanded-image w-100">
          </a>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 p-0">
        <div class="portfolio-item overflow-hidden">
          <a href="img/gallery/gallery-img11.jpg" class="image-link" data-lightbox="gallery-set" data-title="Orthopedic hospital">
            <img src="img/gallery/gallery-img11.jpg" alt="gallery image" class="expanded-image w-100">
          </a>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 p-0">
        <div class="portfolio-item overflow-hidden">
          <a href="img/gallery/gallery-img12.jpg" class="image-link" data-lightbox="gallery-set" data-title="Orthopedic hospital">
            <img src="img/gallery/gallery-img12.jpg" alt="gallery image" class="expanded-image w-100">
          </a>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 p-0">
        <div class="portfolio-item overflow-hidden">
          <a href="img/gallery/gallery-img13.jpg" class="image-link" data-lightbox="gallery-set" data-title="Presenting about MMH">
            <img src="img/gallery/gallery-img13.jpg" alt="gallery image" class="expanded-image w-100">
          </a>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 p-0">
        <div class="portfolio-item overflow-hidden">
          <a href="img/gallery/gallery-img14.jpg" class="image-link" data-lightbox="gallery-set" data-title="Presenting about MMH">
            <img src="img/gallery/gallery-img14.jpg" alt="gallery image" class="expanded-image w-100">
          </a>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 p-0">
        <div class="portfolio-item overflow-hidden">
          <a href="img/gallery/gallery-img15.jpg" class="image-link" data-lightbox="gallery-set" data-title="Project planning">
            <img src="img/gallery/gallery-img15.jpg" alt="gallery image" class="expanded-image w-100">
          </a>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 p-0">
        <div class="portfolio-item overflow-hidden">
          <a href="img/gallery/gallery-img16.jpg" class="image-link" data-lightbox="gallery-set" data-title="Macedonian stand at international night">
            <img src="img/gallery/gallery-img16.jpg" alt="gallery image" class="expanded-image w-100">
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact Page -->

<?php

$msg = '';
$msgClass = '';

if(filter_has_var(INPUT_POST, 'submit')){

  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);
  
  if(!empty($email) && !empty($name) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
      $msg = 'Not a valid email address';
      $msgClass = 'alert-danger';
    } else {
      $toEmail = 'contact@mmhumanity.com';
      $subject = 'Contact Request From ' . $name;
      $body = "You have received an email from " .$name.":\r\n".$message;
      $headers = "MIME-Version: 1.0" . "\r\n" . "Content-Type:text/html;charset=UTF-8" . "\r\n"
      . "From: " .$name . "<" .$email . ">" . "\r\n";

      if(mail($toEmail, $subject, $body, $headers)) {
        $msg = 'Message has been sent';
        $msgClass = 'alert-success';
      } else {
        $msg = 'Message was not sent';
        $msgClass = 'alert-danger';
      }
    }
  } else {
    $msg= 'Please fill in all fields';
    $msgClass = 'alert-danger';
  }
}

?>

<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div id="contact-left">
          <img src="img/mmhlogo.png" alt="Image of logo">
          <p>Volunteering brings personal fulfillment to the
            lives of many people. The Macedonian Mission for Humanity offers a
            variety of ways for individuals and companies to become involved in a
            cause that really makes a difference. Contact us to learn how you can
            help and find a volunteer opportunity that is right for you!</p>
        </div>
      </div>
      <div class="col-md-6">
        <div id="contact-right">
          <?php if($msg != ''): ?>
            <div class="alert <?php echo $msgClass;?>"><?php echo $msg;?></div>
          <?php endif; ?>
          <h4>Contact Us <span style="color: red;"></span></h4>
          <form method="post" id="contact-form" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <input type="text" id="name" name="name" placeholder="Full Name" class="form-control f-contact" 
            value="<?php echo isset($_POST["name"]) ? $name : '';?>">
            <input type="text" id="email" name="email" placeholder="Email" class="form-control f-contact" 
            value="<?php echo isset($_POST["email"]) ? $email : '';?>">
            <textarea id="message" name="message" placeholder="Message" rows="5" class="form-control f-contact" 
            value="<?php echo isset($_POST["message"]) ? $message : '';?>"></textarea>
            <button type="submit" name="submit" class="btn" id="btn-contact">SEND</button>
          </form>
        </div>
      </div>
      
    </div>
  </div>
</section>

<!-- Top Scroll -->
<a href="#home" class="btn" id="top-scroll" role="button">
  <h4> ^ </h4>
</a>

<!-- Script Files -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js" integrity="sha512-k2GFCTbp9rQU412BStrcD/rlwv1PYec9SNrkbQlo6RZCf75l6KcC3UwDY8H5n5hl4v77IDtIPwOk9Dqjs/mMBQ==" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="script.js"></script>
<script>AOS.init({disable: 'phone', offset: 300, duration: 700, once: true});</script>
</body>
</html>