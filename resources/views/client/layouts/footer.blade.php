<footer class="bg-navy-900 text-white pt-20 pb-8 border-t border-slate-800">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-12 mb-16">
        <div class="space-y-4">
            <span class="text-sm font-bold tracking-[0.2em]">DO<span
                    class="text-gold-500 font-light">M</span>OS</span>
            <p class="text-[11px] text-slate-400 font-light leading-relaxed">Maison internationale de référence
                dédiée à l'acquisition, la valorisation et l'arbitrage d'actifs d'exceptions.</p>
            <div class="flex space-x-4 text-slate-400 text-xs">
                <a href="#" class="hover:text-gold-500 transition"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="hover:text-gold-500 transition"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#" class="hover:text-gold-500 transition"><i class="fa-brands fa-facebook-f"></i></a>
            </div>
        </div>
        <div>
            <h4 class="font-bold text-xs tracking-wider uppercase text-gold-500 mb-5">Navigation Privée</h4>
            <ul class="space-y-3 text-[11px] text-slate-400 font-medium">
                <li><a href="{{route('home.index')}}" class="hover:text-white transition">Accueil Général</a></li>
                <li><a href="{{route('liste.index')}}" class="hover:text-white transition">La Collection</a></li>
                <li><a href="{{route('ask.index')}}" class="hover:text-white transition">Mandat de Recherche</a>
                </li>
            </ul>
        </div>
        <div class="space-y-4">
            <h4 class="font-bold text-xs tracking-wider uppercase text-gold-500 mb-5">Lancements Off-Market</h4>
            <p class="text-[11px] text-slate-400 font-light">Accédez en priorité aux opportunités confidentielles
                non répertoriées.</p>
            <form onsubmit="handleNewsletter(event)" class="flex">
                <input type="email" placeholder="Votre e-mail" required
                    class="bg-white/5 text-white border border-white/5 rounded-l-xl px-4 py-2.5 text-xs w-full focus:outline-none" />
                <button
                    class="bg-gold-500 text-navy-900 px-4 rounded-r-xl text-xs font-bold hover:bg-gold-600 transition"><i
                        class="fa-solid fa-paper-plane"></i></button>
            </form>
        </div>
    </div>
    <div
        class="max-w-7xl mx-auto px-6 lg:px-8 text-center text-[11px] text-slate-500 border-t border-slate-800/60 pt-8">
        &copy; 2026 LUXE & HABITAT. Tous droits réservés. Mentions Légales & Confidentialité.
    </div>
</footer>
