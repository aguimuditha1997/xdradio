@extends('layouts.default')

@section('content')

<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
		</div>
	</div>
</div>
<div class="page-inner mt--5">
	<div class="row">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Edit Slide </div>
                        <a href="{{route('slide.index')}}" class="btn btn-warning btn-sm ml-auto"> <i class="fa-solid fa-rotate-left"> </i> Back</a>
					</div>
				</div>
				<div class="card-body">
                    <form method="post" action="{{route('slide.update',$slide->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="judul">Judul Slide </label>
                            <input type="text" name="judul_slide" class="form-control" id="text" value="{{$slide->judul_slide}}" >
                        </div>
                        <div class="form-group">
                            <label for="link">Link </label>
                            <input type="text" name="link" class="form-control" id="text" value="{{$slide->link}}" >
                        </div>
                        <div class="form-group">
                            <label for="status">Status </label>
                            <select  name="status" class="form-control">
                                <option value="1" {{$slide->status == '1' ? 'Selected' : ''}}>
                                    Publish
                                </option>
                                <option value="0" {{$slide->status == '0' ? 'Selected' : ''}}>Draf</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="gambar">Gambar Slide </label>
                                <input type="file"  name="gambar_slide" class="form-control">
                                <br>
                                <label for="gambar">Gambar Saat Ini </label> <br>
                                <img src=" {{ asset('upload/'. $slide->gambar_slide)}}" width="100">
                            </div>
                            <button class="btn btn-primary btn-sm" type="submit">Save</button>
                            <button class="btn btn-danger btn-sm" type="reset">Reset</button>
                        </div>
                    </form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
