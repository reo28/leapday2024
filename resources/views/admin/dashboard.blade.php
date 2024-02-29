
<x-app2-layout>
    <!DOCTYPE html>
    <html>
    <head>
        <title>adminnn</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboarddd') }}
            </h2>
        </x-slot>
    
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <form action="/admin/logout" method="POST">
                            @csrf
                        <button>logout..plz</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </x-app2-layout>
    