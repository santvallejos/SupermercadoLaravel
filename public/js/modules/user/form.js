
function validateForm() {
    let flag = true;

    if ($('#name').val() == "")
        flag = chekedInputOrFields("name");

    if ($('#username').val() == "")
        flag = chekedInputOrFields("username");


   if ($('#nombre').val() == "")
        flag = chekedInputOrFields("nombre"); 

    if ($('#apellido').val() == "")
        flag = chekedInputOrFields("apellido");

    const email =$('#email').val();

    if (email == ""){
        flag = chekedInputOrFields("email");
    }else{
        flag = validateEmail(email);
    }

    if ($('#password').val() == "")
        flag = chekedInputOrFields("password");

    if ($('#role').val() == null)
        flag = chekedInputOrFields("role");

    if ($('#fechadenacimiento').val() == "")
        flag = chekedInputOrFields("fechadenacimiento");


    return flag;
}











function chekedInputOrFields(classOrIdJquery) {
    $(`#${classOrIdJquery}`).attr('required', true);
/*     $('#'+classOrIdJquery).attr('required',true); */
    $(`.${classOrIdJquery}`).css('color', 'red');


    /*     $(`.${classOrIdJquery}`).css('display', 'inline');
    $(`.${classOrIdJquery}`).text('Error in '+classOrIdJquery); */
    return false;
}


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
