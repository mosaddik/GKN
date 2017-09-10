<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/site.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/4.0.2/bootstrap-material-design.css" /> -->
</head>
<body>

<section>

	

   	<div class="body">
   	
   	<nav>
		<ul>
			<li>ABOUT US</li>
			<li>LOGIN</li>
			<li>REGISTRATION</li>
			<li>TEAM</li>
			<li>CONTACT</li>	
		</ul>
	</nav>

		<span id="login-text"> LOGIN </span>

		<div class="login-form">
			
			<form>
			  <div class="group">
				    <input type="text" class="input" ><span class="highlight "></span><span class="bar"></span>
				    <label>USERNAME</label>
			  </div>

			  <div class="group">
				    <input type="email" class="input"><span class="highlight"></span><span class="bar"></span>
				    <label>PASSWORD</label>
			  </div>
			</form>

			<button type="button" id="button" class="button buttonBlue pull"> <i class="fa fa-caret-right pull-left" aria-hidden="true"></i> <span class="pull-right"> Get Started <span>
			   		<div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
			  </button>
		<div><!-- login from end -->	

		<div class="other-option-for-login">
			<a href="#"> Forget Password </a>

			<div class="pull-right">
				<p> Not Registered? <a href="#"> Create Acount </a> </p>
			</div>
		</div>

    </div>	
</section>



	<div class="footer">

		<div class="col-md-4 footer-font-header">
			<p> <b>GKN GROUP </b> <span class="star">*</span> <p>

			<p>goddess Knowledge News is Community of professionals </p> 
		</div>

		<div class="col-md-4 footer-font-header">


			<p> <b>EMERGENCIES</b> <span class="star">*</span> <p> 

			<div class="footer-md-content">

				<div  class="footer-input" > mosaddikbinhafiz@gmail.com </div>

				<div  class="footer-input" > mosaddikbinhafiz@gmail.com </div>

				<div  class="footer-input" > mosaddikbinhafiz@gmail.com </div>

				<div  class="footer-input" > mosaddikbinhafiz@gmail.com </div>

			</div>	

		</div>

		<div class="con-md-4 footer-font-header">
			<p> <b>NOTICE </b> <span class="star">*</span><p> 
		</div>
			
	</div>
	
<div class="footer-bottom">
	
</div>




<!-- jqrey -->
<script type="text/javascript" src="<?php echo base_url(); ?>/scripts/jquery-3.1.1.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/scripts/bootstrap.min.js"></script>
<script type="text/javascript">
	$(window, document, undefined).ready(function() {

  $('input').blur(function() {
    var $this = $(this);
    if ($this.val())
      $this.addClass('used');
    else
      $this.removeClass('used');
  });

  var $ripples = $('.ripples');

  $ripples.on('click.Ripples', function(e) {

    var $this = $(this);
    var $offset = $this.parent().offset();
    var $circle = $this.find('.ripplesCircle');

    var x = e.pageX - $offset.left;
    var y = e.pageY - $offset.top;

    $circle.css({
      top: y + 'px',
      left: x + 'px'
    });

    $this.addClass('is-active');

  });

  $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
  	$(this).removeClass('is-active');
  });

});
</script>

<!-- anuglar js -->
<script type="text/javascript" src="<?php echo base_url(); ?>/scripts/angular.js"></script>
</body>

</html>