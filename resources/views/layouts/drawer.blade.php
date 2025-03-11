<aside class="control-sidebar control-sidebar-dark">
    <div class="p-3 text-white">
        <h5 class="text-center">{{ auth()->user()->name }}</h5><br><br>  <!-- Display Logged-in Username -->
        <h6 class="text-center">ইমেইল: {{ auth()->user()->email }}</h6><br><br>
        <h6 class="text-center">মোবাইল: {{ auth()->user()->mobile }}</h6><br><br>

        <div class="text-center">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger btn-sm">লগ আউট</button>
            </form>
        </div>

    </div>
</aside>
