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
						<div class="house-card_images">
							<div id="bootstrapCarousel" class="carousel slide h-100" data-ride="carousel">
								<div class="carousel-inner h-100">
									<div class="carousel-item h-100 active">
										<img src="images/house4.jpg" class="d-block w-100" alt="House Image">
									</div>
									<div class="carousel-item h-100">
										<img src="images/house5.jpg" class="d-block w-100" alt="House Image">
									</div>
									<div class="carousel-item h-100">
										<img src="images/house6.jpg" class="d-block w-100" alt="House Image">
									</div>
								</div>
								<a class="carousel-control-prev" href="#bootstrapCarousel" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Poprzednie</span>
								</a>
								<a class="carousel-control-next" href="#bootstrapCarousel" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Następne</span>
								</a>
							</div>
						</div>
						<div class="house-card_info p-4">
							<div class="d-flex align-items-center mb-2">
								<h5 class="mb-0 mr-2">Piękny domek</h5>
																
							</div>
							<div class="d-flex justify-content-between align-items-end">
								<div class="house-card_details">
									<div class="text-muted mb-2"><a>Augustów</a></div>
									<div class="mb-2"><span class="font-bold">4.5</span> <a href="#!" class="text-muted">(24 opinie)</a>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                    </div>
									<div class="house-checklist pl-0 mb-0">
										<p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
                                        Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid. 
                                        </p>
									</div>
								</div>
								<div class="text-center">
									<h3>399 zł</h3>
									<div class="d-flex">
										 <h6 class="text-striked text-muted mr-2">499 zł</h6>
										 <h6 class="text-success"> Promocja </h6>
									</div>
									<button class="primary-btn">Zarezerwuj</button>
								</div>
							</div>
						</div>
					</div>
                </div>
                <div class="col-sm-9 col-md-9 col-lg-9">
					<div class="house-card bg-white rounded-lg shadow overflow-hidden d-block d-lg-flex">
						<div class="house-card_images">
							<div id="bootstrapCarousel" class="carousel slide h-100" data-ride="carousel">
								<div class="carousel-inner h-100">
									<div class="carousel-item h-100 active">
										<img src="images/house1.jpg" class="d-block w-100" alt="House Image">
									</div>
									<div class="carousel-item h-100">
										<img src="images/house2.jpg" class="d-block w-100" alt="House Image">
									</div>
									<div class="carousel-item h-100">
										<img src="images/house3.jpg" class="d-block w-100" alt="House Image">
									</div>
								</div>
								<a class="carousel-control-prev" href="#bootstrapCarousel" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Poprzednie</span>
								</a>
								<a class="carousel-control-next" href="#bootstrapCarousel" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Następne</span>
								</a>
							</div>
						</div>
						<div class="house-card_info p-4">
							<div class="d-flex align-items-center mb-2">
								<h5 class="mb-0 mr-2">Piękny domek</h5>
																
							</div>
							<div class="d-flex justify-content-between align-items-end">
								<div class="house-card_details">
									<div class="text-muted mb-2"><a>Augustów</a></div>
									<div class="mb-2"><span class="font-bold">4.5</span> <a href="#!" class="text-muted">(24 opinie)</a>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                    </div>
									<div class="house-checklist pl-0 mb-0">
										<p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
                                        Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid. 
                                        </p>
									</div>
								</div>
								<div class="text-center">
									<h3>399 zł</h3>
									<div class="d-flex">
										 <h6 class="text-striked text-muted mr-2">499 zł</h6>
										 <h6 class="text-success"> Promocja </h6>
									</div>
									<button class="primary-btn">Zarezerwuj</button>
								</div>
							</div>
						</div>
					</div>
                </div>
                
                <div class="col-sm-9 col-md-9 col-lg-9">
					<div class="house-card bg-white rounded-lg shadow overflow-hidden d-block d-lg-flex">
						<div class="house-card_images">
							<div id="bootstrapCarousel" class="carousel slide h-100" data-ride="carousel">
								<div class="carousel-inner h-100">
									<div class="carousel-item h-100 active">
										<img src="images/house7.jpg" class="d-block w-100" alt="House Image">
									</div>
									<div class="carousel-item h-100">
										<img src="images/house8.jpg" class="d-block w-100" alt="House Image">
									</div>
									<div class="carousel-item h-100">
										<img src="images/house6.jpg" class="d-block w-100" alt="House Image">
									</div>
								</div>
								<a class="carousel-control-prev" href="#bootstrapCarousel" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Poprzednie</span>
								</a>
								<a class="carousel-control-next" href="#bootstrapCarousel" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Następne</span>
								</a>
							</div>
						</div>
						<div class="house-card_info p-4">
							<div class="d-flex align-items-center mb-2">
								<h5 class="mb-0 mr-2">Piękny domek</h5>
																
							</div>
							<div class="d-flex justify-content-between align-items-end">
								<div class="house-card_details">
									<div class="text-muted mb-2"><a>Augustów</a></div>
									<div class="mb-2"><span class="font-bold">4.5</span> <a href="#!" class="text-muted">(24 opinie)</a>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                    </div>
									<div class="house-checklist pl-0 mb-0">
										<p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
                                        Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid. 
                                        </p>
									</div>
								</div>
								<div class="text-center">
									<h3>399 zł</h3>
									<div class="d-flex">
										 <h6 class="text-striked text-muted mr-2">499 zł</h6>
										 <h6 class="text-success"> Promocja </h6>
									</div>
									<button class="primary-btn">Zarezerwuj</button>
								</div>
							</div>
						</div>
					</div>
                </div>

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
