<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourtRequest;
use App\Http\Requests\UpdateCourtRequest;
use App\Models\Court;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CourtController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified'])->except(['index', 'show']);

        $this->authorizeResource(Court::class, 'court');
    }

    public function index(): View  // 查看場地詳細資訊
    {
        $court = Court::query()
            // ->orderByDesc('created_at')
            ->paginate(5);

        return view('court.index', compact('court'));
    }

    public function create(): View // 新增場地
    {
    }

    public function store(StoreAnnouncementRequest $request): RedirectResponse // 儲存新增或更動的場地到資料庫
    {
    }

    public function show(Announcement $announcement): View // 顯示場地
    {
    }

    public function edit(Announcement $announcement): View // 編輯場地
    {
    }

    public function update(UpdateAnnouncementRequest $request, Announcement $announcement): RedirectResponse // 更新場地
    {
    }

    public function destroy(Announcement $announcement): RedirectResponse // 刪除場地
    {
    }
}
