<script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/vendors.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>

<script>
    $(document).ready(function() {

        $('#contactForm').on('submit', function(e) {
            e.preventDefault();
            $('.error-message').html('');
            $('#submitButton').prop('disabled', true).text('Please wait...');
            var formData = $(this).serialize();
            console.log(formData);

            $('#responseMessage').html('');

            $.ajax({
                url: "{{ route('contactus.mail.send') }}",
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: formData,
                dataType: "json",
                success: function(response) {
                    console.log('AJAX Success Callback');



                    if (response.success === true) {
                        $('#responseMessage').html('<div class="alert alert-success">' +
                            response.message + '</div>');
                        $('#submitButton').prop('disabled', false).text('Submit');
                        $('#contactForm')[0].reset();
                    } else {
                        $('#responseMessage').html('<div class="alert alert-danger">' +
                            response.message + '</div>');
                        $('#submitButton').prop('disabled', false).text('Submit');
                    }

                },
                error: function(xhr) {


                    $('.error-message').html('');

                    if (xhr.status === 422 && xhr.responseJSON.errors) {
                        var errors = xhr.responseJSON.errors;

                        if (errors.name) {
                            $('#nameError').html('<div class="text-danger">' + errors
                                .name[0] + '</div>');
                            $('#submitButton').prop('disabled', false).text('Submit');
                        }
                        if (errors.email) {
                            $('#emailError').html('<div class="text-danger">' + errors
                                .email[0] + '</div>');
                            $('#submitButton').prop('disabled', false).text('Submit');
                        }
                        if (errors.message) {
                            $('#messageError').html('<div class="text-danger">' +
                                errors.message[0] + '</div>');
                            $('#submitButton').prop('disabled', false).text('Submit');
                        }
                    } else if (xhr.responseJSON && xhr.responseJSON.message) {
                        $('#responseMessage').html('<div class="alert alert-danger">' + xhr
                            .responseJSON.message + '</div>');
                        $('#submitButton').prop('disabled', false).text('Submit');
                    } else {
                        $('#responseMessage').html(
                            '<div class="alert alert-danger">An unexpected error occurred. Please try again later.</div>'
                        );
                    }
                }

            });
        });
    });
</script>

</body>

</html>
