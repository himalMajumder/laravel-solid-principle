<?php

namespace App\Reports;

use App\Interface\ReportInterface;
use App\Models\Invoice;

class ReportByMonth implements ReportInterface{
    public function getData()
    {
        return Invoice::withSum('products', \DB::raw('invoice_product.price * invoice_product.quantity'))
        ->orderBy('invoice_data', 'desc')
        ->get()
        ->groupBy(function($invoice){
            return $invoice->invoice_data->format('Y-m');
        });
    }


    public function download($format){
        return request()->download('report_file'.$format);
    }
}
