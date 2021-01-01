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
    <p id="mainheading">OUR EVENTS</p>

    <!-- ===================================Ongoing==================== -->
    
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




    <!-- ========================================END Ongoing=============================== -->
    <!-- ========================Upcoming Events========================== -->

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p id="eventshead">Upcoming Events</p>
            </div>
        </div>

        <!-- -------------------Static Content----------------- -->
        <!-- <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="card" style="width: 18rem;" id="eventdiv">
                    <a data-target="#gamemodal" role="button" data-toggle="modal">
                        <img src="assets/posters/game.png" class="card-img-top" alt="game-a-tion">
                    </a>
                    <div class="card-body">
                        <a data-target="#gamemodal" role="button" data-toggle="modal">
                            <p class="card-text" id="game">Game-a-tion</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="card" style="width: 18rem;" id="eventdiv">
                    <a data-target="#bbmodal" role="button" data-toggle="modal">
                        <img src="assets/posters/bitsandbytes.jpg" class="card-img-top" alt="BITS and Bytes">
                    </a>
                    <div class="card-body">
                        <a data-target="#bbmodal" role="button" data-toggle="modal">
                            <p class="card-text" id="game">BITS and Bytes</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="card" style="width: 18rem;" id="eventdiv">
                    <a data-target="#btmodal" role="button" data-toggle="modal">
                        <img src="assets/posters/blockchain.jpg" class="card-img-top" alt="Blockchain Technology">
                    </a>
                    <div class="card-body">
                        <a data-target="#btmodal" role="button" data-toggle="modal">
                            <p class="card-text" id="game">Blockchain Technology</p>
                        </a>
                    </div>
                </div>
            </div>
        </div> -->

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
                        <!-- <a data-target="#game-modal-{{$event->id}}" href="" role="button" data-toggle="modal">
                            <p class="card-text" id="game">{{$event->title}}</p>
                        </a> -->
                        <button class="btn" data-target="#emodal" data-toggle="modal" data-etitle="{{ $event->title}} "
                            data-mydescription="{{ $event->description }}">{{$event->title}}</button>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    <br />

    <!-- ==================Past Events=================== -->
    <!-- <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <p id="eventshead">Past Events</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="card" style="width: 18rem;" id="eventdiv">
                    <a data-target="#ddmodal" role="button" data-toggle="modal">
                        <img src="assets/posters/decodingdata.png" class="card-img-top" alt="Decoding Data">
                    </a>
                    <div class="card-body">
                        <a data-target="#ddmodal" role="button" data-toggle="modal">
                            <p class="card-text" id="game">Decoding Data</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="card" style="width: 18rem;" id="eventdiv">
                    <a data-target="#gitmodal" role="button" data-toggle="modal">
                        <img src="assets/posters/keytogithub.jpeg" class="card-img-top" alt="Key to GitHub">
                    </a>
                    <div class="card-body">
                        <a data-target="#gitmodal" role="button" data-toggle="modal">
                            <p class="card-text" id="game">Key to GitHub</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="card" style="width: 18rem;" id="eventdiv">
                    <a data-target="#hackmodal" role="button" data-toggle="modal">
                        <img src="assets/posters/hackquest.jpg" class="card-img-top" alt="Hack Quest">
                    </a>
                    <div class="card-body">
                        <a data-target="#hackmodal" role="button" data-toggle="modal">
                            <p class="card-text" id="game">Hack Quest</p>
                        </a>
                    </div>
                </div>
            </div>


            <div class="row details hidden toggle">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="card" style="width: 18rem;" id="eventdiv">
                        <a data-target="#abcmodal" role="button" data-toggle="modal">
                            <img src="assets/posters/abcpp.jpeg" class="card-img-top" alt="The ABC++ of Coding">
                        </a>
                        <div class="card-body">
                            <a data-target="#abcmodal" role="button" data-toggle="modal">
                                <p class="card-text" id="game">The ABC++ of Coding</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="card" style="width: 18rem;" id="eventdiv">
                        <a data-target="#finlitmodal" role="button" data-toggle="modal">
                            <img src="assets/posters/finlitGS.png" class="card-img-top" alt="Financial Literacy">
                        </a>
                        <div class="card-body">
                            <a data-target="#finlitmodal" role="button" data-toggle="modal">
                                <p class="card-text" id="game">Financial Literacy</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="card" style="width: 18rem;" id="eventdiv">
                        <a data-target="#rsmodal" role="button" data-toggle="modal">
                            <img src="assets/posters/regionalsummit.jpeg" class="card-img-top" alt="Regional Summit">
                        </a>
                        <div class="card-body">
                            <a data-target="#rsmodal" role="button" data-toggle="modal">
                                <p class="card-text" id="game">GirlScript Regional Summit</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row details hidden toggle">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="card" style="width: 18rem;" id="eventdiv">
                        <a data-target="#pymodal" role="button" data-toggle="modal">
                            <img src="assets/posters/SayHitoPy.jpeg" class="card-img-top" alt="Say Hi to Py">
                        </a>
                        <div class="card-body">
                            <a data-target="#pymodal" role="button" data-toggle="modal">
                                <p class="card-text" id="game">Say Hi to Py</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="card" style="width: 18rem;" id="eventdiv">
                        <a data-target="#stockmodal" role="button" data-toggle="modal">
                            <img src="assets/posters/StockItUp.jpeg" class="card-img-top" alt="Stock it Up">
                        </a>
                        <div class="card-body">
                            <a data-target="#stockmodal" role="button" data-toggle="modal">
                                <p class="card-text" id="game">Stock It Up</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="card" style="width: 18rem;" id="eventdiv">
                        <a data-target="#bizmodal" role="button" data-toggle="modal">
                            <img src="assets/posters/takebizonline.jpg" class="card-img-top"
                                alt="How to Take Your Business Online">
                        </a>
                        <div class="card-body">
                            <a data-target="#bizmodal" role="button" data-toggle="modal">
                                <p class="card-text" id="game">How to Take Your Business Online</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row details hidden toggle">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="card" style="width: 18rem;" id="eventdiv">
                        <a data-target="#ttmodal" role="button" data-toggle="modal">
                            <img src="assets/posters/techtrace.jpg" class="card-img-top" alt="Tech Trace">
                        </a>
                        <div class="card-body">
                            <a data-target="#ttmodal" role="button" data-toggle="modal">
                                <p class="card-text" id="game">TechTrace</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="card" style="width: 18rem;" id="eventdiv">
                        <a data-target="#uiuxmodal" role="button" data-toggle="modal">
                            <img src="assets/posters/uiux.jpg" class="card-img-top" alt="Wonders of UI/UX Design">
                        </a>
                        <div class="card-body">
                            <a data-target="#uiuxmodal" role="button" data-toggle="modal">
                                <p class="card-text" id="game">Wonders of UI/UX Design</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="card" style="width: 18rem;" id="eventdiv">
                        <a data-target="#collegemodal" role="button" data-toggle="modal">
                            <img src="assets/posters/whatcollege.jpeg" class="card-img-top"
                                alt="What no one teaches you in College">
                        </a>
                        <div class="card-body">
                            <a data-target="#collegemodal" role="button" data-toggle="modal">
                                <p class="card-text" id="game">What no one teaches you in College</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" id="loadMore">LOAD MORE</a>
    </div> -->

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


    <!---MODALS-->

    <!-- =============================Dynamic modal===================== -->

    <div class="modal fade" tabIndex="-1" id="emodal-{{$event->id}}">
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


    <!-- ============================Static Modals==================== -->

    <div class="modal" tabindex="-1" id="gamemodal">
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
    </div>

    <div class="modal" tabindex="-1" id="bbmodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">BITS And Bytes</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Date: 25th October 2020</p>
                    <p>Time: 9PM to 11PM</p>
                    <p>
                        GirlScript BITS Goa, in association with GirlScript Pilani, organised the first ever Inter-BITS
                        Coding Contest! The contest was conducted on Hackerrank. The competition was open to all
                        students currently enrolled in any of the BITS Pilani campuses in
                        India, namely: Pilani, Goa and Hyderabad. The BITS Hyderabad campus performed most admirably and
                        was proclaimed the winner of the competition, followed by the Pilani and Goa campuses
                        respectively.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" id="btmodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Blockchain Technology</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Date: 29th August 2020</p>
                    <p>Time: 11AM to 1PM</p>
                    <p>
                        Blockchain, one of the hottest topics in technology today, is the underlying technology for
                        bitcoins and other cryptocurrencies and is rapidly revolutionising the principles of business.
                        GirlScript Verna held an informational webinar on Blockchain Technology
                        on 29th August 2020 intending to help the participants discover more about the novel subject.
                        The speaker for this event was Aaron de Miranda Colaço- a Blockchain architect. He touched upon
                        several interesting topics- the Gartner
                        Hype Cycles, maintaining a blockchain network and how blockchain technology will revolutionise
                        the future. The enthusiastic speaker, along with an extensive demo using Ethereum, also provided
                        the attendees with multiple resources
                        that would aid them in diversifying their knowledge on the subject. Certificates were awarded to
                        those who performed well in the quiz that followed the session.

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary"><a href="https://www.youtube.com/watch?v=27R2LI3lfmw"
                            target="_blank">
                            <p id="ytlink">Watch on YouTube</p>
                        </a></button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" id="ddmodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Decoding Data</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        With the goal of educating students and young professionals of the power and significance of
                        Data, the event- 'DECODING DATA WITH GIRLSCRIPT GOA' was held on 28th June 2020. The first
                        speaker, Vrushank Nayak- a business and economics journalist, presented
                        his topic "Data Visualization for a Story". He imparted insight into the ability to condense,
                        analyze and share data that makes an impact. The second speaker, Abhishek Das- a Data Scientist
                        with a data-driven mindset, presented
                        his topic "Approaching a Data Science Problem" to educate the audience that there is a
                        systematic approach to solving data science problems and it begins by asking the right
                        questions. To familiarise the attendees with the knowledge
                        they gained, the event ended in a project. Certificates were awarded to all participants who
                        successfully submitted their project and prizes were awarded to the best entries. Judged by
                        Vrushank Nayak, Samiksha Powar and Rudra Sawant,
                        the winners of the contest were Vidhi Malhotra and Vandana Gouda for Data Storytelling, and
                        Vedita Kamat and Annwesha Panda for Data Science.

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary"><a href="https://youtu.be/YNhHa-3eobw"
                            target="_blank">
                            <p id="ytlink">Watch on YouTube</p>
                        </a></button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" id="gitmodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Key to GitHub</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        A developer's GitHub account is the best representation of their skills as it reflects their
                        code clarity and collaboration capacity with other developers. Girlscript Mapusa organised the
                        event- 'Key to Github', to brief the audience on Git: a version
                        control system used on the online platform Github. The event was hosted by Mr Julius Alphonso- a
                        FOSS enthusiast and software engineer actively involved in competitive coding and full-stack
                        development. With a strong grasp on the
                        use of Git himself, he educated the attendees about how the system is a quick, practical and
                        seamless solution to file management and is a fundamental skill that all developers must
                        possess. The introductory session on 14th December
                        2020 was followed by a hands-on session the following day to ensure that the participants got a
                        firmer hold on the subject. Julius demonstrated to the audience how to contribute, clone and
                        push projects to Github

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary"><a href="https://www.youtube.com/watch?v=4o8AObZG5sk"
                            target="_blank">
                            <p id="ytlink">Watch on YouTube</p>
                        </a></button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" id="hackmodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hack Quest</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Cybersecurity is often seen as a daunting task, even to those from the tech world. The Ponda
                        Chapter of Girlscript Goa hosted Hack Quest, a unique and interesting CTF event. Security
                        Capture The Flag (CTF) tournaments are a great way for interested apprentices
                        to learn how to hack. The CTF was a 48-hour solo-jeopardy based event held on the 1st and 2nd of
                        August, 2020. The challenges were specially designed by Mr Hashir KK and Mr Neeraj Krishnan from
                        IIT Goa. To help the participants
                        kick-start their CTF journey, Mr Sudhakar Verma- experienced in the fields of reversing,
                        exploitation, CTFs and software development; hosted an introductory session on the 26th of July
                        to provide a walkthrough of the final event.
                        The event witnessed several enthusiastic participants competing for the top positions which were
                        eventually conquered by Devang Jain, Sejal Gupta and Yugansh Kumar.

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary"><a href="https://youtu.be/bRckqJjbHb0"
                            target="_blank">
                            <p id="ytlink">Watch on YouTube</p>
                        </a></button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" id="abcmodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">The ABC++ of Coding</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        When we read, we begin with A-B-C. When we code, we begin with C++! The GirlScript BITS Goa
                        Chapter organised their very first event on 20th June 2020 with the goal of introducing
                        youngsters to the electrifying world of coding. Aimed at students from
                        classes 6 to 12, the speakers Astitva Sehgal, Wandan Tibrewal, Shikha Bhat and Shivangi Gupta
                        had a delightful time showcasing to their young audience the wonders of coding and ended the
                        event with a fun quiz. The enthusiasm was
                        plentiful, and each attendee walked away with a bunch of valuable, beginner-friendly resources
                        to help them develop their skills further.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" id="finlitmodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Financial Literacy</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        The Verna Chapter of Girlscript Goa and the Association of Computer Engineers of PCCE organised
                        an informative session on Financial Literacy for the students of Padre Conceicao College of
                        Engineering on 7th December 2020. VittaVaran is a financial literacy
                        initiative that aims at creating a behavioural change in the expense management techniques
                        followed by the various strata of society. This initiative is spearheaded by a group of 5 Young
                        India Fellowship Fellows: Satyam, Ruchika,
                        Smith, Prachi and Manali; who were the speakers for the event. They shared with the audience
                        some valuable lessons on goal setting, meaningful budgeting, emergency funds, passive income,
                        asset allocation and building one’s portfolio.
                        The encouraged the participants to develop meaningful habits like tracking one’s expenses and
                        spending on financial education. The participants that performed well in the quiz that followed
                        bagged themselves a certificate of achievement.

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary"><a href="https://youtu.be/fX3LJgb0Xlo"
                            target="_blank">
                            <p id="ytlink">Watch on YouTube</p>
                        </a></button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" id="rsmodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">GirlScript Regional Summit 2020</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        In September 2020, Girlscript Goa held their first ever Regional Summit! The three day event
                        focused on a diverse mix of subjects including Artificial Intelligence, Data Analytics, Data
                        Visualisation and Career Preparation Essentials. The speakers for
                        the event were: Ms Celia Alves- a Microsoft MVP and a Microsoft Certified Excel Expert; Mr
                        Ashish Kohli- a Business Analyst and Decision Science Professional; Ms Madhura Banerjee- an RPA
                        developer, NLP expert, TEDx speaker and
                        a published writer; and finally Mr Karan Singh Kapooriya- a resume writing specialist and
                        recruitment and training professional. Abhirupa Barua was presented the Learners Achievement
                        Award for her exceptional performance throughout
                        the event. A unique addition to the Summit was announcing 'GOA'S TECH CHAMP 2020'- an award
                        going out to the finest techies in the field who stand out amongst the crowd. Julius Alphonso
                        and Shikha Bhat were presented with this
                        award. <br><br>
                    <p id="rslinks">Please find the YouTube links for all events below:</p>
                    </p>
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary"><a
                                href="https://www.youtube.com/watch?v=xdglwSSpGuI&list=PLwJtK-X1fuu6ECThQ8ob26bxLhrbAkhmO&index=1"
                                target="_blank">
                                <p id="ytlink">Data Analytics using Excel</p>
                            </a></button>
                        <button type="button" class="btn btn-primary"><a
                                href="https://www.youtube.com/watch?v=V5g6lBdAn-I&list=PLwJtK-X1fuu6ECThQ8ob26bxLhrbAkhmO&index=2"
                                target="_blank">
                                <p id="ytlink">Data Visualisation using Tableau</p>
                            </a></button>
                        <button type="button" class="btn btn-primary"><a
                                href="https://www.youtube.com/watch?v=M4W-kS2MTx8&list=PLwJtK-X1fuu6ECThQ8ob26bxLhrbAkhmO&index=3"
                                target="_blank">
                                <p id="ytlink">NLP Powered Chatbot</p>
                            </a></button>
                        <button type="button" class="btn btn-primary"><a
                                href="https://www.youtube.com/watch?v=6GO5OzmCBrM&list=PLwJtK-X1fuu6ECThQ8ob26bxLhrbAkhmO&index=4"
                                target="_blank">
                                <p id="ytlink">Career Prep Essentials</p>
                            </a></button>
                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" id="pymodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Say Hi to Py</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        With roots not only in Web Development, Game Development, Data Science and Software but also in
                        the fields of Medicine and Neuroscience, Python lives up to the title of one of the most diverse
                        programming languages. On 11th December 2020, Girlscript Goa
                        organised an exciting event- “Say Hi to Python", to help kickstart the participants' journeys
                        with the language. The speaker for the event, Mr Karan Jakhar- a Data Scientist and Kaggle
                        Expert with extensive knowledge of ML, DL
                        and software development; shared with the audience his experiences in the field and his
                        expertise on Python. The speaker helped the participants understand the various terminologies by
                        demonstrating live coding examples on Google
                        Colaboratory. The top performers in the short quiz that followed were awarded certificates.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary"><a href="https://youtu.be/-qmONI2Cxao"
                            target="_blank">
                            <p id="ytlink">Watch on YouTube</p>
                        </a></button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" id="stockmodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Stock it Up</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Girlscript Goa organised its event- 'Stock It Up', to help learners get ready for their next
                        investment. The speaker for the event was Prof. Sameer Anil Karna- a Stock Market Trainer and
                        Professor with over 15 years of expertise in teaching and training
                        professionals and students across various business schools. He conveyed to the audience his
                        extensive knowledge in the field, touching upon several topics which included buying stocks,
                        building your own portfolio, mutual funds,
                        the purpose of diversification, liquid funds and the concept of a Systematic Withdrawal Plan
                        (SWP). With participants including school kids and working adults alike, the speaker and
                        audience both enjoyed the interactive and informative
                        discussion. The attendees were pleased to have had the lovely opportunity of being mentored by
                        such a highly skilled professional and learning from him how to multiply and manage their
                        finances.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary"><a href="https://youtu.be/oSQ_J1gl8c8"
                            target="_blank">
                            <p id="ytlink">Watch on YouTube</p>
                        </a></button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" id="bizmodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">How to take your business online</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Digital Marketing propels one’s reach in the global marketplace faster and farther than
                        traditional marketing methods. It is one of the best-known tools to reach the audience to the
                        fullest. On the 16th of August, the Mapusa Chapter of GirlScript Goa
                        organised an informational webinar on digital marketing- 'How to Grow Your Online Business'. The
                        speaker at the event was Mr Ankit Talaulikar- a Branding and Advertising professional, and his
                        address touched upon the subjects of
                        SEO, SEM and Email marketing. Participants had the opportunity to bag a certificate by
                        performing well in the short quiz that followed the talk.

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" id="ttmodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">TechTrace</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        In collaboration with Kapslock, Girlscript Goa organised 'TECHTRACE', a series of interesting
                        competitions to help students up their tech skills. The first contest involved the creation of a
                        stylish and informative website which showcased the participant’s
                        portfolio and included their education, skillset and creative projects. The winners for this
                        contest were Hari Sapna Nair, Sovam Pradhan and Tania Fernandes. The second contest required the
                        participant to build a simple, functional
                        web application for creating a quiz. The participants were free to use their imagination and
                        inventiveness to include interesting features that would make their application stand out. The
                        winners for this contest were Kaivalya
                        Gauns, Errol Keith Costabir and Lumina Lisha R. The third and final contest was to create
                        engaging textual content for a hypothetical software company. The winners for this track were
                        Prakriti Srivastava, Vidhi Malhotra and Rebecca
                        Elisabeth Falcao.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal" tabindex="-1" id="uiuxmodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Wonders of UI/UX Design</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        UI/UX design of any application is crucial in enhancing customer satisfaction which eventually
                        determines the success of the app. 'Wonders of UI/UX' was an introductory session on UI/UX
                        design organised on 15th July by the Fatorda Chapter of Girlscript
                        Goa. The speaker, Shubham Singla- a proficient UI/UX designer, offered the audience his valuable
                        expertise on the topic. He gave insight into the distinction between UI and UX and presented
                        important pointers for beginners in the
                        field of design. The speaker then gave a short demo of the software used, guiding the
                        participants in designing a Social Media Chatbot. The response was incredible and the audience
                        showed massive enthusiasm in the design contest
                        that followed the session. All participants to successfully submit their designs were rewarded
                        with certificates. Judged by Shubham himself, the winners of the UI/UX design contest were
                        Vaishnavi Masiwal, Sourabh Sathe and Dheeraj
                        Gandhi.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary"><a href="https://www.youtube.com/watch?v=10Lq7qfL7X4"
                            target="_blank">
                            <p id="ytlink">Watch on YouTube</p>
                        </a></button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" id="collegemodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">What No One Teaches You in College</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        To highlight to students the importance of leadership and community experiences and the soft
                        skills that make one a better fit for the industry, Girlscript Ponda Chapter organised the
                        event- 'What No One Teaches You in College’, on 25th November 2020.
                        The interactive webinar was hosted by Ms Vritika Naik- a software engineer, orator, mentor,
                        content writer and the Regional Head of Girlscript Goa. With numerous accomplishments under her
                        belt, she communicated to the attendees
                        her experiences and engaged them in a stimulating discussion about the importance of
                        non-technical skills in the life of a professional.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary"><a
                            href="https://www.youtube.com/watch?v=QdyhQPK0XjM&t=1s" target="_blank">
                            <p id="ytlink">Watch on YouTube</p>
                        </a></button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

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

    <!-- 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous">
    </script> -->

    <script>
    $('#emodal').on('show', function(e) {

        var button = e.relatedTarget(),
            modal = $(this),
            title = button.data("etitle"),
            desc = button.data("mydescription");

        modal.find("#title").val(title);
        modal.find("#description").val(desc);


    });
    </script>

</body>

</html>