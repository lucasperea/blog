	<div class="container sidebar">

	<div class="row">
		<div class="col-md-4">
			<h3>recent posts</h3>
			<ul>
				<li>
				<?php dynamic_sidebar( 'left-sidebar' ); ?>
				</li>
			</ul>
		</div>
		<div class="col-md-4 hidden-xs">
			<h3>categories</h3>
			<ul>
			    <li><?php dynamic_sidebar( 'middle-sidebar' ); ?></li>
			</ul>

		</div>
		<div class="col-md-4 hidden-xs">
			<h3>tags</h3>
			<ul><li><?php dynamic_sidebar( 'right-sidebar' ); ?>git </li></ul>
		</div>
	</div>
	</div>
<div class="container footer-mobile">
	<div class="row">
		
		<div class="col-xs-12 text-right">
				Tix Inc. <br>718 W. Anaheim Street <br>Long Beach, CA 90813<br>
		 
		 <span class="glyphicon glyphicon-phone-alt"></span> 800.504.4849
			
		
		</div>
		<div class="col-xs-12  text-right">
<ul>
				<li>
				<a href="http://www.facebook.com/tixinc">	<i class="fa fa-facebook"></i></a>
				</li>
				<li>
				<a href="http://www.twitter.com/tixinc">
					<i class="fa fa-twitter"></i></a>
				</li>
				<li>
				<A href="http://plus.google.com/106184051327532678900/about">	<i class="fa fa-google"></i></a>
				</li>
			</ul>
			
		</div>
	</div>
</div>



	<!-- Latest compiled and minified JavaScript -->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<?php wp_footer(); ?>
</body>

</html>
