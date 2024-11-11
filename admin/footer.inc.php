        <!-- Development version -->
<script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>

<!-- Production version -->
<script src="https://unpkg.com/lucide@latest"></script>
<script type="text/javascript">
    lucide.createIcons();
</script>


   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
      <script type="text/javascript">
        toastr.options = {
          "closeButton": true,  
          "debug": false,
          "newestOnTop": true,
          "progressBar": true,  
          "positionClass": "toast-top-right",  
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000", 
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
      };

      <?php if($_GET['status']=='send') { ?>
        toastr.success('Enquiry Send Sucessfully');
      <?php } ?>


  </script>


  </body>
</html>
