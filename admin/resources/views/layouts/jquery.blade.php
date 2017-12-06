    <!-- javascripts -->
    
    <script src="/bootstrap_admin/js/holder.min.js"></script>
    <script src="/bootstrap_admin/js/jquery-1.8.3.min.js"></script>
    <!-- bootstrap -->
    <script src="/bootstrap_admin/js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="/bootstrap_admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!--custome script for all page-->
    <script src="/bootstrap_admin/js/scripts.js"></script>
    @section('js')
    @show
    <script>
        //carousel
        $(document).ready(function() {
            $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true
            });
        });
    </script>