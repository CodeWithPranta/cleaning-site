@extends('layouts.app')
@section('content')

<section class="relative pt-40 pb-20 lg:pt-56 lg:pb-32 overflow-hidden">

    {{-- Background Image with Blur --}}
    <div class="absolute inset-0 z-0">
        <img
            src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=1600&q=80&fit=crop"
            alt=""
            class="w-full h-full object-cover object-center"
        />
        {{-- Dark overlay for text readability --}}
        <div class="absolute inset-0 bg-slate-900/70 backdrop-blur-[2px]"></div>
        {{-- Gradient overlay for depth --}}
        <div class="absolute inset-0 bg-gradient-to-r from-slate-900/90 via-slate-900/60 to-slate-900/20"></div>
        {{-- Blue tint accent on left --}}
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_0%_50%,rgba(59,130,246,0.15)_0%,transparent_60%)]"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <div class="order-1 lg:order-1">
                <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm border border-white/20 px-4 py-2 rounded-full shadow-sm mb-6">
                    <span class="flex h-2 w-2 rounded-full bg-emerald-400 animate-ping"></span>
                    <span class="text-xs font-black uppercase tracking-widest text-white">Premium Home Care</span>
                </div>

                <h1 class="text-5xl lg:text-7xl font-black text-white leading-[1.1] mb-8 tracking-tight">
                    Total Home <br>
                    <span class="text-blue-400 italic font-light">Revitalization.</span>
                </h1>

                <p class="text-lg text-slate-300 mb-10 max-w-lg leading-relaxed">
                    From your air ducts to your carpets, Purix delivers hospital-grade cleaning solutions. Experience a healthier, fresher home today.
                </p>

                <div class="flex flex-wrap gap-3 mb-10">
                    <span class="px-4 py-2 bg-white/10 backdrop-blur-sm border border-white/20 rounded-xl text-sm font-bold text-white flex items-center gap-2 hover:bg-white/20 transition-colors cursor-default">
                        <i class="fa-solid fa-wind text-blue-400"></i> Air Duct
                    </span>
                    <span class="px-4 py-2 bg-white/10 backdrop-blur-sm border border-white/20 rounded-xl text-sm font-bold text-white flex items-center gap-2 hover:bg-white/20 transition-colors cursor-default">
                        <i class="fa-solid fa-soap text-blue-400"></i> Carpet
                    </span>
                    <span class="px-4 py-2 bg-white/10 backdrop-blur-sm border border-white/20 rounded-xl text-sm font-bold text-white flex items-center gap-2 hover:bg-white/20 transition-colors cursor-default">
                        <i class="fa-solid fa-fire text-blue-400"></i> Dryer Vent
                    </span>
                    <span class="px-4 py-2 bg-white/10 backdrop-blur-sm border border-white/20 rounded-xl text-sm font-bold text-white flex items-center gap-2 hover:bg-white/20 transition-colors cursor-default">
                        <i class="fa-solid fa-house-chimney text-blue-400"></i> Home Cleaning
                    </span>
                </div>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#contact" class="bg-primary text-white px-10 py-5 rounded-2xl font-black text-lg hover:bg-primary-dark transition-all transform hover:-translate-y-1 shadow-xl shadow-primary/30 text-center">
                        Get Free Estimate
                    </a>
                    <a href="tel:+14699608366" class="bg-white/10 backdrop-blur-sm text-white border border-white/30 px-10 py-5 rounded-2xl font-black text-lg hover:bg-white/20 transition-all transform hover:-translate-y-1 text-center flex items-center justify-center gap-2">
                        <i class="fa-solid fa-phone text-blue-400"></i> Call Now
                    </a>
                </div>
            </div>

            <div class="relative grid grid-cols-2 gap-4 order-2 lg:order-2">
                <div class="space-y-4 animate-float">
                    <div class="bg-white/10 backdrop-blur-md p-6 rounded-[2rem] shadow-xl border border-white/20 mt-8 hover:scale-105 hover:bg-white/15 transition-all duration-500">
                        <i class="fa-solid fa-shield-virus text-3xl text-emerald-400 mb-4"></i>
                        <h4 class="font-bold text-white">Sanitization</h4>
                        <p class="text-xs text-white/60 mt-1">99.9% Bacteria Removal</p>
                    </div>
                    <div class="bg-primary/80 backdrop-blur-md p-6 rounded-[2rem] shadow-xl border border-primary/50 text-white hover:scale-105 hover:bg-primary/90 transition-all duration-500">
                        <i class="fa-solid fa-box-open text-3xl mb-4"></i>
                        <h4 class="font-bold">Move-In/Out</h4>
                        <p class="text-xs opacity-80 mt-1">Stress-Free Cleaning</p>
                    </div>
                </div>
                <div class="space-y-4 pt-12">
                    <div class="bg-white/10 backdrop-blur-md p-6 rounded-[2rem] shadow-xl border border-white/20 text-white hover:scale-105 hover:bg-white/15 transition-all duration-500">
                        <i class="fa-solid fa-helmet-safety text-3xl text-amber-400 mb-4"></i>
                        <h4 class="font-bold">Post-Construction</h4>
                        <p class="text-xs opacity-60 mt-1">Dust-Free Finish</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-md p-6 rounded-[2rem] shadow-xl border border-white/20 hover:scale-105 hover:bg-white/15 transition-all duration-500">
                        <i class="fa-solid fa-couch text-3xl text-blue-400 mb-4"></i>
                        <h4 class="font-bold text-white">Upholstery</h4>
                        <p class="text-xs text-white/60 mt-1">Fabric Protection</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-15px); }
        100% { transform: translateY(0px); }
    }
    .animate-float {
        animation: float 6s ease-in-out infinite;
    }
</style>

<a href="https://wa.me/14699608366" target="_blank" class="fixed bottom-8 right-8 z-[60] bg-emerald-500 text-white w-16 h-16 rounded-full shadow-2xl flex items-center justify-center text-3xl hover:scale-110 transition-transform group">
    <i class="fa-brands fa-whatsapp"></i>
    <span class="absolute right-20 bg-white text-slate-900 text-sm font-bold px-4 py-2 rounded-xl shadow-lg opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap pointer-events-none">
        Chat with us!
    </span>
</a>

<section id="about" class="py-24 bg-white">
    <div class="container mx-auto px-4 flex flex-col lg:flex-row items-center gap-16">
        <div class="lg:w-1/2 w-full relative group">
            <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-primary/10 rounded-full -z-10"></div>
            
            {{-- Video Thumbnail Card --}}
            <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border-8 border-white cursor-pointer group"
                onclick="openVideoModal()">
                
                {{-- Poster image --}}
                <img 
                    src="{{ asset('images/about-poster-photo.jpg') }}" 
                    alt="Purix Home Services Video"
                    class="w-full h-[400px] lg:h-[500px] object-cover transition-transform duration-500 group-hover:scale-105"
                >

                {{-- Dark overlay --}}
                <div class="absolute inset-0 bg-black/30 group-hover:bg-black/40 transition-all duration-300"></div>

                {{-- Play button --}}
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="w-20 h-20 bg-white/20 backdrop-blur-md rounded-full flex items-center justify-center border-2 border-white/60 
                                group-hover:scale-110 group-hover:bg-white/30 transition-all duration-300 shadow-xl">
                        <i class="fa-solid fa-play text-white text-2xl ml-1"></i>
                    </div>
                </div>
            </div>

            {{-- ===== VIDEO MODAL ===== --}}
            <div id="videoModal" 
                class="fixed inset-0 z-[100] flex items-center justify-center bg-black/95 backdrop-blur-sm hidden"
                onclick="handleModalClick(event)">

                <div class="relative w-full max-w-4xl mx-4" onclick="event.stopPropagation()">
                    {{-- Close button --}}
                    <button onclick="closeVideoModal()"
                            class="absolute -top-12 right-0 text-white/70 hover:text-white transition text-sm flex items-center gap-2 z-10">
                        <i class="fa-solid fa-xmark text-xl"></i>
                        <span>Close</span>
                    </button>

                    {{-- Video container --}}
                    <div class="rounded-2xl overflow-hidden shadow-2xl bg-black aspect-video">
                        <video 
                            id="modalVideo"
                            class="w-full h-full"
                            controls
                            playsinline
                            preload="metadata"
                            poster="{{ asset('images/about-poster-photo.jpg') }}"
                        >
                            <source src="{{ asset('videos/about-video.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>

        {{-- Content Side --}}
        <div class="lg:w-1/2">
            <h2 class="text-primary font-bold uppercase tracking-widest text-sm mb-4 flex items-center gap-2">
                <span class="w-8 h-px bg-primary"></span> Why Choose Purix?
            </h2>
            <h3 class="text-4xl lg:text-5xl font-extrabold text-slate-900 mb-6 leading-tight">
                Your Complete <br><span class="text-primary italic">Home Wellness</span> Partner
            </h3>
            <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                Purix Home Services is more than just a cleaning company—we are your partners in creating a safer, healthier living environment. Our team utilizes hospital-grade HEPA filtration and eco-friendly solutions across all our services.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-10">
                <div class="flex items-center gap-3 bg-slate-50 px-5 py-4 rounded-2xl border border-slate-100 shadow-sm">
                    <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center shadow-sm text-primary">
                        <i class="fa-solid fa-check-double"></i>
                    </div>
                    <span class="font-bold text-slate-700 text-sm tracking-tight">Full-Service Care</span>
                </div>
                <div class="flex items-center gap-3 bg-slate-50 px-5 py-4 rounded-2xl border border-slate-100 shadow-sm">
                    <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center shadow-sm text-primary">
                        <i class="fa-solid fa-user-shield"></i>
                    </div>
                    <span class="font-bold text-slate-700 text-sm tracking-tight">Vetted Experts</span>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row gap-4">
                <a href="#services" class="bg-slate-900 text-white px-8 py-4 rounded-2xl font-bold text-center hover:bg-slate-800 transition">Explore Services</a>
                <a href="https://wa.me/14699608366" class="bg-emerald-500 text-white px-8 py-4 rounded-2xl font-bold text-center hover:bg-emerald-600 transition flex items-center justify-center gap-2">
                    <i class="fa-brands fa-whatsapp text-lg"></i> Chat with Us
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Javascript Logic --}}
<script>
    const modal = document.getElementById('videoModal');
    const video = document.getElementById('modalVideo');

    function openVideoModal() {
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden'; // Stop scrolling
        video.play();
    }

    function closeVideoModal() {
        modal.classList.add('hidden');
        document.body.style.overflow = ''; // Resume scrolling
        video.pause();
        video.currentTime = 0; // Reset video to beginning
    }

    function handleModalClick(event) {
        // Close modal only if user clicks the dark background (the modal div itself)
        if (event.target === modal) {
            closeVideoModal();
        }
    }

    // Close on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
            closeVideoModal();
        }
    });
</script>

<section id="services" class="py-24 bg-slate-50">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-primary font-bold uppercase tracking-widest text-sm mb-4">Our Core Expertise</h2>
            <h3 class="text-4xl font-extrabold text-slate-900 mb-6">Premium Cleaning Solutions</h3>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-white p-8 rounded-[2.5rem] shadow-sm hover:shadow-xl transition-all border border-slate-100 group">
                <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                    <i class="fa-solid fa-wind text-2xl text-primary group-hover:text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-slate-900 mb-4">Air Duct Cleaning</h4>
                <button type="button" onclick="openServiceModal('air-duct')" class="text-primary font-bold text-sm flex items-center gap-2 hover:gap-3 transition-all">
                    Learn More <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>

            <div class="bg-white p-8 rounded-[2.5rem] shadow-sm hover:shadow-xl transition-all border border-slate-100 group">
                <div class="w-16 h-16 bg-orange-50 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-orange-500 transition-colors">
                    <i class="fa-solid fa-smog text-2xl text-orange-500 group-hover:text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-slate-900 mb-4">Dryer Vent Cleaning</h4>
                <button type="button" onclick="openServiceModal('dryer-vent')" class="text-primary font-bold text-sm flex items-center gap-2 hover:gap-3 transition-all">
                    Learn More <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>

            <div class="bg-white p-8 rounded-[2.5rem] shadow-sm hover:shadow-xl transition-all border border-slate-100 group">
                <div class="w-16 h-16 bg-emerald-50 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-emerald-500 transition-colors">
                    <i class="fa-solid fa-soap text-2xl text-emerald-500 group-hover:text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-slate-900 mb-4">Carpet Cleaning</h4>
                <button type="button" onclick="openServiceModal('carpet')" class="text-primary font-bold text-sm flex items-center gap-2 hover:gap-3 transition-all">
                    Learn More <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>

            <div class="bg-white p-8 rounded-[2.5rem] shadow-sm hover:shadow-xl transition-all border border-slate-100 group">
                <div class="w-16 h-16 bg-purple-50 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-purple-500 transition-colors">
                    <i class="fa-solid fa-house-chimney text-2xl text-purple-500 group-hover:text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-slate-900 mb-4">Home Cleaning</h4>
                <button type="button" onclick="openServiceModal('home-cleaning')" class="text-primary font-bold text-sm flex items-center gap-2 hover:gap-3 transition-all">
                    Learn More <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- MODAL OVERLAY -->
<div id="serviceModal"
     class="fixed inset-0 z-[150] flex items-end sm:items-center justify-center bg-slate-900/80 backdrop-blur-sm hidden p-0 sm:p-4"
     onclick="handleOutsideClick(event)">

    <div class="bg-white w-full sm:max-w-2xl sm:rounded-[2.5rem] rounded-t-[2rem] overflow-hidden shadow-2xl relative flex flex-col max-h-[95dvh] sm:max-h-[90dvh]">

        <!-- CLOSE BUTTON -->
        <button type="button" onclick="closeServiceModal()"
                class="absolute top-4 right-4 z-40 w-10 h-10 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center text-slate-500 hover:bg-red-50 hover:text-red-500 transition-all shadow-md border border-slate-100">
            <i class="fa-solid fa-xmark text-sm"></i>
        </button>

        <!-- VIDEO — fixed height, does not scroll -->
        <div id="mediaContainer" class="relative w-full h-56 sm:h-72 bg-slate-900 flex-shrink-0 flex items-center justify-center overflow-hidden">
            <video id="modalServiceVideo" class="w-full h-full object-cover hidden" controls playsinline muted>
                <source src="" type="video/mp4">
            </video>
            <div id="videoPlaceholder" class="text-center px-4">
                <div class="w-20 h-20 bg-white/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fa-solid fa-clapperboard text-3xl text-white/50"></i>
                </div>
                <p class="text-slate-400 text-sm font-medium">Service Demonstration</p>
            </div>
        </div>

        <!-- SCROLLABLE CONTENT — modal-scroll class is required here -->
        <div id="modalScrollArea" class="overflow-y-auto flex-1 modal-scroll">
            <div class="p-7 sm:p-10">
                <h2 id="serviceTitle" class="text-2xl sm:text-3xl font-black text-slate-900 mb-3 leading-tight tracking-tight"></h2>
                <p id="serviceDescription" class="text-slate-600 leading-relaxed mb-6 text-[15px]"></p>

                <div id="serviceHighlights" class="grid grid-cols-2 sm:grid-cols-3 gap-2 mb-8"></div>

                <div id="serviceRichContent" class="space-y-8"></div>

                <div class="flex flex-col sm:flex-row gap-3 mt-10 pb-1">
                    <a href="#contact" onclick="closeServiceModal()"
                       class="flex-1 bg-primary text-white text-center py-4 rounded-2xl font-bold shadow-lg shadow-primary/20 hover:bg-primary-dark transition text-sm">
                        Get a Free Quote
                    </a>
                    <a href="https://wa.me/14699608366"
                       class="flex-1 bg-emerald-500 text-white text-center py-4 rounded-2xl font-bold hover:bg-emerald-600 transition flex items-center justify-center gap-2 text-sm">
                        <i class="fa-brands fa-whatsapp"></i> Chat with Us
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
    .modal-scroll::-webkit-scrollbar { width: 5px; }
    .modal-scroll::-webkit-scrollbar-track { background: #f1f5f9; border-radius: 10px; }
    .modal-scroll::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
    .modal-scroll::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
</style>

<script>
const serviceData = {
    'air-duct': {
        title: 'Professional Air Duct Cleaning for Healthier, Cleaner Air',
        description: 'Breathe cleaner, healthier air with expert air duct cleaning services from Purix Home Services. We remove dust, allergens, mold spores, and contaminants from your HVAC system to improve indoor air quality, boost efficiency, and protect your family\'s health.',
        highlights: ['NADCA Certified', 'HEPA-Filtration', 'Full Sanitation', 'Eco-Safe', 'Licensed & Insured', 'Same-Day Service'],
        video: "{{ asset('videos/air-duct.mp4') }}",
        richContent: [
            {
                type: 'section',
                heading: 'Why Air Duct Cleaning Matters',
                body: 'Over time, your air ducts collect harmful pollutants. When your system runs, these circulate throughout your home.',
                list: ['Dust & debris', 'Pet dander', 'Mold & bacteria', 'Pollen & allergens'],
                callout: 'Our solution: Deep, professional cleaning that eliminates buildup and restores clean airflow.'
            },
            {
                type: 'section',
                heading: 'Signs You Need Air Duct Cleaning',
                body: 'You should schedule service if you notice any of the following:',
                list: [
                    'Increased dust around your home',
                    'Allergy or respiratory issues',
                    'Musty or unpleasant odors',
                    'Uneven airflow in rooms',
                    'Recent renovation or construction',
                    'Visible mold inside ducts'
                ]
            },
            {
                type: 'process',
                heading: 'Our Air Duct Cleaning Process',
                body: 'We follow a powerful, industry-grade cleaning system:',
                steps: [
                    { icon: 'fa-magnifying-glass', label: 'Full HVAC Inspection', desc: 'Camera-based diagnostic to assess buildup and identify problem areas.' },
                    { icon: 'fa-wind', label: 'High-Power Vacuum', desc: 'Negative pressure extraction removes 99.9% of dust and debris.' },
                    { icon: 'fa-spray-can-sparkles', label: 'Duct Sanitization', desc: 'EPA-approved antimicrobial treatment eliminates mold and bacteria.' },
                    { icon: 'fa-circle-check', label: 'Final Air Quality Test', desc: 'Verify airflow and confirm your HVAC is running clean and efficiently.' }
                ]
            }
        ]
    },
    'dryer-vent': {
    title: 'Dryer Vent Safety Cleaning',
    description: 'Protect your home and family with professional dryer vent cleaning from Purix Home Services. Lint buildup in dryer vents is one of the leading causes of house fires — our expert service removes blockages, restores airflow, and keeps your dryer running safely and efficiently.',
    highlights: ['Fire Prevention', 'Energy Efficiency', 'Lint Removal', 'Code Compliant', 'All Vent Types', 'Same-Day Service'],
    video: "{{ asset('videos/dryer-vent.mp4') }}",
    richContent: [
        {
            type: 'section',
            heading: 'Why Dryer Vent Cleaning is Critical',
            body: 'Every load of laundry pushes lint, moisture, and debris through your dryer vent. Over time, this builds up into a serious hazard.',
            list: [
                'Lint is highly flammable — buildup is a leading fire risk',
                'Blocked vents trap heat, overworking your dryer motor',
                'Moisture buildup encourages mold growth in the vent line',
                'Longer drying cycles waste energy and raise utility bills',
                'Overheating shortens the lifespan of your appliance'
            ],
            callout: 'The U.S. Fire Administration recommends cleaning dryer vents at least once per year — more often with heavy use or pets.'
        },
        {
            type: 'section',
            heading: 'Signs Your Dryer Vent Needs Cleaning',
            body: 'Don\'t wait for a fire to take action. Schedule service if you notice:',
            list: [
                'Clothes take more than one cycle to dry fully',
                'Dryer feels very hot to the touch after a cycle',
                'Burning or musty smell during drying',
                'Laundry room feels unusually humid',
                'Vent flap outside doesn\'t open when dryer runs',
                'It\'s been over 12 months since last cleaning'
            ]
        },
        {
            type: 'process',
            heading: 'Our Dryer Vent Cleaning Process',
            body: 'A fast, thorough service that takes 45–90 minutes:',
            steps: [
                { icon: 'fa-magnifying-glass', label: 'Vent Inspection', desc: 'We assess vent length, bends, and blockage level before starting.' },
                { icon: 'fa-rotate', label: 'Rotary Brush Clearing', desc: 'Flexible rotary brush breaks apart and dislodges all lint deposits.' },
                { icon: 'fa-wind', label: 'High-Power Vacuum', desc: 'Industrial vacuum captures all debris from end to end of the vent line.' },
                { icon: 'fa-circle-check', label: 'Airflow Verification', desc: 'We confirm proper airflow and inspect the exterior vent cap before leaving.' }
            ]
        }
    ]
},

'carpet': {
    title: 'Professional Carpet Steam Cleaning',
    description: 'Restore your carpets to like-new condition with deep hot water extraction cleaning from Purix Home Services. We remove embedded dirt, allergens, stains, and odors that regular vacuuming simply cannot reach — leaving your home fresher, cleaner, and healthier.',
    highlights: ['Stain Removal', 'Pet Safe', 'Fast Dry', 'Allergen Removal', 'Odor Elimination', 'HWE Method'],
    video: "{{ asset('videos/carpet.mp4') }}",
    richContent: [
        {
            type: 'section',
            heading: 'Why Professional Carpet Cleaning Matters',
            body: 'Carpets trap far more than visible dirt. Without deep cleaning, they silently harbor harmful particles that affect your indoor air quality.',
            list: [
                'Dust mites and allergens embedded deep in carpet fibers',
                'Pet dander, hair, and odor-causing bacteria',
                'Mold spores thriving in damp or humid conditions',
                'Tracked-in pollutants, pesticides, and outdoor contaminants',
                'Set-in stains that worsen over time without treatment'
            ],
            callout: 'Carpet manufacturers and the EPA recommend professional deep cleaning every 12–18 months to maintain air quality and carpet warranty.'
        },
        {
            type: 'section',
            heading: 'Signs Your Carpet Needs Professional Cleaning',
            body: 'Book a service if you notice any of the following:',
            list: [
                'Visible stains that won\'t respond to spot treatment',
                'Persistent musty, pet, or stale odors',
                'Allergy or asthma symptoms worsening indoors',
                'Carpet looks dull or matted despite regular vacuuming',
                'High-traffic areas noticeably darker than the rest',
                'Recent spills, flooding, or pet accidents'
            ]
        },
        {
            type: 'process',
            heading: 'Our Carpet Cleaning Process',
            body: 'We use truck-mounted hot water extraction — the most effective method recommended by all major carpet manufacturers:',
            steps: [
                { icon: 'fa-spray-can', label: 'Pre-Treatment', desc: 'Eco-safe conditioning solution is applied to loosen deep-set dirt and stains.' },
                { icon: 'fa-fire', label: 'Hot Water Extraction', desc: 'High-temperature water is injected deep into fibers and immediately extracted with debris.' },
                { icon: 'fa-droplet-slash', label: 'Spot Treatment', desc: 'Stubborn stains receive targeted treatment with professional-grade solutions.' },
                { icon: 'fa-fan', label: 'Fast-Dry Finish', desc: 'Carpets are groomed and left ready to walk on within 2–4 hours.' }
            ]
        }
    ]
},

'home-cleaning': {
    title: 'Professional Deep Home Cleaning',
    description: 'Give your home a thorough, top-to-bottom reset with deep cleaning services from Purix Home Services. Our trained, insured cleaners tackle every room with eco-friendly products, attention to detail, and a commitment to results that go far beyond a standard surface clean.',
    highlights: ['Eco-Friendly', 'Bonded & Insured', 'Kitchen/Bath Focus', 'All Rooms', 'Trained Staff', 'Satisfaction Guaranteed'],
    video: "{{ asset('videos/home.mp4') }}",
    richContent: [
        {
            type: 'section',
            heading: 'What\'s Included in a Deep Clean',
            body: 'Our deep home cleaning covers areas that routine cleaning misses entirely:',
            list: [
                'Kitchen: appliance exteriors, inside microwave, cabinet fronts, backsplash, sink scrub',
                'Bathrooms: grout scrubbing, fixture descaling, toilet deep clean, mirror polish',
                'Living areas: baseboards, door frames, light switches, ceiling fans, window sills',
                'Bedrooms: under-bed vacuuming, furniture dusting, closet floors',
                'Floors: vacuum, mop, and edge cleaning on all hard and soft surfaces',
                'Trash removal and linen change (on request)'
            ],
            callout: 'First-time deep cleans typically take 3–6 hours depending on home size. We stay until the job is done right.'
        },
        {
            type: 'section',
            heading: 'When to Book a Deep Clean',
            body: 'A deep clean is the right choice when:',
            list: [
                'Moving into a new home or vacating a rental',
                'After a renovation or construction project',
                'Seasonal reset (spring or pre-holiday cleaning)',
                'Before or after hosting a large gathering',
                'Your home hasn\'t had a thorough clean in 3+ months',
                'Post-illness sanitization of the entire home'
            ]
        },
        {
            type: 'process',
            heading: 'How Our Home Cleaning Works',
            body: 'A seamless, stress-free experience from booking to walkthrough:',
            steps: [
                { icon: 'fa-calendar-check', label: 'Easy Booking', desc: 'Book online or by phone — we confirm your slot within 2 hours.' },
                { icon: 'fa-clipboard-list', label: 'Walk-Through Assessment', desc: 'Our team reviews your home\'s priorities and any specific areas of concern.' },
                { icon: 'fa-broom', label: 'Systematic Deep Clean', desc: 'We work room by room using our comprehensive checklist — nothing is skipped.' },
                { icon: 'fa-star', label: 'Final Inspection', desc: 'We do a quality walkthrough with you before we consider the job complete.' }
            ]
        }
    ]
}
};

function buildRichContent(richContent) {
    if (!richContent || !richContent.length) return '';
    return richContent.map(section => {
        let html = '<div>';
        html += `<h3 class="text-lg font-bold text-slate-900 mb-3 flex items-center gap-2">
            <span class="w-1 h-5 bg-primary rounded-full inline-block"></span>${section.heading}
        </h3>`;
        if (section.body) {
            html += `<p class="text-slate-600 text-[14px] leading-relaxed mb-3">${section.body}</p>`;
        }
        if (section.list) {
            html += '<ul class="space-y-2 mb-3">' +
                section.list.map(item => `
                    <li class="flex items-start gap-2 text-[14px] text-slate-700">
                        <i class="fa-solid fa-circle-check text-primary mt-0.5 flex-shrink-0"></i>
                        <span>${item}</span>
                    </li>`).join('') +
                '</ul>';
        }
        if (section.callout) {
            html += `<div class="bg-blue-50 border border-blue-100 rounded-2xl p-4 text-[13px] text-blue-800 font-medium">${section.callout}</div>`;
        }
        if (section.steps) {
            html += '<div class="grid sm:grid-cols-2 gap-3 mt-2">' +
                section.steps.map((step, i) => `
                    <div class="bg-slate-50 border border-slate-100 rounded-2xl p-4 flex gap-3 items-start">
                        <div class="w-9 h-9 bg-primary/10 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fa-solid ${step.icon} text-primary text-sm"></i>
                        </div>
                        <div>
                            <p class="text-[13px] font-bold text-slate-800">${i + 1}. ${step.label}</p>
                            <p class="text-[12px] text-slate-500 mt-0.5 leading-snug">${step.desc}</p>
                        </div>
                    </div>`).join('') +
                '</div>';
        }
        html += '</div>';
        return html;
    }).join('<hr class="border-slate-100 my-2">');
}

function openServiceModal(key) {
    const data = serviceData[key];
    if (!data) return;

    const videoElement = document.getElementById('modalServiceVideo');
    const placeholder = document.getElementById('videoPlaceholder');

    document.getElementById('serviceTitle').innerText = data.title;
    document.getElementById('serviceDescription').innerText = data.description;

    if (data.video) {
        videoElement.src = data.video;
        videoElement.classList.remove('hidden');
        placeholder.classList.add('hidden');
        videoElement.play().catch(() => {}); // catch autoplay block silently
    } else {
        videoElement.classList.add('hidden');
        placeholder.classList.remove('hidden');
        videoElement.pause();
        videoElement.src = '';
    }

    document.getElementById('serviceHighlights').innerHTML = data.highlights.map(item => `
        <div class="flex items-center gap-2 text-xs text-slate-700 font-bold bg-slate-50 p-3 rounded-xl border border-slate-100">
            <i class="fa-solid fa-circle-check text-primary"></i> ${item}
        </div>`).join('');

    document.getElementById('serviceRichContent').innerHTML = buildRichContent(data.richContent);

    // Reset scroll using the ID (safer than querySelector)
    document.getElementById('modalScrollArea').scrollTop = 0;

    document.getElementById('serviceModal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeServiceModal() {
    const videoElement = document.getElementById('modalServiceVideo');
    videoElement.pause();
    videoElement.src = '';
    document.getElementById('serviceModal').classList.add('hidden');
    document.body.style.overflow = '';
}

function handleOutsideClick(event) {
    if (event.target.id === 'serviceModal') closeServiceModal();
}
</script>

<section id="reviews" class="py-24 bg-slate-900 overflow-hidden relative">
    <div class="absolute top-0 right-0 w-96 h-96 bg-primary/10 rounded-full blur-[120px] pointer-events-none"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
            <div>
                <span class="text-primary font-bold uppercase tracking-[0.2em] text-xs mb-3 block">Testimonials</span>
                <h2 class="text-4xl md:text-5xl font-black text-white">What Our <span class="italic font-light">Clients Say</span></h2>
                <div class="flex gap-1 mt-4 items-center">
                    <div class="flex gap-1">
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                    </div>
                    <span class="ml-3 text-slate-400 font-medium">4.9/5 Based on 500+ Reviews</span>
                </div>
            </div>
            
            <div class="flex gap-3">
                <button onclick="scrollReviews('left')" class="w-14 h-14 rounded-2xl border border-white/10 bg-white/5 flex items-center justify-center text-white hover:bg-primary hover:border-primary transition-all shadow-xl backdrop-blur-md">
                    <i class="fa-solid fa-arrow-left"></i>
                </button>
                <button onclick="scrollReviews('right')" class="w-14 h-14 rounded-2xl border border-white/10 bg-white/5 flex items-center justify-center text-white hover:bg-primary hover:border-primary transition-all shadow-xl backdrop-blur-md">
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
        </div>

        <div id="review-slider" class="flex gap-8 overflow-x-auto snap-x snap-mandatory no-scrollbar pb-8 scroll-smooth">
            
            <div class="min-w-[100%] md:min-w-[45%] lg:min-w-[31%] snap-start bg-white p-10 rounded-[2.5rem] shadow-2xl relative group">
                <i class="fa-solid fa-quote-right absolute top-10 right-10 text-slate-100 text-6xl group-hover:text-primary/10 transition-colors"></i>
                <div class="relative z-10">
                    <div class="flex items-center gap-2 mb-6 text-primary text-sm font-bold uppercase tracking-widest">
                        <i class="fa-solid fa-wind"></i> Air Duct Cleaning
                    </div>
                    <p class="text-slate-600 italic mb-8 leading-relaxed text-lg">"The difference in air quality was immediate. My son's morning allergies have vanished since Purix cleaned our ducts. Professional and spotless!"</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-blue-50 rounded-full flex items-center justify-center font-bold text-primary">SM</div>
                        <div>
                            <h5 class="font-bold text-slate-900">Sarah Miller</h5>
                            <p class="text-xs text-slate-400 uppercase tracking-wider">Homeowner</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="min-w-[100%] md:min-w-[45%] lg:min-w-[31%] snap-start bg-white p-10 rounded-[2.5rem] shadow-2xl relative group">
                <i class="fa-solid fa-quote-right absolute top-10 right-10 text-slate-100 text-6xl group-hover:text-primary/10 transition-colors"></i>
                <div class="relative z-10">
                    <div class="flex items-center gap-2 mb-6 text-orange-500 text-sm font-bold uppercase tracking-widest">
                        <i class="fa-solid fa-fire"></i> Dryer Vent Safety
                    </div>
                    <p class="text-slate-600 italic mb-8 leading-relaxed text-lg">"Our dryer was taking two cycles to dry towels. One visit from Purix and it works like new. The amount of lint they removed was shocking—total lifesavers!"</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-orange-50 rounded-full flex items-center justify-center font-bold text-orange-500">JD</div>
                        <div>
                            <h5 class="font-bold text-slate-900">John Davis</h5>
                            <p class="text-xs text-slate-400 uppercase tracking-wider">Property Manager</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="min-w-[100%] md:min-w-[45%] lg:min-w-[31%] snap-start bg-white p-10 rounded-[2.5rem] shadow-2xl relative group">
                <i class="fa-solid fa-quote-right absolute top-10 right-10 text-slate-100 text-6xl group-hover:text-primary/10 transition-colors"></i>
                <div class="relative z-10">
                    <div class="flex items-center gap-2 mb-6 text-emerald-500 text-sm font-bold uppercase tracking-widest">
                        <i class="fa-solid fa-soap"></i> Carpet Cleaning
                    </div>
                    <p class="text-slate-600 italic mb-8 leading-relaxed text-lg">"I thought our living room carpet was ruined by pet stains. They made it look brand new and it was dry in just a few hours. Incredible equipment!"</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-emerald-50 rounded-full flex items-center justify-center font-bold text-emerald-500">RK</div>
                        <div>
                            <h5 class="font-bold text-slate-900">Robert King</h5>
                            <p class="text-xs text-slate-400 uppercase tracking-wider">Verified Client</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="min-w-[100%] md:min-w-[45%] lg:min-w-[31%] snap-start bg-white p-10 rounded-[2.5rem] shadow-2xl relative group">
                <i class="fa-solid fa-quote-right absolute top-10 right-10 text-slate-100 text-6xl group-hover:text-primary/10 transition-colors"></i>
                <div class="relative z-10">
                    <div class="flex items-center gap-2 mb-6 text-purple-500 text-sm font-bold uppercase tracking-widest">
                        <i class="fa-solid fa-house-chimney"></i> Deep Home Cleaning
                    </div>
                    <p class="text-slate-600 italic mb-8 leading-relaxed text-lg">"We hired them for a move-out clean and they didn't miss a single corner. The property manager was so impressed we got our full deposit back!"</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-purple-50 rounded-full flex items-center justify-center font-bold text-purple-500">AL</div>
                        <div>
                            <h5 class="font-bold text-slate-900">Amy Lewis</h5>
                            <p class="text-xs text-slate-400 uppercase tracking-wider">Business Owner</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    /* Hide scrollbar for Chrome, Safari and Opera */
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }
    /* Hide scrollbar for IE, Edge and Firefox */
    .no-scrollbar {
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
    }
</style>

<section id="gallery" class="py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-primary font-bold uppercase tracking-widest text-sm mb-4 flex items-center justify-center gap-2">
                <span class="w-8 h-px bg-primary"></span> Visual Proof
            </h2>
            <h3 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-6">Our Work in Action</h3>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto">
                See the difference professional equipment and certified technicians make for your home's air quality.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="group relative overflow-hidden rounded-[2rem] shadow-lg aspect-square">
                <img src="{{ asset('images/galler-1.jpeg') }}" alt="Professional Duct Cleaning" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <p class="text-white font-bold text-sm">Main Trunk Cleaning</p>
                </div>
            </div>
            <div class="group relative overflow-hidden rounded-[2rem] shadow-lg aspect-square">
                <img src="{{ asset('images/gallery-3.jpeg') }}" alt="Before and After Duct" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <p class="text-white font-bold text-sm">Negative Pressure Setup</p>
                </div>
            </div>
            <div class="group relative overflow-hidden rounded-[2rem] shadow-lg aspect-square">
                <img src="{{ asset('images/galler-2.jpeg') }}" alt="HVAC Sanitation" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <p class="text-white font-bold text-sm">Dryer Vent Extraction</p>
                </div>
            </div>
            <div class="group relative overflow-hidden rounded-[2rem] shadow-lg aspect-square">
                <img src="{{ asset('images/gallery-4.jpeg') }}" alt="Technician Working" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <p class="text-white font-bold text-sm">Medical-Grade HEPA Filter</p>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
    /* Hides scrollbar but keeps functionality */
    .no-scrollbar::-webkit-scrollbar { display: none; }
    .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
</style>

<script>
    function scrollReviews(direction) {
        const slider = document.getElementById('review-slider');
        const scrollAmount = slider.clientWidth; // Scrolls by one full view width
        if (direction === 'left') {
            slider.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        } else {
            slider.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        }
    }
</script>

<section id="contact" class="py-24 bg-slate-100">
    <div class="container mx-auto px-4 max-w-6xl">
        <div class="bg-white rounded-[3rem] shadow-2xl overflow-hidden grid md:grid-cols-2">
            
            <div class="p-10 lg:p-20 bg-primary text-white relative overflow-hidden">
                <div class="absolute -top-24 -left-24 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
                
                <div class="relative z-10">
                    <span class="inline-block px-4 py-1.5 bg-white/20 rounded-full text-xs font-black uppercase tracking-widest mb-6">
                        Contact Us
                    </span>
                    <h2 class="text-4xl lg:text-5xl font-black mb-6 leading-tight">Request Your <span class="italic opacity-80">Free</span> Estimate</h2>
                    <p class="text-primary-light/90 text-lg mb-12 leading-relaxed">
                        Fill out the form and our air quality specialist will call you within <span class="text-white font-bold underline decoration-white/30 underline-offset-4">15 minutes</span> to provide a firm quote.
                    </p>

                    <div class="space-y-6">
                        <a href="tel:+16306579279" class="group flex items-center gap-5 bg-white/10 p-5 rounded-3xl border border-white/10 hover:bg-white/20 transition-all">
                            <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                                <i class="fa-solid fa-phone-volume text-primary text-xl"></i>
                            </div>
                            <div>
                                <p class="text-xs uppercase tracking-widest text-white/60 font-bold mb-1">Call Directly</p>
                                <p class="text-xl font-black">+1 469-960-8366</p>
                            </div>
                        </a>

                        <div class="flex items-center gap-5 bg-white/5 p-5 rounded-3xl border border-white/5">
                            <div class="w-14 h-14 bg-emerald-500/20 rounded-2xl flex items-center justify-center">
                                <div class="relative flex h-3 w-3">
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
                                </div>
                            </div>
                            <div>
                                <p class="text-xs uppercase tracking-widest text-white/60 font-bold mb-1">Availability</p>
                                <p class="text-xl font-black">24 Hours / 7 Days</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-10 lg:p-20 bg-white">
                <form action="{{ route('contact.store') }}" method="POST" class="space-y-5">
                    @csrf 
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-slate-700 ml-1">Full Name</label>
                            <input type="text" 
                                name="name" 
                                value="{{ old('name') }}"
                                required 
                                placeholder="John Doe" 
                                class="w-full px-5 py-4 rounded-2xl bg-slate-50 border border-slate-200 focus:outline-none focus:ring-4 focus:ring-primary/10 focus:border-primary transition-all @error('name') border-red-500 @enderror">
                            @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm font-bold text-slate-700 ml-1">Phone Number</label>
                            <input type="tel" 
                                name="phone" 
                                value="{{ old('phone') }}"
                                required 
                                placeholder="(469) 960-8366" 
                                class="w-full px-5 py-4 rounded-2xl bg-slate-50 border border-slate-200 focus:outline-none focus:ring-4 focus:ring-primary/10 focus:border-primary transition-all @error('phone') border-red-500 @enderror">
                            @error('phone') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    
                    <div class="space-y-2">
                        <label class="text-sm font-bold text-slate-700 ml-1">Email Address</label>
                        <input type="email" 
                            name="email" 
                            value="{{ old('email') }}"
                            required 
                            placeholder="john@example.com" 
                            class="w-full px-5 py-4 rounded-2xl bg-slate-50 border border-slate-200 focus:outline-none focus:ring-4 focus:ring-primary/10 focus:border-primary transition-all @error('email') border-red-500 @enderror">
                        @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="space-y-2">
                        <label class="text-sm font-bold text-slate-700 ml-1">Service Required</label>
                        <div class="relative">
                            <select name="service" 
                                    required
                                    class="w-full px-5 py-4 rounded-2xl bg-slate-50 border border-slate-200 focus:outline-none focus:ring-4 focus:ring-primary/10 focus:border-primary transition-all text-slate-600 appearance-none cursor-pointer">
                                <option value="" disabled {{ old('service') ? '' : 'selected' }}>Select a service...</option>
                                
                                <optgroup label="Main Services">
                                    <option value="Air Duct Cleaning" {{ old('service') == 'Air Duct Cleaning' ? 'selected' : '' }}>Air Duct Cleaning</option>
                                    <option value="Dryer Vent Cleaning" {{ old('service') == 'Dryer Vent Cleaning' ? 'selected' : '' }}>Dryer Vent Cleaning</option>
                                    <option value="Carpet Cleaning" {{ old('service') == 'Carpet Cleaning' ? 'selected' : '' }}>Carpet Cleaning</option>
                                    <option value="Home Cleaning" {{ old('service') == 'Home Cleaning' ? 'selected' : '' }}>Home Cleaning</option>
                                </optgroup>

                                <optgroup label="Specialized Add-ons">
                                    <option value="Sanitization & Disinfection" {{ old('service') == 'Sanitization & Disinfection' ? 'selected' : '' }}>Sanitization & Disinfection</option>
                                    <option value="Move-In / Move-Out Cleaning" {{ old('service') == 'Move-In / Move-Out Cleaning' ? 'selected' : '' }}>Move-In / Move-Out Cleaning</option>
                                    <option value="Post-Construction Cleaning" {{ old('service') == 'Post-Construction Cleaning' ? 'selected' : '' }}>Post-Construction Cleaning</option>
                                    <option value="Upholstery Cleaning" {{ old('service') == 'Upholstery Cleaning' ? 'selected' : '' }}>Upholstery Cleaning</option>
                                    <option value="Tile & Grout Cleaning" {{ old('service') == 'Tile & Grout Cleaning' ? 'selected' : '' }}>Tile & Grout Cleaning</option>
                                </optgroup>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-5 text-slate-400">
                                <i class="fa-solid fa-chevron-down text-xs"></i>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-sm font-bold text-slate-700 ml-1">Message (Optional)</label>
                        <textarea name="message" 
                                rows="5" 
                                placeholder="Tell us about your home (number of rooms, square footage, etc.)" 
                                class="w-full px-5 py-4 rounded-2xl bg-slate-50 border border-slate-200 focus:outline-none focus:ring-4 focus:ring-primary/10 focus:border-primary transition-all">{{ old('message') }}</textarea>
                    </div>

                    <button type="submit" class="w-full bg-primary text-white py-5 rounded-2xl font-black text-lg hover:bg-primary-dark transition-all shadow-xl shadow-primary/20 flex items-center justify-center gap-3 group">
                        Get My Free Quote
                        <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </button>
                    
                    <p class="text-center text-slate-400 text-xs mt-4">
                        <i class="fa-solid fa-lock mr-1"></i> Your information is kept 100% private and secure.
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>

<section id="faq" class="py-24 bg-slate-50" x-data="{ activeFaq: null }">
    <div class="container mx-auto px-4 max-w-4xl">
        <div class="text-center mb-16">
            <h3 class="text-4xl md:text-5xl font-black text-slate-900 mb-4 italic">Common <span class="text-primary">Questions</span></h3>
            <p class="text-slate-600 text-lg">Everything you need to know about our premium cleaning services.</p>
        </div>

        <div class="space-y-4">
            <div class="bg-white border border-slate-200 rounded-3xl overflow-hidden transition-all shadow-sm">
                <button @click="activeFaq === 1 ? activeFaq = null : activeFaq = 1" class="w-full flex items-center justify-between p-6 text-left focus:outline-none">
                    <span class="text-lg font-bold text-slate-800 flex items-center gap-3">
                        <i class="fa-solid fa-wind text-primary text-sm"></i>
                        How often should I have my air ducts cleaned?
                    </span>
                    <i class="fa-solid fa-chevron-down text-primary transition-transform duration-300" :class="activeFaq === 1 ? 'rotate-180' : ''"></i>
                </button>
                <div x-show="activeFaq === 1" x-collapse x-cloak>
                    <div class="px-6 pb-6 text-slate-600 leading-relaxed ml-7">
                        Industry standards recommend cleaning every 3 to 5 years. However, if you have pets, suffer from allergies, or have recently completed a home renovation, we suggest a professional inspection every 2 years to ensure optimal air quality.
                    </div>
                </div>
            </div>

            <div class="bg-white border border-slate-200 rounded-3xl overflow-hidden transition-all shadow-sm">
                <button @click="activeFaq === 2 ? activeFaq = null : activeFaq = 2" class="w-full flex items-center justify-between p-6 text-left focus:outline-none">
                    <span class="text-lg font-bold text-slate-800 flex items-center gap-3">
                        <i class="fa-solid fa-fire text-orange-500 text-sm"></i>
                        Can a dirty dryer vent really cause a house fire?
                    </span>
                    <i class="fa-solid fa-chevron-down text-primary transition-transform duration-300" :class="activeFaq === 2 ? 'rotate-180' : ''"></i>
                </button>
                <div x-show="activeFaq === 2" x-collapse x-cloak>
                    <div class="px-6 pb-6 text-slate-600 leading-relaxed ml-7">
                        Yes, absolutely. Lint is highly flammable, and when it builds up in the vent, it restricts airflow and causes the dryer to overheat. Professional cleaning once a year is the most effective way to prevent these dangerous fire hazards.
                    </div>
                </div>
            </div>

            <div class="bg-white border border-slate-200 rounded-3xl overflow-hidden transition-all shadow-sm">
                <button @click="activeFaq === 3 ? activeFaq = null : activeFaq = 3" class="w-full flex items-center justify-between p-6 text-left focus:outline-none">
                    <span class="text-lg font-bold text-slate-800 flex items-center gap-3">
                        <i class="fa-solid fa-soap text-emerald-500 text-sm"></i>
                        How long does it take for carpets to dry after cleaning?
                    </span>
                    <i class="fa-solid fa-chevron-down text-primary transition-transform duration-300" :class="activeFaq === 3 ? 'rotate-180' : ''"></i>
                </button>
                <div x-show="activeFaq === 3" x-collapse x-cloak>
                    <div class="px-6 pb-6 text-slate-600 leading-relaxed ml-7">
                        Typically, carpets take between 4 to 8 hours to dry completely. We use high-powered extraction equipment that removes most of the moisture during the process. Keeping your HVAC system on or opening windows can speed this up significantly.
                    </div>
                </div>
            </div>

            <div class="bg-white border border-slate-200 rounded-3xl overflow-hidden transition-all shadow-sm">
                <button @click="activeFaq === 4 ? activeFaq = null : activeFaq = 4" class="w-full flex items-center justify-between p-6 text-left focus:outline-none">
                    <span class="text-lg font-bold text-slate-800 flex items-center gap-3">
                        <i class="fa-solid fa-house-chimney text-purple-500 text-sm"></i>
                        Do I need to be home during the cleaning service?
                    </span>
                    <i class="fa-solid fa-chevron-down text-primary transition-transform duration-300" :class="activeFaq === 4 ? 'rotate-180' : ''"></i>
                </button>
                <div x-show="activeFaq === 4" x-collapse x-cloak>
                    <div class="px-6 pb-6 text-slate-600 leading-relaxed ml-7">
                        It is entirely up to you! Many of our clients provide us with a key or entry code. Our teams are fully vetted, insured, and professional. We just ask that you are available via phone in case we have questions during the cleaning.
                    </div>
                </div>
            </div>
        </div>

        {{-- CTA Button --}}
        <div class="mt-12 text-center">
            <p class="text-slate-500 mb-4">Still have more questions?</p>
            <a href="https://wa.me/14699608366" class="inline-flex items-center gap-2 font-bold text-primary hover:text-primary-dark transition-all">
                Contact our support team <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

@endsection