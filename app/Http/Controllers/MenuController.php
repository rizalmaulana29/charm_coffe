<?php

namespace App\Http\Controllers;

use App\Models\MenuModel;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MenuController extends Controller
{
    public function table()
    {
        $data = MenuModel::orderBy('date', 'asc')->paginate(30);
        return  view("table")->with("data", $data);
    }

    public function menu()
    {
        return  view("menu");
    }

    public function coffe()
    {
        return  view("coffe");
    }

    public function noncoffe()
    {
        return  view("noncoffe");
    }

    public function mocktail()
    {
        return  view("mocktail");
    }

    public function tea()
    {
        return  view("tea");
    }

    public function dessert()
    {
        return  view("dessert");
    }

    public function main()
    {
        return  view("main");
    }

    public function team()
    {
        return  view("team");
    }

    public function about()
    {
        return  view("about");
    }

    public function snack()
    {
        return  view("snack");
    }

    public function tablervs()
    {
        $data = MenuModel::orderBy('date', 'desc')->paginate(30);
        return  view("tablereverse")->with("data", $data);
    }

    public function dashboard()
    {
        $mostFrequentItem = MenuModel::select('item_name', MenuModel::raw('COUNT(*) as frequency'))
            ->groupBy('item_name')
            ->orderBy('frequency', 'DESC')
            ->first();

        $leastFrequentItem = MenuModel::select('item_name', MenuModel::raw('COUNT(*) as frequency'))
            ->groupBy('item_name')
            ->orderBy('frequency', 'ASC')
            ->first();

        $mostFrequentTime = MenuModel::select('time_of_sale', MenuModel::raw('COUNT(*) as frequency'))
            ->groupBy('time_of_sale')
            ->orderBy('frequency', 'DESC')
            ->first();

        $leastFrequentTime = MenuModel::select('time_of_sale', MenuModel::raw('COUNT(*) as frequency'))
            ->groupBy('time_of_sale')
            ->orderBy('frequency', 'ASC')
            ->first();

        $onlineTransactionData = MenuModel::selectRaw("DATE_FORMAT(date, '%b %Y') AS month_year, COUNT(*) AS transaction_count")
            ->where('transaction_type', 'Online')
            ->groupBy('month_year')
            ->orderByRaw("YEAR(date), MONTH(date)")
            ->get();

        $onlineData = [];

        foreach ($onlineTransactionData as $transaction) {
            $onlineData[] = [
                'x' => $transaction->month_year,
                'y' => $transaction->transaction_count
            ];
        }

        $cashTransactionData = MenuModel::selectRaw("DATE_FORMAT(date, '%b %Y') AS month_year, COUNT(*) AS transaction_count")
            ->where('transaction_type', 'Cash')
            ->groupBy('month_year')
            ->orderByRaw("YEAR(date), MONTH(date)")
            ->get();

        $cashData = [];

        foreach ($cashTransactionData as $transactionCash) {
            $cashData[] = [
                'x' => $transactionCash->month_year,
                'y' => $transactionCash->transaction_count
            ];
        }

        $timeOfSaleData = MenuModel::select('time_of_sale', MenuModel::raw('COUNT(*) as frequency'))
            ->groupBy('time_of_sale')
            ->orderBy('frequency', 'DESC')
            ->get();

        $timeOfSaleLabels = $timeOfSaleData->pluck('time_of_sale')->toArray();
        $timeOfSaleSeries = $timeOfSaleData->pluck('frequency')->toArray();

        $transactionAmountData = MenuModel::selectRaw("DATE_FORMAT(date, '%b %Y') AS month_year, SUM(transaction_amount) AS total_amount")
            ->groupByRaw("DATE_FORMAT(date, '%b %Y')")
            ->orderByRaw("YEAR(date), MONTH(date)")
            ->get();

        $categories = $transactionAmountData->pluck('month_year')->toArray();
        $data = $transactionAmountData->pluck('total_amount')->toArray();

        return view('dashboard', [
            'mostFrequentItem' => $mostFrequentItem,
            'leastFrequentItem' => $leastFrequentItem,
            'mostFrequentTime' => $mostFrequentTime,
            'leastFrequentTime' => $leastFrequentTime,
            'onlineTransactionData' => $onlineData,
            'cashTransactionData' => $cashData,
            'timeOfSaleLabels' => json_encode($timeOfSaleLabels),
            'timeOfSaleSeries' => json_encode($timeOfSaleSeries),
            'categories' => json_encode($categories),
            'data' => json_encode($data),
        ]);
    }



}
