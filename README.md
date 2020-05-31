# codeigniter-qrcode
Generate QR Code - Codeigniter Library

## Usage
```php
$this->load->library('qrcode', ['text' => 'Codeigniter QR Code generator']);
header('Content-Type: '.$this->qrcode->getContentType());
echo $this->qrcode->writeString();
```
or
```php
$this->load->library('qrcode');
$this->qrcode->setText('Codeigniter QR Code generator');

header('Content-Type: '.$this->qrcode->getContentType());
echo $this->qrcode->writeString();
```