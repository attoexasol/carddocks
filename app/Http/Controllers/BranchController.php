<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index(){
        $branches = Branch::all();
        return view ('branch.index', compact('branches'));
    }


    public function create(){
        return view ('branch.create');
    }


    public function store(Request $request){

        Branch::create([
           'branch_code' =>$request->branch_code,
           'branch_name' =>$request->branch_name,
           'area' =>$request->area,
           'contact_no' =>$request->contact_no,
           'address' =>$request->address,
           'routing_no' =>$request->routing_no,
           'chq_leaf_last_sl' =>$request->chq_leaf_last_sl

        ]);
        return redirect()->route ('branch.index')->with('success', 'Branch Add done');
    }

    public function edit($id){


        $branch = Branch::find($id);
        return view ('branch.edit', compact('branch'));


    }

    public function update(Request $request, $id){
        $data = $request->except('_token');
        Branch::where('id', $id)->update($data);
        return redirect()->route('branch.index')->with('success', 'Branch Update done');
    }


    public function destroy($id){


        Branch::where('id', $id)->delete();
        return redirect()->route('branch.index')->withSuccess('Product Delete Done');
    }


    public function trashlist(){
        $data = Branch::onlyTrashed()->get();
        return view('branch.trashlist', compact('data'));
    }


    public function restorebranch($id)
    {
        $branch = Branch::withTrashed()->find($id);

        if (!$branch) {
            return redirect()->route('branch.trashlist')->with('error', 'Branch not found in trash');
        }

        $branch->restore();

        return redirect()->route('branch.trashlist')->with('success', 'Branch restored successfully');
    }

    public function forceDelete($id){

        Branch::where('id', $id)->forcedelete();
        return redirect()->back() ->withSuccess("Delete Permanently");
}






}

