<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="usersAccount.css">
    <title>Admin Users</title>
</head>
<body>
    
            <nav> 
                <li><a href="adminpage.php">Product list </a></li>
                <li><a href="usersAccount.php">Account list</a></li>
                <li><a href="adminproductadd.php">Add Product</a></li>
            </nav>
        </nav>
    <table class="adminTable"> <!-- Add the adminTable class here -->
        <thead>
            <th>User ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Password</th>
        </thead>

        <tbody id="userList">
           
        </tbody>
    </table>

        <script type="module">
            // Import the functions you need from the SDKs you need
            import { initializeApp } from "https://www.gstatic.com/firebasejs/10.6.0/firebase-app.js";
            import { getDatabase, ref, get, onValue } from "https://www.gstatic.com/firebasejs/10.6.0/firebase-database.js";
            const firebaseConfig = {
                apiKey: "AIzaSyCKFLDnY6nvXO9YHXZ56k6jE4q4esbyKNw",
                authDomain: "goldtags-afbf1.firebaseapp.com",
                databaseURL: "https://goldtags-afbf1-default-rtdb.asia-southeast1.firebasedatabase.app",
                projectId: "goldtags-afbf1",
                storageBucket: "goldtags-afbf1.appspot.com",
                messagingSenderId: "476543580017",
                appId: "1:476543580017:web:b7a8c4afe121d3155b28d0"
                };
    
                const app = initializeApp(firebaseConfig);
        const db = getDatabase(app);
        const usersRef = ref(db, 'Users');
        const userList = document.getElementById('userList');

        function hidePassword(password) {
            return '*'.repeat(password.length); // Replace password with asterisks
        }

        onValue(usersRef, (snapshot) => {
            userList.innerHTML = '';

            if (snapshot.exists()) {
                snapshot.forEach((childSnapshot) => {
                    const userData = childSnapshot.val();

                    const newRow = userList.insertRow();
                    const cell1 = newRow.insertCell(0);
                    const cell2 = newRow.insertCell(1);
                    const cell3 = newRow.insertCell(2);
                    const cell4 = newRow.insertCell(3);
                    const cell5 = newRow.insertCell(4);
                    const cell6 = newRow.insertCell(5);

                    cell1.textContent = childSnapshot.key; 
                    cell2.textContent = userData.firstName;
                    cell3.textContent = userData.lastName;
                    cell4.textContent = userData.userName;
                    cell5.textContent = userData.email;
                    cell6.textContent = hidePassword(userData.password);
                });
            } else {
                userList.innerHTML = '<tr><td colspan="6">No users signed in yet</td></tr>';
            }
        });
    
    </script>
</body>
</html>