let PROPERTIES = [];

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
    const displayPrice = item.status === "Location" ? `${item.price.toLocaleString("fr-FR")} F CFA / mois` : `${item.price.toLocaleString("fr-FR")} F CFA`;
    const detailUrl = `${baseUrlDetails}?id=${item.id}`;
    return `
        <div class="group bg-white rounded-[20px] overflow-hidden shadow-[0_4px_25px_rgba(0,0,0,0.01)] hover:shadow-[0_30px_60px_rgba(1,44,78,0.06)] transition-all duration-500 flex flex-col h-full cursor-pointer" onclick="window.location.href='${detailUrl}'">
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

                        <a href="${detailUrl}" class="text-[10px] font-bold tracking-widest text-navy-900 uppercase hover:text-gold-500 transition-colors flex items-center space-x-1">
                            <span>Détails</span> <i class="fa-solid fa-arrow-right text-[8px] transform group-hover:translate-x-0.5 transition-transform"></i>
                        </a>
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
    const budget = document.getElementById("search-budget").value;
    const params = new URLSearchParams();
    if (loc) params.set("loc", loc);
    if (type) params.set("type", type);
    if (budget) params.set("budget", budget);
    window.location.href = `/catalogue${params.toString() ? '?' + params.toString() : ''}`;
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
            fetch(contactInteretUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || ''
                },
                body: JSON.stringify({
                    name: result.value.name,
                    email: result.value.email,
                    phone: result.value.phone,
                    message: result.value.message,
                    bien_titre: result.value.property
                })
            }).then(res => {
                if (!res.ok) throw new Error('Erreur réseau');
                Swal.fire({
                    icon: "success",
                    title: "Demande enregistrée",
                    text: "Notre cabinet de gérance privée va analyser votre intérêt pour ce bien d'exception.",
                    confirmButtonColor: "#012C4E",
                    customClass: { popup: 'rounded-[24px]' }
                });
            }).catch(() => {
                Swal.fire({
                    icon: "error",
                    title: "Erreur",
                    text: "Une erreur est survenue. Veuillez réessayer.",
                    confirmButtonColor: "#012C4E",
                });
            });
        }
    });
}

window.addEventListener("DOMContentLoaded", () => {
    const el = document.getElementById('home-biens-data');
    if (el) PROPERTIES = JSON.parse(el.textContent);
    initHomepageData();
});
