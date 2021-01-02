<html>

<head>
    <title>Events</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script> -->

    <script src="{{ asset('js/load-more.js')}}"></script>
</head>

<body>
    <!--------------------Navbar-------------------->

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <img src="./assets/GSLogolong 3.svg" alt="GirlScript Goa Logo">
            <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <ul class="navbar-nav">
                    <li class="nav-item mx-3">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="/team">Team</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="/events">Events</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#footer">Contact Us</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <!---------------------Navbar End------------------------->
    
    <!-- ======================[EVENT SECTION]======================== -->
    <p id="mainheading">OUR EVENTS</p>

    <!-- ===========================Ongoing========================== -->
    
    @if(count($ongoings) < 1)

    @else
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p id="eventshead">Ongoings Events</p>
            </div>
        </div>
        <div class="row">
            @foreach($ongoings as $ongoing)
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="card" style="width: 18rem;" id="eventdiv">
                    <a data-target="#emodal" role="button" data-toggle="modal">
                        <img src="{{ asset('images/events/'.$ongoing->e_image)}}" height="300px" class="card-img-top"
                            alt="{{$ongoing->title}}">
                    </a>

                    <div class="card-body">
                        <button class="btn" data-target="#emodal" data-toggle="modal" data-etitle="{{ $ongoing->title}} "
                            data-mydescription="{{ $ongoing->description }}">{{$ongoing->title}}</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endif
    <!-- ========================END Ongoing============================== -->
    <!-- ========================Upcoming Events========================== -->

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p id="eventshead">Upcoming Events</p>
            </div>
        </div>

        <div class="row">
            @foreach($events as $event)
            @if($event->status == 'Upcoming')
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="card" style="width: 18rem;" id="eventdiv">
                    <a data-target="#emodal-{{$event->id}}" role="button" data-toggle="modal">
                        <img src="{{ asset('images/events/'. $event->e_image)}}" height="300px" class="card-img-top"
                            alt="{{$event->title}}">
                    </a>

                    <div class="card-body">
                        <button class="btn" data-target="#emodal" data-toggle="modal" data-etitle="{{ $event->title}} "
                            data-mydescription="{{ $event->description }}">{{$event->title}}</button>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
        
    </div>
    <!-- ====================================END UPCOMING EVENT============================ -->
    <br />

    <!-- ==================Past Events=================== -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <p id="eventshead">Past Events</p>
            </div>
        </div>
        <div class="row">
            @foreach($events as $event)
            @if($event->status == 'Completed')
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="card" style="width: 18rem;" id="eventdiv">
                    <a data-target="#gitmodal" role="button" data-toggle="modal">
                        <img src="{{ asset('images/events/'. $event->e_image)}}" height="300px" class="card-img-top"
                            alt="{{$event->title}}">
                    </a>
                    <div class="card-body">
                        <a data-target="#gitmodal" role="button" data-toggle="modal">
                            <p class="card-text" id="game">{{$event->title}}</p>
                        </a>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
        <a href="#" id="loadMore">LOAD MORE</a>
    </div>
    <!-- ============================END PAST EVENT============================= -->





    <!-- =============================Dynamic modal===================== -->

    <div class="modal fade" tabIndex="-1" id="emodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{$event->title}}</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <h5 id="title">hbhb</h5> -->
                    <input type="text" name="title" id="title">
                    <!-- <label id="description"></label> -->
                    <input type="text" name="description" id="description">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ================================== END DYNAMIC MOdal============================= -->

    <!-- ============================Static Modals Extra======================== -->

    <!-- <div class="modal" tabindex="-1" id="gamemodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Game-a-tion</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Date: 26th October 2020</p>
                    <p>Time: 4:00PM to 5:30PM</p>
                    <p>GirlScript Fatorda Chapter hosted Game-a-tion, an event to introduce game development to gaming
                        enthusiasts. The speaker, Ms Vandana Sharma- a graduate from the University of Essex with a
                        thorough and deep understanding of game development,
                        highlighted how this industry has been witnessing a boom in the world today. The talk focused on
                        what Game Development is and the differences between game designing and game development. A fun
                        demo on game designing followed the
                        talk where participants were encouraged to explore the many features of the Unity Game Engine
                        and try a hand at game development themselves.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary"><a
                            href="https://www.youtube.com/watch?v=XJjuAD_hc7c&t=3432s" target="_blank">
                            <p id="ytlink">Watch on YouTube</p>
                        </a></button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>  -->

    <!-- ============================== FOOTER =============================== -->
    <footer id="footer">
        <div class="footer-container">
            <div class="footer-text">Copyright © 2020, made with ❤️ by GirlScript Goa.</div>
            <div class="social-icons">
                <div class="socials linkedin"><img src="assets/socials svg/LinkedIn.svg" alt=""></div>
                <div class="socials instagram"><img src="assets/socials svg/Instagram.svg" alt=""></div>
                <div class="socials twitter"><img src="assets/socials svg/Twitter.svg" alt=""></div>
                <div class="socials mail"><img src="assets/socials svg/Mail.svg" alt=""></div>
            </div>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>

  <script>
    // jquery code for Modal
     $('#emodal').on('show', function(e) 
         var button = e.relatedTarget(),
             modal = $(this),
             title = button.data("etitle"),
             desc = button.data('mydescription');
         modal.find(#title).val(title);
         modal.find('#description').val(desc);
    });
    </script>

</body>

</html>