<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use App\Repositories\Interfaces\UserRepository;

class UserController extends Controller
{
    private $userRepo;

    /**
     * UserController constructor.
     * @param $userRepo
     */
    public function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): \Illuminate\View\View
    {
        $users = $this->userRepo->all();

        return view('contact.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): \Illuminate\View\View
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreUserRequest $request): \Illuminate\Http\RedirectResponse
    {
        $this->userRepo->create($request->all());

        return redirect()->route('contact.index')->with('status', 'Contacto agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user): \Illuminate\View\View
    {
        return view( 'contact.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return \Illuminate\View\View
     */
    public function edit(User $user): \Illuminate\View\View
    {
        return view( 'contact.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateUserRequest $request
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateUserRequest $request, User $user): \Illuminate\Http\RedirectResponse
    {
        $this->userRepo->update($request->all(), $user);

        return redirect()->route('contact.index')->with('status', 'Contacto actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User $user): \Illuminate\Http\RedirectResponse
    {
        $this->userRepo->delete($user);

        return redirect()->route('contact.index')->with('status', 'Contacto eliminado');
    }
}
