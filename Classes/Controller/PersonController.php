<?php

declare(strict_types=1);

namespace Wdb\WdbContact\Controller;


/**
 * This file is part of the "Contact" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 David Bruchmann <david.bruchmann@gmail.com>, Webdevelopment Barlian
 */

/**
 * PersonController
 */
class PersonController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * personRepository
     *
     * @var \Wdb\WdbContact\Domain\Repository\PersonRepository
     */
    protected $personRepository = null;

    /**
     * @param \Wdb\WdbContact\Domain\Repository\PersonRepository $personRepository
     */
    public function injectPersonRepository(\Wdb\WdbContact\Domain\Repository\PersonRepository $personRepository)
    {
        $this->personRepository = $personRepository;
    }

    /**
     * action list
     *
     * @return string|object|null|void
     */
    public function listAction()
    {
        $persons = $this->personRepository->findAll();
        $this->view->assign('persons', $persons);
    }

    /**
     * action show
     *
     * @param \Wdb\WdbContact\Domain\Model\Person $person
     * @return string|object|null|void
     */
    public function showAction(\Wdb\WdbContact\Domain\Model\Person $person)
    {
        $this->view->assign('person', $person);
    }
}
