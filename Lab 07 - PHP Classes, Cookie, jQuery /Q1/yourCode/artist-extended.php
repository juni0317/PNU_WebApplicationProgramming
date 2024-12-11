<?php

class Artist {
    private $firstName;
    private $lastName;
    private $birthPlace;
    private $birthDate;
    private $deathDate;
    private static $artistCount = 0;

    public function __construct($firstName, $lastName, $birthPlace, $birthDate, $deathDate = null) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthPlace = $birthPlace;
        $this->birthDate = $birthDate;
        $this->deathDate = $deathDate;
        self::$artistCount++;
    }

    public function outputAsTable() {
        $deathInfo = $this->deathDate ? $this->deathDate : "N/A";
        return "<table border='0'>
                    <thead><tr><th></th><th>{$this->firstName} {$this->lastName}</th></tr>
                    <tbody><tr><td>Birth:</td><td>{$this->birthDate} ({$this->birthPlace})</td></tr>
                    <tr><td>Death:</td><td>{$deathInfo}</td></tr></tbody>
                </table>";
    }

    public static function getArtistCount() {
        return self::$artistCount;
    }
}

class PaintingArtist extends Artist {
    private $paintingWorkTitle;

    public function __construct($firstName, $lastName, $birthPlace, $birthDate, $deathDate, $paintingWorkTitle) {
        parent::__construct($firstName, $lastName, $birthPlace, $birthDate, $deathDate);
        $this->paintingWorkTitle = $paintingWorkTitle;
    }

    public function outputAsTable() {
        $table = parent::outputAsTable();
        return $table . "<table border='0'>
                    <tr><td>Painting Work:</td><td>{$this->paintingWorkTitle}</td></tr>
                </table>";
    }
}

class SculptureArtist extends Artist {
    private $sculptureWorkTitle;

    public function __construct($firstName, $lastName, $birthPlace, $birthDate, $deathDate, $sculptureWorkTitle) {
        parent::__construct($firstName, $lastName, $birthPlace, $birthDate, $deathDate);
        $this->sculptureWorkTitle = $sculptureWorkTitle;
    }

    public function outputAsTable() {
        $table = parent::outputAsTable();
        return $table . "<table border='0'>
                    <tr><td>Sculpture Work:</td><td>{$this->sculptureWorkTitle}</td></tr>
                </table>";
    }
}

?>