<?php

namespace App\Respositories;

use App\Models\Inquiry;

class InquiryRepository
{
    public function insertInquiry(array $data)
    {
        return Inquiry::create($data);
    }
}