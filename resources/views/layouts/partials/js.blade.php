<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- untuk checkbox anonym -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
<script src="{{ asset('templateAdmin/assets/vendors/core/core.js') }}"></script>
<script src="{{ asset('templateAdmin/assets/js/flatpickr.js') }}"></script>
<script src="{{ asset('templateAdmin/assets/vendors/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('templateAdmin/assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('templateAdmin/assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
<script src="{{ asset('templateAdmin/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('templateAdmin/assets/vendors/moment/moment.min.js') }}"></script>
<script src="{{ asset('templateAdmin/assets/vendors/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('templateAdmin/assets/vendors/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('templateAdmin/assets/js/template.js') }}"></script>
<script src="{{ asset('templateAdmin/assets/js/dashboard-light.js') }}"></script>
<script src="{{ asset('templateAdmin/assets/js/data-table.js') }}"></script>
<script src="{{ asset('templateAdmin/assets/js/sweet-alert.js') }}"></script>
<script src="{{ asset('templateAdmin/assets/vendors/prismjs/prism.js') }}"></script>
<script src="{{ asset('templateAdmin/assets/vendors/clipboard/clipboard.min.js') }}"></script>
<script src="{{ asset('templateAdmin/assets/vendors/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
<script src="{{ asset('templateAdmin/assets/vendors/inputmask/jquery.inputmask.min.js') }}"></script>
<script src="{{ asset('templateAdmin/assets/vendors/select2/select2.min.js') }}"></script>
<script src="{{ asset('templateAdmin/assets/vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
<script src="{{ asset('templateAdmin/assets/vendors/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
<script src="{{ asset('templateAdmin/assets/vendors/dropzone/dropzone.min.js') }}"></script>
<script src="{{ asset('templateAdmin/assets/vendors/dropify/dist/dropify.min.js') }}"></script>
<script src="{{ asset('templateAdmin/assets/vendors/moment/moment.min.js') }}"></script>
<script src="{{ asset('templateAdmin/assets/js/bootstrap-maxlength.js') }}"></script>
<script src="{{ asset('templateAdmin/assets/js/inputmask.js') }}"></script>
<script src="{{ asset('templateAdmin/assets/js/select2.js') }}"></script>
<script src="{{ asset('templateAdmin/assets/js/typeahead.js') }}"></script>
<script src="{{ asset('templateAdmin/assets/js/tags-input.js') }}"></script>
<script src="{{ asset('templateAdmin/assets/js/dropzone.js') }}"></script>
<script src="{{ asset('templateAdmin/assets/js/dropify.js') }}"></script>
<script src="{{ asset('templateAdmin/assets/vendors/feather-icons/feather.min.js') }}"></script>

<script>
    $(document).ready(function () {
        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;
        var current = 1;
        var steps = $("fieldset").length;

        setProgressBar(current);

        $(".next").click(function () {
            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //Add Class Active
            $("#progressbar li")
                .eq($("fieldset").index(next_fs))
                .addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate(
                { opacity: 0 },
                {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            display: "none",
                            position: "relative",
                        });
                        next_fs.css({ opacity: opacity });
                    },
                    duration: 500,
                }
            );
            setProgressBar(++current);
        });

        $(".previous").click(function () {
            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //Remove class active
            $("#progressbar li")
                .eq($("fieldset").index(current_fs))
                .removeClass("active");

            //show the previous fieldset
            previous_fs.show();

            //hide the current fieldset with style
            current_fs.animate(
                { opacity: 0 },
                {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            display: "none",
                            position: "relative",
                        });
                        previous_fs.css({ opacity: opacity });
                    },
                    duration: 500,
                }
            );
            setProgressBar(--current);
        });

        function setProgressBar(curStep) {
            var percent = parseFloat(100 / steps) * curStep;
            percent = percent.toFixed();
            $(".progress-bar").css("width", percent + "%");
        }

        $(".submit").click(function () {
            return false;
        });
    });
</script>
