@extends('admin.admin_master')
@section('admin')  
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Editar Perfil</h4>
                        <form action="">
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-form-label">Nome</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="name" type="text" value="{{$editData->name}}" id="name">
                                </div>
                            </div> 
                            <div class="row mb-3">
                                <label for="username" class="col-sm-2 col-form-label">Nome de usuário</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="username" type="text" value="{{$editData->username}}" id="username">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="email" type="email" value="{{$editData->email}}" id="email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="profile_image" class="col-sm-2 col-form-label">Imagem do Perfil</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="profile_image" type="file" id="profile_image">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="profile_image" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <img class="avatar-lg" src="{{asset('backend/assets/images/small/img-5.jpg')}}" alt="Card image cap">                                  
                                </div>
                            </div>
                            <input type="submit" class="btn btn-info waves-effect waves-light" value="Editar Perfil">
                        </form>                       
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
</div>
@endsection