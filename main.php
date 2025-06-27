<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // البيانات من الفورم
    $name = htmlspecialchars($_POST['subject']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // إعدادات الإيميل
    $to = "Info@smartcat.sa";
    $subject = "رسالة جديدة من سمارت كات";
    $body = "الموضوع: $name\n";
    $body .= "البريد الإلكتروني: $email\n\n";
    $body .= "الرسالة:\n$message";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    // إرسال الإيميل
    $mailSent = mail($to, $subject, $body, $headers);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Smartcat</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  
  <style>
    .contactus img {
      max-width: 100%;
      height: auto;
      border-radius: 15px;
    }
  </style>
</head>

<body>

  <!-- Spinner Start -->
  <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <!-- Spinner End -->

  <!-- Navbar & Hero Start -->
  <div class="container-fluid px-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-light px-4 sticky-top">
      <a href="index.html" class="navbar-brand p-0">
        <div>
          <img src="img/Logo-1.png" alt="" style="height: 90px;">
        </div>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav pt-2 pt-lg-0 mx-lg-4">
          <a href="index.html" class="nav-item nav-link active" data-i18n="home">Home</a>
          <a href="about.html" class="nav-item nav-link" data-i18n="about">About</a>

          <!-- Dropdown خاص بالخدمات -->
          <div class="nav-item dropdown position-static">
            <a class="nav-link dropdown-toggle" href="project.html" data-bs-toggle="dropdown" data-i18n="services">Services</a>
            <div class="dropdown-menu w-100 mt-0 rounded-0 border-top-0 shadow service-dropdown p-0">
              <div class="row g-0">
                <!-- القائمة الجانبية -->
                <div class="col-md-3 bg-light p-3 border-end">
                  <ul class="nav flex-column service-tabs">
                    <li class="nav-item mb-2">
                      
                      <a class="nav-link " href="project.html" 
                        data-i18n="services">
                        Artificial Intelligence & ML 
                      </a>
                    </li>
                    <li class="nav-item mb-2">
                      
                      <a class="nav-link " href="erp.html" data-target="#service1"
                        data-i18n="services_section-service1-title">
                        Artificial Intelligence & ML 
                      </a>
                    </li>
                    <li class="nav-item mb-2">
                      <a class="nav-link" href="ai.html" data-target="#service2"
                        data-i18n="services_section-service2-title">
                        Generative AI & GPT  
                      </a>
                    </li>
                    <li class="nav-item mb-2">
                      <a class="nav-link" href="cloud.html" data-target="#service3"
                        data-i18n="services_section-service3-title">
                        Big Data & Cloud 
                      </a>
                    </li>
                    
                  </ul>
                </div>

                <!-- المحتوى -->
                <div class="col-md-9 p-4">
                  <div class="tab-content">

                    <!-- Service 1 -->
                    <div class="tab-pane fade show " id="service1">
                      <div class="row">
                        <div class="col-md-6">
                          <ul class="list-unstyled fs-6 fw-medium">
                            <li>
                              <a href="erp.html" class="d-flex align-items-center gap-2">
                                <i class="fa fa-brain text-primary"></i>
                                <span data-i18n="title_erp">AI Consulting</span>
                              </a>
                            </li>
                            <li class="mt-2">
                              <a href="erp.html" class="d-flex align-items-center gap-2">
                                <i class="fa fa-robot text-primary"></i>
                                <span data-i18n="title_rpa">AI Product Development</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <div class="col-md-6">
                          <img src="img/9.jpeg" class="img-fluid rounded shadow" alt="Service Preview">
                        </div>
                      </div>
                    </div>

                    <!-- Service 2 -->
                    <div class="tab-pane fade" id="service2">
                      <div class="row">
                        <div class="col-md-6">
                          <ul class="list-unstyled fs-6 fw-medium">
                            <li>
                              <a href="ai.html" class="d-flex align-items-center gap-2">
                                <i class="fa fa-comments text-primary"></i>
                                <span data-i18n="custom_solutions">Chatbot Integration</span>
                              </a>
                            </li>
                            <li class="mt-2">
                              <a href="ai.html" class="d-flex align-items-center gap-2">
                                <i class="fa fa-magic text-primary"></i>
                                <span data-i18n="ai_ml">GPT Model Tuning</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <div class="col-md-6">
                          <img src="img/about-img.jpg" class="img-fluid rounded shadow" alt="Service Preview">
                        </div>
                      </div>
                    </div>

                    <!-- Service 3 -->
                    <div class="tab-pane fade" id="service3">
                      <div class="row">
                        <div class="col-md-6">
                          <ul class="list-unstyled fs-6 fw-medium">
                            <li>
                              <a href="cloud.html" class="d-flex align-items-center gap-2">
                                <i class="fa fa-database text-primary"></i>
                                <span data-i18n="title_data_management">Data Lakes</span>
                              </a>
                            </li>
                            <li class="mt-2">
                              <a href="cloud.html" class="d-flex align-items-center gap-2">
                                <i class="fa fa-cloud-upload-alt text-primary"></i>
                                <span data-i18n="title_cloud_solutions">Cloud Migration</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <div class="col-md-6">
                          <img src="img/7.webp" class="img-fluid rounded shadow" alt="Service Preview">
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

              </div>
            </div>
          </div>

          <a href="contact.html" class="nav-item nav-link" data-i18n="contact">Contact</a>
        </div>

        <!-- زر اللغة -->
        <div class="d-flex align-items-center flex-nowrap pt-3 pt-lg-0">
          <div class="dropdown ms-lg-3">
            <button id="languageToggle" class="btn btn-secondary py-2 px-2" style="min-width: 100px;">عربي</button>
            <div class="dropdown-menu dropdown-menu-end">
              <a class="dropdown-item" href="#" data-lang="en">English</a>
              <a class="dropdown-item" href="#" data-lang="ar">العربية</a>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const tabLinks = document.querySelectorAll(".service-tabs .nav-link");
      const tabPanes = document.querySelectorAll(".tab-pane");

      tabLinks.forEach(link => {
        link.addEventListener("mouseenter", function (e) {
          const targetId = link.getAttribute("data-target");

          // إزالة active من جميع العناصر
          tabLinks.forEach(l => l.classList.remove("active"));
          tabPanes.forEach(pane => {
            pane.classList.remove("show", "active");
          });

          // تفعيل العنصر المستهدف
          link.classList.add("active");
          const targetPane = document.querySelector(targetId);
          if (targetPane) {
            targetPane.classList.add("show", "active");
          }
        });
      });
    });
  </script>
  <!-- Navbar & Hero End -->

  <!-- Header Start -->
  <div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
      <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s" data-i18n="contact">Contact Us</h4>
    </div>
  </div>
  <!-- Header End -->

  <!-- Contact Start -->
  <div class="container-fluid contact bg-light py-5">
    <div class="container py-5">
      <div class="row g-5 mb-5">
        <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
          <div class="text-center mx-auto pb-5" style="max-width: 800px;">
            <h2 class="display-4 text-capitalize mb-3" data-i18n="send_message_title">Send Your Message</h2>
          </div>
          <form id="contactForm" method="POST" action="">
            <div class="row g-3">
              <div class="col-lg-12">
                <div class="form-floating border border-secondary" style="border-radius: 20px;">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                    style="border-radius: 20px;" required>
                  <label for="email" data-i18n="your_email">Your Email</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating border border-secondary" style="border-radius: 20px;">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                    style="border-radius: 20px;" required>
                  <label for="subject" data-i18n="subject">Subject</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating border border-secondary" style="border-radius: 20px;">
                  <textarea class="form-control" name="message" placeholder="Leave a message here" id="message"
                    style="height: 160px; border-radius: 20px;" required></textarea>
                  <label for="message" data-i18n="message">Message</label>
                </div>
              </div>
              <div class="col-12" style="border-radius: 20px;">
                <button type="submit" class="btn btn-primary w-100 py-3" data-i18n="send_message_button">Send Message</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-6 wow fadeInLeft contactus">
          <img src="img/feature.png" alt="" srcset="">
        </div>
      </div>
    </div>
  </div>

  <!-- Feedback Modal -->
  <div class="modal fade" id="feedbackModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content text-center">
        <div class="modal-header">
          <h5 class="modal-title" id="feedbackModalLabel">نتيجة الإرسال</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="إغلاق"></button>
        </div>
        <div class="modal-body" id="feedbackMessage">
          <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
              if (isset($mailSent)) {
                  if ($mailSent) {
                      echo "تم إرسال الرسالة بنجاح.";
                  } else {
                      echo "حدث خطأ أثناء الإرسال، حاول مرة أخرى.";
                  }
              }
          }
          ?>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Start -->
  <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s" id="footer">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-md-6 col-lg-6 col-xl-3">
          <div class="footer-item d-flex flex-column">
            <div class="footer-item">
              <h4 class="text-white mb-4" data-i18n="company">Newsletter</h4>
              <p class="mb-3" data-i18n="description4">
                Be the first to get the latest news and exclusive updates directly in your inbox.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
          <div class="footer-item d-flex flex-column">
            <h4 class="text-white mb-4" data-i18n="explore">Explore</h4>
            <a href="index.html"><i class="fas fa-angle-right me-2"></i> <span data-i18n="home">Home</span></a>
            <a href="service.html"><i class="fas fa-angle-right me-2"></i> <span
                data-i18n="services">Services</span></a>
            <a href="about.html"><i class="fas fa-angle-right me-2"></i> <span data-i18n="about">About Us</span></a>
            <a href="team.html"><i class="fas fa-angle-right me-2"></i> <span data-i18n="team">Our Team</span></a>
            <a href="contact.html"><i class="fas fa-angle-right me-2"></i> <span data-i18n="contact">Contact
                Us</span></a>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
          <div class="footer-item d-flex flex-column">
            <h4 class="text-white mb-4" data-i18n="our_services">Our Services</h4>
            <a href="erp.html"><i class="fas fa-angle-right me-2"></i> <span
                data-i18n="services_section-service1-title">ERP
                Systems</span></a>
            <a href="ai.html"><i class="fas fa-angle-right me-2"></i> <span
                data-i18n="services_section-service2-title">RPA - Robotic
                Process Automation</span></a>
            <a href="cloud.html"><i class="fas fa-angle-right me-2"></i> <span
                data-i18n="services_section-service3-title">Custom Software Solutions</span></a>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
          <div class="footer-item d-flex flex-column">
            <h4 class="text-white mb-4" data-i18n="contact_info">Contact Info</h4>
            <a href="mailto:info@smartcart.sa"><i class="fas fa-envelope me-2"></i> <span
                data-i18n="email">info@smartcart.sa</span></a>
            <a href="tel:+966554442151" class="mb-3"><i class="fas fa-phone me-2"></i> <span dir="ltr"
                data-i18n="phone">+966-55 444 2151</span></a>
            <div class="footer-btn d-flex align-items-center">
              <a class="btn  btn-md-square me-2" href="https://x.com/sasmartcat?s=11" target="_blank" rel="noopener"><i
                  class="fab fa-twitter text-white"></i></a>
              <a class="btn  btn-md-square me-2" href="https://www.instagram.com/smartcat.sa?igsh=MW0yYmZ3a3pmbDZ0Yw=="
                target="_blank" rel="noopener"><i class="fab fa-instagram text-white"></i></a>
              <a class="btn  btn-md-square me-2" href="https://www.linkedin.com/in/smartcatsa" target="_blank"
                rel="noopener"><i class="fab fa-linkedin-in text-white"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-secondary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
  <script src="js/translate.js"></script>

  <script>
    // Show modal if form was submitted
    $(document).ready(function() {
      <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        var feedbackModal = new bootstrap.Modal(document.getElementById('feedbackModal'));
        feedbackModal.show();
        
        // Close the modal after 5 seconds
        setTimeout(function() {
          feedbackModal.hide();
        }, 5000);
      <?php endif; ?>

      // Handle form submission
      $('#contactForm').on('submit', function(e) {
        e.preventDefault();
        
        // You can add AJAX submission here if needed
        // For now, we'll let the normal form submission proceed
        this.submit();
      });
    });
  </script>
</body>
</html>