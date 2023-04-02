<?php

namespace App\Http\Controllers;

use App\Interface\ReportInterface;

class InvoiceReportController extends Controller {
    public function reportByMonth(ReportInterface $report, $format = 'html') {
        $data = $report->getData();

        if ($format != 'html') {
            return $report->download($format);
        }

        return view('invoices.report_month', compact('data'));
    }

}
