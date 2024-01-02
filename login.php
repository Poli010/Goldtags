<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goldtag</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <section class="form">
        <form id="loginForm">
            <h1>LOGIN</h1>
           
                <div class="input-box">
                    <input type="email" id="email" placeholder="Email">
                    <input type="password" id="password" placeholder="Password">
                </div>
                <button type="submit">Login</button>

                <p1><a href="admin.php">Login as Administrator</a></p1>
                <p2>No account? <a href="signup.html">Signup</a></p2>
            
        </form>
    </section>
    <script type="module">
        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.6.0/firebase-app.js";
       
        import { getAuth, signInWithEmailAndPassword} from "https://www.gstatic.com/firebasejs/10.6.0/firebase-auth.js";
 
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

            document.addEventListener('DOMContentLoaded', function() {
            const loginForm = document.getElementById('loginForm');

            loginForm.addEventListener('submit', (e) => {
                e.preventDefault();

                const email = document.getElementById('email').value;
                const password = document.getElementById('password').value;

                signInWithEmailAndPassword(auth, email, password)
                    .then((userCredential) => {
                        const user = userCredential.user;
                        if (user && user.emailVerified) {
                            // Retrieve user ID and email
                            const userId = user.uid;
                            const userEmail = user.email;
                            console.log("User ID:", userId);
                            console.log("User Email:", userEmail);

                            localStorage.setItem('userId', userId);
                            localStorage.setItem('email', email);
                            console.log("user and email stored to database");
                            alert('Login successful!');
                            window.location.href = 'goldtags_apparel.php';
                        } else if (user) {
                            alert('Email is not verified. Please verify your email.');
                        } else {
                            alert('User not found. Please check your email and password.');
                        }
                    })
                    .catch((error) => {
                        console.error(error.message);
                        alert('Login failed. Please check your email and password.');
                    });
            });
        });
      </script>
</body> 
</html>