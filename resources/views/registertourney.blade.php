@extends('layouts.app')

@section('content')
<div class="container">
    <p style="margin-left:-20px;">Data Team</p> <br>
    
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Nama Team</label>
      <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Email</label>
      <input type="form-control" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <br>
    <p style="margin-left:-20px;">Data Member</p> <br>
    
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Nama Ketua</label>
      <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Anggota1</label>
      <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Anggota2</label>
      <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Anggota3</label>
      <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Anggota4</label>
      <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
    </div>

</div>
@endsection