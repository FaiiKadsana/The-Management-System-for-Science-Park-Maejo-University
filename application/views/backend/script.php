<!-- Bootstrap core JavaScript --> 
    
     </section>
      </section>
      <!--main content end-->
  </section>

    <!-- javascripts -->
    <script src="<?php echo base_url("asset2/js/jquery.js")?>"></script>
	<script src="<?php echo base_url("asset2/js/jquery-ui-1.10.4.min.js")?>"></script>
    <script src="<?php echo base_url("asset2/js/jquery-1.8.3.min.js")?>"></script>
    <script src="<?php echo base_url("asset2/js/jquery-ui-1.9.2.custom.min.js")?>" type="text/javascript" ></script>
    <!-- bootstrap -->
    <script src="<?php echo base_url("asset2/js/bootstrap.min.js")?>"></script>
    <!-- nice scroll -->
    <script src="<?php echo base_url("asset2/js/jquery.scrollTo.min.js")?>"></script>
    <script src="<?php echo base_url("asset2/js/jquery.nicescroll.js")?>" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="<?php echo base_url("asset2/assets/jquery-knob/js/jquery.knob.js")?>"></script>
    <script src="<?php echo base_url("asset2/js/jquery.sparkline.js")?>" type="text/javascript"></script>
    <script src="<?php echo base_url("asset2/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js")?>"></script>
    <script src="<?php echo base_url("asset2/js/owl.carousel.js")?>" ></script>
    <!-- jQuery full calendar -->
    <script src="<?php echo base_url("asset2/js/fullcalendar.min.js")?>"></script> <!-- Full Google Calendar - Calendar -->
	<script src="<?php echo base_url("asset2/assets/fullcalendar/fullcalendar/fullcalendar.js")?>"></script>
    <!--script for this page only-->
    <script src="<?php echo base_url("asset2/js/calendar-custom.js")?>"></script>
	<script src="<?php echo base_url("asset2/js/jquery.rateit.min.js")?>"></script>
    <!-- custom select -->
    <script src="<?php echo base_url("asset2/js/jquery.customSelect.min.js")?>" ></script>
	<script src="<?php echo base_url("asset2/assets/chart-master/Chart.js")?>"></script>
   
    <!--custome script for all page-->
    <script src="<?php echo base_url("asset2/js/scripts.js")?>"></script>
    <!-- custom script for this page-->
    <script src="<?php echo base_url("asset2/js/sparkline-chart.js")?>"></script>
    <script src="<?php echo base_url("asset2/js/easy-pie-chart.js")?>"></script>
	<script src="<?php echo base_url("asset2/js/jquery-jvectormap-1.2.2.min.js")?>"></script>
	<script src="<?php echo base_url("asset2/js/jquery-jvectormap-world-mill-en.js")?>"></script>
	<script src="<?php echo base_url("asset2/js/xcharts.min.js")?>"></script>
	<script src="<?php echo base_url("asset2/js/jquery.autosize.min.js")?>"></script>
	<script src="<?php echo base_url("asset2/js/jquery.placeholder.min.js")?>"></script>
	<script src="<?php echo base_url("asset2/js/gdp-data.js")?>"></script>	
	<script src="<?php echo base_url("asset2/js/morris.min.js")?>"></script>
	<script src="<?php echo base_url("asset2/js/sparklines.js")?>"></script>	
	<script src="<?php echo base_url("asset2/js/charts.js")?>"></script>
	<script src="<?php echo base_url("asset2/js/jquery.slimscroll.min.js")?>"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});



  </script>

  </body>
</html>
