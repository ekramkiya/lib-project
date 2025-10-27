
<!DOCTYPE html>
<html>
<head>
    <title>Test Result - {{ $result->orderItem->testDefinition->name }}</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 2rem; }
        table { width: 100%; border-collapse: collapse; margin-top: 1rem; }
        td, th { border: 1px solid #ddd; padding: 0.5rem; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>
    <h2>Lab Test Result</h2>
    <p><strong>Patient:</strong> {{ $result->orderItem->order->patient->name }}</p>
    <p><strong>Test:</strong> {{ $result->orderItem->testDefinition->name }}</p>
    <p><strong>Date:</strong> {{ $result->created_at->format('d M Y') }}</p>

    <table>
        <tr>
            <th>Result</th>
            <th>Unit</th>
            <th>Reference Range</th>
            <th>Status</th>
        </tr>
        <tr>
            <td>{{ $result->result_value }}</td>
            <td>{{ $result->unit }}</td>
            <td>{{ $result->reference_range }}</td>
            <td>{{ $result->is_abnormal ? 'Abnormal' : 'Normal' }}</td>
        </tr>
    </table>

    <button onclick="window.print()">Print</button>
</body>
</html>
