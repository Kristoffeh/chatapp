$(document).ready(function(){
    $('#signup').on('click', function(){
        $("#signup").attr("disabled", "disabled");
        var name = $("#name").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var repassword = $("#repassword").val();

        if(name != ""){
            $.ajax({
                url: "../../save.php",
                type: "POST",
                data: {
                    type: 1,
                    name: name,
                    email: email,
                    password: password,
                    repassword: repassword
                },
                cache: false,
                success: function(dataResult){
                    var dataResult = JSON.parse(dataResult);
                    if(dataResult.statusCode==200){
                        $('#login_form').find('input:text').val('');

                        $("#errormsg").hide();
                        $("#successmsg").show();
                        $('#successmsg').html('Registration successful.');
                    }
                    else if(dataResult.statusCode==201){
                    	$("#signup").removeAttr("disabled");

                        $("#successmsg").hide();
                        $("#errormsg").show();
                        $('#errormsg').html('An error occured. Try again.');
                    }
                }
            });
        }
        else{
            alert('Please fill all the fields!');
        }
    });
});