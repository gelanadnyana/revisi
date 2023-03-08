<?php
/**
 * Template Name: Contact Template
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


	
		<!-------------Button Wa---------->
    <a href="https://api.whatsapp.com/" target="_blank">
      <button class="gogo d-flex align-items-center justify-content-evenly" style="z-index: 400;">
        <img src="<?php echo get_theme_file_uri('img/Watsap.png') ?>" width="50" >
        <p>BOOK NOW!</p>
      </button>
		</a>
		<!---------------Akhir ---------------->
    <div class="cont" style="margin-top: 200px;">
      <div class="contentimg d-flex justify-content-center">
        <div class="con2">
          <img src="<?php echo get_theme_file_uri('img/NewLogo.png') ?>"  alt="" style="width: 250px; height: 180px;" >
        </div>
      </div>
      <div class="dara d-flex justify-content-center">
        <div class="special text-center">
          <p class="center">Dara Villa</p>
          <h3>Contact</h3>
        </div>
      </div>
    </div>
</container>


<!---------------Section 2-->
<div class="cntainr container-fluid">
  <div class="content1 mt-5">
    <div class="judul text-center mb-5">
      <h2>Book Your Stay Today</h2>
    </div>
    <div class="image text-center">
      <img src="<?php echo get_theme_file_uri('img/villabali2.jpg') ?>" alt="" style="width: 80%; height: 70%;">
    </div>
    <div class="contact d-flex justify-content-evenly text-center mt-5">
      <div class="addres" style="width: 200px;">
        <div class="logo">
          <img src="<?php echo get_theme_file_uri('img/maps.png') ?>" alt="">
          <h5 class="mt-4">Addres</h5>
          <p class="mt-4">Banjar Sebatu, Sebatu Village, ubud, Gianyar, Bali</p>
        </div>
      </div>
      <div class="phone">
        <div class="logo">
          <img src="<?php echo get_theme_file_uri('img/phone.png') ?>" alt="">
          <h5 class="mt-4">Phone</h5>
          <p class="mt-4">+62 361 908 3852</p>
        </div>
      </div>
      <div class="whatsapp">
        <div class="logo">
          <img src="<?php echo get_theme_file_uri('img/whatsapp.png') ?>" alt="">
          <h5 class="mt-4">WhatsApp</h5>
          <p class="mt-4">+62 813 5306 4109</p>
        </div>
      </div>
      <div class="email">
        <div class="logo">
          <img src="<?php echo get_theme_file_uri('img/email.png') ?>" alt="">
          <h5 class="mt-4">Email</h5>
          <p class="mt-4">daravilla@gmail.com <br>
          rsv@daravilla.com</p>
        </div>
      </div>
    </div>
  </div>
  <div class="luargaris">
    <div class="tengahgaris border-bottom mx-auto mt-5 mb-5" style="width: 300px;"></div>
  </div>
  
  <!-- akhir -->


  
  <!----Contact Form 7--------->
  <?php
$page_id = 82; // ganti 123 dengan ID halaman yang ingin Anda tampilkan
$page = get_post( $page_id );
if ( $page ) {
    echo apply_filters( 'the_content', $page->post_content );
}
?>

<div class="contactt-dara-villa d-flex p-5">
    <div class="card-body">
      <?php echo do_shortcode('[contact-form-7 id="28" title="GungWima"]'); ?>
    </div>
    <iframe class="me-2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.9321899234887!2d115.25814121425782!3d-8.505965293884737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23d697fc746c9%3A0xa16d285df4dcaa3e!2sJl.%20Raya%20Ubud%2C%20Kecamatan%20Ubud%2C%20Kabupaten%20Gianyar%2C%20Bali%2080571!5e0!3m2!1sen!2sid!4v1677219331384!5m2!1sen!2sid" width="300" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
  <!------Akhir---------------->



  <!-- awal maps -->
  <!-- <div class="mx-5" style="position:relative; padding-bottom:56.25%; height:0; margin-top: 100px;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.365053011991!2d115.18894931425912!3d-8.656788143779613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240ac81a822d1%3A0xa0500c6a875bd27d!2sJl.%20Mahendradatta%20No.57%20X%2C%20Padangsambian%2C%20Kec.%20Denpasar%20Bar.%2C%20Kota%20Denpasar%2C%20Bali%2080119!5e0!3m2!1sen!2sid!4v1676605066575!5m2!1sen!2sid" width="100%" height="100%" style="position:absolute; top:0; left:0; border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div> -->
  <!-- Akhir maps-->

<?php get_footer(); ?>
