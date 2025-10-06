<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreStatisticRequest;
use App\Models\CompanyStatistic;
use App\Http\Requests\UpdateStatisticRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class CompanyStatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $statistics = CompanyStatistic::orderByDesc('id')->paginate(10);
        return view('admin.statistics.index', compact('statistics'));
        }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('admin.statistics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStatisticRequest $request)
    {
        // insert kepada datanase pada table tertentu
        //
        DB::transaction(function () use ($request) {
            $validated = $request->validated();

            if($request->hasFile('icon')){
                $iconPath = $request->file('icon')->store('icons', 'public');
                $validated['icon'] = $iconPath;
            }

            $newCompanyStatistic = CompanyStatistic::create($validated);
        });

        return redirect()->route('admin.statistics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(CompanyStatistic $statistic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompanyStatistic $statistic)
    {
        //
        return view('admin.statistics.edit', compact('statistic'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStatisticRequest $request, CompanyStatistic $statistic)
    {
        //
        DB::transaction(function () use ($request, $statistic) {
            $validated = $request->validated();

            if($request->hasFile('icon')){
                $iconPath = $request->file('icon')->store('icons', 'public');
                $validated['icon'] = $iconPath;
            }

            $statistic->update($validated);
        });

        return redirect()->route('admin.statistics.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompanyStatistic $statistic)
    {
        //
        DB::transaction(function() use ($statistic) {
            $statistic->delete();
        });

        return redirect()->route('admin.statistics.index');
    }

}
