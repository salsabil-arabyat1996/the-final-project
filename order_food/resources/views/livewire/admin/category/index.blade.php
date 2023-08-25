<div>
    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Category Delete</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="destroyCategory">
                <div class="modal-body">
                <h6>Are you sure you want to delete this data? </h6>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit"  data-bs-dismiss="modal" class="btn btn-primary">Yes.Delete </button>
                </div>
            </form>
          </div>
        </div>
    </div>



  <div class="row">
     <div class="col-md-12">

        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        <div class="card">
            <div class="card-header">
                <h3>Category
                    <a href="{{ route('create') }}" class="btn btn-primary btn-sm float-end">Add Category</a>
                </h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    @foreach ($categories as $Category)


                    <tr>
                        <td>{{ $Category->id}}</td>
                        <td>{{ $Category->name}}</td>
                        <td>
                            <a href="{{ route('admin.category.edit', ['category' => $Category->id]) }}" class="btn btn-success">Edit</a>
                            {{-- <a href="{{ route('admin/category/'. $Category->id.'/edit') }}" class="btn btn-success">Edit</a> --}}

                            <a href="#" wire:click="deleteCategory ({{$Category->id}})"data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger">Delete</a>

                        </td>
                    </tr>


                    @endforeach
                </table>
                <div>
                    {{$categories->links()}}
                </div>

            </div>

        </div>
     </div>
  </div>
</div>

{{-- @push('script')

 <script>

window.addEventlistener('close-modal',event=>{

    $('#deleteModal').modal('hide');

});
    </script>

@endpush --}}
