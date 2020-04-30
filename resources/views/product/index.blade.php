@extends('layouts.app')

@section('content')  <div class="row">
    <h2>CRUD WITH LARAVEL AND AJAX</h2>
    <div class="table table-responsive">
        <table class="table table-bordered" id="table">
            <tr>
                <th width="150px">No</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created At</th>
                <th class="text-center" width="150px">
                    <a href="#" class="create-modal btn btn-success btn-sm">
                        <i class="fas fa-plus"></i>
                    </a>
                </th>
            </tr>
            @csrf
            @php
            $no = 1;
            @endphp
            @foreach ($product as $item)
            <tr class="product{{$item->id}}">
                <td>{{$no++}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->body}}</td>
                <td>{{$item->create_at}}</td>
                <td>
                    <a href="#" class="show-modal btn btn-info btn-sm" data-id="{{$item->id}}"
                        data-title="{{$item->title}}" data-body="{{$item->body}}"
                        data-craete="{{$item->create_at}}">
                        <i class="fas fa-eye"></i>
                    </a> |
                    <a href="#" class="edit-modal btn btn-warning btn-sm" data-id="{{$item->id}}"
                        data-title="{{$item->title}}" data-body="{{$item->body}}">
                        <i class="fas fa-pencil-alt"></i>
                    </a> |
                    <a href="#" class="delete-modal btn btn-danger btn-sm" data-id="{{$item->id}}"
                        data-title="{{$item->title}}" data-body="{{$item->body}}">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

{{-- Modal Create Post --}}
<div id="create" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
            </div>
            <div class="modal-body">
                <form role="form" class="form-horizontal">
                    <div class="form-group row add">
                        <label for="title" class="control-label col-sm-2">Nama Produk: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="title" id="title" placeholder="Your product name" required>
                            <p class="error text-center alert alert-danger" hidden></p>
                        </div>
                    </div>
                    <div class="form-group row add">
                        <label for="body" class="control-label col-sm-2">Keterangan Produk: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="body" id="body" placeholder="Your product descr" required>
                            <p class="error text-center alert alert-danger hidden" hidden></p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-warning" type="button" id="add">
                    <span> <i class="fas fa-save"></i> Save </span>
                </button>
                <button class="btn btn-danger" type="button" data-dismiss="modal">
                    <span> <i class="fas fa-window-close"></i> Cancel </span>
                </button>
            </div>
        </div>
    </div>

</div>



{{-- ///\\\ --}}
    
@endsection