<tr x-data="{ expanded: false, selecting: false }"
    @mousedown="selecting = false"
    @mouseup="setTimeout(() => { if (!selecting) expanded = !expanded }, 0)"
    @selectstart="selecting = true"
    :class="expanded ? 'bg-blue-100 border-l-4 border-blue-400' : ''"
    class="border-b cursor-pointer transition-colors duration-300 select-none">

    <td class="py-2 px-4 text-gray-600">{{ $category->id }}</td>
    <td class="py-2 px-4 font-medium">{{ $category->name }}</td>
    <td class="py-2 px-4 text-gray-800">{{ $category->slug }}</td>
    <td class="py-2 px-4 text-gray-500 max-w-xl select-text">
        <div class="overflow-hidden transition-all duration-600 ease-in-out"
             :class="expanded ? 'max-h-40' : 'max-h-6'">
            <p class="truncate" :class="expanded ? 'whitespace-normal' : 'truncate'">
                {{ $category->description }}
            </p>
        </div>
    </td>
</tr>
