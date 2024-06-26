<x-app-layout>
    <div class="container-fluid">
        <div class="row mx-lg-5 mx-md-0">
            <x-breadcrumb :links="[
                ['url' => route('manufactories.index'), 'label' => 'Manufactories'],
                ['url' => route('manufactories.create'), 'label' => 'Create Manufactory'],
            ]" />
        </div>
        <div class="row justify-content-center mx-1 px-1">
            <div class="col-md-12 col-lg-11 col-sm-12">
                <div class="px-4 py-5 bg-white shadow-sm mb-5 rounded">
                    <form action="{{ route('manufactories.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" name="address" id="address" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="website">Website:</label>
                            <input type="url" name="website" id="website" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Create Manufactory</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
