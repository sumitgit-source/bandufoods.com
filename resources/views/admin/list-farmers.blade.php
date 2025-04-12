@extends('layouts.admin')


@section('content')
    <h1 class="app-page-title">List Farmers</h1>
    <div class="tab-content" id="orders-table-tab-content">
        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
            <div class="app-card app-card-orders-table shadow-sm mb-5">
                <div class="app-card-body">
                    <div class="table-responsive">
                        <table class="table app-table-hover mb-0 text-left">
                            <thead>
                                <tr>
                                    <th class="cell">SN</th>
                                    <th class="cell">Name</th>
                                    <th class="cell">Address</th>
                                    <th class="cell">Contact</th>
                                    <th class="cell">Email</th>
                                    <th class="cell">Created at</th>
                                    {{-- <th class="cell">Manage</th> --}}
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php $index = 0; ?>
                                @foreach ($farmers as $farmer)
                                <?php $index = $index + 1; ?>
                                <tr>
                                    <td class="cell">{{ $index }}</td>
                                    <td class="cell">
                                        {{ $farmer->name }}
                                    </td>
                                    <td class="cell"><small class="fw-bold">{{ $farmer->address }}</small></td>
                                    <td class="cell"><small> {{ $farmer->phone }} </small></td>
                                    <td class="cell"><small> {{ $farmer->email }} </small></td>
                                    <td class="cell"><small>{{ $farmer->created_at->diffForHumans()}}</small></td>
                                    {{-- <td class="cell"><a class="btn-sm app-btn-secondary"
                                            href="{{ route('editProduct', ['product' => $product]) }}">Edit</a></td> --}}
                                </tr>
                                
                                    
                                @endforeach


                            </tbody>
                        </table>
                    </div><!--//table-responsive-->

                </div><!--//app-card-body-->
            </div><!--//app-card-->
            

        </div><!--//tab-pane-->
    </div>
@endsection
