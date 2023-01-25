<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initialscale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title>Static Navigation - SB Admin</title>
<link href="<?= base_url('assets/css/styles.css')?>" re
l="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body>
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
<a class="navbar-brand" href="index.html">Start Bootstrap</a>
<button class="btn btn-link btn-sm order-1 order-lg-0" i
d="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
<!-- Navbar Search-->
<form class="d-none d-md-inline-block form-inline ml-auto mr0 mr-md-3 my-2 my-md-0">
<div class="input-group">
<input class="form-control" type="text" placeholde
r="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
<div class="input-group-append">
<button class="btn btn-primary" type="button"><i
class="fas fa-search"></i></button>
</div>
</div>
</form>
<!-- Navbar-->
<ul class="navbar-nav ml-auto ml-md-0">
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" id="userDropdown"
href="#!" role="button" data-toggle="dropdown" aria-haspopup="true" ariaexpanded="false"><i class="fas fa-user fa-fw"></i></a>
</li>
<div class="dropdown-menu dropdown-menu-right" arialabelledby="userDropdown">
<a class="dropdown-item" href="#!">Settings</a>
<a class="dropdown-item" href="#!">Activity Log</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="login.html">Logout</a>
</div>
</ul>
</nav>
<div id="layoutSidenav">
<div id="layoutSidenav_nav">
<nav class="sb-sidenav accordion sb-sidenav-dark" i
d="sidenavAccordion">
<div class="sb-sidenav-menu">
<div class="nav">
<div class="sb-sidenav-menu-heading">Core</
div>
<a class="nav-link" href="index.html">
<div class="sb-nav-link-icon"><i clas
s="fas fa-tachometer-alt"></i></div>
Dashboard
</a>
<div class="sb-sidenav-menuheading">Interface</div>
<a class="nav-link collapsed" href="#" datatoggle="collapse" data-target="#collapseLayouts" aria-expanded="false" ar
ia-controls="collapseLayouts">
<div class="sb-nav-link-icon"><i clas
s="fas fa-columns"></i></div>
Layouts
<div class="sb-sidenav-collapse-arrow"><i
class="fas fa-angle-down"></i></div>
</a>
<div class="collapse" id="collapseLayouts" ar
ia-labelledby="headingOne" data-parent="#sidenavAccordion">
<nav class="sb-sidenav-menu-nested nav">
<a class="nav-link" href="layoutstatic.html">Static Navigation</a>
<a class="nav-link" href="layoutsidenav-light.html">Light Sidenav</a>
</nav>
</div>
<a class="nav-link collapsed" href="#" datatoggle="collapse" data-target="#collapsePages" aria-expanded="false" aria
-controls="collapsePages">
<div class="sb-nav-link-icon"><i clas
s="fas fa-book-open"></i></div>
Pages
<div class="sb-sidenav-collapse-arrow"><i
class="fas fa-angle-down"></i></div>
</a>
<div class="collapse" id="collapsePages" aria
-labelledby="headingTwo" data-parent="#sidenavAccordion">
<nav class="sb-sidenav-menu-nested nav ac
cordion" id="sidenavAccordionPages">
<a class="nav-link collapsed" hre
f="#" data-toggle="collapse" data-target="#pagesCollapseAuth" ariaexpanded="false" aria-controls="pagesCollapseAuth">
Authentication
<div class="sb-sidenav-collapsearrow"><i class="fas fa-angle-down"></i></div>
</a>
<div class="collapse" id="pagesCollap
seAuth" aria-labelledby="headingOne" dataparent="#sidenavAccordionPages">
<nav class="sb-sidenav-menunested nav">
<a class="nav-link" hre
f="login.html">Login</a>
<a class="nav-link" hre
f="register.html">Register</a>
<a class="nav-link" hre
f="password.html">Forgot Password</a>
</nav>
</div>
<a class="nav-link collapsed" hre
f="#" data-toggle="collapse" data-target="#pagesCollapseError" ariaexpanded="false" aria-controls="pagesCollapseError">
Error
<div class="sb-sidenav-collapsearrow"><i class="fas fa-angle-down"></i></div>
</a>
<div class="collapse" id="pagesCollap
seError" aria-labelledby="headingOne" dataparent="#sidenavAccordionPages">
<nav class="sb-sidenav-menunested nav">
<a class="nav-link" hre
f="401.html">401 Page</a>
<a class="nav-link" hre
f="404.html">404 Page</a>
<a class="nav-link" hre
f="500.html">500 Page</a>
</nav>
</div>
</nav>
</div>
<div class="sb-sidenav-menuheading">Addons</div>
<a class="nav-link" href="charts.html">
<div class="sb-nav-link-icon"><i clas
s="fas fa-chart-area"></i></div>
Charts
</a>
<a class="nav-link" href="tables.html">
<div class="sb-nav-link-icon"><i clas
s="fas fa-table"></i></div>
Tables
</a>
</div>
</div>
<div class="sb-sidenav-footer">
<div class="small">Logged in as:</div>
Start Bootstrap
</div>
</nav>
</div>
<div id="layoutSidenav_content">
<main>
<div class="container-fluid">
<h1 class="mt-4">Static Navigation</h1>
<ol class="breadcrumb mb-4">
<li class="breadcrumb-item"><a hre
f="index.html">Dashboard</a></li>
<li class="breadcrumb-item active">Static Nav
igation</li>
</ol>
<div class="card mb-4">
<div class="card-body">
<p class="mb-0">
This page is an example of using stat
ic navigation. By removing the
<code>.sb-nav-fixed</code>
class from the
<code>body</code>
, the top navigation and side navigat
ion will become static on scroll. Scroll down this page to see an example
.
</p>
</div>
</div>
<div style="height: 100vh"></div>
<div class="card mb-4"><div class="cardbody">When scrolling, the navigation stays at the top of the page. This i
s the end of the static navigation demo.</div></div>
</div>
</main>
<footer class="py-4 bg-light mt-auto">
<div class="container-fluid">
<div class="d-flex align-items-center justifycontent-between small">
<div class="text-muted">Copyright &copy; Your
Website 2021</div>
<div>
<a href="#">Privacy Policy</a>
&middot;
<a href="#">Terms &amp; Conditions</a>
</div>
</div>
</div>
</footer>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" cr
ossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/
js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/js/scripts.js')?>"></script>
</body>
</html>