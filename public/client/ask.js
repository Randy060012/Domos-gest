// Effet de réduction du header au défilement
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

// Alerte de soumission personnalisée haut de gamme
function handleDemandeSpecifique(event) {
    event.preventDefault();
    Swal.fire({
        icon: "success",
        title: "Mandat de recherche enregistré",
        text: "Notre cellule d'acquisition privée va analyser vos critères sous 24 heures.",
        confirmButtonColor: "#012C4E",
        customClass: {
            popup: 'rounded-[24px]',
            confirmButton: 'rounded-xl text-xs uppercase tracking-wider font-bold py-3 px-4'
        }
    }).then(() => {
        event.target.reset();
        window.location.href = "index.html";
    });
}

// Alerte d'estimation
function SwAlertEstimer() {
    Swal.fire({
        title: "Estimation Stratégique",
        text: "Confiez-nous l'analyse de valeur de votre bien en toute confidentialité.",
        icon: "info",
        confirmButtonText: "Prendre contact",
        confirmButtonColor: "#012C4E",
        customClass: {
            popup: 'rounded-[24px]',
            confirmButton: 'rounded-xl text-xs uppercase tracking-wider font-bold py-3 px-4'
        }
    });
}
