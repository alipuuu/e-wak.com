@extends('layout.v_template')
@section('content')
<section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Track</h3>
            </div>
                <div class="text-center">
                <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah">Tambah Data</a>
                </div>
            <div class="box-body">
            <table id="table-datatables" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th class="text-center">Source ID</th>
                <th class="text-center">Dest ID</th>
                <th class="text-center">Crew</th>
                <th class="text-center">Lat</th>
                <th class="text-center">Longitude</th>
                <th class="text-center">Received</th>
                <th class="text-center">Message</th>
                <th class="text-center">Created At</th>
                <th class="text-center">Updated At</th>
                <th class="text-center">Action</th>
              </tr>
              </thead>
              <tbody>
                <?php $no=1; ?>
                @foreach ($track as $data)
                    <tr>
                        <td class="text-center">{{ $data->source_id}}</td>
                        <td class="text-center">{{ $data->dest_id}}</td>
                        <td class="text-center">{{ $data->crew}}</td>
                        <td class="text-center">{{ $data->lat}}</td>
                        <td class="text-center">{{ $data->longitude}}</td>
                        <td class="text-center">{{ $data->received}}</td>
                        <td class="text-center">{{ $data->message}}</td>
                        <td class="text-center">{{ $data->created_at}}</td>
                        <td class="text-center">{{ $data->updated_at}}</td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-success" data-toggle="modal" data-target="#detail{{ $data->id}}">Detail</a>
                            <a class="btn btn-sm btn-warning" data-toggle="modal" data-target="#edit{{ $data->id}}">Edit</a>
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
                        <form action="/track/insert_track" method="GET" enctype="multipart/form-data">
                            @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Source ID</label>
                                <input name="source_id" class="form-control" value="{{old('source_id')}}">
                                <div class="text-danger">
                                    @error('source_id')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Dest ID</label>
                                <input name="dest_id" class="form-control" value="{{old('dest_id')}}">
                                <div class="text-danger">
                                    @error('dest_id')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Crew</label>
                                <input name="crew" class="form-control" value="{{old('crew')}}">
                                <div class="text-danger">
                                    @error('crew')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Lat</label>
                                <input name="lat" class="form-control" value="{{old('lat')}}">
                                <div class="text-danger">
                                    @error('lat')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Longitude</label>
                                <input name="longitude" class="form-control" value="{{old('longitude')}}">
                                <div class="text-danger">
                                    @error('longitude')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Received</label>
                                <input name="received" class="form-control" value="{{old('received')}}">
                                <div class="text-danger">
                                    @error('received')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <input name="message" class="form-control" value="{{old('message')}}">
                                <div class="text-danger">
                                    @error('message')
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
                @foreach ($track as $data)
                  <div class="modal fade" id="edit{{ $data->id}}">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h5 class="modal-title">EDIT DATA {{ $data->id}}</h5>
                        </div>
                        <form action="/track/update_track" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Source ID</label>
                                    <input name="source_id" class="form-control" value="{{$data->source_id}}">
                                    {{-- id track --}}
                                    <input type="hidden" name="id" class="form-control" value="{{$data->id}}">
                                    {{-- id track --}}
                                    <div class="text-danger">
                                        @error('source_id')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            <div class="form-group">
                                <label>Dest ID</label>
                                <input name="dest_id" class="form-control" value="{{$data->dest_id}}">
                                <div class="text-danger">
                                    @error('dest_id')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Crew</label>
                                <input name="crew" class="form-control" value="{{$data->crew }}">
                                <div class="text-danger">
                                    @error('crew')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>
                             <div class="form-group">
                                <label>Lat</label>
                                <input name="lat" class="form-control" value="{{$data->lat }}">
                                <div class="text-danger">
                                    @error('lat')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Longitude</label>
                                <input name="longitude" class="form-control" value="{{$data->longitude }}">
                                <div class="text-danger">
                                    @error('longitude')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Received</label>
                                <input name="received" class="form-control" value="{{$data->received }}">
                                <div class="text-danger">
                                    @error('received')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <input name="message" class="form-control" value="{{$data->message }}">
                                <div class="text-danger">
                                    @error('message')
                                    {{$message}}
                                    @enderror
                                </div>
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
                 @foreach ($track as $data)
                  <div class="modal modal-success fade" id="detail{{ $data->id}}">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Detail Data {{ $data->id}}</h4>
                        </div>
                          <div class="modal-body">
                           <p>Source ID : {{ $data->source_id}}</p>
                           <p>Dest ID : {{ $data->dest_id}}</p>
                           <p>Crew : {{ $data->crew}}</p>
                           <p>Lat : {{ $data->lat}}</p>
                           <p>Longitude : {{ $data->longitude}}</p>
                           <p>Received : {{ $data->received}}</p>
                           <p>Message : {{ $data->message}}</p>
                          </div>
                      </div>
                    </div>
                  </div>
                @endforeach
                @foreach ($track as $data)
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
                          <a href="/track/delete_track/{{ $data->id}}" class="btn btn-outline pull-left">Yes</a>
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
