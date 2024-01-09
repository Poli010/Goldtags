const searchIcon = document.getElementById('searchIcon');
const searchContainer = document.getElementById('searchContainer');
const searchInput = document.getElementById('searchInput');

searchIcon.addEventListener('click', function() {
    toggleDisplay(searchContainer);
    searchInput.focus();
});

function toggleDisplay(element) {
    if (element.style.display === 'none' || element.style.display === '') {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}

function hideElement(element) {
    element.style.display = 'none';
}

searchInput.addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase();
    const products = document.querySelectorAll('.col-md-3');

    products.forEach(product => {
        const productName = product.querySelector('.card-title').textContent.toLowerCase();
        const productDescription = product.querySelector('.type').textContent.toLowerCase();

        if (productName.includes(searchTerm) || productDescription.includes(searchTerm)) {
            product.style.display = 'block';
        } else {
            product.style.display = 'none'; 
        }
    });
});





