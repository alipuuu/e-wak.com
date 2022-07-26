@extends('layout.v_template')
@section('content')
<section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Saldo</h3>
            </div>
                <div class="text-center">
                <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah">Tambah Data</a>
                </div>
            <div class="box-body">
            <table id="table-datatables" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th class="text-center">User</th>
                <th class="text-center">Rekening</th>
                <th class="text-center">Saldo</th>
                <th class="text-center">Created At</th>
                <th class="text-center">Updated At</th>
                <th class="text-center">Action</th>
              </tr>
              </thead>
              <tbody>
                <?php $no=1; ?>
                @foreach ($saldo as $data)
                    <tr>
                        <td class="text-center">{{ $data->pengguna}}</td>
                        <td class="text-center">{{ $data->rekening}}</td>
                        <td class="text-center">{{ $data->saldo}}</td>
                        <td class="text-center">{{ $data->created_at}}</td>
                        <td class="text-center">{{ $data->updated_at}}</td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-success" data-toggle="modal" data-target="#detail{{ $data->id}}">Detail</a>
                            <a class="btn btn-sm btn-warning" data-toggle="modal" data-target="#update{{ $data->id}}">Update</a>
                            <a class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{ $data->id}}">Delete</a>
                        </td>
                    </tr>
                @endforeach
                <div class="modal fade" id="tambah">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h5 class="modal-title">TAMBAH DATA</h5>
                        </div>
                        <form action="/saldo/insert_saldo/" method="GET" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                            <div class="form-group">
                                <label>User</label>
                                <input name="pengguna" class="form-control" value="{{old('pengguna')}}">
                                <div class="text-danger">
                                    @error('pengguna')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Rekening</label>
                                <input name="rekening" class="form-control" value="{{old('rekening')}}">
                                <div class="text-danger">
                                    @error('rekening')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Saldo</label>
                                <input name="saldo" class="form-control" value="{{old('saldo')}}">
                                <div class="text-danger">
                                    @error('saldo')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit">Save Data</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
                 @foreach ($saldo as $data)
                  <div class="modal fade" id="update{{ $data->id}}">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h5 class="modal-title">UPDATE DATA {{ $data->id}}</h5>
                        </div>
                        <form action="/saldo/update_saldo" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                            <div class="form-group">
                                <label>User </label>
                                <input name="pengguna" class="form-control" value="{{$data->pengguna}}">
                                {{-- id saldo --}}
                                <input type="hidden" name="id" class="form-control" value="{{$data->id}}">
                                {{-- id saldo --}}
                                <div class="text-danger">
                                    @error('pengguna')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Rekening </label>
                                <input name="rekening" class="form-control" value="{{$data->rekening}}">
                                <div class="text-danger">
                                    @error('rekening')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Saldo</label>
                                <input name="saldo" class="form-control" value="{{$data->saldo }}">
                                <div class="text-danger">
                                    @error('saldo')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-footer">
                            <button class="btn btn-primary" type="submit">Update Data</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>
                @endforeach
                @foreach ($saldo as $data)
                  <div class="modal modal-success fade" id="detail{{ $data->id}}">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Detail Data {{ $data->id}}</h4>
                        </div>
                          <div class="modal-body">
                           <p>Pengguna : {{ $data->pengguna}}</p>
                           <p>Rekening : {{ $data->rekening}}</p>
                           <p>Saldo : {{ $data->saldo}}</p>
                          </div>
                      </div>
                    </div>
                  </div>
                @endforeach
                @foreach ($saldo as $data)
                  <div class="modal modal-danger fade" id="delete{{ $data->id}}">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">{{ $data->id}}</h4>
                        </div>
                          <div class="modal-body">
                           <p>Apakah anda yakin ingin menghapus data ini???</p>
                          </div>
                        <div class="modal-footer">
                          <a href="/saldo/delete_saldo/{{ $data->id}}" class="btn btn-outline pull-left">Yes</a>
                          <a class="btn btn-outline" data-dismiss="modal">No</a>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
@endsection
