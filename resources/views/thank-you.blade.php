@extends('layouts.app') {{-- Or your main layout --}}

@section('content')
<section class="min-h-[80vh] flex items-center justify-center bg-slate-50 px-4 pt-20 mt-16 pb-10">
    <div class="max-w-md w-full bg-white p-12 rounded-[3rem] shadow-2xl text-center border border-slate-100">
        <div class="w-24 h-24 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mx-auto mb-8 animate-bounce">
            <i class="fa-solid fa-paper-plane text-4xl"></i>
        </div>
        <h1 class="text-4xl font-black text-slate-900 mb-4 italic">Success!</h1>
        <p class="text-slate-500 text-lg mb-10 leading-relaxed">
            Your request has been received. Our specialist will review your details and call you back within <span class="text-primary font-bold">15 minutes</span>.
        </p>
        <div class="space-y-4">
            <a href="/" class="block w-full bg-primary text-white py-4 rounded-2xl font-bold hover:shadow-lg transition-all">
                Return to Home
            </a>
            <a href="https://wa.me/16306579279" class="block w-full bg-emerald-50 text-emerald-600 py-4 rounded-2xl font-bold hover:bg-emerald-100 transition-all flex items-center justify-center gap-2">
                <i class="fa-brands fa-whatsapp text-xl"></i> Chat on WhatsApp
            </a>
        </div>
    </div>
</section>
@endsection