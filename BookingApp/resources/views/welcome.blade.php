<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking App</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css') }}" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css') }}" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="{{ asset('https://code.jquery.com/jquery-1.12.4.min.js') }}" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
</head>

<body>


  <header>
    <div class="content flex_space">
      <div class="logo">
        <img src="images/logo1.png" alt="">
      </div>
      <div class="navlinks">
        <ul id="menulist">
          <li><a href="#home">Strona główna</a> </li>
          <li><a href="#about">O nas</a> </li>
          <li><a href="#houses">Domki</a> </li>
          <li><a href="#contact">Kontakt</a> </li>
          <li> <i class="fa fa-search"></i> </li>
          <li> <button class="primary-btn">Zaloguj się</button> </li>
        </ul>
        <span class="fa fa-bars" onclick="menutoggle()"></span>
      </div>
    </div>
  </header>

  <script>
    var menulist = document.getElementById('menulist');
    menulist.style.maxHeight = "0px";

    function menutoggle() {
      if (menulist.style.maxHeight == "0px") {
        menulist.style.maxHeight = "100vh";
      } else {
        menulist.style.maxHeight = "0px";
      }
    }
  </script>


  <section class="home">
    <div class="content">
      <div class="owl-carousel owl-theme">
        <div class="item">
          <img src="images/banner-1.jpg" alt="">
          <div class="text">
            <h1>Spędź z nami swoje wakacje</h1>
            <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
            </p>
            <div class="flex">
              <button class="primary-btn">NASZA OFERTA</button>
              <button class="secondary-btn">KONTAKT</button>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/banner-2.jpg" alt="">
          <div class="text">
            <h1>Spędź z nami swoje wakacje</h1>
            <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
            </p>
            <div class="flex">
              <button class="primary-btn">NASZA OFERTA</button>
              <button class="secondary-btn">KONTAKT</button>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/banner-3.jpg" alt="">
          <div class="text">
            <h1>Spędź z nami swoje wakacje</h1>
            <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
            </p>
            <div class="flex">
              <button class="primary-btn">NASZA OFERTA</button>
              <button class="secondary-btn">KONTAKT</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js') }}" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js') }}" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      dots: false,
      navText: ["<i class = 'fa fa-chevron-left'></i>", "<i class = 'fa fa-chevron-right'></i>"],
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    })
  </script>




  <section class="book">
    <div class="container flex_space">
      <div class="text">
        <h1> <span>Zarezerwuj </span> Wymarzony Domek </h1>
      </div>
      <div class="form">
        <form class="grid">
          <input type="date" placeholder="Data przyjazdu">
          <input type="date" placeholder="Data wyjazdu">
          <input type="number" placeholder="Liczba osób">
          <input type="submit" value="Sprawdź dostępność">
        </form>
      </div>
    </div>
  </section>



  <section class="about top">
    <div class="container flex">
      <div class="left">
        <div class="heading">
          <h2>Nasza agroturystyka</h2>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
          aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <button class="primary-btn">Dowiedz się więcej</button>
      </div>
      <div class="right">
        <img src="images/about1.png" alt="">
      </div>
    </div>
  </section>

  <section class="houses">
    <div class="container top">
      <div class="heading">
        <h1>ODKRYJ</h1>
        <h2>Nasze domki</h2>
        <p>Pełen relaks na łonie natury z pięknymi widokami</p>
      </div>

      <div class="content mtop">
        <div class="owl-carousel owl-carousel1 owl-theme">
          <div class="items">
            <div class="image">
              <img src="images/house1.jpg" alt="">
            </div>
            <div class="text">
              <h2>Piękne Domki</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
              </p>
              <div class="button flex">
                <button class="primary-btn">ZAREZERWUJ</button>
                <h3>300 zł <span> <br> Za dobę </span> </h3>
              </div>
            </div>
          </div>
          <div class="items">
            <div class="image">
              <img src="images/house2.jpg" alt="">
            </div>
            <div class="text">
              <h2>Piękne Domki</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
              </p>
              <div class="button flex">
                <button class="primary-btn">ZAREZERWUJ</button>
                <h3>300 zł <span> <br> Za dobę </span> </h3>
              </div>
            </div>
          </div>
          <div class="items">
            <div class="image">
              <img src="images/house3.jpg" alt="">
            </div>
            <div class="text">
              <h2>Piękne Domki</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
              </p>
              <div class="button flex">
                <button class="primary-btn">ZAREZERWUJ</button>
                <h3>300 zł <span> <br> Za dobę </span> </h3>
              </div>
            </div>
          </div>
          <div class="items">
            <div class="image">
              <img src="images/house4.jpg" alt="">
            </div>
            <div class="text">
              <h2>Piękne Domki</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
              </p>
              <div class="button flex">
                <button class="primary-btn">ZAREZERWUJ</button>
                <h3>300 zł <span> <br> Za dobę </span> </h3>
              </div>
            </div>
          </div>
          <div class="items">
            <div class="image">
              <img src="images/house5.jpg" alt="">
            </div>
            <div class="text">
              <h2>Piękne Domki</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
              </p>
              <div class="button flex">
                <button class="primary-btn">ZAREZERWUJ</button>
                <h3>300 zł <span> <br> Za dobę </span> </h3>
              </div>
            </div>
          </div>
          <div class="items">
            <div class="image">
              <img src="images/house6.jpg" alt="">
            </div>
            <div class="text">
              <h2>Piękne Domki</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
              </p>
              <div class="button flex">
                <button class="primary-btn">ZAREZERWUJ</button>
                <h3>300 zł <span> <br> Za dobę </span> </h3>
              </div>
            </div>
          </div>
          <div class="items">
            <div class="image">
              <img src="images/house7.jpg" alt="">
            </div>
            <div class="text">
              <h2>Piękne Domki</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
              </p>
              <div class="button flex">
                <button class="primary-btn">ZAREZERWUJ</button>
                <h3>300 zł <span> <br> Za dobę </span> </h3>
              </div>
            </div>
          </div>
          <div class="items">
            <div class="image">
              <img src="images/house8.jpg" alt="">
            </div>
            <div class="text">
              <h2>Piękne Domki</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
              </p>
              <div class="button flex">
                <button class="primary-btn">ZAREZERWUJ</button>
                <h3>300 zł <span> <br> Za dobę </span> </h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    $('.owl-carousel1').owlCarousel({
      loop: true,
      margin: 40,
      nav: true,
      dots: false,
      navText: ["<i class = 'fa fa-chevron-left'></i>", "<i class = 'fa fa-chevron-right'></i>"],
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 2,
          margin: 10,
        },
        1000: {
          items: 3
        }
      }
    })
  </script>





  <footer>
    <div class="container grid">
      <div class="box">
        <img src="images/logo.png" alt="">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <div class="icon">
          <i class="fa fa-facebook-f"></i>
          <i class="fa fa-instagram"></i>
          <i class="fa fa-twitter"></i>
          <i class="fa fa-youtube"></i>
        </div>
      </div>

      <div class="box">
        <h2>Przydatne linki</h2>
        <ul>
          <li>O nas</li>
          <li>Kontakt</li>
          <li>Usługi</li>
          <li>Regulamin</li>
        </ul>
      </div>

      <div class="box">
        <h2>Kontakt</h2>
        <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
        </p>
        <i class="fa fa-location-dot"></i>
        <label>Sezamkowa 23, 19-488 Augustów</label> <br>
        <i class="fa fa-phone"></i>
        <label>[88] 657 524 332</label> <br>
        <i class="fa fa-envelope"></i>
        <label>info@domki.com</label> <br>
      </div>
    </div>
  </footer>

  <div class="legal">
    <p class="container">Tomasz Kadłubowski, Franciszek Turowski, Dawid Koszczuk</p>
  </div>



  <script src="https://kit.fontawesome.com/032d11eac3.js" crossorigin="anonymous"></script>
</body>

</html>
