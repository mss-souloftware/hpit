
<header id="section1" class="header">
<div class="topBar">
          <div class="container">
          <div class="row align-items-center">
                <div class="col-6">
                    <div class="socialIcon">
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="assets/img/icons/linkedin.svg" alt="LinkedIn">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/icons/facebook.svg" alt="Facebook">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/icons/tumbler.svg" alt="Tumbler">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/icons/youtube.svg" alt="YouTube">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">
                    <div class="topLinks">
                        <ul>
                            <li>
                                <a href="#">Employess</a>
                            </li>
                            <li>
                                <a href="#">Suppliers</a>
                            </li>
                            <li>
                                <a href="#">Contact us</a>
                            </li>
                        </ul>
                        <div id="google_translate_element" style="visibility: hidden;"></div>
<!-- <ul>
    <li><a href="javascript:void(0)" onclick="translatePage('en')">English</a></li>
    <li><a href="javascript:void(0)" onclick="translatePage('es')">Spanish</a></li>
    <li><a href="javascript:void(0)" onclick="translatePage('ar')">Arabic</a></li>

</ul> -->
                        <ul id="lang-open">
                            <li>
                                <img src="assets/img/icons/globe.svg" alt="Languages">
                               
                                    <option>ENGLISH</option>
                                   
                             
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
          </div>
        </div>

        <?php include 'translator.php'; ?>
    <div class="container">
        
        <nav class="navbar navbar-expand-lg py-4 navbar-light">
            <div class="container-fluid">
                <div id="menuToggler">
                    <img src="assets/img/icons/hamburger-open.svg" alt="Menu">
                </div>
                <a class="navbar-brand" href="#">
                    <img src="assets/img/logo.png" alt="HPTI">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-menu="company">Company <i class="fa-solid fa-chevron-down"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-menu="capabilities">Capabilities <i class="fa-solid fa-chevron-down"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-menu="industries">Industries <i class="fa-solid fa-chevron-down"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-menu="insights">Insights <i class="fa-solid fa-chevron-down"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-menu="career">Career <i class="fa-solid fa-chevron-down"></i></a>
                        </li>
                    </ul>
                    <form id="headerSearch" class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search Type...." aria-label="Search">
                        <button class="btn " type="submit">
                            <img src="assets/img/icons/search.svg" alt="Search">
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <?php include 'topmenu.php'; ?>
    <?php include 'magamenu.php'; ?>
</header>