<?php

namespace App\Filament\Widgets;

use App\Models\Invoice;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class MonthlyIncomeChart extends ChartWidget
{

    protected function getData(): array
    {
        // Get last 12 months of paid invoices
        $incomes = Invoice::select(
                DB::raw('SUM(total_amount) as total'),
                DB::raw('MONTH(created_at) as month'),
                DB::raw('YEAR(created_at) as year')
            )
            ->where('status', 'paid')
            ->whereBetween('created_at', [now()->subMonths(11)->startOfMonth(), now()->endOfMonth()])
            ->groupBy('year', 'month')
            ->orderBy('year')
            ->orderBy('month')
            ->get();

        // Format data
        $labels = [];
        $values = [];

        // Fill missing months with 0
        $months = collect(range(0, 11))->map(fn($i) => now()->subMonths(11 - $i)->startOfMonth());
        foreach ($months as $month) {
            $found = $incomes->firstWhere(fn($row) =>
                $row->year == $month->year && $row->month == $month->month
            );

            $labels[] = $month->format('M Y');
            $values[] = $found ? $found->total : 0;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Total Income (AFN)',
                    'data' => $values,
                    'fill' => 'start',
                    'borderWidth' => 2,
                ],
            ],
            'labels' => $labels,
        ];
    }

 


    protected function getType(): string
    {
        return 'line';
    }
}
