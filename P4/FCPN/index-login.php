
<!-- Testimonials -->
<div class="testimonials">
  <div class="testimonials-overlay section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="owl-carousel owl-theme">
            <div class="testimonial-item text-center">
              <div class="icon"> <i class="fas fa-info"></i> </div>
              <p class="m-auto">Mencionar el origen de la Facultad de Ciencias Puras y Naturales (FCPN), es referirse al inicio de la misma Universidad Mayor de San Andrés (UMSA), cuando el 30 de noviembre de 1830, se inauguró la Universidad Menor de San Andrés, con los grados de profesor, bachiller o licenciado.</p>
              <div class="testimonial-author text-center">
                <h5>FCPN</h5>
                <h6>UMSA</h6>
              </div>
            </div>
            <div class="testimonial-item text-center">
              <div class="icon"> <i class="fas fa-map-marker-alt"></i> </div>
              <p class="m-auto">Dirección: Av. Villazón Nº 1995, Plaza del Bicentenario - Zona Central, </p>
              <p class="m-auto">La Paz - Bolivia.</p>
              <div class="testimonial-author text-center">
                <h5>FCPN</h5>
                <h6>UMSA</h6>
              </div>
            </div>
            <div class="testimonial-item text-center">
              <div class="icon"> <i class="fas fa-envelope"></i> </div>
              <p class="m-auto">Telf.: (591-2) 2441570 / 2440571</p>
              <p class="m-auto">Fax: 2441092</p> 
              <p class="m-auto">Email: decanato@fcpn.edu.bo</p>  
              <div class="testimonial-author text-center">
                <h5>FCPN</h5>
                <h6>UMSA</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Testimonials --> 
<!-- Login -->
<div class="contact section-padding" data-scroll-index='5'>
  <div class="container">
    <div class="row">
      <div class="col-md-12 section-title text-center">
        <h3>INICIAR SESIÓN</h3>
        <p>Facultad de Ciencias Puras y Naturales</p>
        <span class="section-title-line"></span> </div>
      <div class="col-lg-4 col-md-3">
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="contact-form">
          <form  id='contact-form' method='GET' action="login.php" data-toggle='validator'>
            <input type='hidden' name='form-name' value='contact-form' />
            <div class="messages"></div>
            <div class="controls">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <input id="form_name" type="text" name="name" placeholder="Usuario *" required="Usuario Requerido.">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <input id="form_subject" type="password" name="password" placeholder="Contraseña" required="Contraseña Requerida.">
                  </div>
                </div>
                <div class="col-lg-12 text-center">
                  <button class="bttn">Ingresar</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Login -->
<?php include "index-fin.php"; ?>