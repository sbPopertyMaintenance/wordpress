
<section id="quote-form">
    <div class="container">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <div class="alert alert-success hidden" role="alert">
                <strong>Success!</strong>We have received your quote request and will contact you as soon as possible.
            </div>
            <div class="alert alert-danger hidden" role="alert">
                <strong>Oops, looks like something went wrong!</strong> Please try again. If this issue persists please contact us at info@sbpropertymaintenance.ca
            </div>
            <div class="row">
                <div class="text-center">
                    <h2>Request a Quote</h2>
                </div>
            </div>

            <form action="<?php echo admin_url('admin-ajax.php'); ?>" method="POST" id="request-quote" enctype="multipart/form-data">

                <h3>Contact Information</h3>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label for="sb-first-name" class="required">First Name</label>
                        <input class="form-control" type="text" name="sb-first-name" id="sb-first-name" placeholder="John" required>
                    </div>
                    <div class="col-sm-6 form-group" class="required">
                        <label for="sb-last-name">Last Name</label>
                        <input class="form-control" type="text" name="sb-last-name" id="sb-last-name" placeholder="Doe" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label for="sb-street">Street Address</label>
                        <input class="form-control" type="text" name="sb-street" id="sb-street" placeholder="263 Caledonia Rd">
                    </div>
                    <div class="col-sm-4 form-group">
                        <label for="sb-city">City</label>
                        <input class="form-control" type="text" name="sb-city" id="sb-city" placeholder="Dartmouth">
                    </div>
                    <div class="col-sm-2 form-group">
                        <label for="sb-postal">Postal Code</label>
                        <input class="form-control" type="text" name="sb-postal" id="sb-postal" placeholder="B2X 1L5">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label for="sb-email" class="required">Email</label>
                        <input class="form-control" type="email" name="sb-email" id="sb-email" placeholder="info@sbpropertymaintenance.ca" required>
                    </div>
                    <div class="col-sm-4 form-group">
                        <label for="sb-phone">Phone</label>
                        <input class="form-control" type="tel" name="sb-phone" id="sb-phone" placeholder="902-555-5555">
                    </div>
                </div>

                <h3>Project Details</h3>
                <div class="row">
                    <div class="col-sm-5 form-group">
                        <label for="ssb-ervice-type" class="required">Service Type</label>
                        <select name="sb-service-type" id="sb-service-type" required>
                            <option value="" disabled selected>What are you looking for?</option>
                            <option value="landscaping">Landscaping</option>
                            <option value="renovations">Renovations</option>
                            <option value="snow-clearing">Snow Clearing</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 form-group">
                        <label for="sb-message" class="required">Message</label>
                        <textarea name="sb-message" id="sb-message" cols="30" rows="10" placeholder="Tell us a little more about what you're looking for ..." required></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="controls">
                            <!-- <div class="g-recaptcha" data-sitekey="6LdAYFgUAAAAAJe-FjV_75lv0Izs0CRaV66Cvk4s"></div> -->
                            <input type="hidden" name="action" value="send_quote_request">
                            <input type="submit" value="Submit Quote Request" class="btn btn-primary">
                        </div>
                    </div>
                </div>

            </form>
        </div>
        
    </div>
</section>