<div class="card mb-4">
    <div class="card-header">Categories</div>
    <div class="card-body">
        <div class="row">
            @php
                // Membagi kategori menjadi dua bagian
                $chunks = $category->chunk(ceil($category->count() / 2));
            @endphp

            <!-- Kolom pertama -->
            <div class="col-sm-6">
                <ul class="list-unstyled mb-0">
                    @foreach ($chunks[0] as $cat)
                        <li><a href="{{ route('category.show', $cat->id) }}">{{ $cat->name_category }}</a></li>
                    @endforeach
                </ul>
            </div>

            <!-- Kolom kedua -->
            <div class="col-sm-6">
                <ul class="list-unstyled mb-0">
                    @if (isset($chunks[1])) <!-- Pastikan ada data untuk kolom kedua -->
                        @foreach ($chunks[1] as $cat)
                            <li><a href="{{ route('category.show', $cat->id) }}">{{ $cat->name_category }}</a></li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
