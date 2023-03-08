<?php
/**
 * Template Name: Gallery Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package villa2
 */
?>
<?php get_header(); ?>

<section id="Special-Offers-Gallery">
        <div class="container-SO-P1 text-center">
          <img src="<?php echo get_theme_file_uri('logo/NewLogo.png') ?>" alt="Logo" class="img-fluid">
          <h1>Gallery</h1>
        </div>
      </section>
          <!-- akhir navbar -->
		  <!-------------Button Wa---------->
		<a href="https://api.whatsapp.com/" target="_blank">
      <button class="gogo d-flex align-items-center justify-content-evenly" style="z-index: 400;">
        <img src="<?php echo get_theme_file_uri('img/Watsap.png') ?>" width="50" >
        <p>BOOK NOW!</p>
      </button>
		</a>
    
       
		<!---------------Akhir ---------------->


      
  <div class="text-center"> 
    <h3>Photo Gallery</h3>
  </div>
          <!-- nav tab gallery -->
         
          <div class="container-fluid text-center foto-foto ">
            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active text-dark" id="all-tab" data-bs-toggle="tab" data-bs-target="#all-tab-pane" type="button" role="tab" aria-controls="all-tab-pane" aria-selected="true">All</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link text-dark" id="garden-tab" data-bs-toggle="tab" data-bs-target="#garden-tab-pane" type="button" role="tab" aria-controls="garden-tab-pane" aria-selected="false">Garden & Pool</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link text-dark" id="lobby-tab" data-bs-toggle="tab" data-bs-target="#lobby-tab-pane" type="button" role="tab" aria-controls="lobby-tab-pane" aria-selected="false">Lobby</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link text-dark" id="others-tab" data-bs-toggle="tab" data-bs-target="#others-tab-pane" type="button" role="tab" aria-controls="others-tab-pane" aria-selected="false">Others</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link text-dark" id="room-tab" data-bs-toggle="tab" data-bs-target="#room-tab-pane" type="button" role="tab" aria-controls="room-tab-pane" aria-selected="false">Room</button>
              </li>
            </ul>


            <div class="tab-content destop text-center foto-foto" id="myTabContent" >
              <div class="panel-tab tab-pane fade show active " id="all-tab-pane" role="tabpanel" aria-labelledby="all-tab" tabindex="0">
                <div class="countainer container-fluid text-center">
               <div class="row d-flex justify-content-center align-items-center gelan pt-2 pb-2 row-cols-1 row-cols-lg-4 g-2 g-lg-3">
                <div class="col">
                  <div class=" gllry">
                    <img class="img" src="<?php echo get_theme_file_uri('img/garden1.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col">
                  <div class=" gllry">
                    <img class="img"  src="<?php echo get_theme_file_uri('img/garden2.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col">
                  <div class=" gllry">
                    <img class="img" src="<?php echo get_theme_file_uri('img/garden3.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col">
                  <div class=" gllry">
                    <img  class="img" src="<?php echo get_theme_file_uri('img/garden4.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col">
                  <div class=" gllry">
                    <img src="<?php echo get_theme_file_uri('img/garden6.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col">
                  <div class=" gllry">
                    <img src="<?php echo get_theme_file_uri('img/garden7.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col">
                  <div class=" gllry">
                    <img src="<?php echo get_theme_file_uri('img/garden8.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col ">
                  <div class=" gllry">
                    <img src="<?php echo get_theme_file_uri('img/loby9.jpg" ') ?>"alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col">
                  <div class=" gllry">
                    <img src="<?php echo get_theme_file_uri('img/loby10.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col ">
                  <div class=" gllry">
                    <img src="<?php echo get_theme_file_uri('img/loby11.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col ">
                  <div class=" gllry">
                    <img src="<?php echo get_theme_file_uri('img/loby12.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col ">
                  <div class=" gllry">
                    <img src="<?php echo get_theme_file_uri('img/loby13.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col ">
                  <div class=" gllry">
                    <img src="<?php echo get_theme_file_uri('img/loby14.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col ">
                  <div class=" gllry">
                    <img src="<?php echo get_theme_file_uri('img/loby15.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col-">
                  <div class=" gllry">
                    <img src="<?php echo get_theme_file_uri('img/loby16.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col ">
                  <div class=" gllry">
                    <img src="<?php echo get_theme_file_uri('img/loby17.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col ">
                  <div class=" gllry">
                    <img src="<?php echo get_theme_file_uri('img/other18.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col ">
                  <div class=" gllry">
                    <img src="<?php echo get_theme_file_uri('img/other19.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col ">
                  <div class=" gllry">
                    <img src="<?php echo get_theme_file_uri('img/other20.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col ">
                  <div class=" gllry">
                    <img src="<?php echo get_theme_file_uri('img/other21.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col ">
                  <div class=" gllry">
                    <img src="<?php echo get_theme_file_uri('img/other22.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col ">
                  <div class=" gllry">
                    <img src="<?php echo get_theme_file_uri('img/other23.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col ">
                  <div class=" gllry">
                    <img src="<?php echo get_theme_file_uri('img/other24.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col ">
                  <div class=" gllry">
                    <img src="<?php echo get_theme_file_uri('img/other25.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col ">
                  <div class=" gllry">
                    <img src="<?php echo get_theme_file_uri('img/other26.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col ">
                  <div class=" gllry">
                    <img src="<?php echo get_theme_file_uri('img/other27.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col ">
                  <div class=" gllry">
                    <img src="<?php echo get_theme_file_uri('img/rooom28.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col ">
                  <div class=" gllry">
                    <img src="<?php echo get_theme_file_uri('img/rooom29.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col ">
                  <div class=" gllry">
                    <img src="<?php echo get_theme_file_uri('img/rooom230.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col ">
                  <div class=" gllry">
                    <img src="<?php echo get_theme_file_uri('img/rooom31.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col ">
                  <div class=" gllry">
                    <img src="<?php echo get_theme_file_uri('img/rooom32.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col ">
                  <div class=" gllry">
                    <img src="<?php echo get_theme_file_uri('img/rooom33.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col ">
                  <div class=" gllry">
                    <img src="<?php echo get_theme_file_uri('img/rooom34.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col ">
                  <div class=" gllry">
                    <img src="<?php echo get_theme_file_uri('img/rooom35.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col ">
                  <div class=" gllry">
                    <img src="<?php echo get_theme_file_uri('img/rooom36.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col ">
                  <div class=" gllry">
                    <img src="<?php echo get_theme_file_uri('img/rooom37.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col ">
                  <div class=" gllry">
                    <img src="<?php echo get_theme_file_uri('img/rooom38.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col ">
                  <div class=" gllry">
                    <img src="<?php echo get_theme_file_uri('img/rooom39.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col ">
                  <div class=" gllry">
                    <img src="<?php echo get_theme_file_uri('img/garden4.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
                <div class="col ">
                  <div class=" gllry">
                    <img src="<?php echo get_theme_file_uri('img/garden4.jpg') ?>" alt="bootstrap" width="250">
                  </div>
                </div>
              </div>
               </div>
              </div>
              <div class="tab-pane fade" id="garden-tab-pane" role="tabpanel" aria-labelledby="garden-tab" tabindex="0">
                <div class=" row gelan row-cols-1 row-cols-lg-4 g-2 g-lg-3 justify-content-center pt-2 pb-2">
                  <div class="col ">
                    <div class="p-1 gllry">
                      <img src="<?php echo get_theme_file_uri('img/garden1.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class="p-1 gllry">
                      <img src="<?php echo get_theme_file_uri('img/garden2.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class="p-1 gllry">
                      <img src="<?php echo get_theme_file_uri('img/garden3.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class="p-1 gllry">
                      <img src="<?php echo get_theme_file_uri('img/garden4.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
  
                  <div class="col ">
                    <div class="p-1 gllry">
                      <img src="<?php echo get_theme_file_uri('img/garden5.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class="p-1 gllry">
                      <img src="<?php echo get_theme_file_uri('img/garden6.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class="p-1 gllry">
                      <img src="<?php echo get_theme_file_uri('img/garden7.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class="p-1 gllry">
                      <img src="<?php echo get_theme_file_uri('img/garden8.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                </div>
                </div>
              <div class="tab-pane fade" id="lobby-tab-pane" role="tabpanel" aria-labelledby="lobby-tab" tabindex="0">
                <div class=" row gelan pt-2 pb-2 row-cols-1 row-cols-lg-4 g-2 g-lg-3 justify-content-center">
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/loby9.jpg" ') ?>"alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/loby10.jpg"') ?> "alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/loby11.jpg"') ?> "alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/loby12.jpg"') ?> "alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/loby13.jpg"') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/loby14.jpg"') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/loby15.jpg"') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/loby16.jpg"') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                </div>
                </div>
              <div class="tab-pane fade" id="others-tab-pane" role="tabpanel" aria-labelledby="others-tab" tabindex="0">
                <div class=" row gelan pt-2 pb-2 row-cols-1 row-cols-lg-4 g-2 g-lg-3 justify-content-center">
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/other18.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/other19.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/other20.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/other21.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/other22.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/other23.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/other24.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/other25.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/other26.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/other26.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/other26.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/other27.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                </div>
                </div>
              <div class="tab-pane fade" id="room-tab-pane" role="tabpanel" aria-labelledby="room-tab" tabindex="0">
                <div class="row gelan pt-2 pb-2 row-cols-1 row-cols-lg-4 g-2 g-lg-3 justify-content-center">
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/rooom28.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/rooom29.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/rooom230.jp') ?>g" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/rooom31.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/rooom32.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/rooom33.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/rooom34.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/rooom35.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/rooom36.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/rooom37.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/rooom38.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/rooom39.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>



          <hr>
          <div class="container-fluid text-center responsive-id">
            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active text-dark" id="all-tab-responsive" data-bs-toggle="tab" data-bs-target="#all-tab-pane-responsive" type="button" role="tab" aria-controls="all-tab-pane" aria-selected="true">All</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link text-dark" id="garden-tab" data-bs-toggle="tab" data-bs-target="#garden-tab-pane-responsive" type="button" role="tab" aria-controls="garden-tab-pane" aria-selected="false">Garden & Pool</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link text-dark" id="lobby-tab" data-bs-toggle="tab" data-bs-target="#lobby-tab-pane-responsive" type="button" role="tab" aria-controls="lobby-tab-pane" aria-selected="false">Lobby</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link text-dark" id="others-tab" data-bs-toggle="tab" data-bs-target="#others-tab-pane-responsive" type="button" role="tab" aria-controls="others-tab-pane" aria-selected="false">Others</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link text-dark" id="room-tab" data-bs-toggle="tab" data-bs-target="#room-tab-pane-responsive" type="button" role="tab" aria-controls="room-tab-pane" aria-selected="false">Room</button>
              </li>
            </ul>


            <div class="tab-content destop text-center reponsive-content " id="myTabContent" >
              <div class="panel-tab tab-pane fade show active " id="all-tab-pane-responsive" role="tabpanel" aria-labelledby="all-tab-responsive" tabindex="0">
              <div class="countainer container-fluid text-center">
               

                <div class="1-responsive d-flex">
                  <div class="col">
                    <div class=" gllry">
                      <img class="img" src="<?php echo get_theme_file_uri('img/garden1.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col">
                    <div class=" gllry">
                      <img class="img"  src="<?php echo get_theme_file_uri('img/garden2.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                </div>
                <div class="2-responsive d-flex">
                  <div class="col">
                    <div class=" gllry">
                      <img class="img" src="<?php echo get_theme_file_uri('img/garden3.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col">
                    <div class=" gllry">
                      <img  class="img" src="<?php echo get_theme_file_uri('img/garden4.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                </div>
                <div class="3-responsive d-flex">
                  <div class="col">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/garden6.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/garden7.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                </div>
                <div class="4-responsive d-flex">
                  <div class="col">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/garden8.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/loby9.jpg" ') ?>"alt="bootstrap" width="250">
                    </div>
                  </div>
                </div>
                <div class="5-responsive d-flex">
                  <div class="col">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/loby10.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/loby11.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                </div>
                <div class="6-responsive d-flex">
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/loby12.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/loby13.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                </div>
               <div class="7-responsive d-flex">
                <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/loby14.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/loby15.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
               </div>
                <div class="8-responsive d-flex">
                  <div class="col">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/loby16.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/loby17.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                </div>
                <div class="9-responsive d-flex">
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/other18.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/other19.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                </div>
               <div class="10-responsive d-flex">
                <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/other20.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/other21.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
               </div>
                <div class="11-responsive d-flex">
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/other22.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/other23.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                </div>
               <div class="12-responsive d-flex">
                <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/other24.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/other25.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
               </div>
                <div class="13-responsive d-flex">
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/other26.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/other27.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                </div>
               <div class="14-responsive d-flex">
                <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/rooom28.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/rooom29.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
               </div>
                <div class="15-responsive d-flex">
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/rooom230.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/rooom31.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                </div>
                <div class="16-responsive d-flex">
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/rooom32.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/rooom33.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                </div>
                <div class="17-responsive d-flex">
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/rooom34.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/rooom35.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                </div>
                <div class="18-responsive d-flex">
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/rooom36.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/rooom37.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                </div>
                <div class="29-responsive d-flex">
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/rooom38.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/rooom39.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                </div>
               <div class="20-responsive d-flex">
                <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/garden4.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
                  <div class="col ">
                    <div class=" gllry">
                      <img src="<?php echo get_theme_file_uri('img/garden4.jpg') ?>" alt="bootstrap" width="250">
                    </div>
                  </div>
               </div>
              </div>
               </div>
           
              <div class="tab-pane fade" id="garden-tab-pane-responsive" role="tabpanel" aria-labelledby="garden-tab" tabindex="0">
                <div class=" row gelan row-cols-1 row-cols-lg-4 g-2 g-lg-3 justify-content-center pt-2 pb-2">
                  <div class="21-responsive d-flex">
                    <div class="col ">
                      <div class="p-1 gllry">
                        <img src="<?php echo get_theme_file_uri('img/garden1.jpg') ?>" alt="bootstrap" width="250">
                      </div>
                    </div>
                    <div class="col ">
                      <div class="p-1 gllry">
                        <img src="<?php echo get_theme_file_uri('img/garden2.jpg') ?>" alt="bootstrap" width="250">
                      </div>
                    </div>
                  </div>
                  <div class="22-responsive d-flex">
                    <div class="col ">
                      <div class="p-1 gllry">
                        <img src="<?php echo get_theme_file_uri('img/garden3.jpg') ?>" alt="bootstrap" width="250">
                      </div>
                    </div>
                    <div class="col ">
                      <div class="p-1 gllry">
                        <img src="<?php echo get_theme_file_uri('img/garden4.jpg') ?>" alt="bootstrap" width="250">
                      </div>
                    </div>
                  </div>
  
                  <div class="23-responsive d-flex">
                    <div class="col ">
                      <div class="p-1 gllry">
                        <img src="<?php echo get_theme_file_uri('img/garden5.jpg') ?>" alt="bootstrap" width="250">
                      </div>
                    </div>
                    <div class="col ">
                      <div class="p-1 gllry">
                        <img src="<?php echo get_theme_file_uri('img/garden6.jpg') ?>" alt="bootstrap" width="250">
                      </div>
                    </div>
                  </div>
                 <div class="23-responsive d-flex">
                  <div class="col ">
                      <div class="p-1 gllry">
                        <img src="<?php echo get_theme_file_uri('img/garden7.jpg') ?>" alt="bootstrap" width="250">
                      </div>
                    </div>
                    <div class="col ">
                      <div class="p-1 gllry">
                        <img src="<?php echo get_theme_file_uri('img/garden8.jpg') ?>" alt="bootstrap" width="250">
                      </div>
                    </div>
                 </div>
                </div>
                </div>
              <div class="tab-pane fade" id="lobby-tab-pane-responsive" role="tabpanel" aria-labelledby="lobby-tab" tabindex="0">
                <div class=" row gelan pt-2 pb-2 row-cols-1 row-cols-lg-4 g-2 g-lg-3 justify-content-center">
                  <div class="24-responsive d-flex">
                    <div class="col ">
                      <div class=" gllry">
                        <img src="<?php echo get_theme_file_uri('img/loby9.jpg" ') ?>"alt="bootstrap" width="250">
                      </div>
                    </div>
                    <div class="col ">
                      <div class=" gllry">
                        <img src="<?php echo get_theme_file_uri('img/loby10.jpg"') ?> "alt="bootstrap" width="250">
                      </div>
                    </div>
                  </div>
                  <div class="25-responsive d-flex">
                    <div class="col ">
                      <div class=" gllry">
                        <img src="<?php echo get_theme_file_uri('img/loby11.jpg"') ?> "alt="bootstrap" width="250">
                      </div>
                    </div>
                    <div class="col ">
                      <div class=" gllry">
                        <img src="<?php echo get_theme_file_uri('img/loby12.jpg"') ?> "alt="bootstrap" width="250">
                      </div>
                    </div>
                    
                  </div>
                  <div class="26-responsive d-flex">
                  <div class="col ">
                      <div class=" gllry">
                        <img src="<?php echo get_theme_file_uri('img/loby13.jpg"') ?>" alt="bootstrap" width="250">
                      </div>
                    </div>
                    <div class="col ">
                      <div class=" gllry">
                        <img src="<?php echo get_theme_file_uri('img/loby14.jpg"') ?>" alt="bootstrap" width="250">
                      </div>
                    </div>
                   
                  </div>
                  <div class="27-responsive d-flex justify-content-center">
                  <div class="col ">
                      <div class=" gllry">
                        <img src="<?php echo get_theme_file_uri('img/loby15.jpg"') ?>" alt="bootstrap" width="250">
                      </div>
                    </div>
                    <div class="col ">
                      <div class=" gllry">
                        <img src="<?php echo get_theme_file_uri('img/loby16.jpg"') ?>" alt="bootstrap" width="250">
                      </div>
                    </div>
                  </div>
                </div>
                </div>

              <div class="tab-pane fade" id="others-tab-pane-responsive" role="tabpanel" aria-labelledby="others-tab" tabindex="0">
                <div class=" row gelan pt-2 pb-2 row-cols-1 row-cols-lg-4 g-2 g-lg-3 justify-content-center">
                  <div class="28-reponsive d-flex">
                    <div class="col ">
                      <div class=" gllry">
                        <img src="<?php echo get_theme_file_uri('img/other18.jpg') ?>" alt="bootstrap" width="250">
                      </div>
                    </div>
                    <div class="col ">
                      <div class=" gllry">
                        <img src="<?php echo get_theme_file_uri('img/other19.jpg') ?>" alt="bootstrap" width="250">
                      </div>
                    </div>
                  </div>
                 <div class="29-responsive d-flex">
                  <div class="col ">
                      <div class=" gllry">
                        <img src="<?php echo get_theme_file_uri('img/other20.jpg') ?>" alt="bootstrap" width="250">
                      </div>
                    </div>
                    <div class="col ">
                      <div class=" gllry">
                        <img src="<?php echo get_theme_file_uri('img/other21.jpg') ?>" alt="bootstrap" width="250">
                      </div>
                    </div>
                 </div>
                 <div class="30-responsive d-flex">
                  <div class="col ">
                      <div class=" gllry">
                        <img src="<?php echo get_theme_file_uri('img/other22.jpg') ?>" alt="bootstrap" width="250">
                      </div>
                    </div>
                    <div class="col ">
                      <div class=" gllry">
                        <img src="<?php echo get_theme_file_uri('img/other23.jpg') ?>" alt="bootstrap" width="250">
                      </div>
                    </div>
                 </div>
                  <div class="31-responsive d-flex">
                    <div class="col ">
                      <div class=" gllry">
                        <img src="<?php echo get_theme_file_uri('img/other24.jpg') ?>" alt="bootstrap" width="250">
                      </div>
                    </div>
                    <div class="col ">
                      <div class=" gllry">
                        <img src="<?php echo get_theme_file_uri('img/other25.jpg') ?>" alt="bootstrap" width="250">
                      </div>
                    </div>
                  </div>
                  <div class="32-responsive d-flex">
                    <div class="col ">
                      <div class=" gllry">
                        <img src="<?php echo get_theme_file_uri('img/other26.jpg') ?>" alt="bootstrap" width="250">
                      </div>
                    </div>
                    <div class="col ">
                      <div class=" gllry">
                        <img src="<?php echo get_theme_file_uri('img/other26.jpg') ?>" alt="bootstrap" width="250">
                      </div>
                    </div>
                  </div>
                 <div class="33-responsive d-flex">
                  <div class="col ">
                      <div class=" gllry">
                        <img src="<?php echo get_theme_file_uri('img/other26.jpg') ?>" alt="bootstrap" width="250">
                      </div>
                    </div>
                    <div class="col ">
                      <div class=" gllry">
                        <img src="<?php echo get_theme_file_uri('img/other27.jpg') ?>" alt="bootstrap" width="250">
                      </div>
                    </div>
                 </div>
                </div>
                </div>
              <div class="tab-pane fade" id="room-tab-pane-responsive" role="tabpanel" aria-labelledby="room-tab" tabindex="0">
                <div class="row gelan pt-2 pb-2 row-cols-1 row-cols-lg-4 g-2 g-lg-3 justify-content-center">
                 <div class="34-responsive d-flex">
                  <div class="col ">
                      <div class=" gllry">
                        <img src="<?php echo get_theme_file_uri('img/rooom28.jpg') ?>" alt="bootstrap" width="250">
                      </div>
                    </div>
                    <div class="col ">
                      <div class=" gllry">
                        <img src="<?php echo get_theme_file_uri('img/rooom29.jpg') ?>" alt="bootstrap" width="250">
                      </div>
                    </div>
                 </div>
                  <div class="35-responsive d-flex">
                    <div class="col ">
                      <div class=" gllry">
                        <img src="<?php echo get_theme_file_uri('img/rooom230.jp') ?>g" alt="bootstrap" width="250">
                      </div>
                    </div>
                    <div class="col ">
                      <div class=" gllry">
                        <img src="<?php echo get_theme_file_uri('img/rooom31.jpg') ?>" alt="bootstrap" width="250">
                      </div>
                    </div>
                  </div>
                  <div class="36-responsive d-flex">
                    <div class="col ">
                      <div class=" gllry">
                        <img src="<?php echo get_theme_file_uri('img/rooom32.jpg') ?>" alt="bootstrap" width="250">
                      </div>
                    </div>
                    <div class="col ">
                      <div class=" gllry">
                        <img src="<?php echo get_theme_file_uri('img/rooom33.jpg') ?>" alt="bootstrap" width="250">
                      </div>
                    </div>
                  </div>
                 <div class="37-responsive d-flex">
                  <div class="col ">
                      <div class=" gllry">
                        <img src="<?php echo get_theme_file_uri('img/rooom34.jpg') ?>" alt="bootstrap" width="250">
                      </div>
                    </div>
                    <div class="col ">
                      <div class=" gllry">
                        <img src="<?php echo get_theme_file_uri('img/rooom35.jpg') ?>" alt="bootstrap" width="250">
                      </div>
                    </div>
                 </div>
                  <div class="38-responsive d-flex">
                    <div class="col ">
                      <div class=" gllry">
                        <img src="<?php echo get_theme_file_uri('img/rooom36.jpg') ?>" alt="bootstrap" width="250">
                      </div>
                    </div>
                    <div class="col ">
                      <div class=" gllry">
                        <img src="<?php echo get_theme_file_uri('img/rooom37.jpg') ?>" alt="bootstrap" width="250">
                      </div>
                    </div>
                  </div>
                 <div class="39-responsive d-flex">
                  <div class="col ">
                      <div class=" gllry">
                        <img src="<?php echo get_theme_file_uri('img/rooom38.jpg') ?>" alt="bootstrap" width="250">
                      </div>
                    </div>
                    <div class="col ">
                      <div class=" gllry">
                        <img src="<?php echo get_theme_file_uri('img/rooom39.jpg') ?>" alt="bootstrap" width="250">
                      </div>
                    </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
<?php get_footer(); ?>
