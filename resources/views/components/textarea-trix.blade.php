@props(['id', 'name', 'value'])
<input id="{{ $id }}" type="hidden" name="{{ $name }}" value="{{ $value }}">
<trix-editor input="{{ $id }}"
class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm min-h-80">
</trix-editor>
