<section id="quote-form">
    <div class="container">
        <div class="col-sm-12 col-md-10 col-md-offset-1">

            <div class="row">
                <div class="text-center">
                    <h2>Request a Quote</h2>
                </div>
            </div>

            <form action="<?php  echo get_bloginfo( 'template_directory' );?>/services/email/quote.php" method="post" id="request-quote">

                <h3>Contact Information</h3>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label for="first-name" class="required">First Name</label>
                        <input class="form-control" type="text" name="first-name" id="first-name" placeholder="John" required>
                    </div>
                    <div class="col-sm-6 form-group" class="required">
                        <label for="last-name">Last Name</label>
                        <input class="form-control" type="text" name="last-name" id="last-name" placeholder="Doe" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label for="street">Street Address</label>
                        <input class="form-control" type="text" name="street" id="street" placeholder="263 Caledonia Rd">
                    </div>
                    <div class="col-sm-4 form-group">
                        <label for="city">City</label>
                        <input class="form-control" type="text" name="city" id="city" placeholder="Dartmouth">
                    </div>
                    <div class="col-sm-2 form-group">
                        <label for="postal">Postal Code</label>
                        <input class="form-control" type="text" name="postal" id="postal" placeholder="B2X 1L5">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label for="email" class="required">Email</label>
                        <input class="form-control" type="email" name="email" id="email" placeholder="info@sbpropertymaintenance.ca" required>
                    </div>
                    <div class="col-sm-4 form-group">
                        <label for="phone">Phone</label>
                        <input class="form-control" type="tel" name="phone" id="phone" placeholder="902-555-5555">
                    </div>
                </div>

                <h3>Project Details</h3>
                <div class="row">
                    <div class="col-sm-5 form-group">
                        <label for="service-type" class="required">Service Type</label>
                        <select name="service-type" id="service-type" required>
                            <option value="" disabled selected>What are you looking for?</option>
                            <option value="landscaping">Landscaping</option>
                            <option value="renovations">Renovations</option>
                            <option value="snow-clearing">Snow Clearing</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 form-group">
                        <label for="message" class="required">Message</label>
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Tell us a little more about what you're looking for ..." required></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="controls">
                            <div class="g-recaptcha" data-sitekey="6LdAYFgUAAAAAJe-FjV_75lv0Izs0CRaV66Cvk4s"></div>
                            <input type="submit" value="Submit Quote Request" class="btn btn-primary">
                        </div>
                    </div>
                </div>

            </form>
        </div>
        
    </div>
</section>