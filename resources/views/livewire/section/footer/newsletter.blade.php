<div class="col-lg-3 col-md-6 col-12">
    <!-- Single Widget (Widget Newsletter) -->
    <div class="single-widget widget-newsletter">
        <h5 class="widget-title">{{__("Get In Touch")}}</h5>
        <p>{{__("Be the first to know about the latest content and services by subscribing to our newsletter!")}}</p>
        <form wire:submit="getNewsletter"  id="tm-mailchimp-form" class="widget-newsletter-form">
            <input id="mc-email" type="email" placeholder="{{__("Enter email address")}}" class=" @error('email_newsletter') is-invalid @enderror"
                   wire:model.defer="email_newsletter">
            @if ($errors->has('email_newsletter'))
                <span class="text-danger">{{ $errors->first('email_newsletter') }}</span>
            @endif
            <button id="mc-submit" type="submit" class="tm-button">{{__("Subscribe Now")}} <b></b></button>
        </form>
        <div class="mb-3 row">
            <span wire:loading class="col-md-3 offset-md-5 text-primary">Processing...</span>
        </div>
        <!-- Mailchimp Alerts -->
        <div class="tm-mailchimp-alerts">
            <div class="tm-mailchimp-submitting"></div>
            <div class="mailchimp-success"></div>
            <div class="tm-mailchimp-error"></div>
        </div>
        <!--// Mailchimp Alerts -->
    </div>
    <!--// Single Widget (Widget Newsletter) -->
</div>
