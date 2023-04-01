<?php

namespace App\Interface;

interface ReportInterface{
    // This reportInterface should depends on all function which is not right way;
    // Replace this fat interface with many small, specific interface;

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
