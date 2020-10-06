<?php

namespace Iseerg\TopWords;

class TopWords
{
    const REGEX = '/(?i)(\b\w+\b)(?=[\s\S]*\b\1\b)/';

    /**
     * @var string
     */
    private string $regex;

    /**
     * @var string
     */
    private string $resultsLimit;

    private $result;

    public function __construct()
    {
        $this->result = null;
        $this->regex = self::REGEX;
        $this->resultsLimit = config('topwords.results_limit');
    }

    /**
     * @param string $regex
     * @return $this
     */
    public function setRegex(string $regex) {
        $this->regex = $regex;

        return $this;
    }

    /**
     * @param string $text
     * @return \Illuminate\Support\Collection
     */
    public function findDuplicates (string $text) {
        preg_match_all($this->regex, $text, $groups);

        $grouped = collect($groups[0])->groupBy(function ($value) {
            return strtolower($value);
        });

        $this->result = $grouped->map(function ($group, $key) {
            return $group->count() + 1;
        })->sortDesc()->slice(0, $this->resultsLimit);

        return $this;
    }

    /**
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }
}
