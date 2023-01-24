<?php

/**
 * QRCodeGenerator
 *
 * @author [ramazancetinkaya]
 * @date [24.01.2023]
 */

require_once 'phpqrcode/qrlib.php';

class QRCodeGenerator {
    // The path where the QR code image will be saved
    private $filepath;

    // The QR code image size
    private $size;

    // The QR code image file format
    private $filetype;

    // The QR code error correction level
    private $level;

    // The data to be encoded in the QR code
    private $data;

    // Constructor for the class
    public function __construct($data, $filepath, $size = 100, $filetype = 'png', $level = QR_ECLEVEL_L) {
        $this->data = $data;
        $this->filepath = $filepath;
        $this->size = $size;
        $this->filetype = $filetype;
        $this->level = $level;
    }

    // Generates the QR code
    public function generate() {
        QRcode::png($this->data, $this->filepath, $this->level, $this->size, 2);
    }

    // Displays the QR code image
    public function display() {
        echo '<img src="'.$this->filepath.'.'.$this->filetype.'" />';
    }
}
