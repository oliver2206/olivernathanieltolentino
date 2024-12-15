document.querySelector('.checkout').addEventListener('click', function (event) {
    // Get the values of the required fields
    const paymentMethod = document.getElementById('payment-method').value;
    const deliveryAddress = document.getElementById('delivery-address').value;
    const deliveryOption = document.getElementById('delivery-option').value;
    
    // Check if all required fields are selected
    if (paymentMethod === 'default' || deliveryAddress === 'default' || deliveryOption === 'standard') {
        // If any field is not selected, prevent checkout and alert the user
        alert("Please select a payment method, delivery address, and delivery option before proceeding.");
    } else {
        // If all fields are selected, display the processing message and redirect after a delay
        alert("Your order is being processed.");
        
        // Redirect to index.html after 2 seconds (for example)
        setTimeout(function() {
            window.location.href = './index.html'; // Change this to your desired URL
        }, 2000); // 2 seconds delay
    }
});
