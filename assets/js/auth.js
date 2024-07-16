$(document).ready(function() {
  $("#login-btn").on('click', function() {
    var email = $("#login-officer-email").val();
    var password = $("#login-officer-password").val();

    if (email == "" || password == "") {
      alert('Please check your inputs');
    } else {
      $.ajax({
          url: './server/auth.php',
          method: 'POST',
          data: {
              login: 1,
              email: email,
              password: password
          },
          success: function(response) {
              if (response == 'success') {
                  window.location.href = '/election-list.php';
              }else {
                  alert(response)
              }
          },
          dataType: 'text'
      })
  }

  })
  $("#signup-voter").on('click', function() {})
  $("#signup-officer-btn").on('click', function() {})

})