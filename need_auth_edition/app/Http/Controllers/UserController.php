<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserPermissionRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Services\PermissionService;
use App\Models\User;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        // 註解掉的兩行待改QQ 應該用Laravel預設的登入系統，一直卡在使用者驗證
        // $this->middleware(['auth']);

        // $this->authorizeResource(User::class, 'user');
    }

    public function index() // 檢視使用者
    {
        // $users = auth()->user();
        return view('users.index');
    }

    public function create(): View // 新增使用者(註冊)
    {
        return view('users.create');
    }

    public function store(StoreUserRequest $request)  // 儲存使用者(註冊完儲存的動作)
    {
        $content = $request->validate([
            'student_Name' => 'required',
            'student_Email' => 'required',
            'student_Password' => 'required',
            'student_Phone' => 'required',
        ]);

        User::create($content);

        // return redirect(route('users_index'));
        return route('welcome');
    }

    // public function show(User $user): View // 使用者查看自己資料
    // {
    //     return view('users.show');
    // }

    // public function edit(User $user) // 編輯自己使用者的個人資料
    // {
    //     // if ($user->id === auth()->id()) {
    //     //     return redirect()->route('profile.edit');
    //     // }

    //     // return view('users.edit', ['user' => $user]);
    // }

    // public function update(UpdateUserRequest $request, User $user): RedirectResponse // 更新使用者資料(編輯過後儲存的動作)
    // {
    // if (auth()->id() === $user->id) {
    //     return redirect()->route('profile.edit');
    // }

    // $user->fill($request->validated());

    // DB::transaction(function () use ($user) {
    //     if ($user->isDirty('admin')) {
    //         PermissionService::updateUserPermissions($user);
    //     }

    //     $user->save();
    // });

    // return redirect()->route('users.show', ['user' => $user]);
    // }

    // public function destroy(User $user): RedirectResponse // 刪除使用者
    // {
    //     $user->delete();

    //     return redirect()->route('users.index');
    // }

    // public function editPermission(User $user)
    // {


    //     // return view('users.edit-permission', compact('user', 'permissionGroups'));
    // }

    // public function updatePermission(UpdateUserPermissionRequest $request, User $user)
    // {
    // }
}
