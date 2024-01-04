
// Wait for the DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function () {
    // Initialize the carousel
    var myCarousel = new bootstrap.Carousel(document.getElementById('carouselExampleFade'), {
        interval: 5000, // Set the interval to 5000 milliseconds (5 seconds)
        pause: 'hover' // Pause on hover, you can change this option as needed
    });

    // Optional: If you want to stop the auto-sliding when interacting with the carousel manually
    document.getElementById('carouselExampleFade').addEventListener('click', function () {
        myCarousel.pause();
    });
});




const bellIcon = document.getElementById('bellIcon');
const searchIcon = document.getElementById('searchIcon');
const notificationPopup = document.getElementById('notificationPopup');
const searchContainer = document.getElementById('searchContainer');
const searchInput = document.getElementById('searchInput');

bellIcon.addEventListener('click', function() {
toggleDisplay(notificationPopup);
hideElement(searchContainer);
});

searchIcon.addEventListener('click', function() {
toggleDisplay(searchContainer);
hideElement(notificationPopup);
// Focus on the search input when clicked
searchInput.focus();
});

// Function to toggle the display of an element
function toggleDisplay(element) {
if (element.style.display === 'none' || element.style.display === '') {
element.style.display = 'block';
} else {
element.style.display = 'none';
}
}

// Function to hide an element
function hideElement(element) {
element.style.display = 'none';
}

// Existing script to filter products based on search input
searchInput.addEventListener('input', function() {
const searchTerm = this.value.toLowerCase();
const products = document.querySelectorAll('#product');

products.forEach(product => {
const productName = product.querySelector('.card-title').textContent.toLowerCase();
const productDescription = product.querySelector('.card-text').textContent.toLowerCase();

if (productName.includes(searchTerm) || productDescription.includes(searchTerm)) {
product.style.display = 'block';
} else {
product.style.display = 'none'; 
}
});
});




