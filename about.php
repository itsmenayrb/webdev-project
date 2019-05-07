<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bryan Balaga | About</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/css/theme.css" />
    <link rel="stylesheet" href="./assets/css/template2.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./style.css"/>
    <style type="text/css">
        p {
            text-indent: 3.0em;
            line-height: 3.0em;
            letter-spacing: 2px;
        }

        #more {
            display: none;
        }

        .familypic {
            width: 300px;
            height: 300px;
            max-height: 100%;
            max-width: 100%;
        }
    </style>
</head>
<body data-spy="scroll" data-target="#navbar1" data-offset="60">
    <?php include './includes/header.php'; ?>
    <main class="my-5">       
        <div class="container mt-5">
            <h1 class="text-center mb-5">My <span class="bg-primary" id="spanlogo">Autobiography</span></h1>
            <div class="row mt-5">
                <div class="col-xs-12 col-sm-6 col-md-5">
                    <img src="./assets/img/coverphoto.jpg" class="img-fluid">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-7">
                    <p class="lead text-justify mb-3"><span class="display-4 text-primary">T</span>his is a the story of my life, my family, my friends, my hobbies, things that I like and I don't, my dreams, my ambitions, my worst and best memories, and my saddest and happiest moments of my life.</p>
                    <p class="lead text-justify mb-3"><span class="display-4 text-primary">M</span>y name is Bryan Villanueva Balaga and I was born on the 28th of August, 1995 in New Manila, Quezon City. My parents are Rolando Vencio Balaga Sr. and Amor Villanueva Balaga. My father is a freelance electrician and my mother is a housewife. We are four siblings in the family and I am the third child. <span id="dots">...</span></p>
                </div>
                <span id="more">
                    <p class="lead text-justify mb-3"><span class="display-4 text-primary">I</span> took my elementary education at Betty Go Belmonte Elementary School in Quezon City where I met my bestfriend, John Paulo Moreno. We were classmates from grade 2 when I was 7 years old up to 2<sup>nd</sup> year high school when I was 13. I took my secondary education at Carlos Lucban Albert High School at Quezon City as well but transferred at General Emilio Aguinaldo National High School in Imus, Cavite due to fire incident that caught our houses.</p>
                    <p class="lead text-justify mb-3"><span class="display-4 text-primary">J</span>ust like a typical 00's teenager. I experienced a lot during my high school days. Like first time to skip class, first time to get drunk, etc. I still remember the days when we were doing play "Florante at Laura", "Noli me Tangere", and "El Filibusterismo". And a lot more.</p>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-7">
                            <p class="lead text-justify mb-3"><span class="display-4 text-primary">I</span> graduated high school on 2011 and study in college at Cavite State University - Imus Campus on 2012. I took up a 2 year course "Certificate in Computer Technician" and graduated last 2014. I continue my study for 1 year and took up Bachelor of Science in Information Technology but unfortunately, I haven't finish it due to financial problem. Now after 3 years, I am continuing my study and pursuing my dream to become a web developer.</p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-5">
                            <img src="./assets/img/places/cvsu.jpg" class="img-fluid">
                        </div>
                    </div>
                    <p class="lead text-justify mb-3"><span class="display-4 text-primary">I</span> am now in a happy relationship with my very first girlfriend, Apple Rose Gabales and hoping and praying that she will be my last.</p>
                </span>
                <div style="margin: 0 auto;">
                    <button class="text-center btn btn-outline-primary" onclick="readMore()" id="readmore">Read more</button> 
                    
                </div>
            </div>
        </div>

        <hr class="bg-primary my-5" width="70%">

        <h1 class="text-center py-sm-2">My Family Tree</h1>
        <section class="container">
            <div class="row mb-3">
                <div class="col-sm-12 col-md-4 offset-md-2 offset-md-1 mb-3">
                    <div class="card border-primary h-100">
                        <div class="card-body d-flex flex-column align-items-center">
                            <h4 class="card-title text-primary">Rolando V. Balaga Sr.</h4>
                            <img src="./assets/img/papa.jpg" class="img-fluid familypic"/>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 mb-3">
                    <div class="card border-primary h-100">
                        <div class="card-body d-flex flex-column align-items-center">
                            <h4 class="card-title text-primary">Amor V. Balaga</h4>
                            <img src="./assets/img/mama.jpg" class="img-fluid familypic"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-3 mb-3">
                    <div class="card border-primary h-100">
                        <div class="card-body d-flex flex-column align-items-center">
                            <h4 class="card-title text-primary">Cherish Ann V. Balaga</h4>
                            <img src="./assets/img/ate.jpg" class="img-fluid familypic"/>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 mb-3">
                    <div class="card border-primary h-100">
                        <div class="card-body d-flex flex-column align-items-center">
                            <h4 class="card-title text-primary">Rolando V. Balaga Jr.</h4>
                            <img src="./assets/img/kuya.jpg" class="img-fluid familypic"/>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 mb-3">
                    <div class="card border-primary h-100">
                        <div class="card-body d-flex flex-column align-items-center">
                            <h4 class="card-title text-primary">Bryan V. Balaga</h4>
                            <img src="./assets/img/ako.jpg" class="img-fluid familypic"/>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 mb-3">
                    <div class="card border-primary h-100">
                        <div class="card-body d-flex flex-column align-items-center">
                            <h4 class="card-title text-primary">Vince Julius V. Balaga</h4>
                            <img src="./assets/img/vj.jpg" class="img-fluid familypic"/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include './includes/footer.php'; ?>     
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./assets/js/jquery.counterup.js"></script>
    <script type="text/javascript" src="./assets/js/waypoints.js"></script>
    <script type="text/javascript" src="./custom.js"></script>
    <script type="text/javascript">
        function readMore() {
            var dots = document.getElementById('dots');
            var moreText = document.getElementById('more');
            var readmoreBtn = document.getElementById('readmore');

            if (dots.style.display === 'none') {
                dots.style.display = 'inline';
                readmoreBtn.innerHTML = 'Read more';
                moreText.style.display = 'none';
            } else {
                dots.style.display = 'none';
                readmoreBtn.innerHTML = 'Read less';
                moreText.style.display = 'inline';
            }
        }
    </script>
</body>
</html>