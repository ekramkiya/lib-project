<!DOCTYPE html>
<html>
<head>
    <title>Print Result - {{ $result->orderItem->testDefinition->name }}</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 2rem; }
        h2 { text-align: center; }
        table { width: 100%; border-collapse: collapse; margin-top: 1rem; }
        td, th { border: 1px solid #ddd; padding: 8px; }
        th { background: #f4f4f4; }
        .footer { margin-top: 2rem; text-align: center; font-size: 12px; color: #555; }
    </style>
</head>
<body onload="window.print(); window.close();">

    <h2>Laboratory Test Result</h2>

    <p><strong>Patient:</strong> {{ $result->orderItem->order->patient->name ?? 'N/A' }}</p>
    <p><strong>Test:</strong> {{ $result->orderItem->testDefinition->name ?? 'N/A' }}</p>
    <p><strong>Date:</strong> {{ $result->created_at->format('d M Y') }}</p>

    <table>
        <thead>
            <tr>
                <th>Result</th>
                <th>Unit</th>
                <th>Reference Range</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $result->result_value }}</td>
                <td>{{ $result->unit }}</td>
                <td>{{ $result->reference_range }}</td>
                <td>{{ $result->is_abnormal ? 'Abnormal' : 'Normal' }}</td>
            </tr>
        </tbody>
    </table>

    <div class="footer">
        <p>Printed on {{ now()->format('d M Y H:i') }}</p>
    </div>

</body>
</html>
