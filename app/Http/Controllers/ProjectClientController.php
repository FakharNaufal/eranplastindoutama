<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\ProjectClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clients = ProjectClient::orderByDesc('id')->paginate(10);
        return view('admin.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() // Show the form for creating a new resource.
    {
        //
        return view ('admin.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientRequest $request)
    {
        //
        DB::transaction(function () use ($request) {
            $validated = $request->validated();

            if($request->hasFile('avatar')){
                $avatarPath = $request->file('avatar')->store('avatars', 'public');
                $validated['avatar'] = $avatarPath; //storage/avatars/angga.png
            }

            if($request->hasFile('logo')){
                $logoPath = $request->file('logo')->store('logos', 'public');
                $validated['logo'] = $logoPath; //storage/logos/angga.png
            }

            $newProjectClient = ProjectClient::create($validated);
        });

        return redirect()->route('admin.clients.index')->with('success', 'Client created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProjectClient $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProjectClient $client)
    {
        //
        return view('admin.clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientRequest $request, ProjectClient $client)
    {
        //
        DB::transaction(function () use ($request, $client) {
            $validated = $request->validated();

            if($request->hasFile('avatar')){
                $avatarPath = $request->file('avatar')->store('avatars', 'public');
                $validated['avatar'] = $avatarPath; //storage/avatars/angga.png
            }

            if($request->hasFile('logo')){
                $logoPath = $request->file('logo')->store('logos', 'public');
                $validated['logo'] = $logoPath; //storage/logos/angga.png
            }

            $client->update($validated);
        });

        return redirect()->route('admin.clients.index')->with('success', 'Client created successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectClient $client)
    {
        //
        DB::transaction(function() use ($client) {
            $client->delete();
        });

        return redirect()->route('admin.clients.index');
    }
}
