
@if (session('success-message'))
    <div {{ $attributes }}>
        <div class="font-medium text-green-600">
            {{ __('Perfetto!') }}
        </div>

        <ul class="mt-3 list-disc list-inside text-sm text-green-600">
            {{ session('success-message') }}
        </ul>
    </div>
@endif
