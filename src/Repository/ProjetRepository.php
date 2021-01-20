<?php

namespace App\Repository;

use App\Data\SearchData;
use App\Entity\Projet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @method Projet|null find($id, $lockMode = null, $lockVersion = null)
 * @method Projet|null findOneBy(array $criteria, array $orderBy = null)
 * @method Projet[]    findAll()
 * @method Projet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjetRepository extends ServiceEntityRepository
{
    /**
     * @var PaginatorInterface
     */
    private $paginator;

    public function __construct(ManagerRegistry $registry, PaginatorInterface $paginator)
    {
        parent::__construct($registry, Projet::class);
        $this->paginator = $paginator;
    }

    /**
     * Get all the projects order by date and with a max result of 6
     * @return Projet[]
     */
    public function findLatest(): array
    {

        return $this->createQueryBuilder('p')
            ->orderBy('p.created_at', 'DESC')
            ->setMaxResults(6)
            ->getQuery()
            ->getResult();
    }


    /**
     * Get all the projects order by date and with a max result of 6
     * @return Projet[]
     */
    public function findViewest(): array
    {

        return $this->createQueryBuilder('p')
            ->orderBy('p.views', 'DESC')
            ->setMaxResults(6)
            ->getQuery()
            ->getResult();
    }


    /**
     * @param SearchData $search
     * @return PaginationInterface
     */
    public function findSearch(SearchData $search): PaginationInterface
    {

        $query = $this->getSearchQuery($search)->getQuery();

        return $this->paginator->paginate($query, $search->page, 12);

    }


    private function getSearchQuery(SearchData $search): QueryBuilder
    {

        $query = $this
            ->createQueryBuilder('p')
            ->select('tag', 'p')
            ->orderBy('p.created_at', 'DESC')
            ->join('p.tags', 'tag');


        if (!empty($search->Tags)) {
            $query = $query
                ->andWhere('tag.id IN (:Tags)')
                ->setParameter('Tags', $search->Tags);
        }

        return $query;

    }


}
