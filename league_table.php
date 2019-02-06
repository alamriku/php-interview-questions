<?php

class LeagueTable
{
    public function __construct(array $players)
    {
        $this->standings = [];
        foreach($players as $index => $p) {
            $this->standings[$p] = [
                'index'        => $index,
                'games_played' => 0,
                'score'        => 0
            ];
        }
    }

    public function recordResult(string $player, int $score) : void
    {
        $this->standings[$player]['games_played']++;
        $this->standings[$player]['score'] += $score;
    }

   /* public function playerRank($rank) 
    {
        $ranks = $this->standings;
        uasort($ranks, function ($a, $b) {
            // sort by score this will provide descending order
            if ($a['score'] != $b['score']) 
                return ($a['score'] > $b['score']) ? -1 : 1;
            // equal! sort by games played
            if ($a['games_played'] != $b['games_played'])

  //  this will provide ascending order
                return ($a['games_played'] < $b['games_played']) ? -1 : 1;//-1 for descending order and 1 for ascending order
            // equal! sort by index
            return ($a['index'] < $b['index']) ? -1 : 1;
        });
    
        //return $ranks;
        //return array_keys($ranks);
       return array_keys($ranks)[$rank-1];// zero th index is the ranked one player so we have to minus $rank -1 $rank is pass by the function playerRank(1))
       
    }*/

    public function playerRank($rank)
    {
        $ranks = $this->standings;
        uasort($ranks, function ($a,$b)
        {
            if($a['score'] != $b['score'])
            {
                return ($a['score'] > $b['score']) ? -1 :1;
            }
            if($a['games_played'] != $b['games_played'])
            {
                return ($a['games_played'] < $b['games_played']) ? -1 :1; 
            }
          return  ($a['index'] < $b['index']) ? -1 :1;
        }
    );

        
        return array_keys($ranks)[$rank-1];
    }
}

$table = new LeagueTable(array('Mike', 'Chris', 'Arnold'));
$table->recordResult('Mike', 2);
$table->recordResult('Mike', 3);
$table->recordResult('Arnold', 5);
$table->recordResult('Chris', 5);
echo "<pre>";
print_r($table->playerRank(1));

/*function cmp($a, $b)
{
echo "$a\n";
echo "$b\n";
echo "<br>";
    if ($a == $b) {
        //return 0;
    }
   //return ($a < $b) ? -1 : 1;// this will provide ascending order
   //return ($a < $b) ? 1 : -1;// this will provide descending order
    return ($a > $b) ? -1 : 1;// this will provide descending order
  // return ($a > $b) ? 1 : -1;// this will provide ascending order
}


$a = array(3, 2, 5, 6, 1);

usort($a, "cmp");

foreach ($a as $key => $value) {
    echo ": $value\n";
}*/