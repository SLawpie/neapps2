<x-guest-layout>

  <div class="flex h-screen items-center justify-center">
    <a href="{{ route('login') }}">
      <div 
        class="transition ease-in-out delay-150 text-6xl sm:text-9xl hover:scale-110 text-gray-200 dark:text-slate-700 duration-300 engraved">
        {{config('app.name')}}&sup2;
      </div>
    </a>
  </div>
  
</x-guest-layout>
