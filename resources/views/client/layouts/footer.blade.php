<footer class="bg-navy-900 text-white pt-20 pb-6 border-t border-slate-800">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">

        <!-- COLONNE 1 : Accompagnement sur mesure -->
        <div class="space-y-4">
            <span class="text-sm font-bold tracking-[0.2em]">DO<span class="text-gold-500 font-light">M</span>OS</span>
            <h4 class="font-serif text-lg italic text-gold-500 tracking-wide leading-snug">
                Découvrez notre accompagnement sur mesure
            </h4>
            <p class="text-[12px] text-slate-400 font-light leading-relaxed">
                Confiez-nous votre bien : bénéficiez d'une visibilité maximale, d'un suivi sur mesure et d'une estimation gratuite.
                <a href="{{route('home.index')}}#contact" class="text-gold-500 hover:text-gold-400 underline underline-offset-2 transition">
                    outil d'estimation
                </a>&nbsp;!
            </p>
            <div class="flex space-x-4 text-slate-400 text-xs pt-2">
                <a href="#" class="hover:text-gold-500 transition-transform hover:scale-110 duration-300"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="hover:text-gold-500 transition-transform hover:scale-110 duration-300"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#" class="hover:text-gold-500 transition-transform hover:scale-110 duration-300"><i class="fa-brands fa-facebook-f"></i></a>
            </div>
        </div>

        <!-- COLONNE 2 : T-LEX Clean -->
        <div class="space-y-4">
            <!-- <div class="w-10 h-10 rounded-xl bg-gold-500/10 border border-gold-500/20 flex items-center justify-center text-gold-500 text-lg mb-2">
                <i class="fa-solid fa-truck-moving"></i>
            </div> -->
            <h4 class="font-bold text-xs tracking-wider uppercase text-gold-500">
                Obtenez une meilleure offre pour votre déménagement
            </h4>
            <p class="text-[12px] text-slate-400 font-light leading-relaxed">
                Vous déménagez ? Restez zen, <strong class="text-white/80">T-LEX Clean</strong> s'occupe de tout.
            </p>
            <p class="text-[12px] text-slate-400 font-light leading-relaxed">
                Comparez les meilleurs déménageurs avec T-LEX Clean et obtenez votre devis gratuit. Économisez jusqu'à... <strong class="text-gold-500">30 %</strong> sur votre déménagement.
            </p>
            <a href="#"
                class="inline-block border border-white/20 text-white/90 px-5 py-2.5 rounded-full text-[10px] font-bold tracking-widest uppercase hover:bg-white hover:text-navy-900 transition-all duration-300 mt-2">
                En savoir plus
            </a>
        </div>

        <!-- COLONNE 3 : Navigation -->
        <div>
            <h4 class="font-bold text-xs tracking-wider uppercase text-gold-500 mb-5">Navigation</h4>
            <ul class="space-y-3 text-[12px] text-slate-400 font-medium">
                <li><a href="{{route('home.index')}}" class="hover:text-white transition-colors duration-300">Accueil</a></li>
                <li><a href="{{route('liste.index')}}" class="hover:text-white transition-colors duration-300">Nos Biens</a></li>
                <li><a href="{{route('ask.index')}}" class="hover:text-white transition-colors duration-300">Demande sur Mesure</a></li>
                <li><a href="{{route('home.index')}}#contact" class="hover:text-white transition-colors duration-300">Contact</a></li>
            </ul>
        </div>

        <!-- COLONNE 4 : Newsletter -->
        <div class="space-y-4">
            <h4 class="font-bold text-xs tracking-wider uppercase text-gold-500">La newsletter DOMOS</h4>
            <p class="text-[12px] text-slate-400 font-light leading-relaxed">
                Découvrez nos biens en exclusivité, les actualités du secteur et plus encore&nbsp;!
            </p>
            <form onsubmit="handleNewsletter(event)" class="flex">
                <input type="email" placeholder="Votre e-mail" aria-label="Adresse e-mail" required
                    class="bg-white/5 text-white border border-white/5 rounded-l-xl px-4 py-2.5 text-xs w-full focus:outline-none focus:border-gold-500/40 focus:bg-white/10 transition" />
                <button
                    class="bg-gold-500 text-navy-900 px-4 rounded-r-xl text-xs font-bold hover:bg-gold-600 transition-all duration-300">
                    <i class="fa-solid fa-paper-plane"></i>
                </button>
            </form>
        </div>

    </div>

    <!-- BARRE LÉGALE -->
    <div class="max-w-7xl mx-auto px-6 lg:px-8 border-t border-slate-800/60 pt-8">
        <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-[11px] text-slate-500 font-light">
            <p>&copy; 2025 T-LEX Global. Tous droits réservés. <a href="#" class="hover:text-gold-500 transition-colors duration-300">Mentions Légales &amp; Confidentialité</a>.</p>
            <div class="flex flex-wrap gap-x-6 gap-y-1 text-slate-600">
                <span>N°RCCM : TG-LFW-01-2023-A10-02643</span>
                <span>NIF : 1001851727</span>
                <span>N°CNSS : 171035</span>
            </div>
        </div>
    </div>
</footer>