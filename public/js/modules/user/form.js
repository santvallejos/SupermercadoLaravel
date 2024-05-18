function validateEmail(email) {
    var mailformat = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,6}$/;
    if (email.match(mailformat)) {
        return true;
    }else{
        return chekedInputOrFields("email");
    }
}

function searchUsername(email) {
    $.ajax({
        type: "POST",
        dataType: "json",
        url: '/user/search',
        data: {
            'email': email,
            '_token': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            if (data.status === 200) {
                alert('Valid User');
            } else {
                alert('Username already exists');
                $('#email').val('');
            }
        }
    });
}