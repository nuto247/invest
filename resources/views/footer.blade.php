<footer class="footer">
        <div class="container">
            <span>&copy; 2024 VortexIncome. All rights reserved.</span>
        </div>
    </footer>

    <!-- Bootstrap and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- JavaScript for BTC Conversion -->
    <script>
        function convertToBTC() {
            const btcRate = 30000; // Example conversion rate, 1 BTC = 30000 USD
            const investmentAmount = document.getElementById('investmentAmount').value;
            const btcAmount = investmentAmount / btcRate;
            document.getElementById('btcAmount').value = btcAmount.toFixed(6); // Display up to 6 decimal places
        }
    </script>

    <!-- JavaScript for Form Redirection -->
    <script>
        document.getElementById('investmentForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const cryptoNetwork = document.getElementById('cryptoNetwork').value;
            const investmentAmount = document.getElementById('investmentAmount').value;
            let redirectUrl;

            switch (cryptoNetwork) {
                case 'bitcoin':
                    redirectUrl = `/confirm?amount=${investmentAmount}`;
                    break;
                case 'usdt-trc20':
                    redirectUrl = `/confirmx?amount=${investmentAmount}`;
                    break;
                default:
                    redirectUrl = `/default-page?amount=${investmentAmount}`;
                    break;
            }

            window.location.href = redirectUrl;
        });
    </script>



<!-- Google Translate Script -->
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <!-- Tawk.to Script -->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/64b01e1f94cf5d49dc637db5/1h5phn4co';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
</body>
</html>
