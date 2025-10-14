@extends('layouts.app')

@section('title', 'Student Dashboard')

@section('content')
<div class="min-h-[calc(100vh-4rem)] bg-gradient-to-br from-slate-50 via-blue-50/20 to-indigo-50/20">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-6 sm:py-10">
        
        <!-- Welcome Header -->
        <div class="mb-8">
            <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4">
                <div>
                    <p class="text-sm font-medium text-gray-500 mb-1.5">Selamat datang kembali 👋</p>
                    <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 tracking-tight">{{ $user->name }}</h1>
                </div>
                <div class="hidden sm:block">
                    <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl px-6 py-3 shadow-lg shadow-blue-500/20">
                        <p class="text-xs text-blue-100 mb-0.5 font-medium">Kelas</p>
                        <p class="text-lg font-bold text-white">{{ $user->class->class_name }}</p>
                    </div>
                </div>
            </div>
            <!-- Mobile Class Badge -->
            <div class="sm:hidden mt-3">
                <span class="inline-flex items-center bg-gradient-to-r from-blue-500 to-blue-600 rounded-xl px-5 py-2.5 text-sm font-bold text-white shadow-lg shadow-blue-500/20">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                    </svg>
                    {{ $user->class->class_name }}
                </span>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8">
            <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600 mb-1">Total Tugas</p>
                        <p class="text-2xl font-bold text-gray-900" id="total-count">{{ $tasks->count() }}</p>
                    </div>
                    <div class="bg-blue-50 rounded-xl p-3">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600 mb-1">Segera</p>
                        <p class="text-2xl font-bold text-amber-600" id="urgent-count">0</p>
                    </div>
                    <div class="bg-amber-50 rounded-xl p-3">
                        <svg class="w-6 h-6 text-amber-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600 mb-1">Terlambat</p>
                        <p class="text-2xl font-bold text-red-600" id="overdue-count">0</p>
                    </div>
                    <div class="bg-red-50 rounded-xl p-3">
                        <svg class="w-6 h-6 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tasks Section -->
        <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
            <!-- Section Header with Filter -->
            <div class="px-6 sm:px-8 py-6 border-b border-gray-100 bg-gradient-to-r from-gray-50/50 to-white">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900">Daftar Tugas</h2>
                        <p class="text-sm text-gray-500 mt-1">Kelola dan pantau tugas Anda</p>
                    </div>
                    
                    <!-- Filter Buttons -->
                    <div class="flex items-center gap-2 overflow-x-auto scrollbar-hide">
                        <button onclick="filterTasks('all')" class="filter-btn active flex items-center gap-2 px-4 py-2.5 rounded-xl text-sm font-semibold transition-all whitespace-nowrap shadow-sm" data-filter="all">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                                <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"/>
                            </svg>
                            Semua
                        </button>
                        <button onclick="filterTasks('overdue')" class="filter-btn flex items-center gap-2 px-4 py-2.5 rounded-xl text-sm font-semibold transition-all whitespace-nowrap" data-filter="overdue">
                            <span class="w-2 h-2 bg-red-500 rounded-full"></span>
                            Terlambat
                        </button>
                        <button onclick="filterTasks('urgent')" class="filter-btn flex items-center gap-2 px-4 py-2.5 rounded-xl text-sm font-semibold transition-all whitespace-nowrap" data-filter="urgent">
                            <span class="w-2 h-2 bg-amber-500 rounded-full"></span>
                            Segera
                        </button>
                        <button onclick="filterTasks('active')" class="filter-btn flex items-center gap-2 px-4 py-2.5 rounded-xl text-sm font-semibold transition-all whitespace-nowrap" data-filter="active">
                            <span class="w-2 h-2 bg-blue-500 rounded-full"></span>
                            Aktif
                        </button>
                    </div>
                </div>
            </div>

            <!-- Tasks List -->
            <div class="px-6 sm:px-8 py-6 max-h-[calc(100vh-28rem)] overflow-y-auto scrollbar-thin">
                @if($tasks->count())
                    <div class="space-y-4" id="tasks-container">
                        @foreach($tasks as $task)
                            @php
                                $deadline = \Carbon\Carbon::parse($task->deadline)->startOfDay();
                                $now = \Carbon\Carbon::now()->startOfDay();
                                $daysLeft = $now->diffInDays($deadline, false);
                                
                                // Warna berdasarkan deadline
                                if($daysLeft < 0) {
                                    $borderColor = 'border-l-red-500';
                                    $badgeBg = 'bg-gradient-to-br from-red-50 to-red-100';
                                    $badgeText = 'text-red-700';
                                    $badgeBorder = 'border-red-200';
                                    $statusText = 'Terlambat';
                                    $statusClass = 'overdue';
                                    $iconBg = 'bg-red-100';
                                    $iconColor = 'text-red-600';
                                    $statusIcon = '<svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/></svg>';
                                } elseif($daysLeft <= 3) {
                                    $borderColor = 'border-l-amber-500';
                                    $badgeBg = 'bg-gradient-to-br from-amber-50 to-amber-100';
                                    $badgeText = 'text-amber-700';
                                    $badgeBorder = 'border-amber-200';
                                    $statusText = 'Segera';
                                    $statusClass = 'urgent';
                                    $iconBg = 'bg-amber-100';
                                    $iconColor = 'text-amber-600';
                                    $statusIcon = '<svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>';
                                } else {
                                    $borderColor = 'border-l-blue-500';
                                    $badgeBg = 'bg-gradient-to-br from-blue-50 to-blue-100';
                                    $badgeText = 'text-blue-700';
                                    $badgeBorder = 'border-blue-200';
                                    $statusText = 'Aktif';
                                    $statusClass = 'active';
                                    $iconBg = 'bg-blue-100';
                                    $iconColor = 'text-blue-600';
                                    $statusIcon = '<svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>';
                                }
                            @endphp
                            <div class="task-item {{ $statusClass }} group bg-white border-2 border-gray-100 {{ $borderColor }} border-l-4 rounded-2xl hover:shadow-lg hover:border-gray-200 transition-all duration-300">
                                <div class="p-6">
                                    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
                                        <!-- Task Info -->
                                        <div class="flex-1 min-w-0">
                                            <div class="flex items-start gap-4">
                                                <div class="flex-shrink-0 {{ $iconBg }} rounded-xl p-2.5 {{ $iconColor }}">
                                                    {!! $statusIcon !!}
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h3 class="font-bold text-gray-900 text-lg mb-2 group-hover:text-blue-600 transition-colors leading-tight">
                                                        {{ $task->title }}
                                                    </h3>
                                                    <p class="text-sm text-gray-600 leading-relaxed line-clamp-2">
                                                        {{ $task->notes }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Deadline Badge -->
                                        <div class="flex-shrink-0">
                                            <div class="{{ $badgeBg }} {{ $badgeBorder }} border-2 rounded-2xl px-5 py-3 text-center min-w-[160px] shadow-sm">
                                                <div class="flex items-center justify-center gap-2 mb-1.5">
                                                    <span class="w-1.5 h-1.5 rounded-full {{ $badgeText }} bg-current"></span>
                                                    <p class="text-xs {{ $badgeText }} font-bold uppercase tracking-wider">{{ $statusText }}</p>
                                                </div>
                                                <p class="text-lg font-bold text-gray-900 mb-1">
                                                    {{ $deadline->format('d M Y') }}
                                                </p>
                                                @if($daysLeft > 0)
                                                    <p class="text-xs text-gray-600 font-medium">
                                                        {{ $daysLeft }} hari tersisa
                                                    </p>
                                                @elseif($daysLeft == 0)
                                                    <p class="text-xs {{ $badgeText }} font-bold">
                                                        Deadline Hari Ini!
                                                    </p>
                                                @else
                                                    <p class="text-xs {{ $badgeText }} font-bold">
                                                        {{ abs($daysLeft) }} hari terlambat
                                                    </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <!-- Empty State -->
                    <div class="text-center py-20">
                        <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-gray-100 to-gray-200 rounded-2xl mb-5 shadow-inner">
                            <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Belum Ada Tugas</h3>
                        <p class="text-sm text-gray-500">Tugas baru akan muncul di sini ketika guru menambahkannya</p>
                    </div>
                @endif
            </div>
        </div>

    </div>
</div>

<style>
    .filter-btn {
        background: linear-gradient(135deg, #f9fafb 0%, #f3f4f6 100%);
        color: #6b7280;
        border: 1px solid #e5e7eb;
    }
    .filter-btn:hover {
        background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%);
        border-color: #d1d5db;
        transform: translateY(-1px);
    }
    .filter-btn.active {
        background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
        color: white;
        border-color: #2563eb;
        box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
    }
    .task-item {
        animation: fadeIn 0.3s ease-in-out;
    }
    .task-item.hidden {
        display: none;
    }
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }
    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
    .scrollbar-thin::-webkit-scrollbar {
        width: 6px;
    }
    .scrollbar-thin::-webkit-scrollbar-track {
        background: #f1f5f9;
        border-radius: 10px;
    }
    .scrollbar-thin::-webkit-scrollbar-thumb {
        background: #cbd5e1;
        border-radius: 10px;
    }
    .scrollbar-thin::-webkit-scrollbar-thumb:hover {
        background: #94a3b8;
    }
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>

<script>
// Count tasks on page load
document.addEventListener('DOMContentLoaded', function() {
    updateCounts();
});

function updateCounts() {
    const total = document.querySelectorAll('.task-item').length;
    const urgent = document.querySelectorAll('.task-item.urgent').length;
    const overdue = document.querySelectorAll('.task-item.overdue').length;
    
    document.getElementById('total-count').textContent = total;
    document.getElementById('urgent-count').textContent = urgent;
    document.getElementById('overdue-count').textContent = overdue;
}

function filterTasks(filter) {
    const tasks = document.querySelectorAll('.task-item');
    const filterBtns = document.querySelectorAll('.filter-btn');
    
    // Update active button
    filterBtns.forEach(btn => {
        btn.classList.remove('active');
        if(btn.dataset.filter === filter) {
            btn.classList.add('active');
        }
    });
    
    // Filter tasks with animation
    tasks.forEach((task, index) => {
        setTimeout(() => {
            if(filter === 'all') {
                task.classList.remove('hidden');
            } else if(task.classList.contains(filter)) {
                task.classList.remove('hidden');
            } else {
                task.classList.add('hidden');
            }
        }, index * 50);
    });
}
</script>
@endsection