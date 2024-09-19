<?php

namespace YFDev\System\App\LogViewer;

use Opcodes\LogViewer\Logs\Log;

class MeilisearchLog extends Log
{
    public static string $name = 'Meilisearch';

    public static string $regex = '/^\[(?<datetime>.*?)\] (?<level>\w+): (?<message>.*)/';

    public function fillMatches(array $matches = []): void
    {
        parent::fillMatches($matches);
        $this->context = [
            'level' => $matches['level'],
        ];
    }
}
