<?php

namespace MauticPlugin\EmailsQCounterBundle\Service;

class EmailsQueueCounterService
{
    private string $directory;

    private array $pattern;

    public function __construct($directory, $pattern)
    {
        $this->directory = $directory;
        $this->pattern = $pattern;
    }

    public function countEmailsLeft(): int
    {
        return count($this->recursiveFileSearch($this->directory, $this->pattern));
    }

    /**
     * @param string $directory
     * @param array $pattern_array
     * @return array
     */
    private function recursiveFileSearch(string $directory, array $pattern_array): array
    {
        $result = [];

        $iterator = new \RecursiveDirectoryIterator($directory);
        foreach(new \RecursiveIteratorIterator($iterator) as $file){
            $fileNameArr = explode('.', $file);
            if (in_array(strtolower(array_pop($fileNameArr)), $pattern_array)) {
                $result[] = $file;
            }
        }

        return $result;
    }
}
