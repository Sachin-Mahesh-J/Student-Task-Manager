{{--
<aside class="w-64 bg-base-200 p-4 border-r border-base-300 shadow-inner">
    <ul class="menu space-y-2 text-base-content font-medium">
        <li>
            <a href="{{ route('subjects.index') }}"
               class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-primary hover:text-primary-content transition-all duration-200">
                📚 <span>Subjects</span>
            </a>
        </li>
        <li>
            <a href="{{ route('tasks.index') }}"
               class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-primary hover:text-primary-content transition-all duration-200">
                📝 <span>Tasks</span>
            </a>
        </li>
    </ul>
</aside>
--}}
{{-- Sidebar --}}
<aside class="border-2  border-b-blue-950 w-50 bg-blue-300 p-4 space-y-4">
    <nav class="">
        <ul class="space-y-2">
            <li><a href="{{url('/')}}" class="block px-4 py-2 rounded hover:bg-blue-400">🏠 Dashboard</a></li>
            <li><a href="{{ url('subjects') }}" class="block px-4 py-2 rounded hover:bg-blue-400">📚 Subjects</a></li>
            <li><a href="{{ url('tasks') }}" class="block px-4 py-2 rounded hover:bg-blue-400">📝 Tasks</a></li>

        </ul>
    </nav>
</aside>
