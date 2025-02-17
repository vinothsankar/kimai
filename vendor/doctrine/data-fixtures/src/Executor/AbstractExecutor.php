<?php

declare(strict_types=1);

namespace Doctrine\Common\DataFixtures\Executor;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\Purger\PurgerInterface;
use Doctrine\Common\DataFixtures\ReferenceRepository;
use Doctrine\Common\DataFixtures\SharedFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Exception;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerAwareTrait;

use function get_debug_type;
use function sprintf;

/**
 * Abstract fixture executor.
 *
 * @internal since 1.8.0
 */
abstract class AbstractExecutor implements LoggerAwareInterface
{
    use LoggerAwareTrait;

    /**
     * Purger instance for purging database before loading data fixtures
     */
    protected PurgerInterface|null $purger = null;

    /**
     * Fixture reference repository
     */
    protected ReferenceRepository $referenceRepository;

    public function __construct(ObjectManager $manager)
    {
        $this->referenceRepository = new ReferenceRepository($manager);
    }

    public function getReferenceRepository(): ReferenceRepository
    {
        return $this->referenceRepository;
    }

    public function setReferenceRepository(ReferenceRepository $referenceRepository): void
    {
        $this->referenceRepository = $referenceRepository;
    }

    /**
     * Sets the Purger instance to use for this executor instance.
     */
    public function setPurger(PurgerInterface $purger): void
    {
        $this->purger = $purger;
    }

    public function getPurger(): PurgerInterface
    {
        return $this->purger;
    }

    /**
     * Load a fixture with the given persistence manager.
     */
    public function load(ObjectManager $manager, FixtureInterface $fixture): void
    {
        if ($this->logger) {
            $prefix = '';
            if ($fixture instanceof OrderedFixtureInterface) {
                $prefix = sprintf('[%d] ', $fixture->getOrder());
            }

            $this->logger->debug('loading ' . $prefix . get_debug_type($fixture));
        }

        // additionally pass the instance of reference repository to shared fixtures
        if ($fixture instanceof SharedFixtureInterface) {
            $fixture->setReferenceRepository($this->referenceRepository);
        }

        $fixture->load($manager);
        $manager->clear();
    }

    /**
     * Purges the database before loading.
     *
     * @throws Exception if the purger is not defined.
     */
    public function purge(): void
    {
        if ($this->purger === null) {
            throw new Exception(
                PurgerInterface::class .
                 ' instance is required if you want to purge the database before loading your data fixtures.',
            );
        }

        $this->logger?->debug('purging database');

        $this->purger->purge();
    }

    /**
     * Executes the given array of data fixtures.
     *
     * @param FixtureInterface[] $fixtures Array of fixtures to execute.
     * @param bool               $append   Whether to append the data fixtures or purge the database before loading.
     */
    abstract public function execute(array $fixtures, bool $append = false): void;
}
