<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="https://img.icons8.com/fluency/48/layers.png">
    <title>Purix Home Services</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    // CHANGE THIS COLOR ONLY TO CHANGE THE ENTIRE THEME
                    primary: {
                        DEFAULT: '#2563eb', // Current Blue
                        light: '#dbeafe',
                        dark: '#1d4ed8',
                    }
                }
            }
        }
    }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        .animate-float { animation: float 3s ease-in-out infinite; }

        .modal-scroll::-webkit-scrollbar { width: 5px; }
        .modal-scroll::-webkit-scrollbar-track { background: #f1f5f9; border-radius: 10px; }
        .modal-scroll::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
    </style>
</head>
<body class="bg-white text-slate-900">
    
<header class="fixed top-0 w-full z-50">
    <div class="bg-slate-900 text-white py-2 border-b border-white/5">
        <div class="container mx-auto px-4 flex justify-between items-center text-xs md:text-sm font-medium">
            <div class="flex items-center gap-3">
                <a href="tel:+14699608366" class="flex items-center gap-2 hover:text-blue-400 transition-colors group">
                    <span class="bg-primary p-1.5 rounded-full text-white flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-phone text-[10px]"></i>
                    </span>
                    <span class="tracking-wide font-bold">+1 469-960-8366</span>
                </a>
                <span class="hidden md:inline text-slate-500">|</span>
                <p class="hidden md:block text-slate-400 text-[11px] uppercase tracking-widest font-bold">Expert Home Services</p>
            </div>

            <div class="flex items-center gap-4 border-l border-slate-700 pl-4">
                <a href="https://www.facebook.com/PurixHomeServices" target="_blank" class="hover:text-blue-400 transition-colors">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/purixhomeservices/" target="_blank" class="hover:text-blue-400 transition-colors">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>

    <nav class="bg-white/95 backdrop-blur-md shadow-sm border-b border-slate-100">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <a href="{{route('home')}}">
                    <img src="{{asset('images/duct-logo.png')}}" class="w-20 py-2" alt="Purix Logo">
                </a>
            </div>
            
            <div class="hidden lg:flex items-center gap-8 font-semibold text-slate-600">
                <a href="{{route('home')}}" class="hover:text-primary transition">Home</a>
                <a href="{{route('home')}}#about" class="hover:text-primary transition">About Us</a>
                <a href="{{route('home')}}#services" class="hover:text-primary transition">Services</a>
                <a href="{{route('home')}}#reviews" class="hover:text-primary transition">Reviews</a>
                <a href="{{route('home')}}#gallery" class="hover:text-primary transition">Gallery</a>
                <a href="{{route('home')}}#faq" class="hover:text-primary transition">FAQ</a>
                
                <a href="{{route('home')}}#contact" class="bg-primary text-white px-6 py-2.5 rounded-full hover:bg-primary-dark transition shadow-md ml-4">Free Quote</a>
            </div>

            <button id="menu-toggle" class="lg:hidden text-slate-800 p-2 focus:outline-none">
                <i id="menu-icon" class="fa-solid fa-bars-staggered text-2xl"></i>
            </button>
        </div>

        <div id="mobile-menu" class="hidden lg:hidden bg-white border-t border-slate-100 shadow-xl overflow-hidden">
            <div class="px-4 pt-4 pb-8 space-y-2">
                <a href="{{route('home')}}" class="mobile-link block p-3 rounded-lg font-medium text-slate-700 hover:bg-blue-50">Home</a>
                <a href="{{route('home')}}#about" class="mobile-link block p-3 rounded-lg font-medium text-slate-700 hover:bg-blue-50">About Us</a>
                <a href="{{route('home')}}#services" class="mobile-link block p-3 rounded-lg font-medium text-slate-700 hover:bg-blue-50">Services</a>
                <a href="{{route('home')}}#reviews" class="mobile-link block p-3 rounded-lg font-medium text-slate-700 hover:bg-blue-50">Reviews</a>
                <a href="{{route('home')}}#gallery" class="mobile-link block p-3 rounded-lg font-medium text-slate-700 hover:bg-blue-50">Gallery</a>
                <a href="{{route('home')}}#faq" class="mobile-link block p-3 rounded-lg font-medium text-slate-700 hover:bg-blue-50">FAQ</a>
                
                <div class="pt-4">
                    <a href="tel:+14699608366" class="block text-center py-2 mb-2 font-bold text-primary">Call: +1 469-960-8366</a>
                    <a href="{{route('home')}}#contact" class="mobile-link block bg-primary text-white text-center py-4 rounded-xl font-bold">Get My Quote</a>
                </div>
            </div>
        </div>
    </nav>
</header>


@yield('content')
    <footer class="bg-sky-950 text-slate-200 py-10 border-t border-white/5">
        <div class="container mx-auto px-4">
            
            <div class="flex flex-col items-center text-center mb-8 pb-8 border-b border-white/5">
                <span class="text-[10px] md:text-xs uppercase tracking-[0.3em] text-blue-400 font-black mb-4">
                    Our Physical Location
                </span>
                
                <div class="inline-flex flex-col md:flex-row items-center gap-4 bg-white/5 px-8 py-4 rounded-[2rem] border border-white/10 shadow-xl backdrop-blur-sm">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-location-dot text-primary text-xl"></i>
                        <span class="text-lg md:text-xl font-extrabold tracking-tight">
                            525 W Westchester Pkwy,
                        </span>
                    </div>
                    <span class="hidden md:block text-primary/30 text-xl font-light">|</span> 
                    <span class="text-lg md:text-xl font-bold text-slate-300">
                        Grand Prairie, TX 75052
                    </span>
                </div>
                
                {{-- Quick Link to Google Maps --}}
                <a href="https://www.google.com/maps/search/?api=1&query=525+W+Westchester+Pkwy+Grand+Prairie+TX+75052" 
                target="_blank" 
                class="mt-4 text-xs text-blue-400/60 hover:text-primary transition-all flex items-center gap-2">
                    <i class="fa-solid fa-up-right-from-square"></i> Get Directions
                </a>
            </div>

            <div class="flex flex-col md:flex-row justify-between items-center gap-6 text-sm opacity-60">
                <p class="order-2 md:order-1 text-center md:text-left">
                    © 2026 Purix Home Services. All Rights Reserved.
                </p>

                <div class="order-1 md:order-2 flex items-center gap-8 font-medium">
                    <a href="{{route('privacy')}}" class="hover:text-primary transition-all">Privacy Policy</a>
                    <a href="{{route('terms')}}" class="hover:text-primary transition-all">Terms of Service</a>
                </div>
            </div>

        </div>
    </footer>

    <script>
        const btn = document.getElementById('menu-toggle');
        const menu = document.getElementById('mobile-menu');
        const icon = document.getElementById('menu-icon');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            const isHidden = menu.classList.contains('hidden');
            icon.className = isHidden ? 'fa-solid fa-bars-staggered text-2xl' : 'fa-solid fa-xmark text-2xl';
        });

        document.querySelectorAll('.mobile-link').forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.add('hidden');
                icon.className = 'fa-solid fa-bars-staggered text-2xl';
            });
        });
    </script>

</body>
</html>