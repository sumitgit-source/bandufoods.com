@extends('layouts.admin')


@section('content')
    <h1 class="app-page-title">List Products</h1>

    <div class="tab-content" id="orders-table-tab-content">
        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
            <div class="app-card app-card-orders-table shadow-sm mb-5">
                <div class="app-card-body">
                    <div class="table-responsive">
                        <table class="table app-table-hover mb-0 text-left">
                            <thead>
                                <tr>
                                    <th class="cell">SN</th>
                                    <th class="cell">Image</th>
                                    <th class="cell">Product Name</th>
                                    <th class="cell">Info</th>
                                    <th class="cell">Created at</th>
                                    <th class="cell">Manage</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php $index = 0; ?>
                                @foreach ($products as $product)
                                <?php $index = $index + 1; ?>
                                <tr>
                                    <td class="cell">{{ $index }}</td>
                                    <td class="cell">
                                        <img style="width: 50px; aspect-ratio:2/2; object-fit:cover; border-radius: 10px" src="/storage/{{ $product->image }}" alt="">
                                    </td>
                                    <td class="cell"><small class="fw-bold">{{ Str::limit($product->title, 50) }}</small></td>
                                    <td class="cell"><small>{{ Str::limit($product->description, 70) }}</small></td>
                                    <td class="cell"><small>{{ $product->created_at->diffForHumans()}}</small></td>
                                    <td class="cell"><a class="btn-sm app-btn-secondary"
                                            href="{{ route('editProduct', ['product' => $product]) }}">Edit</a></td>
                                </tr>
                                
                                    
                                @endforeach


                            </tbody>
                        </table>
                    </div><!--//table-responsive-->

                </div><!--//app-card-body-->
            </div><!--//app-card-->
            <nav class="app-pagination">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav><!--//app-pagination-->

        </div><!--//tab-pane-->
    </div>
@endsection
