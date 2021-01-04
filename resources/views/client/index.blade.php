<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport"
        content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/landing-styles.css" />
    <title>Home - Girlscript Goa</title>
    <!----------------------Favicon---------------------->
    <link rel="shortcut icon" type="image/jpg" href="/assets/Favicon.svg" />

</head>

<body>
    <!-- Navbar -->
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
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!---------------------Navbar End------------------------->


    <main>
        <!-- Hero Section -->
        <section class="hero container">
            <div class="hero__text" data-aos-duration="1000" data-aos="fade-right">
                <h1 class="hero__title">Welcome to Girlscript Goa</h1>
                <h4 class="hero__subtitle">
                    Girlscript is a non-profit organization
                </h4>
                <p class="hero__paragraph mb-4">
                    GirlScript aims to become world's biggest tech community for
                    learning technical skills and getting opportunities around the
                    globe. GirlScript is open for all organisation and supports
                    beginners in technology and programming.
                </p>
                <div class="hero__buttons">
                    <a type="button" href="/events" class="btn btn-primary">Our Events</a>
                    <a type="button" href="#about" class="btn btn-outline-primary">
                        About Us
                    </a>
                </div>
            </div>
            <div class="hero__image" data-aos-duration="1000" data-aos="fade-left">
                <img src="assets/landing-img/illustration.svg" alt="Landing illustration" />
            </div>
        </section>
        <section class="about" id="about">
            <div class="about__content container">
                <h1 data-aos="fade-up" data-aos-duration="1000" class="text-center mb-2">About Us</h1>
                <p data-aos="fade-up" data-aos-duration="1000">
                    GirlScript is the fastest-growing tech community in India. It is a non-profit project introduced by
                    GirlScript Foundation to help newcomers in the fields of all things 'technology'. The main motto of
                    GirlScript is to foster gender equality in the world of technology and to assist those who are just
                    taking their first steps into the world of technical learning. Not only do we train and educate
                    learners, but also keep them in the know of numerous national and international events, speaking
                    opportunities, scholarships and fellowships. We unequivocally believe in and encourage the overall
                    development of individuals through our varied educational initiatives.
                </p>
            </div>
        </section>

        <!-- Latest Events Section -->
        <section class="events">
            @if($events)
            <h1 data-aos-duration="1000" data-aos="zoom-in" class="text-center mb-2">Latest Events</h1>
            <div class="event-cards container card-group mb-4">
                @foreach($events as $event)
                <div data-aos-duration="1000" data-aos="zoom-in" class="card mx-5" style="width: 18rem">
                    <img src="{{ asset('images/events/'. $event->e_image)}}" class="card-img-top"
                        alt="{{$event->title}}" />
                    <div class="card-body">
                        <p class="card-text">{{$event->title}}</p>
                    </div>
                </div>
                @endforeach
            </div>
<<<<<<< HEAD
            <!-- End of Latest Event Section -->
            <!-- Latest Events for Mobile Responsive  -->
=======
            <!-- <div data-aos-duration="1000" data-aos="zoom-in" id="carouselExampleIndicators" class="carousel slide mb-4"
                data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card mx-5" style="width: 20rem">
                            <img src="assets/landing-img/Poster 1.png" class="card-img-top" alt="Event poster" />
                            <div class="card-body">
                                <p class="card-text">Game-a-tion</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card mx-5" style="width: 20rem">
                            <img src="assets/landing-img/Poster 2.png" class="card-img-top" alt="Event poster" />
                            <div class="card-body">
                                <p class="card-text">Bits and Bytes</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card mx-5" style="width: 20rem">
                            <img src="assets/landing-img/Poster 3.png" class="card-img-top" alt="Event poster" />
                            <div class="card-body">
                                <p class="card-text">Blockchain Technology</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

>>>>>>> 8c6f81ca33ee15e10f0cc4bcb4263341414b8e98
            <div data-aos-duration="1000" data-aos="zoom-in" id="carouselExampleIndicators" class="carousel slide mb-4"
                data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach($events as $event)
                    <div class="carousel-item @if($loop->first) active @endif">
                        <div class="card mx-5 mb-2" style="width: 20rem">
                            <img src="{{ asset('images/events/'. $event->e_image)}}" class="card-img-top"
                                alt="Event poster" />
                            <div class="card-body">
                                <p class="card-text">{{$event->title}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="row justify-content-center">
                <div class=" col-lg-2 col-md-3">
                    <a data-aos-duration="1000" data-aos="zoom-in" href="/events" class="btn btn-primary">View All</a>
                </div>
            </div>
            @endif
        </section>

        <!-- Statistics Section -->
        <section class="stats">
            <h1 data-aos-duration="1000" data-aos="fade-right" class="text-center">Some count that matters</h1>
            <h5 data-aos-duration="1000" data-aos="fade-left" class="text-center">
                Our achievement in the journey depicted in numbers
            </h5>
            <div data-aos-duration="1000" data-aos="fade-up" class="counters">
                <div class="count-box">
                    <h1 class="count">5</h1>
                    <p>GS Goa Chapters</p>
                </div>
                <div class="count-box">
                    <h1 class="count">10</h1>
                    <p>Associated Colleges</p>
                </div>
                <div class="count-box">
                    <h1 class="count">3000+</h1>
                    <p>People Impacted</p>
                </div>
                <div class="count-box">
                    <h1 class="count">15+</h1>
                    <p>Events Conducted</p>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="faq container">
            <h1 data-aos-duration="1000" data-aos="fade-up" class="text-center mb-4">FAQ's</h1>
            <div class="row">
                <div class="col-md-6">
                    <div data-aos-duration="1000" data-aos="fade-up" class="faqs">
                        <div class="faq-quest">
                            <a class="btn btn-outline-primary" data-bs-toggle="collapse" href="#collapseExample1"
                                role="button" aria-expanded="false" aria-controls="collapseExample1"
                                style="padding: 0.25rem 0.75rem">
                                +
                            </a>
                            <div class="faq__question">What is GirlScript? </div>
                        </div>
                        <div class="collapse" id="collapseExample1">
                            <div class="card faq_ans card-body mb-4">
                                GirlScript is the fastest-growing tech community in India. It is a non-profit project
                                introduced by GirlScript Foundation to help newcomers in the fields of all things
                                'technology'.GirlScript aims to become world's biggest tech community for learning
                                technical skills and getting opportunities around the globe. GirlScript is open for all
                                organisation and supports beginners in technology and programming.
                            </div>
                        </div>
                    </div>
                    <div data-aos-duration="1000" data-aos="fade-up" class="faqs">
                        <div class="faq-quest">
                            <a class="btn btn-outline-primary" data-bs-toggle="collapse" href="#collapseExample2"
                                role="button" aria-expanded="false" aria-controls="collapseExample2"
                                style="padding: 0.25rem 0.75rem">
                                +
                            </a>
                            <div class="faq__question">Is GirlScript only restricted to opportunities for girls?</div>
                        </div>
                        <div class="collapse" id="collapseExample2">
                            <div class="card faq_ans card-body mb-4">
                                One of the main mottos of our organisation being the promotion of women in technology,
                                the name GirlScript was coined keeping that motto in mind. However, this does not
                                restrict our foundation to providing opportunities only for girls; we wholeheartedly
                                support diversity in tech. We are not a women-only organisation and welcome everyone to
                                be a part of our community, irrespective of age, colour, caste, nationality, religion or
                                gender. Nevertheless, there is a 50% reservation for girls in the programmes we organise
                                to ensure female participation and live up to our name.
                            </div>
                        </div>
                    </div>
                    <div data-aos-duration="1000" data-aos="fade-up" class="faqs">
                        <div class="faq-quest">
                            <a class="btn btn-outline-primary" data-bs-toggle="collapse" href="#collapseExample3"
                                role="button" aria-expanded="false" aria-controls="collapseExample3"
                                style="padding: 0.25rem 0.75rem">
                                +
                            </a>
                            <div class="faq__question">What have we achieved so far?</div>
                        </div>
                        <div class="collapse" id="collapseExample3">
                            <div class="card faq_ans card-body mb-4">
                                At GirlScript Goa, we have organized numerous webinars, workshops and competitions in
                                several diverse fields not restricted to just tech. These include:
                                Data Storytelling,
                                Data Science,
                                Programming in C++ and Python,
                                UI / UX,
                                Digital Marketing,
                                Cyber Security,
                                Front End Development,
                                Web App Development,
                                Content Writing,
                                Game Development,
                                Blockchain,
                                Artificial Intelligence,
                                Data Analytics using MS Excel and Tableau,
                                Financial Literacy,
                                Stock Market and Investments.

                            </div>
                        </div>
                    </div>
                    <div data-aos-duration="1000" data-aos="fade-up" class="faqs">
                        <div class="faq-quest">
                            <a class="btn btn-outline-primary" data-bs-toggle="collapse" href="#collapseExample4"
                                role="button" aria-expanded="false" aria-controls="collapseExample4"
                                style="padding: 0.25rem 0.75rem">
                                +
                            </a>
                            <div class="faq__question">How is our team organized?</div>
                        </div>
                        <div class="collapse" id="collapseExample4">
                            <div class="card faq_ans card-body mb-4">
                                At the top of the ladder, the Regional Head coordinates the workings of the entire team.
                                The Regional Team working under her comprises a network of graphic designers, content
                                creators, web developers, an operations manager, a public relations manager, a marketing
                                manager and a photography lead. The 5 Chapters of GirlScript Goa, led by their Chapter
                                Leaders, organise and manage events and initiatives in their individual environs. Aside
                                from the Chapter Teams, the Campus Heroes are the representatives of GirlScript Goa in
                                the various institutions around the state.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div data-aos-duration="1000" data-aos="fade-up" class="faqs">
                        <div class="faq-quest">
                            <a class="btn btn-outline-primary" data-bs-toggle="collapse" href="#collapseExample5"
                                role="button" aria-expanded="false" aria-controls="collapseExample5"
                                style="padding: 0.25rem 0.75rem">
                                +
                            </a>
                            <div class="faq__question">Why should you be a part of the GirlScript Goa Team?</div>
                        </div>
                        <div class="collapse" id="collapseExample5">
                            <div class="card faq_ans card-body mb-4">
                                GirlScript provides an excellent window of opportunity for young professionals to grow.
                                Working with the team enables you to network with several industry experts and other
                                highly qualified professionals in the field of tech. You gain an ocean of knowledge and
                                practical experience and a valuable addition to your resume. All team members receive a
                                Letter of Recommendation, a Certificate and Goodies based on their performance during
                                their time working with GirlScript.
                            </div>
                        </div>
                    </div>
                    <div data-aos-duration="1000" data-aos="fade-up" class="faqs">
                        <div class="faq-quest">
                            <a class="btn btn-outline-primary" data-bs-toggle="collapse" href="#collapseExample6"
                                role="button" aria-expanded="false" aria-controls="collapseExample6"
                                style="padding: 0.25rem 0.75rem">
                                +
                            </a>
                            <div class="faq__question">How can you join the team?</div>
                        </div>
                        <div class="collapse" id="collapseExample6">
                            <div class="card faq_ans card-body mb-4">
                                If we've got an opening and you've got the skills that fit it, the job is yours for the
                                taking! Joining the team is just a few clicks away, use the link below to register
                                yourself and we'll get in touch with you if we think you've got what it takes.<a
                                    href="https://bit.ly/hiremeGS">Click Here</a>
                            </div>
                        </div>
                    </div>
                    <div data-aos-duration="1000" data-aos="fade-up" class="faqs">
                        <div class="faq-quest">
                            <a class="btn btn-outline-primary" data-bs-toggle="collapse" href="#collapseExample7"
                                role="button" aria-expanded="false" aria-controls="collapseExample7"
                                style="padding: 0.25rem 0.75rem">
                                +
                            </a>
                            <div class="faq__question">How can you get regular updates about the events and initiatives
                                hosted by GirlScript Goa?</div>
                        </div>
                        <div class="collapse" id="collapseExample7">
                            <div class="card faq_ans card-body mb-4">
                                To receive frequent updates about the happenings at GirlScript Goa, please do subscribe
                                to our mailing list. Follow us on social media and watch the Events space on our
                                website, we regularly post details of our upcoming events and initiatives.
                            </div>
                        </div>
                    </div>
                    <div data-aos-duration="1000" data-aos="fade-up" class="faqs">
                        <div class="faq-quest">
                            <a class="btn btn-outline-primary" data-bs-toggle="collapse" href="#collapseExample8"
                                role="button" aria-expanded="false" aria-controls="collapseExample8"
                                style="padding: 0.25rem 0.75rem">
                                +
                            </a>
                            <div class="faq__question">Can you intern at GirlScript Goa?</div>
                        </div>
                        <div class="collapse" id="collapseExample8">
                            <div class="card faq_ans card-body mb-4">
                                Although we do not have any internship opportunities open at the moment, keep an eye out
                                for future openings and initiatives on our website and social media handles.

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Email Section -->
        <section class="email-subscription">
            <div class="email-container">
                <div data-aos-duration="1000" data-aos="fade-right" class="email-text">
                    <h2 class="email-head">Email subscription</h2>
                    <p class="email-para">Subscribe to get notified about the upcoming events</p>
                </div>
                <form method="post" action="/subscription">
                    @csrf
                    <div data-aos-duration="1000" data-aos="fade-left" class="email-input">
                        <input placeholder="Email Address" class="email" name="email"><button type="submit"
                            class="email-button">Subscribe</button></input>
                    </div>
                </form>
            </div>

                @if(session()->has('message'))
                <div class="alert alert-success mt-3">
                    {{ session()->get('message') }}
                </div>
                @endif
        </section>

        <!-- Contact Section -->
        <section id="contact" class="contact-section">
            <h1 data-aos-duration="1000" data-aos="fade-up" class="contact-heading">
                <center>Contact Us</center>
            </h1>
            <div class="contact-container">
                <div class="contact-first">
                    <img data-aos-duration="1000" data-aos="zoom-in" src="assets/landing-img/contact.png" />
                </div>
                <form action="/submit-query" method="post">
                    @csrf
                    <div class="contact-second">
                        <input data-aos-duration="1000" data-aos="fade-up" type="text" name="name"
                            placeholder="Full Name" class="form-input" />
                        <input data-aos-duration="1000" data-aos="fade-up" type="text" name="email"
                            placeholder="Email Address" class="form-input" />
                        <input data-aos-duration="1000" data-aos="fade-up" type="text" name="subject"
                            placeholder="Subject" class="form-input" />
                        <input type="hidden" name="is_solved" value="0">
                        <textarea data-aos-duration="1000" data-aos="fade-up" placeholder="message" name="message"
                            rows="5" cols="4" class="form-input-textarea"></textarea>
                        <button data-aos-duration="1000" data-aos="fade-up" type="submit"
                            class="submit-btn">Submit</button>
                    </div>
                </form>
            </div>
                @if ($errors->any())
                <div class="alert alert-danger mt-3">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if(session()->has('formmessage'))
                <div class="alert alert-success mt-3">
                    {{ session()->get('formmessage') }}
                </div>
                @endif
        </section>
    </main>

    <footer>
        <div class="footer-container">
            <div class="footer-text">Copyright © 2020, made with ❤️ by GirlScript Goa.</div>
            <div class="social-icons">
            <div class="socials linkedin">
                        <a href="https://www.linkedin.com/company/girlscriptgoa/"><img src="../assets/socials svg/LinkedIn.svg" alt="Linked In"/></a>
                    </div>
                    <div class="socials instagram">
                        <a href="https://www.instagram.com/girlscriptgoa/">
                            <img src="../assets/socials svg/Instagram.svg" alt="" />
                        </a>
                    </div>
                    <div class="socials twitter">
                        <a href="https://twitter.com/girlscriptgoa">
                            <img src="../assets/socials svg/Twitter.svg" alt="" />
                        </a>
                    </div>
                    <div class="socials facebook">
                        <a href="https://www.facebook.com/girlscriptgoa-106623521174035">
                            <img src="../assets/socials svg/facebook.png" alt="" />
                        </a>
                    </div>
                    <div class="socials mail">
                        <a href="mailto:girlscriptgoa@gmail.com">
                            <img src="../assets/socials svg/Mail.svg" alt="" />
                        </a>
                    </div>
            </div>
        </div>
    </footer>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="js/app.js"></script>
</body>

</html>