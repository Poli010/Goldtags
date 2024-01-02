<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goldtag</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>

    <section id="header">
        <a href="#"><img src="/" class="logo" alt=""> </a>
            <div>
                <ul id="nav">
                    <li><a href="index.html"></a></li>
                    <li><a href="about.html"></a></li>
                    <li><a class="active" href="Login.html"></a></li>
                </ul>
            </div>
    </section>

    <section class="form">
        <form id="loginForm">
            <h1>Login as Admin</h1>
            <div class="input-box">
            <input type="text" id="adminuser" placeholder="Username">
            <input type="password" id="adminpass" placeholder="Password">
            </div>
                <button type="submit">Login</button>
        </form>    
    </section>

    <script type="module">
        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.6.0/firebase-app.js";
        import { getDatabase, ref, set, remove, get } from "https://www.gstatic.com/firebasejs/10.6.0/firebase-database.js";
        
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
            const db = getDatabase(app);

            const loginForm = document.getElementById('loginForm');
        loginForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const username = document.getElementById('adminuser').value;
            const password = document.getElementById('adminpass').value;

            const productsRef = ref(db, 'admin');

            try {
                const snapshot = await get(productsRef);
                if (snapshot.exists()) {
                    const admin = snapshot.val();
                    const adminUser = admin[username];

                    if (adminUser && adminUser.password === password) {
                        alert("Welcome, Admin!")
                        window.location.href = 'adminpage.php';
                    } else {
                        alert('Invalid credentials. Please try again.');
                    }
                } else {
                    alert('No admins found in the database.');
                }
            } catch (error) {
                console.error('Error fetching data:', error);
            }
        });
    </script>
</body>
</html>