<footer class="bg-surface-container-highest text-on-surface pt-16 pb-8 border-t border-outline-variant">
    <div class="max-w-[1280px] mx-auto px-5 md:px-16">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 md:gap-8 mb-16">
            <!-- Brand Column -->
            <div class="col-span-1 md:col-span-1 flex flex-col gap-4">
                <a href="{{ route('public.home') }}" class="font-bold text-primary flex items-center gap-2">
                    <span class="material-symbols-outlined text-3xl" data-icon="eco">eco</span>
                    <span class="text-2xl tracking-tight">Clitoria</span>
                </a>
                <p class="text-on-surface-variant text-sm mt-2">
                    Cultivating Digital Tranquility. Experience the finest organic butterfly pea flowers, ethically sourced for your daily wellness ritual.
                </p>
            </div>

            <!-- Quick Links -->
            <div class="col-span-1 flex flex-col gap-4">
                <h3 class="font-bold text-lg mb-2 text-on-surface">Quick Links</h3>
                <a href="#" class="text-on-surface-variant hover:text-primary transition-colors text-sm w-fit">Shop Collection</a>
                <a href="#" class="text-on-surface-variant hover:text-primary transition-colors text-sm w-fit">Health Benefits</a>
                <a href="#" class="text-on-surface-variant hover:text-primary transition-colors text-sm w-fit">Our Story</a>
                <a href="#" class="text-on-surface-variant hover:text-primary transition-colors text-sm w-fit">Community Gallery</a>
            </div>

            <!-- Support -->
            <div class="col-span-1 flex flex-col gap-4">
                <h3 class="font-bold text-lg mb-2 text-on-surface">Support</h3>
                <a href="#" class="text-on-surface-variant hover:text-primary transition-colors text-sm w-fit">FAQ</a>
                <a href="#" class="text-on-surface-variant hover:text-primary transition-colors text-sm w-fit">Shipping Policy</a>
                <a href="#" class="text-on-surface-variant hover:text-primary transition-colors text-sm w-fit">Returns & Refunds</a>
                <a href="#" class="text-on-surface-variant hover:text-primary transition-colors text-sm w-fit">Contact Us</a>
            </div>

            <!-- Newsletter / Admin Link -->
            <div class="col-span-1 flex flex-col gap-4">
                <h3 class="font-bold text-lg mb-2 text-on-surface">Stay Updated</h3>
                <p class="text-on-surface-variant text-sm">Join our newsletter for exclusive offers and brewing tips.</p>
                <div class="flex mt-2">
                    <input type="email" placeholder="Your email address" class="w-full bg-surface-container-low border border-outline-variant text-on-surface rounded-l-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary transition-all text-sm">
                    <button class="bg-primary text-white px-4 py-2 rounded-r-xl hover:bg-primary-container transition-colors focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
                        <span class="material-symbols-outlined text-sm">send</span>
                    </button>
                </div>
                <div class="mt-8">
                    <a href="{{ route('admin.login') }}" class="inline-flex items-center gap-2 text-on-surface-variant hover:text-primary transition-colors text-xs opacity-70 hover:opacity-100">
                        <span class="material-symbols-outlined text-sm" data-icon="shield">shield</span>
                        Admin Console
                    </a>
                </div>
            </div>
        </div>

        <!-- Bottom Row -->
        <div class="pt-8 border-t border-outline-variant flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-on-surface-variant text-sm text-center md:text-left">
                &copy; {{ date('Y') }} Clitoria Digital Commerce. All rights reserved.
            </p>
            <div class="flex gap-6">
                <a href="#" class="text-on-surface-variant hover:text-primary transition-colors text-sm">Privacy Policy</a>
                <a href="#" class="text-on-surface-variant hover:text-primary transition-colors text-sm">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>
