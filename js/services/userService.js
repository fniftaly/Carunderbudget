
'use strict';

carmodule.service('userService', function ($http) {

    return{
        adduser: function (user) {

            var $promise = $http.post('src/synchfiles/adduser.php', user);

            $promise.then(function (msg) {

                if (msg.data !== 'error') {

                    console.log(msg.data);
                } else {

                    console.log('error login');
                }
            });
        },
        email_validaiton: function (user) {

            var emval = ''

            var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;

            if (!re.test(user.email))
            {
                emval = 'Please enter a valid email address.';
                user.email = '';
            } else {

                emval = '';
            }
            return emval;
        },
        user_validation: function (user) {

            var $promise = $http.post('src/phpfiles/login.php', user);

            $promise.then(function (msg) {

                if (msg.data !== 'error') {

                    console.log(msg.data);
                    
                    if (localStorage.getItem("user") !== null &&
                            user.username !== '' && user.password !== '') {
                        localStorage.setItem("user", "validuser");
                    user.username = '';
                    user.password = '';
                    user.udisplay = "none";
                    user.odisplay = "inline";
                    user.update = "inline";
                    user.upload = "inline";
                    user_is_active = true;
                    }
                    else{localStorage.setItem("user", "null");}
                    console.log("USRV: " + localStorage.getItem("user"));
                } else {

                    console.log('error login');
                }
            });
        },
        user_stylereset: function (user) {
            
                    if(typeof user === 'undefined'){
                       $('.logout').css('display','none');
                       $('.login').css('display', 'inline');
                       $('.dspl').css('display', 'none');
                       localStorage.setItem("user", "null");
                    }
                   else{
                    localStorage.setItem("user", "null");
                    user.username = '';
                    user.password = '';
                    user.udisplay = "inline";
                    user.odisplay = "none";
                    user.update = "none";
                    user.upload = "none";
                }
                    console.log("STSET: " + localStorage.getItem("user"));
        }
    };
});

