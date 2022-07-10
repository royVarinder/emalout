<?php require_once("./config.php");
    require_once(DIR_IMPORTS."/imports.php");
 ?>
<!-- <title>e-Malout | Explore Your City</title> -->
 <nav class="navbar navbar-expand-lg navbar-light navigationBar">
  <div class="container-fluid">
    <a class="navbar-brand"  href="../emaloutv2"><img width="200" src="img/logo/logo2.png"><span class="logoName"></span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 headerMenu">
        <li class="nav-item homePage" id="eMaloutHomePage">
          <a class="nav-link" id="" aria-current="page">Home</a>
        </li>
        <li class="nav-item" id="emNewsLink">
          <a class="nav-link" id="">eM-News</a>
        </li>
        <li class="nav-item" id= "emAboutUs">
          <a class="nav-link disabled" id="">About-us</a>
        </li>
    
        <li class="nav-item" id="contactUs">
          <a class="nav-link" id="">Contact Us</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control header-search me-2 searchInputField" type="search" placeholder="Search" id="inputSearchItem" aria-label="Search">
        <button class="eMaloutBtn search-button-header" title="SEARCH" type="button" id="searchItem"><i class="fa fa-search"></i></button>
        <button class="eMaloutBtn search-button-header" title="ADD" type="button" id="addStartup"><i class="fa fa-plus"></i></button>
        <button class="eMaloutBtn search-button-header" id="adminLogin" title="ADMIN" type="button"><i class="fa fa-user"></i></button>
      </form>
    </div>
  </div>
</nav>