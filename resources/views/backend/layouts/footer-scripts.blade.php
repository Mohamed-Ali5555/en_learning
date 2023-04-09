<!-- jquery -->
<script src="{{ URL::asset('backend/assets/Admin/js/jquery-3.3.1.min.js') }}"></script>
<!-- plugins-jquery -->
<script src="{{ URL::asset('backend/assets/Admin/js/plugins-jquery.js') }}"></script>
<!-- plugin_path -->
<script>
    var plugin_path = 'js/';

</script>

<!-- chart -->
<script src="{{ URL::asset('backend/assets/Admin/js/chart-init.js') }}"></script>
<!-- calendar -->
<script src="{{ URL::asset('backend/assets/Admin/js/calendar.init.js') }}"></script>
<!-- charts sparkline -->
<script src="{{ URL::asset('backend/assets/Admin/js/sparkline.init.js') }}"></script>
<!-- charts morris -->
<script src="{{ URL::asset('backend/assets/Admin/js/morris.init.js') }}"></script>
<!-- datepicker -->
<script src="{{ URL::asset('backend/assets/Admin/js/datepicker.js') }}"></script>
<!-- sweetalert2 -->
<script src="{{ URL::asset('backend/assets/Admin/js/sweetalert2.js') }}"></script>
<!-- toastr -->
@yield('js')
<script src="{{ URL::asset('backend/assets/Admin/js/toastr.js') }}"></script>
<!-- validation -->
<script src="{{ URL::asset('backend/assets/Admin/js/validation.js') }}"></script>
<!-- lobilist -->
<script src="{{ URL::asset('backend/assets/Admin/js/lobilist.js') }}"></script>
<!-- custom -->
<script src="{{ URL::asset('backend/assets/Admin/js/custom.js') }}"></script>

<script src="{{ URL::asset('backend/assets/Admin/plugins/ckeditor/ckeditor.js') }}"></script>

<script src="{{ asset('dashboard_files/plugins/ckeditor/ckeditor.js') }}"></script>
{{-- //buton toggle  --}}
<script src="{{asset('backend/assets/switch-button-bootstrap/src/bootstrap-switch-button.js')}}"></script>



<script>
setTimeout(function(){
  $('#alert').slideUp();
},4000);

</script>
@yield('scripts')