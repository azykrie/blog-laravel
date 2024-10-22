<div class="card mb-4">
    <div class="card-header">Categories</div>
    <div class="card-body">
        <form action="{{ route('blog') }}" method="GET">
            <div class="input-group">
                <select class="form-control" name="category" onchange="this.form.submit()">
                    <option value="">Select Category</option>
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}" {{ request('category') == $cat->id ? 'selected' : '' }}>
                            {{ $cat->name_category }}
                        </option>
                    @endforeach
                </select>
            </div>
        </form>
    </div>
</div>
