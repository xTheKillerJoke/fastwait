<!-- Main-Header -->
<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>F</b>W</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Fast</b>WAIT</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <?php
          
            include "header/notifications.php";
            include "header/user.php";

          ?>

        </ul>
      </div>
    </nav>
</header>
<!-- Main-Header -->