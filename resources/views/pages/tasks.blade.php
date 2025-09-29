@extends('layouts.app')

@section('title', 'Student Dashboard')

@section('content')
<div class="max-w-md mx-auto p-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-xl font-bold">Halo, {{ $user->name }}</h1>

        <h1 class="font-bold">{{ $user->class->class_name }}</h1>
    </div>

    <div class="bg-white shadow-md rounded-lg p-4">
        <h2 class="text-lg font-semibold mb-4">Daftar Tugas</h2>

        @if($tasks->count())
            <div class="space-y-3">
                @foreach($tasks as $task)
                    <div class="border rounded-lg p-3 shadow-sm bg-gray-50">
                        <div class="flex flex-col justify-between items-start">
                            <div>
                                <p class="font-semibold text-gray-800">{{ $task->title }}</p>
                                <p class="text-sm text-gray-600 mt-1">{{ $task->notes }}</p>
                            </div>
                            <div class="text-right text-xs text-gray-500 self-end">
                                <span class="block">Deadline</span>
                                <span class="font-semibold text-gray-700">
                                    {{ \Carbon\Carbon::parse($task->deadline)->format('d M Y') }}
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-gray-500 text-center">Belum ada tugas untuk kelas kamu.</p>
        @endif
    </div>
</div>
@endsection
