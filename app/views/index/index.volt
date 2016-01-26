{{ tag_html("div",["class": "page-header"])}}
    {{ tag_html('h1')}} Welcome!{{ tag_html_close('h1')}}
{{tag_html_close("div")}}

<div id="slideshow-mudah" class="carousel slide" data-ride="carousel">
  <!-- Indicators, Ini adalah Tombol BULET BULET dibawah. item ini dapat dihapus jika tidak diperlukan -->
  <ol class="carousel-indicators">
    <li data-target="#slideshow-mudah" data-slide-to="0" class="active"></li>
    <li data-target="#slideshow-mudah" data-slide-to="1"></li>
    <li data-target="#slideshow-mudah" data-slide-to="2"></li>
    <li data-target="#slideshow-mudah" data-slide-to="3"></li>
  </ol>
 
  <!-- Wrapper for slides, Ini adalah Tempat Gambar-->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/webadmin.png" alt="slideshow-mudah"> <!—Gambar -->
      <div class="carousel-caption"> <!—Penjelasan -->
        <h3>Web: Page Admin</h3>
      </div>
    </div>
    <div class="item">
      <img src="images/loginandro.png" alt="slideshow-mudah"> <!—Gambar -->
      <div class="carousel-caption">  <!—Penjelasan -->
        <h3>Android: Login Supir</h3>
      </div>
    </div>
    <div class="item">
      <img src="images/supir.png" alt="slideshow-mudah"> <!—Gambar -->
      <div class="carousel-caption"> <!—Penjelasan -->
        <h3>Android: Home Supir</h3>
      </div>
    </div>
    <div class="item">
      <img src="images/customer.png" alt="slideshow-mudah"> <!—Gambar -->
      <div class="carousel-caption"> <!—Penjelasan -->
        <h3>Android: Home Customer</h3>
      </div>
    </div>
     
    
  </div>
 
  <!-- Controls, Ini adalah Panah Kanan dan Kiri. item ini dapat dihapus jika tidak diperlukan-->
  <a class="left carousel-control" href="#slideshow-mudah" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#slideshow-mudah" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
  <!-- Content END -->