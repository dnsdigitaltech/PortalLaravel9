@extends('admin.admin_master')
@section('admin')  
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title pb-4">Página Sobre</h4>
                        <form method="POST" action="{{route('update.about', $aboutPage->id)}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$aboutPage->id}}">
                            <div class="row mb-3">
                                <label for="title" class="col-sm-2 col-form-label">Título</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="title" type="text" value="{{$aboutPage->title}}" id="title">
                                </div>
                            </div> 
                            <div class="row mb-3">
                                <label for="short_title" class="col-sm-2 col-form-label">Texto curto</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="short_title" type="text" value="{{$aboutPage->short_title}}" id="short_title">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="short_description" class="col-sm-2 col-form-label">Descrição curta</label>
                                <div class="col-sm-10">
                                    <textarea required="" name="short_description" class="form-control" rows="5">{{$aboutPage->short_description}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="long_description" class="col-sm-2 col-form-label">Descrição</label>
                                <div class="col-sm-10">
                                    <textarea id="elm1" name="long_description">{{$aboutPage->long_description}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="about_image" class="col-sm-2 col-form-label">Imagem Sobre</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="about_image" type="file" id="image">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <img id="showImage" class="avatar-lg" src="{{(!empty($aboutPage->about_image))? url($aboutPage->about_image):url('upload/no_image.jpg')}}" alt="">                                  
                                </div>
                            </div>
                            <input type="submit" class="btn btn-info waves-effect waves-light" value="Editar Página Sobre">
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