<!-- javascripts -->
<script src="/js/holder.min.js"></script>
<script src="/js/jquery-1.8.3.min.js"></script>
<!-- bootstrap -->
<script src="/js/bootstrap.min.js"></script>
<!-- nice scroll -->
<script src="/js/jquery.nicescroll.js" type="text/javascript"></script>
<!--custome script for all page-->
<script src="/js/scripts.js"></script>
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