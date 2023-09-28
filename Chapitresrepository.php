<?php
function findAllChapitres($chapitre): array
{
    $entityManager = $this->getEntityManager();

    $query = $entityManager->createQuery(
        'SELECT u
        FROM App\Entity\Chapitre u
        WHERE u.chapitre = :chapitre
        ORDER BY u.chapitre ASC'
    )->setParameter('chapitre', $chapitre);

    return $query->getResult();
}
?>
