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

function handleDemandeSpecifique(event) {
    event.preventDefault();
    const form = event.target;
    const data = new FormData(form);

    fetch(form.action, {
        method: 'POST',
        body: data,
        headers: { 'X-Requested-With': 'XMLHttpRequest' }
    })
    .then(res => res.json())
    .then(result => {
        if (result.success) {
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
                form.reset();
            });
        } else {
            Swal.fire({
                icon: "error",
                title: "Erreur",
                text: result.message || "Une erreur est survenue. Veuillez réessayer.",
                confirmButtonColor: "#012C4E",
                customClass: {
                    popup: 'rounded-[24px]',
                    confirmButton: 'rounded-xl text-xs uppercase tracking-wider font-bold py-3 px-4'
                }
            });
        }
    })
    .catch(() => {
        Swal.fire({
            icon: "error",
            title: "Erreur réseau",
            text: "Impossible de soumettre votre demande. Vérifiez votre connexion.",
            confirmButtonColor: "#012C4E",
            customClass: {
                popup: 'rounded-[24px]',
                confirmButton: 'rounded-xl text-xs uppercase tracking-wider font-bold py-3 px-4'
            }
        });
    });
}

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
