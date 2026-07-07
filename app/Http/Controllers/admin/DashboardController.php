<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Biens;
use App\Models\Demande;
use App\Models\DemandeSurMesure;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $totalBiens = Biens::count();
        $biensActifs = Biens::where('est_actif', true)->count();
        $biensVedette = Biens::where('en_vedette', true)->count();

        $totalDemandes = Demande::count();
        $demandesMois = Demande::whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->count();

        $totalSurMesure = DemandeSurMesure::count();
        $surMesureMois = DemandeSurMesure::whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->count();

        $repartitionTypes = Biens::select('type', DB::raw('count(*) as total'))
            ->groupBy('type')
            ->pluck('total', 'type')
            ->toArray();

        $prixStats = Biens::select(
            DB::raw('ROUND(AVG(prix)) as moyenne'),
            DB::raw('MIN(prix) as minimum'),
            DB::raw('MAX(prix) as maximum')
        )->first();

        $biensRecents = Biens::latest()->take(5)->get();

        $demandesRecentes = Demande::latest()->take(5)->get();

        $surMesureRecentes = DemandeSurMesure::latest()->take(5)->get();

        return view('admin.pages.dashboard.index', compact(
            'totalBiens', 'biensActifs', 'biensVedette',
            'totalDemandes', 'demandesMois',
            'totalSurMesure', 'surMesureMois',
            'repartitionTypes', 'prixStats',
            'biensRecents', 'demandesRecentes', 'surMesureRecentes'
        ));
    }
}
