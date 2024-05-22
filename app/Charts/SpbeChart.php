<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

use App\Charts\Spbe;

class SpbeChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\RadarChart
    {
        $spbe = Spbe::get();

        $data = [
            $spbe->where('Layanan Publik Berbasis Elektronik')->count(),
            $spbe->where('Layanan AdPem Berbasis elektronik')->count(),
            $spbe->where('Audit TIk')->count(),
            $spbe->where('Penerapan Managemen SPBE')->count(),
            $spbe->where('Penyelenggara SPBE')->count(),
            $spbe->where('Teknologi Informasi dan Komunikasi')->count(),
            $spbe->where('Perencanaan Strategis SPBE')->count(),
        ];

        $label = [
            'Layanan Publik Berbasis Elektronik',
            'Layanan Adpem Berbasis Elektronik',
            'Audit TIK',
            'Penerapan Managemen SPBE',
            'Penyelenggara SPBE',
            'Teknologi Informasi dan Komunikasi',
            'Perencanaan Strategis SPBE',
        ];

        return $this->chart->radarChart()
            ->setTitle('Hasil Evaluasi SPBE')
            ->setSubtitle(date('Y'))
            ->addData($data, [70, 93, 78, 97, 50, 90])
            ->setXAxis(['Pass', 'Dribble', 'Shot', 'Stamina', 'Long shots', 'Tactical'])
            ->setMarkers(['#303F9F'], $label);
    }
}
