var email = document.getElementById('email');
        var password = document.getElementById('password');
        
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault();
            if (validated()) {
                this.submit();
            }
        });
        
        email.addEventListener('input', email_Verify);
        password.addEventListener('input', pass_Verify);
        
        function validated() {
            var email_error = document.getElementById('email_error');
            var pass_error = document.getElementById('pass_error');
            
            if (email.value.length < 1 || !isValidEmail(email.value)) {
                email.style.border = "1px solid red";
                email_error.style.display = "block";
                email.focus();
                return false;
            } else {
                email.style.border = "1px solid silver";
                email_error.style.display = "none";
            }
        
            if (password.value.length < 1) {
                password.style.border = "1px solid red";
                pass_error.style.display = "block";
                password.focus();
                return false;
            } else {
                password.style.border = "1px solid silver";
                pass_error.style.display = "none";
            }
            
            return true;
        }
        
        function email_Verify() {
            if (isValidEmail(email.value) || email.value.length === 0) {
                email.style.border = "1px solid silver";
                document.getElementById('email_error').style.display = "none";
                return true;
            }
        }
        
        function pass_Verify() {
            if (password.value.length >= 1 || password.value.length === 0) {
                password.style.border = "1px solid silver";
                document.getElementById('pass_error').style.display = "none";
                return true;
            }
        }
        
        function isValidEmail(email) {
            var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            return emailPattern.test(email);
        }