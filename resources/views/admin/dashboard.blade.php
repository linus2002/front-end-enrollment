<!-- resources/views/admin/admin.dashboard.php -->
@extends('layouts.admin')

@section('content')
    <div class="p-8 bg-light-gray">
        <!-- Dashboard Stats -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

            <!-- Card 1 -->
            <div class="bg-yellow shadow-small rounded-lg p-6">
                <h3 class="text-xl font-semibold text-dark">New Users</h3>
                <p class="text-3xl text-primary">250</p>
            </div>

            <!-- Card 2 -->
            <div class="bg-lime-green shadow-small rounded-lg p-6">
                <h3 class="text-xl font-semibold text-dark">Tasks Completed</h3>
                <p class="text-3xl text-primary">120</p>
            </div>

            <!-- Card 3-->
            <div class="bg-moss-green shadow-small rounded-lg p-6">
                <h3 class="text-xl font-semibold text-dark">Pending Orders</h3>
                <p class="text-3xl text-primary">75</p>
            </div>

        </div>

    </div>
@endsection
