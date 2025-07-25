<x-admin.layout>
    <x-slot:title>Категории</x-slot:title>
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Список категорий</h1>
        @if ($categories->isEmpty())
            <p class="text-gray-600">Категорий нет.</p>
        @else
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow">
                    <thead>
                    <tr class="bg-gray-100 border-b">
                        <th class="py-2 px-4 text-left">ID</th>
                        <th class="py-2 px-4 text-left">Название</th>
                        <th class="py-2 px-4 text-left">Slug</th>
                        <th class="py-2 px-4 text-left">Описание</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($categories as $category)
                        @include('admin.categories.row', ['category' => $category])
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</x-admin.layout>
