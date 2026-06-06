  // Simulation de données riches incluant une galerie complète d'images
        const DATA_EXEMPLE_BIEN = {
            ref: "REF-2026-VILLA99",
            titre: "Villa Lumina — Édifice Contemporain Face Mer",
            prix: 4950000,
            honoraires: "Honoraires entièrement à la charge du vendeur",
            localisation: "Super Cannes, Alpes-Maritimes (06)",
            statut: "EXCLUSIVITÉ",
            // Banque d'images pour le carrousel
            galerie_images: [
                "https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=1200&q=80",
                "https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=600&q=80",
                "https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=600&q=80",
                "https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?auto=format&fit=crop&w=600&q=80",
                "https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=600&q=80"
            ],
            description: "Située sur le secteur exclusif des collines de Cannes, cette architecture contemporaine majeure développe des prestations d'ingénierie et de confort de très haut standing.\n\nSes volumes intérieurs profitent d'une transparence absolue vers le jardin méditerranéen grâce à des structures vitrées minimalistes entièrement motorisées.",
            type: "Villa d'Architecte",
            surface_habitable: 420,
            surface_terrain: 2500,
            pieces: 9,
            chambres: 5,
            salles_bain: 5,
            annee_construction: 2024,
            chauffage: "Pompe à chaleur réversible (sol & gainable)",
            etat: "Neuf / Excellent état",
            exposition: "Sud / Sud-Ouest",
            dpe_classe: "A",
            dpe_valeur: 42,
            ges_classe: "A",
            ges_valeur: 2,
            taxe_fonciere: "4 250 € / an",
            charges_copropriete: "Aucune (Mono-propriété)",
            nombre_lots: "Non soumis",
            procedure_en_cours: "Non",
            prestations: [
                "Piscine miroir chauffée (18m x 4m)",
                "Espace Spa avec Sauna et Hammam",
                "Domotique intégrée totale (Lumières, Stores)",
                "Système de sécurité actif avec caméras thermiques",
                "Garage souterrain sécurisé pour 4 véhicules",
                "Ascenseur intérieur en verre structurel",
                "Cave à vin climatisée de dégustation"
            ]
        };

        const PALETTE_DPE = {
            "A": "#012C4E",
            "B": "#1E4666",
            "C": "#3B607E",
            "D": "#587A96",
            "E": "#7594AF",
            "F": "#92ADC7",
            "G": "#AFC7DF"
        };
        const PROGRESSION_DIAG = {
            "A": 15,
            "B": 30,
            "C": 45,
            "D": 60,
            "E": 75,
            "F": 88,
            "G": 100
        };

        function toggleModal(modalId, show) {
            const modal = document.getElementById(modalId);
            const contentBox = modal.querySelector('.transform');
            if (show) {
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                setTimeout(() => {
                    modal.classList.remove('opacity-0');
                    contentBox.classList.remove('scale-95');
                    contentBox.classList.add('scale-100');
                }, 10);
            } else {
                modal.classList.add('opacity-0');
                contentBox.classList.remove('scale-100');
                contentBox.classList.add('scale-95');
                setTimeout(() => {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                }, 300);
            }
        }

        function changeImagePrincipale(urlSource, elementMiniature) {
            const imgPrincipale = document.getElementById("bien-image-principale");

            // Effet subtil de transition de l'opacité
            imgPrincipale.style.opacity = '0.3';

            setTimeout(() => {
                imgPrincipale.src = urlSource;
                imgPrincipale.style.opacity = '1';
            }, 150);

            // Gérer la bordure active sur la miniature sélectionnée
            document.querySelectorAll('.miniature-item').forEach(el => {
                el.classList.remove('border-gold-500', 'opacity-100');
                el.classList.add('border-transparent', 'opacity-60');
            });
            elementMiniature.classList.remove('border-transparent', 'opacity-60');
            elementMiniature.classList.add('border-gold-500', 'opacity-100');
        }

        function handleInteretForm(event) {
            event.preventDefault();
            Swal.fire({
                icon: "success",
                title: "Demande enregistrée",
                text: "Un conseiller dédié à l'immobilier d'exception prendra contact avec vous sous 24h.",
                confirmButtonColor: "#012C4E",
                customClass: {
                    popup: 'rounded-[24px]',
                    confirmButton: 'rounded-xl text-xs uppercase font-bold py-3 px-4'
                }
            });
            event.target.reset();
        }

        function handleModalForm(event) {
            event.preventDefault();
            Swal.fire({
                icon: "success",
                title: "Requête de visite enregistrée",
                text: "Notre secrétariat de direction reviendra vers vous pour valider le créneau demandé.",
                confirmButtonColor: "#012C4E",
                customClass: {
                    popup: 'rounded-[24px]',
                    confirmButton: 'rounded-xl text-xs uppercase font-bold py-3 px-4'
                }
            });
            toggleModal('modal-visite', false);
            event.target.reset();
        }

        function handleDownloadPDF() {
            Swal.fire({
                icon: "info",
                title: "Compilation du livret",
                text: "Le livret technique confidentiel est en cours de sécurisation et va démarrer son téléchargement.",
                confirmButtonColor: "#012C4E",
                customClass: {
                    popup: 'rounded-[24px]',
                    confirmButton: 'rounded-xl text-xs uppercase font-bold py-3 px-4'
                }
            });
        }

        function hydraterLeModele() {
            const data = DATA_EXEMPLE_BIEN;

            document.getElementById("bien-statut").innerText = data.statut;
            document.getElementById("bien-ref").innerText = `RÉFÉRENCE : ${data.ref}`;
            document.getElementById("bien-titre").innerText = data.titre;
            document.getElementById("bien-localisation").innerText = data.localisation;
            document.getElementById("bien-prix").innerText = data.prix.toLocaleString("fr-FR") + " €";
            document.getElementById("bien-honoraires").innerText = data.honoraires;

            // Image initiale par défaut
            if (data.galerie_images && data.galerie_images.length > 0) {
                document.getElementById("bien-image-principale").src = data.galerie_images[0];
            }

            document.getElementById("bien-description").innerText = data.description;

            document.getElementById("tech-type").innerText = data.type;
            document.getElementById("tech-surface").innerText = `${data.surface_habitable} m²`;
            document.getElementById("tech-terrain").innerText = data.surface_terrain > 0 ? `${data.surface_terrain} m²` : "Non applicable";
            document.getElementById("tech-pieces").innerText = data.pieces;
            document.getElementById("tech-chambres").innerText = data.chambres;
            document.getElementById("tech-sdb").innerText = data.salles_bain;
            document.getElementById("tech-annee").innerText = data.annee_construction;
            document.getElementById("tech-chauffage").innerText = data.chauffage;
            document.getElementById("tech-etat").innerText = data.etat;
            document.getElementById("tech-exposition").innerText = data.exposition;

            // DPE Éléments
            const dpeCouleur = PALETTE_DPE[data.dpe_classe] || "#012C4E";
            document.getElementById("val-dpe").innerText = `${data.dpe_valeur} kWh/m²/an`;
            document.getElementById("badge-dpe").innerText = data.dpe_classe;
            document.getElementById("badge-dpe").style.backgroundColor = dpeCouleur;
            document.getElementById("barre-dpe").style.width = `${PROGRESSION_DIAG[data.dpe_classe] || 50}%`;
            document.getElementById("barre-dpe").style.backgroundColor = dpeCouleur;

            // GES Éléments
            const gesCouleur = PALETTE_DPE[data.ges_classe] || "#012C4E";
            document.getElementById("val-ges").innerText = `${data.ges_valeur} kg CO₂/m²/an`;
            document.getElementById("badge-ges").innerText = data.ges_classe;
            document.getElementById("badge-ges").style.backgroundColor = gesCouleur;
            document.getElementById("barre-ges").style.width = `${PROGRESSION_DIAG[data.ges_classe] || 50}%`;
            document.getElementById("barre-ges").style.backgroundColor = gesCouleur;

            document.getElementById("fin-taxe").innerText = data.taxe_fonciere;
            document.getElementById("fin-charges").innerText = data.charges_copropriete;
            document.getElementById("fin-lots").innerText = data.nombre_lots;
            document.getElementById("fin-procedure").innerText = data.procedure_en_cours;

            // Hydratation dynamique de la Galerie de Miniatures
            const containerGalerie = document.getElementById("bien-galerie-miniatures");
            if (data.galerie_images && data.galerie_images.length > 0) {
                containerGalerie.innerHTML = data.galerie_images.map((imgUrl, index) => {
                    const estActif = index === 0 ? 'border-gold-500 opacity-100' : 'border-transparent opacity-60';
                    return `
                        <div onclick="changeImagePrincipale('${imgUrl}', this)"
                             class="miniature-item flex-shrink-0 w-24 sm:w-32 aspect-[16/10] rounded-2xl overflow-hidden cursor-pointer border-2 shadow-sm bg-slate-100 snap-start transition-all duration-300 hover:opacity-100 ${estActif}">
                            <img src="${imgUrl}" alt="Perspective ${index + 1}" class="w-full h-full object-cover">
                        </div>
                    `;
                }).join("");
            }

            // Hydratation des prestations
            const containerPrestations = document.getElementById("bien-prestations");
            containerPrestations.innerHTML = data.prestations.map(item => `
                <div class="flex items-start space-x-3.5 bg-white p-4 rounded-xl border border-slate-100 text-xs text-slate-600">
                    <i class="fa-solid fa-check text-gold-600 mt-0.5 text-[10px] w-4 h-4 flex items-center justify-center shrink-0"></i>
                    <span class="font-normal leading-relaxed">${item}</span>
                </div>
            `).join("");
        }

        window.addEventListener("DOMContentLoaded", hydraterLeModele);
