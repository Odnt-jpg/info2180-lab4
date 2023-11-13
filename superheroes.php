<?php
header("Access-Control-Allow-Origin: *");
$superheroes = [
    [
        "id" => 1,
        "name" => "Steve Rogers",
        "alias" => "Captain America",
        "biography" => "Recipient of the Super-Soldier serum, World War II hero Steve Rogers fights for American ideals as one of the world’s mightiest heroes and the leader of the Avengers.",
        "img" => "captain_america.jpg",
    ],
    [
        "id" => 2,
        "name" => "Tony Stark",
        "alias" => "Ironman",
        "biography" => "Genius. Billionaire. Playboy. Philanthropist. Tony Stark's confidence is only matched by his high-flying abilities as the hero called Iron Man.",
        "img" => "ironman.jpg",
    ],
    [
        "id" => 3,
        "name" => "Peter Parker",
        "alias" => "Spiderman",
        "biography" => "Bitten by a radioactive spider, Miles Morales’ arachnid abilities give him amazing powers he uses to help others, while his personal life continues to offer plenty of obstacles.",
        "img" => "spiderman.jpg",
    ],
    [
        "id" => 4,
        "name" => "Carol Danvers",
        "alias" => "Captain Marvel",
        "biography" => "Carol Danvers becomes one of the universe's most powerful heroes when Earth is caught in the middle of a galactic war between two alien races.",
        "img" => "captain_marvel.jpg",
    ],
    [
        "id" => 5,
        "name" => "Natasha Romanov",
        "alias" => "Black Widow",
        "biography" => "Despite super spy Natasha Romanoff’s checkered past, she’s become one of S.H.I.E.L.D.’s most deadly assassins and a frequent member of the Avengers.",
        "img" => "black_widow.jpg",
    ],
    [
        "id" => 6,
        "name" => "Bruce Banner",
        "alias" => "Hulk",
        "biography" => "Dr. Bruce Banner lives a life caught between the soft-spoken scientist he’s always been and the uncontrollable green monster powered by his rage.",
        "img" => "hulk.jpg",
    ],
    [
        "id" => 7,
        "name" => "Clint Barton",
        "alias" => "Hawkeye",
        "biography" => "A master marksman and longtime friend of Black Widow, Clint Barton serves as the Avengers’ amazing archer.",
        "img" => "hawkeye.jpg",
    ],
    [
        "id" => 8,
        "name" => "T'challa",
        "alias" => "Black Panther",
        "biography" => "T’Challa is the king of the secretive and highly advanced African nation of Wakanda - as well as the powerful warrior known as the Black Panther.",
        "img" => "black_panther.jpg",
    ],
    [
        "id" => 9,
        "name" => "Thor Odinson",
        "alias" => "Thor",
        "biography" => "The son of Odin uses his mighty abilities as the God of Thunder to protect his home Asgard and planet Earth alike.",
        "img" => "thor.jpg",
    ],
    [
        "id" => 10,
        "name" => "Wanda Maximoff",
        "alias" => "Scarlet Witch",
        "biography" => "Notably powerful, Wanda Maximoff has fought both against and with the Avengers, attempting to hone her abilities and do what she believes is right to help the world.",
        "img" => "scarlet_witch.jpg",  ], 
];
$searchQuery = isset($_GET['query']) ? $_GET['query'] : '';

$foundHeroes = [];
foreach ($superheroes as $hero) {
    if (stripos($hero['alias'], $searchQuery) !== false) {
        $foundHeroes[] = $hero;
    }
}

header('Content-Type: application/json');
echo json_encode($foundHeroes);

?>

