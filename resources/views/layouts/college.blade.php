<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>College Dashboard</title>
  <!-- <link rel="stylesheet" href="frontend/css/style.css" /> -->
  <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />

  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="containerCustom">
    <nav>
      <ul>
        <li><a href="/collegedashboard" class="logo">
          <img src="/logo.jpg" alt="">
          <span class="nav-item">DashBoard</span>
        </a></li>

        <li><a href="/college/edit-profile">
          <i class="fas fa-home"></i>
          <span class="nav-item">Edit Profile</span>
        </a></li>
        <li><a href="/college/coursedetailshow">
          <i class="fas fa-user"></i>
          <span class="nav-item">View Course</span>
        </a></li>
        <li><a href="/college/view-inquiry">
          <i class="fas fa-question-circle"></i>
          <span class="nav-item">View Inquiry</span>
        </a></li>
        <li><a href="/college/view-student">
          <i class="fas fa-question-circle"></i>
          <span class="nav-item">View Students</span>
        </a></li>
        <li><a href="/college/logout">
          <i class="fas fa-question-circle"></i>
          <span class="nav-item">Logout</span>
        </a></li>
      </ul>
    </nav>

    <section class="main">
      @yield('content')
    </section>
  </div>
</body>
</html>
