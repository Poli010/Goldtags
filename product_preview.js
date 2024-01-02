//FUNCTION FOR CANNOT TYPE "-"
function validateQuantity(input) {
    if (input.value < 0) {
        input.value = 0;
    }
}
$(document).ready(function() {
    $("#rateYo").rateYo({
        starWidth: "20px",
        onSet: function(rating, rateYoInstance) {
            $('#rating').val(rating);
        }
    });
});