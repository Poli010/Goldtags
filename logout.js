document.addEventListener('DOMContentLoaded', function () {
    // Get the logout button by its ID
    const logoutBtn = document.getElementById('logoutBtn');

    // Add a click event listener to the logout button
    logoutBtn.addEventListener('click', function () {
        // Redirect to the logout page
        window.location.href = 'login.php'; // Replace 'logout.php' with the actual URL of your logout page
    });
});