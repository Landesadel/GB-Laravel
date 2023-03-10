@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Sources List</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <a href="{{ route('admin.source.create') }}" class="btn btn-sm btn-outline-secondary">Add Source</a>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#ID</th>
                <th>Name</th>
                <th>Categories</th>
                <th>Url</th>
                <th>Date added</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse($sourceList as $source)
                <tr>
                    <td>{{ $source->id }}</td>
                    <td>{{ $source->name }}</td>
                    <td>{{ $source->categories->map(fn($item) => $item->title)->implode(", ") }}</td>
                    <td>{{ $source->url }}</td>
                    <td>{{ $source->created_at }}</td>
                    <td>
                        <a href="{{ route('admin.source.edit', ['source' => $source]) }}">change</a>
                        <a href="javascript:;" class="delete" rel="{{ $source->id }}" style="color: red;">delete</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">No entries</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {{ $sourceList->links() }}
    </div>
@endsection

@push("js")
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            let elements = document.querySelectorAll(".delete");
            elements.forEach(function(elem, key) {
                elem.addEventListener("click", function() {
                    const id = this.getAttribute('rel');
                    if(confirm(`Confirm delete source with #id = ${id}`)) {
                        send(`/admin/source/${id}`).then(() => {
                            location.reload();
                        });
                    }
                });
            });
        });
        async function send(url) {
            let response = await fetch(url, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            });
            let result = await response.json();
            return result.ok;
        }
    </script>
@endpush
