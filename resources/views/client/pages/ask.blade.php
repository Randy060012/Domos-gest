@extends('client.layouts.master')
@section('content')

   <main class="pt-40 pb-24 min-h-[85vh]">
        <div class="max-w-3xl mx-auto px-6 lg:px-8">

            <div class="bg-white p-8 sm:p-14 rounded-[32px] shadow-[0_4px_30px_rgba(0,0,0,0.01)] border border-slate-100/80 space-y-10 animate__animated animate__fadeIn">

                <div class="text-center space-y-2">
                    <span class="text-gold-600 text-[11px] font-bold uppercase tracking-[0.2em] block">Mandat de Recherche Exclusif</span>
                    <h1 class="font-serif text-3xl sm:text-4xl font-normal text-navy-900 italic tracking-wide">Votre Projet Sur-Mesure</h1>
                    <p class="text-slate-400 font-light text-xs sm:text-sm max-w-md mx-auto leading-relaxed">Confiez vos critères de recherche confidentiels et uniques à notre cellule d'ingénierie patrimoniale.</p>
                </div>

                <form method="POST" action="{{ route('ask.store') }}" onsubmit="handleDemandeSpecifique(event)" class="space-y-6">
                    @csrf

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div class="space-y-1.5">
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400">Nom Complet *</label>
                            <input type="text" name="name" required class="w-full bg-slate-50/70 rounded-xl px-4 py-3.5 text-xs font-medium text-slate-700 focus:outline-none focus:bg-white focus:ring-1 focus:ring-gold-500 transition" placeholder="M. ou Mme..." />
                        </div>
                        <div class="space-y-1.5">
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400">Numéro de Téléphone *</label>
                            <input type="tel" name="phone" required class="w-full bg-slate-50/70 rounded-xl px-4 py-3.5 text-xs font-medium text-slate-700 focus:outline-none focus:bg-white focus:ring-1 focus:ring-gold-500 transition" placeholder="+33 (0)6..." />
                        </div>
                    </div>

                    <div class="space-y-1.5">
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400">Adresse Électronique *</label>
                        <input type="email" name="email" required class="w-full bg-slate-50/70 rounded-xl px-4 py-3.5 text-xs font-medium text-slate-700 focus:outline-none focus:bg-white focus:ring-1 focus:ring-gold-500 transition" placeholder="contact@domaine.com" />
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div class="space-y-1.5">
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400">Nature du Projet</label>
                            <select name="nature_projet" class="w-full bg-slate-50/70 rounded-xl px-4 py-3.5 text-xs font-medium text-slate-700 focus:outline-none focus:bg-white focus:ring-1 focus:ring-gold-500 transition cursor-pointer">
                                <option value="Acquisition (Achat)">Acquisition (Achat)</option>
                                <option value="Villégiature / Location">Villégiature / Location</option>
                            </select>
                        </div>
                        <div class="space-y-1.5">
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400">Type de Propriété</label>
                            <select name="type_propriete" class="w-full bg-slate-50/70 rounded-xl px-4 py-3.5 text-xs font-medium text-slate-700 focus:outline-none focus:bg-white focus:ring-1 focus:ring-gold-500 transition cursor-pointer">
                                <option value="Villa Contemporaine">Villa Contemporaine</option>
                                <option value="Hôtel Particulier">Hôtel Particulier</option>
                                <option value="Appartement / Penthouse">Appartement / Penthouse</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                        <div class="space-y-1.5">
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400">Destination Ciblée</label>
                            <input type="text" name="localisation" placeholder="Ex: Paris VIIe, Cannes" class="w-full bg-slate-50/70 rounded-xl px-4 py-3.5 text-xs font-medium text-slate-700 focus:outline-none focus:bg-white focus:ring-1 focus:ring-gold-500 transition" />
                        </div>
                        <div class="space-y-1.5">
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400">Budget Max (F CFA)</label>
                            <input type="number" name="budget_max" placeholder="Illimité" class="w-full bg-slate-50/70 rounded-xl px-4 py-3.5 text-xs font-medium text-slate-700 focus:outline-none focus:bg-white focus:ring-1 focus:ring-gold-500 transition" />
                        </div>
                        <div class="space-y-1.5">
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400">Chambres Min</label>
                            <input type="number" name="chambres_min" placeholder="Peu importe" class="w-full bg-slate-50/70 rounded-xl px-4 py-3.5 text-xs font-medium text-slate-700 focus:outline-none focus:bg-white focus:ring-1 focus:ring-gold-500 transition" />
                        </div>
                    </div>

                    <div class="space-y-1.5">
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400">Description du Besoin & Particularités</label>
                        <textarea name="description" rows="4" placeholder="Détaillez vos attentes architecturales, prestations recherchées (Off-Market, piscine à débordement, sécurité renforcée...)" class="w-full bg-slate-50/70 rounded-xl px-4 py-3.5 text-xs font-medium text-slate-700 focus:outline-none focus:bg-white focus:ring-1 focus:ring-gold-500 transition"></textarea>
                    </div>

                    <div class="pt-4">
                        <button type="submit" class="w-full bg-navy-900 text-white font-bold text-[11px] tracking-widest uppercase rounded-xl py-4 hover:bg-gold-500 transition-all duration-300 shadow-sm">
                            Solliciter une étude de projet privée
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

@endsection

<script src="{{ asset('client/ask.js') }}"></script>
