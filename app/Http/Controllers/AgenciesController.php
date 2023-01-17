<?php

namespace App\Http\Controllers;

use App\Models\Agencies;
use Illuminate\Http\Request;

class AgenciesController extends Controller
{
    // GET:
    public function index() {
        $agencies = response()->json(Agencies::all());
        return $agencies;
    }

    public function show($id) {
        $agencies = response()->json(Agencies::find($id));
        return $agencies;
    }

    // DELETE:
    public function destroy($id) {
        Agencies::find($id)->delete();
    }

    // POST:
    public function store(Request $request) {
        $agency = new Agencies();
        $agency->name = $request->name;
        $agency->country = $request->country;
        $agency->save();
    }
    
    // PUT:
    public function update(Request $request, $id) {
        $agency = Agencies::find($id);
        $agency->name = $request->name;
        $agency->country = $request->country;
        $agency->save();
    }

    // View-ok:
    public function newView() {
        $agencies = Agencies::all();
        return view('agencies.new', ['agencies' => $agencies]);
    }
    
    public function editView($id) {
        $agency = Agencies::find($id);
        return view('agencies.edit', ['agencies' => $agency]);
    }
    
    public function listView() {
        $agencies = Agencies::all();
        return view('agencies.list', ['agencies' => $agencies]);
    }
    
    public function deleteView() {
        $agency = Agencies::all();
        return view('agencies.delete', ['agencies' => $agency]);
    }
}
