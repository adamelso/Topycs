<?php

namespace spec\Topycs\Repository;

use Doctrine\ORM\AbstractQuery;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\ORM\QueryBuilder;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Topycs\Entity\CategoryInterface;

class ThreadRepositorySpec extends ObjectBehavior
{
    function let(
        EntityManager $em,
        ClassMetadata $class
    ) {
        $this->beConstructedWith($em, $class);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Topycs\Repository\ThreadRepository');
    }
    
    function it_creates_query_builder_correctly(
        EntityManager $em,
        QueryBuilder $qb
    ) {
        $em->createQueryBuilder()->willReturn($qb);

        $qb->select('t')->willReturn($qb);
        $qb->from(null, 't')->willReturn($qb);

        $qb->addOrderBy('t.isPinned', 'DESC')->willReturn($qb);
        $qb->addOrderBy('t.createdAt', 'DESC')->willReturn($qb);
        
        $this->createQueryBuilder('t');
    }
    
    function it_finds_by_category(
        QueryBuilder $qb, 
        EntityManager $em,
        AbstractQuery $query,
        CategoryInterface $category
    ) {
        $em->createQueryBuilder()->willReturn($qb);

        $qb->select('t')->willReturn($qb);
        $qb->from(null, 't')->willReturn($qb);

        $qb->addOrderBy('t.isPinned', 'DESC')->willReturn($qb);
        $qb->addOrderBy('t.createdAt', 'DESC')->willReturn($qb);
        
        $qb->getQuery()->willReturn($query);
        $query->getResult()->willReturn([]);
        
        $result = $this->findByCategory($category);
        $result->shouldBeAnInstanceOf('Topycs\Entity\Collection\ThreadCollection');
    }
    
    function it_finds_latest(
        QueryBuilder $qb,
        EntityManager $em,
        AbstractQuery $query
    ) {
        $em->createQueryBuilder()->willReturn($qb);

        $qb->select('t')->willReturn($qb);
        $qb->from(null, 't')->willReturn($qb);

        $qb->addOrderBy('t.isPinned', 'DESC')->willReturn($qb);
        $qb->addOrderBy('t.createdAt', 'DESC')->willReturn($qb);

        $qb->getQuery()->willReturn($query);
        $query->getResult()->willReturn([]);

        $result = $this->findLatest();
        $result->shouldBeAnInstanceOf('Topycs\Entity\Collection\ThreadCollection');
    }
}
