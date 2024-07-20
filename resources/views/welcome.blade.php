<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ANEEIUN - Official Page</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />

    @vite('resources/css/app.css')

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">
                <img src="{{ asset('assets/logo/LOGO-WHITE.PNG') }}" alt="" class="w-25" id="logo_white">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Media</a></li>
                    <li class="nav-item"><a class="nav-link" href="#signup">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center">
            <div class="row">
                <div class="col">
                    <div class="rotating-card-container ">
                        <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">
                            <div class="front front-background" style="background-image: url({{ asset('assets/albums/1/COVER.png') }});">
                            </div>
                            <div class="back back-background" style="background-image: url({{ asset('assets/albums/1/back.png') }});">
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col">
                    <div class="row-reverse">
                        <div class="col d-flex justify-content-center my-5">
                            <img src="{{ asset('assets/logo/LOGO-FILTER.PNG') }}" alt="" class="w-50"
                                id="logo_filter">
                        </div>
                        <div class="col d-flex justify-content-center my-5 px-5">
                            <p class="text-white text-center">
                                The band Aneeiun has recently released their first full-length album titled "From The
                                Singularity". This solo musical project not only marks a milestone in the band's career,
                                but also explores deep themes about the universe and the structure of existence. Drawing
                                influences from atmospheric black metal to melodic genres, Aneeiun has crafted a sonic
                                experience that invites the listener to reflect on our place in the vast cosmos and how
                                we have come to be here.
                            </p>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <button class="btn btn-dark rounded-5"><i class="fa-solid fa-cart-shopping"></i>
                                Buy</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="about-section text-center" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                    <img src="{{ asset('assets/logo/LOGO-FILTER.PNG') }}" alt="" class="w-50"
                        id="logo_filter">
                    <p class="text-white-50">
                        Aneeiun is a solo one-person black metal musical project originating from Colombia. Founded and
                        led by a single musician, this project is distinguished by its focus on exploring themes of the
                        universe, existentialism, and nihilism through the characteristic atmospheric intensity of black
                        metal.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="projects-section" id="projects">
        <div class="container px-4 px-lg-5">
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0 rounded-5 w-100"
                        src="{{ asset('assets/band/1.jpg') }}" /></div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="text-white font-weight">Arioch Black</h4>
                        <p class="text-white-50">He is a multi-instrumentalist musician and founder of the band
                            Aneeium,
                            based in the city of Bogotá. His ability to play multiple instruments has been key in
                            creating the distinctive sound of the group.</p>
                    </div>
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid w-100" src="{{ asset('assets/band/2.jpg') }}" /></div>
                <div class="col-lg-6">
                    <div class="h-100 project">
                        <div class="background-image">
                            <img src="{{ asset('assets/albums/1/COVER.png') }}" alt="">
                        </div>
                        <div class="overlay"></div>
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-lg-left">
                                <h4 class="text-white">At The Initation</h4><br>
                                <p class="text-white">
                                    The universe as an entity that creates existence and breaks nothingness, while being
                                    described with contrasting qualities: hostile and premature in the twilight, perfect and singular like
                                    transcendence-less death.
                                </p> <br>
                                <audio id="player1" controls>
                                    <source src="{{ asset('assets/albums/1/At_The_Initation.mp3') }}"
                                        type="audio/wav" />
                                </audio>
                                <script>
                                    const player1 = new Plyr('#player1');
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gx-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="{{ asset('assets/band/3.PNG') }}"
                        alt="..." />
                </div>
                <div class="col-lg-6 order-lg-first">
                    <div class="h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-lg-right">
                                <div class="background-image">
                                    <img src="{{ asset('assets/albums/1/COVER.png') }}" alt="">
                                </div>
                                <div class="overlay"></div>
                                <h4 class="text-white">A Look Towards The Stars</h4><br>
                                <p class="text-white">
                                    The lyrics celebrate the discovery of a "new Earth," a place that feels like home in
                                    the narrator's heart. Under its blue sky and splendid nights, they discover truth,
                                    beauty, and purpose, contemplating their existence on this "pale blue dot."
                                </p> <br>
                                <audio id="player2" controls>
                                    <source src="{{ asset('assets/albums/1/A_Look_Towards_The_Stars.mp3') }}"
                                        type="audio/wav" />
                                </audio>
                                <script>
                                    const player2 = new Plyr('#player2');
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gx-0 mb-lg-5 align-items-center justify-content-center p-5">
                <div class="col-xl-10 col-lg-10">
                    <iframe width="1280" height="540" class="embed-responsive d-none" src=""
                        title="" frameborder="0"></iframe>
                    <img src="{{ asset('assets/band/fake_video.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="signup-section" id="signup">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-10 col-lg-8 mx-auto text-center">
                    <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                    <h2 class="text-white mb-5">Contact Me</h2>
                    <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <div class="row-reverse">
                            <div class="col mb-2">
                                <input type="text" name="full_name" id="full_name" class="form-control"
                                    placeholder="Full name">
                            </div>
                            <div class="col mb-2">
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="Email">
                            </div>
                            <div class="col mb-2">
                                <textarea name="description" id="description" class="form-control" placeholder="please leave a message..."
                                    cols="30" rows="10"></textarea>
                            </div>
                            <div class="col my-2">
                                <button class="btn btn-dark" type="button">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-section bg-black">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-3">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/icons/youtube.png') }}" alt="" style="width: 10%"
                                class="mb-3">
                            <h4 class="text-uppercase m-0">YouTube</h4>
                            <hr class="my-4 mx-auto" />
                            <i class="fa-solid fa-diamond-turn-right fa-2xl"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/icons/bandcamp.png') }}" alt="" style="width: 10%"
                                class="mb-3">
                            <h4 class="text-uppercase m-0">BandCamp</h4>
                            <hr class="my-4 mx-auto" />
                            <i class="fa-solid fa-diamond-turn-right fa-2xl"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/icons/facebook.png') }}" alt="" style="width: 10%"
                                class="mb-3">
                            <h4 class="text-uppercase m-0">Facebook</h4>
                            <hr class="my-4 mx-auto" />
                            <i class="fa-solid fa-diamond-turn-right fa-2xl"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/icons/spotify.png') }}" alt="" style="width: 10%"
                                class="mb-3">
                            <h4 class="text-uppercase m-0">Spotify</h4>
                            <hr class="my-4 mx-auto" />
                            <i class="fa-solid fa-diamond-turn-right fa-2xl"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/icons/deezer.png') }}" alt="" style="width: 10%"
                                class="mb-3">
                            <h4 class="text-uppercase m-0">Deezer</h4>
                            <hr class="my-4 mx-auto" />
                            <i class="fa-solid fa-diamond-turn-right fa-2xl"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/icons/music.png') }}" alt="" style="width: 10%"
                                class="mb-3">
                            <h4 class="text-uppercase m-0">Apple Music</h4>
                            <hr class="my-4 mx-auto" />
                            <i class="fa-solid fa-diamond-turn-right fa-2xl"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mx-auto">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/icons/link.png') }}" alt="" style="width: 10%"
                                class="mb-3">
                            <h4 class="text-uppercase m-0">More</h4>
                            <hr class="my-4 mx-auto" />
                            <i class="fa-solid fa-diamond-turn-right fa-2xl"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; ANEEIUN 2024</div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    @vite('resources/js/app.js')
</body>

</html>
