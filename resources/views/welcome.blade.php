@extends('layouts.app')
@section('content')

<section class="relative pt-40 pb-20 lg:pt-56 lg:pb-32 bg-slate-50 overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full opacity-40 pointer-events-none">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-primary/10 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 -right-24 w-80 h-80 bg-blue-400/10 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            
            <div>
                <div class="inline-flex items-center gap-2 bg-white border border-slate-200 px-4 py-2 rounded-full shadow-sm mb-6">
                    <span class="flex h-2 w-2 rounded-full bg-emerald-500 animate-ping"></span>
                    <span class="text-xs font-black uppercase tracking-widest text-slate-700">Premium Home Care</span>
                </div>

                <h1 class="text-5xl lg:text-7xl font-black text-slate-900 leading-[1.1] mb-8">
                    Total Home <br>
                    <span class="text-primary italic font-light">Revitalization.</span>
                </h1>

                <p class="text-lg text-slate-500 mb-10 max-w-lg leading-relaxed">
                    From your air ducts to your carpets, Purix delivers hospital-grade cleaning solutions. Experience a healthier, fresher home today.
                </p>

                <div class="flex flex-wrap gap-3 mb-10">
                    <span class="px-4 py-2 bg-white border border-slate-200 rounded-xl text-sm font-bold text-slate-700 shadow-sm flex items-center gap-2">
                        <i class="fa-solid fa-wind text-primary"></i> Air Duct
                    </span>
                    <span class="px-4 py-2 bg-white border border-slate-200 rounded-xl text-sm font-bold text-slate-700 shadow-sm flex items-center gap-2">
                        <i class="fa-solid fa-rug text-primary"></i> Carpet
                    </span>
                    <span class="px-4 py-2 bg-white border border-slate-200 rounded-xl text-sm font-bold text-slate-700 shadow-sm flex items-center gap-2">
                        <i class="fa-solid fa-fire-burner text-primary"></i> Dryer Vent
                    </span>
                    <span class="px-4 py-2 bg-white border border-slate-200 rounded-xl text-sm font-bold text-slate-700 shadow-sm flex items-center gap-2">
                        <i class="fa-solid fa-house-chimney text-primary"></i> Home Cleaning
                    </span>
                </div>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#contact" class="bg-primary text-white px-10 py-5 rounded-2xl font-black text-lg hover:bg-primary-dark transition shadow-xl shadow-primary/20 text-center">
                        Get Free Estimate
                    </a>
                    <a href="tel:+14699608366" class="bg-white text-slate-900 border border-slate-200 px-10 py-5 rounded-2xl font-black text-lg hover:bg-slate-50 transition text-center flex items-center justify-center gap-2">
                        <i class="fa-solid fa-phone text-primary"></i> Call Now
                    </a>
                </div>
            </div>

            <div class="relative grid grid-cols-2 gap-4">
                <div class="space-y-4">
                    <div class="bg-white p-6 rounded-[2rem] shadow-xl border border-slate-100 mt-8">
                        <i class="fa-solid fa-sparkles text-3xl text-yellow-400 mb-4"></i>
                        <h4 class="font-bold text-slate-900">Sanitization</h4>
                        <p class="text-xs text-slate-400 mt-1">99.9% Bacteria Removal</p>
                    </div>
                    <div class="bg-primary p-6 rounded-[2rem] shadow-xl text-white">
                        <i class="fa-solid fa-box-open text-3xl mb-4"></i>
                        <h4 class="font-bold">Move-In/Out</h4>
                        <p class="text-xs opacity-80 mt-1">Stress-Free Cleaning</p>
                    </div>
                </div>
                <div class="space-y-4">
                    <div class="bg-slate-900 p-6 rounded-[2rem] shadow-xl text-white">
                        <i class="fa-solid fa-hard-hat text-3xl mb-4"></i>
                        <h4 class="font-bold">Post-Construction</h4>
                        <p class="text-xs opacity-60 mt-1">Dust-Free Finish</p>
                    </div>
                    <div class="bg-white p-6 rounded-[2rem] shadow-xl border border-slate-100">
                        <i class="fa-solid fa-couch text-3xl text-primary mb-4"></i>
                        <h4 class="font-bold text-slate-900">Upholstery</h4>
                        <p class="text-xs text-slate-400 mt-1">Fabric Protection</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
                <button onclick="openServiceModal('air-duct')" class="text-primary font-bold text-sm flex items-center gap-2 hover:gap-3 transition-all">
                    Learn More <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>

            <div class="bg-white p-8 rounded-[2.5rem] shadow-sm hover:shadow-xl transition-all border border-slate-100 group">
                <div class="w-16 h-16 bg-orange-50 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-orange-500 transition-colors">
                    <i class="fa-solid fa-smog text-2xl text-orange-500 group-hover:text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-slate-900 mb-4">Dryer Vent Cleaning</h4>
                <button onclick="openServiceModal('dryer-vent')" class="text-primary font-bold text-sm flex items-center gap-2 hover:gap-3 transition-all">
                    Learn More <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>

            <div class="bg-white p-8 rounded-[2.5rem] shadow-sm hover:shadow-xl transition-all border border-slate-100 group">
                <div class="w-16 h-16 bg-emerald-50 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-emerald-500 transition-colors">
                    <i class="fa-solid fa-soap text-2xl text-emerald-500 group-hover:text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-slate-900 mb-4">Carpet Cleaning</h4>
                <button onclick="openServiceModal('carpet')" class="text-primary font-bold text-sm flex items-center gap-2 hover:gap-3 transition-all">
                    Learn More <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>

            <div class="bg-white p-8 rounded-[2.5rem] shadow-sm hover:shadow-xl transition-all border border-slate-100 group">
                <div class="w-16 h-16 bg-purple-50 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-purple-500 transition-colors">
                    <i class="fa-solid fa-house-chimney text-2xl text-purple-500 group-hover:text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-slate-900 mb-4">Home Cleaning</h4>
                <button onclick="openServiceModal('home-cleaning')" class="text-primary font-bold text-sm flex items-center gap-2 hover:gap-3 transition-all">
                    Learn More <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>

</section>
<div id="serviceModal" class="fixed inset-0 z-[150] flex items-center justify-center bg-slate-900/90 backdrop-blur-sm hidden p-4 my-4" onclick="handleOutsideClick(event)">
    <div class="bg-white w-full max-w-2xl rounded-[3rem] overflow-hidden shadow-2xl relative">
        
        <button onclick="closeServiceModal()" class="absolute top-6 right-6 w-10 h-10 bg-slate-100 rounded-full flex items-center justify-center text-slate-500 hover:bg-red-50 hover:text-red-500 transition-all z-30">
            <i class="fa-solid fa-xmark"></i>
        </button>

        <div id="mediaContainer" class="relative w-full h-72 bg-slate-900 flex items-center justify-center">
            <video id="modalServiceVideo" class="w-full h-full object-cover hidden" controls playsinline muted>
                <source src="" type="video/mp4">
            </video>
            
            <div id="videoPlaceholder" class="text-center">
                <div class="w-20 h-20 bg-primary/20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fa-solid fa-clapperboard text-3xl text-primary"></i>
                </div>
                <p class="text-slate-400 text-sm font-medium">Service Demonstration</p>
            </div>
        </div>

        <div class="p-8 lg:p-10">
            <h3 id="serviceTitle" class="text-3xl font-black text-slate-900 mb-2 tracking-tight"></h3>
            <p id="serviceDescription" class="text-slate-600 leading-relaxed mb-6"></p>

            <div id="serviceHighlights" class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-10">
                </div>
            
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="#contact" onclick="closeServiceModal()" class="flex-1 bg-primary text-white text-center py-4 rounded-2xl font-bold shadow-lg shadow-primary/20 hover:bg-primary-dark transition">
                    Get a Free Quote
                </a>
                <a href="https://wa.me/14699608366" class="flex-1 bg-emerald-500 text-white text-center py-4 rounded-2xl font-bold hover:bg-emerald-600 transition flex items-center justify-center gap-2">
                    <i class="fa-brands fa-whatsapp"></i> Chat with Us
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    const serviceData = {
        'air-duct': {
            title: 'Professional Air Duct Cleaning',
            description: 'Our high-pressure vacuum extraction removes 99.9% of dust and allergens from your home HVAC system.',
            highlights: ['NADCA Certified', 'HEPA-Filtration', 'Full Sanitation'],
            video: "{{ asset('videos/title-gout.mp4') }}"
        },
        'dryer-vent': {
            title: 'Dryer Vent Safety',
            description: 'Prevent dangerous lint fires and improve drying speed with our professional vent clearing service.',
            highlights: ['Fire Prevention', 'Energy Efficiency', 'Lint Removal'],
            video: "{{ asset('videos/dryer-vent.mp4') }}"
        },
        'carpet': {
            title: 'Carpet Steam Cleaning',
            description: 'Deep extraction cleaning that restores your carpets to their original beauty and freshness.',
            highlights: ['Stain Removal', 'Pet Safe', 'Fast Dry'],
            video: "{{ asset('videos/wood.mp4') }}" // Example with no video
        },
        'home-cleaning': {
            title: 'Deep Home Cleaning',
            description: 'Comprehensive top-to-bottom cleaning for every room in your residence.',
            highlights: ['Eco-Friendly', 'Bonded & Insured', 'Kitchen/Bath Focus'],
            video: "{{ asset('videos/home.mp4') }}"
        }
    };

    function openServiceModal(key) {
        const data = serviceData[key];
        if (!data) return;

        const videoElement = document.getElementById('modalServiceVideo');
        const placeholder = document.getElementById('videoPlaceholder');

        // Update Text
        document.getElementById('serviceTitle').innerText = data.title;
        document.getElementById('serviceDescription').innerText = data.description;

        // Video Logic
        if (data.video && data.video !== "") {
            videoElement.src = data.video;
            videoElement.classList.remove('hidden');
            placeholder.classList.add('hidden');
            videoElement.play();
        } else {
            videoElement.classList.add('hidden');
            placeholder.classList.remove('hidden');
            videoElement.pause();
            videoElement.src = "";
        }

        // Highlights Logic
        const highlightsContainer = document.getElementById('serviceHighlights');
        highlightsContainer.innerHTML = data.highlights.map(item => `
            <div class="flex items-center gap-2 text-sm text-slate-700 font-bold bg-slate-50 p-3 rounded-xl border border-slate-100">
                <i class="fa-solid fa-circle-check text-primary"></i> ${item}
            </div>
        `).join('');

        document.getElementById('serviceModal').classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeServiceModal() {
        const videoElement = document.getElementById('modalServiceVideo');
        videoElement.pause();
        videoElement.src = "";
        document.getElementById('serviceModal').classList.add('hidden');
        document.body.style.overflow = '';
    }

    function handleOutsideClick(event) {
        if (event.target.id === 'serviceModal') closeServiceModal();
    }
</script>

<section id="reviews" class="py-24 bg-slate-50 overflow-hidden">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
            <div>
                <h2 class="text-4xl font-bold text-slate-900">What Our Clients Say</h2>
                <div class="flex gap-1 mt-4">
                    <i class="fa-solid fa-star text-yellow-400"></i>
                    <i class="fa-solid fa-star text-yellow-400"></i>
                    <i class="fa-solid fa-star text-yellow-400"></i>
                    <i class="fa-solid fa-star text-yellow-400"></i>
                    <i class="fa-solid fa-star text-yellow-400"></i>
                    <span class="ml-2 text-slate-500 font-medium">(4.9/5 Rating)</span>
                </div>
            </div>
            
            <div class="flex gap-3">
                <button onclick="scrollReviews('left')" class="w-12 h-12 rounded-full border border-slate-200 bg-white flex items-center justify-center hover:bg-primary hover:text-white hover:border-primary transition-all shadow-sm">
                    <i class="fa-solid fa-arrow-left"></i>
                </button>
                <button onclick="scrollReviews('right')" class="w-12 h-12 rounded-full border border-slate-200 bg-white flex items-center justify-center hover:bg-primary hover:text-white hover:border-primary transition-all shadow-sm">
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
        </div>

        <div id="review-slider" class="flex gap-8 overflow-x-auto snap-x snap-mandatory no-scrollbar pb-8 scroll-smooth">
            
            <div class="min-w-[100%] md:min-w-[45%] lg:min-w-[31%] snap-start bg-white p-8 rounded-3xl shadow-sm border border-slate-100">
                <p class="text-slate-600 italic mb-8 leading-relaxed">"Fantastic service! The air feels so much lighter and the technicians were very professional and clean."</p>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-primary-light rounded-full flex items-center justify-center font-bold text-primary">SM</div>
                    <div>
                        <h5 class="font-bold">Sarah Miller</h5>
                        <p class="text-xs text-slate-400 uppercase tracking-wider">Homeowner</p>
                    </div>
                </div>
            </div>

            <div class="min-w-[100%] md:min-w-[45%] lg:min-w-[31%] snap-start bg-white p-8 rounded-3xl shadow-sm border border-slate-100">
                <p class="text-slate-600 italic mb-8 leading-relaxed">"I never realized how much dust was in our dryer vent. They probably saved us from a house fire!"</p>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-primary-light rounded-full flex items-center justify-center font-bold text-primary">JD</div>
                    <div>
                        <h5 class="font-bold">John Davis</h5>
                        <p class="text-xs text-slate-400 uppercase tracking-wider">Property Manager</p>
                    </div>
                </div>
            </div>

            <div class="min-w-[100%] md:min-w-[45%] lg:min-w-[31%] snap-start bg-white p-8 rounded-3xl shadow-sm border border-slate-100">
                <p class="text-slate-600 italic mb-8 leading-relaxed">"Very transparent with their pricing. No hidden fees and the before/after photos were mind-blowing."</p>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-primary-light rounded-full flex items-center justify-center font-bold text-primary">RK</div>
                    <div>
                        <h5 class="font-bold">Robert King</h5>
                        <p class="text-xs text-slate-400 uppercase tracking-wider">Business Owner</p>
                    </div>
                </div>
            </div>

            <div class="min-w-[100%] md:min-w-[45%] lg:min-w-[31%] snap-start bg-white p-8 rounded-3xl shadow-sm border border-slate-100">
                <p class="text-slate-600 italic mb-8 leading-relaxed">"Prompt, professional, and powerful equipment. My house smells fresh for the first time in years."</p>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-primary-light rounded-full flex items-center justify-center font-bold text-primary">AL</div>
                    <div>
                        <h5 class="font-bold">Amy Lewis</h5>
                        <p class="text-xs text-slate-400 uppercase tracking-wider">Verified Client</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

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