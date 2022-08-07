@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data User') }}</div>
                <div class="card-body">
                    <form action="create-user" method="post">
                        @csrf
                        <div class="form-group row" style="margin:20px;">
                            <label class="control-label col-sm-2" for="username">Username</label>
                            <div class="col-sm-10">
                                <input type="text" name="username" class="form-control" id="username" placeholder="username">
                            </div>
                        </div>
                        <div class="form-group row" style="margin:20px;">
                            <label class="control-label col-sm-2" for="password">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group row" style="margin:20px;">
                            <label class="control-label col-sm-2" for="username">Nama Pegawai</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama_pegawai" class="form-control" id="username" placeholder="Nama Pegawai">
                            </div>
                        </div>
                        <div class="form-group row" style="margin:20px;">
                            <label class="control-label col-sm-2" for="username">Hp Pegawai</label>
                            <div class="col-sm-10">
                                <input type="number" name="hp_pegawai" class="form-control" id="username" placeholder="Hp Pegawai">
                            </div>
                        </div>
                        <div class="form-group row" style="margin:20px;">
                            <label class="control-label col-sm-2" for="alamat_pegawai">Alamat</label>
                            <div class="col-sm-10">
                                <textarea name="alamat_pegawai" class="form-control" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group row" style="margin:20px;">
                            <label class="control-label col-sm-2" for="id_bagian">Bagian</label>
                            <div class="col-sm-10">
                                <select name="id_bagian" id="id_bagian" class="form-control">
                                    @foreach($databagian as $item)
                                        <option value="{{$item->id_bagian}}">{{$item->nama_bagian}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <input type="submit" style="margin:20px;" value="Submit" class="btn btn-primary col-md-2">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
