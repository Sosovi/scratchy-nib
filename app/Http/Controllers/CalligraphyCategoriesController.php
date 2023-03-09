<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryPostRequest;
use App\Http\Requests\CategoryPutRequest;
use App\Models\CalligraphyCategory;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CalligraphyCategoriesController extends Controller
{
    public function index()
    {
        return view('admin.categories.index', [
            'categories' => CalligraphyCategory::filter(request(['cateName']))->paginate(5)->appends(request()->query())
        ]);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CategoryPostRequest $request)
    {
        $validated = $request->validated();
        CalligraphyCategory::create($validated);
        Alert::success('Success', 'New calligraphy category succesfully added!')->buttonsStyling(false)->autoClose(1500);
        return redirect(route('categories.index'));
    }

    public function show() {
        abort('404');
    }

    public function edit(CalligraphyCategory $category)
    {
        return view('admin.categories.edit', [
            'category' => $category,
        ]);
    }

    public function update(CategoryPutRequest $request, CalligraphyCategory $category)
    {
        $validated = $request->validated();
        $category->update($validated);
        Alert::success('Success', 'Calligraphy category succesfully updated!')->buttonsStyling(false)->autoClose(1500);

        return redirect(route('categories.index'));
    }

    public function destroy(Request $request)
    {
        $redrectTo = $request->query('redirect_to',route('categories.index'));
        $CateID = $request->category_id;
        $category = CalligraphyCategory::findOrFail($CateID);
        $category->delete();
        Alert::success('Success', 'Calligraphy category succesfully deleted!')->buttonsStyling(false)->autoClose(1500);

        return redirect($redrectTo);
    }
}
