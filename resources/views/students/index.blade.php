@extends('students.layouts.base')

@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url('main/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-12 ftco-animate">
          	<h2 class="subheading">AIKTC Presents</h2>
          	<h1 class="mb-4 mb-md-0">Bonhomie 2020 Fuerza</h1>
          	<div class="row">
          		<div class="col-md-7">
          			<div class="text">
						<p>#CelebrateTheFriendliness</p>
					</div>
          		</div>
          	</div>
          </div>
        </div>
      </div>
    </div>
    <section id="info" class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row d-flex">
    			
    			<div class="col-md-12 pl-md-5 py-md-5">
    				<div class="row justify-content-start pt-3 pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		            <h2 class="mb-4">What is Bonhomie 2020 Fuerza ?</h2>
                    <p>We offer three exhilerating categories of competitions for the students and staff.</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia fugiat hic deserunt nulla itaque officiis esse dolorum repudiandae officia ipsa. Magnam, laudantium deserunt? Sequi velit delectus dolores ipsa est praesentium?</p>
                    <div class="tabulation-2 mt-4">
									<ul class="nav nav-pills nav-fill d-md-flex d-block">
									  <li class="nav-item mb-md-0 mb-2">
									    <a class="nav-link active py-2" data-toggle="tab" href="#home1">Technical</a>
									  </li>
									  <li class="nav-item px-lg-2 mb-md-0 mb-2">
									    <a class="nav-link py-2" data-toggle="tab" href="#home2">Cultural</a>
									  </li>
									  <li class="nav-item">
									    <a class="nav-link py-2 mb-md-0 mb-2" data-toggle="tab" href="#home3">Sports</a>
									  </li>
									</ul>
									<div class="tab-content bg-light rounded mt-2">
									  <div class="tab-pane container p-0 active" id="home1">
									  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									  </div>
									  <div class="tab-pane container p-0 fade" id="home2">
									  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									  </div>
									  <div class="tab-pane container p-0 fade" id="home3">
									  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									  </div>
									</div>
								</div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>
    <section class="ftco-section testimony-section">
        <div class="container">
          <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
              <h2 class="mb-4">What others say ?</h2>
            </div>
          </div>
          <div class="row ftco-animate">
            <div class="col-md-12">
              <div class="carousel-testimony owl-carousel ftco-owl">
                <div class="item">
                    <div class="testimony-wrap py-4">
                      <div class="text">
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <div class="d-flex align-items-center">
                            <div class="user-img" style="background-image: url(main/images/person_1.jpg)"></div>
                            <div class="pl-3">
                                <p class="name">Dr.Abdul Razzak Honnutagi</p>
                                <span class="position">Director - AIKTC</span>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
                <div class="item">
                  <div class="testimony-wrap py-4">
                    <div class="text">
                      <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                      <div class="d-flex align-items-center">
                          <div class="user-img" style="background-image: url(main/images/person_3.jpg)"></div>
                          <div class="pl-3">
                              <p class="name">Mr.Student</p>
                              <span class="position">Student</span>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                
                <div class="item">
                  <div class="testimony-wrap py-4">
                    <div class="text">
                      <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                      <div class="d-flex align-items-center">
                          <div class="user-img" style="background-image: url(main/images/person_2.jpg)"></div>
                          <div class="pl-3">
                              <p class="name">Prof.Nawaz Motiwala</p>
                              <span class="position">Faculty - ME</span>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="ftco-section contact-section">
        <div class="container">
          <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
              <h2 class="h3">Contact Information</h2>
            </div>
          </div>
          <div class="row block-9 no-gutters">
            <div class="col-lg-12 order-md-last d-flex">
              <form action="#" class="bg-light p-4 p-md-5 contact-form">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Email">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Subject">
                </div>
                <div class="form-group">
                  <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                </div>
              </form>
            
            </div>
  
            
          </div>
        </div>
      </section>
   	

  @endsection