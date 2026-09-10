@if(session('success'))
    <div class="mb-5 bg-green-100 text-green-700 px-4 py-3 rounded-lg text-sm">
        {{ session('success') }}
    </div>
@endif

@if(session('deleted'))
    <div class="mb-5 bg-red-50 text-red-600 px-4 py-3 rounded-lg text-sm">
        {{ session('deleted') }}
    </div>
@endif

@if(session('error'))
    <div class="mb-5 bg-red-50 text-red-600 px-4 py-3 rounded-lg text-sm">
        {{ session('error') }}
    </div>
@endif