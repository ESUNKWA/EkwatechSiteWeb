<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class JasperController extends Controller
{
    public function generateReport(){

        try {
            // Chemin vers le fichier Jasper (rapport compilé)
            $jasperFile = public_path('reports/Blank_A4_1.jasper');

            // Chemin de sortie du rapport généré
            $outputDir = public_path('report_output');
            $outputFile = $outputDir . '/Blank_A4_1';

            // Création du répertoire de sortie s'il n'existe pas
            if (!file_exists($outputDir)) {
                mkdir($outputDir, 0755, true);
            }

            // Paramètre pour le rapport
            $paramClientID = 100035; // Exemple d'ID de client à passer

            // Vérifier que le fichier Jasper existe
            if (!file_exists($jasperFile)) {
                return "Le fichier Jasper n'existe pas : $jasperFile";
            }   

            $name = "DEKI";
            // Création de la commande JasperStarter pour exécuter le rapport
            $command = "jasperstarter process $jasperFile -o $outputFile -f pdf -P client_id=$paramClientID";
            
            // Exécution de la commande via PHP et capture de la sortie
            $output = shell_exec($command . ' 2>&1');
            
            // Vérifier si la commande s'est exécutée avec succès
            if ($output === null) {
                
                return "Échec de l'exécution du rapport. Vérifiez la commande JasperStarter.";
            } else {
                return response()->download("{$outputFile}.pdf");
                echo "Rapport généré avec succès : $outputFile.pdf";
            }

        } catch (\Throwable $e) {
            dd($e->getMessage());
        }

        
    }

    public function generateReportTable(){

        try {
            // Chemin vers le fichier Jasper (rapport compilé)
            $jasperFile = public_path('reports/Blank_A4.jasper');

            // Chemin de sortie du rapport généré
            $outputDir = public_path('report_output');
            $outputFile = $outputDir . '/table_report';

            // Création du répertoire de sortie s'il n'existe pas
            if (!file_exists($outputDir)) {
                mkdir($outputDir, 0755, true);
            }

            // Exemple de données statiques pour le rapport
            $data = [
                ["firstname" => "DEKI", "lastname" => "Momo", "position" => "Dev"],
                ["firstname" => "DEKI", "lastname" => "Momo", "position" => "Dev"],
                ["firstname" => "DEKI", "lastname" => "Momo", "position" => "Dev"],
                ["firstname" => "DEKI", "lastname" => "Momo", "position" => "Dev"]
            ];

            // Convertir les données en JSON et enregistrer dans un fichier temporaire
            $jsonData = json_encode($data);
            $dataFile = storage_path('data.json');
            file_put_contents($dataFile, $jsonData);

            // Vérification de l'existence du fichier Jasper
            if (!file_exists($jasperFile)) {
                return response()->json(['error' => "Le fichier Jasper n'existe pas : $jasperFile"]);
            }

            // Commande JasperStarter pour exécuter le rapport avec un DataSource JSON
            $command = "jasperstarter process \"$jasperFile\" -o \"$outputFile\" -f pdf " .
                    "--data-file \"$dataFile\" --json-query data";
                    // Exécution de la commande et capture de la sortie
                    $output = shell_exec($command . ' 2>&1');
                    dd($output);

            // Vérifier si le rapport a été généré avec succès
            if ($output === null) {
                return response()->json(['error' => "Erreur lors de la génération du rapport PDF."]);
            }

            // Téléchargement du fichier PDF généré
            $pdfPath = $outputFile . '.pdf';
            if (file_exists($pdfPath)) {
                return response()->download($pdfPath)->deleteFileAfterSend(true);
              
            } else {
                return response()->json(['error' => "Le fichier PDF n'a pas été généré."]);
            }

        } catch (\Throwable $e) {
            dd($e->getMessage());
        }

        
    }
}
