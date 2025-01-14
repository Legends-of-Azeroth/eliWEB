<!-- Mainly scripts -->
<script src="{{ URL::asset('admin/js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ URL::asset('admin/js/bootstrap.min.js') }}"></script>

<!-- Flot -->
<script src="{{ URL::asset('admin/js/plugins/flot/jquery.flot.js') }}"></script>
<script src="{{ URL::asset('admin/js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ URL::asset('admin/js/plugins/flot/jquery.flot.spline.js') }}"></script>
<script src="{{ URL::asset('admin/js/plugins/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ URL::asset('admin/js/plugins/flot/jquery.flot.pie.js') }}"></script>

<!-- Peity -->
<script src="{{ URL::asset('admin/js/plugins/peity/jquery.peity.min.js') }}"></script>
<script src="{{ URL::asset('admin/js/demo/peity-demo.js') }}"></script>

<!-- Custom and plugin javascript -->
<script src="{{ URL::asset('admin/js/inspinia.js') }}"></script>
<script src="{{ URL::asset('admin/js/plugins/pace/pace.min.js') }}"></script>
<script src="{{ URL::asset('admin/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

<!-- GITTER -->
<script src="{{ URL::asset('admin/js/plugins/gritter/jquery.gritter.min.js') }}"></script>

<!-- Sparkline -->
<script src="{{ URL::asset('admin/js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

<!-- Sparkline demo data -->
<script src="{{ URL::asset('admin/js/demo/sparkline-demo.js') }}"></script>

<!-- ChartJS-->
<script src="{{ URL::asset('admin/js/plugins/chartJs/Chart.min.js') }}"></script>

<!-- Toastr -->
<script src="{{ URL::asset('admin/js/plugins/toastr/toastr.min.js') }}"></script>

<!-- Chosen -->
<script src="{{ URL::asset('admin/js/plugins/chosen/chosen.jquery.js') }}"></script>

<!-- JSKnob -->
<script src="{{ URL::asset('admin/js/plugins/jsKnob/jquery.knob.js') }}"></script>

<!-- Data picker -->
<script src="{{ URL::asset('admin/js/plugins/datapicker/bootstrap-datepicker.js') }}"></script>

<!-- IonRangeSlider -->
<script src="{{ URL::asset('admin/js/plugins/ionRangeSlider/ion.rangeSlider.min.js') }}"></script>

<!-- iCheck -->
<script src="{{ URL::asset('admin/js/plugins/iCheck/icheck.min.js') }}"></script>

<!-- MENU -->
<script src="{{ URL::asset('admin/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>

<!-- Color picker -->
<script src="{{ URL::asset('admin/js/plugins/colorpicker/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ URL::asset('admin/js/plugins/clockpicker/clockpicker.js') }}"></script>

<!-- Image cropper -->
<script src="{{ URL::asset('admin/js/plugins/cropper/cropper.min.js') }}"></script>

<!-- Date range use moment.js same as full calendar plugin -->
<script src="{{ URL::asset('admin/js/plugins/fullcalendar/moment.min.js') }}"></script>

<!-- Date range picker -->
<script src="{{ URL::asset('admin/js/plugins/daterangepicker/daterangepicker.js') }}"></script>

<!-- Select2 -->
<script src="{{ URL::asset('admin/js/plugins/select2/select2.full.min.js') }}"></script>

<!-- TouchSpin -->
<script src="{{ URL::asset('admin/js/plugins/touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>

<!-- Tags Input -->
<script src="{{ URL::asset('admin/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>

<!-- Dual Listbox -->
<script src="{{ URL::asset('admin/js/plugins/dualListbox/jquery.bootstrap-duallistbox.js') }}"></script>

<!-- SUMMERNOTE -->
<script src="{{ URL::asset('admin/js/plugins/summernote/summernote.min.js') }}"></script>
<script src="{{ URL::asset('admin/js/plugins/summernote/lang/summernote-ru-RU.js') }}"></script>

<!-- Sweet alert -->
<script src="{{ URL::asset('admin/js/plugins/sweetalert/sweetalert.min.js') }}"></script>

<!-- Transliteration -->
<script src="{{ URL::asset('admin/js/plugins/transliter/translite.js') }}"></script>
<!-- Clipboard -->
<script src="{{ URL::asset('admin/js/plugins/clipboard/clipboard.min.js') }}"></script>

<!-- Input Mask -->
<script src="{{ URL::asset('admin/js/plugins/jasny/jasny-bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('admin/js/handlebars.min.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        new Clipboard('.btn');

        $('.delete').click(function () {
            var method = $(this);
            var element_id = method.attr('data-element-id');
            var method_post = method.attr('data-method-post');
            swal({
                    title: 'Are you sure you want to delete the data?',
                    text: 'Once deleted, the data cannot be recovered!',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#DD6B55',
                    confirmButtonText: 'Yes, delete!',
                    cancelButtonText: 'No, not delete!',
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function (isConfirm) {
                    if (isConfirm) {
                        var token = document.getElementById('token').value;
                        var xhr = new XMLHttpRequest();
                        xhr.open('POST', method_post, true);
                        xhr.timeout = 20000000;
                        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                        xhr.send('&element_id=' + encodeURIComponent(element_id) +
                            '&_token=' + encodeURIComponent(token)
                        );
                        xhr.onreadystatechange = function () {
                            if (xhr.readyState == 4) {
                                if (xhr.status == 200) {
                                    document.getElementById(element_id).remove();
                                    swal('Here we go!', 'Successfully deleted', 'success');
                                } else {
                                    swal('Oops', 'An error has occurred, the data has not been deleted', 'error');
                                }
                            }
                        };

                    } else {
                        swal('Cancel', 'The data will not be deleted', 'error');
                    }
                });
        });

        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });

        $('.dual_select').bootstrapDualListbox({
            selectorMinimalHeight: 160
        });

        $('.chosen-select').chosen({width: "100%"});
    });

</script>
<script type="text/javascript">
    jQuery(function ($) {
        $('#MinDescription').summernote({

            lang: 'ru-RU',
            height: 200,
            disableDragAndDrop: true

        });
    });

    jQuery(function ($) {
        $('#FullDescription').summernote({

            lang: 'ru-RU',
            height: 200,
            disableDragAndDrop: true

        });
    });
</script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="{{ URL::asset('admin/js/wow_custom_tooltip.js') }}"></script>
</body>
</html>