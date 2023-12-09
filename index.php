<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="sytles.css"> <!-- Verifica si el nombre del archivo CSS está correcto -->
  <title>Portafolio</title>
</head>

<body>
<div class="container">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Andres Ramirez</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#experience">Experience</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<div class="row">
    <div class="col-md-2">
        <!-- Espacio para ajustar la imagen hacia la izquierda -->
    </div>
    <div class="col-md-4">
        <img src="./img/cara.jpg" class="img-fluid rounded-circle" alt="logoabout">
    </div>
    <div class="col-md-6 text-center my-auto">
        <p class="text-center">Hello, I'm </p>
        <p class="text-md-center fw-bold">Andres Felipe Ramirez</p>
        <p class="text-md-center fw-bold">Technologist in Software Analysis and Development</p>
        <button type="button" class="btn-md center my-2 border-5px">downloadn cv</button>
        <button type="button" class="btn-md center btn btn-dark my-2 border-5px">contact info</button>
        <div class="container p-3">
            <img src="img/linkedin.png" class="img-fluid" id="link1" alt="LinkedIn">
            <img src="img/github.png" class="img-fluid" id="link1" alt="GitHub">
        </div>
    </div>
</div>


<div class="row">
<p class ="text-center" ></p>
<h1 class="text-center"> about me</h1>
<div class= "col-md-2"></div>
<div class= "col-md-4 p-3">
<img src="./img/perfil2.jpg" class="img-fluid rounded-circle" alt="logoabout"></div>
<div class="col-md-4 p-3">
<div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">education</h5>
        <p class="card-text md-12">bachelor with emphasis in english 
colegio ciudad de bogota (2018)
corse  profesional in git and github 
platzi (2023)
corse  the análisis the data  with msql 
SENA (2023)
Technologist in Software Analysis and Development
SENA (2024)
 sena(2023)
Technologist Software Analysis and Development (2024).</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Experience</h5>
        <p class="card-text md-12">
Frontend Development:

Contributed to the development of the user interface using technologies such as HTML, CSS and JavaScript.
Collaborated closely with the design team to implement intuitive and attractive interfaces that improved the user experience..</p>
      </div>
    </div>
   </div>
  </div>
  <p class="p-4">
  I am a passionate developer, looking for opportunities that allow me to stand out and demonstrate my skills. I specialize in tackling challenging projects and i feel attracted to the use of current technologies. My approach is focused on creative problem solving, and I value a work environment that fosters collaboration and provides opportunities for growing. I am flexible and appreciate fair recognition of my efforts. Therefore, I seek to contribute actively to an innovative team where I can apply and expand my knowledge in software development.
  </p>
  
  <div class="col-md-2"></div>
  <div class="col-md-4">
    
  </div>
  </div>

</div>
<div class="row">
    <p class="text-center" id="experience">Explore by</p>
    <h1 class="text-center">Experience</h1>
  </div>
  
  <div class="row m-1">
    <div class="col-md-1"></div>
    <div class="col-xs-12 col-sm-6 col-md-5 mb-6 mb-sm-0">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Frontend Development</h5>
          <table class="table table-borderless">
            <tbody>
              <tr>
                <td><img src="./img/checkmark.png" width="30px" alt="">HTML <p class="d-xs-block d-sm-none">Basic</p></td>
                <td><img src="./img/checkmark.png" width="30px" alt="">JavaScript <p class="d-xs-block d-sm-none">Basic</p></td>
              </tr>
              <tr>
                <td><img src="./img/checkmark.png" width="30px" alt="">CSS <p class="d-xs-block d-sm-none">Basic</p></td>
              </tr>
            </tbody>
          </table>
        </div>
        
      </div>
    </div>
    <div class="col-sm-6 col-md-5">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Backend Development</h5>
          <table class="table table-borderless">
            <tbody>
              <tr>
                <td><img src="./img/checkmark.png" width="30px" alt="">Postgresql <p class="d-xs-block d-sm-none">Basic</p></td>
                <td><img src="./img/checkmark.png" width="30px" alt="">Node JS <p class="d-xs-block d-sm-none">Intermediate</p></td>
              </tr>
              <tr>
                <td><img src="./img/checkmark.png" width="30px" alt="">Express JS <p class="d-xs-block d-sm-none">Intermediate</p></td>
                <td><img src="./img/checkmark.png" width="30px" alt="">Git <p class="d-xs-block d-sm-none">Intermediate</p></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div>
        
      </div>
      
      <img src="./img/arrow.png" alt="Arrow icon" class="float-end small-icon" style="width: 5%;" onclick="window.location.href='./#projects'"/>

    </div>
  </div>
  
 <!--Seccion Projects-->
 <div class="container p-3">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100 d-flex">
        <img src="./img/proyecto1.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">Project One</h5>
          <div class="container text-center">
            <button type="button" class="btn btn-outline-dark" onclick="window.open('https://github.com/Andres2389/SS-ETP.git', '_blank')">Github</button>
            <button type="button" class="btn btn-outline-dark">Live Demo</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 d-flex">
        <img src="./img/proye3.png" class="img-fluid card-img-top p-2" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">Project Two</h5>
          <div class="container text-center">
            <button type="button" class="btn btn-outline-dark" onclick="window.open('https://github.com/Andres2389/SS-ETP.git', '_blank')">Github</button>
            <button type="button" class="btn btn-outline-dark">Live Demo</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 d-flex">
        <img src="./img/login1.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">Project Three</h5>
          <div class="container text-center">
            <button type="button" class="btn btn-outline-dark" onclick="window.open('https://github.com/Andres2389/inicio-de-session.git','_blank')">Github</button>
            <button type="button" class="btn btn-outline-dark">Live Demo</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <img src="./img/arrow.png" alt="Arrow icon" class="float-end" style="width: 3%;" onclick="location.href='./#projects'"/>
</div>



<!--Seccion Contact-->
<div class="row m-1 text-center">
  <p class="text-center" id="contact"> Get in Touch</p>
  <h1 class="text-center">Contact Me</h1>

  <div class="col-md-2 mx-auto"></div>
  <div class="card mx-auto" style="width: 50rem;">
    <div class="card-body">
      <ul class="list-inline">
        <li class="list-inline-item">
          <a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&to=andres2507ramirez@gmail.com" target="_blank">
            <img class="img-fluid" src="./img/email.png" alt="" width="50px">
            andres2507ramirez@gmail.com
          </a>
        </li>
        <li class="list-inline-item">
          <a href="https://www.linkedin.com/in/andres-felipe-ramirez-collazos" target="_blank">
            <img class="img-fluid" src="./img/linkedin.png" alt="" width="50px">www.linkedin.com/in/andres-felipe-ramirez-collazos
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
<br>
<div class="footer text-center">
  <div class="container">
    <nav class="navbar navbar-expand-lg ">
      <div class="container-fluid">
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#experience">Experience</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#projects">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br><br> <!-- Agregado para ajustar el espacio -->
    <div>
      <p>Copyright © Andres Ramirez. All Rights Reserved</p>
    </div>
  </div>
</div>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  </body> 
</html>