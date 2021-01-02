<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="shortcut icon" href="img/my_logo.png"/>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<title>{{session('page')}}</title>
</head>
<body>
<div class="my_nav fixed-top">
		<nav class="navbar navbar-expand-lg navbar-light container">
			 <a class="navbar-brand" href="#">
		    <img src="img/my_logo.png" class="d-inline-block align-top" alt="">
		  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">
		    <ul class="navbar-nav mr-3 mt-2 mt-lg-0">
		      <li class="nav-item">
		        <a class="nav-link text-white tc" href="trangchu">Trang chủ</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link text-white tm" href="themmoi">Thêm mới</a>
		      </li>
		        <li class="nav-item">
		        <a class="nav-link text-white ha" href="hinhanh">Hình ảnh</a>
		      </li>
		      </li>
		        <li class="nav-item">
		        <a class="nav-link text-white" href="dangxuat"><i class="fas fa-user">@if(session('user')) {{session('user')['username']}}|{{session('time')}}  @endif</i></a>

		      </li>
		    </ul>
		  </div>
	</nav>
</div>
<!-- end navbar -->
<i class="fas fa-user"></i>