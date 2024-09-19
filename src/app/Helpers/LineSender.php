<?php

namespace YFDev\System\App\Helpers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Log;

class LineSender
{
    protected $client;
    protected $url;

    public function __construct()
    {
        $this->client = new Client();
        $this->url = 'https://notify-api.line.me/api/notify';
    }

    /**
    * sendMsg
    *
    * @param string $phone
    * @param string $message
    * @return bool|string
    */
    public function sendMsg(string $message): bool|string
    {
        return $this->send($message);
    }

    /**
     * send
     *
     * @param string $phone
     * @param string $message
     * @return bool|string
     */
    protected function send(string $message): bool|string
    {
        $envMessage = '';
        switch (config('app.env')) {
            case 'local':
                $envMessage = '開發站';
                break;
            case 'test':
                $envMessage = '測試站';
                break;
            default:
                $envMessage = '';
        }

        $data = [
            'message' => $envMessage . "\n" . $message
        ];

        try {
            $response = $this->client->post($this->url, [
                'form_params' => $data,
                'headers'     => [
                    'Authorization' => 'Bearer ' . env('LINE_NOTIFY_TOKEN')
                ],
            ]);

            if ($response->getStatusCode() === 200) {
                return TRUE;
            }

            return $response->getBody()->getContents();
        } catch (\Exception $e) {
            Log::error('Line Notify Error.', [$e->getMessage()]);
            return $e->getMessage();
        } catch (GuzzleException $e) {
            Log::error('Guzzle Error.', [$e->getMessage()]);
            return 'Guzzle Error: ' . $e->getMessage();
        }
    }
}
