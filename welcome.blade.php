 <!DOCTYPE html>
 <html>

 <head>
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="{{asset('assets/css/materialize.min.css')}}"
         media="screen,projection" />


     <!-- my CSS -->
     <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />

     <title>Website Santho Manullang</title>
 </head>

 <body id="home" class="scrollspy">

     <!-- navbar -->
     <div class="navbar-fixed">
         <nav class="blue darken-2">
             <div class="container">
                 <div class="nav-wrapper">
                     <a href="#home" class="brand-logo">Santho Manullang</a>
                     <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>

                     <ul class="right hide-on-med-and-down">
                         <li><a href="{{ url('#about') }}">About Us</a></li>
                         <li><a href="{{ url('#clients')}}">Clients</a></li>
                         <li><a href="{{ url('#services')}}">Services</a></li>
                         <li><a href="{{url('#portfolio')}}">Portfolio</a></li>
                         <li><a href="{{url('#contact')}}">Contact Us</a></li>
                         <li><a href="{{url('profile')}}">Profile</a></li>
                         <li><a href="{{url('register')}}"><button type="submit"
                                     class="btn blue darken-2">Register</button></a>
                         </li>
                     </ul>
                 </div>
             </div>
         </nav>
     </div>


     <!-- sidenav -->
     <ul class="sidenav" id="mobile-nav">
         <li><a href="{{ url('#about') }}">About Us</a></li>
         <li><a href="{{ url('#clients') }}">Clients</a></li>
         <li><a href="{{ url('#services') }}">Services</a></li>
         <li><a href="{{ url('#portfolio') }}">Portfolio</a></li>
         <li><a href="{{ url('#contact') }}">Contact Us</a></li>
         <li><a href="{{ url('profile') }}">Profile</a></li>
         <li><a href="{{ url('register') }}"><button type="submit" class="btn blue darken-2">Register</button></a></li>
     </ul>

     <!-- slider -->
     <div class="slider">
         <ul class="slides">
             <li>
                 <img src="{{asset('assets/img/slider/image1.png')}}">
                 <div class="caption left-align">
                     <h3>I'm Santho Manullang</h3>
                     <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                 </div>
             </li>
             <li>
                 <img src="{{asset('assets/img/slider/image2.png')}}">
                 <div class="caption right-align">
                     <h3>This is our big Tagline!</h3>
                     <h5 class="light grey-text text-lighten-3">We seek to be best.</h5>
                 </div>
             </li>
             <li>
                 <img src="{{asset('assets/img/slider/image3.png')}}">
                 <div class="caption center-align">
                     <h3>Together we can do it</h3>
                     <h5 class="light grey-text text-lighten-3">If we never try, we will never know.</h5>
                 </div>
             </li>
             <li>
                 <img src="{{asset('assets/img/slider/image4.png')}}">
                 <div class="caption left-align">
                     <h3>Leave the rest to us</h3>
                     <h5 class="light grey-text text-lighten-3">Struggle that you do today is the single way to build a
                         better future.</h5>
                 </div>
             </li>
             <li>
                 <img src="{{asset('assets/img/slider/image5.png')}}">
                 <div class="caption right-align">
                     <h3>We will make you all feel comfortable</h3>
                     <h5 class="light grey-text text-lighten-3">Do your best at every opportunity that you have.</h5>
                 </div>
             </li>
             <li>
                 <img src="{{asset('assets/img/slider/1.png')}}">
                 <div class="caption center-align">
                     <h3>Let's start now</h3>
                     <h5 class="light grey-text text-lighten-3"> It always seems imposibble until it’s done.</h5>
                 </div>
             </li>
         </ul>
     </div>



     <!-- About Us -->
     <section id="about" class="about scrollspy">
         <div class="container">
             <div class="row">
                 <h3 class="center light grey-text text-darken-3">About Us</h3>
                 <div class="col m6 light">
                     <h5>We Are Professionals</h5>
                     <p> A website that has an information system service that is guaranteed so that every user and
                         visitor can comfortably use it. Register and see how we work behind the scenes</p>
                 </div>
                 <div class="col m6 light">
                     <p>WEB DEVELOPMENT</p>
                     <div class="progress">
                         <div class="determinate blue" style="width: 95%"></div>
                     </div>
                     <p>MOBILE APP DEVELOPMENT</p>
                     <div class="progress">
                         <div class="determinate" style="width: 85%"></div>
                     </div>
                     <p>GAME DEVELOPMENT</p>
                     <div class="progress">
                         <div class="determinate" style="width: 90%"></div>
                     </div>

                 </div>
             </div>
         </div>
     </section>


     <!-- Clients -->
     <div class="parallax-container">
         <div class="parallax"><img src="{{asset('assets/img/slider/4.png')}}"></div>


         <div id="clients" class="container clients scrollspy">
             <h3 class="center light white-text">Our Clients</h3>
             <div class="row">
                 <div class="col m4 s12 center">
                     <img src="{{asset('assets/img/clients/gojek.png')}}">
                 </div>
                 <div class="col m4 s12 center">
                     <img src="{{asset('assets/img/clients/tokopedia.png')}}">
                 </div>
                 <div class="col m4 s12 center">
                     <img src="{{asset('assets/img/clients/traveloka.png')}}">
                 </div>
             </div>
         </div>

     </div>


     <!-- services -->
     <section id="services" class="services grey lighten-3 scrollspy">
         <div class="container">
             <div class="row">
                 <h3 class="light center grey-text text-darken-3">Our Services</h3>
                 <div class="col m4 s12">
                     <div class="card-panel center">
                         <i class="material-icons medium">desktop_windows</i>
                         <h5>Web Development</h5>
                         <p>Trust us to create a static and dynamic website. Because now everything is online..</p>
                     </div>
                 </div>
                 <div class="col m4 s12">
                     <div class="card-panel center">
                         <i class="material-icons medium">developer_mode</i>
                         <h5>Mobile App</h5>
                         <p>We also have several projects that are enough to be of interest in the field of mobile
                             applications.</p>
                     </div>
                 </div>
                 <div class="col m4 s12">
                     <div class="card-panel center">
                         <i class="material-icons medium">games</i>
                         <h5>Game Development</h5>
                         <p>Entertainment on a game development on any operating system.</p>
                     </div>
                 </div>
             </div>
         </div>
     </section>


     <!-- portfolio -->
     <section id="portfolio" class="portfolio scrollspy">
         <div class="container">
             <h3 class="light center grey-text text-darken">Portfolio</h3>
             <div class="row">
                 <div class="col m3 s12">
                     <img src="{{asset('assets/img/portfolio/7.png')}}" class="responsive-img materialboxed">
                 </div>
                 <div class="col m3 s12">
                     <img src="{{asset('assets/img/portfolio/8.png')}}" class="responsive-img materialboxed">
                 </div>
                 <div class="col m3 s12">
                     <img src="{{asset('assets/img/portfolio/9.png')}}" class="responsive-img materialboxed">
                 </div>
                 <div class="col m3 s12">
                     <img src="{{asset('assets/img/portfolio/10.png')}}" class="responsive-img materialboxed">
                 </div>
             </div>
             <div class="row">
                 <div class="col m3 s12">
                     <img src="{{asset('assets/img/portfolio/5.png')}}" class="responsive-img materialboxed">
                 </div>
                 <div class="col m3 s12">
                     <img src="{{asset('assets/img/portfolio/6.png')}}" class="responsive-img materialboxed">
                 </div>
                 <div class="col m3 s12">
                     <img src="{{asset('assets/img/portfolio/1.png')}}" class="responsive-img materialboxed">
                 </div>
                 <div class="col m3 s12">
                     <img src="{{asset('assets/img/portfolio/2.png')}}" class="responsive-img materialboxed">
                 </div>
             </div>
         </div>
     </section>



     <!-- contact us -->
     <section id="contact" class="contact grey lighten-3 scrollspy">
         <div class="container">
             <h3 class="light grey-text text-darken-3 center">Contact Us</h3>
             <div class="row">
                 <div class="col m5 s12">
                     <div class="card-panel blue darken-2 center white-text">
                         <i class="material-icons">email</i>
                         <h5>Contact</h5>
                         <p>Contact us to work on a project that is fast and complete in competent competition. We are
                             ready to serve you 24 hours. </p>
                     </div>
                     <ul class="collection with-header">
                         <li class="collection-header">
                             <h4>Our Office
                         </li>
                         </h4>
                         <li class="collection-item">Web Programming</li>
                         <li class="collection-item">Jl.Bajak II H, Medan</li>
                         <li class="collection-item">North Sumatera,Indonesia</li>
                     </ul>
                 </div>

                 <div class="col m7 s12">
                     <form>
                         <div class="card-panel">
                             <h5>Please fill out this form</h5>
                             <div class="input-field">
                                 <input type="text" name="name" id="name" required class="validate">
                                 <label for="name">Name</label>
                             </div>
                             <div class="input-field">
                                 <input type="email" name="email" id="email" class="validate">
                                 <label for="email">Email</label>
                             </div>
                             <div class="input-field">
                                 <input type="text" name="phone" id="phone">
                                 <label for="phone">Phone Number</label>
                             </div>
                             <div class="input-field">
                                 <textarea name="message" id="message" class="materialize-textarea"></textarea>
                                 <label for="message">Message</label>
                             </div>
                             <button type="submit" class="btn blue darken-2">Send</button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </section>

     <!-- footer -->
     <footer class="blue darken-2 white-text center">
         <p class="flow-text">Web Santho Manullang. Copyright 2020</p>
     </footer>



     <!--JavaScript at end of body for optimized loading-->
     <script type="text/javascript" src="{{asset('assets/js/materialize.min.js')}}"></script>
     <script>
     const sideNav = document.querySelectorAll('.sidenav');
     M.Sidenav.init(sideNav);

     const slider = document.querySelectorAll('.slider');
     M.Slider.init(slider, {
         indicators: false,
         height: 500,
         transition: 600,
         interval: 3000
     });

     const parallax = document.querySelectorAll('.parallax');
     M.Parallax.init(parallax);


     const materialbox = document.querySelectorAll('.materialboxed');
     M.Materialbox.init(materialbox);


     const scroll = document.querySelectorAll('.scrollspy');
     M.ScrollSpy.init(scroll);
     </script>

 </body>

 </html>