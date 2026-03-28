@extends('layouts.app')
@section('content')
<main class="container mx-auto py-16">
    <div class="bg-white px-4 py-24 rounded-[2.5rem]">
        <h1 class="text-4xl font-black text-slate-900 mb-4">Privacy Policy</h1>
        <p class="text-slate-500 mb-10 italic">Last Updated: March 2026</p>

        <div class="space-y-8 leading-relaxed">
            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4">1. Information We Collect</h2>
                <p>We collect information you provide directly to us when you request a quote, schedule a service, or contact us. This may include your name, email address, phone number, and home address.</p>
            </section>

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4">2. How We Use Your Information</h2>
                <ul class="list-disc ml-6 space-y-2 text-slate-600">
                    <li>To provide, maintain, and improve our duct cleaning services.</li>
                    <li>To send you technical notices, updates, and support messages.</li>
                    <li>To respond to your comments and questions.</li>
                    <li>To communicate with you about promotions and offers (you may opt-out at any time).</li>
                </ul>
            </section>

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4">3. Data Security</h2>
                <p>We take reasonable measures to help protect information about you from loss, theft, misuse, and unauthorized access. We do not sell your personal data to third parties.</p>
            </section>

            <section class="bg-primary-light p-6 rounded-2xl border border-primary/10">
                <h2 class="text-xl font-bold text-primary mb-2">Contact Us</h2>
                <p class="text-sm">If you have questions about this policy, please contact us at <strong>info@purixhomeservices.com</strong></p>
            </section>
        </div>
    </div>
</main>
@endsection