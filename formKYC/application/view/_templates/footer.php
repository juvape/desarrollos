
    <footer class="wow bounceInDown" data-wow-duration="2s">
      <p>
        All rights reserved
      </p>
      <center>
        <p>
          <img src="<?php echo URL ?>img/logo/maaji.jpg" alt="logo" width="30" height="30">
          &copy; Maaji <?php echo Date('Y'); ?>
        </p>
      </center>
    </footer>

    <script>
        var url = "<?php echo URL; ?>";
    </script>

    <script src="<?php echo URL; ?>js/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="<?php echo URL; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo URL; ?>js/bootstrap-datepicker.js"></script>
    <script src="<?php echo URL; ?>js/bootstrap-submenu.js"></script>


    <!-- Template -->
    <script src="<?php echo URL; ?>js/modernizr.custom.js"></script>
    <script src="<?php echo URL; ?>js/classie.js"></script>
    <script src="<?php echo URL; ?>js/screenfull.js"></script>
    <script src="<?php echo URL; ?>js/screen.js"></script>
    <!-- <script src="<?php echo URL; ?>js/scripts.js"></script> -->
    <script src="<?php echo URL; ?>js/jquery-ui.min.js"></script>

    <!-- DataTables -->
    <script src="<?php echo URL; ?>js/jquery.dataTables.min.js"></script>

    <!-- Select 2 -->
    <script src="<?php echo URL; ?>js/select2.min.js"></script>

    <!-- Start Lightbox -->
    <script type="text/javascript" src="<?php echo URL; ?>lightbox/vlb_engine/visuallightbox.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>lightbox/vlb_engine/vlbdata1.js"></script>

    <!-- Sweetalert -->
    <script type="text/javascript" src="<?php echo URL ?>js/sweetalert.min.js"></script>

    <!-- Datepicker -->
    <script type="text/javascript" src="<?php echo URL ?>js/bootstrap-datepicker.js"></script>

    <!-- Javascripts propios -->
    <script type="text/javascript" src="<?php echo URL; ?>js/customers.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>js/customers2.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>js/customers3.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>js/customers4.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>js/updated-customers.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>js/updated-customers-form2.js"></script>
	 <script type="text/javascript" src="<?php echo URL; ?>js/updated-customers-form3.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>js/updated-customers-form-4.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>js/users.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>js/login.js"></script>
     <script type="text/javascript" src="<?php echo URL; ?>js/forgotPassword.js"></script>

    <!-- Diseño input type file -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>js/fileinput.min.js"></script>

    <!-- para los selects de index2, inde3 y index4 -->
    <script type="text/javascript" src="<?php echo URL; ?>js/selects.js"></script>

    <script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
    });

    // para el input file index4
    $(".file-3").fileinput({
        showCaption: false,
        browseClass: "btn btn-primary btn-lg",
        fileType: "any"
    });
    </script>
</body>
</html>
