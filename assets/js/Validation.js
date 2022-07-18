//Авторизация
$('.login-btn').click(function(e){
    e.preventDefault();
    
    let login = $('input[name="email"]').val(),
    password = $('input[name="password"]').val()
 
    $.ajax({
        url:'/auth/login',
        type:'POST',
        datatype: 'json',
        data:{
            email: login,
            password: password
        },
        success: function (response){
            
            const data = JSON.parse(response);
            if(data.status){
                document.location.href = "/profile";
            }else{
              if(data.type === 1){

              }
                        $('.texts').removeClass('none').text(data['message']);
                        
                
            }

        }
    });

});
//Регистрация 

let avatar = false;

$('input[name="file"]').change(function (e){

    avatar = e.target.files[0];
});

$('.register-btn').click(function(e){
    e.preventDefault();
    
    let email = $('input[name="emails"]').val(),
    password = $('input[name="passwords"]').val(),
    confirm = $('input[name="confirms"]').val(),
    name = $('input[name="name"]').val(),
    lastname = $('input[name="lastname"]').val(),
    phone = $('input[name="phone"]').val(),
    birth = $('input[name="birth"]').val()
    // file = $('input[name="file"]').val()
    
    let formData = new FormData();

    formData.append('email',email);
    formData.append('password',password);
    formData.append('confirm',confirm);
    formData.append('name',name);
    formData.append('lastname',lastname);
    formData.append('phone',phone);
    formData.append('birth',birth);
    formData.append('file',avatar);
    console.log(formData);
    $.ajax({
        url:'/auth/register',
        type:'POST',
        datatype: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success: function (response){
            console.log(response);
            
            let data = JSON.parse(response);
            console.log(data);
            if(data.status == 1){
                document.location.href = "/profile";
            }else{
              

                  $('.texts').removeClass('none').text(data['message']);
              
                        
                
            }

        }
    });

});