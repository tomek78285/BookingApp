@extends('layouts.app')

@section('content')
<style>
   

    @import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap");
body {
	background: #f9f9f9;
	font-family: "roboto", sans-serif;
}


.main-content {
	padding-top: 100px;
	padding-bottom: 100px;
}

.text-striked {
	text-decoration: line-through;
}

.shadow {
	box-shadow: 0 2px 10px rgba(0, 0, 0, 0.06) !important;
}

.house-card {
    margin-bottom: 20px; 
  }
  
.flex {
  display: flex;
}

.font-bold {
  font-weight: bold;
}

.house-card .house-card_images {
	flex: 2;
}
.house-card .house-card_images .carousel-item img {
	height: 250px;
	object-fit: cover;
}
@media (min-width: 992px) {
	.house-card .house-card_images .carousel-item img {
		height: 100%;
	}
}

.primary-btn {
  padding: 15px 25px;
  background: #7fc142;
  font-weight: bold;
  color: white;
  border-radius: 10px;
}

.house-card .house-card_info {
	flex: 3;
}

.house-card .amnities img {
	max-height: 20px;
}

.house-card .house-checklist {
	list-style-type: none;
}

.carousel .carousel-control-prev {
	background: linear-gradient(to right, #333333bb, #33333300);
}

.carousel .carousel-control-next {
	background: linear-gradient(to left, #333333bb, #33333300);
}

.banner {
    background-image: url("../images/banner.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    height: 30vh;
    width: 100%;
    color: #fff;
}


</style>

<section class="main-content">
		<div class="container">
            <div class="banner">
			    <!-- <h1 class="text-uppercase">Zarezerwuj swój wymarzony domek</h1>  -->
            </div>
			<br>
			<br>
			<div class="row">
				
            <div class="col-sm-9 col-md-9 col-lg-9">
					<div class="house-card bg-white rounded-lg shadow overflow-hidden d-block d-lg-flex">
                        @foreach($houses as $house)
                        
						
                        @endforeach
					</div>
                </div>
                
	</section>  

    <script src="https://kit.fontawesome.com/032d11eac3.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
	<script>
		$(function () {
			$('[data-toggle="tooltip"]').tooltip()
		})
	</script>
@endsection 
