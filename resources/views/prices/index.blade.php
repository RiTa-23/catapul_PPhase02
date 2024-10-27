<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('登録した値段一覧') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          @foreach ($prices as $price)
            @if ($price->user->id == auth()->id())
              <div class="mb-4 p-4 bg-gray-100 dark:bg-gray-700 rounded-lg">
                <p class="text-gray-800 dark:text-gray-300">{{ $price->item->name }}:{{ $price->price }}円</p>
                <p class="text-gray-600 dark:text-gray-400 text-sm">{{ $price->store->name }}</p>
                <div class="flex mt-4">
                  <a href="{{ route('prices.edit', $price) }}" class="text-blue-500 hover:text-blue-700 mr-2">編集</a>
                  <form action="{{ route('prices.destroy', $price) }}" method="POST" onsubmit="return confirm('本当に削除しますか？');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:text-red-700">削除</button>
                  </form>
                </div>
              </div>
            @endif
          @endforeach
        </div>
      </div>
    </div>
  </div>

</x-app-layout>