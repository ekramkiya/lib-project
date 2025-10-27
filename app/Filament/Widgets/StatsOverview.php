<?php

namespace App\Filament\Widgets;

use App\Models\Patient;
use App\Models\User;
use App\Models\TestOrder;
use App\Models\Invoice;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
  
   
    
    protected function getStats(): array

    {
        // === Financial Metrics ===
        $totalIncome = Invoice::where('status', 'paid')->sum('total_amount');

        $dailyIncome = Invoice::where('status', 'paid')
            ->whereDate('created_at', now()->toDateString())
            ->sum('total_amount');

        $weeklyIncome = Invoice::where('status', 'paid')
            ->whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])
            ->sum('total_amount');

        $monthlyIncome = Invoice::where('status', 'paid')
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->sum('total_amount');

        $yearlyIncome = Invoice::where('status', 'paid')
            ->whereYear('created_at', now()->year)
            ->sum('total_amount');

        // === Entity Counts ===
        $totalPatients = Patient::count();
        $totalOrders   = TestOrder::count();
        $totalUsers    = User::count();

        // === Compute Change vs. Last Month ===
        $previousMonthIncome = Invoice::where('status', 'paid')
            ->whereMonth('created_at', now()->subMonth()->month)
            ->whereYear('created_at', now()->subMonth()->year)
            ->sum('total_amount');

        $incomeChange = $previousMonthIncome > 0
            ? (($monthlyIncome - $previousMonthIncome) / $previousMonthIncome) * 100
            : 0;

        $changeIcon  = $incomeChange >= 0
            ? 'heroicon-m-arrow-trending-up'
            : 'heroicon-m-arrow-trending-down';
        $changeColor = $incomeChange >= 0 ? 'success' : 'danger';

        // === Currency Formatter ===
        $formatAFN = fn($value) => 'AFN ' . number_format($value, 2);

        return [
            // Patients
            Stat::make('Total Patients', $totalPatients)
                ->icon('heroicon-o-user-group')
                ->color('primary')
                ->description('Registered patients'),

            // Test Orders
            Stat::make('Test Orders', $totalOrders)
                ->icon('heroicon-o-clipboard-document-list')
                ->color('info')
                ->description('Lab orders created'),

            // Users
            Stat::make('Staff Users', $totalUsers)
                ->icon('heroicon-o-users')
                ->color('warning')
                ->description('System staff accounts'),

            // Total Income (All Time)
            Stat::make('Total Income', $formatAFN($totalIncome))
                ->icon('heroicon-o-banknotes')
                ->color('success')
                ->description(round($incomeChange, 1) . '% vs last month')
                ->descriptionIcon($changeIcon)
                ->chart([$dailyIncome, $weeklyIncome, $monthlyIncome, $yearlyIncome, $totalIncome]),

            // Daily Income
            Stat::make('Daily Income', $formatAFN($dailyIncome))
                ->icon('heroicon-o-calendar')
                ->color('info')
                ->description('Income for ' . now()->format('M d, Y')),

            // Weekly Income
            Stat::make('Weekly Income', $formatAFN($weeklyIncome))
                ->icon('heroicon-o-calendar-days')
                ->color('primary')
                ->description('This week income'),

            // Monthly Income
            Stat::make('Monthly Income', $formatAFN($monthlyIncome))
                ->icon('heroicon-o-chart-bar')
                ->color('success')
                ->description('Income for ' . now()->format('F')),

            // Yearly Income
            Stat::make('Yearly Income', $formatAFN($yearlyIncome))
                ->icon('heroicon-o-chart-pie')
                ->color('warning')
                ->description('Income for ' . now()->year),
        ];
    }
}
