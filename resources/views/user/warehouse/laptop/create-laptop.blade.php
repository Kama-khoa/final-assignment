<x-app-layout>
    <div class="container-fluid">
        <div class="row mx-lg-5 mx-md-0">
            <x-breadcrumb :links="[
                ['url' => route('laptops.index'), 'label' => 'Laptops'],
                ['url' => route('laptops.create'), 'label' => 'Create Laptop'],
            ]" />
        </div>
        <div class="row justify-content-center mx-1 px-1">
            <div class="col-md-12 col-lg-11 col-sm-12">
                <div class="px-4 py-5 bg-white shadow-sm mb-5 rounded">
                    <form action="{{ route('laptops.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="price">Price:</label>
                            <input type="number" name="price" id="price" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity:</label>
                            <input type="number" name="quantity" id="quantity" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="status">Status:</label>
                            <select name="status" id="status" class="form-control" required>
                                <option value="Còn hàng">Còn hàng</option>
                                <option value="Hết hàng">Hết hàng</option>
                                <option value="Ngưng kinh doanh">Ngưng kinh doanh</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="manufactory_id">Manufactory:</label>
                            <select name="manufactory_id" id="manufactory_id" class="form-control" required>
                                @foreach($manufactories as $manufactory)
                                    <option value="{{ $manufactory->id }}">{{ $manufactory->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Category:</label>
                            <select name="category_id" id="category_id" class="form-control" required>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Create Laptop</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>