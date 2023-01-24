# QRCodeGenerator
Here is an example using the PHP QR Code library.

## Example Usage
```php
$qr = new QRCodeGenerator('https://www.example.com', 'qrcode', 200, 'png', QR_ECLEVEL_H);
$qr->generate();
$qr->display();
```

This class takes in the data to be encoded, the file path where the QR code image will be saved, the size of the image, the file format and the error correction level as constructor parameters. The class has two methods, generate() which generates the QR code image, and display() which displays the QR code image on the webpage.

You can also add methods to add logo or other information to QR code.
You can also use other libraries like endroid/qr-code,SimpleQrCode, BaconQrCode for generating QR code and create a class using that library.
