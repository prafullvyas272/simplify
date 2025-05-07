<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class PDFController extends Controller
{
    

    public function newVersionToGeneratePDF($base)
    {
        // Decode the Base64-encoded string
        $decodedString = base64_decode($base, true);

        if ($decodedString === false) {
            return response()->json(['error' => 'Invalid access code']);
        }

        // Split the decoded string by "="
        $parts = explode('=', $decodedString);

        if (count($parts) !== 3) {
            return response()->json(['error' => 'Invalid access token']);
        }

        try {
            // Extract values
            $childName = $parts[1]; // Assume the second part is the child's name
            $discType = $parts[2]; // Assume the third part is the disc type

            // Load the HTML content (from a Blade view or static HTML file)
            $htmlPath = public_path('pdfs/templates/teen/learn/d/revised-version.html');
            
            if (!file_exists($htmlPath)) {
                return response()->json(['error' => 'HTML template not found.']);
            }

            $html = file_get_contents($htmlPath);

            $image_path = public_path('templates-images/teen');
            

            // Replace placeholders dynamically
            $html = str_replace('{{child_name}}', $childName, $html);
            $html = str_replace('{{template_image_url}}',$image_path, $html);
            $html = str_replace('{{dominant_percentage}}',rand(35,80),$html);
            $html = str_replace('{{influential_percentage}}',rand(35,80),$html);
            $html = str_replace('{{supportive_percentage}}',rand(35,80),$html);
            $html = str_replace('{{cautious_percentage}}',rand(35,80),$html);
            return $html;
            // Save the modified HTML to a temporary file
            $tempHtmlPath = storage_path('app/public/temp-'.rand(000000,999999).'.html');
            file_put_contents($tempHtmlPath, $html);

            $output_filename = "learning-assessment-report-".date('Y-M-d-h-i-s');
            $outputPath = storage_path('app/public/reports/'.$output_filename.'.pdf');
            
           

            // Execute WeasyPrint command to generate PDF
            $command = "wkhtmltopdf --page-width 189mm --page-height 245.7mm --page-size A4 --margin-top 0 --margin-right 0 --margin-bottom 0 --margin-left 0 --no-header-line --no-footer-line --enable-local-file-access ".$tempHtmlPath." ".$outputPath." ";
            exec($command, $output, $resultCode);

            if ($resultCode !== 0) {
                return response()->json(['error' => 'PDF generation failed.', 'details' => $output]);
            }

            // Return the PDF for download
            return response()->download($outputPath)->deleteFileAfterSend(true);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }
}
