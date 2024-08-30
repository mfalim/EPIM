<?
include 'db.php';
include 'session.php';
requireLogin();

$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT * FROM user where id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();

$tickets = $conn->query("SELECT * FROM tiket")->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
    <div class="container">
        <div class="form-section">
            <h1 class="text-center">Grandeur Euphoria</h1>
            <p class="text-center">Feel the Grandeur, Embrace the Euphoria!</p>

            <h2>Payment Detail</h2>
            <form id="paymentForm">
                <label for="ticket">Ticket</label>
                <select id="ticket">
                    <option value="">Select a Ticket</option>
                    <?php foreach ($tickets as $ticket) : ?>
                        <option value="<? htmlspecialchars($ticket['id'])?>"
                            data-price="<?= htmlspecialchars($ticket['harga'])?>">
                            <?= htmlspecialchars($ticket['jenis'])?>
                        </option>
                        <?php endforeach; ?>
                </select>

                <label for="quantity">Quantity</label>
                <input type="number" id="quantity" value="1" min="1">

                <label for="name">Name</label>
                <input type="text" id="name" value="<?= htmlspecialchars($user['nama']) ?>"readonly>

                <label for="email">Email</label>
                <input type="email" id="email" value="<?= htmlspecialchars($user['email']) ?>"readonly>

                <div class="total-payment">
                    <strong>Total Payment: $0.00</strong>
                </div>

                <div class="button-conatiner">
                    <button type="button" id="payButton" class="btn-btn primary">Pay</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        const payButton = document.getElementById('payButton');
        const ticketSelect = document.getElementById('ticket');
        const quantityInput = document.getElementById('quantity');
        const totalPayment = document.getElementById('.total-payment')

        let totalPrice = 0;

        ticketSelect.addEventListener('change', updateTotalPrice);
        quantityInput.addEventListener('change', updateTotalPrice);

        function updateTotalPrice() {
            const selectedOption = ticketSelect.options[ticketSelect.selectedIndex];
            const price = parseFloat(selectedOption.getAttribute('data-price')) || 0;
            const quantity = parseInt(quantityInput.value, 10) || 0

            totalPrice = price*quantity;
            totalPayment.innerHTML = `<strong>Total Payment: $${totalPrice.toFixed(2)}</strong> `;
        }

        payButton.addEventListener() {
            const ticketId = ticketSelect.value;
            const quantity = parseInt(quantityInput.value, 10);

            if (!ticketId || quantity <=0) {
                alert('please select a valid ticket and quantity');
                return;
            }

            const selectedOption = ticketSelect.options[ticketSelect.selectedIndex];
            const price = parseFloat(selectedOption.getAttribute('data-price'));

            const items = [{
                ticketId : ticketId,
                ticket : selectedOption,
                quantity : quantity,
                price : price,
                total  : totalPrice, 
            }]
        }
    </script>
</body>
</html>