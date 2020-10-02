<?php

namespace Iseerg\TopWords\Tests\Unit;

use Iseerg\TopWords\Facades\TopWords;
use Iseerg\TopWords\Tests\TestCase;
use Iseerg\TopWords\TopWordsServiceProvider;

class DuplicatesFinderTest extends TestCase
{
    /**
     * Test duplicates finder.
     */
    public function testDuplicatesFinder()
    {
        $expected = collect(['two' => 2]);

        $this->assertEquals(
            TopWords::findDuplicates('Qwerty one, tWo lorem ipsum two.')->getResult(),
            $expected
        );
    }
}
