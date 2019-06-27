@extends('base.html5')

@section('html_lang', 'zh-Hant-TW')

@section('head_title', '阿鴻師撲克牌魔術破解')

@section('head_charset', 'UTF-8')

@section('categoryCss')
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
@endsection

@section('content')
		<form action="#" class="text-center">
			@if (!empty($status))
			<div class="alert alert-success">
				<strong>解果</strong> 原始牌[{{ $start_color }}{{ $start_digital }}]的第{{ $number }}張目標牌[{{ $aims_color }}{{ $aims_digital }}]
			</div>
			@endif
			<div class="alert alert-secondary">
				<strong>花色</strong>
			</div>
			<div class="row">
				<div class="col-sm-3">
					<input type="radio" name="start_color" value="0"><span class="text-dark">&#9824;</span>黑桃<br>
				</div>
				<div class="col-sm-3">
					<input type="radio" name="start_color" value="1"><span class="text-danger">&#9829;</span>紅心<br>
				</div>
				<div class="col-sm-3">
					<input type="radio" name="start_color" value="2"><span class="text-danger">&#9830;</span>方塊<br>
				</div>
				<div class="col-sm-3">
					<input type="radio" name="start_color" value="3"><span class="text-dark">&#9827;</span>梅花<br>
				</div>
			</div>
			<div class="alert alert-secondary">
				<strong>牌面</strong>
			</div>
			<div class="row">
				<div class="col-sm-3">
					<input type="radio" name="start_digital" value="0">A<br>
				</div>
				<div class="col-sm-3">
					<input type="radio" name="start_digital" value="9">2<br>
				</div>
				<div class="col-sm-3">
					<input type="radio" name="start_digital" value="5">3<br>
				</div>
				<div class="col-sm-3">
					<input type="radio" name="start_digital" value="1">4<br>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3">
					<input type="radio" name="start_digital" value="10">5<br>
				</div>
				<div class="col-sm-3">
					<input type="radio" name="start_digital" value="6">6<br>
				</div>
				<div class="col-sm-3">
					<input type="radio" name="start_digital" value="2">7<br>
				</div>
				<div class="col-sm-3">
					<input type="radio" name="start_digital" value="11">8<br>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3">
					<input type="radio" name="start_digital" value="7">9<br>
				</div>
				<div class="col-sm-3">
					<input type="radio" name="start_digital" value="3">10<br>
				</div>
				<div class="col-sm-3">
					<input type="radio" name="start_digital" value="12">J<br>
				</div>
				<div class="col-sm-3">
					<input type="radio" name="start_digital" value="8">Q<br>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3">
					<input type="radio" name="start_digital" value="4">K<br>
				</div>
				<div class="col-sm-3">
				</div>
				<div class="col-sm-3">
				</div>
				<div class="col-sm-3">
				</div>
			</div>
			<div class="input-group mb-3">
				<input type="text" name="number" class="form-control" placeholder="第幾張">
				<div class="input-group-append">
					<button class="btn btn-success" type="submit">查詢</button> 
				</div>
			</div>
		</form>
@endsection

@section('categoryJs')
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection

@section('customJs')
<script type="text/javascript">
	$(function () {
		console.log('ready');
	});
</script>
@endsection