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
    
    $('#msg').keydown(function (e){
        if (e.keyCode == 13 || e.which == 13){
            e.preventDefault();
            submitChat();
            $('#lblcount').html('0 / 1500');
        }
    })
    
    function submitChat(){
        var msg = $("#msg").val();
        var user = $("#user").val();

        if(msg != ""){
            $.ajax({
                url: "../../require/save.php",
                type: "POST",
                data: {
                    type: 5,
                    msg: msg,
                    user: user
                },
                cache: false,
                success: function(dataResult){
                    var dataResult = JSON.parse(dataResult);
                    if(dataResult.statusCode==200){
                        $('#messageform').find('input:text').val('');
                        $('#msg').val('');
                        
                        var object = $("#scrolldiv");
                        var he = object.get(0).scrollHeight;
                        object.animate({scrollTop: he});
                    }
                    else if(dataResult.statusCode==201){
                    }
                }
            });
        }
        else{
            alert('Please fill all the fields!');
        }
    }
    
});