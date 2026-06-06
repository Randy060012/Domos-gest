@extends('client.layouts.master')
@section('content')

   <main class="pt-40 pb-24 min-h-[85vh]">
        <div class="max-w-3xl mx-auto px-6 lg:px-8">

            <!-- CONTENEUR DU FORMULAIRE STYLE HAUTE CONCIERGERIE -->
            <div class="bg-white p-8 sm:p-14 rounded-[32px] shadow-[0_4px_30px_rgba(0,0,0,0.01)] border border-slate-100/80 space-y-10 animate__animated animate__fadeIn">

                <div class="text-center space-y-2">
                    <span class="text-gold-600 text-[11px] font-bold uppercase tracking-[0.2em] block">Mandat de Recherche Exclusif</span>
                    <h1 class="font-serif text-3xl sm:text-4xl font-normal text-navy-900 italic tracking-wide">Votre Projet Sur-Mesure</h1>
                    <p class="text-slate-400 font-light text-xs sm:text-sm max-w-md mx-auto leading-relaxed">Confiez vos critères de recherche confidentiels et uniques à notre cellule d'ingénierie patrimoniale.</p>
                </div>

                <form onsubmit="handleDemandeSpecifique(event)" class="space-y-6">

                    <!-- Ligne 1 : Identité -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div class="space-y-1.5">
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400">Nom Complet *</label>
                            <input type="text" required class="w-full bg-slate-50/70 rounded-xl px-4 py-3.5 text-xs font-medium text-slate-700 focus:outline-none focus:bg-white focus:ring-1 focus:ring-gold-500 transition" placeholder="M. ou Mme..." />
                        </div>
                        <div class="space-y-1.5">
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400">Numéro de Téléphone *</label>
                            <input type="tel" required class="w-full bg-slate-50/70 rounded-xl px-4 py-3.5 text-xs font-medium text-slate-700 focus:outline-none focus:bg-white focus:ring-1 focus:ring-gold-500 transition" placeholder="+33 (0)6..." />
                        </div>
                    </div>

                    <!-- Ligne 2 : Email -->
                    <div class="space-y-1.5">
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400">Adresse Électronique *</label>
                        <input type="email" required class="w-full bg-slate-50/70 rounded-xl px-4 py-3.5 text-xs font-medium text-slate-700 focus:outline-none focus:bg-white focus:ring-1 focus:ring-gold-500 transition" placeholder="contact@domaine.com" />
                    </div>

                    <!-- Ligne 3 : Nature et Structure -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div class="space-y-1.5">
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400">Nature du Projet</label>
                            <select class="w-full bg-slate-50/70 rounded-xl px-4 py-3.5 text-xs font-medium text-slate-700 focus:outline-none focus:bg-white focus:ring-1 focus:ring-gold-500 transition cursor-pointer">
                                <option>Acquisition (Achat)</option>
                                <option>Villégiature / Location Noble</option>
                            </select>
                        </div>
                        <div class="space-y-1.5">
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400">Type de Propriété</label>
                            <select class="w-full bg-slate-50/70 rounded-xl px-4 py-3.5 text-xs font-medium text-slate-700 focus:outline-none focus:bg-white focus:ring-1 focus:ring-gold-500 transition cursor-pointer">
                                <option>Villa Contemporaine</option>
                                <option>Hôtel Particulier</option>
                                <option>Appartement / Penthouse de Prestige</option>
                            </select>
                        </div>
                    </div>

                    <!-- Ligne 4 : Critères Chiffrés -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                        <div class="space-y-1.5">
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400">Destination Ciblée</label>
                            <input type="text" placeholder="Ex: Paris VIIe, Cannes" class="w-full bg-slate-50/70 rounded-xl px-4 py-3.5 text-xs font-medium text-slate-700 focus:outline-none focus:bg-white focus:ring-1 focus:ring-gold-500 transition" />
                        </div>
                        <div class="space-y-1.5">
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400">Budget Max (€)</label>
                            <input type="number" placeholder="Illimité" class="w-full bg-slate-50/70 rounded-xl px-4 py-3.5 text-xs font-medium text-slate-700 focus:outline-none focus:bg-white focus:ring-1 focus:ring-gold-500 transition" />
                        </div>
                        <div class="space-y-1.5">
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400">Chambres Min</label>
                            <input type="number" placeholder="Peu importe" class="w-full bg-slate-50/70 rounded-xl px-4 py-3.5 text-xs font-medium text-slate-700 focus:outline-none focus:bg-white focus:ring-1 focus:ring-gold-500 transition" />
                        </div>
                    </div>

                    <!-- Ligne 5 : Descriptif libre -->
                    <div class="space-y-1.5">
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400">Description du Besoin & Particularités</label>
                        <textarea rows="4" placeholder="Détaillez vos attentes architecturales, prestations recherchées (Off-Market, piscine à débordement, sécurité renforcée...)" class="w-full bg-slate-50/70 rounded-xl px-4 py-3.5 text-xs font-medium text-slate-700 focus:outline-none focus:bg-white focus:ring-1 focus:ring-gold-500 transition"></textarea>
                    </div>

                    <!-- Bouton Submit Raffiné -->
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

<script src="client/ask.js"></script>
