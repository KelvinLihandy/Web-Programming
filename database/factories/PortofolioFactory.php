<?php

namespace Database\Factories;

use App\Models\Portofolio;

class PortofolioFactory
{
    private $title = [
        "Website E-Commerce",
        "Mobile App Development",
        "AI Sentiment Classification",
        "AI Agent"
    ];

    private $description = [
        "Sistem E-Commerce dengan fitur pembayaran yang terintegrasi payment gateway",
        "Aplikasi mobile native dengan performa optimal",
        "Aplikasi analisa sentimen sosial media",
        "Pipeline Agentic AI menggunakan hoster LLM",
    ];

    public function create()
    {
        $data = [];
        for ($i = 0; $i < count($this->title); $i++) {
            $data[] = new Portofolio(
                $i + 1,
                $this->title[$i],
                $this->description[$i]
            );
        }

        return $data;
    }
}
