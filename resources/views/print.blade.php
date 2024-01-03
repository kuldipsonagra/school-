<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .receipt-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .receipt-details {
            margin-bottom: 20px;
        }

        .receipt-items {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .receipt-items th, .receipt-items td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="receipt-header">
        <h1>Payment Receipt</h1>
    </div>

    <div class="receipt-details">
        <p>Receipt ID: {{ $payment->id }}</p>
        <p>Date: {{ $payment->created_at->format('Y-m-d H:i:s') }}</p>
        <!-- Add more details as needed -->
    </div>

    <table class="receipt-items">
        <thead>
            <tr>
                <th>Description</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $payment->description }}</td>
                <td>${{ $payment->amount }}</td>
            </tr>
            <!-- Add more items if needed -->
        </tbody>
    </table>
</body>
</html>
