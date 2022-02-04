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
