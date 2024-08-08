<?php

namespace App\Http\Controllers;

use App\Models\Tin;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function dashboard()
    {
        $tin = tin::with('category')->get();
        return view('admin.dashboard', compact('tin'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'views' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath;
        }

        Tin::create($validatedData);

        return redirect()->route('admin.dashboard')->with('success', 'Tin tức đã được thêm mới thành công.');
    }

    public function edit($id)
    {
        $tin = Tin::findOrFail($id);
        $categories = Category::all();

        return view('admin.edit', compact('tin', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'views' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $tin = Tin::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($tin->image) {
                Storage::disk('public')->delete($tin->image);
            }
            $imagePath = $request->file('image')->storeAs('images', $request->file('image')->getClientOriginalName(), 'public');
            $validatedData['image'] = 'images/' . $request->file('image')->getClientOriginalName();
        } else {
            // Nếu không có ảnh mới, giữ lại ảnh cũ
            $validatedData['image'] = $tin->image;
        }

        $tin->update($validatedData);

        return redirect()->route('admin.dashboard')->with('success', 'Tin tức đã được cập nhật thành công.');
    }

    public function destroy($id)
    {
        $tin = Tin::findOrFail($id);
        if ($tin->image) {
            Storage::disk('public')->delete($tin->image);
        }

        $tin->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Tin tức đã được xóa thành công.');
    }
    public function search(Request $request)
    {
        $search = $request->input('search');
        $tins = Tin::where('title', 'like', '%' . $search . '%')->get();
        return view('timkiem', compact('tins', 'search'));
    }



}
