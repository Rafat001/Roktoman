<?php
use Carbon\Carbon;
$today=Carbon::now()->toDateTimeString();
?>

@extends('frontView.master')

@section('title_area')
	search view
@endsection

@section('header_css')
	<header class="header_area2">
@endsection

@section('header_menu')
	
@endsection

@section('home_body')
		<section class="search_view_area">
			<div class="container-fluid">
			@if(count($raw))
				<div class="hello_massage">
					<h1>hello user!<br/>there is the list of <?php echo $bloodtype; ?> donors</h1>
				</div>
				<div class="panel-body">
					<form action="#">
						<table class="table table-bordered table-striped">
							<tr>
								<th>id</th>
								<th>name</th>
								<th>phone number</th>
								<th>email</th>
								<th>adrees</th>
								<th>Last Donate</th>
							</tr>
							<?php $sr=1;
							foreach ($raw as $data):
							 ?>
							<tr>
								<td>{{$sr}} </td>
								<td>{{$data->fname.' '.$data->lname}}</td>
								<td><a href="tel:+(07) 012345678"><i class="fa fa-phone" aria-hidden="true"></i>{{$data->number}}<a/></td>
								<td class="text_transform_none"><a href="mailto:support@info.com"><i class="fa fa-envelope" aria-hidden="true"></i>{{$data->email}}<a/></td>
								<td><i class="fa fa-map-marker" aria-hidden="true"></i>{{$data->division}}</td>
								<td>@if($data->lastdonate==NULL) 
										{{"Never"}}
									@else
										<p style="color:red; font-size:16px;"> {{$data->lastdonate}}</br>
									    <span style="color:blue; font-size:11px;"> {{Carbon::parse($data->lastdonate)->diffInDays($today)." Days Ago"}} </span></p>
									
									@endif 
								</td>
							</tr>
							<?php 
							  $sr++;
							  endforeach;
							?>
						</table>
					</form>
				</div>
			@else
				<div class="hello_massage">
					<h1>opps!<br/>there is no <?php echo $bloodtype; ?> donors available yet.</h1>
				</div>
			@endif
				<div class="make_post">
						<a href="makepost" class="box_bttn">make post</a>
				</div>
			</div>
		</section>
@endsection

@section('js_script')
		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/one-page-nav.js"></script>
		<script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<script src="assets/js/wow.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/main.js"></script>
@endsection