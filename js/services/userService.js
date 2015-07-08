
'use strict';

carmodule.service('userService', function ($http) {

    return{
        
        adduser: function (user) {

            var $promise = $http.post('src/phpfiles/userservice.php', user);

            $promise.then(function (msg) {

                if (msg.data !== 'error') {

                    console.log(msg.data);
                } else {

                    console.log('error login');
                }
            });
        },
       validate: function (user) {

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
            }
    };
});

