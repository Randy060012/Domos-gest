@extends('client.layouts.master')
@section('content')
<main class="pt-0">

    <!-- HERO SECTION CINÉMATIQUE -->
    <section class="relative min-h-[80vh] sm:min-h-[90vh] flex items-center justify-center bg-cover bg-center"
        style="background-image: linear-gradient(rgba(1, 44, 78, 0.40), rgba(24, 28, 33, 0.60)), url('https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=1920&q=80');">
        <div class="w-full max-w-7xl mx-auto px-6 lg:px-8 pt-20 text-center space-y-8 relative z-10">
            <!-- <div class="space-y-4">
                <span
                    class="inline-block uppercase tracking-[0.25em] text-[10px] font-bold text-white border-b border-gold-500/60 pb-2 animate__animated animate__fadeInDown">L'immobilier
                    Haute Couture</span>
                <h1
                    class="text-4xl sm:text-6xl font-serif font-normal text-white italic tracking-wide max-w-4xl mx-auto leading-tight animate__animated animate__fadeInUp">
                    Demeures Singulières & Architectures d'Exception</h1>
                <p
                    class="text-sm sm:text-base text-slate-200/90 font-light tracking-wider max-w-2xl mx-auto animate__animated animate__fadeInUp animate__delay-1s">
                    Une gérance et une sélection hautement confidentielle de patrimoines d'exception.</p>
            </div> -->

            <div class="space-y-6">
                <span class="inline-block uppercase tracking-[0.25em] text-[10px] font-bold text-white border-b border-gold-500/60 pb-2 animate__animated animate__fadeInDown">
                    L'immobilier Haute Couture
                </span>

                <!-- H1 contenant le Slider Horizontal -->
                <h1 class="text-3xl sm:text-5xl md:text-6xl font-serif font-normal text-white italic tracking-wide max-w-4xl mx-auto leading-tight animate__animated animate__fadeInUp h-[3.5rem] sm:h-[4.5rem] md:h-[5rem] relative overflow-hidden flex items-center justify-center">
                    <!-- Chaque slide est positionné de manière absolue pour se superposer parfaitement -->
                    <span class="absolute w-full px-4 text-center opacity-0 animate-fade-slide" style="animation-delay: 0s;">
                        Résidentiel et professionnel
                    </span>
                    <span class="absolute w-full px-4 text-center opacity-0 animate-fade-slide" style="animation-delay: 3s;">
                        Des experts à votre écoute
                    </span>
                    <span class="absolute w-full px-4 text-center opacity-0 animate-fade-slide" style="animation-delay: 6s;">
                        Sécurité et Transparence
                    </span>
                    <span class="absolute w-full px-4 text-center opacity-0 animate-fade-slide" style="animation-delay: 9s;">
                        Louez en toute sérénité
                    </span>
                    <span class="absolute w-full px-4 text-center opacity-0 animate-fade-slide" style="animation-delay: 12s;">
                        Vente avec garantie
                    </span>
                </h1>

                <p class="text-sm sm:text-base text-slate-200/90 font-light tracking-wider max-w-2xl mx-auto animate__animated animate__fadeInUp animate__delay-1s">
                    Une gérance et une sélection hautement confidentielle de patrimoines d'exception.
                </p>
            </div>

            <!-- FORMULAIRE DE RECHERCHE INTÉGRÉ SANS BORDURES LOURDES -->
            <div
                class="bg-white p-5 md:p-6 rounded-[32px] shadow-[0_30px_80px_rgba(0,0,0,0.15)] text-slate-900 max-w-4xl mx-auto mt-12 animate__animated animate__zoomIn animate__delay-1s">
                <form onsubmit="executeSearch(event)"
                    class="grid grid-cols-1 sm:grid-cols-4 gap-5 items-end text-left">
                    <div class="space-y-1.5">
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400"><i
                                class="fa-solid fa-location-dot text-gold-500/70 mr-1.5"></i> Localisation</label>
                        <select id="search-loc"
                            class="w-full bg-slate-50/70 rounded-xl px-4 py-3 text-xs font-medium text-slate-700 focus:outline-none focus:bg-white focus:ring-1 focus:ring-gold-500 transition cursor-pointer">
                            <option value="">Toutes les villes</option>
                            <option value="Paris">Paris</option>
                            <option value="Cannes">Cannes</option>
                            <option value="Saint-Tropez">Saint-Tropez</option>
                        </select>
                    </div>
                    <div class="space-y-1.5">
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400"><i
                                class="fa-solid fa-house text-gold-500/70 mr-1.5"></i> Type de bien</label>
                        <select id="search-type"
                            class="w-full bg-slate-50/70 rounded-xl px-4 py-3 text-xs font-medium text-slate-700 focus:outline-none focus:bg-white focus:ring-1 focus:ring-gold-500 transition cursor-pointer">
                            <option value="">Tous types</option>
                            <option value="Villa">Pièces simples</option>
                            <option value="Villa">Pièces interne</option>
                            <option value="Villa">Studios</option>
                            <option value="Villa">Chambres Salon</option>
                            <option value="Villa">Appartement Meublé</option>
                            <option value="Villa">Villa</option>
                            <option value="Villa">Villa Meublé</option>
                        </select>
                    </div>
                    <div class="space-y-1.5">
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400"><i
                                class="fa-solid fa-tags text-gold-500/70 mr-1.5"></i> Budget Max</label>
                        <select id="search-budget"
                            class="w-full bg-slate-50/70 rounded-xl px-4 py-3 text-xs font-medium text-slate-700 focus:outline-none focus:bg-white focus:ring-1 focus:ring-gold-500 transition cursor-pointer">
                            <option value="">Tous budgets</option>
                            <option value="35000">15 000 – 35 000 F CFA</option>
                            <option value="55000">35 000 – 55 000 F CFA</option>
                            <option value="95000">55 000 – 95 000 F CFA</option>
                            <option value="200000">95 000 – 200 000 F CFA</option>
                            <option value="450000">200 000 – 450 000 F CFA</option>
                            <option value="999999999">Plus..</option>
                        </select>
                    </div>
                    <button type="submit"
                        class="w-full bg-navy-900 text-white font-bold text-[11px] tracking-widest uppercase rounded-xl py-3.5 hover:bg-gold-500 transition-all duration-300 shadow-sm flex items-center justify-center space-x-2">
                        <i class="fa-solid fa-magnifying-glass text-[10px]"></i>
                        <span>Rechercher</span>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- SECTION NOUVEAUTÉS - CLEAN GRIDS -->
    <section class="max-w-7xl mx-auto px-6 lg:px-8 py-24">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-14">
            <div class="space-y-2">
                <span class="text-gold-600 text-[11px] font-bold uppercase tracking-[0.2em] block">Nouveautés
                    exclusives</span>
                <h2 class="font-serif text-3xl sm:text-4xl font-normal text-navy-900 italic tracking-wide">Dernières
                    Acquisitions</h2>
            </div>
            <a href="{{route('liste.index')}}"
                class="mt-4 md:mt-0 text-[11px] font-bold tracking-widest uppercase text-navy-900 hover:text-gold-600 transition flex items-center space-x-2 border-b border-navy-900 pb-1">
                <span>Explorer le catalogue complet</span>
                <i class="fa-solid fa-arrow-right text-[9px]"></i>
            </a>
        </div>
        <div id="container-recents" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8"></div>
    </section>

    <!-- SECTION QUI SOMMES-NOUS ÉDITORIALE -->
    <section class="bg-navy-900 text-white py-24 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="relative group">
                <div
                    class="absolute -inset-1 bg-gradient-to-r from-gold-500/20 to-transparent rounded-2xl blur-lg opacity-30">
                </div>
                <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=800&q=80"
                    alt="Cabinet" class="relative rounded-[24px] shadow-2xl object-cover w-full h-[280px] md:h-[500px]" />
            </div>
            <div class="space-y-8">
                <div class="space-y-2">
                    <span class="text-gold-500 text-[11px] font-bold uppercase tracking-[0.2em] block">Cabinet immobilière T-LEX Domos une signature d'excellence </span>
                    <h2 class="font-serif text-3xl sm:text-5xl font-normal italic tracking-wide leading-tight">De l'estimation à la gestion de vos biens, nous vous accompagnons à chaque étape.</h2>
                </div>
                <p class="text-slate-300 font-light text-sm leading-relaxed max-w-xl">Fondée sur la haute dévotion patrimoniale, notre agence accompagne et conseille les investisseurs ainsi que les particuliers à travers les transactions privées les plus exclusives du marché immobilier.</p>

                <div class="grid grid-cols-3 gap-6 pt-8 border-t border-slate-800">
                    <div class="space-y-1">
                        <span class="block text-3xl font-serif text-gold-500">2.5B F CFA+</span>
                        <span class="text-[10px] text-slate-400 uppercase tracking-widest block">Volume
                            d'Actifs</span>
                    </div>
                    <div class="space-y-1">
                        <span class="block text-3xl font-serif text-gold-500">150+</span>
                        <span class="text-[10px] text-slate-400 uppercase tracking-widest block">Demeures
                            Privées</span>
                    </div>
                    <div class="space-y-1">
                        <span class="block text-3xl font-serif text-gold-500">99%</span>
                        <span class="text-[10px] text-slate-400 uppercase tracking-widest block">Fidélisation</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION LOCATIONS - STANDARDS LUXE -->
    <section class="max-w-7xl mx-auto px-6 lg:px-8 py-24">
        <div class="mb-14 text-center space-y-3">
            <span class="text-gold-600 text-[11px] font-bold uppercase tracking-[0.2em] block">
                Nos dernières annonces
            </span>
            <h2 class="font-serif text-2xl sm:text-4xl font-normal text-navy-900 italic tracking-wide max-w-3xl mx-auto leading-relaxed">
                La location immobilière à Lomé et sa région, en toute sérénité
            </h2>
            <p class="text-slate-400 text-xs sm:text-sm font-light tracking-wide">
                Votre futur bien vous attend
            </p>
        </div>
        <div id="container-locations" class="grid grid-cols-1 md:grid-cols-3 gap-10"></div>
    </section>

    <!-- SECTION VENTES - DESIGN TONALITÉ CHAUDE ÉPURÉE -->
    <section class="bg-[#F9F6F0] py-24">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="mb-14 text-center space-y-3">
                <span class="text-gold-600 text-[11px] font-bold uppercase tracking-[0.2em] block">
                    Nos dernières annonces
                </span>
                <h2 class="font-serif text-2xl sm:text-4xl font-normal text-navy-900 italic tracking-wide max-w-3xl mx-auto leading-relaxed">
                    L’Achat des biens à Lomé et sa région, en toute sécurité
                </h2>
                <p class="text-slate-500 text-xs sm:text-sm font-light tracking-wide">
                    Découvrez nos biens à vendre
                </p>
            </div>
            <div id="container-ventes" class="grid grid-cols-1 md:grid-cols-3 gap-10"></div>
        </div>
    </section>

    <!-- SECTION SERVICES SANS EMBALLAGE LOURD -->
    <section class="max-w-7xl mx-auto px-6 lg:px-8 py-24">
        <div class="text-center mb-16 space-y-2">
            <span class="text-gold-600 text-[11px] font-bold uppercase tracking-[0.2em] block">Ingénierie
                Patrimoniale</span>
            <h2 class="font-serif text-3xl sm:text-4xl font-normal text-navy-900 italic tracking-wide">Nos Domaines
                d'Expertise</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
            <div
                class="bg-white p-6 rounded-2xl shadow-[0_4px_25px_rgba(0,0,0,0.01)] hover:shadow-[0_20px_40px_rgba(0,0,0,0.03)] transition-all duration-300 text-center space-y-4 border border-slate-100/60">
                <div class="w-12 h-12 mx-auto text-gold-600 flex items-center justify-center text-xl"><i
                        class="fa-solid fa-sliders"></i></div>
                <h3 class="font-bold text-navy-900 text-xs tracking-wider uppercase">Gérance Privée</h3>
                <p class="text-[11px] text-slate-400 font-light leading-relaxed">Optimisation financière globale et
                    intendance de vos actifs résidentiels.</p>
            </div>
            <div
                class="bg-white p-6 rounded-2xl shadow-[0_4px_25px_rgba(0,0,0,0.01)] hover:shadow-[0_20px_40px_rgba(0,0,0,0.03)] transition-all duration-300 text-center space-y-4 border border-slate-100/60">
                <div class="w-12 h-12 mx-auto text-gold-600 flex items-center justify-center text-xl"><i
                        class="fa-solid fa-key"></i></div>
                <h3 class="font-bold text-navy-900 text-xs tracking-wider uppercase">Arbitrage & Vente</h3>
                <p class="text-[11px] text-slate-400 font-light leading-relaxed">Valorisation éditoriale et ciblage
                    d'acquéreurs internationaux qualifiés.</p>
            </div>
            <div
                class="bg-white p-6 rounded-2xl shadow-[0_4px_25px_rgba(0,0,0,0.01)] hover:shadow-[0_20px_40px_rgba(0,0,0,0.03)] transition-all duration-300 text-center space-y-4 border border-slate-100/60">
                <div class="w-12 h-12 mx-auto text-gold-600 flex items-center justify-center text-xl"><i
                        class="fa-solid fa-handshake"></i></div>
                <h3 class="font-bold text-navy-900 text-xs tracking-wider uppercase">Locations Nobles</h3>
                <p class="text-[11px] text-slate-400 font-light leading-relaxed">Sélection rigoureuse pour baux
                    annuels de haut standing et saisonniers.</p>
            </div>
            <div
                class="bg-white p-6 rounded-2xl shadow-[0_4px_25px_rgba(0,0,0,0.01)] hover:shadow-[0_20px_40px_rgba(0,0,0,0.03)] transition-all duration-300 text-center space-y-4 border border-slate-100/60">
                <div class="w-12 h-12 mx-auto text-gold-600 flex items-center justify-center text-xl"><i
                        class="fa-solid fa-comments-dollar"></i></div>
                <h3 class="font-bold text-navy-900 text-xs tracking-wider uppercase">Conseil Sur-Mesure</h3>
                <p class="text-[11px] text-slate-400 font-light leading-relaxed">Analyses approfondies du marché
                    pour structurer vos futures acquisitions.</p>
            </div>
            <div
                class="bg-white p-6 rounded-2xl shadow-[0_4px_25px_rgba(0,0,0,0.01)] hover:shadow-[0_20px_40px_rgba(0,0,0,0.03)] transition-all duration-300 text-center space-y-4 border border-slate-100/60">
                <div class="w-12 h-12 mx-auto text-gold-600 flex items-center justify-center text-xl"><i
                        class="fa-solid fa-scale-balanced"></i></div>
                <h3 class="font-bold text-navy-900 text-xs tracking-wider uppercase">Ingénierie Légale</h3>
                <p class="text-[11px] text-slate-400 font-light leading-relaxed">Sécurisation réglementaire
                    transfrontalière et montages fiscaux dédiés.</p>
            </div>
        </div>
    </section>

    <!-- SECTION TÉMOIGNAGES COMPOSÉE FINEMENT -->
    <!-- <section class="bg-gradient-to-b from-navy-900 to-[#0c141c] text-white py-24">
        <div class="max-w-5xl mx-auto px-6 lg:px-8 text-center">
            <span class="text-gold-500 text-[11px] font-bold uppercase tracking-[0.2em] block mb-2">Relations de
                confiance</span>
            <h2 class="font-serif text-3xl sm:text-4xl font-normal italic tracking-wide mb-16">Expériences Signature
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div
                    class="bg-white/[0.02] p-8 rounded-2xl text-left border border-white/5 backdrop-blur-md space-y-4">
                    <p class="font-light italic text-slate-300 text-sm leading-relaxed">"L'acquisition de notre
                        hôtel particulier du VIIe arrondissement s'est orchestrée avec une discrétion absolue et un
                        dévouement exemplaire."</p>
                    <div class="flex items-center space-x-3 pt-6 border-t border-white/5">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=100&q=80"
                            alt="Client" class="w-9 h-9 rounded-full object-cover grayscale" />
                        <div>
                            <h4 class="font-bold text-xs tracking-wide">Jean-Marc R.</h4>
                            <span class="text-[10px] text-gold-500 tracking-wider font-medium uppercase">Président
                                de Groupe</span>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-white/[0.02] p-8 rounded-2xl text-left border border-white/5 backdrop-blur-md space-y-4">
                    <p class="font-light italic text-slate-300 text-sm leading-relaxed">"Grâce à leur maillage
                        exclusif en Off-Market, notre domaine de Cannes s'est négocié en un temps record auprès d'un
                        acquéreur hautement qualifié."</p>
                    <div class="flex items-center space-x-3 pt-6 border-t border-white/5">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&q=80"
                            alt="Client" class="w-9 h-9 rounded-full object-cover grayscale" />
                        <div>
                            <h4 class="font-bold text-xs tracking-wide">Hélène K.</h4>
                            <span
                                class="text-[10px] text-gold-500 tracking-wider font-medium uppercase">Investisseuse
                                Privée</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="bg-gradient-to-b from-navy-900 to-[#0c141c] text-white py-24 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">
            <span class="text-gold-500 text-[11px] font-bold uppercase tracking-[0.2em] block mb-2">
                Relations de confiance
            </span>
            <h2 class="font-serif text-3xl sm:text-4xl font-normal italic tracking-wide mb-16">
                Expériences Signature
            </h2>

            <!-- Zone du Carrousel -->
            <div class="relative w-full flex overflow-x-hidden [mask-image:linear-gradient(to_right,transparent,white_10%,white_90%,transparent)]">

                <!-- Groupe 1 de cartes -->
                <div class="animate-marquee flex gap-8 whitespace-nowrap min-w-full">
                    <!-- Témoignage 1 : Ingrid -->
                    <div class="bg-white/[0.02] p-8 rounded-2xl text-left border border-white/5 backdrop-blur-md space-y-4 w-[350px] inline-block shrink-0 whitespace-normal">
                        <p class="font-light italic text-slate-300 text-sm leading-relaxed">"Très bonne agence, Ils sont réactifs et à l'écoute. J'ai réussi à trouver un super appart grâce à eux."</p>
                        <div class="flex items-center space-x-3 pt-6 border-t border-white/5">
                            <div class="w-9 h-9 rounded-full bg-gold-500/10 border border-gold-500/20 flex items-center justify-center font-bold text-xs text-gold-500">IL</div>
                            <div>
                                <h4 class="font-bold text-xs tracking-wide">Ingrid Lawson</h4>
                                <span class="text-[10px] text-gold-500 tracking-wider font-medium uppercase">Juriste</span>
                            </div>
                        </div>
                    </div>

                    <!-- Témoignage 2 : Koffi -->
                    <div class="bg-white/[0.02] p-8 rounded-2xl text-left border border-white/5 backdrop-blur-md space-y-4 w-[350px] inline-block shrink-0 whitespace-normal">
                        <p class="font-light italic text-slate-300 text-sm leading-relaxed">"J’ai passé plus d’un mois à rechercher un logement mais avec ce site ça été rapide. En 48h de délais après dépôt de ma candidature j’ai pu signer mon bail."</p>
                        <div class="flex items-center space-x-3 pt-6 border-t border-white/5">
                            <div class="w-9 h-9 rounded-full bg-gold-500/10 border border-gold-500/20 flex items-center justify-center font-bold text-xs text-gold-500">KL</div>
                            <div>
                                <h4 class="font-bold text-xs tracking-wide">Koffi Laté</h4>
                                <span class="text-[10px] text-gold-500 tracking-wider font-medium uppercase">Banquier</span>
                            </div>
                        </div>
                    </div>

                    <!-- Témoignage 3 : Pélagie -->
                    <div class="bg-white/[0.02] p-8 rounded-2xl text-left border border-white/5 backdrop-blur-md space-y-4 w-[350px] inline-block shrink-0 whitespace-normal">
                        <p class="font-light italic text-slate-300 text-sm leading-relaxed">"Belle prestation de service, un bel accompagnement également (gestion de mes biens)."</p>
                        <div class="flex items-center space-x-3 pt-6 border-t border-white/5">
                            <div class="w-9 h-9 rounded-full bg-gold-500/10 border border-gold-500/20 flex items-center justify-center font-bold text-xs text-gold-500">PK</div>
                            <div>
                                <h4 class="font-bold text-xs tracking-wide">Pélagie Kodjo</h4>
                                <span class="text-[10px] text-gold-500 tracking-wider font-medium uppercase">PDG de Société</span>
                            </div>
                        </div>
                    </div>

                    <!-- Témoignage 4 : Anonyme -->
                    <div class="bg-white/[0.02] p-8 rounded-2xl text-left border border-white/5 backdrop-blur-md space-y-4 w-[350px] inline-block shrink-0 whitespace-normal">
                        <p class="font-light italic text-slate-300 text-sm leading-relaxed">"Julien, le monsieur qui nous a accompagné dans notre démarche et dans la location du logement est très serviable. Site sérieux et sécurisé."</p>
                        <div class="flex items-center space-x-3 pt-6 border-t border-white/5">
                            <div class="w-9 h-9 rounded-full bg-gold-500/10 border border-gold-500/20 flex items-center justify-center font-bold text-xs text-gold-500">A</div>
                            <div>
                                <h4 class="font-bold text-xs tracking-wide">Anonyme</h4>
                                <span class="text-[10px] text-gold-500 tracking-wider font-medium uppercase">Client</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Groupe 2 (Duplicata identique pour l'effet infini) -->
                <!-- Zone du Carrousel (Corrigé avec flex-nowrap) -->
                <div class="relative w-full flex flex-nowrap overflow-x-hidden [mask-image:linear-gradient(to_right,transparent,white_10%,white_90%,transparent)]">

                    <!-- Groupe 1 de cartes -->
                    <div class="animate-marquee flex gap-8 whitespace-nowrap min-w-full shrink-0">
                        <!-- Témoignage 1 : Ingrid -->
                        <div class="bg-white/[0.02] p-8 rounded-2xl text-left border border-white/5 backdrop-blur-md space-y-4 w-[350px] shrink-0 whitespace-normal">
                            <p class="font-light italic text-slate-300 text-sm leading-relaxed">"Très bonne agence, Ils sont réactifs et à l'écoute. J'ai réussi à trouver un super appart grâce à eux."</p>
                            <div class="flex items-center space-x-3 pt-6 border-t border-white/5">
                                <div class="w-9 h-9 rounded-full bg-gold-500/10 border border-gold-500/20 flex items-center justify-center font-bold text-xs text-gold-500">IL</div>
                                <div>
                                    <h4 class="font-bold text-xs tracking-wide">Ingrid Lawson</h4>
                                    <span class="text-[10px] text-gold-500 tracking-wider font-medium uppercase">Juriste</span>
                                </div>
                            </div>
                        </div>

                        <!-- Témoignage 2 : Koffi -->
                        <div class="bg-white/[0.02] p-8 rounded-2xl text-left border border-white/5 backdrop-blur-md space-y-4 w-[350px] shrink-0 whitespace-normal">
                            <p class="font-light italic text-slate-300 text-sm leading-relaxed">"J’ai passé plus d’un mois à rechercher un logement mais avec ce site ça été rapide. En 48h de délais après dépôt de ma candidature j’ai pu signer mon bail."</p>
                            <div class="flex items-center space-x-3 pt-6 border-t border-white/5">
                                <div class="w-9 h-9 rounded-full bg-gold-500/10 border border-gold-500/20 flex items-center justify-center font-bold text-xs text-gold-500">KL</div>
                                <div>
                                    <h4 class="font-bold text-xs tracking-wide">Koffi Laté</h4>
                                    <span class="text-[10px] text-gold-500 tracking-wider font-medium uppercase">Banquier</span>
                                </div>
                            </div>
                        </div>

                        <!-- Témoignage 3 : Pélagie -->
                        <div class="bg-white/[0.02] p-8 rounded-2xl text-left border border-white/5 backdrop-blur-md space-y-4 w-[350px] shrink-0 whitespace-normal">
                            <p class="font-light italic text-slate-300 text-sm leading-relaxed">"Belle prestation de service, un bel accompagnement également (gestion de mes biens)."</p>
                            <div class="flex items-center space-x-3 pt-6 border-t border-white/5">
                                <div class="w-9 h-9 rounded-full bg-gold-500/10 border border-gold-500/20 flex items-center justify-center font-bold text-xs text-gold-500">PK</div>
                                <div>
                                    <h4 class="font-bold text-xs tracking-wide">Pélagie Kodjo</h4>
                                    <span class="text-[10px] text-gold-500 tracking-wider font-medium uppercase">PDG de Société</span>
                                </div>
                            </div>
                        </div>

                        <!-- Témoignage 4 : Anonyme -->
                        <div class="bg-white/[0.02] p-8 rounded-2xl text-left border border-white/5 backdrop-blur-md space-y-4 w-[350px] shrink-0 whitespace-normal">
                            <p class="font-light italic text-slate-300 text-sm leading-relaxed">"Julien, le monsieur qui nous a accompagné dans notre démarche et dans la location du logement est très serviable. Site sérieux et sécurisé."</p>
                            <div class="flex items-center space-x-3 pt-6 border-t border-white/5">
                                <div class="w-9 h-9 rounded-full bg-gold-500/10 border border-gold-500/20 flex items-center justify-center font-bold text-xs text-gold-500">A</div>
                                <div>
                                    <h4 class="font-bold text-xs tracking-wide">Anonyme</h4>
                                    <span class="text-[10px] text-gold-500 tracking-wider font-medium uppercase">Client</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Groupe 2 de cartes (Duplicata identique pour l'effet infini) -->
                    <div class="animate-marquee flex gap-8 whitespace-nowrap min-w-full shrink-0" aria-hidden="true">
                        <!-- Répétition Témoignage 1 -->
                        <div class="bg-white/[0.02] p-8 rounded-2xl text-left border border-white/5 backdrop-blur-md space-y-4 w-[350px] shrink-0 whitespace-normal">
                            <p class="font-light italic text-slate-300 text-sm leading-relaxed">"Très bonne agence, Ils sont réactifs et à l'écoute. J'ai réussi à trouver un super appart grâce à eux."</p>
                            <div class="flex items-center space-x-3 pt-6 border-t border-white/5">
                                <div class="w-9 h-9 rounded-full bg-gold-500/10 border border-gold-500/20 flex items-center justify-center font-bold text-xs text-gold-500">IL</div>
                                <div>
                                    <h4 class="font-bold text-xs tracking-wide">Ingrid Lawson</h4>
                                    <span class="text-[10px] text-gold-500 tracking-wider font-medium uppercase">Juriste</span>
                                </div>
                            </div>
                        </div>

                        <!-- Répétition Témoignage 2 -->
                        <div class="bg-white/[0.02] p-8 rounded-2xl text-left border border-white/5 backdrop-blur-md space-y-4 w-[350px] shrink-0 whitespace-normal">
                            <p class="font-light italic text-slate-300 text-sm leading-relaxed">"J’ai passé plus d’un mois à rechercher un logement mais avec ce site ça été rapide. En 48h de délais après dépôt de ma candidature j’ai pu signer mon bail."</p>
                            <div class="flex items-center space-x-3 pt-6 border-t border-white/5">
                                <div class="w-9 h-9 rounded-full bg-gold-500/10 border border-gold-500/20 flex items-center justify-center font-bold text-xs text-gold-500">KL</div>
                                <div>
                                    <h4 class="font-bold text-xs tracking-wide">Koffi Laté</h4>
                                    <span class="text-[10px] text-gold-500 tracking-wider font-medium uppercase">Banquier</span>
                                </div>
                            </div>
                        </div>

                        <!-- Répétition Témoignage 3 -->
                        <div class="bg-white/[0.02] p-8 rounded-2xl text-left border border-white/5 backdrop-blur-md space-y-4 w-[350px] shrink-0 whitespace-normal">
                            <p class="font-light italic text-slate-300 text-sm leading-relaxed">"Belle prestation de service, un bel accompagnement également (gestion de mes biens)."</p>
                            <div class="flex items-center space-x-3 pt-6 border-t border-white/5">
                                <div class="w-9 h-9 rounded-full bg-gold-500/10 border border-gold-500/20 flex items-center justify-center font-bold text-xs text-gold-500">PK</div>
                                <div>
                                    <h4 class="font-bold text-xs tracking-wide">Pélagie Kodjo</h4>
                                    <span class="text-[10px] text-gold-500 tracking-wider font-medium uppercase">PDG de Société</span>
                                </div>
                            </div>
                        </div>

                        <!-- Répétition Témoignage 4 -->
                        <div class="bg-white/[0.02] p-8 rounded-2xl text-left border border-white/5 backdrop-blur-md space-y-4 w-[350px] shrink-0 whitespace-normal">
                            <p class="font-light italic text-slate-300 text-sm leading-relaxed">"Julien, le monsieur qui nous a accompagné dans notre démarche et dans la location du logement est très serviable. Site sérieux et sécurisé."</p>
                            <div class="flex items-center space-x-3 pt-6 border-t border-white/5">
                                <div class="w-9 h-9 rounded-full bg-gold-500/10 border border-gold-500/20 flex items-center justify-center font-bold text-xs text-gold-500">A</div>
                                <div>
                                    <h4 class="font-bold text-xs tracking-wide">Anonyme</h4>
                                    <span class="text-[10px] text-gold-500 tracking-wider font-medium uppercase">Client</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- NOUVELLE SECTION : AUTRES SERVICES T-LEX (HOVER RÉVÉLATION) -->
    <!-- <section class="bg-white border-t border-slate-100/80 py-24">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16 space-y-2">
                <span class="text-gold-600 text-[11px] font-bold uppercase tracking-[0.2em] block">Prestations
                    Complémentaires</span>
                <h2 class="font-serif text-3xl sm:text-4xl font-normal text-navy-900 italic tracking-wide">Au-delà
                    des prestations immobilières</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                <div
                    class="group bg-[#fafafa] rounded-3xl p-8 border border-slate-100 transition-all duration-500 hover:shadow-[0_20px_50px_rgba(1,44,78,0.06)] hover:border-gold-500/20 cursor-default flex flex-col">
                    <div
                        class="w-14 h-14 text-gold-600 flex items-center justify-center text-3xl mb-5 bg-white rounded-2xl shadow-sm group-hover:shadow-md group-hover:scale-105 transition-all duration-500 flex-shrink-0 mx-auto">
                        <i class="fa-solid fa-microchip"></i>
                    </div>
                    <h3
                        class="font-bold text-navy-900 text-sm tracking-wider uppercase mb-0 text-center group-hover:text-gold-600 transition-colors duration-500">
                        Prestations Digital</h3>
                    <div
                        class="overflow-hidden transition-all duration-500 ease-in-out max-h-0 opacity-0 group-hover:max-h-40 group-hover:opacity-100 group-hover:mt-4">
                        <div class="border-t border-slate-100 pt-4">
                            <p class="text-xs text-slate-400 font-light leading-relaxed">Nous accompagnons les acteurs locaux dans le choix de dispositifs de communication 360. T-LEX Digital guide la transformation digitale avec des solutions innovantes, intégrant IA, blockchain, et analyse de données pour rester compétitif.</p>
                        </div>
                    </div>
                </div>

                <div
                    class="group bg-[#fafafa] rounded-3xl p-8 border border-slate-100 transition-all duration-500 hover:shadow-[0_20px_50px_rgba(1,44,78,0.06)] hover:border-gold-500/20 cursor-default flex flex-col">
                    <div
                        class="w-14 h-14 text-gold-600 flex items-center justify-center text-3xl mb-5 bg-white rounded-2xl shadow-sm group-hover:shadow-md group-hover:scale-105 transition-all duration-500 flex-shrink-0 mx-auto">
                        <i class="fa-solid fa-helmet-safety"></i>
                    </div>
                    <h3
                        class="font-bold text-navy-900 text-sm tracking-wider uppercase mb-0 text-center group-hover:text-gold-600 transition-colors duration-500">
                        Gestions de Projets BTP</h3>
                    <div
                        class="overflow-hidden transition-all duration-500 ease-in-out max-h-0 opacity-0 group-hover:max-h-40 group-hover:opacity-100 group-hover:mt-4">
                        <div class="border-t border-slate-100 pt-4">
                            <p class="text-xs text-slate-400 font-light leading-relaxed">T-LEX Bâtisseurs vous accompagne dans vos projet BTP, planifie, organise et suivre l'ensemble des étapes du projet de construction, de la conception à la livraison. Nous garantissons le respect des délais, du budget et des normes en optimisant les ressources et la coordination des acteurs.</p>
                        </div>
                    </div>
                </div>

                <div
                    class="group bg-[#fafafa] rounded-3xl p-8 border border-slate-100 transition-all duration-500 hover:shadow-[0_20px_50px_rgba(1,44,78,0.06)] hover:border-gold-500/20 cursor-default flex flex-col">
                    <div
                        class="w-14 h-14 text-gold-600 flex items-center justify-center text-3xl mb-5 bg-white rounded-2xl shadow-sm group-hover:shadow-md group-hover:scale-105 transition-all duration-500 flex-shrink-0 mx-auto">
                        <i class="fa-solid fa-spray-can-sparkles"></i>
                    </div>
                    <h3
                        class="font-bold text-navy-900 text-sm tracking-wider uppercase mb-0 text-center group-hover:text-gold-600 transition-colors duration-500">
                        Entretien et Nettoyage</h3>
                    <div
                        class="overflow-hidden transition-all duration-500 ease-in-out max-h-0 opacity-0 group-hover:max-h-40 group-hover:opacity-100 group-hover:mt-4">
                        <div class="border-t border-slate-100 pt-4">
                            <p class="text-xs text-slate-400 font-light leading-relaxed">T-LEX Clean, vous garantit des surfaces propres et saines avec sa solution écologique. Découvrez tous les services T-LEX Clean pour un confort haut de gamme, une expérience personnalisée et gain de temps assuré. Confiez-nous vos travaux de nettoyage de locaux d'entreprises à Lomé.</p>
                        </div>
                    </div>
                </div>

                <div
                    class="group bg-[#fafafa] rounded-3xl p-8 border border-slate-100 transition-all duration-500 hover:shadow-[0_20px_50px_rgba(1,44,78,0.06)] hover:border-gold-500/20 cursor-default flex flex-col">
                    <div
                        class="w-14 h-14 text-gold-600 flex items-center justify-center text-3xl mb-5 bg-white rounded-2xl shadow-sm group-hover:shadow-md group-hover:scale-105 transition-all duration-500 flex-shrink-0 mx-auto">
                        <i class="fa-solid fa-ship"></i>
                    </div>
                    <h3
                        class="font-bold text-navy-900 text-sm tracking-wider uppercase mb-0 text-center group-hover:text-gold-600 transition-colors duration-500">
                        Achat et Transport<br> depuis la Chine</h3>
                    <div
                        class="overflow-hidden transition-all duration-500 ease-in-out max-h-0 opacity-0 group-hover:max-h-40 group-hover:opacity-100 group-hover:mt-4">
                        <div class="border-t border-slate-100 pt-4">
                            <p class="text-xs text-slate-400 font-light leading-relaxed">Besoin de commander vos marchandises depuis la Chine ? T-LEX Cargo propose des solutions d'assistance d'achat et de transport, de groupage, de suivi, transit douane, conteneur personnel.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="bg-white border-t border-slate-100/80 py-24">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16 space-y-2">
                <span class="text-gold-600 text-[11px] font-bold uppercase tracking-[0.2em] block">
                    Prestations Complémentaires
                </span>
                <h2 class="font-serif text-3xl sm:text-4xl font-normal text-navy-900 italic tracking-wide">
                    Au-delà des prestations immobilières
                </h2>
            </div>

            <!-- On retire items-stretch et on ajoute une hauteur fixe aux lignes si besoin, mais ici items-start évite la déformation -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 items-start">

                <!-- Service 1 : Digital -->
                <div class="group bg-[#fafafa] rounded-3xl p-6 md:p-8 border border-slate-100 transition-all duration-500 hover:shadow-[0_20px_50px_rgba(1,44,78,0.06)] hover:border-gold-500/20 cursor-default flex flex-col justify-start min-h-[180px] md:h-[180px] md:hover:h-[350px] overflow-hidden">
                    <div class="w-12 h-12 md:w-14 md:h-14 text-gold-600 flex items-center justify-center text-2xl md:text-3xl mb-4 md:mb-5 bg-white rounded-2xl shadow-sm group-hover:shadow-md group-hover:scale-105 transition-all duration-500 flex-shrink-0 mx-auto">
                        <i class="fa-solid fa-microchip"></i>
                    </div>
                    <h3 class="font-bold text-navy-900 text-xs md:text-sm tracking-wider uppercase text-center group-hover:text-gold-600 transition-colors duration-500 flex-shrink-0">
                        Prestations Digital
                    </h3>

                    <div class="opacity-0 group-hover:opacity-100 md:transition-opacity md:duration-500 md:delay-100">
                        <div class="border-t border-slate-100 mt-4 pt-4 text-center">
                            <p class="text-xs text-slate-400 font-light leading-relaxed">
                                Nous accompagnons les acteurs locaux dans le choix de dispositifs de communication 360. T-LEX Digital guide la transformation digitale avec des solutions innovantes, intégrant IA, blockchain, et analyse de données.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Service 2 : BTP -->
                <div class="group bg-[#fafafa] rounded-3xl p-6 md:p-8 border border-slate-100 transition-all duration-500 hover:shadow-[0_20px_50px_rgba(1,44,78,0.06)] hover:border-gold-500/20 cursor-default flex flex-col justify-start min-h-[180px] md:h-[180px] md:hover:h-[350px] overflow-hidden">
                    <div class="w-12 h-12 md:w-14 md:h-14 text-gold-600 flex items-center justify-center text-2xl md:text-3xl mb-4 md:mb-5 bg-white rounded-2xl shadow-sm group-hover:shadow-md group-hover:scale-105 transition-all duration-500 flex-shrink-0 mx-auto">
                        <i class="fa-solid fa-helmet-safety"></i>
                    </div>
                    <h3 class="font-bold text-navy-900 text-xs md:text-sm tracking-wider uppercase text-center group-hover:text-gold-600 transition-colors duration-500 flex-shrink-0">
                        Gestions de Projets BTP
                    </h3>

                    <div class="opacity-0 group-hover:opacity-100 md:transition-opacity md:duration-500 md:delay-100">
                        <div class="border-t border-slate-100 mt-4 pt-4 text-center">
                            <p class="text-xs text-slate-400 font-light leading-relaxed">
                                T-LEX Bâtisseurs vous accompagne dans vos projet BTP, planifie, organise et suivre l'ensemble des étapes du projet de construction, de la conception à la livraison. Nous garantissons le respect des délais, du budget.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Service 3 : Nettoyage -->
                <div class="group bg-[#fafafa] rounded-3xl p-6 md:p-8 border border-slate-100 transition-all duration-500 hover:shadow-[0_20px_50px_rgba(1,44,78,0.06)] hover:border-gold-500/20 cursor-default flex flex-col justify-start min-h-[180px] md:h-[180px] md:hover:h-[350px] overflow-hidden">
                    <div class="w-12 h-12 md:w-14 md:h-14 text-gold-600 flex items-center justify-center text-2xl md:text-3xl mb-4 md:mb-5 bg-white rounded-2xl shadow-sm group-hover:shadow-md group-hover:scale-105 transition-all duration-500 flex-shrink-0 mx-auto">
                        <i class="fa-solid fa-spray-can-sparkles"></i>
                    </div>
                    <h3 class="font-bold text-navy-900 text-xs md:text-sm tracking-wider uppercase text-center group-hover:text-gold-600 transition-colors duration-500 flex-shrink-0">
                        Entretien et Nettoyage
                    </h3>

                    <div class="opacity-0 group-hover:opacity-100 md:transition-opacity md:duration-500 md:delay-100">
                        <div class="border-t border-slate-100 mt-4 pt-4 text-center">
                            <p class="text-xs text-slate-400 font-light leading-relaxed">
                                T-LEX Clean, vous garantit des surfaces propres et saines avec sa solution écologique. Découvrez tous nos services pour un confort haut de gamme, une expérience personnalisée et un gain de temps assuré à Lomé.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Service 4 : Cargo -->
                <div class="group bg-[#fafafa] rounded-3xl p-6 md:p-8 border border-slate-100 transition-all duration-500 hover:shadow-[0_20px_50px_rgba(1,44,78,0.06)] hover:border-gold-500/20 cursor-default flex flex-col justify-start min-h-[180px] md:h-[180px] md:hover:h-[350px] overflow-hidden">
                    <div class="w-12 h-12 md:w-14 md:h-14 text-gold-600 flex items-center justify-center text-2xl md:text-3xl mb-4 md:mb-5 bg-white rounded-2xl shadow-sm group-hover:shadow-md group-hover:scale-105 transition-all duration-500 flex-shrink-0 mx-auto">
                        <i class="fa-solid fa-ship"></i>
                    </div>
                    <h3 class="font-bold text-navy-900 text-xs md:text-sm tracking-wider uppercase text-center group-hover:text-gold-600 transition-colors duration-500 flex-shrink-0">
                        Achat et Transport<br>depuis la Chine
                    </h3>

                    <div class="opacity-0 group-hover:opacity-100 md:transition-opacity md:duration-500 md:delay-100">
                        <div class="border-t border-slate-100 mt-4 pt-4 text-center">
                            <p class="text-xs text-slate-400 font-light leading-relaxed">
                                Besoin de commander vos marchandises depuis la Chine ? T-LEX Cargo propose des solutions d'assistance d'achat et de transport, de groupage, de suivi, de transit douane et de conteneur personnel.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- NOUVELLE SECTION : PARTENAIRES (DÉFILEMENT INFINI) -->
    <section class="bg-[#F9F6F0] py-16 overflow-hidden border-t border-b border-slate-100/40">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 mb-8 text-center">
            <span class="text-slate-400 text-[10px] font-bold uppercase tracking-[0.3em] block">Ils soutiennent
                notre vision d'excellence</span>
        </div>

        <!-- Conteneur du Marquee -->
        <div class="relative w-full flex items-center overflow-x-hidden group">
            <!-- Dégradés esthétiques sur les côtés pour masquer la coupure -->
            <div
                class="absolute left-0 top-0 bottom-0 w-24 bg-gradient-to-r from-[#F9F6F0] to-transparent z-10 pointer-events-none">
            </div>
            <div
                class="absolute right-0 top-0 bottom-0 w-24 bg-gradient-to-l from-[#F9F6F0] to-transparent z-10 pointer-events-none">
            </div>

            <!-- Liste des logos animée -->
            <div
                class="flex space-x-16 items-center whitespace-nowrap animate-marquee group-hover:[animation-play-state:paused]">
                <!-- LOGOS (Série 1) -->
                <div
                    class="flex items-center space-x-3 text-navy-900/40 font-serif text-lg tracking-[0.2em] italic font-medium">
                    <i class="fa-solid fa-gem text-gold-600/50 mr-2"></i> KRONOS BANK
                </div>
                <div
                    class="flex items-center space-x-3 text-navy-900/40 font-serif text-lg tracking-[0.2em] italic font-medium">
                    <i class="fa-solid fa-gavel text-gold-600/50 mr-2"></i> MALHERBE NOTAIRES
                </div>
                <div
                    class="flex items-center space-x-3 text-navy-900/40 font-serif text-lg tracking-[0.2em] italic font-medium">
                    <i class="fa-solid fa-building text-gold-600/50 mr-2"></i> ARCHI LUXE STUDIO
                </div>
                <div
                    class="flex items-center space-x-3 text-navy-900/40 font-serif text-lg tracking-[0.2em] italic font-medium">
                    <i class="fa-solid fa-shield-halved text-gold-600/50 mr-2"></i> SÉCURITÉ PRIVÉE ASSOCIES
                </div>
                <div
                    class="flex items-center space-x-3 text-navy-900/40 font-serif text-lg tracking-[0.2em] italic font-medium">
                    <i class="fa-solid fa-crown text-gold-600/50 mr-2"></i> HERITAGE TRUST
                </div>

                <!-- LOGOS DUPLIQUÉS (Série 2 pour l'effet de boucle continue parfaite) -->
                <div
                    class="flex items-center space-x-3 text-navy-900/40 font-serif text-lg tracking-[0.2em] italic font-medium">
                    <i class="fa-solid fa-gem text-gold-600/50 mr-2"></i> KRONOS BANK
                </div>
                <div
                    class="flex items-center space-x-3 text-navy-900/40 font-serif text-lg tracking-[0.2em] italic font-medium">
                    <i class="fa-solid fa-gavel text-gold-600/50 mr-2"></i> MALHERBE NOTAIRES
                </div>
                <div
                    class="flex items-center space-x-3 text-navy-900/40 font-serif text-lg tracking-[0.2em] italic font-medium">
                    <i class="fa-solid fa-building text-gold-600/50 mr-2"></i> ARCHI LUXE STUDIO
                </div>
                <div
                    class="flex items-center space-x-3 text-navy-900/40 font-serif text-lg tracking-[0.2em] italic font-medium">
                    <i class="fa-solid fa-shield-halved text-gold-600/50 mr-2"></i> SÉCURITÉ PRIVÉE ASSOCIES
                </div>
                <div
                    class="flex items-center space-x-3 text-navy-900/40 font-serif text-lg tracking-[0.2em] italic font-medium">
                    <i class="fa-solid fa-crown text-gold-600/50 mr-2"></i> HERITAGE TRUST
                </div>
            </div>
        </div>
    </section>

    <!-- FORMULAIRE DE CONTACT RAFFINÉ -->
    <section id="contact" class="bg-white border-t border-slate-100/70 py-24">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-16">
            <div class="space-y-5">
                <span class="text-gold-600 text-[11px] font-bold uppercase tracking-[0.2em] block">Entrons en
                    relation</span>
                <h2 class="font-serif text-3xl font-normal text-navy-900 italic tracking-wide">Demande de Renseignements
                </h2>
                <p class="text-slate-400 text-xs font-light leading-relaxed max-w-sm">Nos directeurs de bureaux et
                    conseillers multilingues se tiennent à votre discrétion pour orchestrer vos ambitions immobilières.
                </p>
                <div class="space-y-3 pt-4 text-xs text-slate-600 font-medium">
                    <p class="flex items-center space-x-3"><i
                            class="fa-solid fa-phone text-gold-500/80 w-5"></i><span>+33 (0)1 42 68 50 00</span></p>
                    <p class="flex items-center space-x-3"><i
                            class="fa-solid fa-envelope text-gold-500/80 w-5"></i><span>contact@luxe-habitat.com</span>
                    </p>
                    <p class="flex items-center space-x-3"><i
                            class="fa-solid fa-location-dot text-gold-500/80 w-5"></i><span>Place Vendôme, 75001
                            Paris</span></p>
                </div>
            </div>

            <div class="lg:col-span-2 bg-[#fafafa] p-6 sm:p-8 rounded-3xl border border-slate-100">
                <form onsubmit="handleContactForm(event)" class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <input type="text" placeholder="Votre nom complet" required
                        class="w-full bg-white border border-slate-100 rounded-xl px-4 py-3.5 text-xs focus:outline-none focus:ring-1 focus:ring-gold-500 transition" />
                    <input type="email" placeholder="Adresse électronique" required
                        class="w-full bg-white border border-slate-100 rounded-xl px-4 py-3.5 text-xs focus:outline-none focus:ring-1 focus:ring-gold-500 transition" />
                    <input type="tel" placeholder="Numéro de téléphone (Optionnel)"
                        class="w-full bg-white border border-slate-100 rounded-xl px-4 py-3.5 text-xs focus:outline-none focus:ring-1 focus:ring-gold-500 transition col-span-2" />
                    <textarea placeholder="Décrivez votre projet d'investissement..." rows="4" required
                        class="w-full bg-white border border-slate-100 rounded-xl px-4 py-3.5 text-xs focus:outline-none focus:ring-1 focus:ring-gold-500 transition col-span-2"></textarea>
                    <button type="submit"
                        class="bg-navy-900 text-white text-[11px] font-bold tracking-widest uppercase py-4 rounded-xl hover:bg-gold-500 transition-all duration-300 col-span-2">Solliciter
                        une étude de projet</button>
                </form>
            </div>
        </div>
    </section>
</main>
<script id="home-biens-data" type="application/json">
    @json($biens)
</script>
<script>
    const baseUrlDetails = "{{ route('details.home') }}";
    const contactInteretUrl = "{{ route('contact.interet') }}";
</script>
@endsection