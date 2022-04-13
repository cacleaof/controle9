<?php

namespace App\Http\Services;

use Google\Client;
use Google\Service\Sheets;
use Google\Service\Sheets\ValueRange;

class GoogleSheetsServices
{
   

    // public $client, $service, $documentId, $range;

    public function __construct()
    {
        $this->client = $this->getClient();
        $this->service = new Sheets($this->client);
        $this->documentId = '1UQyujUcSEK7IWD9wAgDEPLhiFBRd19v7cGhwhG3edUs';
        $this->range = 'A:Z';
    }
    function getClient()
    {
        $client = new Client();
        $client->setApplicationName('Google Sheets Demo');
        $client->setRedirectUri('http://localhost:8989/googlesheet');
        $client->setScopes(Sheets::SPREADSHEETS);
        $client->setAuthConfig('credentials.json');
        $client->setAccessType('offline');
        
        return $client;
    }
    public function readSheet()
    {
        $doc = $this->service->spreadsheets_values->get('$this->documentId, $this->range');

        return $doc;
    }
    // public function writeSheet($values)
    // {
    //     // $values = [
    //     //     [
    //     //         // Cell values ...
    //     //     ],
    //     //     // Additional rows ...
    //     // ];
    //     $body = new ValueRange([
    //         'values' => $values
    //     ]);
    //     $params = [
    //         'valueInputOption' => 'RAW'
    //     ];
    //     $result = $this->service->spreadsheets_values->update($this->documentId, $this->range,
    //     $body, $params);
    // }
    




}