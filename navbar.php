<?php 
include_once('head.php');


?>

    <nav class="navbar  navbar-expand-lg ">
        <span class="navbar-brand mr-5 ">LOGO</span>
        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars" ></i>

        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active ">
              <a class="nav-link mr-2" href="./home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown mr-2">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Technologies
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="articles.php?categorie=front-end">Front-end</a>
                <a class="dropdown-item" href="articles.php?categorie=back-end">Back-end</a>               
            </li>
            <li class="nav-item">
              <a class="nav-link disabled " href="./about.php">About</a>
            </li>
          </ul>
          <form class="form-inline mr-auto  ">
            <input class="form-control mr-sm-2 border-0 rounded-0 search " type="search" placeholder="Search" aria-label="Search">
            <button class="btn search-button btn-outline-success my-2 my-sm-0 " type="submit">Search</button>
          </form>
          <ul class="navbar-nav ">
            <li class="nav-item active mr-2">
              <a class="nav-link" href="dashboard.php">benkrakar <span class="sr-only">(current)</span></a>
            </li>
            <div class="icon mt-2 mr-3" >
                <a href="./logout.php">
                    <i class="fas fa-sign-out-alt"></i>    
                            </a>
            </div>          
          </ul>
        </div>
        

      </nav>

   
