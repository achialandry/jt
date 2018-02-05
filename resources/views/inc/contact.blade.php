<!-- Contact ================================= -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-4 contact">
                    <h2 class="featurette-heading text-dark text-right bounceIn">Contact Us</h2>
                </div>
                <div class="col-md-8 " data-aos="fade-right"><br><br>

                      <!--Contact Us-->
                      <section class="container text-light">

                      <!--Section description-->
                      <p class="section-description">Contact details.</p><br>
                      <div class="row">

                          <!--Grid column-->
                          <div class="col-md-8 col-xl-9">
                              {!! Form::open(['route' => 'contact.store', 'class' => 'text-light '])!!}
                              <!-- <form id ="contact-form" name="contact-form" action="mail.php" method="POST"> -->

                                  <!--Grid row-->
                                  <div class="row">

                                      <!--Grid column-->
                                      <div class="col-md-6">
                                          <div class="md-form">
                                              <div class="md-form">
                                                  <!-- <input type="text" id="name" name="name" class="form-control" >
                                                  <label for="name" class="">Your name</label> -->
                                                  {!! Form::label('name', 'Your Name', ['class' => 'text-light'])!!}
                                                  {!! Form::text('name', null, ['required' => true, 'class' => 'form-control text-light'])!!}
                                              </div>
                                          </div>
                                      </div>
                                      <!--Grid column-->

                                      <!--Grid column-->
                                      <div class="col-md-6">
                                          <div class="md-form">
                                              <div class="md-form">
                                                  <!-- <input type="text" id="address" name="address" class="form-control" placeholder="address"> -->
                                                  <!-- <label for="address" class="">Address</label> -->
                                                  {!! Form::label('address', 'Address', ['class' => 'text-light'])!!}
                                                  {!! Form::text('address', null, ['class' => 'form-control text-light'])!!}
                                              </div>
                                          </div>
                                      </div>
                                      <!--Grid column-->
                                  </div>
                                  <!--Grid row-->

                                  <!--Grid row-->
                                  <div class="row">

                                      <!--Grid column-->
                                      <div class="col-md-6">
                                          <div class="md-form">
                                              <div class="md-form">
                                                  <!-- <input type="text" id="city" name="city" class="form-control" placeholder="City"> -->
                                                  <!-- <label for="city" class="">City</label> -->
                                                  {!! Form::label('city', 'City', ['class' => 'text-light'])!!}
                                                  {!! Form::text('city', null, ['class' => 'form-control text-light'])!!}
                                              </div>
                                          </div>
                                      </div>
                                      <!--Grid column-->

                                      <!--Grid column-->
                                      <div class="col-md-6">
                                          <div class="md-form">
                                              <div class="md-form">
                                                  <!-- <input type="text" id="province" name="province" class="form-control" placeholder="Province"> -->
                                                  <!-- <label for="province" class="">Province/State</label> -->
                                                  {!! Form::label('province', 'Province', ['class' => 'text-light'])!!}
                                                  {!! Form::text('province', null, ['class' => 'form-control text-light'])!!}
                                              </div>
                                          </div>
                                      </div>
                                      <!--Grid column-->
                                  </div>
                                  <!--Grid row-->

                                  <!--Grid row-->
                                  <div class="row">

                                      <!--Grid column-->
                                      <div class="col-md-6">
                                          <div class="md-form">
                                              <div class="md-form">
                                                  <!-- <input type="tel" id="phone" name="phone" class="form-control" required placeholder="Phone No."> -->
                                                  <!-- <label for="phone" class="">Phone</label> -->
                                                  {!! Form::label('phone', 'Phone No.', ['class' => 'text-light'])!!}
                                                  {!! Form::text('phone', null, ['required' => true, 'class' => 'form-control text-light'])!!}
                                              </div>
                                          </div>
                                      </div>
                                      <!--Grid column-->

                                      <!--Grid column-->
                                      <div class="col-md-6">
                                          <div class="md-form">
                                              <div class="md-form">
                                                  <!-- <input type="text" id="email" name="email" class="form-control" required placeholder="Email"> -->
                                                  <!-- <label for="email" class="">Your email</label> -->
                                                  {!! Form::label('email', 'Email', ['class' => 'text-light'])!!}
                                                  {!! Form::email('email', null, ['required' => true, 'class' => 'form-control text-light'])!!}
                                              </div>
                                          </div>
                                      </div>
                                      <!--Grid column-->

                                  </div>
                                  <!--Grid row-->

                                  <!--Grid row-->
                                  <div class="row">

                                      <!--Grid column-->
                                      <div class="col-md-6">
                                          <div class="md-form">
                                              <div class="md-form">
                                                  <!-- <input type="text" id="postal" name="postal" class="form-control" placeholder="Postal Code"> -->
                                                  <!-- <label for="postal" class="">Postal Code</label> -->
                                                  {!! Form::label('postal', 'Postal Code', ['class' => 'text-light'])!!}
                                                  {!! Form::text('postal', null, ['class' => 'form-control text-light'])!!}
                                              </div>
                                          </div>
                                      </div>
                                      <!--Grid column-->

                                      <!--Grid column-->
                                      <div class="col-md-6">
                                          <div class="md-form">
                                              <div class="md-form">
                                                  <!-- <input type="text" id="country" name="country" class="form-control" placeholder="Country"> -->
                                                  <!-- <label for="country" class="">Country</label> -->
                                                  {!! Form::label('country', 'Country', ['class' => 'text-light'])!!}
                                                  {!! Form::text('country', null, ['class' => 'form-control text-light'])!!}
                                              </div>
                                          </div>
                                      </div>
                                      <!--Grid column-->

                                  </div>
                                  <!--Grid row-->

                                  <!--Grid row-->
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="md-form">
                                              <!-- <input type="text" id="subject" name="subject" class="form-control" required placeholder="Subject"> -->
                                              <!-- <label for="subject" class="">Subject</label> -->
                                              {!! Form::label('subject', 'Subject', ['class' => 'text-light'])!!}
                                              {!! Form::text('subject', null, ['required' => true, 'class' => 'form-control text-light'])!!}
                                          </div>
                                      </div>
                                  </div>
                                  <!--Grid row-->

                                  <!--Grid row-->
                                  <div class="row">

                                      <!--Grid column-->
                                      <div class="col-md-12">

                                          <div class="md-form">
                                              <!-- <textarea type="text" id="message" name="message" class="md-textarea" placeholder="Your Message Here..." required ></textarea> -->
                                              <!-- <label for="message">Your message</label> -->
                                              {!! Form::label('message', 'Your Message Here..', ['class' => 'text-light'] )!!}
                                              {!! Form::textarea('message', null, ['required' => true, 'class' => 'form-control text-light'])!!}
                                          </div>

                                      </div>
                                  </div>
                                  <!--Grid row-->


                              <!-- <div class="center-on-small-only">
                                  <a class="btn btn-primary" onclick="validateForm()">Send</a>
                              </div> -->

                              {!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}

                              {!! Form::close() !!}
                              <!-- <div class="status" id="status"></div> -->
                              @if($errors -> any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors -> all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @include('flash::message')
                        </div><br><br><br>
                          <!--Grid column-->

                          <!--Grid column-->
                          <div class="col-md-4 col-xl-3">
                              <ul class="contact-icons">
                                  <li><i class="text-light fa fa-map-marker fa-3x"></i>
                                      <p>7164, 120th St. Surrey, BC. V3W 3M8</p>
                                  </li>

                                  <li><i class="text-light fa fa-phone fa-3x"></i>
                                      <p>Phone:          <strong>604-503-4161</strong></p>
                                      <p>Mobile(24hrs):  <strong>778-885-4161</strong></p>
                                      <p>Fax:            <strong>604-503-4160</strong></p>
                                  </li>

                                  <li class="list-item"><i class=" text-light fa fa-envelope fa-3x"></i>
                                      <p>contact@jtabc.com</p>
                                  </li>
                              </ul>
                          </div>
                          <!--Grid column-->

                      </div>

                      </section>
                      <!--Contact us form-->
                </div>
            </div>




        </div>


    </section>


        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->
