@extends('admin.admin_master')
@section('admin')  
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title pb-4">Slider Página Principal</h4>
                        <form method="POST" action="{{route('store.profile')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="title" class="col-sm-2 col-form-label">Título</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="title" type="text" value="{{$homeSlide->title}}" id="title">
                                </div>
                            </div> 
                            <div class="row mb-3">
                                <label for="short_title" class="col-sm-2 col-form-label">Texto curto</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="short_title" type="text" value="{{$homeSlide->short_title}}" id="short_title">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="video_url" class="col-sm-2 col-form-label">Vídeo URL</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="video_url" type="text" value="{{$homeSlide->video_url}}" id="video_url">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="home_slide" class="col-sm-2 col-form-label">Imagem do Slider</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="profile_image" type="file" id="image">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <img id="showImage" class="avatar-lg" src="{{(!empty($homeSlide->home_slide))? url('upload/home_slide/'.$homeSlide->home_slide):url('upload/no_image.jpg')}}" alt="">                                  
                                </div>
                            </div>
                            <input type="submit" class="btn btn-info waves-effect waves-light" value="Editar Slide">
                        </form>                       
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });
    });
</script>
@endsection