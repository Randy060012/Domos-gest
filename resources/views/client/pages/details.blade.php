    @extends('client.layouts.master-dt')
    @section('contente')
    <main class="max-w-7xl mx-auto px-6 lg:px-8 pt-40 pb-24 space-y-12">

        <!-- TITLE & PRICE HERO -->
        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-end gap-6 border-b border-slate-100 pb-10">
            <div class="space-y-3 max-w-3xl">
                <div class="flex flex-wrap items-center gap-3">
                    <span id="bien-statut" class="bg-navy-900 text-gold-500 text-[9px] font-bold uppercase tracking-[0.2em] px-3 py-1 rounded-lg">STATUT</span>
                    <span id="bien-ref" class="text-[10px] text-slate-400 font-medium tracking-widest uppercase bg-slate-50 border border-slate-100 px-2.5 py-0.5 rounded-lg">RÉF : -</span>
                </div>
                <h1 id="bien-titre" class="text-3xl sm:text-4xl lg:text-5xl font-serif font-normal text-navy-900 tracking-wide leading-tight italic">...</h1>
                <p class="text-slate-400 font-light text-xs sm:text-sm tracking-wide flex items-center pt-1">
                    <i class="fa-solid fa-location-dot text-gold-600 mr-2 text-sm"></i> <span id="bien-localisation" class="text-slate-500 font-medium">Chargement...</span>
                </p>
            </div>
            <div class="lg:text-right w-full lg:w-auto border-t lg:border-t-0 border-slate-100 pt-6 lg:pt-0">
                <span class="text-[10px] text-slate-400 block font-bold uppercase tracking-[0.2em] mb-1">Valeur Vénale Présentée</span>
                <span id="bien-prix" class="text-3xl sm:text-4xl lg:text-5xl font-serif font-light tracking-wide text-navy-900">0 €</span>
                <span id="bien-honoraires" class="text-[11px] block text-slate-400 font-light mt-2 italic">...</span>
            </div>
        </div>

        <!-- MEDIA & CONTACT BLOCK -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-start">

            <!-- Zone Multimédia (Image Principale + Galerie Miniatures) -->
            <div class="lg:col-span-2 space-y-4">
                <!-- Image principale épurée -->
                <div class="rounded-[32px] overflow-hidden shadow-premium aspect-[16/10] bg-slate-900 relative group border border-slate-100">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/20 via-transparent to-transparent pointer-events-none z-10"></div>
                    <img id="bien-image-principale" src="" alt="Vue principale" class="w-full h-full object-cover transition-all duration-700 ease-out">
                    <div class="absolute bottom-6 left-6 z-20 bg-white/90 backdrop-blur-md text-navy-900 text-[10px] tracking-widest font-bold uppercase px-4 py-2.5 rounded-xl shadow-sm flex items-center gap-2">
                        <i class="fa-regular fa-image text-gold-600"></i> Perspective Sélectionnée
                    </div>
                </div>

                <!-- Galerie de miniatures secondaires -->
                <div id="bien-galerie-miniatures" class="flex gap-3 overflow-x-auto pb-2 custom-scrollbar snap-x">
                    <!-- Injecté dynamiquement par JS -->
                </div>
            </div>

            <!-- Bloc de contact type Haute Conciergerie -->
            <div class="bg-white p-6 sm:p-10 rounded-[32px] border border-slate-100 shadow-premium flex flex-col justify-between space-y-8 lg:sticky lg:top-32">
                <div class="space-y-6">
                    <div class="space-y-2">
                        <span class="text-gold-600 text-[10px] font-bold uppercase tracking-widest block">Étude Confidentielle</span>
                        <h4 class="text-navy-900 font-serif text-xl font-normal italic">Demande d'informations</h4>
                        <p class="text-xs text-slate-400 font-light leading-relaxed">Un expert de notre maison dédié à ce patrimoine d'exception prendra contact avec vous sous 24h.</p>
                    </div>

                    <form onsubmit="handleInteretForm(event)" class="space-y-3">
                        <input type="text" placeholder="Votre nom complet" required class="w-full bg-slate-50/70 border border-slate-100 rounded-xl px-4 py-3.5 text-xs font-medium text-slate-700 focus:outline-none focus:bg-white focus:ring-1 focus:ring-gold-500 transition" />
                        <input type="tel" placeholder="Numéro de téléphone" required class="w-full bg-slate-50/70 border border-slate-100 rounded-xl px-4 py-3.5 text-xs font-medium text-slate-700 focus:outline-none focus:bg-white focus:ring-1 focus:ring-gold-500 transition" />
                        <input type="email" placeholder="Adresse e-mail" required class="w-full bg-slate-50/70 border border-slate-100 rounded-xl px-4 py-3.5 text-xs font-medium text-slate-700 focus:outline-none focus:bg-white focus:ring-1 focus:ring-gold-500 transition" />

                        <button type="submit" class="w-full bg-gold-500 hover:bg-gold-600 text-navy-900 font-bold text-[11px] tracking-widest uppercase py-4 rounded-xl transition-all duration-300 shadow-sm mt-2">
                            Être recontacté en toute discrétion
                        </button>
                    </form>
                </div>

                <div class="space-y-3 border-t border-slate-100 pt-6">
                    <button onclick="toggleModal('modal-visite', true)" class="w-full bg-navy-900 text-white font-bold text-[11px] tracking-widest uppercase py-4 rounded-xl hover:bg-gold-500 transition-all duration-300 shadow-sm flex items-center justify-center gap-2">
                        <i class="fa-regular fa-calendar-check text-gold-400 text-xs"></i> Solliciter une visite privée
                    </button>
                    <button onclick="handleDownloadPDF()" class="w-full bg-white text-navy-900 border border-slate-200 font-bold text-[11px] tracking-widest uppercase py-4 rounded-xl hover:bg-slate-50 hover:border-slate-300 transition-all duration-300 flex items-center justify-center gap-2">
                        <i class="fa-regular fa-file-pdf text-slate-400 text-xs"></i> Télécharger le livret technique
                    </button>
                </div>
            </div>
        </div>

        <!-- TECHNICAL DETAILS SECTION -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-start">

            <div class="lg:col-span-2 space-y-10">

                <!-- Description -->
                <div class="bg-white p-6 sm:p-10 rounded-[32px] border border-slate-100 shadow-premium space-y-6">
                    <h3 class="text-base font-serif text-navy-900 font-normal tracking-wide flex items-center border-b border-slate-100 pb-4">
                        <i class="fa-solid fa-signature text-gold-600 text-sm mr-3"></i>Note de Synthèse de l'Expert
                    </h3>
                    <p id="bien-description" class="text-slate-500 font-light text-sm sm:text-base leading-relaxed whitespace-pre-line pt-1">
                        ...
                    </p>
                </div>

                <!-- Caractéristiques -->
                <div class="bg-white p-6 sm:p-10 rounded-[32px] border border-slate-100 shadow-premium space-y-6">
                    <h3 class="text-base font-serif text-navy-900 font-normal tracking-wide flex items-center border-b border-slate-100 pb-4">
                        <i class="fa-solid fa-sliders text-gold-600 text-sm mr-3"></i>Spécifications Techniques
                    </h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-12 text-xs sm:text-sm pt-1">
                        <div class="flex justify-between py-4 border-b border-slate-50"><span class="text-slate-400 font-light">Nature du bien</span><strong id="tech-type" class="text-navy-900 font-semibold">-</strong></div>
                        <div class="flex justify-between py-4 border-b border-slate-50"><span class="text-slate-400 font-light">Surface habitable</span><strong id="tech-surface" class="text-navy-900 font-semibold">- m²</strong></div>
                        <div class="flex justify-between py-4 border-b border-slate-50"><span class="text-slate-400 font-light">Assise foncière (Terrain)</span><strong id="tech-terrain" class="text-navy-900 font-semibold">- m²</strong></div>
                        <div class="flex justify-between py-4 border-b border-slate-50"><span class="text-slate-400 font-light">Distribution (Pièces)</span><strong id="tech-pieces" class="text-navy-900 font-semibold">-</strong></div>
                        <div class="flex justify-between py-4 border-b border-slate-50"><span class="text-slate-400 font-light">Chambres</span><strong id="tech-chambres" class="text-navy-900 font-semibold">-</strong></div>
                        <div class="flex justify-between py-4 border-b border-slate-50"><span class="text-slate-400 font-light">Salles d'eau / Bains</span><strong id="tech-sdb" class="text-navy-900 font-semibold">-</strong></div>
                        <div class="flex justify-between py-4 border-b border-slate-50"><span class="text-slate-400 font-light">Année de livraison</span><strong id="tech-annee" class="text-navy-900 font-semibold">-</strong></div>
                        <div class="flex justify-between py-4 border-b border-slate-50"><span class="text-slate-400 font-light">Vecteur énergétique</span><strong id="tech-chauffage" class="text-navy-900 font-semibold">-</strong></div>
                        <div class="flex justify-between py-4 border-b border-slate-50 sm:border-b-0"><span class="text-slate-400 font-light">État du bâti</span><strong id="tech-etat" class="text-navy-900 font-semibold">-</strong></div>
                        <div class="flex justify-between py-4 border-b border-slate-50 sm:border-b-0"><span class="text-slate-400 font-light">Orientation</span><strong id="tech-exposition" class="text-navy-900 font-semibold">-</strong></div>
                    </div>
                </div>

                <!-- Prestations -->
                <div class="bg-white p-6 sm:p-10 rounded-[32px] border border-slate-100 shadow-premium space-y-6">
                    <h3 class="text-base font-serif text-navy-900 font-normal tracking-wide flex items-center border-b border-slate-100 pb-4">
                        <i class="fa-solid fa-gem text-gold-600 text-sm mr-3"></i>Prestations de Prestige & Aménagements
                    </h3>
                    <div id="bien-prestations" class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-1"></div>
                </div>

                <!-- Diagnostics Épurés -->
                <div class="bg-white p-6 sm:p-10 rounded-[32px] border border-slate-100 shadow-premium space-y-6">
                    <h3 class="text-base font-serif text-navy-900 font-normal tracking-wide flex items-center border-b border-slate-100 pb-4">
                        <i class="fa-solid fa-chart-simple text-gold-600 text-sm mr-3"></i>Performance Environnementale & Énergétique
                    </h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-2">
                        <!-- DPE -->
                        <div class="border border-slate-100 p-6 rounded-2xl bg-slate-50/50 space-y-4">
                            <div class="flex items-center justify-between">
                                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Consommation Énergétique (DPE)</span>
                                <div id="badge-dpe" class="w-8 h-8 rounded-lg flex items-center justify-center text-white font-bold text-sm shadow-sm bg-slate-400">-</div>
                            </div>
                            <span id="val-dpe" class="text-xs text-slate-700 font-bold block">- kWh/m²/an</span>
                            <div class="h-1 w-full bg-slate-200/60 rounded-full overflow-hidden">
                                <div id="barre-dpe" class="h-full transition-all duration-500" style="width: 0%"></div>
                            </div>
                        </div>
                        <!-- GES -->
                        <div class="border border-slate-100 p-6 rounded-2xl bg-slate-50/50 space-y-4">
                            <div class="flex items-center justify-between">
                                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Gaz à Effet de Serre (GES)</span>
                                <div id="badge-ges" class="w-8 h-8 rounded-lg flex items-center justify-center text-white font-bold text-sm shadow-sm bg-slate-400">-</div>
                            </div>
                            <span id="val-ges" class="text-xs text-slate-700 font-bold block">- kg CO₂/m²/an</span>
                            <div class="h-1 w-full bg-slate-200/60 rounded-full overflow-hidden">
                                <div id="barre-ges" class="h-full transition-all duration-500" style="width: 0%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Financial Sidebar Card Minimaliste -->
            <div class="space-y-6 lg:sticky lg:top-[500px]">
                <div class="bg-navy-900 text-white p-6 sm:p-8 rounded-[32px] shadow-premium space-y-6 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gold-500/5 rounded-full blur-2xl pointer-events-none"></div>
                    <h4 class="text-gold-500 font-serif text-base tracking-wide border-b border-white/10 pb-4 italic">Données Financières</h4>
                    <div class="space-y-4 text-xs font-light tracking-wide">
                        <div class="flex justify-between border-b border-white/5 pb-3.5"><span class="text-slate-400">Taxe Foncière Annuelle</span><span id="fin-taxe" class="font-medium text-white">-</span></div>
                        <div class="flex justify-between border-b border-white/5 pb-3.5"><span class="text-slate-400">Charges de Copropriété</span><span id="fin-charges" class="font-medium text-white">-</span></div>
                        <div class="flex justify-between border-b border-white/5 pb-3.5"><span class="text-slate-400">Nombre de Lots</span><span id="fin-lots" class="font-medium text-white">-</span></div>
                        <div class="flex justify-between border-b border-white/5 pb-3.5"><span class="text-slate-400">Procédures Syndicales</span><span id="fin-procedure" class="font-medium text-white">-</span></div>
                        <div class="flex justify-between pt-1 items-center"><span class="text-slate-400">État des Risques (ERP)</span><span class="text-[9px] font-bold tracking-widest uppercase text-emerald-400 bg-emerald-500/10 px-3 py-1 rounded-lg border border-emerald-500/20">Consulter l'acte</span></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection
