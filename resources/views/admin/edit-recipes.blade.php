@extends('layouts.admin')


@section('content')
    <h1 class="app-page-title">Edit Recepie</h1>

    <form class="row g-4 mb-4" action="{{ route('updateRecipe', ['recipe' => $recipe]) }}" method="POST" enctype="multipart/form-data">
        <div class="col-12 col-lg-6">
            <div class="card shadow-sm border-0 h-100 p-3">
                @csrf
                <div class="app-card-body px-2 py-2">
                    <small class="stats-type text-uppercase text-muted mb-1" style="text-align: left">Recipe Name</small>
                    <input type="text" name="title" value="{{ $recipe->title }}" placeholder="Recipe Name" class="form-control">
                    @error('title')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="app-card-body px-2 py-2">
                    <small class="stats-type text-uppercase text-muted mb-1" style="text-align: left">Recipe Detail</small>
                    <input type="text" name="info" value="{{ $recipe->info }}" placeholder="Recipe Detail" class="form-control">
                    @error('info')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="app-card-body px-2 py-2">
                    <small class="stats-type text-uppercase text-muted mb-1" style="text-align: left">Recipe Description</small>
                    <textarea class="form-control" name="description" placeholder="Recipe Description" rows="10" style="height: 100px">{{ $recipe->description }}</textarea>
                    @error('description')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
                {{-- <div class="app-card-body px-2 py-2">
                    <small class="stats-type text-uppercase text-muted mb-1" style="text-align: left">Recipe Name</small>
                    <input type="text" placeholder="Recipe Name" class="form-control">
                </div>
                <div class="app-card-body px-2 py-2">
                    <small class="stats-type text-uppercase text-muted mb-1" style="text-align: left">Recipe Name</small>
                    <input type="text" placeholder="Recipe Name" class="form-control">
                </div>
                 --}}
                <a class="app-card-link-mask" href="#"></a>
            </div><!--//app-card-->
        </div>
        <div class="col-12 col-lg-6">
            <div class="card shadow-sm border-0 h-100 p-3">
                <div class="app-card-body px-2 py-2">
                    <small class="text-muted text-uppercase">Image</small>
                    <br>
                    <br>
                    <input type="file" name="image" class="form-control">
                    @error('image')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-12 p-3">
            <button type="submit" class="btn btn-primary text-white">Save</button>
        </div>
    </form>
    
@endsection
