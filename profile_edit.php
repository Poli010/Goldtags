<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
<div class="container-fluid">
        <header>
            <img src="logo1.png" alt="">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                        <a class="nav-link"><i class="fas fa-bell"></i></a>
                            <a class="nav-link" href="goldtags_apparel.php">Home</a>
                            <a class="nav-link" href="#">Pricing</a>
                            <a class="nav-link" href="#">About</a>
                            <a class="nav-link active" aria-current="page" href="#">Profile</a>
                        </div>
                    </div>
                </div>
            </nav>
            <hr>
        </header>
</div>

<h4>Edit your Profile</h4>
<form id="updateForm">
<input type="text" id="firstName" placeholder="First Name">
<input type="text" id="lastName" placeholder="Last Name">
<input type="number" id="phoneNumber" placeholder="Phone Number" min="0" max="99999999999" pattern="[0-9]{11}">
<input type="text" id="streetNum" placeholder="Street Number">
<input type="text" id="streetName" placeholder="Street Name">
<input type="text" id="block" placeholder="Block">
<input type="text" id="lot" placeholder="Lot">
<input type="text" id="baranggay" placeholder="Baranggay">
<input type="text" id="city" placeholder="City">
<button type="change" id="complete">Complete</button>
</form>

<script type="module">
import { initializeApp } from "https://www.gstatic.com/firebasejs/10.6.0/firebase-app.js";
        import { getDatabase, ref, set, get, child, update, remove } from "https://www.gstatic.com/firebasejs/10.6.0/firebase-database.js";
        import  {getAuth, onAuthStateChanged} from "https://www.gstatic.com/firebasejs/10.6.0/firebase-auth.js";
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
        const auth = getAuth(app);
        const usersRef = ref(db, 'Users'); 
        
        const userID = localStorage.getItem('userId');

       

        document.getElementById('updateForm').addEventListener('submit', (e) => {
            e.preventDefault();

            const firstName = document.getElementById('firstName').value;
            const lastName = document.getElementById('lastName').value;
            const phoneNumber = document.getElementById('phoneNumber').value; // Updated ID here
            const streetNum = document.getElementById('streetNum').value;
            const streetName = document.getElementById('streetName').value;
            const block = document.getElementById('block').value;
            const lot = document.getElementById('lot').value;
            const baranggay = document.getElementById('baranggay').value;
            const city = document.getElementById('city').value;

            const userData = {
                firstName: firstName,
                lastName: lastName,
                phoneNumber: phoneNumber,
                streetNum: streetNum,
                streetName: streetName,
                block: block,
                lot: lot,
                baranggay: baranggay,
                city: city
            };

            update(ref(db, `Users/${userID}`), userData)
                .then(() => {
                    alert('Profile updated successfully!');
                    window.location.href = "profile.php";
                })
                .catch((error) => {
                    alert('Error updating profile: ' + error.message);
                });
        });
    

</script>
</body>
</html>