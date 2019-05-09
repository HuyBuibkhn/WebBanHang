@extends('master')
@section('content')
</div> <!-- #header -->
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Liên hệ</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('trang-chu')}}">Home</a> / <span>Liên hệ</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<div id="content" class="space-top-none">
			
			<div class="space50">&nbsp;</div>
			<div class="row">
				<div class="col-lg-5">
					<div><h4>Thông Tin Liên Hệ</h4></div>
					<div class="space20 ">&nbsp;</div>

					<h6 class="contact-title">Địa chỉ</h6>
					<p>
						<span class="glyphicon glyphicon-road"></span> Số 90-92 đường Trần Đại Nghĩa, quận Hai Bà Trưng, Hà Nội
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">Số điện thoại</h6>
					<p>
						<span class="glyphicon glyphicon-earphone"></span> 0397687558 <br>
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">Email</h6>
					<p>
						<span class="glyphicon glyphicon-envelope"></span> tiembanhbakeralley@gmail.com
					</p>
				</div>
				<div class="col-lg-4">
					<div id="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.8631157848636!2d105.84357091470656!3d20.99812348601495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac719229cd95%3A0xd60b5ade1d6c193a!2zU-G7kSA5MCwgOTIgVHLhuqduIMSQ4bqhaSBOZ2jEqWEsIMSQ4buTbmcgVMOibSwgSGFpIELDoCBUcsawbmcsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1557376132627!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>

		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection