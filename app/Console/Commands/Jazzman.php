<?php

namespace App\Console\Commands;

use Assely\Console\Command;

class Jazzman extends Command
{
    /**
     * Command singnature.
     *
     * @var string
     */
    public $signature = 'release:jazzman';

    /**
     * Command description.
     *
     * @var string
     */
    public $description = "Random WordPress version and show it's release date and musician patron.";

    /**
     * Release jazzman.
     *
     * ## EXAMPLE
     *
     *     wp release:jazzman
     */
    public function jazzman()
    {
        $jazzman = $this->getMusician();

        $this->line($this->colorize(sprintf(
            "WordPress '%s' [%s] was released in %s.",
            $jazzman[2], $jazzman[0], $jazzman[1]
        )));
    }

    /**
     * Get musician.
     *
     * @return array
     */
    protected function getMusician()
    {
        return $this->getReleases()->random();
    }

    /**
     * Get releases.
     *
     * @return array
     */
    protected function getReleases()
    {
        return collect([
            ['1.0', 'January 3, 2004', 'Miles Davis'],
            ['1.0.2', 'March 11, 2004', 'Art Blakey'],
            ['1.2', 'May 22, 2004', 'Charles Mingus'],
            ['1.5', 'February 17, 2005', 'Billy Strayhorn'],
            ['2.0', 'December 26, 2005', 'Duke Ellington'],
            ['2.0.5', 'October 27, 2006', 'Ronan Boren'],
            ['2.1', 'January 22, 2007', 'Ella Fitzgerald'],
            ['2.2', 'May 16, 2007', 'Stan Getz'],
            ['2.3', 'September 24, 2007', 'Dexter Gordon'],
            ['2.5', 'March 29, 2008', 'Michael Brecker'],
            ['2.6', 'July 15, 2008', 'McCoy Tyner'],
            ['2.7', 'December 10, 2008', 'John Coltrane'],
            ['2.8', 'June 10, 2009', 'Chet Baker'],
            ['2.9', 'December 18, 2009', 'Carmen McRae'],
            ['3.0', 'June 17, 2010', 'Thelonious Monk'],
            ['3.1', 'February 23, 2011', 'Django Reinhardt'],
            ['3.2', 'July 4, 2011', 'George Gershwin'],
            ['3.3', 'December 12, 2011', 'Sonny Stitt'],
            ['3.4', 'June 13, 2012', 'Grant Green'],
            ['3.5', 'December 11, 2012', 'Elvin Jones'],
            ['3.6', 'August 1, 2013', 'Oscar Peterson'],
            ['3.7', 'October 24, 2013', 'Count Basie'],
            ['3.8', 'December 12, 2013', 'Charlie Parker'],
            ['3.9', 'April 16, 2014', 'Jimmy Smith'],
            ['4.0', 'September 4, 2014', 'Benny Goodman'],
            ['4.1', 'December 17, 2014', 'Dinah Washington'],
            ['4.2', 'April 23, 2015', 'Bud Powell'],
            ['4.3', 'August 18, 2015', 'Billie Holiday'],
            ['4.4', 'December 8, 2015', 'Clifford Brown'],
            ['4.5', 'April 12, 2016', 'Coleman Hawkins'],
        ]);
    }
}
