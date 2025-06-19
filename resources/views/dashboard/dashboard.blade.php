@extends('layouts.app')

@section('content')
    <div class="ml-64 p-8">
        <h1 class="text-2xl font-bold mb-6">Мои проекты</h1>

        <div class="flex justify-end mb-6">
            <div class="flex space-x-4">
                <button class="bg-white border px-4 py-2 rounded hover:bg-gray-100">
                    <i class="fas fa-eye mr-2"></i> Вид
                </button>
                <button class="bg-white border px-4 py-2 rounded hover:bg-gray-100">
                    <i class="fas fa-sort mr-2"></i> Сортировка
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ($projects as $project)
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="h-48 bg-gray-200 mb-4"></div>
                    <h3>{{ $project->name }}</h3>
                    <div class="text-sm text-gray-500 mt-2">
                        Дата создания: {{ $project->created_at->format('d.m.Y') }}
                    </div>
                    <div class="text-sm text-gray-500 mt-1">
                        Последние изменения: {{ $project->updated_at->format('d.m.Y') }}
                    </div>
                    <a href="{{ $project->url }}" class="text-blue-600 mt-4 block">
                        {{ $project->url }}
                    </a>
                    <button class="flex items-center mt-4 text-blue-600">
                        <i class="fas fa-edit mr-2"></i> Редактировать
                    </button>
                </div>
            @endforeach
        </div>
    </div>
@endsection