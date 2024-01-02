<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goldtag</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <section>
        <div class="bar">
            <h1>Sign Up</h1>
            <form id="signupForm">
                <input type="text" id="firstName" placeholder="First Name">
                <input type="text" id="lastName" placeholder="Last Name">
                <input type="text" id="userName" placeholder="Username">
                <input type="email" id="email" placeholder="Email">
                <input type="password" id="password" placeholder="Password" required minlength="8">
                <p1>Already have an account? <a href="Login.html">Login</a></p1>
                <button type="submit" id="signup">Sign Up</button>
            </form>
        </div>
        <p></p>
    </section>
    <script type="module">
        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.6.0/firebase-app.js";
       
        import { getAuth, createUserWithEmailAndPassword} from "https://www.gstatic.com/firebasejs/10.6.0/firebase-auth.js";
        import { getDatabase, ref, set } from "https://www.gstatic.com/firebasejs/10.6.0/firebase-database.js";
        
        const firebaseConfig = {
            apiKey: "AIzaSyCKFLDnY6nvXO9YHXZ56k6jE4q4esbyKNw",
            authDomain: "goldtags-afbf1.firebaseapp.com",
            databaseURL: "https://goldtags-afbf1-default-rtdb.asia-southeast1.firebasedatabase.app",
            projectId: "goldtags-afbf1",
            storageBucket: "goldtags-afbf1.appspot.com",
            messagingSenderId: "476543580017",
            appId: "1:476543580017:web:b7a8c4afe121d3155b28d0"
            };

            // Initialize Firebase
            const app = initializeApp(firebaseConfig);
            const auth = getAuth(app);
            const db = getDatabase(app);
            

            document.addEventListener('DOMContentLoaded', function() {
            const signupForm = document.getElementById('signupForm');

            signupForm.addEventListener('submit', (e) => {
            e.preventDefault();

            const firstName = document.getElementById('firstName').value;
            const lastName = document.getElementById('lastName').value;
            const userName = document.getElementById('userName').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            
            createUserWithEmailAndPassword(auth, email, password)
            .then((userCredential) => {
                        // Get the newly created user
                        const user = userCredential.user;

                        const userData = {
                            userID: user,
                            firstName: firstName,
                            lastName: lastName,
                            userName: userName,
                            email: email,
                            password: password,

                        }

                        // Store user details in the Realtime Database
                        set(ref(db, 'Users/' + user.uid), {
                            firstName: firstName,
                            lastName: lastName,
                            userName: userName,
                            email: email,
                            password: password,
                        }).then(() => {
                            // Display success message via alert
                            alert('Account created successfully!');
                            // Redirect to login page
                            window.location.href = 'Login.html';
                        }).catch(error => {
                            alert("Error storing user details: " + error.message);
                        });
                    })
                    .catch((error) => {
                        console.error(error.message);
                      
                        alert('Account creation failed. Please try again.');
                    });
            });
        });
      </script>
     <script>
                        //Sentence Case Js//
             document.addEventListener('DOMContentLoaded', function() {
            const firstNameInput = document.getElementById('firstName');
            const lastNameInput = document.getElementById('lastName');
            const capitalize = (str) => {
                return str.replace(/\b\w/g, (match) => match.toUpperCase());
            };
          
            firstNameInput.addEventListener('input', function() {
                this.value = capitalize(this.value);
            });
       
            lastNameInput.addEventListener('input', function() {
                this.value = capitalize(this.value);
            });

          
        });
     </script>
</body>
</html>