<!--ALL THIRD PART JAVASCRIPTS-->
<script src="/vendor/js/vendor.footer.js"></script>

<!--nextloop.core.js-->
<script src="/js/core/ajax.js"></script>

<!--MAIN JS - AT END-->
<script src="/js/core/boot.js"></script>

<!--EVENTS-->
<script src="/js/core/events.js"></script>

<!--CORE-->
<script src="/js/core/app.js"></script>

<!--SAAS EVENTS-->
<script src="/js/landlord/events.js"></script>
<script src="/js/landlord/app.js"></script>


<!--flash messages-->
@if (Session::has('success-notification'))
<span id="js-trigger-session-message" data-type="success"
    data-message="{{ Session::get('success-notification') }}"></span>
@endif
@if (Session::has('error-notification'))
<span id="js-trigger-session-message" data-type="warning"
    data-message="{{ Session::get('error-notification') }}"></span>
@endif