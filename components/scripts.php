<script>
    var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
    var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

    // Change the icons inside the button based on previous settings
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        themeToggleLightIcon.classList.remove('hidden');
    } else {
        themeToggleDarkIcon.classList.remove('hidden');
    }

    var themeToggleBtn = document.getElementById('theme-toggle');

    themeToggleBtn.addEventListener('click', function () {

        // toggle icons inside button
        themeToggleDarkIcon.classList.toggle('hidden');
        themeToggleLightIcon.classList.toggle('hidden');

        // if set via local storage previously
        if (localStorage.getItem('color-theme')) {
            if (localStorage.getItem('color-theme') === 'light') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            }

            // if NOT set via local storage previously
        } else {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        }

    });
</script>

<script>
    // Function to create PayPal buttons
    function createPayPalButton(planId, price) {
        paypal.Buttons({
            createOrder: function (data, actions) {
                // Set up the details for the payment
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: price, // Change the value based on the plan
                        }
                    }]
                });
            },
            onApprove: function (data, actions) {
                // Capture the funds from the transaction
                return actions.order.capture().then(function (details) {
                    // Redirect or show a thank you message
                    window.location.href = "/functions/completedPayment.php?planId=" + planId;

                });
            }
        }).render('#' + planId); // Render the button in the specified element
    }

    // Call the function for each PayPal button
    createPayPalButton('paypal-button-starter', '29');
    createPayPalButton('paypal-button-company', '99');
    createPayPalButton('paypal-button-enterprise', '499');
</script>