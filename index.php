<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>School Management System</title>
  <?php include("includes/header.php") ?>

  <!-- =====================================HERO-SECTION========================================================== -->
  <section class="home-hero">
    <div class="container">
      <div class="hero-text">
        <h2>Welcome to School Management System</h2>
        <p>
          Experience the future of education management. Easily track student
          progress, manage grades efficiently, and stay connected with
          parents, teachers, and students seamlessly. Empowering schools with
          innovative tools for better communication and streamlined
          operations.
        </p>
      </div>
    </div>
  </section>

  <!-- =====================================FEATURES-SECTION============================================================== -->
  <section class="features py-5" id="features">
    <div class="container">
      <!-- Row 1 -->
      <h2 class="text-center mb-5">Robust Features</h2>
      <div class="row g-4">
        <div class="col-lg-3 col-md-6">
          <div class="card feature-card shadow-sm h-100">
            <div class="card-body text-center">
              <i class="fas fa-calendar-check icon mb-3"></i>
              <h5 class="card-title">Attendance Tracking</h5>
              <p class="card-text">
                Track attendance for both students and staff efficiently.
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="card feature-card shadow-sm h-100">
            <div class="card-body text-center">
              <i class="fas fa-user-graduate icon mb-3"></i>
              <h5 class="card-title">Student Management</h5>
              <p class="card-text">
                Manage enrollment, update information, and view student
                documents.
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="card feature-card shadow-sm h-100">
            <div class="card-body text-center">
              <i class="fas fa-chalkboard-teacher icon mb-3"></i>
              <h5 class="card-title">Teacher and Staff Management</h5>
              <p class="card-text">
                Streamline teacher and staff profiles and manage their data.
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="card feature-card shadow-sm h-100">
            <div class="card-body text-center">
              <i class="fas fa-clipboard-list icon mb-3"></i>
              <h5 class="card-title">Examination</h5>
              <p class="card-text">
                Online exams, quiz assessments, and performance tracking.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Row 2 -->
      <div class="row g-4 mt-4">
        <div class="col-lg-3 col-md-6">
          <div class="card feature-card shadow-sm h-100">
            <div class="card-body text-center">
              <i class="fas fa-book icon mb-3"></i>
              <h5 class="card-title">Library Management</h5>
              <p class="card-text">
                Manage book issuance, returns, and library records
                efficiently.
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="card feature-card shadow-sm h-100">
            <div class="card-body text-center">
              <i class="fas fa-money-check-alt icon mb-3"></i>
              <h5 class="card-title">Fee Management</h5>
              <p class="card-text">
                Handle billing, payments, and discounts with ease.
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="card feature-card shadow-sm h-100">
            <div class="card-body text-center">
              <i class="fas fa-hands-helping icon mb-3"></i>
              <h5 class="card-title">Extracurricular Activities</h5>
              <p class="card-text">
                Explore a variety of activities to enhance your skills and
                passions outside of academics.
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="card feature-card shadow-sm h-100">
            <div class="card-body text-center">
              <i class="fas fa-bell icon mb-3"></i>
              <h5 class="card-title">Notification System</h5>
              <p class="card-text">
                Send announcements and updates seamlessly.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =====================================ABOUT-SECTION============================================================ -->
  <section class="about-section" id="about">
    <div class="container">
      <div class="row clearfix">
        <!--Content Column-->
        <div class="content-column col-md-6 col-sm-12 col-xs-12">
          <div class="inner-column">
            <div class="sec-title">
              <div class="title">About Us</div>
              <h2>
                Empowering Education <br />
                Through Innovation
              </h2>
            </div>
            <div class="text">
              We provide a cutting-edge school management system designed to
              simplify administration, enhance communication, and boost
              efficiency. From managing grades to tracking attendance, our
              solutions support educators and students in achieving academic
              success with ease.
            </div>
            <div class="email">
              Request a Demo:
              <span class="theme_color">demo@schoolmanagement.com</span>
            </div>
          </div>
        </div>

        <!--Image Column-->
        <div class="image-column col-md-6 col-sm-12 col-xs-12">
          <div
            class="inner-column"
            data-wow-delay="0ms"
            data-wow-duration="1500ms">
            <div class="image">
              <img src="./images/lib.png" alt="library" />
              <div class="overlay-box">
                <div class="year-box">
                  <span class="number">📚</span>Years <br />
                  Experience <br />
                  Transforming Schools
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ====================================ACTIVITY-SECTION====================================================== -->
  <section class="activity mb-5">
    <div class="container py-5">
      <h2 class="text-center mb-4">Extracurricular Activities</h2>
      <div class="row text-center activity-cards">
        <!-- Sports Card -->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card shadow-sm border-light rounded">
            <div class="card-body">
              <i class="fas fa-football-ball fa-3x  icon mb-3"></i>
              <h5 class="card-title">Sports Club</h5>
              <p class="card-text">
                Join our football, basketball, and athletics teams!
              </p>
            </div>
          </div>
        </div>

        <!-- Music Card -->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card shadow-sm border-light rounded">
            <div class="card-body">
              <i class="fas fa-music fa-3x  icon mb-3"></i>
              <h5 class="card-title">Music Club</h5>
              <p class="card-text">
                Learn instruments, vocals, and perform in events.
              </p>
            </div>
          </div>
        </div>

        <!-- Art Card -->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card shadow-sm border-light rounded">
            <div class="card-body">
              <i class="fas fa-paint-brush fa-3x icon mb-3"></i>
              <h5 class="card-title">Art Club</h5>
              <p class="card-text">
                Express creativity through painting, sculpture, and more.
              </p>
            </div>
          </div>
        </div>

        <!-- Drama Card -->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card shadow-sm border-light rounded">
            <div class="card-body">
              <i class="fas fa-theater-masks fa-3x icon mb-3"></i>
              <h5 class="card-title">Drama Club</h5>
              <p class="card-text">
                Act, direct, and script plays for school events.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ====================================SECURITY-SECTION======================================================= -->
  <section class="security-compliance-section py-5 bg-light">
    <div class="container">
      <div class="row">
        <!-- Content Column -->
        <div class="col-md-6">
          <div class="content">
            <h3 class="section-title text-primary">
              Security and Compliance
            </h3>
            <p class="section-description">
              At our school management platform, we prioritize the security
              and confidentiality of student and school data. We adhere to the
              highest industry standards to ensure your information is
              protected at all times.
            </p>
            <ul class="list-unstyled security-list">
              <li>
                <i class="fas fa-lock icon"></i> End-to-End Encryption
                for Data
              </li>
              <li>
                <i class="fas fa-user-shield icon"></i> Role-Based
                Access Control
              </li>
              <li>
                <i class="fas fa-check-circle  icon"></i> Regular
                Compliance Audits
              </li>
              <li>
                <i class="fas fa-shield-alt  icon"></i> GDPR and FERPA
                Compliant
              </li>
              <li>
                <i class="fas fa-database  icon"></i> Secure
                Cloud-Based Storage
              </li>
            </ul>
          </div>
        </div>
        <!-- Image Column -->
        <div class="col-md-6 text-center">
          <img
            src="./images/security.jpg"
            alt="Security Illustration"
            class="img-fluid rounded" />
        </div>
      </div>
    </div>
  </section>
  
  <!-- ====================================7-DYAS-TRAIL-SECTION======================================================== -->
  <div class="trial mb-5">
    <section class="trial-section">
      <div class="container">
        <h2>Try Our CRM System for Free!</h2>
        <p>
          Sign up today and enjoy a 7-day free trial of our powerful CRM system.
          Experience all the features and benefits without any commitment.
        </p>
        <button class="trial-button">Start My Free Trial</button>
        <p class="terms">
          *No credit card required. Cancel anytime within the trial period.
        </p>
      </div>
    </section>
  </div>

  <?php include("includes/footer.php") ?>