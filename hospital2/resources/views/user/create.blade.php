@extends('template.layout')
@push('title')
create
@endpush
@section('content')
<br>
<h1>Fill the patients details</h1>
<hr><br>
<form action="{{route('hospital.store')}}" method="post">
    @csrf
    <div class="mb-3">
      <label  class="form-label">Patient Name</label>
      <input type="text" class="form-control" name="name">
    </div>
    <div class="mb-3">
      <label  class="form-label">Patient Mobile No</label>
      <input type="text" class="form-control" name="mobile">
    </div>
    <div class="mb-3">
      <label  class="form-label">Patient disease</label>
      <input type="text" class="form-control" name="disease">
    </div>
    <div class="mb-3">
      <label  class="form-label">Patient Medicine</label>
      <textarea name="medicine"  id="editor" class="form-control" cols="30" rows="3"></textarea>
    </div>
    <script>
                        ClassicEditor
                                .create( document.querySelector( '#editor' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
    </script>
    <div class="mb-3">
      <label  class="form-label">Slug</label>
      <input type="text" class="form-control" name="slug">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection