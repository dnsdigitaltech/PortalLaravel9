@extends('admin.admin_master')
@section('admin')  
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title pb-4">Alterar Senha</h4>

                        @if (count($errors))
                            @foreach ($errors->all() as $error)
                                <p class="alert alert-danger alert-dismissable fade show">{{$error}}</p>                                
                            @endforeach
                        @endif

                        <form method="POST" action="{{route('update.password')}}">
                            @csrf
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-form-label">Senha antiga</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="oldpassword" type="password" value="" id="oldpassword">
                                </div>
                            </div> 
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-form-label">Nova Senha</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="newpassword" type="password" value="" id="newpassword">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-form-label">Confirma Senha</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="confirm_password" type="password" value="" id="confirm_password">
                                </div>
                            </div>
                            <input type="submit" class="btn btn-info waves-effect waves-light" value="Alterar senha">
                        </form>                       
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
</div>
@endsection