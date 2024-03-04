@if (Auth::check())
    <script>window.location = "{{ route('dashboard') }}";</script>
@else
    <script>window.location = "{{ route('register') }}";</script>
@endif
