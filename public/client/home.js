const PROPERTIES = [{
    id: 1,
    title: "Villa Lumina — Édifice Contemporain",
    price: 4950000,
    location: "Cannes",
    type: "Villa",
    status: "Vente",
    area: 420,
    rooms: 5,
    image: "https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=800&q=80",
    desc: "Chef-d'œuvre architectural idéalement positionné sur les hauteurs. Domotique intégrée et piscine à débordement.",
    isRecent: true
},
{
    id: 2,
    title: "Penthouse Impérial — Vue Panoramique",
    price: 3200000,
    location: "Paris",
    type: "Appartement",
    status: "Vente",
    area: 195,
    rooms: 3,
    image: "https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&fit=crop&w=800&q=80",
    desc: "Dernier étage d'un immeuble de grand standing. Panoramas d'exception sans aucun vis-à-vis sur les monuments historiques.",
    isRecent: true
},
{
    id: 3,
    title: "Le Domaine de l'Olympe — Propriété Rare",
    price: 12500000,
    location: "Saint-Tropez",
    type: "Villa",
    status: "Vente",
    area: 680,
    rooms: 7,
    image: "https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=800&q=80",
    desc: "Niché au cœur d'un domaine clos d'un hectare hautement surveillé. Accès direct et exclusif à la mer.",
    isRecent: true
},
{
    id: 4,
    title: "Duplex Signature — Échappée Jardin Privé",
    price: 18500,
    location: "Paris",
    type: "Appartement",
    status: "Location",
    area: 240,
    rooms: 4,
    image: "https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?auto=format&fit=crop&w=800&q=80",
    desc: "Prestations intérieures luxueuses confiées à un grand nom du design d'espace. Jardin d'hiver sous verrière.",
    isRecent: true
},
{
    id: 5,
    title: "Villa Turquoise — Écrin Suspendu",
    price: 25000,
    location: "Cannes",
    type: "Villa",
    status: "Location",
    area: 310,
    rooms: 4,
    image: "https://images.unsplash.com/photo-1613490493576-7fde63acd811?auto=format&fit=crop&w=800&q=80",
    desc: "Vue plongeante grandiose sur la mer. Service de conciergerie privée disponible tout au long de votre séjour.",
    isRecent: false
}
];

// LOGIQUE SCRIPT SCROLL HEADER RÉTRACTABLE
window.addEventListener('scroll', () => {
    const header = document.getElementById('main-header');
    if (window.scrollY > 50) {
        header.classList.remove('h-24');
        header.classList.add('h-16', 'shadow-[0_10px_30px_rgba(0,0,0,0.02)]');
    } else {
        header.classList.remove('h-16', 'shadow-[0_10px_30px_rgba(0,0,0,0.02)]');
        header.classList.add('h-24');
    }
});

function toggleMobileMenu() {
    const menu = document.getElementById("mobile-menu");
    const icon = document.getElementById("menu-icon");
    menu.classList.toggle("hidden");
    icon.className = menu.classList.contains("hidden") ? "fa-solid fa-bars text-xl" : "fa-solid fa-xmark text-xl";
}

// function createPropertyCard(item) {
//     const displayPrice = item.status === "Location" ? `${item.price.toLocaleString("fr-FR")} € / mois` : `${item.price.toLocaleString("fr-FR")} €`;
//     return `
//                 <div class="group bg-white rounded-[20px] overflow-hidden shadow-[0_4px_25px_rgba(0,0,0,0.01)] hover:shadow-[0_30px_60px_rgba(1,44,78,0.06)] transition-all duration-500 flex flex-col h-full cursor-pointer" onclick="window.location.href='liste-biens.html?id=${item.id}'">
//                     <div class="relative overflow-hidden aspect-[16/11]">
//                         <img src="${item.image}" alt="${item.title}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
//                         <span class="absolute top-4 left-4 z-10 px-3 py-1 bg-white/90 backdrop-blur-md rounded-full text-[9px] font-bold tracking-widest uppercase text-navy-900 shadow-sm">${item.status === "Vente" ? "Achat" : "Louer"}</span>
//                     </div>
//                     <div class="p-6 flex flex-col flex-grow justify-between space-y-4">
//                         <div class="space-y-2">
//                             <div class="flex items-center space-x-4 text-[10px] text-slate-400 font-semibold tracking-wider uppercase">
//                                 <span><i class="fa-solid fa-location-dot text-gold-500/80 mr-1"></i> ${item.location}</span>
//                                 <span><i class="fa-solid fa-expand text-gold-500/80 mr-1"></i> ${item.area} m²</span>
//                             </div>
//                             <h3 class="font-serif text-base text-navy-900 font-medium leading-snug group-hover:text-gold-600 transition-colors duration-300 line-clamp-1">${item.title}</h3>
//                             <p class="text-[11px] text-slate-400 font-light leading-relaxed line-clamp-2">${item.desc}</p>
//                         </div>
//                         <div class="pt-3 border-t border-slate-50 flex items-center justify-between">
//                             <span class="text-xs font-bold tracking-wide text-navy-900">${displayPrice}</span>
//                             <div class="flex items-center space-x-3">
//                                <button type="button" onclick="event.stopPropagation(); openInterestModal('${item.title.replace(/'/g, "\\'")}')" class="text-[10px] font-bold tracking-widest text-gold-600 uppercase hover:text-navy-900 transition-colors">
//                                  Intéressé ?
//                              </button>

//                             <span class="text-[10px] font-bold tracking-widest text-navy-900 uppercase group-hover:text-gold-500 transition-colors flex items-center space-x-1">
//                             <span>Détails</span> <i class="fa-solid fa-arrow-right text-[8px] transform group-hover:translate-x-0.5 transition-transform"></i>
//                              </span>
//                             </div>

//                         </div>
//                     </div>
//                 </div>`;
// }

function createPropertyCard(item) {
    const displayPrice = item.status === "Location" ? `${item.price.toLocaleString("fr-FR")} € / mois` : `${item.price.toLocaleString("fr-FR")} €`;
    return `
        <div class="group bg-white rounded-[20px] overflow-hidden shadow-[0_4px_25px_rgba(0,0,0,0.01)] hover:shadow-[0_30px_60px_rgba(1,44,78,0.06)] transition-all duration-500 flex flex-col h-full cursor-pointer" onclick="window.location.href='liste-biens.html?id=${item.id}'">
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
                        <button type="button" onclick="event.stopPropagation(); openInterestModal('${item.title.replace(/'/g, "\\'")}')" class="text-[10px] font-bold tracking-widest text-gold-600 uppercase hover:text-navy-900 transition-colors">
                            Intéressé ?
                        </button>

                        <span class="text-[10px] font-bold tracking-widest text-navy-900 uppercase group-hover:text-gold-500 transition-colors flex items-center space-x-1">
                            <span>Détails</span> <i class="fa-solid fa-arrow-right text-[8px] transform group-hover:translate-x-0.5 transition-transform"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>`;
}

function initHomepageData() {
    document.getElementById("container-recents").innerHTML = PROPERTIES.filter((b) => b.isRecent).slice(0, 4).map((item) => createPropertyCard(item)).join("");
    document.getElementById("container-locations").innerHTML = PROPERTIES.filter((b) => b.status === "Location").map((item) => createPropertyCard(item)).join("");
    document.getElementById("container-ventes").innerHTML = PROPERTIES.filter((b) => b.status === "Vente").slice(0, 3).map((item) => createPropertyCard(item)).join("");
}

function executeSearch(event) {
    event.preventDefault();
    const loc = document.getElementById("search-loc").value;
    const type = document.getElementById("search-type").value;
    window.location.href = `liste-biens.html?loc=${encodeURIComponent(loc)}&type=${encodeURIComponent(type)}`;
}

function handleContactForm(event) {
    event.preventDefault();
    Swal.fire({
        icon: "success",
        title: "Demande de rendez-vous reçue",
        text: "Un chargé d'affaires prendra attache sous 24 heures.",
        confirmButtonColor: "#012C4E"
    });
    event.target.reset();
}

function handleNewsletter(event) {
    event.preventDefault();
    Swal.fire({
        icon: "success",
        title: "Accès Privé Approuvé",
        text: "Vous faites désormais partie de notre liste de diffusion restreinte.",
        confirmButtonColor: "#012C4E"
    });
    event.target.reset();
}

function SwAlertEstimer() {
    Swal.fire({
        title: "Estimation Stratégique",
        text: "Confiez-nous l'analyse de valeur de votre bien en toute confidentialité.",
        icon: "info",
        confirmButtonText: "Prendre contact",
        confirmButtonColor: "#012C4E"
    });
}

function openInterestModal(propertyTitle) {
    Swal.fire({
        title: `<span class="font-serif italic text-navy-900 text-xl block pt-2">Ce bien vous intéresse ?</span>`,
        html: `
            <p class="text-xs text-slate-400 mb-4 font-light">Votre demande concerne : <br><strong class="text-navy-900">${propertyTitle}</strong></p>
            <div class="space-y-3 text-left">
                <input id="swal-name" type="text" placeholder="Votre nom complet" class="w-full bg-slate-50 border border-slate-100 rounded-xl px-4 py-3 text-xs focus:outline-none focus:ring-1 focus:ring-gold-500 transition">
                <input id="swal-email" type="email" placeholder="Adresse électronique" class="w-full bg-slate-50 border border-slate-100 rounded-xl px-4 py-3 text-xs focus:outline-none focus:ring-1 focus:ring-gold-500 transition">
                <input id="swal-phone" type="tel" placeholder="Numéro de téléphone" class="w-full bg-slate-50 border border-slate-100 rounded-xl px-4 py-3 text-xs focus:outline-none focus:ring-1 focus:ring-gold-500 transition">
                <textarea id="swal-message" placeholder="Votre message ou questions éventuelles..." rows="3" class="w-full bg-slate-50 border border-slate-100 rounded-xl px-4 py-3 text-xs focus:outline-none focus:ring-1 focus:ring-gold-500 transition"></textarea>
            </div>
        `,
        showCancelButton: true,
        confirmButtonText: "Soumettre mon intérêt",
        cancelButtonText: "Annuler",
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
                Swal.showValidationMessage('Veuillez renseigner au moins votre nom et votre adresse email.');
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
            // Ici, result.value contient l'objet avec toutes les données du formulaire
            console.log("Données reçues :", result.value);

            // Notification de succès
            Swal.fire({
                icon: "success",
                title: "Demande enregistrée",
                text: "Notre cabinet de gérance privée va analyser votre intérêt pour ce bien d'exception.",
                confirmButtonColor: "#012C4E",
                customClass: { popup: 'rounded-[24px]' }
            });
        }
    });
}

window.addEventListener("DOMContentLoaded", initHomepageData);
