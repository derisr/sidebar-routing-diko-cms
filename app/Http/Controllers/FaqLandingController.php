<?php

namespace App\Http\Controllers;

use App\Models\FaqLanding;
use App\Http\Requests\StoreFaqLandingRequest;
use App\Http\Requests\UpdateFaqLandingRequest;

class FaqLandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.Landing.faqLanding')->with([
            'faq_landings' => FaqLanding::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFaqLandingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FaqLanding $faqLanding, $idfaq)
    {
        $data = $faq->find($idstudents);
        // echo $data->fullname; 
        return view('students.formedit')->with([
            'txtid' => $idstudents,
            'txtfullname' => $data->fullname,
            'txtaddress' => $data->address,
            'txtemail' => $data->emailaddress ,
            'txtphone' => $data->phone,
            'txtgender' => $data->gender,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FaqLanding $faqLanding)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFaqLandingRequest $request, FaqLanding $faqLanding)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FaqLanding $faqLanding)
    {
        //
    }
}
