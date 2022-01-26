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
 * OrganizationController
 */
class OrganizationController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * organizationRepository
     *
     * @var \Wdb\WdbContact\Domain\Repository\OrganizationRepository
     */
    protected $organizationRepository = null;

    /**
     * @param \Wdb\WdbContact\Domain\Repository\OrganizationRepository $organizationRepository
     */
    public function injectOrganizationRepository(\Wdb\WdbContact\Domain\Repository\OrganizationRepository $organizationRepository)
    {
        $this->organizationRepository = $organizationRepository;
    }

    /**
     * action list
     *
     * @return string|object|null|void
     */
    public function listAction()
    {
        $organizations = $this->organizationRepository->findAll();
        $this->view->assign('organizations', $organizations);
    }

    /**
     * action show
     *
     * @param \Wdb\WdbContact\Domain\Model\Organization $organization
     * @return string|object|null|void
     */
    public function showAction(\Wdb\WdbContact\Domain\Model\Organization $organization)
    {
        $this->view->assign('organization', $organization);
    }
}
