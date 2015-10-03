<!-- Bootstrap core JavaScript --> 
<script type="text/javascript" src="<?php echo base_url("asset/js/bootstrap.min.js")?>" ></script>
 <script src="<?php echo base_url("asset/js/responsiveslides.min.js")?>"></script> 
  <script>
			 $(function () {
			  $("#slider").responsiveSlides({
				auto: true,
				nav: true,
				speed: 500,
				namespace: "callbacks",
				pager: true,
			  });
			 });
			 </script>
</body>
</html>