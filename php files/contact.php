<?php
/*
  Template Name: Contact Page
*/

?>
<?php get_header(); ?>

<div class="contact">
    <div class="contact-header">
        <div class="black-div-title text-center">Contact Us</div>
            <div class="contact-paragraph text-center">Do you have questions for us or just want to get in touch?</div>
            <div class="contact-paragraph text-center">Use the form below or click on our members page to contact one of our brothers directly.</div>
    </div>

    <div class="row">
        <div class="col-sm-4 col-sm-offset-4 contact-form">
            <form class="form-horizontal">
                <div class="form-group contact-group">
                    <label>Name*</label>
                    <input type="text" class="form-control contact-input">
                </div>
                <div class="form-group contact-group">
                    <label>Email*</label>
                    <input type="text" class="form-control contact-input">
                </div>
                <div class="form-group contact-group">
                    <label>Subject</label>
                    <input type="text" class="form-control contact-input">
                </div>
                <div class="form-group contact-group">
                    <label>Message*</label>
                    <textarea class="form-control contact-input" rows="6"></textarea>
                </div>
            </form>
        </div>
    </div>

    <div class="rush-button">Submit</div>
</div>

<?php get_footer(); ?>