<?php include 'VIOLETSKY-HEADER.php';?>

<!-- ///////////////////// VIOLETSKY Navigation bar //////////////////////// -->

<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="index.php"><img src="img/Logo_VS.png"></a>
    <button class="navbar-toggler float-sm-right" type="button" data-toggle="collapse" data-target="#navVIOLETSKY">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navVIOLETSKY">
      <ul class="navbar-nav ml-auto pr-0 mr-0 mt-0 pt-0">
        <li class="nav-item dropdown active" >
          <a class="nav-link active dropdown-toogle" id="navbardrop" href="index.php" data-toggle="dropdown">Who we are</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="index.php#whowearecont">Who we are</a>
                <a class="dropdown-item" href="index.php#whatweoffer">What we offer</a>
                <a class="dropdown-item" href="index.php#aboutus">About us</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toogle" id="navbardrop2" href="index.php" data-toggle="dropdown">Current Projects</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="VIOLETSKY-SELLOVIOLETA.php">Sello Violeta</a>
                <a class="dropdown-item" href="VIOLETSKY-PETRI.php">Petri</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="VIOLETSKY-CONTACTO.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <p>    </p>
        </li>

      </ul>   
    </div>
</nav>


<!-- ***** Hero Container ***** -->

<div class="container-fluid violetskyhero">
    <div class="row pt-5 pb-5">
        <div class="col-md-8">
            <h1 class="p-5" data-aos="zoom-in" data-aos-duration="3000">We'll show you what reality is.</h1>
        </div>
    </div>
</div>

<!-- ***** Who we are ***** -->

<div class="container-fluid pt-1" id="whowearecont">
    <div class="row">
        <div class="col-md-8 whoweare" data-aos="fade-right" data-aos-duration="1500">
            <div class="row">
                <div class="col-2">
                    <img src="img/vineta1.png" class="img-fluid p-sm-0">
                </div>
                <div class="col-10">
                    <h2>Who we are</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-9">
                    <p>Violet Sky Technologies is an innovative and collaborative North American technology company solving complex problems with technology. We like helping
our clients connect strategy and execution, identifying their strengths and opportunities, making unexpected connections.</p> <p>We love to collaborate and co-
create digital experiences that improve top line and bottom line results through the acceleration of new product introductions, technology modernization, operational
efficiency and cost containment. We firmly believe in the power of collaboration, where 1+1 can equal 3.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
            <div class="container-fluid p-sm-2 p-md-5">
                <img src="img/whoweare_ok.png" class="img-fluid mx-auto d-block" data-aos="fade-left" data-aos-duration="1500">
            </div>
    </div>
    </div>
</div>


<!-- ***** What we offer ***** -->

<div class="container-fluid pt-1" id="whatweoffer">
    <div class="row">
        <div class="col-md-8 whatweoffer" data-aos="fade-right" data-aos-duration="1500">
            <div class="row">
                <div class="col-2">
                    <img src="img/vineta1.png" class="img-fluid p-sm-0">
                </div>
                <div class="col-10">
                    <h2>What we offer</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-9">
                    <p>Violet Sky Technologies offers more than 25 years of innovation and technology experience, delivering complex and disruptive software solutions at some of the
biggest and most renowned companies in Telecom, Consulting, Consumer Packaged Goods, Retail, Medical Devices, Pharma and Hospitals. By helping
identify and move technology roadblocks, we help our clients dream and think big.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
            <div class="container-fluid p-sm-2 p-md-5">
                <img src="img/whatweoffer_ok.png" class="img-fluid mx-auto d-block" data-aos="fade-left" data-aos-duration="1500">
            </div>
    </div>
    </div>
</div>


<!-- ***** About us ***** -->

<div class="container-fluid aboutus" id="aboutus">
        <div class="row">
            <div class="col-md-8">
                <div class="row p-sm-2 p-md-4">
                    <div class="col-2"><img src="img/vineta2.png" class="img-fluid"></div>
                    <div class="col-10"><h2>About us</h2></div>
                </div>
            </div>
        </div>
    <div class="row">
        <div class="container-fluid px-sm-2 px-md-5 pb-sm-2 pb-md-4">
            <div class="card-deck">

                <div class="card p-sm-2 p-md-5">
                    <img class="card-img-top" src="img/Foto_C.jpg" alt="Carlos">
                    <div class="card-body">
                        <h4 class="card-title">Carlos G. Solano</h4>
                        <p class="card-text">Founder and CEO of Violet Sky Technologies</p>
                        <button class="btn btn-secondary" data-toggle="modal" data-target="#biomodal1">See Profile</button>
                    </div>

                    <div class="modal" id="biomodal1">
                      <div class="modal-dialog">
                        <div class="modal-content">

                          <!-- Modal Header -->
                          <div class="modal-header">
                            <h4 class="modal-title">Carlos G. Solano</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>

                          <!-- Modal body -->
                          <div class="modal-body">
                           <p> Carlos G. Solano is Founder and CEO of Violet Sky technologies. He was born and raised in Mexico City, and fell in love with technology when he was just a kid
    playing arcade games. After attaining his BS in Management Information Systems from <a href ="https://tec.mx/en" target="_blank" class="boldfont">ITESM</a>, he moved to the Bay Area and spent 23 successful years working in
    IT for a variety of companies in three different states in a variety of roles — Motorola, Ernst & Young, Kraft Foods, Móndelez International, Fresenius KABI
    and Walgreens.</p> <p>Carlos also obtained an MBA in Technology Management from University of Dallas, Graduate School of Management and is an avid soccer fan
    and technophile. He recently decided to move back to Mexico, choosing the city of Monterrey, close to the US, as his new place of residence. Today, he participates in the digital transformation efforts at Tecnológico de Monterrey. But <a href ="https://tec.mx/en" target="_blank" class="boldfont">ITESM</a>, in its relentless push for entrepreneurship, has given him the opportunity to pursue other interests on the
    side.</p>
                          </div>

                          <!-- Modal footer -->
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>

                        </div>
                      </div>
                    </div>

                </div>

                <div class="card p-sm-2 p-md-5">
                    <img class="card-img-top" src="img/Toedtli.jpg" alt="Carlos">
                    <div class="card-body">
                        <h4 class="card-title">Alexander W. Toedtli</h4>
                        <p class="card-text">Co-Founder Violet Sky Technologies</p>
                        <button class="btn btn-secondary" data-toggle="modal" data-target="#biomodal2">See Profile</button>
                    </div>
                </div>

                <div class="modal" id="biomodal2">
                      <div class="modal-dialog">
                        <div class="modal-content">

                          <!-- Modal Header -->
                          <div class="modal-header">
                            <h4 class="modal-title">Alexander W. Toedtli</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>

                          <!-- Modal body -->
                          <div class="modal-body">
                           <p> Born and raised in Mexico City by immigrant parents, he was immediately drawn to the arts and mediums of communication and languages. He holds a BA degree in Communication Arts and
Sciences from Anahuac University in Mexico City. As a professional, he started his career in
Advertising as a creative copywriter for various brands, including Annhauser Busch, Pepsi,
Pizza Hut, Clorox; garnering major advertising awards along the way. He is in love with the
language and power of Film, a medium he has explored in personal projects and writing,
directing and producing the feature length documentary titled: Babalú. La vida cantada. (2009).
Selected in various Film Festivals (DocMiami-USA, NorthxNorthEast-Canada and Festival
Internacional de Cine de Cartagena de Indias-Colombia).</p>
<p>His passion for new technologies and how we understand and adapt to our fast-changing world,
has led him to bring his knowledge and expertise to Violet Sky Technologies, where he’s
committed, as the rest of the team, to the relentless search for socially responsible solutions to
our modern problems.</p>
                          </div>

                          <!-- Modal footer -->
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>

                        </div>
                      </div>
                    </div>

            <div class="card p-sm-2 p-md-5">
                    <img class="card-img-top" src="img/Tapia.jpg" alt="Carlos">
                    <div class="card-body">
                        <h4 class="card-title">Lope Alejandro Tapia Lizardi</h4>
                        <p class="card-text">Co-Founder Violet Sky Technologies</p>
                        <button class="btn btn-secondary" data-toggle="modal" data-target="#biomodal4">See Profile</button>
                    </div>

                    <div class="modal" id="biomodal4">
                      <div class="modal-dialog">
                        <div class="modal-content">

                          <!-- Modal Header -->
                          <div class="modal-header">
                            <h4 class="modal-title">Lope Alejandro Tapia Lizardi</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>

                          <!-- Modal body -->
                          <div class="modal-body">
                           <p> Communicator dedicated to consulting since 2018. Ale has created communication strategies
and content for various industries, brands and personalities. His passion for entrepreneurship
and technology has led him to co-found Violet Sky, where he is able to apply all the acquired
experiences and knowledge in search for solutions to complex problems. As a producer, he
worked for channels like Televen, Venevisión (Cisneros Group), AXN (HBO Latin America
Group) and Sun Channel. He is Venezuelan, graduated from the Andrés Bello Catholic
University in Caracas and currently lives in Miami, USA.</p>
                          </div>

                          <!-- Modal footer -->
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>

                        </div>
                      </div>
                    </div>

                </div>



                <div class="card p-sm-2 p-md-5">
                    <img class="card-img-top" src="img/Francisco2.jpg" alt="Carlos">
                    <div class="card-body">
                        <h4 class="card-title">Francisco Tamayo Enríquez</h4>
                        <p class="card-text">Co-creator and Business Partner </p>
                        <button class="btn btn-secondary" data-toggle="modal" data-target="#biomodal3">See Profile</button>
                    </div>
                </div>

                <div class="modal" id="biomodal3">
                      <div class="modal-dialog">
                        <div class="modal-content">

                          <!-- Modal Header -->
                          <div class="modal-header">
                            <h4 class="modal-title">Francisco Tamayo Enríquez</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>

                          <!-- Modal body -->
                          <div class="modal-body">
                           <p> Francisco Tamayo-Enriquez is consultant, entrepreneur and professor. Currently, he is CEO of Oyamat.org, a consulting company in productivity, quality, and safety with over 18 years in the market. He is co-founder, partner, and managing director of SEREX.org, a Virtual Reality and Industry 4.0 lab focalized in knowledge acquisition and skill-development practices for industry and universities. He is also co-founder of Violet Sky. </p>

<p>Francisco has more than 25 years of experience working in managerial positions in Quality and Manufacturing in international companies in the energy (General Electric-Prolec) and automotive (Yazaki) industries. In 2014 he was recognized as Exemplar Leader of the Year in General Electric-Prolec and in 2011, selected as one of the 40 New Voices of Quality by the American Society of Quality (ASQ). </p>

<p>Francisco has a Ph.D. in Engineering from Tecnologico de Monterrey, M.S. in Industrial Engineering from Georgia Institute of Technology, M.S. in Manufacturing Systems, M.S. in Quality Systems, and B.S. in Industrial Engineering from Tecnologico de Monterrey. In 2020, he finished the Smart Manufacturing Certification from Massachusetts Institute of Technology. He is professor of Lean Thinking and Process Innovation in EGADE MBA and in the Master in Engineering Management in Tecnologico de Monterrey. He has been recognized 3 times as the Best Professor of the Semester in Digital Experiences and in 2019, as Distinguished EGADE Professor. </p>
                          </div>

                          <!-- Modal footer -->
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>

                        </div>
                      </div>
                    </div>


            </div>
    </div>
</div>



<?php include 'VIOLETSKY-FOOTER.php';?>








