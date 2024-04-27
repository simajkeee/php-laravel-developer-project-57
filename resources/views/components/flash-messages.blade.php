@if(session('success'))
    <div class="alert text-green-500" role="alert">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert text-red-500" role="alert">
        {{ session('error') }}
    </div>
@endif

@if(session('warning'))
    <div class="alert text-orange-500" role="alert">
        {{ session('warning') }}
    </div>
@endif

@if(session('info'))
    <div class="alert text-blue-500" role="alert">
        {{ session('info') }}
    </div>
@endif
