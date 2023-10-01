@extends('layouts.master')
@section('title') @lang('translation.Starter_Page') @endsection

@section('content')
    @component('components.breadcrumb')
    @slot('li_1') Utility @endslot
    @slot('title') Starter Page @endslot
    @endcomponent

    <a href="" class="btn btn-primary">CREAR</a>

        <button type="button" class="btn btn-success waves-effect waves-light mb-2 me-2" data-bs-toggle="modal" data-bs-target=".add-new-order">
            <i class="mdi mdi-plus me-1"></i> Agregar Comercio</button>


    <table class="table mt-2">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Código</th>
          <th scope="col">Descripción</th>
          <th scope="col">Cantidad</th>
          <th scope="col">Precio</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
             <form action="" method="POST">
              <a href="" class="btn btn-info">Editar</a>
                  @csrf
                  @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
             </form>
            </td>
        </tr>
      </tbody>
    </table>




    @endsection
@section('script')
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
