<?php

namespace App\Interface;

interface ReportInterface{
    /**
     * Get Report Data
     *
     * @return void
     */
    public function getData();


    /**
     * Download
     *
     * @param [type] $format
     * @return void
     */
    public function download($format);
}
