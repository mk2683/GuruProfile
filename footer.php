<link rel="stylesheet" type="text/css" href="assets/css/footer-distributed.css">
<!--Start footer coding-->
<div id="section6">

	 <div class="row">
        <div class="col-md-12">
		<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Guru<span>Profile</span></h3>

				<p class="footer-links">
					<a href="#section1">Home</a>
					·
					<a href="#section2">About</a>
					·
					<a href="#section3">Gallery</a>
					·
					<a href="#section41">Service</a>
					·
					<a href="#section4">Blog</a>
					·
					<a href="#section5">Contact</a>
				</p>

				<p class="footer-company-name">Company Name &copy; 2017</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Dwarka Sec-16c</span> Delhi, India</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+1 555 123456</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="#">support@companyname.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					vhvhfvwhd mdvmhwgdghfv qdjhydagabadav sjhadajhg ygdghsaaggaf avashfasfgawfg, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>
       </div>
	</div>
</div>
<!--End footer coding-->

<style>
  #section6{padding-top:50px; max-height:auto !important; width:100%; float:left;}
  
footer{
	position: relative;
	bottom: 0px;
}

@media (max-height:800px){
	footer { position: static; }
}

</style>
<script>
//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
</script>
</body>
</html>