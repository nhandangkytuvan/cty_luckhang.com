<header class="container">
	<div class="row pos-relative">
	    <img src="{{ asset('public/image/luckhangcom/mobile/header/1.png') }}" alt="" class="img-responsive center-block">
	    <div class="bg">
		    <table>
				<tr>
					<td><a href="#"><img src="{{ asset('public/image/luckhangcom/mobile/header/2.png') }}" alt="" class="center-block"></a></td>
					<td>Đường dây nóng tư vấn, đặt hàng toàn quốc</td>
					<td><a href="#">0123 456 789</a></td>
				</tr>
			</table>
	    </div>
	    <i class="fa fa-bars pos-absolute" aria-hidden="true"></i>
	    <script>
	    	$(document).ready(function() {
	    		$("i.fa.fa-bars,body .overlay").click(function(event) {
	    			$("body").toggleClass('active');
	    			$("body .overlay").toggleClass('active');
	    		});
	    	});
	    </script>
	</div>
</header>