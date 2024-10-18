<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('モード選択') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          <a href="{{ route('categories.index') }}" class="text-blue-500 hover:text-blue-700 mr-2">カテゴリ選択に戻る</a>
          
             <div class="mb-4 p-4 bg-gray-100 dark:bg-gray-700 rounded-lg">
                <a href="あとでかく" class="text-blue-500 hover:text-blue-700">検索</a>
              </div>

              <div class="mb-4 p-4 bg-gray-100 dark:bg-gray-700 rounded-lg">
                <a href="あとでかく" class="text-blue-500 hover:text-blue-700">値段登録</a>
              </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
