<?php
/*
Template Name: Contact us
*/
?>

<?php get_header(); ?>

<div class="container Contact-us">
      <h1 text-left>Contact Us</h1>
      <hr>
      <br>
       <div class="row top-banner">
            <div class="col-lg-12 section1">
                <p class="desc">
                  You can reach us by completing this form. Thank you.
                  </p>
            </div>
            <div class="col-lg-12">
                <div class="row">
                      <div class="col-md-6">
                        <form>
                              <div class="form-group">
                                  <label for="exampleInputFirstname1">First name</label>
                                  <input type="name" class="form-control" id="exampleInputFirsname1" placeholder="Enter your Firstname" required="required" data-error="Firstname is required.">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputLastname1">Last name</label>
                                  <input type="name" class="form-control" id="exampleInputLastname1" placeholder="Enter your Lastname" required="required" data-error="Lastname is required.">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Email address</label>
                                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your Email" required="required" data-error="Email is required.">
                              </div>
                              <div class="form-group">
                                   <label for="exampleInputPassword1">Phone</label>
                                   <input type="tel" class="form-control" id="exampleInputPhone1" placeholder="Enter your Phone" required="required" data-error="Phone is required.">
                              </div>
                              <div class="form-group">
                                    <label for="form_message">Message</label>
                                    <textarea id="form_message" name="message" class="form-control" placeholder="Message for Us" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                      </div>
                      <div class="col-md-6 contacts">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/icon-visit.png"> 
                              <div class="visit-us"> 
                                  <h3>VISIT US</h3>
                                  <h4>ABS-CBN Corporation</h4>
                                  <p>Sgt. E.A. Esguerra Avenue<br>
                                    Quezon City Philippines 1103
                                    </p>
                            </div>
                            <br>
                            <img src="<?php echo get_template_directory_uri(); ?>/image/icon-call-us.png"> 
                              <div class="visit-us"> 
                                  <h3>CALL US</h3>
                                  <p>(+632) 415-2272</p>
                            </div>
                      </div>
                </div>
            </div>
       </div>
    </div>
<?php get_footer(); ?>