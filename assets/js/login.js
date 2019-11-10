$(document).ready(function(){
    $('#signup').on('click', function(){
        $("#signup").attr("disabled", "disabled");
        var name = $("#name").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var repassword = $("#repassword").val();

        if(name != ""){
            $.ajax({
                url: "../../require/save.php",
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
                        $('#register_form').find('input:text').val('');

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
    
    $('#login').on('click', function(){
        $("#login").attr("disabled", "disabled");
        var email = $("#email").val();
        var password = $("#password").val();

        if(email != ""){
            $.ajax({
                url: "../../require/save.php",
                type: "POST",
                data: {
                    type: 2,
                    email: email,
                    password: password,
                },
                cache: false,
                success: function(dataResult){
                    var dataResult = JSON.parse(dataResult);
                    if(dataResult.statusCode==200){
                        location.href = "../../index.php";
                    }
                    else if(dataResult.statusCode==201){
                    	$("#login").removeAttr("disabled");

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