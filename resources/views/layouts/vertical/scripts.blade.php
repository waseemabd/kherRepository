<script src="{{ URL::asset('messages.js') }}"></script>

<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

		<!-- Jquery js-->
		<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>

		<!-- Bootstrap js-->
		<script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
		<script src="{{asset('assets/plugins/bootstrap/js/bootstrap-rtl.js')}}"></script>

		<!-- Ionicons js-->
		<script src="{{asset('assets/plugins/ionicons/ionicons.js')}}"></script>

		<!-- Moment js -->
		<script src="{{asset('assets/plugins/moment/moment.js')}}"></script>

		<!-- P-scroll js -->
		<script src="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min-rtl.js')}}"></script>
		<script src="{{asset('assets/plugins/perfect-scrollbar/p-scroll-rtl.js')}}"></script>

		<!-- Rating js-->
		<script src="{{asset('assets/plugins/rating/jquery.rating-stars.js')}}"></script>
		<script src="{{asset('assets/plugins/rating/jquery.barrating.js')}}"></script>

		<!-- Sticky js -->
		<script src="{{asset('assets/js/sticky.js')}}"></script>

		<!-- Sidebar js -->
		<script src="{{asset('assets/plugins/side-menu/sidemenu.js')}}"></script>

		<!-- Right-sidebar js -->
		<script src="{{asset('assets/plugins/sidebar/sidebar-rtl.js')}}"></script>
		<script src="{{asset('assets/plugins/sidebar/sidebar-custom.js')}}"></script>

		<!-- eva-icons js -->
		<script src="{{asset('assets/plugins/eva-icons/eva-icons.min.js')}}"></script>

<script src="{{asset('assets/plugins/toastr/toastr.min.js') }}"></script>

<script>
    var isRtl =true;

    Lang.setLocale('ar');


    @if(Session::has('message'))
    setTimeout(function () {
        toastr['success'](
            '{{ session('message') }}',
            {
                closeButton: true,
                tapToDismiss: false,
                rtl: isRtl
            }
        );
    }, 500);

    @endif
    @if(Session::has('error'))
    setTimeout(function () {
        toastr['error'](
            '{{ session('error') }}',
            {
                closeButton: true,
                tapToDismiss: false,
                rtl: isRtl
            }
        );
    }, 500);
    @endif


</script>
		@yield('scripts')

		<!-- custom js -->
		<script src="{{asset('assets/js/custom.js')}}"></script>
		<script src="{{asset('assets/js/translate.js')}}"></script>
		<script src="{{asset('assets/js/select2.js')}}"></script>

<script type="module">
    // Import the functions you need from the SDKs you need
    import {initializeApp} from "https://www.gstatic.com/firebasejs/9.6.1/firebase-app.js";
    import {getAnalytics} from "https://www.gstatic.com/firebasejs/9.6.1/firebase-analytics.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries
    import {onMessage, getMessaging, getToken} from "https://www.gstatic.com/firebasejs/9.6.1/firebase-messaging.js";

    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
        apiKey: "",
        authDomain: "",
        projectId: "",
        storageBucket: "",
        messagingSenderId: "",
        appId: "",
        measurementId: ""
    };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const analytics = getAnalytics(app);


    const messaging = getMessaging(app);

    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });


    getToken(messaging, {vapidKey: ''}).then((currentToken) => {
        if (currentToken) {
            // Send the token to your server and update the UI if necessary
            // ...
            $('#not').val(currentToken);
        } else {
            // Show permission request UI
            console.log('No registration token available. Request permission to generate one.');
            // ...
        }
    }).catch((err) => {
        console.log('An error occurred while retrieving token. ', err);
        // ...
    });
    onMessage(messaging, (payload) => {
        // ...
        setTimeout(function () {
            toastr['success'](
                '<span>' + payload.notification.title + '</span> ' +
                '<br>' +
                '<span>' + payload.notification.body + '</span>',
                {
                    closeButton: true,
                    tapToDismiss: false,
                    rtl: isRtl
                }
            );
        }, 500);


        getUnReadNumber();


    });

    getUnReadNumber();


    function getUnReadNumber() {
        $.ajax({
            type: 'GET',

            url: '/admin/unread-notification-num',

            success: function (response) {

                if (response.status === 200) {
                    var num = response.content.unRead;
                    if (num > 0) {
                        $('#num_out').show()
                        $('#inner_num_out').show()
                        $('#num').get(0).innerHTML = num;
                        $('#inner_num').get(0).innerHTML = num;
                    } else {
                        $('#num_out').hide()
                        $('#inner_num_out').hide()
                    }
                }
            }
        });
    }

    $('#not_btn').on('click', function (e) {


        $.ajax({
            type: 'GET',

            url: '/admin/show-notification-brief',


            success: function (response) {
                if (response.status === 200) {
                    var nots = response.content;
                    var assetPath = $('body').attr('data-asset-path');

                    $.each(nots, function (k, not) {

                        var color = 'primary';
                        $('#nots_list').append(
                            '<a class="d-flex" href="{{ route('home') }}">' +
                            '<div class="list-item d-flex align-items-start">' +
                            '<div class="me-1">' +
                            '<div class="avatar">' +
                            '<img src="' + assetPath + not + not.moduleImage + '" width="32" height="32">' +
                            '</div>' +
                            '</div>' +
                            '<div class="list-item-body flex-grow-1">' +
                            '<p class="media-heading"><span class="fw-bolder">' + not.title + '</span>' +
                            '<span class="badge rounded-pill badge-light-' + (not.notStatusCode ? 'secondary' : 'primary') + '">' + not.notStatus + '</span></p>' +
                            '<small class="notification-text">' + not.message + '</small>' +
                            '</div>' +
                            '</div>' +
                            '</a>');
                    });
                    $('#num_out').hide()
                    $('#inner_num_out').hide()
                } else {
                    alert(response.message);
                }


            },
            error: function (jqXHR) {
                alert(jQuery.parseJSON(jqXHR.responseText).message);

            }
        });


    });

    $(window).on("blur focus", function (e) {
        var user = $('#user_value').val();

        if (user) {
            $.ajax({
                type: 'GET',

                url: '/admin/unread-notification-num',

                success: function (response) {

                    var num = response.content.unRead;
                    if (num > 0) {
                        $('#num_out').show()
                        $('#inner_num_out').show()
                        $('#num').get(0).innerHTML = num;
                        $('#inner_num').get(0).innerHTML = num;
                    } else {
                        $('#num_out').hide()
                        $('#inner_num_out').hide()
                    }


                }
            });
        }

    });

</script>
