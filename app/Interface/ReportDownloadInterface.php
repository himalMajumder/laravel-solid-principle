<?php

namespace App\Interface;

interface ReportDownloadInterface{
    // Separate download Function from Report Interface

    /**
     * Download
     *
     * @param [type] $format
     * @return void
     */
    public function download($format);
}
