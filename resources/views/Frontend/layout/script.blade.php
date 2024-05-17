
	<!-- JS here -->

	<script src="{{asset('assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
	<script src="{{asset('assets/js/vendor/popper.min.js')}}"></script>
	<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>
	<script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.easypiechart.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('assets/js/metisMenu.min.js')}}"></script>
	<script src="{{asset('assets/js/wow.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('assets/js/aos.js')}}"></script>
	<script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery-ui.js')}}"></script>
	<script src="{{asset('assets/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('assets/js/plugins.js')}}"></script>


	<!--Custom JS here -->
	<script src="{{asset('assets/js/main.js')}}"></script>
	

<!-- banner second letter should red -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    var titles = document.querySelectorAll('.red-second-letter');
    titles.forEach(function(titleElement) {
      var text = titleElement.textContent.trim();
      var words = text.split(' ');
      if (words.length >= 2) {
        words[1] = '<span style="color: red;">' + words[1] + '</span>';
        titleElement.innerHTML = words.join(' ');
      }
    });
  });
</script>
<!-- banner second letter should red  end-->


