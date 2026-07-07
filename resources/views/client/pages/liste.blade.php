@extends('client.layouts.master')
@section('content')
<main class="pt-40 pb-24 min-h-[80vh]">
    <div id="section-catalogue" class="max-w-7xl mx-auto px-6 lg:px-8 animate__animated animate__fadeIn">

        <!-- TITRE ÉDITORIAL LUXE -->
        <div class="text-center md:text-left mb-12 space-y-2">
            <h1 class="font-serif text-4xl sm:text-5xl font-normal text-navy-900 italic tracking-wide">Le Catalogue</h1>
            <p class="text-slate-400 font-light text-sm tracking-wider uppercase">Propriétés d'exception & architectures remarquables</p>
        </div>

        <!-- FILTRES AVANCÉS ÉPURÉS -->
        <div class="bg-white p-6 rounded-3xl shadow-[0_4px_30px_rgba(0,0,0,0.02)] border border-slate-100/80 mb-14 space-y-6">

            <!-- SÉLECTEUR D'OPÉRATION DESIGN (TABS DYNAMIQUES) -->
            <div class="flex justify-center md:justify-start">
                <div class="relative bg-slate-100/80 p-1 rounded-full flex w-full max-w-[320px] relative">
                    <div id="tab-bg" class="absolute top-1 bottom-1 left-1 w-[104px] bg-white rounded-full shadow-sm transition-all duration-300 ease-out"></div>
                    <button onclick="setOperationFilter('', this)" class="relative z-10 flex-1 py-2 text-xs font-bold tracking-wider uppercase text-navy-900 transition-colors duration-300">Tous</button>
                    <button onclick="setOperationFilter('Vente', this)" class="relative z-10 flex-1 py-2 text-xs font-bold tracking-wider uppercase text-slate-500 transition-colors duration-300">Acheter</button>
                    <button onclick="setOperationFilter('Location', this)" class="relative z-10 flex-1 py-2 text-xs font-bold tracking-wider uppercase text-slate-500 transition-colors duration-300">Louer</button>
                </div>
                <input type="hidden" id="filter-status" value="">
            </div>

            <!-- AUTRES CRITÈRES SANS BORDURES LOURDES -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 pt-4 border-t border-slate-100">
                <div class="space-y-1.5">
                    <label class="block text-[11px] font-bold text-slate-400 tracking-wider uppercase"><i class="fa-solid fa-house text-gold-500/70 mr-1.5"></i> Structure</label>
                    <select id="filter-type" onchange="applyFilters()" class="w-full bg-slate-50/60 rounded-xl px-4 py-3 text-xs font-medium text-slate-700 focus:outline-none focus:bg-white focus:ring-1 focus:ring-gold-500 transition cursor-pointer">
                        <option value="">Toutes les structures</option>
                        <option value="Villa">Villa</option>
                        <option value="Appartement">Appartement</option>
                    </select>
                </div>

                <div class="space-y-1.5">
                    <label class="block text-[11px] font-bold text-slate-400 tracking-wider uppercase"><i class="fa-solid fa-location-dot text-gold-500/70 mr-1.5"></i> Destination</label>
                    <select id="filter-city" onchange="applyFilters()" class="w-full bg-slate-50/60 rounded-xl px-4 py-3 text-xs font-medium text-slate-700 focus:outline-none focus:bg-white focus:ring-1 focus:ring-gold-500 transition cursor-pointer">
                        <option value="">Toutes les destinations</option>
                        <option value="Paris">Paris</option>
                        <option value="Cannes">Cannes</option>
                        <option value="Saint-Tropez">Saint-Tropez</option>
                    </select>
                </div>

                <div class="space-y-1.5">
                    <label class="block text-[11px] font-bold text-slate-400 tracking-wider uppercase"><i class="fa-solid fa-bed text-gold-500/70 mr-1.5"></i> Chambres minimum</label>
                    <select id="filter-rooms" onchange="applyFilters()" class="w-full bg-slate-50/60 rounded-xl px-4 py-3 text-xs font-medium text-slate-700 focus:outline-none focus:bg-white focus:ring-1 focus:ring-gold-500 transition cursor-pointer">
                        <option value="">Peu importe</option>
                        <option value="3">3+ Chambres</option>
                        <option value="5">5+ Chambres</option>
                    </select>
                </div>

                <div class="space-y-1.5">
                    <label class="block text-[11px] font-bold text-slate-400 tracking-wider uppercase"><i class="fa-solid fa-tags text-gold-500/70 mr-1.5"></i> Budget max</label>
                    <select id="filter-budget" onchange="applyFilters()" class="w-full bg-slate-50/60 rounded-xl px-4 py-3 text-xs font-medium text-slate-700 focus:outline-none focus:bg-white focus:ring-1 focus:ring-gold-500 transition cursor-pointer">
                        <option value="">Illimité</option>
                        <option value="1500000">1 500 000 F CFA</option>
                        <option value="3000000">3 000 000 F CFA</option>
                        <option value="5000000">5 000 000 F CFA</option>
                    </select>
                </div>

                <div class="flex items-end">
                    <button onclick="resetFilters()" class="w-full bg-slate-900 text-white hover:bg-gold-500 font-bold text-[11px] tracking-widest uppercase rounded-xl py-3.5 transition-all duration-300 shadow-sm">
                        Effacer les filtres
                    </button>
                </div>
            </div>
        </div>

        <!-- GRILLE DES PRODUITS - CLEAN & BORDERLESS -->
        <div id="grid-catalogue" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 fade-grid"></div>
    </div>

    <!-- ZONE DETAIL BIEN -->
    <div id="section-detail" class="hidden animate__animated animate__fadeIn">
        <div id="container-detail-bien"></div>
    </div>
</main>

<script id="liste-biens-data" type="application/json">@json($biens)</script>
<script src="client/liste.js"></script>
<script>
const baseUrlDetails = "{{ route('details.home') }}";
const contactInteretUrl = "{{ route('contact.interet') }}";
</script>
@endsection
