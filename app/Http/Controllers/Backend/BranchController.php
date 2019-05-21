<?php

namespace App\Http\Controllers\Backend;

use App\Models\BranchOffice;
use App\Models\BrnachTranslate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->currentLocaleId = (is_null($request->lang_id)) ? $this->currentLocaleId : $request->lang_id;
        $branches = DB::table('branch_offices')
            ->join('brnach_translates', ['branch_offices.id' => 'brnach_translates.branch_id'])
            ->where('brnach_translates.lang_id', $this->currentLocaleId)
            ->select('branch_offices.id','branch_offices.isVisible', 'brnach_translates.name')
            ->get();

        return view('backend.branch.index',compact('branches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.branch.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $branch = BranchOffice::create($request->all());
        foreach ($request->name as $key => $value) {
            BrnachTranslate::create([
                'name' => $value,
                'branch_id' => $branch->id,
                'lang_id' => $request->lang[$key]
            ]);
        }


        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $branch = BranchOffice::findOrFail($id);
        $branchtranslate = BrnachTranslate::where('branch_id',$id)->get();
        return view('backend.branch.edit',compact('branch','branchtranslate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BranchOffice $branch)
    {
        $branch->update($request->all());
        foreach ($request->name as $key => $value) {
            $translate = BrnachTranslate::where(['branch_id' => $branch->id, 'lang_id' => $request->lang[$key]])->first();
            $translate->name = $value;
            $translate->update();
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
