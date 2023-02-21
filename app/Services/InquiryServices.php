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

    /**
     * Creates an Inquiry record in "inquiries" table
     *
     * @param array $data
     * @return void
     * 
     * @author Redd Hilario <jhilarioiv@gmail.com>
     */
    public function createInquiry(array $data)
    {
        return $this->inquiryRepository->insertInquiry($data);
    }

    /**
     * Fetches a specific record from the "inquiries" table by ID
     *
     * @param integer $id
     * @return void
     */
    public function getById(int $id)
    {
        return $this->inquiryRepository->get($id);
    }
    
    /**
     * fetches all records from "inquiries" table
     *
     * @return void
     * 
     * @author Redd Hilario <jhilarioiv@gmail.com>
     */
    public function getAll()
    {
        return $this->inquiryRepository->getAll();
    }

    /**
     * Deletes a specific record in "inquiries" table
     *
     * @param integer $id
     * @return void
     * 
     * @author Redd Hilario <jhilarioiv@gmail.com>
     */
    public function delete(int $id)
    {
        return $this->inquiryRepository->deleteInquiry($id);
    }
}