@extends('layouts.app')
@section('content')
<section class="pt-32 mt-10 pb-10 bg-slate-900 text-white">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-5xl md:text-6xl font-black mb-6">Our Professional <span class="text-primary italic">Process</span></h1>
        <p class="text-slate-400 max-w-2xl mx-auto text-lg">Detailed, transparent, and high-quality duct cleaning tailored for your home.</p>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="space-y-24">
            
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2">
                    <div class="text-primary font-black text-xl mb-2">Step 01</div>
                    <h2 class="text-4xl font-extrabold text-slate-900 mb-6">Inspection & Assessment</h2>
                    <p class="text-lg text-slate-600 leading-relaxed mb-8">
                        We start with a quick inspection of your air ducts to identify dust buildup, blockages, and system condition.
                    </p>
                    <div class="bg-slate-50 p-6 rounded-2xl border-l-4 border-primary">
                        <p class="text-sm font-medium text-slate-500 italic">"We use high-definition cameras to show you exactly what's inside your vents."</p>
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <img src="{{asset('images/car.png')}}" class="rounded-[2.5rem] shadow-2xl w-full object-cover" alt="Inspection">
                </div>
            </div>

            <div class="flex flex-col lg:flex-row-reverse items-center gap-12">
                <div class="lg:w-1/2">
                    <div class="text-primary font-black text-xl mb-2">Step 02</div>
                    <h2 class="text-4xl font-extrabold text-slate-900 mb-6">Deep Cleaning Process</h2>
                    <p class="text-lg text-slate-600 leading-relaxed mb-8">
                        Our technicians use professional equipment to remove dust, debris, and allergens from your duct system safely and effectively.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 font-bold text-slate-700"><i class="fa-solid fa-check text-primary"></i> High-Powered Negative Pressure</li>
                        <li class="flex items-center gap-3 font-bold text-slate-700"><i class="fa-solid fa-check text-primary"></i> HEPA-Filtered Vacuums</li>
                    </ul>
                </div>
                <div class="lg:w-1/2">
                    <img src="{{asset('images/mmi.webp')}}" class="rounded-[2.5rem] shadow-2xl w-full object-cover" alt="Deep Cleaning">
                </div>
            </div>

            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2">
                    <div class="text-primary font-black text-xl mb-2">Step 03</div>
                    <h2 class="text-4xl font-extrabold text-slate-900 mb-6">Vent & System Cleaning</h2>
                    <p class="text-lg text-slate-600 leading-relaxed mb-8">
                        We clean all accessible supply vents and ensure proper airflow throughout your home.
                    </p>
                    <button class="bg-primary text-white px-8 py-4 rounded-2xl font-bold shadow-lg shadow-primary/30">View Live Action</button>
                </div>
                <div class="lg:w-1/2 relative group">
                    <video id="processVideo" class="rounded-[2.5rem] shadow-2xl w-full h-[400px] object-cover" poster="{{asset('images/hvac.webp')}}" loop playsinline>
                        <source src="{{asset('videos/service-video.mp4')}}" type="video/mp4">
                    </video>
                    <div onclick="document.getElementById('processVideo').play(); this.style.display='none'" class="absolute inset-0 flex items-center justify-center bg-black/20 rounded-[2.5rem] cursor-pointer">
                        <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center text-primary shadow-2xl">
                            <i class="fa-solid fa-play text-2xl"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col lg:flex-row-reverse items-center gap-12">
                <div class="lg:w-1/2">
                    <div class="text-primary font-black text-xl mb-2">Step 04</div>
                    <h2 class="text-4xl font-extrabold text-slate-900 mb-6">Final Check & Results</h2>
                    <p class="text-lg text-slate-600 leading-relaxed mb-8">
                        We perform a final check to ensure everything is clean, efficient, and working properly — so you can enjoy fresh, healthy air.
                    </p>
                </div>
                <div class="lg:w-1/2">
                    <img src="{{asset('images/before-after.png')}}" class="rounded-[2.5rem] shadow-2xl w-full object-cover" alt="Final Results">
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-24 bg-slate-900 text-white overflow-hidden">
    <div class="container mx-auto px-4">
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-5xl font-black mb-6 italic">Why It <span class="text-primary">Matters?</span></h2>
            <p class="text-slate-400 text-lg max-w-2xl mx-auto leading-relaxed">
                Poor indoor air quality and neglected ductwork don’t just affect comfort—they impact your health, your home’s safety, and your monthly expenses.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <div class="bg-white/5 border border-white/10 p-10 rounded-[2.5rem] hover:border-primary/50 transition-all duration-300">
                <div class="w-14 h-14 bg-primary/20 rounded-2xl flex items-center justify-center mb-6">
                    <i class="fa-solid fa-lungs text-primary text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-white">Increased Allergies</h3>
                <p class="text-slate-400 leading-relaxed">
                    Dust, pollen, and airborne contaminants trapped in your ducts can trigger allergies, asthma, and chronic respiratory issues.
                </p>
            </div>

            <div class="bg-white/5 border border-white/10 p-10 rounded-[2.5rem] hover:border-primary/50 transition-all duration-300">
                <div class="w-14 h-14 bg-primary/20 rounded-2xl flex items-center justify-center mb-6">
                    <i class="fa-solid fa-file-invoice-dollar text-primary text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-white">Higher Energy Bills</h3>
                <p class="text-slate-400 leading-relaxed">
                    Clogged ducts force your HVAC system to work much harder to move air, significantly increasing your monthly energy consumption.
                </p>
            </div>

            <div class="bg-white/5 border border-white/10 p-10 rounded-[2.5rem] hover:border-primary/50 transition-all duration-300">
                <div class="w-14 h-14 bg-primary/20 rounded-2xl flex items-center justify-center mb-6">
                    <i class="fa-solid fa-gauge-high text-primary text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-white">Reduced Efficiency</h3>
                <p class="text-slate-400 leading-relaxed">
                    Dirty systems lose airflow and overall performance, leading to faster mechanical wear and very costly premature repairs.
                </p>
            </div>

            <div class="bg-white/5 border border-white/10 p-10 rounded-[2.5rem] hover:border-primary/50 transition-all duration-300">
                <div class="w-14 h-14 bg-primary/20 rounded-2xl flex items-center justify-center mb-6">
                    <i class="fa-solid fa-wind text-primary text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-white">Unpleasant Odors</h3>
                <p class="text-slate-400 leading-relaxed">
                    Built-up debris, pet hair, and moisture inside ducts can cause persistent musty or stale smells throughout your entire house.
                </p>
            </div>

            <div class="bg-white/5 border border-white/10 p-10 rounded-[2.5rem] hover:border-primary/50 transition-all duration-300">
                <div class="w-14 h-14 bg-primary/20 rounded-2xl flex items-center justify-center mb-6">
                    <i class="fa-solid fa-screwdriver-wrench text-primary text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-white">System Longevity</h3>
                <p class="text-slate-400 leading-relaxed">
                    Lack of regular HVAC maintenance leads to restricted airflow, inefficient system performance, and a shorter lifespan for your equipment.
                </p>
            </div>

            <div class="bg-white/5 border border-white/10 p-10 rounded-[2.5rem] hover:border-primary/50 transition-all duration-300">
                <div class="w-14 h-14 bg-primary/20 rounded-2xl flex items-center justify-center mb-6">
                    <i class="fa-solid fa-fire-extinguisher text-primary text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-white">Fire Prevention</h3>
                <p class="text-slate-400 leading-relaxed">
                    Lint and debris buildup in dryer vents is a leading cause of home fires. Regular cleaning is essential for your family's safety.
                </p>
            </div>

        </div>
    </div>
</section>
@endsection