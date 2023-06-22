@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
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
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<section class="main-content">
		<div class="container">
            <div class="banner">
			    <!-- <h1 class="text-uppercase">Zarezerwuj swój wymarzony domek</h1>  -->
            </div>
			<br>
			<br>
			<div class="row">
				
            
					@foreach($houses as $house)
					<div class="house-card bg-white rounded-lg shadow overflow-hidden d-block d-lg-flex">
                                            
						<div class="house-card_images">
							<div id="bootstrapCarousel" class="carousel slide h-100" data-ride="carousel">
								<div class="carousel-inner h-100">
							
									<div >
										<img src="storage/{{ $house->photo }}" class="d-block w-100" alt="House Image">
									</div>
								</div>
							
							</div>
						</div>
                    
						<div class="house-card_info p-4">
							<div class="d-flex align-items-center mb-2">
								<h5 class="mb-0 mr-2">{{ $house->name }}</h5>	
							</div>
							<div class="d-flex justify-content-between align-items-end">
								<div class="house-card_details">
									<div class="text-muted mb-2"><a>{{ $house->address }}</a></div>
									<div class="mb-2"><span class="font-bold">Ocena domku:
									<?php
									
										$houseId = $house->id;
										$averageRating = App\Models\Opinions::where('id_house', $houseId)->average('rating');
										$roundedRating = round($averageRating, 2);
										if ($roundedRating == 0) echo "Brak ocen";
										else echo $roundedRating;					
									?>
									<a href="{{ route('house.show', $house->id) }}">
                                        <button class="text-muted" type="submit">
                                            Zobacz opinie
                                        </button>
                                    </a>
									</span>
									<div class="mb-2"><span>
                                    <a href="{{ route('house.rating', $house->id) }}" class="btn btn-sm btn-primary">Dodaj ocenę</a>
									</span>
									</div>
                                                                        
                                    </div>
									<div class="house-checklist pl-0 mb-0">
										<p>{{ $house->description }}</p>
									</div>
								</div>
								<div class="text-center">	
								<h3>{{ $house->price }} zł</h3>
								<h5>Za dzień</h5>
                                <a href="{{ route('house.reserve', $house->id) }}"><button class="primary-btn">Zarezerwuj</button></a>
								</div> 
								
							</div>
						</div>
                        @if(Auth::user()->role == 'admin')
								<div class="text-center">
									<div class="dropdown">
										<button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Opcje
										</button>
										<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" href="{{ route('house.edit', $house->id) }}">Edytuj</a>
											<a class="dropdown-item" href="{{ route('house.delete', $house->id) }}">Usuń</a>
										</div>
									</div>
								</div>
								@endif
					</div>
					
					@endforeach
                </div>
				@if ( Auth::user()->role == 'admin' )
				<div class="row mt-3">
                            <div class="col-md-8 offset-md-4">
                                <p><a href="{{ route('house.create') }}">Dodaj nowy domek</a></p>
                            </div>
                        </div>
						@endif
						<script>
					document.addEventListener("DOMContentLoaded", function() {
						var dropdownToggle = document.querySelector('.dropdown-toggle');

						dropdownToggle.addEventListener("click", function() {
							var dropdownMenu = this.nextElementSibling;
							dropdownMenu.classList.toggle("show");
						});

						window.addEventListener("click", function(event) {
							if (!event.target.matches('.dropdown-toggle')) {
								var dropdownMenus = document.getElementsByClassName("dropdown-menu");
								for (var i = 0; i < dropdownMenus.length; i++) {
									var openDropdownMenu = dropdownMenus[i];
									if (openDropdownMenu.classList.contains('show')) {
										openDropdownMenu.classList.remove('show');
									}
								}
							}
						});
					});
				</script>
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
