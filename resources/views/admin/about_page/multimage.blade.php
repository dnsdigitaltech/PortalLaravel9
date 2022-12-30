@extends('admin.admin_master')
@section('admin')  
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title pb-4">Múltiplas Imagens</h4>
                        <form method="POST" action="{{route('update.about')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="multi_image" class="col-sm-2 col-form-label">Imagem Multi Sobre</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="multi_image" type="file" id="image">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <img id="showImage" class="avatar-lg" src="{{url('upload/no_image.jpg')}}" alt="">                                  
                                </div>
                            </div>
                            <input type="submit" class="btn btn-info waves-effect waves-light" value="Adicionar Múltiplas Imagens">
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