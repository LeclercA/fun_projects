<?php
class Cell {

    public $x;
    public $y;
    public $visited = FALSE;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    protected function findNeighbours($cell, $rows, $columns) {
        $x = $cell->x;
        $y = $cell->y;

        if ($x !== $rows - 1) {
            $cell->neighbours .= "E";
        }
        if ($y !== 0) {
            $cell->neighbours .= "N";
        }
        if ($y !== $columns - 1) {
            $cell->neighbours .= "S";
        }
        if ($x !== 0) {
            $cell->neighbours .= "W";
        }
    }

}

class Grid extends Cell {

    public $rows = 10;
    public $columns = 10;
    public $cells = [];
    public $lastVisited = [];
    public $actualMaze = [];
    public $road = [];

    const DIRECTION = [
        "E" => ["x" => 1, "y" => 0],
        "N" => ["x" => 0, "y" => -1],
        "S" => ["x" => 0, "y" => 1],
        "W" => ["x" => -1, "y" => 0]
    ];
    const REVERSE = ["E" => "W", "W" => "E", "S" => "N", "N" => "S"];

    public function __construct($rows, $columns) {
        $this->rows = $rows;
        $this->columns = $columns;
        $this->createGrid();
    }

    private function createGrid() {
        for ($i = 0; $i < $this->rows; $i++) {
            for ($j = 0; $j < $this->columns; $j++) {
                $this->cells[$i][$j] = new Cell($i, $j);
            }
        }
    }

    public function createMaze($startX = 0, $startY = 0) {
        $numberOfCellsNotVisited = $this->rows * $this->columns;
        $currentCell = $this->cells[$startX][$startY];
        $this->actualMaze[] = $currentCell;
        $this->lastVisited[] = $currentCell;
        while ($numberOfCellsNotVisited - 1) {
            $currentCell->visited = TRUE;
            $availableNeighbours = NULL;
            $x = $currentCell->x;
            $y = $currentCell->y;
            if ($x < $this->rows - 1 && !$this->cells[$x + 1][$y]->visited) {
                $availableNeighbours .= "E";
            }
            if ($y > 0 && !$this->cells[$x][$y - 1]->visited) {
                $availableNeighbours .= "N";
            }
            if ($y < $this->columns - 1 && !$this->cells[$x][$y + 1]->visited) {
                $availableNeighbours .= "S";
            }
            if ($x > 0 && !$this->cells[$x - 1][$y]->visited) {
                $availableNeighbours .= "W";
            }
            if ($availableNeighbours) {
                $randomChar = strlen($availableNeighbours) === 1 ? $availableNeighbours : $availableNeighbours[rand(0, strlen($availableNeighbours) - 1)];
                $currentCell = $this->cells[$x + self::DIRECTION[$randomChar]["x"]][$y + self::DIRECTION[$randomChar]["y"]];
                $this->actualMaze[] = $currentCell;
                $this->lastVisited[] = $currentCell;
                $numberOfCellsNotVisited--;
            } else {
                $currentCell = array_pop($this->lastVisited);
            }
            $this->road[] = $currentCell;
        }
    }

}

$grid = new Grid(10, 10);
$grid->createMaze();
