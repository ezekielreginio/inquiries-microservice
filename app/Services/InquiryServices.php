<?php 

namespace App\Services;

use App\Respositories\InquiryRepository;

// use App\Repositories\InquiryRepository;

class InquiryServices
{
    private InquiryRepository $inquiryRepository;

    public function __construct(InquiryRepository $inquiryRepository)
    {
        $this->inquiryRepository = $inquiryRepository;
    }

    public function createInquiry(array $data)
    {
        return $this->inquiryRepository->insertInquiry($data);
    }
}