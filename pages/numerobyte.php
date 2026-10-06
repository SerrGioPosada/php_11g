<?php
//entrada de datos
$numero=$_POST['numero'];

if ($numero<0 || $numero>255)

	
?>


<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Valor Absoluto | Manual PHP</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

         <?php
	include("includes/aside.php");
	?>
		<!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
                  <a
                    class="github-button"
                    href="https://github.com/themeselection/sneat-html-admin-template-free"
                    data-icon="octicon-star"
                    data-size="large"
                    data-show-count="true"
                    aria-label="Star themeselection/sneat-html-admin-template-free on GitHub"
                    >Star</a
                  >
                </li>

                <!-- User -->
                <?php
				include("includes/user.php");
				?>
				
				<!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Secuenciales /</span> Valor Absoluto</h4>

              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Dato de un numero</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                     <tr>
                        <th>Datos</th>
                        <th>Valores</th>
                        <th>Opciones</th>
					</tr>
                   </thead>
                    <tbody class="table-border-bottom-0">
        
					   <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mitades- bytes</strong></td>
                        <td>
						<?php
						//calcular los bytes
						$dividendo=$numero;
						$textoBits="";
						do{
							$bit=$dividendo %2;
							//dividendo=trunc (dividendo/2);
							$dividendo=intdiv($dividendo,2);
							echo $bit. "<br>";
							//textoBite= Cancatenar ( textoBits, ConvertirATexto(bit));
							$textoBits= $textoBits.$bit;
						}while ($dividendo>=2); 
						echo $dividendo."<br>";
						//textoBits= Concatenar( textoBits, ConvertirATexto(dividendo));
						$textoBits= $textoBits.$dividendo;
						echo "Cadena de bits:",$textoBits;
						?>
						</td>
						<td><span class="badge bg-label-primary me-1">Active</span></td>
                       </tr>
					   					   <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Invertir cadena de bits</strong></td>
                        <td>
						<?php
						//Numero en binario
						$textoBinario="";
						$i=strlen($textoBits);
						do{
							//textoBinario=Concatenar ( textoBinario, SubCadena(textoBits,i,i));
							$textoBinario=$textoBinario.substr ( $textoBits, $i,1);
							$i=$i-1;
						}while ($i>=0);
						echo $textoBinario;
						?>
						</td>
						<td><span class="badge bg-label-primary me-1">Active</span></td>
                       </tr>
								   					   <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Completar ceros a la izquierda</strong></td>
                        <td>
						<?php
                          //Completar ceros
						  if ( strlen($textoBinario)<8) {
							  //Completar el byte
							  $i=0;
							  $textoByte="";
							  do{
								  //textoByte0Concatenar ( textByte, "0");
								  $textoByte=$textoByte."0";
								  $i=$i+1;
							  }while ($i<8-strlen($textoBinario));
							  //textoByte=Concatenar( textoByte, textoBinario);
							  $textoByte=$textoByte.$textoBinario;
						  }else{
							  $textoByte=$textoBinario;
						  }
						  echo "Byte:".$textoByte;
							  
						?>
						</td>
						<td><span class="badge bg-label-primary me-1">Active</span></td>
                       </tr>
					
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->
				</div>
             
            <!-- / Content -->

            <!-- Footer -->
            <?php
	 include("includes/footer.php");
	?>
		   
		   <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

   
     <?php
	 include("includes/registro.php");
	?>
	

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
