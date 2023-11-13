<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
    public function generateQRCode()
    {
        $contactInfo = "BEGIN:VCARD\nVERSION:3.0\nFN:John Doe\nTEL:1234567890\nEMAIL:john@example.com\nEND:VCARD";
        $qrCode = QrCode::color(0, 0, 0, 55, 255, 255)->generate($contactInfo);

        return response($qrCode)
            ->header('Content-Type', 'image/jpeg')
            ->header('Content-Disposition', 'inline; filename=qrcode.jpeg');
    }
}
