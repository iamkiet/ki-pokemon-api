<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;

class CandidateController extends Controller
{
    public function index()
    {
        return Candidate::all();
    }
 
    public function show($id)
    {
        return Candidate::find($id);
    }

    public function store(Request $request)
    {
        return Candidate::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Candidate = Candidate::findOrFail($id);
        $Candidate->update($request->all());

        return $Candidate;
    }

    public function delete(Request $request, $id)
    {
        $Candidate = Candidate::findOrFail($id);
        $Candidate->delete();

        return 204;
    }
}
