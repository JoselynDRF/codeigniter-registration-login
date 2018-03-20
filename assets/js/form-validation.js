$(document).ready(function () {
  $("#loginForm").validate({
    rules: {
      username: {
        required: true
      },
      password: {
        required: true
      }
    },
    submitHandler: function(form) {
      form.submit();
    },
    errorPlacement: function(error, element) {
      return true;
      // element.addClass('is-invalid');
    }
  });
});