//FUNCTION FOR CANNOT TYPE "-"
function validateQuantity(input) {
    if (input.value < 0) {
        input.value = 0;
    }
}

//FUNCTION FOR PRODUCT SIZE SELECTED
const sizeButtons = document.querySelectorAll('.size-btn');
const submitButton = document.getElementById('submit');
sizeButtons.forEach(button => {
    button.addEventListener('click', () => {
        sizeButtons.forEach(btn => btn.classList.remove('selected'));
        button.classList.add('selected');
    });
});
submitButton.addEventListener('click', () => {
    const selectedRadioButton = document.querySelector('.size-btn.selected');
    if (!selectedRadioButton) {
        alert('Please select a size');
    }
});



//FUNCTION FOR STAR RATING
$(document).ready(function () {
    // Initialize rateYo plugin
    var rateYoInstance = $("#rateYo").rateYo({
        starWidth: "20px",
        onSet: function (rating, rateYoInstance) {
            $('#rating').val(rating);
        }
    }).rateYo();

    // Add input event listener
    $("#rating").on("input", function () {
        var ratingValue = $(this).val();
        // Set the star rating based on the input value
        rateYoInstance.rateYo("rating", ratingValue);
    });
});

//FUNCTION FOR USER COMMENTS STAR
$(document).ready(function () {
    $(".rateYo").each(function () {
        var rating = $(this).data("rating");
        $(this).rateYo({
            rating: rating,
            readOnly: true,
            starWidth: "20px"
        });
    });
});

