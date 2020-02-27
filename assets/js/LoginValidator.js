$(function () {
    $.validator.addMethod('email',function (value,element) {
        return this.optional(element)
            ||value.length>=6;
    },'invalid email');
    $.validator.addMethod('passwordLength',function (value,element) {
       return this.optional(element)
        ||value.length>=8;
    },'your password is less than the required');
    $.validator.addMethod('numberLength',function (value,element) {
       return this.optional(element)
        ||value.length>=10;
    },'your password is less than the required');

    $("#LoginForm").validate({
        rules:{
            email:{
                required:true,
                email:true,
            },
            password:{
                passwordLength:true,
                required:true,
            },
            number:{
                required:true,
                numberLength:true,
            }
                },
        messages:{
            email:{
                required:'email is required'
            },
            password: {
                required: 'password is required',
                },
            number: {
                required: 'number can\'t be empty',
                }
        }
    });
    $("#resetPasswordForm").validate({
        rules:{
            newpassword:"required",
            confirmpassword:{
                required:true,
                equalTo:"#newpassword"
            }
        },
        messages:{
            newpassword:{
                required:"password is required",
            },
            confirmpassword:{
                required:"password is required",
                equalTo: "Password not matches please correct! "
            }
        }
    })
});