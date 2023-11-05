<script>
    $(document).ready(function() {
        $('.sweet_daleteBtn__err').on('click', function(e) {
            var formid = $(this).attr('id');
            //alert(formid);
            Swal.fire({
                icon: 'error',
                title: '{!! __('admin/alertMass.sweet_err_title') !!}',
                text: '{!! __('admin/alertMass.sweet_err_text') !!}',
                confirmButtonText: '{!! __('admin/alertMass.sweet_err_button') !!}',
            })
        });
    })
</script>
