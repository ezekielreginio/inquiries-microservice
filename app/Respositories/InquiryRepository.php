<?php

namespace App\Respositories;

use App\Models\Inquiry;

class InquiryRepository
{
    /**
     * Creates an Inquiry record in "inquiries" table
     *
     * @param array $data
     * @return void
     * 
     * @author Redd Hilario <jhilarioiv@gmail.com>
     */
    public function insertInquiry(array $data)
    {
        return Inquiry::create($data);
    }

    /**
     * Fetches a specific record from the "inquiries" table by ID
     *
     * @param integer $id
     * @return void
     * 
     * @author Redd Hilario <jhilarioiv@gmail.com>
     */
    public function get(int $id)
    {
        return Inquiry::find($id);
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
        return Inquiry::all();
    }

    /**
     * Deletes a specific record in "inquiries" table
     *
     * @param integer $id
     * @return void
     * 
     * @author Redd Hilario <jhilarioiv@gmail.com>
     */
    public function deleteInquiry(int $id)
    {
        return Inquiry::find($id)->delete();
    }
}