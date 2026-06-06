const PROPERTIES = [
    { id: 1, title: "Villa Lumina — Édifice Contemporain", price: 4950000, location: "Cannes", type: "Villa", status: "Vente", area: 420, rooms: 5, baths: 5, image: "https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=800&q=80", desc: "Chef-d'œuvre contemporain idéalement positionné sur les hauteurs. Prestations domotiques de pointe, piscine à débordement de 20 mètres.", amenities: ["Piscine à débordement", "Système Domotique complet", "Garage 4 voitures", "Cave à vin régulée"] },
    { id: 2, title: "Penthouse Impérial — Vue Panoramique", price: 3200000, location: "Paris", type: "Appartement", status: "Vente", area: 195, rooms: 3, baths: 3, image: "https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&fit=crop&w=800&q=80", desc: "Au dernier étage d'un immeuble haussmannien hautement sécurisé, ce penthouse offre des vues spectaculaires sans vis-à-vis.", amenities: ["Terrasse de plain-pied", "Ascenseur Privatif", "Gardiennage 24/7"] },
    { id: 3, title: "Le Domaine de l'Olympe — Propriété d'Exception", price: 12500000, location: "Saint-Tropez", type: "Villa", status: "Vente", area: 680, rooms: 7, baths: 7, image: "https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=800&q=80", desc: "Domaine clos d'un hectare niché dans le secteur le plus exclusif. Parc paysager d'arbres séculaires aux essences rares.", amenities: ["Accès Mer Privé", "Spa & Hammam", "Terrain de Tennis"] },
    { id: 4, title: "Duplex Signature — Échappée Jardin Privé", price: 18500, location: "Paris", type: "Appartement", status: "Location", area: 240, rooms: 4, baths: 3, image: "https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?auto=format&fit=crop&w=800&q=80", desc: "Duplex de prestige entièrement meublé et décoré par un architecte d'intérieur de renom. Jardin d'hiver privatif.", amenities: ["Jardin Privatif", "Ameublement de créateur"] },
    { id: 5, title: "Villa Turquoise — Écrin en Bord de Falaise", price: 25000, location: "Cannes", type: "Villa", status: "Location", area: 310, rooms: 4, baths: 4, image: "https://images.unsplash.com/photo-1613490493576-7fde63acd811?auto=format&fit=crop&w=800&q=80", desc: "Demeure suspendue offrant une vue plunging époustouflante. Accès direct aux criques en contrebas.", amenities: ["Vue Mer Totale", "Service de Conciergerie"] },
    { id: 6, title: "Hôtel Particulier Classé — Cœur Historique", price: 8900000, location: "Paris", type: "Appartement", status: "Vente", area: 510, rooms: 6, baths: 5, image: "https://images.unsplash.com/photo-1513694203232-719a280e022f?auto=format&fit=crop&w=800&q=80", desc: "Demeure historique d'une rareté absolue, entièrement réhabilitée dans les règles de l'art.", amenities: ["Monuments Historiques", "Cour d'Honneur"] }
];


// LOGIQUE HEADER RÉTRACTABLE AU SCROLL
window.addEventListener('scroll', () => {
    const header = document.getElementById('main-header');
    const logo = document.getElementById('logo-img');
    if (window.scrollY > 50) {
        header.classList.remove('h-28');
        header.classList.add('h-20', 'shadow-[0_10px_30px_rgba(0,0,0,0.02)]');
    } else {
        header.classList.remove('h-20', 'shadow-[0_10px_30px_rgba(0,0,0,0.02)]');
        header.classList.add('h-28');
    }
});

// FILTRAGE ULTRA-MODERNE DES TABS (AVEC DÉPLACEMENT DU SECTEUR BLANC)
function setOperationFilter(value, button) {
    document.getElementById("filter-status").value = value;

    // Gestion visuelle du bouton actif
    const buttons = button.parentNode.querySelectorAll('button');
    buttons.forEach(btn => {
        btn.classList.remove('text-navy-900', 'font-bold');
        btn.classList.add('text-slate-500');
    });
    button.classList.add('text-navy-900', 'font-bold');
    button.classList.remove('text-slate-500');

    // Animation du background magique
    const tabBg = document.getElementById('tab-bg');
    tabBg.style.left = `${button.offsetLeft}px`;
    tabBg.style.width = `${button.offsetWidth}px`;

    applyFilters();
}

// function createPropertyCard(item) {
//     const displayPrice = item.status === "Location" ? `${item.price.toLocaleString("fr-FR")} € / mois` : `${item.price.toLocaleString("fr-FR")} €`;
//     return `
//                 <div class="group bg-white rounded-[24px] overflow-hidden shadow-[0_4px_25px_rgba(0,0,0,0.01)] hover:shadow-[0_20px_50px_rgba(1,44,78,0.06)] transition-all duration-500 flex flex-col h-full cursor-pointer" onclick="showDetail(${item.id})">
//                     <div class="relative overflow-hidden aspect-[16/10]">
//                         <img src="${item.image}" alt="${item.title}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
//                         <div class="absolute inset-0 bg-gradient-to-t map-gradient from-navy-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
//                         <span class="absolute top-5 left-5 z-10 px-3 py-1 bg-white/90 backdrop-blur-md rounded-full text-[10px] font-bold tracking-widest uppercase text-navy-900 shadow-sm">
//                             ${item.status === "Vente" ? "Acheter" : "Louer"}
//                         </span>
//                     </div>
//                     <div class="p-7 flex flex-col flex-grow justify-between space-y-4">
//                         <div class="space-y-2.5">
//                             <div class="flex items-center space-x-4 text-[11px] text-slate-400 font-semibold tracking-wider uppercase">
//                                 <span><i class="fa-solid fa-location-dot text-gold-500/80 mr-1"></i> ${item.location}</span>
//                                 <span><i class="fa-solid fa-expand text-gold-500/80 mr-1"></i> ${item.area} m²</span>
//                                 <span><i class="fa-solid fa-bed text-gold-500/80 mr-1"></i> ${item.rooms} p.</span>
//                             </div>
//                             <h3 class="font-serif text-lg text-navy-900 font-medium leading-snug group-hover:text-gold-600 transition-colors duration-300 line-clamp-1">${item.title}</h3>
//                             <p class="text-xs text-slate-400 font-light leading-relaxed line-clamp-2">${item.desc}</p>
//                         </div>
//                         <div class="pt-4 border-t border-slate-50 flex items-center justify-between">
//                             <span class="text-sm font-bold tracking-wide text-navy-900">${displayPrice}</span>
//                             <span class="text-[11px] font-bold tracking-widest text-navy-900 uppercase group-hover:text-gold-500 transition-colors flex items-center space-x-1">
//                                 <span>Découvrir</span> <i class="fa-solid fa-arrow-right text-[9px] transform group-hover:translate-x-1 transition-transform"></i>
//                             </span>
//                         </div>
//                     </div>
//                 </div>`;
// }


// function createPropertyCard(item) {
//     const displayPrice = item.status === "Location" ? `${item.price.toLocaleString("fr-FR")} € / mois` : `${item.price.toLocaleString("fr-FR")} €`;
//     return `
//         <div class="group bg-white rounded-[20px] overflow-hidden shadow-[0_4px_25px_rgba(0,0,0,0.01)] hover:shadow-[0_30px_60px_rgba(1,44,78,0.06)] transition-all duration-500 flex flex-col h-full cursor-pointer" onclick="window.location.href='liste-biens.html?id=${item.id}'">
//             <div class="relative overflow-hidden aspect-[16/11]">
//                 <img src="${item.image}" alt="${item.title}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
//                 <span class="absolute top-4 left-4 z-10 px-3 py-1 bg-white/90 backdrop-blur-md rounded-full text-[9px] font-bold tracking-widest uppercase text-navy-900 shadow-sm">${item.status === "Vente" ? "Achat" : "Louer"}</span>
//             </div>
//             <div class="p-6 flex flex-col flex-grow justify-between space-y-4">
//                 <div class="space-y-2">
//                     <div class="flex items-center space-x-4 text-[10px] text-slate-400 font-semibold tracking-wider uppercase">
//                         <span><i class="fa-solid fa-location-dot text-gold-500/80 mr-1"></i> ${item.location}</span>
//                         <span><i class="fa-solid fa-expand text-gold-500/80 mr-1"></i> ${item.area} m²</span>
//                     </div>
//                     <h3 class="font-serif text-base text-navy-900 font-medium leading-snug group-hover:text-gold-600 transition-colors duration-300 line-clamp-1">${item.title}</h3>
//                     <p class="text-[11px] text-slate-400 font-light leading-relaxed line-clamp-2">${item.desc}</p>
//                 </div>
//                 <div class="pt-3 border-t border-slate-50 flex items-center justify-between">
//                     <span class="text-xs font-bold tracking-wide text-navy-900">${displayPrice}</span>

//                     <div class="flex items-center space-x-3">
//                         <button type="button" onclick="event.stopPropagation(); openInterestModal('${item.title.replace(/'/g, "\\'")}')" class="text-[10px] font-bold tracking-widest text-gold-600 uppercase hover:text-navy-900 transition-colors">
//                             Intéressé ?
//                         </button>

//                     <a href="${baseUrlDetails}?id=${item.id}" class="text-[10px] font-bold tracking-widest text-navy-900 uppercase hover:text-gold-500 transition-colors inline-flex items-center space-x-1 group">
//     <span>Détails</span>
//     <i class="fa-solid fa-arrow-right text-[8px] transform group-hover:translate-x-0.5 transition-transform"></i>
// </a>
//                     </div>
//                 </div>
//             </div>
//         </div>`;
// }

function createPropertyCard(item) {
    const displayPrice = item.status === "Location" ? `${item.price.toLocaleString("fr-FR")} € / mois` : `${item.price.toLocaleString("fr-FR")} €`;
    return `
        <div class="group bg-white rounded-[20px] overflow-hidden shadow-[0_4px_25px_rgba(0,0,0,0.01)] hover:shadow-[0_30px_60px_rgba(1,44,78,0.06)] transition-all duration-500 flex flex-col h-full">
            <div class="relative overflow-hidden aspect-[16/11]">
                <img src="${item.image}" alt="${item.title}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                <span class="absolute top-4 left-4 z-10 px-3 py-1 bg-white/90 backdrop-blur-md rounded-full text-[9px] font-bold tracking-widest uppercase text-navy-900 shadow-sm">${item.status === "Vente" ? "Achat" : "Louer"}</span>
            </div>
            <div class="p-6 flex flex-col flex-grow justify-between space-y-4">
                <div class="space-y-2">
                    <div class="flex items-center space-x-4 text-[10px] text-slate-400 font-semibold tracking-wider uppercase">
                        <span><i class="fa-solid fa-location-dot text-gold-500/80 mr-1"></i> ${item.location}</span>
                        <span><i class="fa-solid fa-expand text-gold-500/80 mr-1"></i> ${item.area} m²</span>
                    </div>
                    <h3 class="font-serif text-base text-navy-900 font-medium leading-snug group-hover:text-gold-600 transition-colors duration-300 line-clamp-1">${item.title}</h3>
                    <p class="text-[11px] text-slate-400 font-light leading-relaxed line-clamp-2">${item.desc}</p>
                </div>
                <div class="pt-3 border-t border-slate-50 flex items-center justify-between">
                    <span class="text-xs font-bold tracking-wide text-navy-900">${displayPrice}</span>

                    <div class="flex items-center space-x-3">
                        <button type="button" onclick="openInterestModal('${item.title.replace(/'/g, "\\'")}')" class="text-[10px] font-bold tracking-widest text-gold-600 uppercase hover:text-navy-900 transition-colors">
                            Intéressé ?
                        </button>

                        <a href="${baseUrlDetails}?id=${item.id}" class="text-[10px] font-bold tracking-widest text-navy-900 uppercase hover:text-gold-500 transition-colors inline-flex items-center space-x-1 group">
                            <span>Détails</span>
                            <i class="fa-solid fa-arrow-right text-[8px] transform group-hover:translate-x-0.5 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>`;
}

// FONCTION POUR OUVRIR LE MODAL DE CONTACT EXCLUSIF
function openInterestModal(propertyTitle) {
    Swal.fire({
        title: `<span class="font-serif italic text-navy-900 text-xl block pt-2">Manifester votre intérêt</span>`,
        html: `
            <p class="text-xs text-slate-400 mb-4 font-light">Votre demande confidentielle concerne : <br><strong class="text-navy-900">${propertyTitle}</strong></p>
            <div class="space-y-3 text-left">
                <input id="swal-name" type="text" placeholder="Votre nom complet" class="w-full bg-slate-50 border border-slate-100 rounded-xl px-4 py-3 text-xs focus:outline-none focus:ring-1 focus:ring-gold-500 transition">
                <input id="swal-email" type="email" placeholder="Adresse électronique" class="w-full bg-slate-50 border border-slate-100 rounded-xl px-4 py-3 text-xs focus:outline-none focus:ring-1 focus:ring-gold-500 transition">
                <input id="swal-phone" type="tel" placeholder="Numéro de téléphone (Optionnel)" class="w-full bg-slate-50 border border-slate-100 rounded-xl px-4 py-3 text-xs focus:outline-none focus:ring-1 focus:ring-gold-500 transition">
                <textarea id="swal-message" placeholder="Décrivez votre projet ou vos critères spécifiques..." rows="3" class="w-full bg-slate-50 border border-slate-100 rounded-xl px-4 py-3 text-xs focus:outline-none focus:ring-1 focus:ring-gold-500 transition"></textarea>
            </div>
        `,
        showCancelButton: true,
        confirmButtonText: "Soumettre mon projet",
        cancelButtonText: "Fermer",
        confirmButtonColor: "#012C4E",
        cancelButtonColor: "#64748B",
        customClass: {
            popup: 'rounded-[24px]',
            confirmButton: 'rounded-xl text-xs uppercase tracking-wider font-bold py-3 px-4',
            cancelButton: 'rounded-xl text-xs uppercase tracking-wider font-bold py-3 px-4'
        },
        preConfirm: () => {
            const name = document.getElementById('swal-name').value;
            const email = document.getElementById('swal-email').value;

            if (!name || !email) {
                Swal.showValidationMessage('Le nom et l\'adresse électronique sont requis.');
                return false;
            }
            return {
                name: name,
                email: email,
                phone: document.getElementById('swal-phone').value,
                message: document.getElementById('swal-message').value,
                property: propertyTitle
            };
        }
    }).then((result) => {
        if (result.isConfirmed) {
            // Les données saisies sont disponibles ici dans result.value
            console.log("Formulaire soumis :", result.value);

            // Notification Premium de succès
            Swal.fire({
                icon: "success",
                title: "Demande de gérance enregistrée",
                text: "Un conseiller dédié à l'immobilier d'exception prendra contact avec vous sous 24h.",
                confirmButtonColor: "#012C4E",
                customClass: { popup: 'rounded-[24px]' }
            });
        }
    });
}

function applyFilters() {
    const gridContainer = document.getElementById("grid-catalogue");
    gridContainer.classList.add("loading"); // Amorce transition floue

    setTimeout(() => {
        const status = document.getElementById("filter-status").value;
        const type = document.getElementById("filter-type").value;
        const city = document.getElementById("filter-city").value;
        const rooms = document.getElementById("filter-rooms").value;

        const filtered = PROPERTIES.filter((item) => {
            if (status && item.status !== status) return false;
            if (type && item.type !== type) return false;
            if (city && item.location !== city) return false;
            if (rooms && item.rooms < parseInt(rooms)) return false;
            return true;
        });

        if (filtered.length === 0) {
            gridContainer.innerHTML = `<div class="col-span-full py-20 text-center text-slate-400 font-light text-sm tracking-wide">Aucune propriété ne correspond à vos critères de sélection.</div>`;
        } else {
            gridContainer.innerHTML = filtered.map((item) => createPropertyCard(item)).join("");
        }
        gridContainer.classList.remove("loading");
    }, 250);
}

function resetFilters() {
    document.getElementById("filter-type").value = "";
    document.getElementById("filter-city").value = "";
    document.getElementById("filter-rooms").value = "";

    // Reset spécifique du tab d'opération vers "Tous"
    const firstTab = document.getElementById("tab-bg").parentNode.querySelector('button');
    setOperationFilter('', firstTab);
}

// function showDetail(id) {
//     const item = PROPERTIES.find((b) => b.id === id);
//     if (!item) return;

//     history.pushState({ id: id }, item.title, `?id=${id}`);

//     const formattedPrice = item.status === "Location" ? `${item.price.toLocaleString("fr-FR")} € / mois` : `${item.price.toLocaleString("fr-FR")} €`;
//     const similaires = PROPERTIES.filter((b) => b.id !== item.id).slice(0, 3);
//     let similairesHtml = similaires.map((sim) => `
//                 <div onclick="showDetail(${sim.id})" class="bg-white rounded-2xl overflow-hidden shadow-[0_4px_20px_rgba(0,0,0,0.01)] hover:shadow-[0_10px_30px_rgba(0,0,0,0.04)] transition cursor-pointer flex items-center space-x-4 p-3 border border-slate-50">
//                     <img src="${sim.image}" class="w-16 h-16 object-cover rounded-xl flex-shrink-0">
//                     <div class="min-w-0">
//                         <h4 class="font-medium text-navy-900 text-xs truncate">${sim.title}</h4>
//                         <p class="text-gold-600 font-bold text-xs mt-0.5">${sim.status === "Location" ? `${sim.price.toLocaleString("fr-FR")} €/m` : `${sim.price.toLocaleString("fr-FR")} €`}</p>
//                     </div>
//                 </div>`).join("");

//     document.getElementById("container-detail-bien").innerHTML = `
//                 <div class="max-w-7xl mx-auto px-6 lg:px-8 py-4">
//                     <button onclick="hideDetail()" class="mb-8 text-[11px] font-bold text-slate-400 hover:text-navy-900 tracking-widest transition flex items-center space-x-2">
//                         <i class="fa-solid fa-arrow-left text-[9px]"></i> <span>RETOUR À COLLECTION</span>
//                     </button>

//                     <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-10 pb-6 border-b border-slate-100">
//                         <div class="space-y-2">
//                             <span class="inline-block text-[10px] font-bold tracking-widest uppercase text-gold-600">Collection Privée &bull; ${item.status === "Vente" ? "Achat" : "Location"}</span>
//                             <h1 class="font-serif text-3xl sm:text-5xl font-medium text-navy-900 tracking-wide">${item.title}</h1>
//                             <p class="text-slate-400 text-sm font-light"><i class="fa-solid fa-location-dot text-gold-500/80 mr-1.5"></i> ${item.location}, France</p>
//                         </div>
//                         <div class="text-left md:text-right">
//                             <span class="block font-sans text-2xl sm:text-4xl font-light tracking-tight text-navy-900">${formattedPrice}</span>
//                         </div>
//                     </div>

//                     <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
//                         <div class="lg:col-span-2 space-y-10">
//                             <div class="rounded-3xl overflow-hidden shadow-lg aspect-[16/9]"><img src="${item.image}" class="w-full h-full object-cover"></div>

//                             <div class="space-y-4">
//                                 <h3 class="font-serif text-2xl text-navy-900 italic">Description</h3>
//                                 <p class="text-slate-500 font-light text-sm leading-relaxed">${item.desc}</p>
//                             </div>

//                             <div class="space-y-4">
//                                 <h3 class="font-serif text-2xl text-navy-900 italic">Prestations & Caractéristiques</h3>
//                                 <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
//                                     ${item.amenities.map(am => `
//                                         <div class="flex items-center space-x-3 text-xs font-medium text-slate-700 bg-white p-3.5 rounded-xl shadow-[0_4px_15px_rgba(0,0,0,0.01)] border border-slate-50">
//                                             <i class="fa-solid fa-check text-gold-500 text-xs"></i>
//                                             <span>${am}</span>
//                                         </div>`).join("")}
//                                 </div>
//                             </div>
//                         </div>

//                         <div class="space-y-8">
//                             <div class="bg-white p-8 rounded-3xl shadow-[0_10px_40px_rgba(1,44,78,0.04)] border border-slate-50 space-y-6">
//                                 <div class="space-y-1">
//                                     <h4 class="font-serif text-xl font-medium text-navy-900">Demande de Conciergerie</h4>
//                                     <p class="text-xs text-slate-400 font-light">Planifiez une visite privée ou obtenez le dossier complet.</p>
//                                 </div>
//                                 <form onsubmit="handleVisitForm(event)" class="space-y-4">
//                                     <input type="text" placeholder="Votre nom complet" required class="w-full bg-slate-50/60 rounded-xl px-4 py-3.5 text-xs focus:outline-none focus:bg-white focus:ring-1 focus:ring-gold-500 transition">
//                                     <input type="email" placeholder="Adresse e-mail" required class="w-full bg-slate-50/60 rounded-xl px-4 py-3.5 text-xs focus:outline-none focus:bg-white focus:ring-1 focus:ring-gold-500 transition">
//                                     <button type="submit" class="w-full bg-navy-900 text-white font-bold text-[11px] uppercase tracking-widest py-4 rounded-xl hover:bg-gold-500 transition-all duration-300">Solliciter un rendez-vous</button>
//                                 </form>
//                             </div>
//                             <div class="space-y-4">
//                                 <h3 class="font-serif text-lg text-navy-900 font-medium">Biens similaires</h3>
//                                 <div class="space-y-3">${simulairesHtml}</div>
//                             </div>
//                         </div>
//                     </div>
//                 </div>`;

//     document.getElementById("section-catalogue").classList.add("hidden");
//     document.getElementById("section-detail").classList.remove("hidden");
//     window.scrollTo({ top: 0, behavior: "smooth" });
// }

function hideDetail() {
    history.pushState(null, "", window.location.pathname);
    document.getElementById("section-detail").classList.add("hidden");
    document.getElementById("section-catalogue").classList.remove("hidden");
}

function handleVisitForm(event) {
    event.preventDefault();
    Swal.fire({ icon: "success", title: "Demande reçue", text: "Votre conseiller Domos se rapproche de vous sous 24h.", confirmButtonColor: "#012C4E" });
    event.target.reset();
}

function SwAlertEstimer() {
    Swal.fire({ title: "Service Estimation", text: "Prenez contact avec l'un de nos directeurs d'agence pour une étude confidentielle.", icon: "info", confirmButtonColor: "#012C4E" });
}

window.addEventListener("DOMContentLoaded", () => {
    const params = new URLSearchParams(window.location.search);
    const locParam = params.get("loc");
    const typeParam = params.get("type");
    const idParam = params.get("id");

    if (idParam) {
        showDetail(parseInt(idParam));
    } else {
        if (locParam) document.getElementById("filter-city").value = locParam;
        if (typeParam) document.getElementById("filter-type").value = typeParam;
        applyFilters();
    }
});

window.addEventListener('popstate', (event) => {
    if (event.state && event.state.id) {
        showDetail(event.state.id);
    } else {
        document.getElementById("section-detail").classList.add("hidden");
        document.getElementById("section-catalogue").classList.remove("hidden");
        applyFilters();
    }
});
