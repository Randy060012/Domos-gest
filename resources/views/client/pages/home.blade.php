@extends('client.layouts.master')
@section('content')
<main class="pt-0">

    <!-- HERO SECTION CINÉMATIQUE -->
    <section class="relative min-h-[90vh] flex items-center justify-center bg-cover bg-center"
        style="background-image: linear-gradient(rgba(1, 44, 78, 0.40), rgba(24, 28, 33, 0.60)), url('https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=1920&q=80');">
        <div class="w-full max-w-7xl mx-auto px-6 lg:px-8 pt-20 text-center space-y-8 relative z-10">
            <div class="space-y-4">
                <span
                    class="inline-block uppercase tracking-[0.25em] text-[10px] font-bold text-white border-b border-gold-500/60 pb-2 animate__animated animate__fadeInDown">L'immobilier
                    Haute Couture</span>
                <h1
                    class="text-4xl sm:text-6xl font-serif font-normal text-white italic tracking-wide max-w-4xl mx-auto leading-tight animate__animated animate__fadeInUp">
                    Demeures Singulières & Architectures d'Exception</h1>
                <p
                    class="text-sm sm:text-base text-slate-200/90 font-light tracking-wider max-w-2xl mx-auto animate__animated animate__fadeInUp animate__delay-1s">
                    Une gérance et une sélection hautement confidentielle de patrimoines d'exception.</p>
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
                            <option value="Villa">Villa</option>
                            <option value="Appartement">Appartement</option>
                        </select>
                    </div>
                    <div class="space-y-1.5">
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400"><i
                                class="fa-solid fa-tags text-gold-500/70 mr-1.5"></i> Budget Max</label>
                        <select id="search-budget"
                            class="w-full bg-slate-50/70 rounded-xl px-4 py-3 text-xs font-medium text-slate-700 focus:outline-none focus:bg-white focus:ring-1 focus:ring-gold-500 transition cursor-pointer">
                            <option value="">Illimité</option>
                            <option value="1500000">1 500 000 €</option>
                            <option value="3000000">3 000 000 €</option>
                            <option value="5000000">5 000 000 €</option>
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
                    alt="Cabinet" class="relative rounded-[24px] shadow-2xl object-cover w-full h-[500px]" />
            </div>
            <div class="space-y-8">
                <div class="space-y-2">
                    <span class="text-gold-500 text-[11px] font-bold uppercase tracking-[0.2em] block">Une signature
                        d'excellence</span>
                    <h2 class="font-serif text-3xl sm:text-5xl font-normal italic tracking-wide leading-tight">Vingt
                        Ans d'Exigence & de Discrétion Absolue</h2>
                </div>
                <p class="text-slate-300 font-light text-sm leading-relaxed max-w-xl">Fondée sur la haute dévotion
                    patrimoniale, notre maison accompagne et conseille les investisseurs internationaux ainsi que
                    les particuliers à travers les transactions privées les plus exclusives du marché européen.</p>

                <div class="grid grid-cols-3 gap-6 pt-8 border-t border-slate-800">
                    <div class="space-y-1">
                        <span class="block text-3xl font-serif text-gold-500">2.5B€+</span>
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
        <div class="mb-14 text-center space-y-2">
            <span class="text-gold-600 text-[11px] font-bold uppercase tracking-[0.2em] block">Villégiatures &
                Saisonnier</span>
            <h2 class="font-serif text-3xl sm:text-4xl font-normal text-navy-900 italic tracking-wide">Propriétés en
                Location</h2>
        </div>
        <div id="container-locations" class="grid grid-cols-1 md:grid-cols-3 gap-10"></div>
    </section>

    <!-- SECTION VENTES - DESIGN TONALITÉ CHAUDE ÉPURÉE -->
    <section class="bg-[#F9F6F0] py-24">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="mb-14 text-center space-y-2">
                <span class="text-gold-600 text-[11px] font-bold uppercase tracking-[0.2em] block">Investissements
                    Pérennes</span>
                <h2 class="font-serif text-3xl sm:text-4xl font-normal text-navy-900 italic tracking-wide">Demeures
                    à la Vente</h2>
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
    <section class="bg-gradient-to-b from-navy-900 to-[#0c141c] text-white py-24">
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
    </section>

    <!-- NOUVELLE SECTION : AUTRES SERVICES -->
    <section class="bg-white border-t border-slate-100/80 py-24">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16 space-y-2">
                <span class="text-gold-600 text-[11px] font-bold uppercase tracking-[0.2em] block">Prestations
                    Complémentaires</span>
                <h2 class="font-serif text-3xl sm:text-4xl font-normal text-navy-900 italic tracking-wide">Au-delà
                    de la Transaction</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div
                    class="group bg-[#FBFBFC] rounded-3xl p-8 border border-slate-100 transition-all duration-300 hover:shadow-[0_20px_50px_rgba(1,44,78,0.04)]">
                    <div
                        class="w-12 h-12 text-gold-600 flex items-center justify-center text-2xl mb-6 bg-white rounded-2xl shadow-sm">
                        <i class="fa-solid fa-bell"></i>
                    </div>
                    <h3
                        class="font-serif text-lg text-navy-900 font-medium mb-3 group-hover:text-gold-600 transition-colors">
                        Conciergerie Privée</h3>
                    <p class="text-xs text-slate-400 font-light leading-relaxed">Un accompagnement quotidien
                        sur-mesure : intendance, réservations exclusives et accueil de vos invités de marque.</p>
                </div>
                <div
                    class="group bg-[#FBFBFC] rounded-3xl p-8 border border-slate-100 transition-all duration-300 hover:shadow-[0_20px_50px_rgba(1,44,78,0.04)]">
                    <div
                        class="w-12 h-12 text-gold-600 flex items-center justify-center text-2xl mb-6 bg-white rounded-2xl shadow-sm">
                        <i class="fa-solid fa-compass-drafting"></i>
                    </div>
                    <h3
                        class="font-serif text-lg text-navy-900 font-medium mb-3 group-hover:text-gold-600 transition-colors">
                        Architecture d'Intérieur</h3>
                    <p class="text-xs text-slate-400 font-light leading-relaxed">Sublimation et valorisation de vos
                        espaces par des designers de renom pour façonner un lieu qui vous ressemble.</p>
                </div>
                <div
                    class="group bg-[#FBFBFC] rounded-3xl p-8 border border-slate-100 transition-all duration-300 hover:shadow-[0_20px_50px_rgba(1,44,78,0.04)]">
                    <div
                        class="w-12 h-12 text-gold-600 flex items-center justify-center text-2xl mb-6 bg-white rounded-2xl shadow-sm">
                        <i class="fa-solid fa-hammer"></i>
                    </div>
                    <h3
                        class="font-serif text-lg text-navy-900 font-medium mb-3 group-hover:text-gold-600 transition-colors">
                        Gestion de Travaux</h3>
                    <p class="text-xs text-slate-400 font-light leading-relaxed">Suivi rigoureux et sécurisé de vos
                        chantiers de rénovation, de l'étude de faisabilité à la livraison finale.</p>
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

            <div class="lg:col-span-2 bg-[#FBFBFC] p-6 sm:p-8 rounded-3xl border border-slate-100">
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
@endsection
