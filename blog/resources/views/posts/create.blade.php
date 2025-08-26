@extends('layout.app')

@section ('content') @endsection

<form >
    <div class="container mx-auto mt-3 border border-black border-1">

        <div class="mb-3">
            <label for="TitleOfForm" class="form-label fw-bold border border-3" >Title</label>
            <input id="TitleOfForm" type="text" class="form-control" placeholder ="Enter Title">

    </div>

    <div class="mb-3">
        <label class="form-label fw-bold border border-3" for ="DescriptionOfForm" >Description</label>
        <textarea id="DescriptionOfForm" class="form-control" placeholder="Enter Description"></textarea>
    </div>


    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Disabled select menu</label>
      <select id="disabledSelect" class="form-select">
        <option value="1">Ahmed</option>
        <option value="2">Ali</option>
      </select>
    </div>
    <button type="button" class="btn btn-success mb-3">Submit</button>

    </div>
</form>