<?php

namespace App\Reports;

use App\Interface\ReportInterface;

class TestReportByMonth implements ReportInterface {
    public function getData() {
        return []; //test
    }

    public function download($format) {
        // Implements the download - this is a "fake" example
        return response()->download('report_file' . $format);
    }
}
