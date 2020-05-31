<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * CodeIgniter Qrcode Library
 *
 * Generate QR Code in CodeIgniter
 *
 * @packge        Native PHP
 * @subpackage        Libraries
 * @category        Libraries
 * @author        Irnovi
 * @link        https://github.com/endroid/qr-code
 */
use Endroid\QrCode\QrCode as BaseQrCode;

class Qrcode extends BaseQrCode{

    protected $text;
    
    public function __construct($config)
    {
        $this->text = isset($config['text']) ? $config['text']:'';
        parent::__construct($this->text);
    }

}