@extends('layouts.app')

@section('content')
<section class="py-24 relative flex items-center">
    <!-- Background Image -->
    <div class="absolute inset-0 bg-[url('/public/background2.png')] bg-cover bg-center opacity-50"></div>
    <div class="container mx-auto px-4 py-32 relative z-10 text-center">
        <!-- Main Content -->
        <div class= "py-12 px-8 flex flex-col items-center">
            <!-- Object Image -->
            <div class="mb-6">
                <img src="/Object.png" alt="Thank You Illustration" class="max-w-lg md:w-64 lg:w-80">
            </div>

            <!-- Heading -->
            <h1 class="text-3xl font-bold text-[#1E2A4F] mb-4">Thank You for Your Interest</h1>

            <!-- Description -->
            <p class="text-gray-600 text-md mb-8">Our team will contact you within 5 working days.</p>

            <!-- Button -->
            <a href="/" class="bg-[#20b420] text-white px-8 py-3 rounded font-semibold hover:bg-[#2b8f2b] transition text-lg">
                BACK TO HOMEPAGE
            </a>
        </div>
    </div>
</section>
@endsection
