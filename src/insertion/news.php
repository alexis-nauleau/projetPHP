<?php
use App\Classes\News;
use Doctrine\ORM\EntityManager;


require_once dirname(__DIR__)."/../bootstrap.php";
require_once dirname(__FILE__)."/jsonToPhp/index.php";
//////////////////////////////
//pour que les insertions fonctionnent il faut masquer le constructeur dans la classe news
//Dans les 3 blocs j'ai appelé la variable france, mais ça n'a aucune incidence
////////////////////////////////////////////////
//insertion de France
// foreach ($dataPhpFrance as $object) {
//     $france = new News();
//     $france->setTitle($object->title);
//     $france->setDescription($object->description);
//     $france->setPubDate($object->pubDate);
//     $france->setLink($object->link);
//     $france->setGuid($object->guid);
//     $france->setEnclosure($object->enclosure);

//     $entityManager->persist($france);
// }
// $entityManager->flush();



//insertion de monde
// foreach ($dataPhplemonde as $object) {
//     $france = new News();
//     $france->setTitle($object->title);
//     $france->setDescription($object->description);
//     $france->setPubDate($object->pubDate);
//     $france->setLink($object->link);
//     $france->setGuid($object->guid);
//     $france->setEnclosure($object->enclosure);

//     $entityManager->persist($france);
// }
// $entityManager->flush();


//insertion de Symfony
// foreach ($dataPhpSymfony as $object) {
//     $france = new News();
//     $france->setTitle($object->title);
//     $france->setDescription($object->description);
//     $france->setPubDate($object->pubDate);
//     $france->setLink($object->link);
//     $france->setGuid($object->guid);
//     $france->setEnclosure($object->enclosure);

//      $france->setCreator($object->creator);
//     $france->setComments($object->comments);

//     $entityManager->persist($france);
// }
// $entityManager->flush();








